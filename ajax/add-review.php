<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use \WM\Common\Helper,
    \WM\Seo\GTMFormSubmit;

// Is POST data sent ?
empty($_POST) && exit;

//set rules & fields for form
$form = new \WM\Forms\AjaxForm(array(
    array('name', 'required', array('message' => 'Имя обязательно к заполнению')),
    array('email', 'required', array('message' => 'E-mail обязателен к заполнению')),
    array('email', 'email', array('message' => 'Неверный формат E-mail')),
    array('text', 'required', array('message' => 'Комментарий обязателен к заполнению')),
),
    $_POST
);

//check form fields
if($form->validate())
{
    $status = $form->formActionFull(
    //iblock id
        9,
        //iblock add params
        array(
            'NAME' => Helper::enc($form->getField('name')),
            'PREVIEW_TEXT' => Helper::enc($form->getField('text')),
            'PROPERTY_VALUES' => array(
                'EMAIL' => Helper::enc($form->getField('email')),
                'TOUR' => $form->getField('tour_id'),
            ),
            'ACTIVE' => 'N',
        ),
        //email event name
        'REVIEW_FORM',
        //email send params
        array(
            'AUTHOR' => $form->getField('name'),
            'TEXT' => $form->getField('text'),
            'AUTHOR_EMAIL' => $form->getField('email'),
        )
    );

    if($status)
    {
        $data = array(
            'success' => true,
            'message' => 'Ваш отзыв успешно добавлен и появится после проверки модератором',
            'gtmObject' => GTMFormSubmit::get()->setEvent()->setElementClasses('.js-add-review')->setElements(array(
                $form->getField('name'), $form->getField('email'), $form->getField('text'),
            ))->getResult(),
        );
    }
    else
        $data = array('errors' => $form->getErrors());

    echo json_encode($data);
}
else
    echo json_encode(array('errors' => $form->getErrors()));