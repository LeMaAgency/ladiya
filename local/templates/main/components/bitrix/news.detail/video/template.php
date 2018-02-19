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
<div class="text__block__wrap">
    <div class="container">
        <div class="text__block">
            <div class="catalog__list catalog__list_3">
                
                <? if(!empty($arResult['PROPERTIES']['ELEM_HEAD_PICTURE']['VALUE'])):?>
                    <? $this->SetViewTarget('detail_head_pic');?>
                        <?=CFile::GetPath($arResult['PROPERTIES']['ELEM_HEAD_PICTURE']['VALUE']);?>
                    <? $this->EndViewTarget();?>
                <?endif;?>
                
                <? foreach ($arResult['PROPERTIES']['LINK_TO_VIDEO']['VALUE'] as $key=>$arLinkVideo): ?>
                <?$iCodeYoutubeVideo='';?>
                <?if(stristr($arLinkVideo,'youtu.be')){
                    $iCodeYoutubeVideo = str_replace('/','',strrchr($arLinkVideo,'/'));
                    }
                if(stristr($arLinkVideo,'youtube.com')){
                    $iCodeYoutubeVideo = str_replace('=','',stristr($arLinkVideo,'='));
                }      
                $descriptionCode = $key;
                //$arImg = \CFile::GetPath($arImg);
                $arImg = !empty($iCodeYoutubeVideo) ? 'http://img.youtube.com/vi/'.$iCodeYoutubeVideo."/sddefault.jpg" : "/YouTube.jpg"; ?>
                <a href="<?= $arLinkVideo; ?>" data-fancybox="video" data-caption="<?=$arResult['PROPERTIES']['LINK_TO_VIDEO']['DESCRIPTION'][$descriptionCode]?>" class="catalog__list__item">
                    <div class="catalog__list__item__img" style="background-image: url('<?=$arImg; ?>');">
                        <? if(!empty($arResult['PROPERTIES']['LINK_TO_VIDEO']['DESCRIPTION'][$descriptionCode])):?>
                            <div class="catalog__list__item__img__title">
                                <?=$arResult['PROPERTIES']['LINK_TO_VIDEO']['DESCRIPTION'][$descriptionCode]?>
                            </div>
                        <? endif;?>
                        <div class="catalog__list__item__img__wrap">
                            <div class="catalog__list__item__img__wrap__table">
                                <div class="catalog__list__item__img__wrap__table__cell">
                                    <div class="catalog__list__item__img__wrap__title">
                                        ПОСМОТРЕТЬ
                                    </div>
                                    <span class="catalog__list__item__img__wrap__text"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <?endforeach;?>
            </div>
        </div>
    </div>
</div>