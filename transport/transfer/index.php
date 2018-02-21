<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Трансфер");

CModule::IncludeModule('iblock');

$allOptions = array();
$places = array();
$arFilter = array("IBLOCK_ID"=>"23");
$arSelectFields = array("ID","NAME");
$places = CIBlockElement::GetList(
    array(),
    $arFilter,
    false,
    array(),
    $arSelectFields
);
while($ob = $places->GetNextElement())
{
    $allOptions[] = $ob->GetFields();
}


?>

    <section class="lad-slideshow">
        <div class="lad-slideshow__block-title">
            <h1 class="lad-slideshow__block-title__h1">ТРАНСФЕР<br>ВСТРЕЧА И ПРОВОДЫ</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <div id="slideshow" class="slideshow invert carousel" data-interval="300000"
                             data-ride="carousel">

                            <ul class="slider carousel-inner">
                                <li class="item active">
                                    <div class="item-block">
                                        <span class="image image-transfer-1"></span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image image-transfer-2"></span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image image-transfer-3"></span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image image-transfer-4"></span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-block">
                                        <span class="image image-transfer-5"></span>
                                    </div>
                                </li>
                            </ul>
                            <ul class="carousel-indicators carousel-indicators_center">
                                <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                                <li data-target="#slideshow" data-slide-to="1"></li>
                                <li data-target="#slideshow" data-slide-to="2"></li>
                                <li data-target="#slideshow" data-slide-to="3"></li>
                                <li data-target="#slideshow" data-slide-to="4"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    <form  class="form__filter" action="<?=SITE_DIR?>ajax/transfer-order.php" id="order-transfer">
                        <div class="form__filter__title">
                            <span>Оставить заявку</span>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Имя</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <input name="name" class="form__filter__input__control js-clearable" type="text">
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Телефон</span>
                            </div>
                            <div class="form__filter__input it-block">
                                <input name="phone" class="form__filter__input__control js-clearable" type="text">
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>E-mail</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <input name="email" class="form__filter__input__control js-clearable" type="text">
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Место встречи</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <select name="select-from" class="form__filter__select__control cs-select cs-skin-border">
                                    <option value="" selected="selected"></option>
                                    <?
                                    foreach ($allOptions as $option)
                                    {
                                        echo "<option value=\"".$option["NAME"]."\">".$option["NAME"]."</option>";
                                    }
                                    ?>
                                </select>
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Место назначения</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <select name="select-to" class="form__filter__select__control cs-select cs-skin-border">
                                    <option value="" selected="selected"></option>
                                    <?
                                    foreach ($allOptions as $option)
                                    {
                                        echo "<option value=\"".$option["NAME"]."\">".$option["NAME"]."</option>";
                                    }
                                    ?>
                                </select>
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Дата встречи</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <input type="text" class="form__filter__input__control filter__item__date__inp js-clearable" id="date-arrive"
                                       name="date-arrive" placeholder="Выбрать дату">
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Комментарий</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <textarea name="comment" class="form__filter__text__control js-clearable"></textarea>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__btn">
                                <input type="submit" class="form__filter__btn__control "></input>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-md-8 col-lg-8 results">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="core__text">
                                <h1>Трансфер</h1>
                                <p><span style="font-weight: bold;">КАВКАЗСКИЕ МИНЕРАЛЬНЫЕ ВОДЫ<br><span><br>Условия встречи туристов</span> </span></p>

                                <table class="tbc" cellspacing="0" cellpadding="0" border="0" style="width: 100%">
                                    <tbody>
                                    <tr><th>
                                            <p><span style="font-weight: bold;">Прибытие</span></p>
                                        </th><th>
                                            <p><span style="font-weight: bold;">Место встречи</span></p>
                                        </th><th>
                                            <p><span style="font-weight: bold;">Табличка</span></p>
                                        </th></tr>
                                    <tr>
                                        <td>
                                            <p>Аэропорт</p>
                                        </td>
                                        <td>
                                            <p>В зале прилета аэропорта</p>
                                        </td>
                                        <td>
                                            <p>ЛАДЬЯ</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Ж/д вокзал</p>
                                        </td>
                                        <td>
                                            <p>Около вагона</p>
                                        </td>
                                        <td>
                                            <p>ЛАДЬЯ</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p><b><br>Индивидуальный трансфер</b> </span></p>

                                <table style="width: 100%">
                                    <tbody>
                                    <tr><th>
                                            <p><span style="font-weight: bold;">Место встречи</span></p>
                                        </th><th>
                                            <p><span style="font-weight: bold;">Место назначения</span></p>
                                        </th><th>
                                            <p><span style="font-weight: bold;">стоимость за машину</span></p>
                                        </th></tr>
                                    <tr>
                                        <td>
                                            <p>От аэропорта Мин. Воды</p>
                                        </td>
                                        <td>
                                            <p>Кисловодск</p>
                                        </td>
                                        <td>
                                            <p>1200 руб.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>От аэропорта Мин. Воды</p>
                                        </td>
                                        <td>
                                            <p>Пятигорск</p>
                                        </td>
                                        <td>
                                            <p>800 &nbsp;руб.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>От аэропорта Мин. Воды</p>
                                        </td>
                                        <td>
                                            <p>Железноводск</p>
                                        </td>
                                        <td>
                                            <p>800 руб.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>От аэропорта Мин. Воды</p>
                                        </td>
                                        <td>
                                            <p>Ессентуки</p>
                                        </td>
                                        <td>
                                            <p>950&nbsp;руб.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>От ж/д вокзала г. Пятигорск</p>
                                        </td>
                                        <td>
                                            <p>до санатория</p>
                                        </td>
                                        <td>
                                            <p>200&nbsp;руб.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>От ж/д вокзала г.Железноводск<br>(станция Бештау)</p>
                                        </td>
                                        <td>
                                            <p>до санатория</p>
                                        </td>
                                        <td>
                                            <p>350 руб.</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>