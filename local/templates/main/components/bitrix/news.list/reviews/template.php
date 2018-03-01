<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<div class="form__comment__add">
    <div class="container">
        <div class="form__comment__add__wrap">
            <div class="form__comment__add__img">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1">
                    <g id="surface1">
                        <path style=" "
                              d="M 38 1 C 29.257813 1 26 7.441406 26 11.5 C 26 17.6875 32.324219 22 38 22 C 43.03125 22 50 18.351563 50 11.5 C 50 6.339844 45.511719 1 38 1 Z M 16.90625 14 C 13.746094 14.058594 11.433594 15.023438 10.03125 16.875 C 8.390625 19.035156 8.078125 22.28125 9.09375 26.53125 C 8.714844 27.023438 8.449219 27.746094 8.5625 28.6875 C 8.785156 30.523438 9.507813 31.34375 10.125 31.6875 C 10.425781 33.109375 11.199219 34.695313 11.96875 35.5 L 11.96875 35.8125 C 11.976563 36.648438 11.984375 37.382813 11.90625 38.3125 C 11.398438 39.414063 9.632813 40.121094 7.78125 40.84375 C 4.449219 42.144531 0.3125 43.753906 0 48.9375 L -0.0625 50 L 34.0625 50 L 34 48.9375 C 33.6875 43.753906 29.539063 42.148438 26.21875 40.84375 C 24.375 40.121094 22.632813 39.417969 22.125 38.3125 C 22.046875 37.386719 22.054688 36.679688 22.0625 35.84375 L 22.0625 35.5 C 22.859375 34.671875 23.589844 33.050781 23.875 31.6875 C 24.492188 31.34375 25.214844 30.53125 25.4375 28.6875 C 25.546875 27.769531 25.300781 27.054688 24.9375 26.5625 C 25.441406 24.832031 26.410156 20.585938 24.6875 17.8125 C 23.949219 16.621094 22.808594 15.863281 21.34375 15.5625 C 20.507813 14.554688 18.972656 14 16.90625 14 Z M 34 23 C 31.792969 23 30 24.570313 30 26.5 C 30 28.429688 31.792969 30 34 30 C 36.207031 30 38 28.429688 38 26.5 C 38 24.570313 36.207031 23 34 23 Z M 29 30 C 27.316406 30 26 31.097656 26 32.5 C 26 33.902344 27.316406 35 29 35 C 30.683594 35 32 33.902344 32 32.5 C 32 31.097656 30.683594 30 29 30 Z "></path>
                    </g>
                </svg>
            </div>
            <div class="form__comment__add__title">Оставить ваш отзыв</div>
            <form method="post" action="/ajax/add-review.php" class="js-add-review">
                <input type="hidden" name="tour_id" value="<?=$arResult['TOUR_ID'];?>">
                <div class="form__comment__add__block">
                    <div class="form__comment__add__block__item">
                        <input type="text" name="name" placeholder="Ваше имя">
                        <div class="form__comment__add__block__item__error"></div>
                    </div>
                    <div class="form__comment__add__block__item">
                        <input type="text" name="email" placeholder="Контактная почта">
                        <div class="form__comment__add__block__item__error"></div>
                    </div>
                </div>
                <div class="form__comment__add__block">
                    <div class="form__comment__add__block__item">
                        <textarea name="text" placeholder="Ваш комментарий"></textarea>
                        <div class="form__comment__add__block__item__error"></div>
                    </div>
                </div>
                <div class="form__comment__add__block">
                    <div class="form__comment__add__block__item">
                        <button type="submit" class="form__comment__add__btn">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

if(empty($arResult['ITEMS']))
    return;

$strEditLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$strDeleteLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$confirmDelete = array('CONFIRM' => \GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'));

?>
<!--<div class="nav__temp">-->
<!--    <div class="container">-->
<!--        --><?// if($arParams["DISPLAY_TOP_PAGER"]): ?>
<!--            --><?//=$arResult["NAV_STRING"]?><!--<br/>-->
<!--        --><?// endif; ?>
<!--    </div>-->
<!--</div>-->

<div class="comment__list">
    <div class="container">
        <div class="comment__list__wrap">
            <? foreach($arResult['ITEMS'] as $arItem):
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
                ?>
                <div class="comment__list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <?/*<div class="comment__list__item__avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 26 26" version="1.1">
                            <g id="surface1">
                                <path style=" "
                                      d="M 13 0 C 9.699219 0 7 2.101563 7 6 C 7 8.609375 8.214844 11.3125 10 12.8125 L 10 14.1875 C 10 14.789063 9.59375 15.304688 9.09375 15.40625 C 5.195313 16.605469 2 19.1875 2 20.6875 L 2 22.5 C 2 24.398438 6.898438 26 13 26 C 19.101563 26 24 24.398438 24 22.5 L 24 20.6875 C 24 19.289063 20.90625 16.605469 16.90625 15.40625 C 16.40625 15.304688 16 14.6875 16 14.1875 L 16 12.8125 C 17.785156 11.3125 19 8.609375 19 6 C 19 2.101563 16.300781 0 13 0 Z "></path>
                            </g>
                        </svg>
                    </div>*/?>
                    <div class="comment__list__item__header">
                        <b><?=$arItem['NAME'];?></b><span><?=FormatDate('x', MakeTimeStamp($arItem['DATE_CREATE']));?></span>
                    </div>
                    <div class="comment__list__item__text">
                        <p><?=$arItem['PREVIEW_TEXT'];?></p>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</div>
<div class="container">
    <ul class="pagination">
        <li class="active"><a href="#">«</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li class="disabled"><a href="#">»</a></li>
    </ul>
</div>