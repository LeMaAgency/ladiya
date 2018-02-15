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
<section class="lad-videoreviews">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrapper">
                    <div class="videoreviews">
                        <h2><?= $arResult['NAME']; ?></h2>
                        <ul class="video slider__tem__index">
                            <? foreach ($arResult['ITEMS'] as $arItem):
                                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
                                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
                                ?>
                                <?$iCodeYoutubeVideo = '';?>
                                <!--We get the video ID from the URL to further insert preview image of this video-->
                                <? if (stristr($arItem['PROPERTIES']['LINK']['VALUE'], 'youtu.be')) {
                                    $iCodeYoutubeVideo = str_replace('/', '', strrchr($arItem['PROPERTIES']['LINK']['VALUE'], '/'));
                                }
                                if (stristr($arItem['PROPERTIES']['LINK']['VALUE'], 'youtube.com')) {
                                    $iCodeYoutubeVideo = str_replace('=', '', stristr($arItem['PROPERTIES']['LINK']['VALUE'], '='));
                                }
                                ?>
                                <a href="<?= $arItem['PROPERTIES']['LINK']['VALUE']; ?>" class="video__item" data-fancybox="video-review">
                                    <li class="item">
                                        <div class="item-block">
                                            <? if ($iCodeYoutubeVideo !== '') {
                                                ?>
                                                <span class="image"
                                                      style="background-image: url('http://img.youtube.com/vi/<?= $iCodeYoutubeVideo ?>/sddefault.jpg');"></span>
                                            <? } else {
                                                ?>
                                                <span class="image" style="background-image: url('/YouTube.jpg');"></span>
                                            <? } ?>

                                            <!--<span class="time">4:34</span>-->
                                        </div>
                                    </li>
                                </a>
                            <? endforeach; ?>
                        </ul>
                        <a class="reload" href="#"><?= Loc::getMessage('VIDEO_REVIEWS_ALL'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>