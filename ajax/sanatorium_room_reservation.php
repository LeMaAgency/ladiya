<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use \WM\Common\Helper;

//Is POST data sent ?
empty($_POST) && exit;

//set rules & fields for form
$form = new \WM\Forms\AjaxForm(array(
    array('sanatorium_name', 'required',array('message' => 'Ошибка. ID санатория отсутвует')),
    array('sanatorium_name', 'regex', array('pattern' => '~[0-9]~', 'message' => 'Неправильный формат ID санатория')),
    array('select_room', 'required',array('message' => 'Выберите номер')),
    array('select_room', 'regex', array('pattern' => '~[0-9]~', 'message' => 'Неправильный формат ID номера')),
    array('name_of_customer', 'length', array('min' => 2, 'max' => 50, 'message' => 'Имя должно быть больше {min} и меньше {max} символов')),
    array('name_of_customer', 'regex', array('pattern' => '~^[А-я Ё]+$~iu', 'message' => 'Недопустимые значения')),
    array('phone',  'required',array('message' => 'Введите телефон')),
    array('phone', 'phone', array('message' => 'Телефон должен быть в формате +7 (999) 666-33-11')),
    array('phone',  'length', array('min' => 11, 'max' => 11, 'message' => 'Введите 11 цифр')),
    array('date-arrive', 'required',array('message' => 'Выберите дату заезда')),
    array('date-arrive', 'regex', array('pattern' => '~^(?:3[01]|[12]\\d|0[1-9])\\.(?:0[1-9]|1[0-2])\\.20(?:1[7-9]|[2-9]\\d)$~', 'message' => 'Неправильный формат даты')),
    array('date-departure', 'required',array('message' => 'Выберите дату выезда')),
    array('date-departure', 'regex', array('pattern' => '~^(?:3[01]|[12]\\d|0[1-9])\\.(?:0[1-9]|1[0-2])\\.20(?:1[7-9]|[2-9]\\d)$~', 'message' => 'Неправильный формат даты')),
    array('select_room', 'required',array('message' => 'Выберите номер')),
    array('number_of_guests', 'required',array('message' => 'Введите количество человек')),
    array('number_of_guests', 'regex', array('pattern' => '~[0-9]~', 'message' => 'Вводите только цифры')),
    array('number_of_guests', 'length', array('min' => 1, 'max' => 2, 'message' => 'Не больше двух символов')),

),
    $_POST
);

//check form fields
if($form->validate())
{
    $hotel_name = null;
    $room_name = null;
    if(CModule::IncludeModule("iblock"))
    {
        //Нахождение имени отеля, по пришедшему ID
        $sanatorium  = CIBlockElement::GetByID((int)$_POST["sanatorium_name"]);
        if($ar_res = $sanatorium->GetNext())
        {
            $sanatorium_name = $ar_res["NAME"];
        }

        //Нахождение имени номера отеля, по пришедшему ID
        $room  = CIBlockElement::GetByID((int)$_POST["select_room"]);
        if($ar_res = $room->GetNext())
        {
            $room_name = $ar_res["NAME"];
        }
    }
    $status = $form->formActionFull(
    //iblock id
        37,
        //iblock add params
        array(
            'NAME' => "Бронироване номера",
            'PROPERTY_VALUES' => array(
                'SANATORIUM_NAME' => Helper::enc($sanatorium_name),
                'NAME_OF_CUSTOMER' => Helper::enc($form->getField('name_of_customer')),
                'PHONE' => Helper::enc($form->getField('phone')),
                'DATE_ARRIVE' => Helper::enc($form->getField('date-arrive')),
                'DATE_DEPARTURE' => Helper::enc($form->getField('date-departure')),
                'ROOM_NAME' => Helper::enc($room_name),
                'NUMBER_OF_GUESTS' => Helper::enc($form->getField('number_of_guests')),
            ),
            'ACTIVE' => 'N',
        ),
        //email event name
        'NEW_SANATORIUM_RESERVATION',
        //email send params
        array(
            'SANATORIUM_NAME' => Helper::enc($sanatorium_name),
            'NAME_OF_CUSTOMER' => Helper::enc($form->getField('name_of_customer')),
            'PHONE' => Helper::enc($form->getField('phone')),
            'DATE_ARRIVE' => Helper::enc($form->getField('date-arrive')),
            'DATE_DEPARTURE' => Helper::enc($form->getField('date-departure')),
            'ROOM_NAME' => Helper::enc($room_name),
            'NUMBER_OF_GUESTS' => Helper::enc($form->getField('number_of_guests')),
        )
    );

    echo json_encode($status ? array('success' => true) : array('errors' => $form->getErrors()));
}
else
    echo json_encode(array('errors' => $form->getErrors()));