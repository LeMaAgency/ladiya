<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

$arResult['TOUR_ID'] = null;

if(!empty($arParams['FILTER_NAME']))
{
    global ${$arParams['FILTER_NAME']};
    if(!empty(${$arParams['FILTER_NAME']}['=PROPERTY_TOUR.ID']))
        $arResult['TOUR_ID'] = ${$arParams['FILTER_NAME']}['=PROPERTY_TOUR.ID'];
}