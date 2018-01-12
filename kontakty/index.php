<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="text__block__wrap">
        <div class="text___block__images" style="background-image: url('/assets/img/carousel/5.png')">
            <div class="container">
                <span class="text___block__images__title"><?= $APPLICATION->ShowTitle(); ?></span>
            </div>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "",
        Array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    );?>
    <div class="text__block__wrap">
        <div class="container">
            <div class="text__block">
                <h2><? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/contacts/TITLE.php')); ?></h2>
                <div class="text__block__table">
                    <div class="text__block__table__cell">
                        <p>
                            <b><? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/contacts/address_title.php')); ?></b><br>
                            <? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/contacts/address_description.php')); ?>
                            <br>
                            <b><? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/contacts/contacts_title.php')); ?></b><br>
                            <? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/contacts/contacts_description.php')); ?>
                            <br>
                            <b><? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/contacts/email_title.php')); ?></b><br>
                            <? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/contacts/email_description.php')); ?>
                            <br>
                            <b><? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/contacts/icq_title.php')); ?></b><br>
                            <? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/contacts/icq_description.php')); ?>
                            <br>
                            <b><? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/contacts/schedule_title.php')); ?></b><br>
                            <? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/contacts/schedule_description.php')); ?>
                            <br>
                        </p>
                    </div>
                    <div class="text__block__table__cell">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:map.google.view",
                            ".default",
                            array(
                                "API_KEY" => "AIzaSyDQmNMDanuTYUgnqJhgVu4880h2qh1N1Qw",
                                "CONTROLS" => array(
                                    0 => "SMALL_ZOOM_CONTROL",
                                    1 => "TYPECONTROL",
                                    2 => "SCALELINE",
                                ),
                                "INIT_MAP_TYPE" => "ROADMAP",
                                "MAP_DATA" => "a:4:{s:10:\"google_lat\";d:44.0358712780855;s:10:\"google_lon\";d:43.05768269999995;s:12:\"google_scale\";i:17;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:4:\"TEXT\";s:95:\"Кирова просп., 90, Пятигорск, Ставропольский край, 357502\";s:3:\"LON\";d:43.05762737989426;s:3:\"LAT\";d:44.03578003459076;}}}",
                                "MAP_HEIGHT" => "450",
                                "MAP_ID" => "",
                                "MAP_WIDTH" => "600",
                                "OPTIONS" => array(
                                    0 => "ENABLE_SCROLL_ZOOM",
                                    1 => "ENABLE_DBLCLICK_ZOOM",
                                    2 => "ENABLE_DRAGGING",
                                    3 => "ENABLE_KEYBOARD",
                                ),
                                "COMPONENT_TEMPLATE" => ".default"
                            ),
                            false
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>