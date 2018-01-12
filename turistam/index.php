<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Туристам");
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
            <p>Текст</p>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>