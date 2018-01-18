<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use \WM\Common\Helper;

//Is POST data sent ?
empty($_POST) && exit;

//set rules & fields for form
$form = new \WM\Forms\AjaxForm(array(
        array('name', 'required', array('message' => 'Имя и фамилия обязательны к заполнению')),
        array('phone', 'required', array('message' => 'Телефон обязателен к заполнению')),
        array('phone', 'phone', array('message' => 'Телефон должен быть в формате +7 (999) 666-33-11')),
        //array('section', 'required', array('message' => 'Раздел обязателен к заполнению')),
        //array('work_conditions', 'required', array('message' => 'Условия работы обязательны к заполнению')),
        //array('delivery_conditions', 'required', array('message' => 'Условия доставки обязательны к заполнению')),
        //array('pay_conditions', 'required', array('message' => 'Условия оплаты обязательны к заполнению')),
        //array('discounts', 'required', array('message' => 'Скидки обязательны к заполнению')),
        array('privacy', 'required', array('message' => 'Вы не согласились с условиями')),
    ),
    $_POST
);
//check form fields
if($form->validate())
{
    //REQUEST_EDIT_LINK

    $status = $form->formActionFull(
        //iblock id
        26,
        //iblock add params
        array(
            'NAME' => Helper::enc($form->getField('name')),
            'PROPERTY_VALUES' => array(
                'PHONE' => $form->getField('phone'),
                'DATE' => $form->getField('date'),
                'HOTEL_NAME' => $form->getField('hotel_name'),
                'ROOM_TYPE' => $form->getField('room_type'),
                'COST' => $form->getField('cost'),
            ),
            'ACTIVE' => 'N',
        ),
        //email event name
        'TOUR_ORDER_REQUEST',
        //email send params
        array(
            'PHONE' => $form->getField('phone'),
            'DATE' => $form->getField('date'),
            'HOTEL_NAME' => $form->getField('hotel_name'),
            'ROOM_TYPE' => $form->getField('room_type'),
            'COST' => $form->getField('cost'),
        )
    );

    echo json_encode($status ? array('success' => true) : array('errors' => $form->getErrors()));
}
else
    echo json_encode(array('errors' => $form->getErrors()));