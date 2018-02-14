<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use \WM\Common\Helper;

//Is POST data sent ?
isset($_POST['tour_id'], $_POST['hotel'], $_POST['room_type'], $_POST['price_from'], $_POST['price_to'], $_POST['DATE']) || exit;

\Bitrix\Main\Loader::includeModule('iblock');

$res = \WM\IBlock\Element::getList(4, array(
    'filter' => array('ID' => $_POST['tour_id']),
    'select' => array('ID', 'PROPERTY_ROOMS'),
));

$roomsIds = array();
$res = \CIBlockElement::GetProperty(4, (int) $_POST['tour_id'], array(), array('CODE' => 'ROOMS'));
while($row = $res->Fetch())
{
    $roomsIds[] = (int) $row['VALUE'];
}


$datePrices = array();
$res = \CIBlockElement::GetProperty(4, (int) $_POST['tour_id'], array(), array('CODE' => 'DATE'));
while($row = $res->Fetch())
{
    $tmpDates = explode('|', $row['DESCRIPTION']);
    if(!empty($tmpDates) && count($roomsIds) === count($tmpDates))
    {
        $datePrices[$row['VALUE']] = array_combine($roomsIds, $tmpDates);
    }
}

//no dates - no info
if(empty($datePrices))
{
    echo 'Ничего не найдено';
    exit;
}

$curDatePrices = array();
//$curDatePrices = isset($datePrices[$_POST['DATE']]) ? $datePrices[$_POST['DATE']] : current($datePrices);
if(!empty($datePrices[$_POST['DATE']]))
{
    $curDatePrices = $datePrices[$_POST['DATE']];
}

$filter = array('ID' => $roomsIds, 'ACTIVE' => 'Y');

//filter by property ROOM_TYPE
if(!empty($_POST['room_type']))
{
    $filter['PROPERTY_ROOM_TYPE'] = (int) $_POST['room_type'];
}
//filter by property PRICE
if(!empty($_POST['price_from']))
{
    $filter['>=PROPERTY_PRICE'] = $_POST['price_from'];
}
if(!empty($_POST['price_to']))
{
    $filter['<=PROPERTY_PRICE'] = $_POST['price_to'];
}
//filter by section
if(!empty($_POST['hotel']))
{
    $filter['IBLOCK_SECTION_ID'] = (int) $_POST['hotel'];
}

$rooms = \WM\IBlock\Element::getList(7, array(
    'filter' => $filter,
    'arSelect' => array(
        'ID', 'NAME', 'PROPERTY_PRICE', 'PROPERTY_PRICE_ADDITIONAL',
        'PROPERTY_PEOPLE_COUNT', 'PROPERTY_ROOM_TYPE', 'IBLOCK_SECTION_ID'
    ),
));
$sections = array();
foreach($rooms as $roomId => $room)
{
    $sections[$room['IBLOCK_SECTION_ID']] = array();
    foreach($room as $k => $v)
    {
        if($k[0] == '~')
        {
            unset($rooms[$roomId][$k]);
        }
    }
}

$sections = \WM\IBlock\Section::getList(7, array(
    'filter' => array('ID' => array_keys($sections)),
    'arSelect' => array('ID', 'NAME'),
));
foreach($rooms as $roomId => $room)
{
    if(!empty($sections[$room['IBLOCK_SECTION_ID']]['NAME']))
    {
        $rooms[$roomId]['HOTEL_NAME'] = $sections[$room['IBLOCK_SECTION_ID']]['NAME'];
    }
}


if(empty($rooms))
{
    echo 'Ничего не найдено';
    exit;
}
?>
<table>
    <thead>
    <tr>
        <th scope="col">Дата</th>
        <th scope="col">Гостиница</th>
        <th scope="col">Тип номера</th>
        <th scope="col">Стоимость тура на одного человека</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <? if(!empty($curDatePrices)): ?>
        <? foreach($rooms as $roomId => $room): ?>
            <tr data-id="<?=$roomId;?>">
                <td data-label="Дата" class="js-tour-date"><?=Helper::enc($_POST["DATE"]);?></td>
                <td data-label="Гостиница" class="js-tour-hotel"><?=$room['HOTEL_NAME'];?></td>
                <td data-label="Тип номера" class="js-tour-room-type"><?=$room['PROPERTY_ROOM_TYPE_VALUE'];?></td>
                <td data-label="Стоимость тура на одного человека" class="js-tour-cost">
                    <?=$curDatePrices[$roomId];?>
                </td>
                <td data-label="Забронировать">
                    <a href="#popup__form" class="reservation_btn">
                        Забронировать
                    </a>
                </td>
            </tr>
        <? endforeach; ?>
    <? else : ?>
        <?php
        /**
         * Show dates up from today
         */
        $toDay = strtotime('now');
        $i = -1;
        //get first index of start dates abowe today
        foreach($datePrices as $curDate => $info)
        {
            ++$i;
            $tmpDate = (new DateTime($curDate))->getTimestamp();
            if($tmpDate > $toDay)
                break;
        }
        if($i < 0)
            $i = 0;

        //get slice dates
        $tmpDates = array_slice($datePrices, $i, 5);

        foreach($tmpDates as $curDate => $curDatePrices): ?>
            <? foreach($rooms as $roomId => $room): ?>
                <tr data-id="<?=$roomId;?>">
                    <td data-label="Дата" class="js-tour-date"><?=Helper::enc($curDate);?></td>
                    <td data-label="Гостиница" class="js-tour-hotel"><?=$room['HOTEL_NAME'];?></td>
                    <td data-label="Тип номера" class="js-tour-room-type"><?=$room['PROPERTY_ROOM_TYPE_VALUE'];?></td>
                    <td data-label="Стоимость тура на одного человека" class="js-tour-cost">
                        <?=$curDatePrices[$roomId];?>
                    </td>
                    <td data-label="Забронировать">
                        <a href="#popup__form" class="reservation_btn">
                            Забронировать
                        </a>
                    </td>
                </tr>
            <? endforeach; ?>
        <? endforeach; ?>
    <? endif; ?>
    </tbody>
</table>
