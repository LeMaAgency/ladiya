<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Наш транспорт");
?>

    <div class="head-img head-img_transport" <?$APPLICATION->ShowViewContent('head_pic')?>>
        <div class="lad-slideshow__block-title">
            <h1 class="lad-slideshow__block-title__h1"><?=$APPLICATION->ShowTitle(false);?></h1>
        </div>
    </div>

<?$APPLICATION->IncludeComponent(
    "bitrix:photo.detail",
    "pages_head_picture",
    array(
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "DETAIL_URL" => "",
        "ELEMENT_CODE" => "",
        "ELEMENT_ID" => "110",
        "ELEMENT_SORT_FIELD" => "sort",
        "ELEMENT_SORT_ORDER" => "asc",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "IBLOCK_ID" => "25",
        "IBLOCK_TYPE" => "content",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
        ),
        "SECTION_CODE" => "",
        "SECTION_ID" => "",
        "SECTION_URL" => "",
        "SET_LAST_MODIFIED" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "COMPONENT_TEMPLATE" => "pages_head_picture"
    ),
    false
);?>
<? $APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "",
    Array(
        "PATH" => "",
        "SITE_ID" => "s1",
        "START_FROM" => "0"
    )
); ?>

<?//$APPLICATION->IncludeComponent(
//	"bitrix:news.list",
//	"transport",
//	array(
//		"ACTIVE_DATE_FORMAT" => "d.m.Y",
//		"ADD_SECTIONS_CHAIN" => "N",
//		"AJAX_MODE" => "N",
//		"AJAX_OPTION_ADDITIONAL" => "",
//		"AJAX_OPTION_HISTORY" => "N",
//		"AJAX_OPTION_JUMP" => "N",
//		"AJAX_OPTION_STYLE" => "Y",
//		"CACHE_FILTER" => "N",
//		"CACHE_GROUPS" => "Y",
//		"CACHE_TIME" => "36000000",
//		"CACHE_TYPE" => "A",
//		"CHECK_DATES" => "Y",
//		"DETAIL_URL" => "#SITE_DIR#/transport/#ELEMENT_CODE#/",
//		"DISPLAY_BOTTOM_PAGER" => "Y",
//		"DISPLAY_DATE" => "Y",
//		"DISPLAY_NAME" => "Y",
//		"DISPLAY_PICTURE" => "Y",
//		"DISPLAY_PREVIEW_TEXT" => "Y",
//		"DISPLAY_TOP_PAGER" => "N",
//		"FIELD_CODE" => array(
//			0 => "",
//			1 => "",
//		),
//		"FILTER_NAME" => "",
//		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
//		"IBLOCK_ID" => "12",
//		"IBLOCK_TYPE" => "content",
//		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
//		"INCLUDE_SUBSECTIONS" => "Y",
//		"MESSAGE_404" => "",
//		"NEWS_COUNT" => "20",
//		"PAGER_BASE_LINK_ENABLE" => "N",
//		"PAGER_DESC_NUMBERING" => "N",
//		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
//		"PAGER_SHOW_ALL" => "N",
//		"PAGER_SHOW_ALWAYS" => "N",
//		"PAGER_TEMPLATE" => "hotels",
//		"PAGER_TITLE" => "Новости",
//		"PARENT_SECTION" => "",
//		"PARENT_SECTION_CODE" => "",
//		"PREVIEW_TRUNCATE_LEN" => "",
//		"PROPERTY_CODE" => array(
//			0 => "TITLE_PREVIEW_DESCRIPTION",
//			1 => "TEXT_BUTTON",
//			2 => "",
//		),
//		"SET_BROWSER_TITLE" => "N",
//		"SET_LAST_MODIFIED" => "N",
//		"SET_META_DESCRIPTION" => "N",
//		"SET_META_KEYWORDS" => "N",
//		"SET_STATUS_404" => "N",
//		"SET_TITLE" => "N",
//		"SHOW_404" => "N",
//		"SORT_BY1" => "ACTIVE_FROM",
//		"SORT_BY2" => "SORT",
//		"SORT_ORDER1" => "DESC",
//		"SORT_ORDER2" => "ASC",
//		"STRICT_SECTION_CHECK" => "N",
//		"COMPONENT_TEMPLATE" => "transport"
//	),
//	false
//);?>
    <section class="content-page">
        <div class="transport-item">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 reverse">
                        <div class="transport-item__img"><img src="/local/templates/main/images/transport-item/transfer.png" alt=""></div>
                    </div>
                    <div class="col-md-4">
                        <div class="transport-item__description">
                            <div class="transport-item__description__head">
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/transport/transfer/title.php",
                                    Array(),
                                    Array(
                                        "MODE"      => "html",
                                    ));
                                ?>
                            </div>
                            <div class="transport-item__description__title">
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/transport/transfer/small_title.php",
                                    Array(),
                                    Array(
                                        "MODE"      => "html",
                                    ));
                                ?>
                            </div>
                            <p class="transport-item__description__text">
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/transport/transfer/preview_text.php",
                                    Array(),
                                    Array(
                                        "MODE"      => "html",
                                    ));
                                ?>
                            </p>
                            <a href="<?=SITE_DIR?>transport/transfer" class="item-card__content__more">
                                <span>
                                    <?$APPLICATION->IncludeFile(
                                        SITE_DIR."include/transport/transfer/button_text.php",
                                        Array(),
                                        Array(
                                            "MODE"      => "html",
                                        ));
                                    ?>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="transport-item">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="transport-item__img"><img src="/local/templates/main/images/transport-item/bus.png" alt=""></div>
                    </div>
                    <div class="col-md-4">
                        <div class="transport-item__description">
                            <div class="transport-item__description__head">
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/transport/rent-bus/title.php",
                                    Array(),
                                    Array(
                                        "MODE"      => "html",
                                    ));
                                ?>
                            </div>
                            <div class="transport-item__description__title">
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/transport/rent-bus/small_title.php",
                                    Array(),
                                    Array(
                                        "MODE"      => "html",
                                    ));
                                ?>
                            </div>
                            <ul class="transport-item__description__list">
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/transport/rent-bus/bus_types.php",
                                    Array(),
                                    Array(
                                        "MODE"      => "html",
                                    ));
                                ?>
                            </ul>
                            <p class="transport-item__description__text">
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/transport/rent-bus/preview_text.php",
                                    Array(),
                                    Array(
                                        "MODE"      => "html",
                                    ));
                                ?>
                            </p>
                            <a href="<?=SITE_DIR?>transport/rent-bus" class="item-card__content__more">
                                <span>
                                    <?$APPLICATION->IncludeFile(
                                        SITE_DIR."include/transport/rent-bus/button_text.php",
                                        Array(),
                                        Array(
                                            "MODE"      => "html",
                                        ));
                                    ?>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>