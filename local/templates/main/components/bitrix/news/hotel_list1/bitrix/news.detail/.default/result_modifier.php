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
        $sectionID  =(int)$arFields['ID'];

    }



    //Получение элементов из этого раздела
    if($sectionID!=null && !empty($sectionID))
    {
        $arOrder = Array();
        $arSelect = Array("ID", "NAME", "IBLOCK_ID", "PROPERTY_PRICE","PREVIEW_PICTURE","DETAIL_TEXT");
        $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y","SECTION_ID"=>$sectionID);
        $res = CIBlockElement::GetList($arOrder, $arFilter, false, false ,$arSelect);
        while($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields(); // Получение полей элемента
            $arProps = $ob->GetProperties();//Получение своиств элемента
            $arFields["PROPS"] = $arProps;
            $arResult["ROOMS"][] = $arFields;

        }
        $arResult["ROOMS_COUNT"] = count($arResult["ROOMS"]); //Количество комнат у гостниницы
    }



    //Получение списка инфраструктур гостиницы
    if(!empty($arResult["PROPERTIES"]["INFRASTRUCTURE"]["VALUE"]))
    {
        $arOrder = Array();
        $arSelect = Array("ID", "NAME", "IBLOCK_ID");
        $arFilter = Array("IBLOCK_ID" => 29, "ACTIVE" => "Y", "ID" => $arResult["PROPERTIES"]["INFRASTRUCTURE"]["VALUE"]);
        $res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);

        while ($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
            $arProps = $ob->GetProperties();//Получение своиств элемента
            $arFields["PROPS"] = $arProps;
            $arResult["INFRASTRUCTURE_DETAIL"][] = $arFields;
        }
    }


    //Получение списка инфраструктур каждого номера гостиницы
    if(!empty($arResult["ROOMS"]))
    {
        foreach ($arResult["ROOMS"] as $key=>$room)
        {
            $arOrder = Array();
            $arSelect = Array("ID", "NAME", "IBLOCK_ID");
            $arFilter = Array("IBLOCK_ID" => 29, "ACTIVE" => "Y", "ID" => $room["PROPS"]["INFRASTRUCTURE"]["VALUE"]);
            $res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);

            while ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                $arProps = $ob->GetProperties();//Получение своиств элемента
                $arFields["PROPS"] = $arProps;
                $arResult["ROOMS"][$key]["PROPS"]["INFRASTRUCTURE_DETAIL"][] = $arFields; //Запись своиств инфраструктур
            }
        }
    }
}
//Получаем пути картинок галереи гостиницы по ID
if(!empty($arResult['PROPERTIES']['GALLERY']['VALUE']))
{
    foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $picID)
    {
        $arResult['PROPERTIES']['GALLERY']['PATH'][]= CFile::GetPath($picID);
    }
}