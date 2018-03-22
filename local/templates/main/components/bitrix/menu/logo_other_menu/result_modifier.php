<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

    if(CModule::IncludeModule("iblock"))
        {

$IBLOCK_ID = 16;

$arOrder = Array();
$arSelect = Array("ID", "NAME", "IBLOCK_ID", "DETAIL_PAGE_URL","PROPERTY_ADD_IN_SUBMENU_VALUE");
$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y","SECTION_ID"=>12,"!PROPERTY_ADD_IN_SUBMENU_VALUE"=>false);
$res = CIBlockElement::GetList($arOrder, $arFilter, false, false ,$arSelect);

    while($ob = $res->GetNextElement())
    {
    $arFields = $ob->GetFields();           
    $arResult[] = Array( "NAME"=>$arFields['NAME'], "LINK"=>$arFields['DETAIL_PAGE_URL'],"FROM_IBLOCK"=>"Y");
    
    }        
    
        }    

?>