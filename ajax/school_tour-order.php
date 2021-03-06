<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use \WM\Common\Helper;

//Is POST data sent ?
empty($_POST) && exit;

//set rules & fields for form
$form = new \WM\Forms\AjaxForm(array(
    array('name', 'required', array('message' => 'Имя обязательно к заполнению')),
    array('phone',  'required',array('message' => 'Введите телефон')),
    array('phone', 'phone', array('message' => 'Телефон должен быть в формате +7 (999) 666-33-11')),
    array('phone',  'length', array('min' => 11, 'max' => 11, 'message' => 'Введите 11 цифр')),
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
        38,
        //iblock add params
        array(
            'NAME' => Helper::enc($form->getField('name')),
            'PROPERTY_VALUES' => array(
                'PHONE' => $form->getField('phone'),
            ),
            'ACTIVE' => 'N',
        ),
        //email event name
        'SCHOOL_TOUR_ORDER_REQUEST',
        //email send params
        array(
            'NAME' => Helper::enc($form->getField('name')),
            'PHONE' => $form->getField('phone'),
        )
    );

    echo json_encode($status ? array('success' => true) : array('errors' => $form->getErrors()));
}
else
    echo json_encode(array('errors' => $form->getErrors()));