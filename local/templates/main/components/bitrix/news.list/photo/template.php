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
if (empty($arResult['ITEMS']))
    return;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$strEditLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$strDeleteLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$confirmDelete = array('CONFIRM' => \GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'));
?>
<div class="container">
    <div class="text__block">
        <div class="catalog__list catalog__list_3">
            <? foreach ($arResult['ITEMS'] as $arItem):
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
                ?>
                
                <? if($arItem['PROPERTIES']['PAGE_HEAD_PICTURE']['VALUE'] == 'true'):?>
                    <? $this->SetViewTarget('head_pic');?>
                        <?
                         $bgImage = CFile::GetPath($arItem['PROPERTIES']['ELEM_HEAD_PICTURE']['VALUE']);
                        echo "style=\"background-image:url(".$bgImage.")\""?>
                        <?echo "id=\"".$this->GetEditAreaId($arItem['ID'])."\""?>
                    <? $this->EndViewTarget();?>
                <?endif;?>
                
                <? if($arItem['PROPERTIES']['PAGE_HEAD_PICTURE']['VALUE']!= 'true'):?>
                    <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" title="<?=$arItem['NAME'];?>" class="catalog__list__item">
                        <div class="catalog__list__item__img" style="background-image: url('<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>');">
                            <div class="catalog__list__item__img__title">
                                <?= $arItem['NAME']; ?>
                            </div>
                            <div class="catalog__list__item__img__wrap">
                                <div class="catalog__list__item__img__wrap__table">
                                    <div class="catalog__list__item__img__wrap__table__cell">
                                        <div class="catalog__list__item__img__wrap__title">
                                            <?= $arItem['NAME']; ?>
                                        </div>
                                        <span class="catalog__list__item__img__wrap__text">
                                            <?= $arItem['PREVIEW_TEXT']; ?>
                                        </span>
                                        <div class="catalog__list__item__img__wrap__btn">
                                            <?=Loc::getMessage('PHOTO_MORE_INFO');?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?endif;?>
            <? endforeach; ?>
        </div>
    </div>
</div>
