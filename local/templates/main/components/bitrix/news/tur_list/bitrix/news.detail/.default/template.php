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

                <? if (!empty($arResult['PROPERTIES']['GALLERY_PHOTO']['VALUE_SRC'])): ?>
                    <div class="carousel-inner" role="listbox">
                        <? foreach ($arResult['PROPERTIES']['GALLERY_PHOTO']['VALUE_SRC'] as $src): ?>
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
            <a href="https://projects.invisionapp.com/boards/7U3BW22PGXFVD#/5593610" target="_blank" title="Скачать программу тура"
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

                                    <div id="map"></div>

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

                                        <?
                                        $first = true;
                                        ?>

                                        <!-- TAB CONTENT -->
                                        <div class="tab-content inner">
                                            <? foreach ($arResult['PROGRAMMS'] as $id => $programm): ?>
                                                <?
                                                if ($first) {
                                                    $first = false;
                                                    $class = ' active';
                                                } else
                                                    $class = '';
                                                ?>
                                                <div role="tabpanel" class="tab-pane<?= $class ?>" id="p<?= $id; ?>">
                                                    <div class="img" style="background-image: url(<?= $programm['PICTURE_SRC']; ?>);"></div>
                                                    <div class="text page__program__detail__list__item">
                                                        <div class="page__program__detail__list__item__title"><?= $programm['NAME']; ?></div>
                                                        <div class="page__program__detail__list__item__text">
                                                            <?= $programm['PREVIEW_TEXT']; ?>

                                                            <? $arSpoilerText = $arResult['SPOILER_TEXT'][$id];
                                                            if ($arSpoilerText): ?>
                                                                <? $iCount = count($arSpoilerText['ADDITIONAL_TITLE']);
                                                                for ($i = 0; $i <= $iCount; $i++):?>
                                                                    <? if (
                                                                        !empty($arSpoilerText['ADDITIONAL_TITLE'][$i]) &&
                                                                        !empty($arSpoilerText['ADDITIONAL_TEXT'][$i])
                                                                    ): ?>
                                                                        <? if ($arSpoilerText['TEXT_BEFORE'][$i]): ?>
                                                                            <p>
                                                                                <?= $arSpoilerText['TEXT_BEFORE'][$i]; ?>
                                                                            </p>
                                                                        <? endif; ?>
                                                                        <p class="core__switch__btn">
                                                                            <span class="core__switch__btn__text"
                                                                                  data-js-core-switch-element="core__switch__btn__hidden_<?= $i ?>_1">
                                                                                  <?= $arSpoilerText['ADDITIONAL_TITLE'][$i]; ?>
                                                                            </span>
                                                                            <span class="core__switch__btn__hidden core__switch__btn__hidden_<?= $i ?>_1">
                                                                            <?= $arSpoilerText['ADDITIONAL_TEXT'][$i]; ?>
                                                                        </span>
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
                                                </div>
                                            <? endforeach; ?>
                                        </div>

                                    <? endif; ?>

                                </div>
                            </div>
                        </div>

                        <? if ($arResult['SHOW_PRICE_TAB']): ?>
                            <div role="tabpanel" class="tab-pane" id="price">

                                <form action="/ajax/find-tour-room.php" class="filter js-ajax-filter" method="post">
                                    <input type="hidden" name="tour_id" value="<?= $arResult['ID']; ?>">
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-4">
                                            <div class="input">
                                                <label for="room_type">Дата</label><br>
                                                <input class="input" name="DATE" placeholder="Дата начала тура"/>
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
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="core__price">
                                                <div class="core__price__title"><?= Loc::getMessage('TOUR_SEARCH_PRICE_TITLE'); ?></div>
                                                <div class="core__price__item">
                                                    <div class="core__price__item_l">
                                                        <span><?= Loc::getMessage('TOUR_PRICE_FROM'); ?></span>
                                                        <input type="text" name="price_from" placeholder="0">
                                                    </div>
                                                    <div class="core__price__item_r">
                                                        <span><?= Loc::getMessage('TOUR_PRICE_TO'); ?></span>
                                                        <input type="text" name="price_to" placeholder="0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <? /*
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="input">
                                            <select name="day_count">
                                                <option disabled="disabled" selected="selected">Продолжительность тура</option>
                                                <?for($i = 1; $i <= 10; ++$i):?>
                                                    <option value="<?=$i;?>"><?=$i;?></option>
                                                <?endfor;?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-4">
                                        <div class="input">
                                            <?if(!empty($arResult['TRANSPORTS'])):?>
                                                <select name="transport">
                                                    <option value="" disabled="disabled" selected="selected">Транспорт</option>
                                                    <?foreach($arResult['TRANSPORTS'] as $id => $transport):?>
                                                        <option value="<?=$id;?>"><?=$transport['VALUE'];?></option>
                                                    <?endforeach;?>
                                                </select>
                                            <?endif;?>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-4">
                                        <div class="input">
                                            <select name="people_count">
                                                <option disabled="disabled" selected="selected">Кол-во людей</option>
                                                <?for($i = 1; $i <= 10; ++$i):?>
                                                    <option value="<?=$i;?>"><?=$i;?></option>
                                                <?endfor;?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-4">
                                        <div class="input">
                                            <input id="styled-checkbox" type="checkbox" value="value1">
                                            <label for="styled-checkbox">Одноместное размещение</label>
                                        </div>
                                    </div>
*/ ?>
                                    </div>

                                    <button class="calculate" type="submit"><?= Loc::getMessage('TOUR_SEARCH_BTN_TITLE'); ?></button>
                                    <div class="disclaimer"><?= Loc::getMessage('TOUR_SEARCH_HINT_TITLE'); ?></div>

                                    <div class="page__program__detail__list__item__text">
                                        <? if (!empty($arResult['PROPERTIES']['IN_PRICE_CONTAINS']['VALUE']['TEXT'])): ?>
                                            <p class="core__switch__btn">
                                            <span class="core__switch__btn__text active"
                                                  data-js-core-switch-element="core__switch__btn__hidden_price_1">
                                                <?= Loc::getMessage('TOUR_IN_PRICE_CONTAINS_TITLE'); ?>
                                            </span>
                                                <span class="core__switch__btn__hidden active core__switch__btn__hidden_price_1">
                                                <?= $arResult['PROPERTIES']['IN_PRICE_CONTAINS']['VALUE']['TEXT']; ?>
                                            </span>
                                            </p>
                                        <? endif; ?>
                                        <? if (!empty($arResult['PROPERTIES']['ALSO_PAYS']['VALUE']['TEXT'])): ?>
                                            <p class="core__switch__btn">
                                            <span class="core__switch__btn__text active"
                                                  data-js-core-switch-element="core__switch__btn__hidden_price_2">
                                                <?= Loc::getMessage('TOUR_ALSO_PAYS_TITLE'); ?>
                                            </span>
                                                <span class="core__switch__btn__hidden active core__switch__btn__hidden_price_2">
                                            <?= $arResult['PROPERTIES']['ALSO_PAYS']['VALUE']['TEXT']; ?>
                                        </span>
                                            </p>
                                        <? endif; ?>
                                        <? if (!empty($arResult['PROPERTIES']['ADDITIONAL_INFO']['VALUE']['TEXT'])): ?>
                                            <p class="core__switch__btn">
                                            <span class="core__switch__btn__text active"
                                                  data-js-core-switch-element="core__switch__btn__hidden_price_3">
                                                <?= Loc::getMessage('TOUR_ADDITIONAL_INFO_TITLE'); ?>
                                            </span>
                                                <span class="core__switch__btn__hidden active core__switch__btn__hidden_price_3">
                                            <?= $arResult['PROPERTIES']['ADDITIONAL_INFO']['VALUE']['TEXT']; ?>
                                        </span>
                                            </p>
                                        <? endif; ?>
                                    </div>
                                </form>

                                <div class="js-ajax-filter-search"></div>

                            </div>
                        <? endif; ?>

                        <div role="tabpanel" class="tab-pane" id="jotting">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p><?= TxtToHTML($arResult['PROPERTIES']['TOUR_MEMO']['VALUE']['TEXT']); ?></p>
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
                                <?= $arResult['PROPERTIES']['GROUP_TEXT']['TEXT']['VALUE']; ?>
                            </div>
                        <? endif; ?>
                    </div>
                </div>

                <div class="row addtional-buttons">
                    <div class="col-xs-12 col-sm-6">
                        <a href="#popup__form" class="booking"><?= Loc::getMessage('TOUR_ORDER_BTN_TITLE'); ?></a>
                        <div id="popup__form" class="popup">
                            <div class="popup__form">
                                <div class=""
                            </div>
                        </div>
                    </div>
                    <? if (!empty($arResult['PROPERTIES']['FULL_PROGRAMM']['VALUE_SRC'])): ?>
                        <div class="col-xs-12 col-sm-6">
                            <a href="<?= $arResult['PROPERTIES']['FULL_PROGRAMM']['VALUE_SRC']; ?>" class="full_program">
                                <?= Loc::getMessage('TOUR_SHOW_FULL_PROGRAMM_TITLE'); ?>
                            </a>
                        </div>
                    <? endif; ?>
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
            <!-- Новый шаблон -->
            <!--<div class="catalog__list catalog__list_3">
                <a href="" title="" class="catalog__list__item">
                    <div class="catalog__list__item__img" style="background-image: url('/upload/iblock/a6e/a6e11bf9f8e30f3b27e9883f3405ca43.png');">
                        <div class="catalog__list__item__img__title">Кавказская мозаика</div>
                        <div class="catalog__list__item__img__wrap">
                            <div class="catalog__list__item__img__wrap__table">
                                <div class="catalog__list__item__img__wrap__table__cell">
                                    <div class="catalog__list__item__img__wrap__title">
                                        Кавказская мозаика
                                    </div>
                                    <span class="catalog__list__item__img__wrap__text">
                                В стоимость тура входит: проживание, питание по программе (для организованных групп), и экскурсионное обслуживание, страховка, услуги гидов.
                            </span>
                                    <div class="catalog__list__item__img__wrap__btn">
                                        Подробнее
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__list__item__inf">
                        <div class="catalog__list__item__inf__text">
                            Экскурсионный тур
                        </div>
                        <div class="catalog__list__item__inf__footer">
                            <div class="catalog__list__item__inf__day">
                                <span>5 дней</span>
                                <span>4 ночи</span>
                            </div>
                            <div class="catalog__list__item__inf__price">
                                от 30 000 руб
                            </div>
                        </div>
                    </div>
                </a>
                <a href="" title="" class="catalog__list__item">
                    <div class="catalog__list__item__img" style="background-image: url('/upload/iblock/a6e/a6e11bf9f8e30f3b27e9883f3405ca43.png');">
                        <div class="catalog__list__item__img__title">Кавказская мозаика</div>
                        <div class="catalog__list__item__img__wrap">
                            <div class="catalog__list__item__img__wrap__table">
                                <div class="catalog__list__item__img__wrap__table__cell">
                                    <div class="catalog__list__item__img__wrap__title">
                                        Кавказская мозаика
                                    </div>
                                    <span class="catalog__list__item__img__wrap__text">
                                В стоимость тура входит: проживание, питание по программе (для организованных групп), и экскурсионное обслуживание, страховка, услуги гидов.
                            </span>
                                    <div class="catalog__list__item__img__wrap__btn">
                                        Подробнее
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__list__item__inf">
                        <div class="catalog__list__item__inf__text">
                            Экскурсионный тур
                        </div>
                        <div class="catalog__list__item__inf__footer">
                            <div class="catalog__list__item__inf__day">
                                <span>5 дней</span>
                                <span>4 ночи</span>
                            </div>
                            <div class="catalog__list__item__inf__price">
                                от 30 000 руб
                            </div>
                        </div>
                    </div>
                </a>
                <a href="" title="" class="catalog__list__item">
                    <div class="catalog__list__item__img" style="background-image: url('/upload/iblock/a6e/a6e11bf9f8e30f3b27e9883f3405ca43.png');">
                        <div class="catalog__list__item__img__title">Кавказская мозаика</div>
                        <div class="catalog__list__item__img__wrap">
                            <div class="catalog__list__item__img__wrap__table">
                                <div class="catalog__list__item__img__wrap__table__cell">
                                    <div class="catalog__list__item__img__wrap__title">
                                        Кавказская мозаика
                                    </div>
                                    <span class="catalog__list__item__img__wrap__text">
                                В стоимость тура входит: проживание, питание по программе (для организованных групп), и экскурсионное обслуживание, страховка, услуги гидов.
                            </span>
                                    <div class="catalog__list__item__img__wrap__btn">
                                        Подробнее
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__list__item__inf">
                        <div class="catalog__list__item__inf__text">
                            Экскурсионный тур
                        </div>
                        <div class="catalog__list__item__inf__footer">
                            <div class="catalog__list__item__inf__day">
                                <span>5 дней</span>
                                <span>4 ночи</span>
                            </div>
                            <div class="catalog__list__item__inf__price">
                                от 30 000 руб
                            </div>
                        </div>
                    </div>
                </a>
            </div>-->
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
                <!--<div class="col-xs-12 col-sm-6 col-md-4 item">
                    <div class="img" style="background-image: url('<? /*=$tour['PICTURE_SRC'];*/ ?>')">
                        <? /* if(!empty($tour['PROPERTY_DISCOUNT_VALUE'])): */ ?>
                            <div class="discount">-<? /*=(int) $tour['PROPERTY_DISCOUNT_VALUE'];*/ ?>%</div>
                        <? /* endif; */ ?>
                        <h3><? /*=$tour['NAME'];*/ ?></h3>

                        <div class="text">
                            <div class="table">
                                <div class="cell">
                                    <p><? /*=$tour['PREVIEW_TEXT'];*/ ?></p>

                                    <a href="<? /*=$tour['DETAIL_PAGE_URL'];*/ ?>"><? /*=Loc::getMessage('TOUR_MORE_BTN');*/ ?></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="info">
                        <div class="text">

                            <? /* if(!empty($tour['PROPERTY_HEADER_VALUE'])): */ ?>
                                <h5><? /*=$tour['PROPERTY_HEADER_VALUE'];*/ ?></h5>
                            <? /* endif; */ ?>
                            <div class="data-type">
                                <? /* if(!empty($tour['PROPERTY_DAY_VALUE'])): */ ?>
                                    <span>
                                        <? /*=Helper::pluralizeN($tour['PROPERTY_DAY_VALUE'], array(
                                            Loc::getMessage('TOUR_DAY_ONE'),
                                            Loc::getMessage('TOUR_DAY_TWO'),
                                            Loc::getMessage('TOUR_DAY_MORE'),
                                        ));*/ ?>
                                    </span>
                                <? /* endif; */ ?>
                                <? /* if(!empty($tour['PROPERTY_NIGHT_VALUE'])): */ ?>
                                    <span>
                                            <? /*=Helper::pluralizeN($tour['PROPERTY_NIGHT_VALUE'], array(
                                                Loc::getMessage('TOUR_NIGHT_ONE'),
                                                Loc::getMessage('TOUR_NIGHT_TWO'),
                                                Loc::getMessage('TOUR_NIGHT_MORE'),
                                            ));*/ ?>
                                        </span>
                                <? /* endif; */ ?>
                            </div>

                        </div>

                        <div class="price">
                            <div>
                                <? /* if(!empty($tour['PROPERTY_PRICE_VALUE'])): */ ?>
                                    <span>
                                            <bold>
                                                <? /*=Loc::getMessage('TOUR_PRICE_FROM');*/ ?>
                                                <? /*=number_format($tour['PROPERTY_PRICE_VALUE'], 0, '', ' ');*/ ?>
                                                <? /*=Loc::getMessage('TOUR_PRICE_CURRENCY_1');*/ ?>
                                            </bold>
                                        </span>
                                <? /* endif; */ ?>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </section>
    <? endif; ?>

</div>