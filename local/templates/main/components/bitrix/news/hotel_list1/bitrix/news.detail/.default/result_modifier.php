<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

if(CModule::IncludeModule("iblock"))
{

    $IBLOCK_ID = 30; //Инфоблок с номерами гостиниц

    //Получение раздела инфоблока, чье польовательское поле UF_HOTEL привязано к гостинице
    $hotelID = $arResult["ID"];
    $arOrder = Array();
    $arSelect = Array("ID", "NAME", "IBLOCK_ID", "UF_HOTEL");
    $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y","UF_HOTEL" =>$hotelID);
    $res = CIBlockSection::GetList($arOrder, $arFilter, false, $arSelect,false );
    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        $hotelID  =(int)$arFields['ID'];

    }



    //Получение элементов из этого раздела
    $arOrder = Array();
    $arSelect = Array("ID", "NAME", "IBLOCK_ID", "PROPERTY_PRICE","PROPERTY_ALL_ROOM_PRICE","PROPERTY_PRICE_EXTRA_SPACE");
    $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y","SECTION_ID"=>$hotelID);
    $res = CIBlockElement::GetList($arOrder, $arFilter, false, false ,$arSelect);

    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        $arResult["ROOMS"] = Array($arFields);

    }
    $arResult["ROOMS_COUNT"] = count($arResult["ROOMS"]); //Количество комнат у гостиницы
}



//Получаем пути картинок галереи по ID
foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $picID)
{
    $arResult['PROPERTIES']['GALLERY']['PATH'][]= CFile::GetPath($picID);
}