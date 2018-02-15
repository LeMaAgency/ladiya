<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

if(CModule::IncludeModule("iblock"))
{

    $IBLOCK_ID = 30; //Инфоблок с номерами гостиниц
    
    foreach($arResult["ITEMS"] as $key=>$arItem)
    {
        //Получение раздела инфоблока "Номера гостиниц", чье польовательское поле UF_HOTEL хранит ID текущей гостиницы.
        $hotelID = $arItem["ID"]; // ID текущей гостиницы
        $arOrder = Array();
        $arSelect = Array("ID", "NAME", "IBLOCK_ID", "UF_HOTEL");
        $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y","UF_HOTEL" =>$hotelID);// происходит фильтрация раздлов по полю UF_HOTEL
        $res = CIBlockSection::GetList($arOrder, $arFilter, false, $arSelect,false );
        while($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();
            $sectionID  =(int)$arFields['ID']; //Записывется ID нужного раздела инфоблока "гостиницы"

        }


        //Получение элементов из этого раздела
        $arOrder = Array();
        $arSelect = Array("ID", "NAME", "IBLOCK_ID");
        $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y","SECTION_ID"=>$sectionID);
        $res = CIBlockElement::GetList($arOrder, $arFilter, false, false ,$arSelect);

        while($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields(); // Получение полей элемента
            $arProps = $ob->GetProperties();//Получение своиств элемента
            $arFields["PROPS"] = $arProps;
            $arResult["ITEMS"][$key]["PROPERTIES"]["ALL_ROOMS"][] = $arFields; //Для гостиницы записываются все комнаты и их свойства

        }
        
        $arResult["ITEMS"][$key]["PROPERTIES"]["ROOMS_COUNT"] = count($arItem["ALL_ROOMS"]);//Количество комнат у гостиницы 
        
        //Для каждой гостиницы создается массив всех цен всех ее номеров.
        foreach($arResult["ITEMS"][$key]["PROPERTIES"]["ALL_ROOMS"] as $room)
        {
            $arResult["ITEMS"][$key]["PROPERTIES"]["ALL_PRICES"][] = (int)$room["PROPS"]["ALL_ROOM_PRICE"]["VALUE"];
            $arResult["ITEMS"][$key]["PROPERTIES"]["ALL_PRICES"][] = (int)$room["PROPS"]["PRICE"]["VALUE"];
            $arResult["ITEMS"][$key]["PROPERTIES"]["ALL_PRICES"][] = (int)$room["PROPS"]["PRICE_EXTRA_SPACE"]["VALUE"];
        }
        
        //Записывается самая низка цена из всех номеров из всех цен номеров.
        $arResult["ITEMS"][$key]["PROPERTIES"]["MIN_PRICE"] = min($arResult["ITEMS"][$key]["PROPERTIES"]["ALL_PRICES"]);
        
    }  
}

