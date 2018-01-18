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
    <div class="news">
        <div class="news__detail">
            <div class="news__detail__wrap">
                <div class="news__detail__img">
                    <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" class="news__detail__img__control">
                </div>
                <div class="news__detail__title">
                    <span class="news__detail__title__control"><?=$arResult['NAME']?></span>
                </div>
                <div class="news__detail__date">
                    <span class="news__detail__date__control">
                        <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
                            <?=$arResult["DISPLAY_ACTIVE_FROM"]?>
                        <?endif;?>
                    </span>
                </div>
                <div class="news__detail__text">
                    <p class="news__detail__text__control">
                            <?=$arResult["DETAIL_TEXT"];?>
                    </p>
                </div>
                <div class="news__detail__btn">
                    <a href="<?=$arResult['LIST_PAGE_URL']?>" class="button news__detail__btn__control">Назад</a>
                </div>
            </div>
        </div>
    </div>
</div>