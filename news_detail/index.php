<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости");

//add js
\WM\Common\AssetManager::get()->addJsArray(array(
    //'/assets/js/jquery-ui.js',
    '//maps.googleapis.com/maps/api/js?key=AIzaSyAYfOA-1ATF0mTT9Ms6u7qofcQaHzgesEk&sensor=false',
    '/assets/js/slick.js',
    //'/assets/js/bootstrap.js',
    '/assets/js/scripts.js',
));
?>
<div class="text__block__wrap">
    <div class="text___block__images" style="background-image: url('/assets/img/carousel/5.png')">
        <div class="container">
            <span class="text___block__images__title">Новости</span>
        </div>
    </div>
</div>
<section class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li class="active">Новости</li>
        </ol>
    </div>
</section>


<div class="container">
		<div class="news">
			<div class="news__detail">
				<div class="news__detail__wrap">
                    <div class="news__detail__img">
                        <img src="/local/templates/main/images/banner1.jpg" class="news__detail__img__control">
                    </div>
                    <div class="news__detail__title">
                        <span class="news__detail__title__control">Новость</span>
                    </div>
                    <div class="news__detail__date">
                        <span class="news__detail__date__control">12.14.2017</span>
                    </div>
                    <div class="news__detail__text">
                        <p class="news__detail__text__control">
                            Накомство с Кавказом лучше всего начинать с посещения Кавказских Минеральных Вод. Этот чудесный уголок нашей родины во все времена притягивал сотни тысяч людей. Здесь жили и творили великие А.С. Пушкин, М.Ю. Лермонтов, Л.Н. Толстой, Ф.И. Шаляпин и многие другие люди, навсегда оставившие след в истории России. Вас ждут увлекательные экскурсии в горные курорты Домбая, Приэльбрусья, на Голубое озеро, а пикник на Медовых водопадах навсегда сделает вас приверженцами кавказской кухни
                        </p>
                    </div>
                    <div class="news__detail__btn">
                        <a href="/" class="button news__detail__btn__control">Назад</a>
                    </div>
				</div>
			</div>
		</div>
	</div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>