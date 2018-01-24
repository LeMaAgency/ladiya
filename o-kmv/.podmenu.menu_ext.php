<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

    if(CModule::IncludeModule("iblock"))
        {

$IBLOCK_ID = 15;    

$arOrder = Array();
$arSelect = Array("ID", "NAME", "IBLOCK_ID", "SECTION_PAGE_URL","UF_ADD_IN_SUBMENU");
$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y","!UF_ADD_IN_SUBMENU"=>false);
$res = CIBlockSection::GetList($arOrder, $arFilter, false, $arSelect,false );

    while($ob = $res->GetNextElement())
    {
    $arFields = $ob->GetFields();           
    $aMenuLinksExt[] = Array(
                $arFields['NAME'],
                $arFields['SECTION_PAGE_URL'],
                Array(),
                Array(),
                ""
                );
    
    }        
    
        }    

 $aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);

?>