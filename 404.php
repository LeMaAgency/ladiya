<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ошибка: 404 - Страница не найдена");
?>
    <div class="text__block__wrap">
        <div class="container">
            <div class="text__block">
                <div class="page_404">
                    <img class="img_404" src="<?=SITE_DIR.'assets/img/404.png'?>" alt="">
                    <p class="text">
                        ОШИБКА <br>
                        СТРАНИЦА НЕ НАЙДЕНА <br>
                        НЕПРАВИЛЬНО НАБРАН АДРЕС ИЛИ ТАКОЙ СТРАНИЦЫ НЕ СУЩЕСТВУЕТ</p>
                    <a class="main_page_btn" href="/">Перейти на главную</a>
                </div>
            </div>
        </div>
    </div>

    </body>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>