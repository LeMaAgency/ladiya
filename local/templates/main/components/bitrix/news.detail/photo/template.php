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
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

?>
<div class="container">
    <div class="text__block">
        <div class="catalog__list catalog__list_3">
            <? if(!empty($arResult['PROPERTIES']['ELEM_HEAD_PICTURE']['VALUE'])):?>
                <? $this->SetViewTarget('detail_head_pic');?>
                    <?=CFile::GetPath($arResult['PROPERTIES']['ELEM_HEAD_PICTURE']['VALUE']);?>
                <? $this->EndViewTarget();?>
            <?endif;?>
            <? foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $key=>$arImg):
                $descriptionCode = $key;
                $arImg = \CFile::GetPath($arImg); ?>
                <a href="<?= $arImg; ?>" data-fancybox="photo" data-caption="<?=$arResult['PROPERTIES']['MORE_PHOTO']['DESCRIPTION'][$descriptionCode]?>" class="catalog__list__item">
                    <div class="catalog__list__item__img" style="background-image: url('<?=$arImg; ?>');">
                        <div class="catalog__list__item__img__title">
                            test
                            <?=htmlspecialchars_decode($arResult['PROPERTIES']['MORE_PHOTO']['DESCRIPTION'][$descriptionCode])?>
                        </div>
                        <div class="catalog__list__item__img__wrap">
                            <div class="catalog__list__item__img__wrap__table">
                                <div class="catalog__list__item__img__wrap__table__cell">
                                    <div class="catalog__list__item__img__wrap__title">
<!--                                            --><?//=$arResult['PROPERTIES']['MORE_PHOTO']['DESCRIPTION'][$descriptionCode]?>
                                       <?=Loc::getMessage('DETAIL_PHOTO_ZOOM');?>
                                    </div>
                                    <span class="catalog__list__item__img__wrap__text"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            <? endforeach; ?>
        </div>
    </div>
</div>