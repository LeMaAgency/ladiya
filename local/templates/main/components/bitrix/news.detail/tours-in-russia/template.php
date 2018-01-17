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

<? if(!empty($arResult['PROPERTIES']['ELEM_HEAD_PICTURE']['VALUE'])):?>
    <? $this->SetViewTarget('head_pic');?>
    <?echo "style=\"background-image:url(".CFile::GetPath($arResult['PROPERTIES']['ELEM_HEAD_PICTURE']['VALUE']).")\""?>
    <? $this->EndViewTarget();?>
<?endif;?>

<div class="text__block__wrap">
    <div class="container">
        <div class="text__block">
            <? if ($arResult['PROPERTIES']['SCRIPT']['~VALUE']['TEXT']):
                echo $arResult['PROPERTIES']['SCRIPT']['~VALUE']['TEXT'];
            endif ?>
        </div>
    </div>
</div>