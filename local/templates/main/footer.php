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
                            <li>
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/images/news1.jpg">
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                        <p>В Пятигорске прошел ежегодный фестиваль национальных культур В Пятигорске
                                            прошел</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/images/news2.jpg">
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                        <p>В Пятигорске прошел ежегодный фестиваль национальных культур В Пятигорске
                                            прошел</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <a class="button" href="#">Все новости</a>
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