<footer class="lad-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="wrapper">
                    <div class="footer-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">Туры</a>
                                <?$APPLICATION->IncludeComponent(
                                	"bitrix:menu",
                                	"footer_menu",
                                	array(
                                		"ALLOW_MULTI_SELECT" => "N",
                                		"CHILD_MENU_TYPE" => "left",
                                		"DELAY" => "N",
                                		"MAX_LEVEL" => "1",
                                		"MENU_CACHE_GET_VARS" => array(
                                		),
                                		"MENU_CACHE_TIME" => "3600",
                                		"MENU_CACHE_TYPE" => "A",
                                		"MENU_CACHE_USE_GROUPS" => "Y",
                                		"ROOT_MENU_TYPE" => "tour",
                                		"USE_EXT" => "N",
                                		"COMPONENT_TEMPLATE" => "footer_menu"
                                	),
                                	false
                                );?>
                            </li>
                            <li>
                                <a href="#">Экскурсии</a>
                                <?$APPLICATION->IncludeComponent(
                                	"bitrix:menu",
                                	"footer_menu",
                                	array(
                                		"ALLOW_MULTI_SELECT" => "N",
                                		"CHILD_MENU_TYPE" => "left",
                                		"DELAY" => "N",
                                		"MAX_LEVEL" => "1",
                                		"MENU_CACHE_GET_VARS" => array(
                                		),
                                		"MENU_CACHE_TIME" => "3600",
                                		"MENU_CACHE_TYPE" => "A",
                                		"MENU_CACHE_USE_GROUPS" => "Y",
                                		"ROOT_MENU_TYPE" => "excursions",
                                		"USE_EXT" => "N",
                                		"COMPONENT_TEMPLATE" => "footer_menu"
                                	),
                                	false
                                );?>
                            </li>
                            <li>
                                <a href="#">Транспорт</a>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "footer_menu",
                                    array(
                                        "ALLOW_MULTI_SELECT" => "N",
                                        "CHILD_MENU_TYPE" => "left",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "1",
                                        "MENU_CACHE_GET_VARS" => array(
                                        ),
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_TYPE" => "A",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "partners",
                                        "USE_EXT" => "N",
                                        "COMPONENT_TEMPLATE" => "footer_menu"
                                    ),
                                    false
                                );?>
                                <a href="#">Размещение</a>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "footer_menu",
                                    array(
                                        "ALLOW_MULTI_SELECT" => "N",
                                        "CHILD_MENU_TYPE" => "left",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "1",
                                        "MENU_CACHE_GET_VARS" => array(
                                        ),
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_TYPE" => "A",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "placeholder",
                                        "USE_EXT" => "N",
                                        "COMPONENT_TEMPLATE" => "footer_menu"
                                    ),
                                    false
                                );?>
                            </li>
                            <li>
                                <a href="#">Другое</a>
                                <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "footer_menu",
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "left",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "other",
                                    "USE_EXT" => "N",
                                    "COMPONENT_TEMPLATE" => "footer_menu"
                                ),
                                false
                            );?>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-info">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <img src="<?=SITE_TEMPLATE_PATH?>/images/logowhite.png">
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <p><? includeArea("footer_logo_text"); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-address">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <a class="button outline" href="/kontakty/ ">Как проехать</a>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <p><? includeArea('address'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="wrapper">
                    <div class="footer-news">
                        <h3><? includeArea('news'); ?></h3>
                        <ul class="nav navbar-nav">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "footer_news",
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
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "N",
                                    "DISPLAY_PICTURE" => "N",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "27",
                                    "IBLOCK_TYPE" => "content",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "N",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "2",
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
                                    "COMPONENT_TEMPLATE" => "footer_news"
                                ),
                                false
                            );?>
                            <li>
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <a class="button" href="<?=SITE_DIR."news/"?>">Все новости</a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-social">
                        <a href="#" class="i-whatsapp"></a>
                        <a href="#" class="i-viber"></a>
                        <a href="#" class="i-telegram"></a>
                        <a href="#" class="i-instagram"></a>
                        <a href="#" class="i-facebook"></a>
                        <a href="#" class="i-vkontakte"></a>
                    </div>
                    <div class="footer-social-lema">
                        <span>© ООО ТК "Ладья" 2005 - <?=date('Y');?> <br>Копирование материалов сайта запрещено</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="hotel_maps" style="display: none;height: 600px; width: 1200px" data-options='{"touch": false}' ></div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQdeW-vqap_v_q7sEBWA5e9Wl_PHBehBM&callback">
    </script>
</footer>
</body>
</html>