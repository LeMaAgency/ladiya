<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;

$assets = Asset::getInstance();
CJSCore::init(array('fx'));
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="lema.agency">
    <link rel="shortcut icon" href="/assets/favicon.ico"/>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <?
    $assets->addCss("/assets/libs/bootstrap/css/bootstrap.min.css");
    $assets->addCss("/assets/libs/font-awesome/css/font-awesome.min.css");
    $assets->addCss("/assets/libs/animate/animate.min.css");
    $assets->addCss("/assets/libs/normalize/normalize.css");
    $assets->addCss("/assets/libs/jquery/jquery-ui.min.css");
    $assets->addCss("/assets/libs/SelectFx/cs-select.css");
    $assets->addCss("/assets/libs/SelectFx/cs-skin-border.css");
    $assets->addCss("/assets/libs/jQRangeSlider/classic-min.css");
    $assets->addCss("/assets/css/fonts.css");
    $assets->addCss("/assets/css/style.css");
    $assets->addCss("/assets/css/custom.css");
    $assets->addCss("/assets/libs/fancybox/fancybox.css");
    $assets->addJs("/assets/libs/jquery/jquery.min.js");
    $assets->addJs("/assets/libs/jquery/jquery-ui.min.js");
    $assets->addJs("/assets/libs/jquery/datepicker-ru.js");
    $assets->addJs("/assets/libs/bootstrap/js/bootstrap.min.js");
    $assets->addJs("/assets/libs/SelectFx/classie.js");
    $assets->addJs("/assets/libs/SelectFx/selectFx.js");
    $assets->addJs("/assets/libs/jQRangeSlider/jQRangeSlider-min.js");
    $assets->addJs("/assets/libs/fancybox/fancybox.js");
    $assets->addJs("/assets/js/custom.js");

    $APPLICATION->ShowHead();
    ?>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?/** Подключение Битрикса **/?>
<?$APPLICATION->ShowPanel(); ?>
<?
/**
 * Функция includeArea("имя_файла");
 * Подключается в init.php
 * Использует библиотеку WM
 * Путь к файлу /include/имя_файла.php
 * .php подставляется автоматически.
 **/
?>
<!-- Шапка -->
<header class="lad-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="wrapper">
                    <div class="header icon-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="/photo/" class="icon-point i-camera"><? includeArea("photo"); ?></a></li>
                            <li><a href="/video/" class="icon-point i-play"><? includeArea("video"); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="wrapper">
                    <!-- Навигация в адаптиве -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed invert" data-toggle="collapse"
                                data-target=".header-menu" aria-expanded="false">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="header-menu collapse navbar-collapse">
                        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_multilevel", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "podmenu",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "top_multilevel"
	),
	false
);?>
                        <div class="search__header">
                            <div class="search-button" >
                                <span class="icon-point i-search" data-js-core-switch-element="search__header"></span>
                            </div>
                            <div class="search__pole">
                                <form action="/search/">
                                    <input class="search__input__control" placeholder="Поиск">
                                    <button class="search__btn icon-point i-search"></button>
                                    <span class="search__btn__close">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26 26" version="1.1">
                                            <g id="surface1">
                                                <path style=" " d="M 21.734375 19.640625 L 19.636719 21.734375 C 19.253906 22.121094 18.628906 22.121094 18.242188 21.734375 L 13 16.496094 L 7.761719 21.734375 C 7.375 22.121094 6.746094 22.121094 6.363281 21.734375 L 4.265625 19.640625 C 3.878906 19.253906 3.878906 18.628906 4.265625 18.242188 L 9.503906 13 L 4.265625 7.761719 C 3.882813 7.371094 3.882813 6.742188 4.265625 6.363281 L 6.363281 4.265625 C 6.746094 3.878906 7.375 3.878906 7.761719 4.265625 L 13 9.507813 L 18.242188 4.265625 C 18.628906 3.878906 19.257813 3.878906 19.636719 4.265625 L 21.734375 6.359375 C 22.121094 6.746094 22.121094 7.375 21.738281 7.761719 L 16.496094 13 L 21.734375 18.242188 C 22.121094 18.628906 22.121094 19.253906 21.734375 19.640625 Z "></path>
                                            </g>
                                        </svg>
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="lad-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="wrapper">
                    <div class="logo">
                        <a href="<?=SITE_DIR?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" height="55px"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="wrapper">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target=".main-menu" aria-expanded="false">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="main-menu collapse navbar-collapse">
                        <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"logo_other_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "other",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "more",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "logo_other_menu"
	),
	false
); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu", 
                            "logo_menu", 
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "other",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "2",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "ROOT_MENU_TYPE" => "logo",
                                "USE_EXT" => "Y",
                                "COMPONENT_TEMPLATE" => "logo_menu"
                            ),
                            false
                        ); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>