<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);

?>

<? $this->SetViewTarget('head_pic');?>
    <?echo "style=\"background-image:url(".CFile::GetPath($arResult['PROPERTIES']['ELEM_HEAD_PICTURE']['VALUE']).")\""?>
    <?echo "id=\"".$this->GetEditAreaId($arResult['ID'])."\""?>
<? $this->EndViewTarget();?>
    <div class="container">
        <div class="text__block">
            <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>
                <img
                        class="detail_picture"
                        border="0"
                        src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                        width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>"
                        height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>"
                        alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                        title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
                />
            <? endif ?>
            <? if ($arResult["DETAIL_TEXT"]): ?>
                <? echo $arResult["DETAIL_TEXT"]; ?>
            <? endif ?>
        </div>
    </div>
