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
?>
<? if(!empty($arResult['DISPLAY_PROPERTIES']['ELEM_HEAD_PICTURE'])):?>
    <? $this->SetViewTarget('detail_head_pic');?>
        <?=$arResult['DISPLAY_PROPERTIES']['ELEM_HEAD_PICTURE']['FILE_VALUE']['SRC']?>
    <? $this->EndViewTarget();?>
<?endif;?>
<div class="text__block__wrap">
    <div class="container">
        <div class="text__block">
            <? if ($arResult["DETAIL_TEXT"]): ?>
                <? echo $arResult["DETAIL_TEXT"]; ?>
            <? endif ?>
        </div>
    </div>
</div>
