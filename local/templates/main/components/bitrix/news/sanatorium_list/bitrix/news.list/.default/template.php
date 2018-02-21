<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

use Bitrix\Main\Localization\Loc,
    WM\Common\Helper;

$this->setFrameMode(true);

Loc::loadMessages(__FILE__);

$strEditLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$strDeleteLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$confirmDelete = array('CONFIRM' => \GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'));

$foundCnt = (int) $arResult['NAV_RESULT']->NavRecordCount;
?>
<div class="col-xs-12 col-md-8 col-lg-8 results">
    <div class="row">
        <div class="col-xs-12">
            <div class="head">

                <div class="text">
                    <? if (!empty($arResult["ITEMS"])) : ?>
                        <p>
                            <?=Helper::pluralize($foundCnt, array(
                                Loc::getMessage('CT_HOTEL_SEARCH_FOUND_ONE_TITLE'),
                                Loc::getMessage('CT_HOTEL_SEARCH_FOUND_TWO_TITLE'),
                                Loc::getMessage('CT_HOTEL_SEARCH_FOUND_MORE_TITLE'),
                            ));?>
                            <?=Helper::pluralizeN($foundCnt, array(
                                Loc::getMessage('CT_HOTEL_ONE'),
                                Loc::getMessage('CT_HOTEL_TWO'),
                                Loc::getMessage('CT_HOTEL_MORE'),
                            ));?>
                        </p>
                    <? else: ?>
                        <p><?=Loc::getMessage('CT_BNL_SEARCH_DONT_HOTELS');?></p>
                    <? endif; ?>
                </div>

                <div class="buttons hidden-xs">
                    <button class="list">
                        <span></span>
                        <span></span>
                    </button>
                    <a href="<?=$APPLICATION->GetCurPageParam('VIEW=1', array('VIEW'));?>">
                        <button class="grid">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="catalog__list catalog__list_one">

    <? foreach($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
        ?>
        <div class="catalog__list__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="catalog__list__item__img" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC'];?>)">
                <!-- <? /* if ($arItem['PROPERTIES']['DISCOUNT']['VALUE']) : */ ?>
                                <div class="discount">-<? /*= $arItem['PROPERTIES']['DISCOUNT']['VALUE'] */ ?>%</div>
                            --><? /* endif; */ ?>
                <div class="catalog__list__item__img__title">
                    <?= $arItem['NAME']; ?>
                </div>
            </div>

            <div class="catalog__list__item__inf">

                <? if ($arItem['PROPERTIES']['ADDRESS']['VALUE']) : ?>
                    <div class="catalog__list__item__inf__text"><?= $arItem['PROPERTIES']['ADDRESS']['VALUE']; ?></div>
                <? endif; ?>
                <? if ($arItem['PREVIEW_TEXT']) : ?>
                    <p class="catalog__list__item__inf__descriptions"><?= $arItem['PREVIEW_TEXT']; ?></p>
                <? endif; ?>
                <div class="catalog__list__item__inf__footer">
                    <div class="catalog__list__item__inf__price">
                        <? if(Helper::propFilled('PRICE', $arItem)) : ?>
                            <?=Loc::getMessage('CT_BNL_FROM');?>
                            <?=Helper::escPropValue('PRICE', $arItem);?>
                            <?=Loc::getMessage('CT_BNL_RUB');?>
                        <? endif; ?>
                    </div>
                </div>
                <div class="catalog__list__item__inf__btn">
                    <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="button"><?=Loc::getMessage('CT_BNL_MORE_INFO');?></a>
                </div>
            </div>
        </div>
    <? endforeach; ?>
    </div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"];?>
    <?endif;?>
</div>
