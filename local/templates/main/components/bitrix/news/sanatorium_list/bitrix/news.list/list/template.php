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
if (empty($arResult["ITEMS"]))
    return;

use \Bitrix\Main\Localization\Loc,
    \WM\Common\Helper;

$this->setFrameMode(true);

$strEditLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$strDeleteLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$confirmDelete = array('CONFIRM' => \GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'));

$foundCnt = (int)$arResult['NAV_RESULT']->NavRecordCount;
?>
<div class="col-xs-12 col-md-8 col-lg-8 results">
    <div class="row">
        <div class="col-xs-12">
            <div class="head">

                <div class="text">
                    <? if (!empty($arResult['ITEMS'])) : ?>
                        <p>
                            <?= Helper::pluralize($foundCnt, array(
                                Loc::getMessage('LIST_HOTEL_SEARCH_FOUND_ONE_TITLE'),
                                Loc::getMessage('LIST_HOTEL_SEARCH_FOUND_MORE_TITLE'),
                                Loc::getMessage('LIST_HOTEL_SEARCH_FOUND_MORE_TITLE'),
                            )); ?>
                            <?= Helper::pluralizeN($foundCnt, array(
                                Loc::getMessage('LIST_HOTEL_TOUR_ONE'),
                                Loc::getMessage('LIST_HOTEL_TOUR_TWO'),
                                Loc::getMessage('LIST_HOTEL_TOUR_MORE'),
                            )); ?>
                        </p>
                    <? else: ?>
                        <p><?= Loc::getMessage('LIST_HOTEL_SEARCH_NOT_FOUND_TITLE'); ?></p>
                    <? endif; ?>
                </div>

                <div class="buttons hidden-xs">
                    <a href="<?= $APPLICATION->GetCurDir() . '?VIEW=0' ?>">
                        <button class="list">
                            <span></span>
                            <span></span>
                        </button>
                    </a>
                    <button class="grid">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

            </div>
        </div>
    </div>

    <div class="row">

        <div id="items" class="col-xs-12 grid">
            <div class="catalog__list">
                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
                    ?>
                    <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>" title="<?= $arItem["NAME"]; ?>" class="catalog__list__item"
                       id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <div class="catalog__list__item__img" style="background-image: url('<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>');">
                            <div class="catalog__list__item__img__title"><?= $arItem["NAME"]; ?></div>
                            <div class="catalog__list__item__img__wrap">
                                <div class="catalog__list__item__img__wrap__table">
                                    <div class="catalog__list__item__img__wrap__table__cell">
                                        <div class="catalog__list__item__img__wrap__title">
                                            <?= $arItem["NAME"]; ?>
                                        </div>
                                        <? if (!empty($arItem['PREVIEW_TEXT'])) : ?>
                                            <span class="catalog__list__item__img__wrap__text">
                                    <?= $arItem["PREVIEW_TEXT"]; ?>
                                </span>
                                        <? endif; ?>
                                        <div class="catalog__list__item__img__wrap__btn">
                                            <?= Loc::getMessage('LIST_HOTEL_SEARCH_MORE_BTN_TITLE'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="catalog__list__item__inf">
                            <? if ($arItem['PROPERTIES']['ADDRESS']['VALUE']) : ?>
                                <div class="catalog__list__item__inf__text">
                                    <?= $arItem['PROPERTIES']['ADDRESS']['VALUE']; ?>
                                </div>
                            <? endif; ?>
                            <div class="catalog__list__item__inf__footer">
                                <div class="catalog__list__item__inf__day">
                                </div>
                                <div class="catalog__list__item__inf__price">
                                    <? if (Helper::propFilled('PRICE', $arItem)) : ?>
                                        <?= Loc::getMessage('LIST_HOTEL_PRICE_FROM'); ?>
                                        <?= Helper::escPropValue('PRICE', $arItem) ?>
                                        <?= Loc::getMessage('LIST_HOTEL_PRICE_RUB'); ?>
                                    <? endif; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                <? endforeach; ?>
            </div>
        </div>

    </div>
</div>