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
<!--<div class="text__block__wrap">-->
<!--    <div class="container">-->
<!--        <div class="text__block">-->
<!--            --><?// if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>
<!--                <img-->
<!--                        class="detail_picture"-->
<!--                        border="0"-->
<!--                        src="--><?//= $arResult["DETAIL_PICTURE"]["SRC"] ?><!--"-->
<!--                        width="--><?//= $arResult["DETAIL_PICTURE"]["WIDTH"] ?><!--"-->
<!--                        height="--><?//= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?><!--"-->
<!--                        alt="--><?//= $arResult["DETAIL_PICTURE"]["ALT"] ?><!--"-->
<!--                        title="--><?//= $arResult["DETAIL_PICTURE"]["TITLE"] ?><!--"-->
<!--                />-->
<!--            --><?// endif ?>
<!--            --><?// if ($arResult["DETAIL_TEXT"]): ?>
<!--                --><?// echo $arResult["DETAIL_TEXT"]; ?>
<!--            --><?// endif ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<? if(!empty($arResult['DISPLAY_PROPERTIES']['ELEM_HEAD_PICTURE'])):?>
    <? $this->SetViewTarget('detail_head_pic');?>
        <?=$arResult['DISPLAY_PROPERTIES']['ELEM_HEAD_PICTURE']['FILE_VALUE']['SRC']?>
    <? $this->EndViewTarget();?>
<?endif;?>
<section class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 col-lg-4">
                <form  class="form__filter" action="<?=SITE_DIR?>ajax/<?=$arResult["PROPERTIES"]["AJAX_FILE"]["VALUE"]?>" id="order-rent_bus">
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
                            <span>Место встречи</span>
                        </div>
                        <div class="form__filter__input  it-block">
                            <select name="select-from" class="form__filter__select__control cs-select cs-skin-border">
                                <option value="" selected="selected"></option>
                                <?
                                foreach ($arResult["DESTINATION_POINTS"] as $option)
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
                                foreach ($arResult["DESTINATION_POINTS"] as $option)
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
                            <input type="text" class="form__filter__input__control filter__item__date__inp" id="date-arrive" name="date-arrive" placeholder="Выбрать дату">
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
            </div>
            <div class="col-xs-12 col-md-8 col-lg-8 results">
                    Some text...
            </div>
        </div>
    </div>
</section>