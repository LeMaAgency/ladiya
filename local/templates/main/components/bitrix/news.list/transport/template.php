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
<? if (empty($arResult['ITEMS']))
    return;
?>
<section class="content-page">
    <? foreach ($arResult["ITEMS"] as $iKey => $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <? if($arItem['PROPERTIES']['PAGE_HEAD_PICTURE']['VALUE'] == 'true'):?>
            <? $this->SetViewTarget('head_pic');?>
                <?echo "style=\"background-image:url(".$arItem['DISPLAY_PROPERTIES']['ELEM_HEAD_PICTURE']['FILE_VALUE']['SRC'].")\""?>
                <?echo "id=\"".$this->GetEditAreaId($arItem['ID'])."\""?>
            <? $this->EndViewTarget();?>
        <?endif;?>
        <? if($arItem['PROPERTIES']['PAGE_HEAD_PICTURE']['VALUE']!= 'true'):?>
            <div class="transport-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 <?if($iKey%2 == 0){?>reverse<?}?>">
                            <div class="transport-item__img"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arItem['NAME'];?>"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="transport-item__description">
                                <div class="transport-item__description__head"><?=$arItem['NAME'];?></div>
                                <div class="transport-item__description__title"><?=$arItem['PROPERTIES']['TITLE_PREVIEW_DESCRIPTION']['VALUE'];?></div>
                                <p class="transport-item__description__text">
                                    <?=$arItem['PREVIEW_TEXT'];?>
                                </p>
                                <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="item-card__content__more">
                                    <span>
                                        <? if (!empty($arItem['PROPERTIES']['TEXT_BUTTON']['VALUE'])):?>
                                            <?=$arItem['PROPERTIES']['TEXT_BUTTON']['VALUE'];?>
                                        <?else:?>
                                            Читать далее
                                        <?endif;?>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?endif;?>

    <? endforeach; ?>
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <br/><?= $arResult["NAV_STRING"] ?>
    <? endif; ?>
    </div>
</section>
