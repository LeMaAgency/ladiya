<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


$allOptions = array();
$places = array();
$arFilter = array("IBLOCK_ID"=>"23");
$arSelectFields = array("ID","NAME");
$places = CIBlockElement::GetList(
    array(),
    $arFilter,
    false,
    array(),
    $arSelectFields
);
while($ob = $places->GetNextElement())
{
    $arResult["DESTINATION_POINTS"][] = $ob->GetFields();
}