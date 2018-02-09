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

    <div class="catalog__list hotel__list__one">

    <? foreach($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
        ?>
        
        
        
        <div class="hotel__list___item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="hotel__list___item__img" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC'];?>)">
            
                <!-- <? /* if ($arItem['PROPERTIES']['DISCOUNT']['VALUE']) : */ ?>
                                <div class="discount">-<? /*= $arItem['PROPERTIES']['DISCOUNT']['VALUE'] */ ?>%</div>
                            --><? /* endif; */ ?>
                
            </div>
            <div class="hotel__list___item__inf">
                <div class="hotel__list___item__img__title">
                    <?= $arItem['NAME']; ?>
                    <div class="hotel__list__stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="hotel__list___item__link js-hotel__maps_open">
                    <span>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?=$arItem['PROPERTIES']['CITY']['VALUE'];?>
                        <?=Loc::getMessage('CT_BNL_SHOW_IN_MAP');?>
                    </span>
                    </div>
                </div>
                <div>
                    <? if ($arItem['PREVIEW_TEXT']) : ?>
                        <p class="hotel__list___item__inf__descriptions">
                            <?= $arItem['PREVIEW_TEXT']; ?>
                        </p>
                    <? endif; ?>
                    <div class="hotel__list__infrastruktura">
                        <div class="hotel__list___item__inf__text">
                            <?= Loc::getmessage('CT_BNL_INFRASTRUKTURA'); ?>
                        </div>
                        <span data-title="Душевая комната"><i class="fa fa-bath" aria-hidden="true"></i></span>
                        <span data-title="Бесплатный Wi-Fi"><i class="fa fa-wifi" aria-hidden="true"></i></span>
                        <span data-title="Аптека"><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                    </div>
                </div>                
                <div class="hotel__list___item__inf__footer">
                    <div class="hotel__list___item__inf__price">
                        <? if(Helper::propFilled('PRICE', $arItem)) : ?>
                            <?=Loc::getMessage('CT_BNL_FROM');?>
                            <?=Helper::escPropValue('PRICE', $arItem);?>
                            <?=Loc::getMessage('CT_BNL_RUB');?>
                        <? endif; ?>
                        <div class="price_description"><?=Loc::getMessage('CT_BNL_PRICE_DESCRIPTION');?></div>
                    </div>
                    
                    <div class="hotel__list___item__inf__btn">
                        <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="button"><?=Loc::getMessage('CT_BNL_MORE_INFO');?></a>
                    </div>
                </div>                
            </div>
        </div>
    
    
    
    <? endforeach; ?>
    </div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"];?>
    <?endif;?>
</div>
