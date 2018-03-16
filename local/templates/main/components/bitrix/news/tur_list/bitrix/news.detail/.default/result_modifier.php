<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \WM\IBlock\Element,
    \WM\IBlock\Section;

\Bitrix\Main\Loader::includeModule('iblock');

//set top slider photo
if (!empty($arResult['PROPERTIES']['SLIDER_PHOTO']['VALUE'])) {
    $arResult['PROPERTIES']['SLIDER_PHOTO']['VALUE_SRC'] = array();
    foreach ($arResult['PROPERTIES']['SLIDER_PHOTO']['VALUE'] as $imgId)
        $arResult['PROPERTIES']['SLIDER_PHOTO']['VALUE_SRC'][] = \CFile::GetPath($imgId);
}

//set gallery photo
if (!empty($arResult['PROPERTIES']['GALLERY_PHOTO']['VALUE'])) {
    $arResult['PROPERTIES']['GALLERY_PHOTO']['VALUE_SRC'] = array();
    foreach ($arResult['PROPERTIES']['GALLERY_PHOTO']['VALUE'] as $imgId)
        $arResult['PROPERTIES']['GALLERY_PHOTO']['VALUE_SRC'][] = \CFile::GetPath($imgId);
}

//set full programm
if (!empty($arResult['PROPERTIES']['FULL_PROGRAMM']['VALUE'])) {
    $arResult['PROPERTIES']['FULL_PROGRAMM']['VALUE_SRC'] = '';
    if (!empty($arResult['PROPERTIES']['FULL_PROGRAMM']['VALUE']))
        $arResult['PROPERTIES']['FULL_PROGRAMM']['VALUE_SRC'] = \CFile::GetPath($arResult['PROPERTIES']['FULL_PROGRAMM']['VALUE']);
}

//set tour programms
$arResult['PROGRAMMS'] = array();
if (!empty($arResult['PROPERTIES']['PROGRAMMS']['VALUE'])) {
    $arResult['PROGRAMMS'] = \WM\IBlock\Element::getList($arResult['PROPERTIES']['PROGRAMMS']['LINK_IBLOCK_ID'], array(
        'arSelect' => array('ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'PROPERTY_ADDITIONAL_TEXT', 'PROPERTY_ADDITIONAL_TITLE', 'PROPERTY_TEXT_BEFORE', 'PROPERTY_TEXT_AFTER'),
        'filter' => array('ID' => $arResult['PROPERTIES']['PROGRAMMS']['VALUE'], 'ACTIVE' => 'Y'),
    ));
    foreach ($arResult['PROGRAMMS'] as $k => $programm)
        $arResult['PROGRAMMS'][$k]['PICTURE_SRC'] = empty($programm['PREVIEW_PICTURE']) ? null : \CFile::GetPath($programm['PREVIEW_PICTURE']);

    $iCount = null;
    $iCount = count($arResult['PROPERTIES']['PROGRAMMS']['VALUE']);
    $iCount--;
    for ($i = 0; $i <= $iCount; $i++) {
        $iIdElement = $arResult['PROPERTIES']['PROGRAMMS']['VALUE'][$i];
        $res = CIBlockElement::GetProperty($arResult['PROPERTIES']['PROGRAMMS']['LINK_IBLOCK_ID'], $iIdElement, "sort", "asc", array());
        while ($row = $res->Fetch()) {
            if (!empty($row['VALUE']['TEXT']) && $row['VALUE']['TYPE'] === 'HTML')
                $arResult['SPOILER_TEXT'][$iIdElement][$row['CODE']][] = $row['VALUE']['TEXT'];
            if (!empty($row['VALUE']) && empty($row['VALUE']['TYPE']))
                $arResult['SPOILER_TEXT'][$iIdElement][$row['CODE']][] = $row['VALUE'];
        }
    }
}

//set similar tours
$arResult['SIMILAR_TOURS'] = array();
if (!empty($arResult['PROPERTIES']['SIMILAR_TOURS']['VALUE'])) {
    $arResult['SIMILAR_TOURS'] = Element::getList($arResult['PROPERTIES']['SIMILAR_TOURS']['LINK_IBLOCK_ID'], array(
        'arSelect' => array(
            'ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL',
            'PROPERTY_PRICE', 'PROPERTY_DAY', 'PROPERTY_NIGHT', 'PROPERTY_DISCOUNT', 'PROPERTY_HEADER'
        ),
        'filter' => array('ID' => $arResult['PROPERTIES']['SIMILAR_TOURS']['VALUE'], 'ACTIVE' => 'Y'),
    ));
    foreach ($arResult['SIMILAR_TOURS'] as $k => $tour) {
        $arResult['SIMILAR_TOURS'][$k]['PICTURE_SRC'] = empty($tour['PREVIEW_PICTURE']) ? null : \CFile::GetPath($tour['PREVIEW_PICTURE']);
    }
}

/*
//set hotels list
$arResult['HOTELS'] = \WM\IBlock\Element::getList(6, array(
    'arSelect' => array('ID', 'NAME'),
));

//set transports list
$arResult['TRANSPORTS'] = array();
$res = \CIBlockPropertyEnum::GetList(array(), array('CODE' => 'TRANSPORT'));
while($row = $res->Fetch())
    $arResult['TRANSPORTS'][$row['ID']] = $row;
*/

//set room types list
$arResult['ROOM_TYPES'] = array();
$res = \CIBlockPropertyEnum::GetList(array('ID' => 'ASC'), array('CODE' => 'ROOM_TYPE'));
while ($row = $res->Fetch())
    $arResult['ROOM_TYPES'][$row['ID']] = $row;

if (!empty($arResult['PROPERTIES']['ROOMS']['VALUE'])) {
    $rooms = Element::getList($arResult['PROPERTIES']['ROOMS']['LINK_IBLOCK_ID'], array(
        'arSelect' => array('ID', 'IBLOCK_SECTION_ID'),
        'filter' => array('ID' => $arResult['PROPERTIES']['ROOMS']['VALUE'], 'ACTIVE' => 'Y')
    ));
    $arResult['HOTELS'] = array();
    foreach ($rooms as $room)
        $arResult['HOTELS'][$room['IBLOCK_SECTION_ID']] = array();

    $arResult['HOTELS'] = Section::getList($arResult['PROPERTIES']['ROOMS']['LINK_IBLOCK_ID'], array(
        'filter' => array('ID' => array_keys($arResult['HOTELS']), 'ACTIVE' => 'Y'),
        'arSelect' => array('ID', 'NAME'),
    ));
}
$arResult['SHOW_PRICE_TAB'] = in_array('b91548713cbe4fa84982a865986f14bc', $arResult['PROPERTIES']['VIEW']['VALUE_XML_ID']);
$arResult['SHOW_GROUP_TAB'] = in_array('e87bc94a378315b528f42eacd270304a', $arResult['PROPERTIES']['VIEW']['VALUE_XML_ID']);
$arResult['TABS_FIVE_ITEMS'] = !($arResult['SHOW_PRICE_TAB'] && $arResult['SHOW_GROUP_TAB']);

if(!empty($arResult['PROPERTIES']['DATE']['VALUE']) && !empty($arResult['PROPERTIES']['DAYS_COUNT']['VALUE']))
{
    $modify = '+' . ($arResult['PROPERTIES']['DAYS_COUNT']['VALUE'] - 1) . ' day';
    $obj = $dates = array();
    $toDay = strtotime('now');

    foreach($arResult['PROPERTIES']['DATE']['VALUE'] as $date)
    {
        if(!($tmp = DateTime::createFromFormat('d.m.Y', $date)) || $tmp->getTimestamp() < $toDay)
            continue;

        $tmp = $tmp->modify($modify)->format('d.m.Y');
        $dates[] = $date;
        $dates[] = $tmp;
        $obj[] = array('start' => $date, 'end' => $tmp);
    }
    if(!empty($dates))
    {
        $dates = array_unique($dates);
        usort($dates, function($x, $y) {
            $date1 = strtotime($x);
            $date2 = strtotime($y);
        
            return $date1 < $date2 ? -1: 1;
        });
        $arResult['MIN_DATE'] = current($dates);
        $arResult['MAX_DATE'] = end($dates);
        $arResult['DATES'] = json_encode($obj);
    }
}