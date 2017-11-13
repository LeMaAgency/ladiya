<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
?>


    <div class="tour-detail">

        <section class="container-fluid tour-detail_photos">
            <div class="row">

                <div class="carousel">

                    <div class="container">
                        <div class="title">
                            <h3>Кавказская мозайка</h3>
                            <p>5 дней 4 ночи</p>
                        </div>
                        <div class="location">
                            <p>Приэльбрусье</p>
                        </div>
                    </div>

                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <div class="img" style="background-image: url(img/carousel/1.png);"></div>
                        </div>
                        <div class="item">
                            <div class="img" style="background-image: url(img/carousel/2.png);"></div>
                        </div>
                        <div class="item">
                            <div class="img" style="background-image: url(img/carousel/3.png);"></div>
                        </div>
                        <div class="item">
                            <div class="img" style="background-image: url(img/carousel/4.png);"></div>
                        </div>
                        <div class="item">
                            <div class="img" style="background-image: url(img/carousel/5.png);"></div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="container tour-detail_tabs">
            <div class="row">
                <div class="tour-detail_tabs__wrapper">

                    <!-- TAB BUTTONS -->
                    <ul class="tablist main" role="tablist">
                        <li role="presentation"
                        ><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Описание</a>
                        </li>
                        <li role="presentation">
                            <a href="#program" aria-controls="program" role="tab" data-toggle="tab">Программа</a>
                        </li>
                        <li role="presentation">
                            <a href="#price" aria-controls="price" role="tab" data-toggle="tab">Стоимость</a>
                        </li>
                        <li role="presentation">
                            <a href="#jotting" aria-controls="jotting" role="tab" data-toggle="tab">Памятка тура</a>
                        </li>
                        <li role="presentation">
                            <a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Отзывы</a>
                        </li>
                    </ul>

                    <div class="bg">
                        <!-- ICONS -->
                        <div class="icons">
                            <div class="ruble">
                                <h5>Стоимость</h5>
                                <p>от 12000 рублей</p>
                            </div>

                            <div class="backpack">
                                <h5>Тип тура</h5>
                                <p>Экскурсионный</p>
                            </div>

                            <div class="calendar">
                                <h5>Продолжительность</h5>
                                <p>10 дней</p>
                            </div>

                            <div class="bus">
                                <h5>Транспорт</h5>
                                <p>Автобус</p>
                            </div>
                        </div>

                        <!-- TAB CONTENT -->
                        <div class="tab-content main">

                            <div role="tabpanel" class="tab-pane" id="description">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 text">

                                        <div>
                                            <p>Знакомство с Кавказом лучше всего начинать с посещения Кавказских Минеральных Вод.</p>
                                            <p>Этот чудесный уголок нашей родины во все времена притягивал сотни тысяч людей.</p>
                                            <p>Здесь жили и творили великие А.С. Пушкин, М.Ю. Лермонтов, Л.Н. Толстой  Ф.И. Шаляпин и многие другие люди, навсегда оставившие след в истории России.</p>
                                            <p>Вас ждут увлекательные экскурсии в горные курорты Домбая, Приэльбрусья, на Голубое озеро, а пикник на Медовых водопадах навсегда сделает вас приверженцами кавказской кухни.</p>
                                        </div>

                                        <h5>Заезды туристов каждую среду:</h5>
                                        <ul>
                                            <li>01, 08, 15, 22  февраля</li>
                                            <li>01, 08, 15, 22, 29 марта</li>
                                            <li>05, 12, 19, 26 апреля</li>
                                            <li>03, 10, 17, 24, 31  мая</li>
                                            <li>07, 14, 21, 28 июня</li>
                                            <li>05, 12, 19, 26 июля</li>
                                            <li>02, 09, 16, 23, 30 августа</li>
                                            <li>06, 13, 20, 27 сентября</li>
                                            <li>04, 11, 18, 25 октября</li>
                                            <li>01, 08, 15, 22, 29 ноября</li>
                                            <li>06, 13, 20, 27 декабря</li>
                                        </ul>

                                    </div>
                                    <div class="col-xs-12 col-md-6">

                                        <h5>Маршрут: Пятигорск - Железноводск - Приэльбрусье - Голубое озеро Домбай - Кисловодск - г.Кольцо - Медовые водопады</h5>

                                        <div id="map"></div>

                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="program">
                                <div class="row">
                                    <div class="col-xs-12">

                                        <!-- TAB BUTTONS -->
                                        <ul class="tablist inner" role="tablist">
                                            <li role="presentation"
                                            ><a href="#day1" aria-controls="day1" role="tab" data-toggle="tab">День 1</a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#day2" aria-controls="day2" role="tab" data-toggle="tab">День 2</a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#day3" aria-controls="day3" role="tab" data-toggle="tab">День 3</a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#day4" aria-controls="day4" role="tab" data-toggle="tab">День 4</a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#day5" aria-controls="day5" role="tab" data-toggle="tab">День 5</a>
                                            </li>
                                        </ul>

                                        <!-- TAB CONTENT -->
                                        <div class="tab-content inner">

                                            <div role="tabpanel" class="tab-pane" id="day1">
                                                <div class="img" style="background-image: url(img/proval.png);"></div>
                                                <div class="text">
                                                    <h6>День 1</h6>
                                                    <p>Приезд в г. Пятигорск. Трансфер до гостиницы. Размещение</p>
                                                    <p>Обзорная экскурсия по культурному центру - г. Пятигорску</p>
                                                    <p class="border">Вы посетите Лермонтовские места, уникальное озеро Провал. Увидите памятник Остапу  Бендеру, Эолову арфу, парк “Цветник”</p>
                                                    <p>При желании – подъем на канатной дороге на вершину г. Машук (за доп. плату)</p>
                                                    <p>Экскурсия в «зеленую жемчужину» КМВ г. Железноводск</p>
                                                    <p>Возвращение в Пятигорск. Ужин</p>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="day2">
                                                <div class="img" style="background-image: url(img/proval.png);"></div>
                                                <div class="text">
                                                    <h6>День 2</h6>
                                                    <p>Приезд в г. Пятигорск. Трансфер до гостиницы. Размещение</p>
                                                    <p>Обзорная экскурсия по культурному центру - г. Пятигорску</p>
                                                    <p class="border">Вы посетите Лермонтовские места, уникальное озеро Провал. Увидите памятник Остапу  Бендеру, Эолову арфу, парк “Цветник”</p>
                                                    <p>При желании – подъем на канатной дороге на вершину г. Машук (за доп. плату)</p>
                                                    <p>Экскурсия в «зеленую жемчужину» КМВ г. Железноводск</p>
                                                    <p>Возвращение в Пятигорск. Ужин</p>
                                                </div>

                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="day3">
                                                <div class="img" style="background-image: url(img/proval.png);"></div>
                                                <div class="text">
                                                    <h6>День 3</h6>
                                                    <p>Приезд в г. Пятигорск. Трансфер до гостиницы. Размещение</p>
                                                    <p>Обзорная экскурсия по культурному центру - г. Пятигорску</p>
                                                    <p class="border">Вы посетите Лермонтовские места, уникальное озеро Провал. Увидите памятник Остапу  Бендеру, Эолову арфу, парк “Цветник”</p>
                                                    <p>При желании – подъем на канатной дороге на вершину г. Машук (за доп. плату)</p>
                                                    <p>Экскурсия в «зеленую жемчужину» КМВ г. Железноводск</p>
                                                    <p>Возвращение в Пятигорск. Ужин</p>
                                                </div>

                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="day4">
                                                <div class="img" style="background-image: url(img/proval.png);"></div>
                                                <div class="text">
                                                    <h6>День 4</h6>
                                                    <p>Приезд в г. Пятигорск. Трансфер до гостиницы. Размещение</p>
                                                    <p>Обзорная экскурсия по культурному центру - г. Пятигорску</p>
                                                    <p class="border">Вы посетите Лермонтовские места, уникальное озеро Провал. Увидите памятник Остапу  Бендеру, Эолову арфу, парк “Цветник”</p>
                                                    <p>При желании – подъем на канатной дороге на вершину г. Машук (за доп. плату)</p>
                                                    <p>Экскурсия в «зеленую жемчужину» КМВ г. Железноводск</p>
                                                    <p>Возвращение в Пятигорск. Ужин</p>
                                                </div>

                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="day5">
                                                <div class="img" style="background-image: url(img/proval.png);"></div>
                                                <div class="text">
                                                    <h6>День 5</h6>
                                                    <p>Приезд в г. Пятигорск. Трансфер до гостиницы. Размещение</p>
                                                    <p>Обзорная экскурсия по культурному центру - г. Пятигорску</p>
                                                    <p class="border">Вы посетите Лермонтовские места, уникальное озеро Провал. Увидите памятник Остапу  Бендеру, Эолову арфу, парк “Цветник”</p>
                                                    <p>При желании – подъем на канатной дороге на вершину г. Машук (за доп. плату)</p>
                                                    <p>Экскурсия в «зеленую жемчужину» КМВ г. Железноводск</p>
                                                    <p>Возвращение в Пятигорск. Ужин</p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="price">

                                <form class="filter">
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-4">
                                            <div class="input">
                                                <select name="">
                                                    <option disabled="disabled" selected="selected">Дата заезда</option>
                                                    <option value="3">1</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-4">
                                            <div class="input">
                                                <select name="">
                                                    <option disabled="disabled" selected="selected">Гостиница</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-4">
                                            <div class="input">
                                                <select name="">
                                                    <option disabled="disabled" selected="selected">Кол-во дней</option>
                                                    <option value="2">1</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-4">
                                            <div class="input">
                                                <select name="">
                                                    <option disabled="disabled" selected="selected">Транспорт</option>
                                                    <option value="3">1</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-4">
                                            <div class="input">
                                                <select name="">
                                                    <option disabled="disabled" selected="selected">Кол-во людей</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-4">
                                            <div class="input">
                                                <input id="styled-checkbox" type="checkbox" value="value1">
                                                <label for="styled-checkbox">Одноместное размещение</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="range">

                                        <h6>Цена</h6>

                                        <span class="min_text">от 1200 р</span>
                                        <span class="max_text">25000 р</span>

                                        <div class="range__slider">
                                            <div class="ui-slider-handle"><span class="min">7500</span></div>
                                            <div class="ui-slider-handle"><span class="max">21000</span></div>
                                        </div>
                                        <input type="hidden" id="#range">

                                    </div>

                                    <button class="calculate">Рассчитать стоимость*</button>

                                    <div class="disclaimer">стоимость тура на 1 человека</div>

                                </form>



                                <table>
                                    <thead>
                                    <tr>
                                        <th scope="col">Дата заезда</th>
                                        <th scope="col">Гостиница</th>
                                        <th scope="col">Кол-во дней</th>
                                        <th scope="col">Транспорт</th>
                                        <th scope="col">Кол-во людей</th>
                                        <th scope="col">Стоимость</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td data-label="Дата заезда">7</td>
                                        <td data-label="Гостиница">Бизнес-отель Бештау</td>
                                        <td data-label="Кол-во дней">7</td>
                                        <td data-label="Транспорт">Аренда автомобиля</td>
                                        <td data-label="Кол-во людей">7</td>
                                        <td data-label="Стоимость">7500</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" data-label="Дата заезда">5</td>
                                        <td data-label="Гостиница">Гостиница Бештау</td>
                                        <td data-label="Кол-во дней">5</td>
                                        <td data-label="Транспорт">Автобус</td>
                                        <td data-label="Кол-во людей">1</td>
                                        <td data-label="Стоимость">21000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" data-label="Дата заезда">10</td>
                                        <td data-label="Гостиница">Пансионат Искра</td>
                                        <td data-label="Кол-во дней">10</td>
                                        <td data-label="Транспорт">Автобус</td>
                                        <td data-label="Кол-во людей">10</td>
                                        <td data-label="Стоимость">7500</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div role="tabpanel" class="tab-pane" id="jotting">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>Посадка на экскурсии для индивидуальных туристов осуществляется от входа в парк “Цветник”. До места посадки туристы добираются сами. Это не сложно, так как растояние от пансионата “Искра” - 100 метров, от отеля "Машук" - 600 метров, от гостиницы “Спорт” – три трамвайные остановки, от гостиницы “Интурист” – 10 мин пешком.  От гостиницы “Бештау” лучше заказать такси.ВАЖНО! Посадка на экскурсии для индивидуальных туристов осуществляется от входа в парк “Цветник”. До места посадки туристы добираются сами. Это не сложно, так как растояние от пансионата “Искра” - 100 метров, от отеля "Машук" - 600 метров, от гостиницы “Спорт” – три трамвайные остановки, от гостиницы “Интурист” – 10 мин пешком.  От гостиницы “Бештау” лучше заказать такси.</p>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="reviews">

                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <button class="booking">Забронировать</button>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <button class="full_program">Посмотреть полную программу тура</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="container tour-detail_gallery">

            <div class="row">
                <div class="col-xs-12">
                    <div class="title">
                        <h3>Фотогалерея</h3>
                    </div>
                </div>
            </div>

            <div class="row slider">

                <div class="col-xs-12 col-sm-6 col-md-4 item">
                    <a href="img/carousel/1.png" data-fancybox="photo">
                        <span style="background-image: url(img/carousel/1.png);"></span>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 item">
                    <a href="img/carousel/2.png" data-fancybox="photo">
                        <span style="background-image: url(img/carousel/2.png);"></span>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 item">
                    <a href="img/carousel/3.png" data-fancybox="photo">
                        <span style="background-image: url(img/carousel/3.png);"></span>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 item">
                    <a href="img/carousel/1.png" data-fancybox="photo">
                        <span style="background-image: url(img/carousel/4.png);"></span>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 item">
                    <a href="img/carousel/2.png" data-fancybox="photo">
                        <span style="background-image: url(img/carousel/5.png);"></span>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 item">
                    <a href="img/carousel/3.png" data-fancybox="photo">
                        <span style="background-image: url(img/carousel/3.png);"></span>
                    </a>
                </div>

            </div>
        </section>

        <section class="container tour-detail_interest">

            <div class="row">
                <div class="col-xs-12">
                    <div class="title">
                        <h3>Вас может заинтересовать</h3>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-4 item">
                    <div class="img" style="background-image: url(img/carousel/1.png)">
                        <div class="discount">-20%</div>
                        <h3>Кавказская мозаика</h3>

                        <div class="text">
                            <div class="table">
                                <div class="cell">
                                    <p> В стоимость тура входит: проживание, питание по программе (для организованных групп), и экскурсионное обслуживание, страховка, услуги гидов.</p>

                                    <a href="">Подробнее</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="info">
                        <div class="text">

                            <h5>Экскурсионный тур</h5>
                            <div>
                                <span>5 дней</span>
                                <span>4 ночи</span>
                            </div>

                        </div>

                        <div class="price">
                            <div>
                                <span><bold>от 15 400 руб</bold></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 item">
                    <div class="img" style="background-image: url(img/carousel/2.png)">
                        <div class="discount">-20%</div>
                        <h3>Кавказская мозаика</h3>

                        <div class="text">
                            <div class="table">
                                <div class="cell">
                                    <p> В стоимость тура входит: проживание, питание по программе (для организованных групп), и экскурсионное обслуживание, страховка, услуги гидов.</p>

                                    <a href="">Подробнее</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="info">
                        <div class="text">

                            <h5>Экскурсионный тур</h5>
                            <div>
                                <span>5 дней</span>
                                <span>4 ночи</span>
                            </div>

                        </div>

                        <div class="price">
                            <div>
                                <span><bold>от 15 400 руб</bold></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 item">
                    <div class="img" style="background-image: url(img/carousel/3.png)">
                        <div class="discount">-20%</div>
                        <h3>Кавказская мозаика</h3>

                        <div class="text">
                            <div class="table">
                                <div class="cell">
                                    <p> В стоимость тура входит: проживание, питание по программе (для организованных групп), и экскурсионное обслуживание, страховка, услуги гидов.</p>

                                    <a href="">Подробнее</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="info">
                        <div class="text">

                            <h5>Экскурсионный тур</h5>
                            <div>
                                <span>5 дней</span>
                                <span>4 ночи</span>
                            </div>

                        </div>

                        <div class="price">
                            <div>
                                <span><bold>от 15 400 руб</bold></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>


    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYfOA-1ATF0mTT9Ms6u7qofcQaHzgesEk&sensor=false"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/fancybox.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';
?>