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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>

<section class="content-page">
    <? foreach ($arResult['SECTIONS'] as $ikey=>$arSection): ?>
        <?
        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
        ?>
        <? if ($arSection['SORT']==1):?>
            <? $this->SetViewTarget('head_pic');?>
                <?echo "style=\"background-image:url(".CFile::GetPath($arSection['DETAIL_PICTURE']).")\""?>
                <?echo "id=\"".$this->GetEditAreaId($arSection['ID'])."\""?>
            <? $this->EndViewTarget();?>
        <?endif;?>
        <? if($arSection['SORT']!=1):?>
        <div class="transport-item" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 <?if($ikey%2 == 0){?>reverse<?}?>">
                        <div class="transport-item__img"><img src="<?=$arSection['PICTURE']['SRC'];?>" alt="<?=$arSection['NAME'];?>"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="transport-item__description">
                            <div class="transport-item__description__head"><?=$arSection['NAME'];?></div>
                            <div class="transport-item__description__title"><?=$arSection['PROPERTIES']['TITLE_PREVIEW_DESCRIPTION']['VALUE'];?></div>
                            <p class="transport-item__description__text">
                                <?=$arSection['DESCRIPTION'];?>
                            </p>
                            <a href="<?=$arSection['SECTION_PAGE_URL'];;?>" class="item-card__content__more">
                                <span>Читать далее</span>
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
</section>
