<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

    if(CModule::IncludeModule("iblock"))
        {

$IBLOCK_ID = 28;

$arOrder = Array('SORT'=>'ASC');
$arSelect = Array("ID", "NAME", "IBLOCK_ID", "DETAIL_PAGE_URL","PROPERTY_ADD_IN_SUBMENU_VALUE");
$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y","!PROPERTY_ADD_IN_SUBMENU_VALUE"=>false);
$res = CIBlockElement::GetList($arOrder, $arFilter, false, false ,$arSelect);

    while($ob = $res->GetNextElement())
    {
    $arFields = $ob->GetFields();           
    $aMenuLinksExt[] = Array(
                $arFields['NAME'],
                $arFields['DETAIL_PAGE_URL'],
                Array(),
                Array(),
                ""
                );
    
    }        
    
        }    
if(!empty($aMenuLinksExt))
{
    $aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);
}


?>