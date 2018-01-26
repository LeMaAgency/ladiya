<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Партнерам");
?>
    <div class="text__block__wrap">
        <div class="text___block__images" <?$APPLICATION->ShowViewContent('head_pic')?>>
            <div class="container">
                <span class="text___block__images__title">Партнерам</span>
            </div>
        </div>
    </div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:photo.detail",
	"pages_head_picture",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "pages_head_picture",
		"DETAIL_URL" => "",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "220",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"IBLOCK_ID" => "25",
		"IBLOCK_TYPE" => "content",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
<div class="text__block__wrap">
	<div class="container">
		<div class="text__block partneram">
    <? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/partneram/title.php')); ?>
    <? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/partneram/text.php')); ?>
    <? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/partneram/title-2.php')); ?>
    <? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/partneram/links.php')); ?>
		</div>
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>