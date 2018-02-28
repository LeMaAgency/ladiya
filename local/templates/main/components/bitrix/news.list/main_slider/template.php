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
<ul class="slider carousel-inner">
    <?
    $count = 0;
    $first = true;
    foreach($arResult["ITEMS"] as $arItem):
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
        <li class="item<?if($first){$first=false;?> active<?}?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="item-block">
                <span class="image" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>');"></span>
                <?if (!empty($arItem['PREVIEW_TEXT'])) { ?><span class="description"><?=$arItem['PREVIEW_TEXT']?></span><? } ?>
            </div>
        </li>
        <? $count++;?>
    <?endforeach;?>
</ul>
<?if($count>1):?>
    <a class="slider-control left" href="#slideshow" data-slide="prev">
        <span class="fa fa-angle-left"></span>
    </a>
    <a class="slider-control right" href="#slideshow" data-slide="next">
        <span class="fa fa-angle-right"></span>
    </a>
<?endif;?>
<ul class="carousel-indicators">
    <?
    $first = true;
    for ($i = 0 ; $i < $count ; $i++) { ?>
    <li data-target="#slideshow" data-slide-to="<?= $i ?>" <?if($first){$first=false;?>class="active"<?}?>></li>
    <? } ?>
</ul>
