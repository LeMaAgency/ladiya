<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? if (!empty($arResult["PROPERTIES"]["RESERVATION_SCRIPT"]["VALUE"])): ?>
    <div class="text__block__wrap">
        <div class="container">
            <script type="text/javascript">var frameScrollTop=0;
                var exc_iframe_resize = function (event) {
                    if (event.origin !== "http://ekskursiya-kmv.ru") return;
                    var exc_iframe = document.getElementById("exc_iframe");
                    if (exc_iframe) {
                        msg=event.data.split(" ");
                        if (msg[1]==1) {
                            frameScrollTop=jQuery( window).scrollTop();
                            jQuery( window ).scrollTop( 0 );
                        }
                        exc_iframe.style.height = msg[0] + "px";
                        if (msg[1]==0 && frameScrollTop > 0) {
                            jQuery( window ).scrollTop( frameScrollTop );
                            frameScrollTop =0;
                        }
                    }
                };
                if (window.addEventListener) { window.addEventListener("message", exc_iframe_resize, false); }
                else if (window.attachEvent) { window.attachEvent("onmessage", exc_iframe_resize); }
            </script>
            <iframe src="http://ekskursiya-kmv.ru/excursions?wlabel=10" frameborder=0 scrolling="no" width="100%" id="exc_iframe"></iframe>
        </div>
        </div>
<?else:?>
    <div class="text__block__wrap">
        <div class="container">
            <div class="text__block">
                <? if ($arResult["DETAIL_TEXT"]): ?>
                    <? echo $arResult["DETAIL_TEXT"]; ?>
                <? endif ?>
            </div>
        </div>
    </div>
<?endif;?>