<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>
    <!-- SECTION 2 -->

    <section class="lad-slideshow">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div id="slideshow" class="slideshow invert carousel" data-interval="300000"
                             data-ride="carousel">
                            <?
                            /**
                             * Слайдер на главной странице.
                             * Инфоблок : Контент->Слайдер главная.
                             * IBlockID = 1.
                             **/
                            ?>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "main_slider",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "Y",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "1",
                                    "IBLOCK_TYPE" => "content",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "20",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "Y",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "Y",
                                    "SET_META_KEYWORDS" => "Y",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "Y",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "ID",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "ASC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "COMPONENT_TEMPLATE" => "main_slider"
                                ),
                                false
                            ); ?>
                            <div class="offer">
                                <div class="outer">
                                    <div class="inner">
                                        <span class="text-first"><? includeArea('tour_text'); ?></span>
                                        <span class="text-second"><? includeArea('phone_1'); ?></span>
                                        <span class="text-third">
                                            <? includeArea('phone_2'); ?>
                                            <? includeArea('phone_3'); ?>
                                            <? includeArea('phone_4'); ?>
									    </span>
                                        <span class="social"><? includeArea('social'); ?></span>
                                        <a class="button outline" href="#"><? includeArea('all_contact'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3 -->
<? // TODO как будет каталог ?>
    <!--<section class="lad-search" style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/bg/img_1.jpg');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div class="search">
                            <h2><? /* includeArea('search_tour'); */ ?></h2>
                            <form>
                                <div class="group">
                                    <div class="cell seltour">
                                        <select class="select">
                                            <option>Тур</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <div class="cell seldate">
                                        <input type="text" class="select" value="Дата" id="datepicker">
                                    </div>
                                    <div class="cell selpeoples">
                                        <input class="select" placeholder="Количество людей">
                                    </div>
                                </div>
                                <div class="group selsubmit">
                                    <input type="submit" class="submit button" value="Поиск">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>$(function () {
                $("#datepicker").datepicker();
            });</script>
    </section>-->
<? $APPLICATION->IncludeComponent(
    "lema:catalog.filter",
    "home",
    array(
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "FILTER_NAME" => "arrFilter",
        "IBLOCK_ID" => "4",
        "IBLOCK_TYPE" => "content",
        "LIST_HEIGHT" => "5",
        "NUMBER_WIDTH" => "5",
        "PAGER_PARAMS_NAME" => "arrPager",
        "PRICE_CODE" => array(),
        "PROPERTY_CODE" => array(
            0 => "TYPE",
            1 => "DATE",
            2 => "CITY",
            3 => "",
        ),
        "SAVE_IN_SESSION" => "N",
        "TEXT_WIDTH" => "20",
        "COMPONENT_TEMPLATE" => "home"
    ),
    false
); ?>

    <!-- SECTION 4 -->
<? // TODO как будет каталог ?>
    <section class="lad-best">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div class="best">
                            <h2><? includeArea('best-offer'); ?></h2>
                            <?
                            $GLOBALS['arrBestOffer'] = array("PROPERTY_BEST_OFFER_VALUE" => 'Y');
                            $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "best_offer",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "arrBestOffer",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "4",
                                    "IBLOCK_TYPE" => "content",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "N",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "20",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(
                                        0 => "TYPE",
                                        1 => "VIEW",
                                        2 => "DATE",
                                        3 => "COUNT",
                                        4 => "DAYS_COUNT",
                                        5 => "IN_PRICE_CONTAINS",
                                        6 => "GROUP_TEXT",
                                        7 => "ALSO_PAYS",
                                        8 => "HEADER",
                                        9 => "DAY",
                                        10 => "NIGHT",
                                        11 => "BEST_OFFER",
                                        12 => "ROUTE",
                                        13 => "TOUR_MEMO",
                                        14 => "DISCOUNT",
                                        15 => "TRANSPORT",
                                        16 => "PRICE",
                                        17 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "COMPONENT_TEMPLATE" => "best_offer"
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5 -->
    <section class="lad-why">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div class="why invert">
                            <h2><? includeArea('why_we'); ?></h2>
                            <?
                            /**
                             * Блоки "Почему мы".
                             * Инфоблок : Контент->Почему мы?.
                             * IBlockID = 2.
                             *
                             * По умолчанию 6 элементов берутся из спрайта со смещением заднего фона.
                             * Если есть картинка Анонса (PREVIEW_PICTURE) заменяется на нее.
                             **/
                            ?>

                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "why_we",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "Y",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "2",
                                    "IBLOCK_TYPE" => "content",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "20",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "Y",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "Y",
                                    "SET_META_KEYWORDS" => "Y",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "Y",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "COMPONENT_TEMPLATE" => "why_we"
                                ),
                                false
                            ); ?>
                            <a class="button outline" href="/o-kompanii/"><? includeArea('detail_why_we'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6 -->
<? // TODO как будет каталог ?>
<?
$GLOBALS['arrOurTours'] = array("SECTION_ID" => 9);
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "service_categories",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("", ""),
        "FILTER_NAME" => "arrOurTours",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "16",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("LINK", ""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>
    <!--<section class="lad-ourtours">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div class="ourtours">
                            <h2>Наши туры</h2>
                            <ul class="grid-4">
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/ourtours1.jpg');"></span>
                                        <span class="name">Экскурсионные</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/ourtours2.jpg');"></span>
                                        <span class="name">Для школьников</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/ourtours3.jpg');"></span>
                                        <span class="name">Туры выходного дня</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/ourtours4.jpg');"></span>
                                        <span class="name">Активные</span>
                                    </div>
                                </li>
                            </ul>
                            <a class="more" href="#">Все туры</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- SECTION 7 -->
<? // TODO как будет каталог ?>
    <section class="lad-banner1" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/images/banner1.jpg');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div class="banner invert">
                            <? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/home/book_it_transfer.php')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 8 -->
<? // TODO как будет каталог ?>
<?
$GLOBALS['arrOurExcurs'] = array("SECTION_ID" => 10);
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "service_categories",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("", ""),
        "FILTER_NAME" => "arrOurExcurs",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "16",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("LINK", ""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>
    <!--<section class="lad-ourexcurs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div class="ourexcurs">
                            <h2>Наши экскурсии</h2>
                            <ul class="grid-4">
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/ourexcurs1.jpg');"></span>
                                        <span class="name">Медовые водопады</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/ourexcurs2.jpg');"></span>
                                        <span class="name">Эльбрус</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/ourexcurs3.jpg');"></span>
                                        <span class="name">Терский конезавод</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/ourexcurs4.jpg');"></span>
                                        <span class="name">Грозный</span>
                                    </div>
                                </li>
                            </ul>
                            <a class="more" href="#">Все Экскурсии</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- SECTION 9 -->
<? // TODO как будет каталог ?>
    <section class="lad-banner2" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/images/banner2.jpg');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div class="banner invert">
                            <? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/home/book_it_excursion.php')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 10 -->
<? // TODO как будет каталог ?>
<?
$GLOBALS['arrRussiaTours'] = array("SECTION_ID" => 11);
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "service_categories",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("", ""),
        "FILTER_NAME" => "arrRussiaTours",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "16",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("LINK", ""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>
    <!-- <section class="lad-russiatours">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div class="russiatours">
                            <h2>Туры по России</h2>
                            <ul class="grid-4">
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/russiatours1.jpg');"></span>
                                        <span class="name">Золотое кольцо</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/russiatours2.jpg');"></span>
                                        <span class="name">Туры по России</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/russiatours3.jpg');"></span>
                                        <span class="name">Крым</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/russiatours4.jpg');"></span>
                                        <span class="name">Карелия</span>
                                    </div>
                                </li>
                            </ul>
                            <a class="more" href="#">Все туры по России</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- SECTION 11 -->
<? // TODO ожидаю перевестывания ?>
    <!--<section class="lad-videoreviews">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div class="videoreviews">
                            <h2>Видео-отзывы</h2>
                            <ul class="grid-3 video">
                                <li class="item">
                                    <div class="item-block" data-youtube="pGCKeotT4mM">
                                        <span class="image"
                                              style="background-image: url('<?/*= SITE_TEMPLATE_PATH */ ?>/images/video1.jpg');"></span>
                                        <span class="time">4:34</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<?/*= SITE_TEMPLATE_PATH */ ?>/images/video2.jpg');"></span>
                                        <span class="time">4:34</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<?/*= SITE_TEMPLATE_PATH */?>/images/video3.jpg');"></span>
                                        <span class="time">4:34</span>
                                    </div>
                                </li>
                            </ul>
                            <a class="reload" href="#">Все отзывы</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"video_reviews", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrOtherServices",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "19",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "video_reviews"
	),
	false
); ?>
    <!-- SECTION 12 -->
<? // TODO как будет каталог ?>
<?
$GLOBALS['arrOtherServices'] = array("SECTION_ID" => 12);
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "service_categories",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("", ""),
        "FILTER_NAME" => "arrOtherServices",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "16",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("LINK", ""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>
    <!--<section class="lad-otherservices">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div class="otherservices">
                            <h2>Другие услуги</h2>
                            <ul class="grid-4">
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/otherservices1.jpg');"></span>
                                        <span class="name">Джиппинг</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/otherservices2.jpg');"></span>
                                        <span class="name">Транспортные услуги</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/otherservices3.jpg');"></span>
                                        <span class="name">Параплан</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image"
                                              style="background-image: url('<? /*= SITE_TEMPLATE_PATH */ ?>/images/otherservices4.jpg');"></span>
                                        <span class="name">Речные круизы</span>
                                    </div>
                                </li>
                            </ul>
                            <a class="more" href="#">Все туры по России</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- SECTION 13 -->

    <section class="lad-reviews" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/images/banner3.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div id="reviews" class="reviews invert carousel" data-interval="300000" data-ride="carousel">
                            <h2>Отзывы наших путешественников</h2>
                            <?
                            /**
                             * Слайдер отзывов.
                             * Инфоблок : Контент->Слайдер отзывов.
                             * IBlockID = 3.
                             *
                             **/ ?>
                            <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"review", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "CITY",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "review"
	),
	false
); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 14 -->
    <section class="lad-photos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div class="photos">
                            <h2><? includeArea('kavkaz'); ?></h2>
                            <?
                            /**
                             * Используется виджет "inwidget"
                             * Страница с описанием и настройками http://inwidget.ru/
                             * Подключается с помощью Jquery load (custom.js строка 5)
                             * Шаблон хранится в /inwidget/template.php
                             * Файл настроек /inwidget/config.php
                             **/
                            ?>
                            <div id="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 15 -->
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>