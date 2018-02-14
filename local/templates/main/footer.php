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
                        <span>© ООО ТК "Ладья" 2017 <br>Копирование материалов сайта запрещено</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="hotel_maps" style="display: none;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1519.0047569252404!2d43.06414668593344!3d44.052399894760164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40579df5a04af559%3A0x14631d7a55dec247!2z0JHQuNC30L3QtdGBLdC-0YLQtdC70Ywg0JHQtdGI0YLQsNGD!5e0!3m2!1sru!2sru!4v1517810852536" width="1200" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div id="number_info" class="hotel_number" style="display: none;">
        <div class="hotel_number__title">
            STUDIO PLUS Одноместный номер
        </div>
        <div class="hotel_number__slider">
            <img src="/assets/img/icons/calendar.svg" alt="">
            <img src="/assets/img/carousel/1.png" alt="">
            <img src="/assets/img/carousel/2.png" alt="">
            <img src="/assets/img/carousel/3.png" alt="">
            <img src="/assets/img/carousel/4.png" alt="">
            <img src="/assets/img/carousel/5.png" alt="">
        </div>
        <div class="hotel_number__price_list">
            <div class="hotel_number__price_title">Цена за номер в сутки:</div>
            <ul>
                <li>
                    <div class="span">
                        <span class="title">Основное место в номере</span>
                        <span class="price">3330р</span>
                    </div>
                </li>
                <li>
                    <div class="span">
                        <span class="title">Выкуп номера</span>
                        <span class="price">6660р</span>
                    </div>
                </li>
                <li>
                    <div class="span">
                        <span class="title">Дополнительное место в номере</span>
                        <span class="price">9990р</span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="hotel_number__description">
            <div class="hotel_number__descriprion_title">Описание:</div>
            <span>
                У санатория «Машук Аква-Терм» собственная территория более 12 га. На территории много различных клумб с цветами,
                ландшафтных дизайнерских решений, собственный парк и сосновый бор. Также недалеко от санатория находится родниковое
                озеро, на берегу которого устраиваются различные праздники, а также можно порыбачить. Собственный источник природной
                минеральной воды «Славяновская» и два бювета с минеральной водой есть в санатории «Машук Аква-Терм».
            </span>
        </div>
        <div class="hotel_number__amenity">
            <div class="hotel_number__amenity_title">Удобства:</div>
            <ul>
                <li>
                    <span>
                        <i class="fa fa-bath" aria-hidden="true"></i>
                        <span>Душевая комната</span>
                    </span>
                </li>
                <li>
                    <span>
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        <span>Аптека</span>
                    </span>
                </li>
                <li>
                    <span>
                        <i class="fa fa-wifi" aria-hidden="true"></i>
                        <span>Бесплатный Wi-Fi</span>
                    </span>
                </li>
                <li>
                    <span>
                        <i class="fa fa-bath" aria-hidden="true"></i>
                        <span>Душевая комната</span>
                    </span>
                </li>
                <li>
                    <span>
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        <span>Аптека</span>
                    </span>
                </li>
                <li>
                    <span>
                        <i class="fa fa-wifi" aria-hidden="true"></i>
                        <span>Бесплатный Wi-Fi</span>
                    </span>
                </li><li>
                    <span>
                        <i class="fa fa-bath" aria-hidden="true"></i>
                        <span>Душевая комната</span>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>