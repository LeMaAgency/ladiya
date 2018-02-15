<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
if(empty($arResult['ITEMS']))
    return;

use \WM\Common\Helper,
    \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$strEditLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$strDeleteLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$confirmDelete = array('CONFIRM' => \GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'));
?>
<div class="catalog__list catalog__list_3 slider__tem__index">
    <? foreach($arResult["ITEMS"] as $arItem):
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
        ?>
        <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="catalog__list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="catalog__list__item__img" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC'];?>');">
                <?/* if(!empty($arItem['PROPERTIES']['DISCOUNT']['VALUE'])): */?><!--
                                <div class="discount">-<?/*=(int) $arItem['PROPERTIES']['DISCOUNT']['VALUE'];*/?>%</div>
                            --><?/* endif; */?>
                <div class="catalog__list__item__img__title"><?=$arItem['NAME'];?></div>
                <div class="catalog__list__item__img__wrap">
                    <div class="catalog__list__item__img__wrap__table">
                        <div class="catalog__list__item__img__wrap__table__cell">
                            <div class="catalog__list__item__img__wrap__title">
                                <?=$arItem['NAME'];?>
                            </div>
                            <span class="catalog__list__item__img__wrap__text">
                                            <?=$arItem['PREVIEW_TEXT'];?>
                                        </span>
                            <div class="catalog__list__item__img__wrap__btn">
                                <?=Loc::getMessage('BEST_OFFER_TOUR_MORE_BTN');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog__list__item__inf">
                <? if(!empty($arItem['PROPERTIES']['HEADER']['VALUE'])): ?>
                    <div class="catalog__list__item__inf__text">
                        <?=$arItem['PROPERTIES']['HEADER']['VALUE'];?>
                    </div>
                <? endif; ?>
                <div class="catalog__list__item__inf__footer">
                    <div class="catalog__list__item__inf__day">
                        <? if(!empty($arItem['PROPERTIES']['DAY']['VALUE'])): ?>
                            <span>
                                        <?=Helper::pluralizeN($arItem['PROPERTIES']['DAY']['VALUE'], array(
                                            Loc::getMessage('BEST_OFFER_TOUR_DAY_ONE'),
                                            Loc::getMessage('BEST_OFFER_TOUR_DAY_TWO'),
                                            Loc::getMessage('BEST_OFFER_TOUR_DAY_MORE'),
                                        ));?>
                                    </span>
                        <? endif; ?>
                        <? if(!empty($arItem['PROPERTIES']['NIGHT']['VALUE'])): ?>
                            <?=Loc::getMessage('BEST_OFFER_TOUR_DAYS_/');?>
                            <span>
                                            <?=Helper::pluralizeN($arItem['PROPERTIES']['NIGHT']['VALUE'], array(
                                                Loc::getMessage('BEST_OFFER_TOUR_NIGHT_ONE'),
                                                Loc::getMessage('BEST_OFFER_TOUR_NIGHT_TWO'),
                                                Loc::getMessage('BEST_OFFER_TOUR_NIGHT_MORE'),
                                            ));?>
                                        </span>
                        <? endif; ?>
                    </div>
                    <? if(!empty($arItem['PROPERTIES']['PRICE']['VALUE'])): ?>
                        <div class="catalog__list__item__inf__price">
                            <?=Loc::getMessage('BEST_OFFER_TOUR_PRICE_FROM');?>
                            <?=number_format($arItem['PROPERTIES']['PRICE']['VALUE'], 0, '', ' ');?>
                            <?=Loc::getMessage('BEST_OFFER_TOUR_PRICE_CURRENCY_1');?>
                        </div>
                    <? endif; ?>
                </div>
            </div>
        </a>
    <? endforeach; ?>    
</div>
<a class="reload" href="/tours/">Все предложения</a>