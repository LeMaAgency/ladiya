<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use \WM\Common\Helper;

//Is POST data sent ?
empty($_POST) && exit;

//set rules & fields for form
$form = new \WM\Forms\AjaxForm(array(
    array('name', 'length', array('min' => 2, 'max' => 50, 'message' => 'Имя должно быть больше {min} и меньше {max} символов')),
    array('name', 'regex', array('pattern' => '~^[А-я Ё]+$~iu', 'message' => 'Недопустимые значения')),
    array('phone',  'required',array('message' => 'Введите телефон')),
    array('phone', 'phone', array('message' => 'Телефон должен быть в формате +7 (999) 666-33-11')),
    array('phone',  'length', array('min' => 11, 'max' => 11, 'message' => 'Введите 11 цифр')),
    array('email', 'email'),
    array('date-arrive', 'required',array('message' => 'Выберите дату поездки')),
    array('date-arrive', 'regex', array('pattern' => '~^(?:3[01]|[12]\\d|0[1-9])\\.(?:0[1-9]|1[0-2])\\.20(?:1[7-9]|[2-9]\\d)$~', 'message' => 'Неправильный формат даты')),
    array('count-of-seats','required', array('message' => 'Выберите количество мест')),
    array('destination','required', array('message' => 'Выберите место назначения')),
    array('destination','length', array('min' => 2, 'max' => 50, 'message' => 'Не больше 100 символов')),
    array('destination', 'regex', array('pattern' => '~^[А-я 0-9 . , Ё]+$~iu', 'message' => 'Недопустимые значения')),
),
    $_POST
);

//check form fields
if($form->validate())
{
    $status = $form->formActionFull(
    //iblock id
        21,
        //iblock add params
        array(
            'NAME' => 'Заявка на аренду автобуса',
            'PROPERTY_VALUES' => array(
                'NAME' => Helper::enc($form->getField('name')),
                'PHONE' => Helper::enc($form->getField('phone')),
                'EMAIL' => Helper::enc($form->getField('email')),
                'COUNT_OF_SEATS' => Helper::enc($form->getField('count-of-seats')),
                'DESTINATION' => Helper::enc($form->getField('destination')),
                'DATE' => Helper::enc($form->getField('date-arrive')),
                'COMMENT' => Helper::enc($form->getField('comment')),
            ),
            'ACTIVE' => 'N',
        ),
        //email event name
        'NEW_ORDER-RENT_BUS',
        //email send params
        array(
            'NAME' => Helper::enc($form->getField('name')),
            'PHONE' => Helper::enc($form->getField('phone')),
            'EMAIL' => Helper::enc($form->getField('email')),
            'COUNT_OF_SEATS' => Helper::enc($form->getField('count-of-seats')),
            'DESTINATION' => Helper::enc($form->getField('destination')),
            'DATE' => Helper::enc($form->getField('date-arrive')),
            'COMMENT' => Helper::enc($form->getField('comment')),
        )
    );

    echo json_encode($status ? array('success' => true) : array('errors' => $form->getErrors()));
}
else
    echo json_encode(array('errors' => $form->getErrors()));
