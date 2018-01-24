<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Гостиницы"); ?>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slider-hotels",
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
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "10",
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
			0 => "",
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
		"COMPONENT_TEMPLATE" => "slider-hotels"
	),
	false
); ?>
<? $APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "",
    Array(
        "PATH" => "",
        "SITE_ID" => "s1",
        "START_FROM" => "0"
    )
); ?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"hotel_list1",
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "CITY",
			1 => "PRICE",
			2 => "TYPE",
			3 => "VIEW",
			4 => "DATE",
			5 => "COUNT",
			6 => "HEADER",
			7 => "DAY",
			8 => "NIGHT",
			9 => "PROGRAMMS",
			10 => "DISCOUNT",
			11 => "COUNTRY",
			12 => "SLIDER_PHOTO",
			13 => "GALLERY_PHOTO",
			14 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "CITY",
			1 => "PRICE",
			2 => "TYPE",
			3 => "VIEW",
			4 => "DATE",
			5 => "COUNT",
			6 => "DAYS_COUNT",
			7 => "HEADER",
			8 => "NIGHT",
			9 => "DISCOUNT",
			10 => "COUNTRY",
			11 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "hotels",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "hotel_list1",
		"FILTER_NAME" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "ADDRESS",
			1 => "CITY",
			2 => "ROOMS",
			3 => "PRICE",
			4 => "",
		),
		"SEF_FOLDER" => "/hotel/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>
    <section class="content-page" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-4">
                    <form class="filter" name="search-hotel" action="/hotel/" method="get">
                        <div class="filter__item">
                            <div class="filter__item__name">
                                город
                            </div>
                            <select class="cs-select cs-skin-border" name="city">
                                <option value="pyatigorsk" selected="">Пятигорск</option>
                                <option value="france">France</option>
                                <option value="brazil">Brazil</option>
                                <option value="argentina">Argentina</option>
                                <option value="south-africa">South Africa</option>
                            </select>
                        </div>
                        <div class="filter__item">
                            <div class="filter__item__name">
                                Стоимость
                            </div>
                            <select class="cs-select cs-skin-border" name="cost">
                                <option value="pyatigorsk" disabled="" selected="">Выбрать</option>
                                <option value="econom">Эконом</option>
                                <option value="comfort">Комфорт</option>
                                <option value="business">Бизнес</option>
                            </select>
                        </div>
                        <div class="core__price">
                            <div class="core__price__title">
                                Цена
                            </div>
                            <div class="core__price__item">
                                <div class="core__price__item_l">
                                    От <input type="text" placeholder="0">
                                </div>
                                <div class="core__price__item_r">
                                    До <input type="text" placeholder="0">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="filter__button">подробнее</a>
                        <div class="filter__info">
                            <p class="filter__info__text">
                                Туристическая компанич “Ладья” сотрудничает с большинством гостиниц Кавказских Минеральных Вод, Домбая, Архыза,
                                Теберды и Приэльбрусья
                            </p>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-md-8 col-lg-8 results">
                     <div class="hotel__list">
                         <div class="hotel__list__item">
                             <div class="hotel__list__item__wrap">
                                 <div class="hotel__list__item__img">
                                     <div class="hotel__list__item__img__control" style="background-image: url();"></div>
                                 </div>
                                 <div class="hotel__list__item__body">
                                     <div class="hotel__list__item__name">
                                         <span class="hotel__list__item__name__control">Отель ночной Квартал</span>
                                     </div>
                                     <div class="hotel__list__item__map">
                                         <span class="hotel__list__item__map__control">Пятигорск</span>
                                     </div>
                                     <div class="hotel__list__item__icon">
                                         <div class="hotel__list__item__icon__item hotel__list__item__icon__item_1"></div>
                                         <div class="hotel__list__item__icon__item hotel__list__item__icon__item_2"></div>
                                         <div class="hotel__list__item__icon__item hotel__list__item__icon__item_3"></div>
                                         <div class="hotel__list__item__icon__item hotel__list__item__icon__item_4"></div>
                                     </div>
                                     <div class="hotel__list__item__inf">
                                         <span class="hotel__list__item__inf__control">Доступно 5 видов номеров</span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                    <div class="pagination-base">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>