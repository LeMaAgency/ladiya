<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

if(CModule::IncludeModule("iblock"))
{

    $IBLOCK_ID = 32; //Инфоблок с номерами санаториев

    //Получение раздела инфоблока, чье польовательское поле UF_SANATORIUM привязано к санаторию
    $sanatoriumID = $arResult["ID"];
    $arOrder = Array();
    $arSelect = Array("ID", "NAME", "IBLOCK_ID", "UF_SANATORIUM");
    $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y","UF_SANATORIUM" =>$sanatoriumID);
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
        $arResult["ROOMS_COUNT"] = count($arResult["ROOMS"]); //Количество комнат у санатория
    }



    //Получение списка инфраструктур санатория
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


    //Получение списка инфраструктур каждого номера санатория
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
//Получаем пути картинок галереи санатория по ID
if(!empty($arResult['PROPERTIES']['GALLERY']['VALUE']))
{
    foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $picID)
    {
        $arResult['PROPERTIES']['GALLERY']['PATH'][]= CFile::GetPath($picID);
    }
}
