<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Аренда автобусов");
CModule::IncludeModule('iblock');

?>

    <div class="head-img head-img_rent-bus">
        <div class="lad-slideshow__block-title">
            <h1 class="lad-slideshow__block-title__h1">Аренда автобусов</h1>
        </div>
    </div>

<!--    <section class="breadcrumbs">-->
<!--        <div class="container">-->
<!--            <ol class="breadcrumb">-->
<!--                <li><a href="#">Главная</a></li>-->
<!--                <li><a href="#">Транспорт</a></li>-->
<!--                <li class="active">Аренда автобусов</li>-->
<!--            </ol>-->
<!--        </div>-->
<!--    </section>-->
<? $APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "",
    Array(
        "PATH" => "",
        "SITE_ID" => "s1",
        "START_FROM" => "0"
    )
); ?>
    <section class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-4">
                    <form  class="form__filter" action="<?=SITE_DIR?>ajax/rent_bus-order.php" id="order-rent_bus">
                        <div class="form__filter__title">
                            <span>Оставить заявку</span>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Имя</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <input name="name" class="form__filter__input__control" type="text">
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Телефон</span>
                            </div>
                            <div class="form__filter__input it-block">
                                <input name="phone" class="form__filter__input__control" type="text">
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>E-mail</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <input name="email" class="form__filter__input__control" type="text">
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>

                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Количество мест</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <select name="count-of-seats" class="form__filter__select__control cs-select cs-skin-border">
                                    <option value="" selected="selected"></option>
                                    <option value="до 14 мест" >до 14 мест</option>
                                    <option value="15-20 мест" >15-20 мест</option>
                                    <option value="свыше 40 мес">свыше 40 мес</option>
                                </select>
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Дата поездки</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <input type="text" class="form__filter__input__control filter__item__date__inp" id="date-arrive" name="date-arrive" placeholder="Выбрать дату">
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Место назначения</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <input name="destination" class="form__filter__input__control" type="text">
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Комментарий</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <textarea name="comment" class="form__filter__text__control"></textarea>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__btn">
                                <input type="submit" class="form__filter__btn__control"></input>
                            </div>
                        </div>
                    </form>
<!--                    <div class="form__filter">-->
<!--                        <div class="form__filter__title">-->
<!--                            <span>Оставить заявку</span>-->
<!--                        </div>-->
<!--                        <div class="form__filter__item">-->
<!--                            <div class="form__filter__item__name">-->
<!--                                <span>Имя</span>-->
<!--                            </div>-->
<!--                            <div class="form__filter__input">-->
<!--                                <input class="form__filter__input__control" type="text">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form__filter__item">-->
<!--                            <div class="form__filter__item__name">-->
<!--                                <span>Телефон</span>-->
<!--                            </div>-->
<!--                            <div class="form__filter__input">-->
<!--                                <input class="form__filter__input__control" type="text">-->
<!--                                <div class="form__filter__input__log">Вы не выбрали!</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form__filter__item">-->
<!--                            <div class="form__filter__item__name">-->
<!--                                <span>E-mail</span>-->
<!--                            </div>-->
<!--                            <div class="form__filter__input">-->
<!--                                <input class="form__filter__input__control" type="text">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form__filter__item">-->
<!--                            <div class="form__filter__item__name">-->
<!--                                <span>Место встречи</span>-->
<!--                            </div>-->
<!--                            <div class="form__filter__input">-->
<!--                                <select name="select" class="form__filter__select__control cs-select cs-skin-border">-->
<!--                                    <option value="1" selected="selected">Выбрать</option>-->
<!--                                    <option value="2">Белокуриха</option>-->
<!--                                    <option value="3">Бийск</option>-->
<!--                                    <option value="4">Новоалтайск</option>-->
<!--                                    <option value="5">Рубцовск</option>-->
<!--                                    <option value="6">Славгород</option>-->
<!--                                </select>-->
<!--                                <div class="form__filter__input__log">Вы не выбрали!</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form__filter__item">-->
<!--                            <div class="form__filter__item__name">-->
<!--                                <span>Место назначения</span>-->
<!--                            </div>-->
<!--                            <div class="form__filter__input">-->
<!--                                <select name="select" class="form__filter__select__control cs-select cs-skin-border">-->
<!--                                    <option value="1" selected="selected">Выбрать</option>-->
<!--                                    <option value="2">Белокуриха</option>-->
<!--                                    <option value="3">Бийск</option>-->
<!--                                    <option value="4">Новоалтайск</option>-->
<!--                                    <option value="5">Рубцовск</option>-->
<!--                                    <option value="6">Славгород</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form__filter__item">-->
<!--                            <div class="form__filter__item__name">-->
<!--                                <span>Дата встречи</span>-->
<!--                            </div>-->
<!--                            <div class="form__filter__input">-->
<!--                                <input type="text" class="form__filter__input__control filter__item__date__inp" id="date-arrive" name="date-arrive" placeholder="Выбрать дату">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form__filter__item">-->
<!--                            <div class="form__filter__item__name">-->
<!--                                <span>Комментарий</span>-->
<!--                            </div>-->
<!--                            <div class="form__filter__input">-->
<!--                                <textarea class="form__filter__text__control"></textarea>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form__filter__item">-->
<!--                            <div class="form__filter__btn">-->
<!--                                <button class="form__filter__btn__control">Отправить</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="button-invert-wrap"><a href="#" class="button-invert"><span>показать все маршруты</span></a></div>-->
                </div>
                <div class="col-xs-12 col-md-8 col-lg-8 results">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="head">
                                <div class="buttons hidden-xs">
                                    <button class="list">
                                        <span></span>
                                        <span></span>
                                    </button>
                                    <a href="/hotel?VIEW=1">
                                        <button class="grid">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__img">
                            <img src="/local/templates/main/images/bus-item/bus-1.png" alt="">
                        </div>
                        <div class="item-card__content">
                            <div class="item-card__content__info">Mersedes (15-18 мест)
                                <span></span>
                            </div>
                            <div class="item-card__content__info_light">Маршрут поездки:
                                <span> Медовые водопады + г. Кольцо</span>
                            </div>
                            <div class="item-card__content__info_light">Время поездки:
                                <span> 3 часа</span>
                            </div>
                            <div class="item-card__content__footer clearfix">
                                <div class="item-card__content__price">Стоимость поездки:
                                    <span class="item-card__content__price__number"><span>7 500</span> руб</span>
                                </div>
                                <a href="" class="item-card__content__more"><span>отправить заявку</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__img">
                            <img src="/local/templates/main/images/bus-item/bus-2.png" alt="">
                        </div>
                        <div class="item-card__content">
                            <div class="item-card__content__info">Mersedes (15-18 мест)
                                <span></span>
                            </div>
                            <div class="item-card__content__info_light">Маршрут поездки:
                                <span> Медовые водопады + г. Кольцо</span>
                            </div>
                            <div class="item-card__content__info_light">Время поездки:
                                <span> 3 часа</span>
                            </div>
                            <div class="item-card__content__footer clearfix">
                                <div class="item-card__content__price">Стоимость поездки:
                                    <span class="item-card__content__price__number"><span>8 300</span> руб</span>
                                </div>
                                <a href="" class="item-card__content__more"><span>отправить заявку</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__img">
                            <img src="/local/templates/main/images/bus-item/bus-1.png" alt="">
                        </div>
                        <div class="item-card__content">
                            <div class="item-card__content__info">Mersedes (15-18 мест)
                                <span></span>
                            </div>
                            <div class="item-card__content__info_light">Маршрут поездки:
                                <span> Медовые водопады + г. Кольцо</span>
                            </div>
                            <div class="item-card__content__info_light">Время поездки:
                                <span> 3 часа</span>
                            </div>
                            <div class="item-card__content__footer clearfix">
                                <div class="item-card__content__price">Стоимость поездки:
                                    <span class="item-card__content__price__number"><span>7 500</span> руб</span>
                                </div>
                                <a href="" class="item-card__content__more"><span>отправить заявку</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__img">
                            <img src="/local/templates/main/images/bus-item/bus-2.png" alt="">
                        </div>
                        <div class="item-card__content">
                            <div class="item-card__content__info">Mersedes (15-18 мест)
                                <span></span>
                            </div>
                            <div class="item-card__content__info_light">Маршрут поездки:
                                <span> Медовые водопады + г. Кольцо</span>
                            </div>
                            <div class="item-card__content__info_light">Время поездки:
                                <span> 3 часа</span>
                            </div>
                            <div class="item-card__content__footer clearfix">
                                <div class="item-card__content__price">Стоимость поездки:
                                    <span class="item-card__content__price__number"><span>8 300</span> руб</span>
                                </div>
                                <a href="" class="item-card__content__more"><span>отправить заявку</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__img">
                            <img src="/local/templates/main/images/bus-item/bus-1.png" alt="">
                        </div>
                        <div class="item-card__content">
                            <div class="item-card__content__info">Mersedes (15-18 мест)
                                <span></span>
                            </div>
                            <div class="item-card__content__info_light">Маршрут поездки:
                                <span> Медовые водопады + г. Кольцо</span>
                            </div>
                            <div class="item-card__content__info_light">Время поездки:
                                <span> 3 часа</span>
                            </div>
                            <div class="item-card__content__footer clearfix">
                                <div class="item-card__content__price">Стоимость поездки:
                                    <span class="item-card__content__price__number"><span>7 500</span> руб</span>
                                </div>
                                <a href="" class="item-card__content__more"><span>отправить заявку</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-base">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>