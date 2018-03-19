<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

if(CModule::IncludeModule("iblock")) {

    $IBLOCK_ID = 32; //Инфоблок с номерами санаторие

    foreach ($arResult["ITEMS"] as $key => $arItem)
    {
        //Получение раздела инфоблока "Номера санаториев", чье польовательское поле UF_SANATORIUM хранит ID текущего санатория.
        $sanatoriumID = $arItem["ID"]; // ID текущего санатория
        $arOrder = Array();
        $arSelect = Array("ID", "NAME", "IBLOCK_ID", "UF_SANATORIUM");
        $arFilter = Array("IBLOCK_ID" => $IBLOCK_ID, "ACTIVE" => "Y", "UF_SANATORIUM" => $sanatoriumID);// происходит фильтрация раздлов по полю UF_SANATORIUM
        $res = CIBlockSection::GetList($arOrder, $arFilter, false, $arSelect, false);
        while ($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
            $sectionID = (int)$arFields['ID']; //Записывется ID нужного раздела инфоблока "санатории"

        }
        //Получение элементов из этого раздела
        if($sectionID!=null && !empty($sectionID))
        {
            $arOrder = Array();
            $arSelect = Array("ID", "NAME", "IBLOCK_ID");
            $arFilter = Array("IBLOCK_ID" => $IBLOCK_ID, "ACTIVE" => "Y", "SECTION_ID" => $sectionID);
            $res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);

            while ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields(); // Получение полей элемента
                $arProps = $ob->GetProperties();//Получение своиств элемента
                $arFields["PROPS"] = $arProps;
                $arResult["ITEMS"][$key]["PROPERTIES"]["ALL_ROOMS"][] = $arFields; //Для санатория записываются все комнаты и их свойства

            }
            $arResult["ITEMS"][$key]["PROPERTIES"]["ROOMS_COUNT"] = count($arItem["ALL_ROOMS"]);//Количество комнат у санатория
        }


        //Для каждого санатория создается массив всех цен всех ее номеров.
        if(!empty($arResult["ITEMS"][$key]["PROPERTIES"]["ALL_ROOMS"]))
        {
            foreach ($arResult["ITEMS"][$key]["PROPERTIES"]["ALL_ROOMS"] as $room)
            {
                $arResult["ITEMS"][$key]["PROPERTIES"]["ALL_PRICES"][] = (int)$room["PROPS"]["PRICE"]["VALUE"];
            }
            //Записывается самая низка цена из всех номеров из всех цен номеров.
            $arResult["ITEMS"][$key]["PROPERTIES"]["MIN_PRICE"] = min($arResult["ITEMS"][$key]["PROPERTIES"]["ALL_PRICES"]);
        }

        if(!empty($arItem["PROPERTIES"]["INFRASTRUCTURE"]["VALUE"]))
        {
            //Получение своиств инфтраструктур по ID
            $arOrder = Array();
            $arSelect = Array("ID", "NAME", "IBLOCK_ID");
            $arFilter = Array("IBLOCK_ID" => 29, "ACTIVE" => "Y", "ID" => $arItem["PROPERTIES"]["INFRASTRUCTURE"]["VALUE"]);
            $res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);

            while ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                $arProps = $ob->GetProperties();//Получение своиств элемента
                $arFields["PROPS"] = $arProps;
                $arResult["ITEMS"][$key]["PROPERTIES"]["INFRASTRUCTURE_DETAIL"][] = $arFields; //Запись своиств инфраструктур

            }
        }

        //Получение названия города по его ID

        if(!empty($arItem["PROPERTIES"]["CITY"]["VALUE"]))
        {
            $arOrder = Array();
            $arSelect = Array("ID", "NAME", "IBLOCK_ID");
            $arFilter = Array("IBLOCK_ID" => 35, "ACTIVE" => "Y", "ID" => $arItem["PROPERTIES"]["CITY"]["VALUE"]);
            $res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);

            while ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                $arResult["ITEMS"][$key]["PROPERTIES"]["CITY"]["INFO"] = $arFields; //Запись своиств инфраструктур

            }
        }

    }
}

