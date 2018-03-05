<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>

<div class="hotel__detail___container">
	<div class="hotel__detail___title">
		<h1><?=$arResult["NAME"]?></h1>		
	</div>
    <div class="hotel__detail___address js-hotel__maps_open" data-mapmarker="<?=$arResult["PROPERTIES"]["GOOGLE_MAP"]["VALUE"]?>">
            <span>
                <?=$arResult["PROPERTIES"]["ADDRESS"]["VALUE"]?>
            </span>						
            <?=Loc::getMessage('NEWS_DETAIL_SHOW_IN_MAP');?>
    </div>
	<div class="hotel__detail___slider">
		<div class="hotel__detail___top__slider">
            <?foreach ($arResult['PROPERTIES']['GALLERY']['PATH'] as $img):?>
                <img src="<?=$img?>" alt="">
            <?endforeach;?>
		</div>
		<div class="hotel__detail___bottom__slider">
            <?foreach ($arResult['PROPERTIES']['GALLERY']['PATH'] as $img):?>
                <img src="<?=$img?>" alt="">
            <?endforeach;?>
		</div>
	</div>
	<div class="hotel__detail___description">
			<?=$arResult['DETAIL_TEXT']?>
	</div>
	<div class="hotel__detail___infrastruktura">
		<div class="hotel__detail___title">
			<?= Loc::getmessage('NEWS_DETAIL_INFRASTRUKTURA'); ?>
		</div>
		<ul>
            <?
                if(!empty($arResult["PROPERTIES"]['INFRASTRUCTURE']['VALUE']))
                {
                    foreach ($arResult["INFRASTRUCTURE_DETAIL"] as $infastructure)
                    {
                        echo "<li><span><i class=\"fa ".$infastructure["PROPS"]["ICON_CODE"]["VALUE"]."\"aria-hidden=\"true\"></i><div class=\"hotel__detail___infrastruktura_name\">".$infastructure["NAME"]."</div></span></li>";
                    }   
                }
            ?>
		</ul>
	</div>
	<div class="hotel__detail___rooms">
		<div class="hotel__detail___title">
			<?= Loc::getmessage('NEWS_DETAIL_ROOMS'); ?>
		</div>
        <? if(!empty($arResult["ROOMS"])):?>
            <?foreach ($arResult["ROOMS"] as $room):?>
                <div class="hotel__detail___room">
                    <div class="hotel__detail___room__img ">
                        <img src="<?=CFile::GetPath($room["PREVIEW_PICTURE"])?>" alt="">
                    </div>
                    <div class="hotel__detail___room__text">
                                    <span>
                                            <?=$room["NAME"]?>
                                    </span>
                    </div>
                    <div class="hotel__detail___room__info">
                        <div class="hotel__detail___room__price">
                                <span>цена от
                                        <span class="price">
                                            <?=$room["PROPS"]["PRICE"]["VALUE"]?>
                                        </span>
                                        руб.
                                </span>
                        </div>
                        <a href="#" class="item-card__content__more js-hotel__number_info" data-room_id="<?=$room["ID"]?>">подробнее</a>
                    </div>
                </div>
            <?endforeach;?>
        <? endif;?>
	</div>
        <? if(!empty($arResult["ROOMS"])):?>
            <? foreach ($arResult["ROOMS"] as $room):?>
                <div id="room<?=$room["ID"]?>" class="hotel_number" style="display: none;">
                    <div class="hotel_number__title">
                        <?=$room["NAME"]?>
                    </div>
                    <div class="hotel_number__slider">
                        <? foreach ($room["PROPS"]["ROOM_PHOTOS"]["VALUE"] as $photo):?>
                        <img src="<?=CFile::GetPath($photo)?>" alt="">
                        <? endforeach;?>
                    </div>
                    <div class="hotel_number__price_list">
                        <div class="hotel_number__price_title"><?= Loc::getmessage('NEWS_DETAIL_ROOMS_PRICE_TITLE'); ?></div>
                        <ul>
                            <li>
                                <div class="span">
                                    <span class="title"><?= Loc::getmessage('NEWS_DETAIL_ROOMS_MAIN_PLACE_PRICE'); ?></span>
                                    <span class="price"><?=$room["PROPS"]["PRICE"]["VALUE"]?> <?= Loc::getmessage('NEWS_DETAIL_ROOMS_CURRENCY'); ?></span>
                                </div>
                            </li>
                            <li>
                                <div class="span">
                                    <span class="title"><?= Loc::getmessage('NEWS_DETAIL_ROOMS_ALL_ROOM_PRICE'); ?></span>
                                    <span class="price"><?=$room["PROPS"]["ALL_ROOM_PRICE"]["VALUE"]?> <?= Loc::getmessage('NEWS_DETAIL_ROOMS_CURRENCY'); ?></span>
                                </div>
                            </li>
                            <li>
                                <div class="span">
                                    <span class="title"><?= Loc::getmessage('NEWS_DETAIL_ROOMS_EXTRA_PLACE_PRICE'); ?></span>
                                    <span class="price"><?=$room["PROPS"]["PRICE_EXTRA_SPACE"]["VALUE"]?> <?= Loc::getmessage('NEWS_DETAIL_ROOMS_CURRENCY'); ?></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="hotel_number__description">
                        <div class="hotel_number__descriprion_title"><?= Loc::getmessage('NEWS_DETAIL_ROOMS_DESCRIPTION'); ?></div>
                        <span>
                            <?=$room["DETAIL_TEXT"]?>
                        </span>
                    </div>
                    <div class="hotel_number__amenity">
                        <div class="hotel_number__amenity_title"><?= Loc::getmessage('NEWS_DETAIL_ROOMS_COMFORT'); ?></div>
                        <ul>  
                            <?
                                if(!empty($room["PROPS"]['INFRASTRUCTURE_DETAIL']))
                                {
                                    foreach ($room["PROPS"]["INFRASTRUCTURE_DETAIL"] as $infastructure)
                                    {
                                        echo "<li><span><i class=\"fa ".$infastructure["PROPS"]["ICON_CODE"]["VALUE"]."\"aria-hidden=\"true\"></i><span>".$infastructure["NAME"]."</span></span></li>";
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                    <form  class="form__filter hotel_reservation_room" action="<?=SITE_DIR?>ajax/sanatorium_room_reservation.php">
                        <div class="form__filter__title">
                            <span>Оставить заявку</span>
                        </div>
                        <input type="hidden" name="sanatorium_name" value="<?=$arResult["ID"]?>">
                        <input type="hidden" name="select_room" value="<?=$room["ID"]?>">
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Имя</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <input name="name_of_customer" class="form__filter__input__control js-clearable" type="text">
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
                                <span>Количество человек</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <input name="number_of_guests" class="form__filter__input__control js-clearable" type="text">
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Дата заезда</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <input type="text" class="form__filter__input__control filter__item__date__inp js-clearable"
                                       name="date-arrive" placeholder="Выбрать дату">
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__item__name">
                                <span>Дата выезда</span>
                            </div>
                            <div class="form__filter__input  it-block">
                                <input type="text" class="form__filter__input__control filter__item__date__inp js-clearable"
                                       name="date-departure" placeholder="Выбрать дату">
                                <div class="form__filter__input__log it-error"></div>
                            </div>
                        </div>
                        <div class="form__filter__item">
                            <div class="form__filter__btn">
                                <input type="submit" class="form__filter__btn__control "></input>
                            </div>
                        </div>
                    </form>
                </div>
            <? endforeach;?>
        <? endif;?>
        <form  class="form__filter" action="<?=SITE_DIR?>ajax/sanatorium_room_reservation.php" id="hotel_reservation">
            <div class="form__filter__title">
                <span>Оставить заявку</span>
            </div>
            <input type="hidden" name="sanatorium_name" value="<?=$arResult["ID"]?>">
            <div class="form__filter__item">
                <div class="form__filter__item__name">
                    <span>Имя</span>
                </div>
                <div class="form__filter__input  it-block">
                    <input name="name_of_customer" class="form__filter__input__control js-clearable" type="text">
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
                    <span>Количество человек</span>
                </div>
                <div class="form__filter__input  it-block">
                    <input name="number_of_guests" class="form__filter__input__control js-clearable" type="text">
                    <div class="form__filter__input__log it-error"></div>
                </div>
            </div>
            <div class="form__filter__item">
                <div class="form__filter__item__name">
                    <span>Номер</span>
                </div>
                <div class="form__filter__input  it-block">
                    <select name="select_room" class="form__filter__select__control cs-select cs-skin-border">
                        <option value="" selected="selected"></option>
                        <?
                        foreach ($arResult["ROOMS"] as $room)
                        {
                            echo "<option value=\"".$room["ID"]."\">".$room["NAME"]."</option>";
                        }
                        ?>
                    </select>
                    <div class="form__filter__input__log it-error"></div>
                </div>
            </div>
            <div class="form__filter__item">
                <div class="form__filter__item__name">
                    <span>Дата заезда</span>
                </div>
                <div class="form__filter__input  it-block">
                    <input type="text" class="form__filter__input__control filter__item__date__inp js-clearable" id="date-arrive"
                           name="date-arrive" placeholder="Выбрать дату">
                    <div class="form__filter__input__log it-error"></div>
                </div>
            </div>
            <div class="form__filter__item">
                <div class="form__filter__item__name">
                    <span>Дата выезда</span>
                </div>
                <div class="form__filter__input  it-block">
                    <input type="text" class="form__filter__input__control filter__item__date__inp js-clearable" id="date-departure"
                           name="date-departure" placeholder="Выбрать дату">
                    <div class="form__filter__input__log it-error"></div>
                </div>
            </div>
            <div class="form__filter__item">
                <div class="form__filter__btn">
                    <input type="submit" class="form__filter__btn__control "></input>
                </div>
            </div>
        </form>
</div>