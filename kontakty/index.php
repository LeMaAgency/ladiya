<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="text__block__wrap">
        <div class="text___block__images" <?$APPLICATION->ShowViewContent('head_pic')?>>
            <div class="container">
                <span class="text___block__images__title"><?= $APPLICATION->ShowTitle(); ?></span>
            </div>
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
		"ELEMENT_ID" => "218",
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

<?$APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    ".default",
    array(
        "PATH" => "",
        "SITE_ID" => "s1",
        "START_FROM" => "0",
        "COMPONENT_TEMPLATE" => ".default"
    ),
    false
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