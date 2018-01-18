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
?>
<div class="container">
    <div class="news__list">
        <?if($arParams["DISPLAY_TOP_PAGER"]):?>
            <?=$arResult["NAV_STRING"]?><br />
        <?endif;?>
        <?foreach ($arResult['ITEMS'] as $item):?>
            <?
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
        <div class="news__list__item" id="<?=$this->GetEditAreaId($item['ID']);?>">
            <div class="news__list__item__wrap">
                <div class="news__list__item__wrap__left">
                    <div class="news__list__item__img">
                        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($item["PREVIEW_PICTURE"])):?>
                            <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$item['NAME']?>" class="news__list__item__img__control">
                        <?endif;?>
                    </div>
                </div>
                <div class="news__list__item__wrap__right">
                    <div class="news__list__item__title">
                        <span class="news__list__item__title__control"><?=mb_strimwidth($item['NAME'],0,40,"...")?></span>
                    </div>
                    <div class="news__list__item__date">
                        <span class="news__list__item__date__control">
                            <?if($arParams["DISPLAY_DATE"]!="N" && $item["DISPLAY_ACTIVE_FROM"]):?>
                                <?=$item["DISPLAY_ACTIVE_FROM"]?>
                            <?endif;?>
                        </span>
                    </div>
                    <div class="news__list__item__text">
                        <p class="news__list__item__text__control">
                            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $item["PREVIEW_TEXT"]):?>
                                <?=mb_strimwidth($item["PREVIEW_TEXT"],0,173,'...');?>
                            <?endif;?>
                        </p>
                    </div>
                    <div class="news__list__item__btn">
                        <a href="<?=$item["DETAIL_PAGE_URL"]?>" class="button news__list__item__btn__control">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        <?endforeach;?>
    </div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
</div>