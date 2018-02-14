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
		<h1>Название гостиницы</h1>		
	</div>
	<div class="hotel__detail___address js-hotel__maps_open">			
        <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>
                Пятигорск, ул. Строителей, д. 2
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
            foreach ($arResult["PROPERTIES"]['INFRASTRUCTURE']['VALUE'] as $infastructureID){
                switch ($infastructureID) {
                    case 256:
                        echo " <li><span><i class=\"fa fa-bath\" aria-hidden=\"true\"></i><span>Душевая комната</span></span></li>";
                        break;
                    case 254:
                        echo "<li><span><i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i><span>Аптека</span></span></li>";
                        break;
                    case 249:
                        echo " <li><span><i class=\"fa fa-wifi\" aria-hidden=\"true\"></i><span>Бесплатный Wi-Fi</span></span></li>";
                        break;
                }
            }
            ?>
		</ul>
	</div>
	<div class="hotel__detail___rooms">
		<div class="hotel__detail___title">
			<?= Loc::getmessage('NEWS_DETAIL_ROOMS'); ?>
		</div>
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
                    <a href="#" class="item-card__content__more js-hotel__number_info">подробнее</a>
                </div>
            </div>
        <?endforeach;?>
	</div>
</div>