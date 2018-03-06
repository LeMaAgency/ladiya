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

use \WM\Common\Helper,
    \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$this->setFrameMode(true);
?>
<div class="tour-detail">

    <section class="container-fluid tour-detail_photos">
        <div class="row">

            <div class="carousel">

                <div class="container">
                    <div class="title">
                        <h3><?= $arResult['NAME'] ?></h3>
                        <p>
                            <?= Helper::pluralizeN(Helper::propValue('DAY', $arResult), array(
                                Loc::getMessage('TOUR_DAY_ONE'),
                                Loc::getMessage('TOUR_DAY_TWO'),
                                Loc::getMessage('TOUR_DAY_MORE'),
                            )); ?>
                            <?= Loc::getMessage('TOUR_DAYS_/'); ?>
                            <?= Helper::pluralizeN(Helper::propValue('NIGHT', $arResult), array(
                                Loc::getMessage('TOUR_NIGHT_ONE'),
                                Loc::getMessage('TOUR_NIGHT_TWO'),
                                Loc::getMessage('TOUR_NIGHT_MORE'),
                            )); ?>
                        </p>
                    </div>
                    <div class="location">
                        <p><?= $arResult['SECTION']['PATH'][0]['NAME']; ?></p>
                    </div>
                </div>

                <? if (!empty($arResult['PROPERTIES']['SLIDER_PHOTO']['VALUE_SRC'])): ?>
                    <div class="carousel-inner" role="listbox">
                        <? foreach ($arResult['PROPERTIES']['SLIDER_PHOTO']['VALUE_SRC'] as $src): ?>
                            <div class="item">
                                <div class="img" style="background-image: url('<?= $src; ?>');"></div>
                            </div>
                        <? endforeach; ?>
                    </div>
                <? endif; ?>
            </div>

        </div>
    </section>
    <section class="container page__program__detail__download">
        <div class="row">
            <a href="<?=$arResult['PROPERTIES']['FULL_PROGRAMM']['VALUE_SRC']?>" target="_blank" title="Скачать программу тура"
               class="page__program__detail__download__btn"><?= Loc::getMessage('TOUR_DOWNLOAD_PDF'); ?></a>
        </div>
    </section>
    <section class="container tour-detail_tabs">
        <div class="row">
            <div class="tour-detail_tabs__wrapper">

                <!-- TAB BUTTONS -->
                <ul class="tablist main<? if ($arResult['TABS_FIVE_ITEMS']) { ?> js-five-items<? } ?>" role="tablist">
                    <li role="presentation"><a href="#description" aria-controls="description" role="tab"
                                               data-toggle="tab"><?= Loc::getMessage('TOUR_DESCRIPTION_TITLE'); ?></a>
                    </li>
                    <li role="presentation">
                        <a href="#program" aria-controls="program" role="tab" data-toggle="tab"><?= Loc::getMessage('TOUR_PROGRAMM_TITLE'); ?></a>
                    </li>
                    <? if ($arResult['SHOW_PRICE_TAB']): ?>
                        <li role="presentation">
                            <a href="#price" aria-controls="price" role="tab" data-toggle="tab"><?= Loc::getMessage('TOUR_PRICE_TITLE'); ?></a>
                        </li>
                    <? endif; ?>
                    <? if ($arResult['SHOW_GROUP_TAB']): ?>
                        <li role="presentation">
                            <a href="#group" aria-controls="group" role="tab" data-toggle="tab"><?= Loc::getMessage('TOUR_GROUP_TITLE'); ?></a>
                        </li>
                    <? endif; ?>
                    <li role="presentation">
                        <a href="#jotting" aria-controls="jotting" role="tab" data-toggle="tab"><?= Loc::getMessage('TOUR_MEMO_TITLE'); ?></a>
                    </li>
                    <li role="presentation">
                        <a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab"><?= Loc::getMessage('TOUR_REVIEWS_TITLE'); ?></a>
                    </li>
                </ul>

                <div class="bg">
                    <!-- ICONS -->
                    <div class="icons">
                        <? if (Helper::propFilled('PRICE', $arResult)): ?>
                            <div class="ruble">
                                <h5><?= $arResult['PROPERTIES']['PRICE']['NAME']; ?></h5>
                                <p><?= Loc::getMessage('TOUR_PRICE_FROM'); ?> <?= Helper::escPropValue('PRICE', $arResult); ?> <?= Loc::getMessage('TOUR_PRICE_CURRENCY_2'); ?></p>
                            </div>
                        <? endif; ?>

                        <? if (Helper::propFilled('TYPE', $arResult)): ?>
                            <div class="backpack">
                                <h5><?= $arResult['PROPERTIES']['TYPE']['NAME']; ?></h5>
                                <p><?= Helper::escPropValue('TYPE', $arResult); ?></p>
                            </div>
                        <? endif; ?>

                        <? if (Helper::propFilled('DAY', $arResult)): ?>
                            <div class="calendar">
                                <h5><?= $arResult['PROPERTIES']['DAYS_COUNT']['NAME']; ?></h5>
                                <p>
                                    <?= Helper::pluralizeN(Helper::propValue('DAYS_COUNT', $arResult), array(
                                        Loc::getMessage('TOUR_DAY_ONE'),
                                        Loc::getMessage('TOUR_DAY_TWO'),
                                        Loc::getMessage('TOUR_DAY_MORE'),
                                    )); ?>
                                </p>
                            </div>
                        <? endif; ?>

                        <? if (Helper::propFilled('TRANSPORT', $arResult)): ?>
                            <div class="bus">
                                <h5><?= $arResult['PROPERTIES']['TRANSPORT']['NAME']; ?></h5>
                                <p><?= Helper::escPropValue('TRANSPORT', $arResult); ?></p>
                            </div>
                        <? endif; ?>
                    </div>

                    <!-- TAB CONTENT -->
                    <div class="tab-content main">

                        <div role="tabpanel" class="tab-pane" id="description">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 text">

                                    <?= $arResult['DETAIL_TEXT']; ?>

                                </div>
                                <div class="col-xs-12 col-md-6">

                                    <? if (Helper::propFilled('ROUTE', $arResult)): ?>
                                        <h5><b><?= Loc::getMessage('TOUR_ROUTE_TITLE'); ?>: <?= Helper::escPropValue('ROUTE', $arResult); ?></b></h5>
                                    <? endif; ?>

                                    <iframe src="<?=$arResult["PROPERTIES"]["GOOGLE_ROUT_LINK"]["VALUE"]?>" width="640" height="480"></iframe>

                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="program">
                            <div class="row">
                                <div class="col-xs-12">
                                    <? if (!empty($arResult['PROGRAMMS'])): ?>
                                        <?
                                        $first = true;
                                        ?>
                                        <!-- TAB BUTTONS -->
                                        <? /*
                                        <ul class="tablist inner" role="tablist">
                                            <? foreach ($arResult['PROGRAMMS'] as $id => $programm): ?>
                                                <?
                                                if ($first) {
                                                    $first = false;
                                                    $class = 'active';
                                                } else
                                                    $class = '';
                                                ?>
                                                <li role="presentation" class="<?= $class ?>">
                                                    <a href="#p<?= $id; ?>" aria-controls="p<?= $id; ?>" role="tab"
                                                       data-toggle="tab"><?= $programm['NAME']; ?></a>
                                                </li>

                                            <? endforeach; ?>
                                        </ul>

                                        */ ?>

                                        <?
                                        $first = true;
                                        ?>

                                        <!-- TAB CONTENT -->
                                        <div class="tab-content inner">
                                                <div role="tabpanel" class="tab-pane active" >
                                                   
                                                    <?$spoiler_number = 0 ; //Переменная для спойлеров
                                                    foreach ($arResult['PROGRAMMS'] as $id => $programm):?>
                                                        <div class="text page__program__detail__list__item">
                                                            <div class="page__program__detail__list__item__title">
                                                                <?= $programm['NAME']; ?>
                                                                <div class="page__program__detail__list__item__title_underline"></div>
                                                            </div>
                                                            <div class="page__program__detail__list__item__text">
                                                                <?= $programm['PREVIEW_TEXT']; ?>
    
                                                                <? $arSpoilerText = $arResult['SPOILER_TEXT'][$id];
                                                                if ($arSpoilerText): ?>
                                                                    <? $iCount = count($arSpoilerText['ADDITIONAL_TITLE']);
                                                                    for ($i = 0; $i <= $iCount; $i++):?>
                                                                        <? if (
                                                                            !empty($arSpoilerText['ADDITIONAL_TITLE'][$i])
                                                                        ): ?>
                                                                            <? if ($arSpoilerText['TEXT_BEFORE'][$i]): ?>
                                                                                <p>
                                                                                    <?= $arSpoilerText['TEXT_BEFORE'][$i]; ?>
                                                                                </p>
                                                                            <? endif; ?>
                                                                            <p class="core__switch__btn">
                                                                                <?if (!empty($arSpoilerText['ADDITIONAL_TEXT'][$i])):?>
                                                                                    <span class="core__switch__btn__text"
                                                                                <?else:?>
                                                                                    <span class="core__switch__btn__text-noarrow"
                                                                                <?endif;?>
                                                                                      data-js-core-switch-element="core__switch__btn__hidden_<?= $spoiler_number ?>_1">
                                                                                      <?= $arSpoilerText['ADDITIONAL_TITLE'][$i]; ?>
                                                                                </span>
                                                                                <?if (!empty($arSpoilerText['ADDITIONAL_TEXT'][$i])):?>
                                                                                    <div class="core__switch__btn__hidden core__switch__btn__hidden_<?= $spoiler_number++ ?>_1">
                                                                                        <?=htmlspecialcharsBack($arSpoilerText['ADDITIONAL_TEXT'][$i]);?>
                                                                                    </div>
                                                                                <?else:?>
                                                                                    <?$spoiler_number++;?>
                                                                                <?endif;?>
                                                                            </p>
                                                                        <? endif; ?>
                                                                        <? if ($arSpoilerText['TEXT_AFTER'][$i]): ?>
                                                                            <p>
                                                                                <?= $arSpoilerText['TEXT_AFTER'][$i]; ?>
                                                                            </p>
                                                                        <? endif; ?>
                                                                    <? endfor; ?>
                                                                <? endif; ?>
    
                                                            </div>
                                                        </div>
                                                        
                                                        <? endforeach;?>
                                                </div>
                                                
                                            
                                        </div>

                                    <? endif; ?>

                                </div>
                            </div>
                        </div>

                        <? if ($arResult['SHOW_PRICE_TAB']): ?>
                            <div role="tabpanel" class="tab-pane" id="price">
                                <form action="/ajax/find-tour-room.php" class="filter js-ajax-filter" method="post">
                                    <? if($arResult["PROPERTIES"]["TYPE"]["VALUE"] != "школьный"):?>
                                        <input type="hidden" name="tour_id" value="<?= $arResult['ID']; ?>">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-4">
                                                <div class="input">
                                                    <label for="room_type">Дата</label><br>
                                                    <input
                                                          <?if(!empty($arResult['MIN_DATE'])){?>data-min-date="<?=$arResult['MIN_DATE'];?>"<?}?>
                                                          <?if(!empty($arResult['MAX_DATE'])){?>data-max-date="<?=$arResult['MAX_DATE'];?>"<?}?>
                                                          <?if(!empty($arResult['DATES'])){?>data-dates='<?=$arResult['DATES'];?>'<?}?>
                                                          class="input" name="DATE" placeholder="Дата начала тура"/>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="input">
                                                    <? if (!empty($arResult['HOTELS'])): ?>
                                                        <label for="hotel"><?= Loc::getMessage('TOUR_HOTEL_TITLE'); ?></label>
                                                        <select name="hotel" id="hotel">
                                                            <option value=""
                                                                    selected="selected"><?= Loc::getMessage('TOUR_SELECT_EMPTY_VALUE'); ?></option>
                                                            <? foreach ($arResult['HOTELS'] as $id => $hotel): ?>
                                                                <option value="<?= $id; ?>"><?= $hotel['NAME']; ?></option>
                                                            <? endforeach; ?>
                                                        </select>
                                                    <? endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="input">
                                                    <? if (!empty($arResult['ROOM_TYPES'])): ?>
                                                        <label for="room_type"><?= Loc::getMessage('TOUR_ROOM_TYPE_TITLE'); ?></label>
                                                        <select name="room_type" id="room_type">
                                                            <option value=""
                                                                    selected="selected"><?= Loc::getMessage('TOUR_SELECT_EMPTY_VALUE'); ?></option>
                                                            <? foreach ($arResult['ROOM_TYPES'] as $id => $roomType): ?>
                                                                <option value="<?= $id; ?>"><?= $roomType['VALUE']; ?></option>
                                                            <? endforeach; ?>
                                                        </select>
                                                    <? endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="calculate" type="submit"><?= Loc::getMessage('TOUR_SEARCH_BTN_TITLE'); ?></button>
                                        <div class="disclaimer"><?= Loc::getMessage('TOUR_SEARCH_HINT_TITLE'); ?></div>
                                        <div class="js-ajax-filter-search"></div>
                                    <?else:?>
                                        <? if(!empty($arResult["PROPERTIES"]["SCOOL_TOUR_TABLE"]["VALUE"])):?>
                                            <div class="custom_table">
                                                <?=htmlspecialcharsback($arResult["PROPERTIES"]["SCOOL_TOUR_TABLE"]["VALUE"]["TEXT"])?>
                                            </div>
                                        <?else:?>
                                            --Таблица с ценами не найдена--
                                        <?endif;?>
                                    <?endif;?>
                                    <div class="page__program__detail__list__item__text" style="margin-top:20px">
                                        <? if (!empty($arResult['PROPERTIES']['IN_PRICE_CONTAINS']['VALUE']['TEXT'])): ?>
                                            <p class="core__switch__btn">
                                                <div class="core__switch__btn__text active"
                                                      data-js-core-switch-element="core__switch__btn__hidden_price_1">
                                                    <?= Loc::getMessage('TOUR_IN_PRICE_CONTAINS_TITLE'); ?>
                                                </div>
                                                <div class="core__switch__btn__hidden active core__switch__btn__hidden_price_1">
                                                    <?= htmlspecialcharsback($arResult['PROPERTIES']['IN_PRICE_CONTAINS']['VALUE']['TEXT']); ?>
                                                </div>
                                            </p>
                                        <? endif; ?>
                                        <? if (!empty($arResult['PROPERTIES']['ALSO_PAYS']['VALUE']['TEXT'])): ?>
                                            <p class="core__switch__btn">
                                                <div class="core__switch__btn__text active"
                                                      data-js-core-switch-element="core__switch__btn__hidden_price_2">
                                                    <?= Loc::getMessage('TOUR_ALSO_PAYS_TITLE'); ?>
                                                </div>
                                                <div class="core__switch__btn__hidden active core__switch__btn__hidden_price_2">
                                                    <?= htmlspecialcharsback($arResult['PROPERTIES']['ALSO_PAYS']['VALUE']['TEXT']); ?>
                                                </div>
                                            </p>
                                        <? endif; ?>
                                        <? if (!empty($arResult['PROPERTIES']['ADDITIONAL_INFO']['VALUE']['TEXT'])): ?>
                                            <p class="core__switch__btn">
                                                <div class="core__switch__btn__text active"
                                                      data-js-core-switch-element="core__switch__btn__hidden_price_3">
                                                    <?= Loc::getMessage('TOUR_ADDITIONAL_INFO_TITLE'); ?>
                                                </div>
                                                <div class="core__switch__btn__hidden active core__switch__btn__hidden_price_3">
                                                    <?= htmlspecialcharsback($arResult['PROPERTIES']['ADDITIONAL_INFO']['VALUE']['TEXT']); ?>
                                                </div>
                                            </p>
                                        <? endif; ?>
                                    </div>
                                </form>


                            </div>
                        <? endif; ?>

                        <div role="tabpanel" class="tab-pane" id="jotting">
                            <div class="row">
                                <div class="col-xs-12">
                                    <?= htmlspecialcharsback($arResult['PROPERTIES']['TOUR_MEMO']['VALUE']['TEXT']); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="reviews">
                            <? $APPLICATION->IncludeComponent('bitrix:news.list', 'reviews', array(
                                'DISPLAY_DATE' => 'Y',
                                'DISPLAY_NAME' => 'Y',
                                'DISPLAY_PICTURE' => 'Y',
                                'DISPLAY_PREVIEW_TEXT' => 'Y',
                                'AJAX_MODE' => 'N',
                                'IBLOCK_TYPE' => 'content',
                                'IBLOCK_ID' => '9',
                                'NEWS_COUNT' => '20',
                                'SORT_BY1' => 'ACTIVE_FROM',
                                'SORT_ORDER1' => 'DESC',
                                'SORT_BY2' => 'SORT',
                                'SORT_ORDER2' => 'ASC',
                                'FILTER_NAME' => 'tourReviewFilter',
                                'FIELD_CODE' => array('DATE_CREATE'),
                                'PROPERTY_CODE' => array('EMAIL', 'TOUR'),
                                'CHECK_DATES' => 'Y',
                                'DETAIL_URL' => '',
                                'PREVIEW_TRUNCATE_LEN' => '',
                                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                                'SET_TITLE' => 'N',
                                'SET_BROWSER_TITLE' => 'N',
                                'SET_META_KEYWORDS' => 'N',
                                'SET_META_DESCRIPTION' => 'N',
                                'SET_LAST_MODIFIED' => 'N',
                                'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                                'ADD_SECTIONS_CHAIN' => 'N',
                                'HIDE_LINK_WHEN_NO_DETAIL' => 'Y',
                                'PARENT_SECTION' => '',
                                'PARENT_SECTION_CODE' => '',
                                'INCLUDE_SUBSECTIONS' => 'Y',
                                'CACHE_TYPE' => 'N',
                                'CACHE_TIME' => '36000000',
                                'CACHE_FILTER' => 'Y',
                                'CACHE_GROUPS' => 'N',
                                'DISPLAY_TOP_PAGER' => 'Y',
                                'DISPLAY_BOTTOM_PAGER' => 'Y',
                                'PAGER_TITLE' => 'Отзывы',
                                'PAGER_SHOW_ALWAYS' => 'N',
                                'PAGER_TEMPLATE' => '',
                                'PAGER_DESC_NUMBERING' => 'N',
                                'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                                'PAGER_SHOW_ALL' => 'N',
                                'PAGER_BASE_LINK_ENABLE' => 'N',
                                'SET_STATUS_404' => 'N',
                                'SHOW_404' => 'N',
                                'MESSAGE_404' => '',
                                'PAGER_BASE_LINK' => '',
                                'PAGER_PARAMS_NAME' => 'arrPager',
                                'AJAX_OPTION_JUMP' => 'N',
                                'AJAX_OPTION_STYLE' => 'Y',
                                'AJAX_OPTION_HISTORY' => 'N',
                                'AJAX_OPTION_ADDITIONAL' => '',
                            )); ?>
                        </div>
                        <? if ($arResult['SHOW_GROUP_TAB']): ?>
                            <div role="tabpanel" class="tab-pane" id="group">
                                <div class="custom_table">
                                    <?=htmlspecialcharsback($arResult['PROPERTIES']['GROUP_TEXT']['VALUE']['TEXT']);?>
                                </div>
                            </div>
                        <? endif; ?>
                    </div>
                </div>

                <div class="row addtional-buttons">
                    <div class="col-xs-12 col-sm-6">
                        <a href="#price" id="bron__btn" class="booking"><?= Loc::getMessage('TOUR_ORDER_BTN_TITLE'); ?></a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href="#popup__form__agenci" data-fancybox class="full_program">Бронирование для агентств</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container tour-detail_gallery">

        <div class="row">
            <div class="col-xs-12">
                <div class="title">
                    <h3><?= Loc::getMessage('TOUR_GALLERY_TITLE'); ?></h3>
                </div>
            </div>
        </div>

        <div class="row gallery__photo__slider">
            <? if (!empty($arResult['PROPERTIES']['GALLERY_PHOTO']['VALUE_SRC'])): ?>
                <? foreach ($arResult['PROPERTIES']['GALLERY_PHOTO']['VALUE_SRC'] as $src): ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 item">
                        <a href="<?= $src; ?>" data-fancybox="photo">
                            <span style="background-image: url('<?= $src; ?>');"></span>
                        </a>
                    </div>
                <? endforeach; ?>
            <? endif; ?>
        </div>
        <div class="line__bred">
            <div class="line__bred__point"></div>
            <div class="line__bred__point"></div>
            <div class="line__bred__point"></div>
            <div class="line__bred__point"></div>
        </div>
    </section>

    <? if (!empty($arResult['SIMILAR_TOURS'])): ?>
        <section class="container tour-detail_interest">

            <div class="row">
                <div class="col-xs-12">
                    <div class="title">
                        <h3><?= Loc::getMessage('TOUR_MAYBE_INTERESTED'); ?></h3>
                    </div>
                </div>
            </div>

            <div class="catalog__list catalog__list_3">
                <? foreach ($arResult['SIMILAR_TOURS'] as $tour): ?>
                    <a href="<?= $tour['DETAIL_PAGE_URL']; ?>" class="catalog__list__item">
                        <div class="catalog__list__item__img" style="background-image: url('<?= $tour['PICTURE_SRC']; ?>');">
                            <? /* if(!empty($tour['PROPERTY_DISCOUNT_VALUE'])): */ ?><!--
                                <div class="discount">-<? /*=(int) $tour['PROPERTY_DISCOUNT_VALUE'];*/ ?>%</div>
                            --><? /* endif; */ ?>
                            <div class="catalog__list__item__img__title"><?= $tour['NAME']; ?></div>
                            <div class="catalog__list__item__img__wrap">
                                <div class="catalog__list__item__img__wrap__table">
                                    <div class="catalog__list__item__img__wrap__table__cell">
                                        <div class="catalog__list__item__img__wrap__title">
                                            <?= $tour['NAME']; ?>
                                        </div>
                                        <span class="catalog__list__item__img__wrap__text">
                                            <?= $tour['PREVIEW_TEXT']; ?>
                                        </span>
                                        <div class="catalog__list__item__img__wrap__btn">
                                            <?= Loc::getMessage('TOUR_MORE_BTN'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="catalog__list__item__inf">
                            <? if (!empty($tour['PROPERTY_HEADER_VALUE'])): ?>
                                <div class="catalog__list__item__inf__text">
                                    <?= $tour['PROPERTY_HEADER_VALUE']; ?>
                                </div>
                            <? endif; ?>
                            <div class="catalog__list__item__inf__footer">
                                <div class="catalog__list__item__inf__day">
                                    <? if (!empty($tour['PROPERTY_DAY_VALUE'])): ?>
                                        <span>
                                        <?= Helper::pluralizeN($tour['PROPERTY_DAY_VALUE'], array(
                                            Loc::getMessage('TOUR_DAY_ONE'),
                                            Loc::getMessage('TOUR_DAY_TWO'),
                                            Loc::getMessage('TOUR_DAY_MORE'),
                                        )); ?>
                                    </span>
                                    <? endif; ?>
                                    <? if (!empty($tour['PROPERTY_NIGHT_VALUE'])): ?>
                                        <?= Loc::getMessage('TOUR_DAYS_/'); ?>
                                        <span>
                                            <?= Helper::pluralizeN($tour['PROPERTY_NIGHT_VALUE'], array(
                                                Loc::getMessage('TOUR_NIGHT_ONE'),
                                                Loc::getMessage('TOUR_NIGHT_TWO'),
                                                Loc::getMessage('TOUR_NIGHT_MORE'),
                                            )); ?>
                                        </span>
                                    <? endif; ?>
                                </div>
                                <? if (!empty($tour['PROPERTY_PRICE_VALUE'])): ?>
                                    <div class="catalog__list__item__inf__price">
                                        <?= Loc::getMessage('TOUR_PRICE_FROM'); ?>
                                        <?= number_format($tour['PROPERTY_PRICE_VALUE'], 0, '', ' '); ?>
                                        <?= Loc::getMessage('TOUR_PRICE_CURRENCY_1'); ?>
                                    </div>
                                <? endif; ?>
                            </div>
                        </div>
                    </a>
                <? endforeach; ?>
            </div>
        </section>
    <? endif; ?>

</div>
<div id="popup__form" class="popup">
    <div class="popup__form">
        <div class="popup__bron">
            <div class="popup__bron__title">
                Чтобы забронировать поездку заполните поля ниже
            </div>
            <div class="popup__bron__text">
                Мы с Вами свяжемся в ближайшее время
            </div>
            <div class="popup__bron__bottom">
                <form class="form__go js-tour-request" action="/ajax/tour-order.php" method="post">
                    <input type="hidden" id="tour_order_id" value="">
                    <div class="popup__bron__bottom__left">
                        <div class="core__input js-field-block">
                            <input name="name" class="core__input__control" placeholder="Введите Ваше имя">
                            <div class="core__input__log"></div>
                        </div>
                        <div class="core__input js-field-block">
                            <input name="phone" class="core__input__control" placeholder="Введите Ваш телефон">
                            <div class="core__input__log"></div>
                        </div>
                        <button type="submit" name="submit">Жду звонка</button>
                    </div>
                    <div class="popup__bron__bottom__right">
                        <p class="js-field-block">
                            <input type="checkbox" name="privacy">
                            <a href="/turistam/obrabotka-personalnykh-dannykh/" target="_blank">Я согласен на обработку персональных данных</a>
                            <span class="core__input__log"></span>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="popup__form__agenci" class="popup">
    <div class="popup__form">
        <div class="popup__bron">
            <div class="popup__bron__title">
                Чтобы забронировать поездку заполните поля ниже
            </div>
            <div class="popup__bron__text">
                Мы с Вами свяжемся в ближайшее время
            </div>
            <div class="popup__bron__bottom">
                <form class="form__go js-tour-request" action="/ajax/tour-order.php" method="post">
                    <input type="hidden" id="tour_order_id" value="">
                    <div class="popup__bron__bottom__left">
                        <div class="core__input js-field-block">
                            <input name="name" class="core__input__control" placeholder="название агентства">
                            <div class="core__input__log"></div>
                        </div>
                        <div class="core__input js-field-block">
                            <input name="city" class="core__input__control" placeholder="город">
                            <div class="core__input__log"></div>
                        </div>
                        <div class="core__input js-field-block">
                            <input name="name" class="core__input__control" placeholder="ФИО менеджера">
                            <div class="core__input__log"></div>
                        </div><br>
                        <div class="core__input js-field-block">
                            <input name="phone" class="core__input__control" placeholder="Телефон">
                            <div class="core__input__log"></div>
                        </div>
                        <div class="core__input js-field-block">
                            <input name="email" class="core__input__control" placeholder="Введите Email">
                            <div class="core__input__log"></div>
                        </div><br>

<!--                        Название тура (подгружается автоматом в зависимости от того тура, на котором бронируем)-->
<!--                        дата начала тура (календарик)-->
<!--                        Кол-во туристов (взр./дет) - текстовое поле-->
<!--                        Категория гостиницы (подгружать заведенные к этому туру, выбрать можно только одну)-->
<!--                        Доп. услуги/пожелания  текстовое поле-->

                        <div class="core__input js-field-block">
                            <input name="phone" class="core__input__control" placeholder="Название тура">
                            <div class="core__input__log"></div>
                        </div>
                        <div class="core__input js-field-block">
                            <input id="date-arrive" name="date" class="core__input__control js-clearable hasDatepicker" placeholder="Дата начала тура">
                            <div class="core__input__log"></div>
                        </div>
                        <div class="core__input js-field-block">
                            <input name="phone" class="core__input__control" placeholder="Кол-во туристов">
                            <div class="core__input__log"></div>
                        </div><br>
                        <div class="core__input js-field-block">
                            <input name="phone" class="core__input__control" placeholder="Название гостиницы">
                            <div class="core__input__log"></div>
                        </div>
                        <div class="core__input js-field-block">
                            <input name="phone" class="core__input__control" placeholder="Доп. услуги/пожелания">
                            <div class="core__input__log"></div>
                        </div>

                        <button type="submit" name="submit">Жду звонка</button>
                    </div>
                    <div class="popup__bron__bottom__right">
                        <p class="js-field-block">
                            <input type="checkbox" name="privacy">
                            <a href="/turistam/obrabotka-personalnykh-dannykh/" target="_blank">Я согласен на обработку персональных данных</a>
                            <span class="core__input__log"></span>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>