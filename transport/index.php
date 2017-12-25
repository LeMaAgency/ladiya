<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Наш транспорт");
?>

    <div class="head-img head-img_transport">
        <div class="lad-slideshow__block-title">
            <h1 class="lad-slideshow__block-title__h1"><?=$APPLICATION->ShowTitle(false);?></h1>
        </div>
    </div>

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
                            <div class="transport-item__description__head">Трансферы (встреча и проводы)</div>
                            <div class="transport-item__description__title">здесь ваш текст</div>
                            <p class="transport-item__description__text">"Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                            </p>
                            <a href="" class="item-card__content__more"><span>Выбрать трансфер</span></a>
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
                            <div class="transport-item__description__head">автобусы</div>
                            <div class="transport-item__description__title">Для организации экскурсий и туров используются
                                современные автобусы различной вместимости:
                            </div>
                            <ul class="transport-item__description__list">
                                <li class="transport-item__description__list__item">&ndash; свыше 40 мест - Mersedes,
                                    Neoplan, Setra, Volvo, Higer, Hunday, Kia, Аврора
                                </li>
                                <li class="transport-item__description__list__item">&ndash; 15 - 20 мест - Mersedes
                                    Sprinter, Ford
                                </li>
                                <li class="transport-item__description__list__item">&ndash; до 14 мест - Mersedes Vito
                                </li>
                            </ul>
                            <p class="transport-item__description__text">
                                Все автобусы соответствуют стандартам безопасности и комфорта. Оснащены кондиционерами,
                                аудио- и видео техникой, микрофонами. Эргономичные, удобные сиденья
                            </p>
                            <a href="" class="item-card__content__more"><span>Выбрать автобус</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>