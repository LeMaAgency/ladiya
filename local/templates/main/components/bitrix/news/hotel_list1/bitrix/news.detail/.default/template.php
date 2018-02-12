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

<!--POPUP MAP-->
<div id="hotel_maps" style="display: none;">
    <!--	начало Google карта с меткой-->
	<div id="map" style="height:400px;width: 100%;"></div>
    <script>
      function initMap() {
		var myLatlng = new google.maps.LatLng(<?=$arResult["PROPERTIES"]["GOOGLE_MAP"]["VALUE"]?>);
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatlng
        });
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?=$arResult["PROPERTIES"]["GOOGLE_MAP"]["USER_TYPE_SETTINGS"]["API_KEY"]?>&callback=initMap">
    </script>

    <!--	конец Google карта с меткой-->
</div>
<!--POPUP HOTEL ROOM INFO-->
<div id="number_info" class="hotel_number" style="display: none;">
    <div class="hotel_number__title">
        STUDIO PLUS Одноместный номер
    </div>
    <div class="hotel_number__slider">
        <img src="/assets/img/icons/calendar.svg" alt="">
        <img src="/assets/img/carousel/1.png" alt="">
        <img src="/assets/img/carousel/2.png" alt="">
        <img src="/assets/img/carousel/3.png" alt="">
        <img src="/assets/img/carousel/4.png" alt="">
        <img src="/assets/img/carousel/5.png" alt="">
    </div>
    <div class="hotel_number__price_list">
        <div class="hotel_number__price_title">Цена за номер в сутки:</div>
        <ul>
            <li>
                <div class="span">
                    <span class="title">Основное место в номере</span>
                    <span class="price">3330р</span>
                </div>
            </li>
            <li>
                <div class="span">
                    <span class="title">Выкуп номера</span>
                    <span class="price">6660р</span>
                </div>
            </li>
            <li>
                <div class="span">
                    <span class="title">Дополнительное место в номере</span>
                    <span class="price">9990р</span>
                </div>
            </li>
        </ul>
    </div>
    <div class="hotel_number__description">
        <div class="hotel_number__descriprion_title">Описание:</div>
        <span>
                У санатория «Машук Аква-Терм» собственная территория более 12 га. На территории много различных клумб с цветами,
                ландшафтных дизайнерских решений, собственный парк и сосновый бор. Также недалеко от санатория находится родниковое
                озеро, на берегу которого устраиваются различные праздники, а также можно порыбачить. Собственный источник природной
                минеральной воды «Славяновская» и два бювета с минеральной водой есть в санатории «Машук Аква-Терм».
            </span>
    </div>
    <div class="hotel_number__amenity">
        <div class="hotel_number__amenity_title">Удобства:</div>
        <ul>
            <li>
                    <span>
                        <i class="fa fa-bath" aria-hidden="true"></i>
                        <span>Душевая комната</span>
                    </span>
            </li>
            <li>
                    <span>
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        <span>Аптека</span>
                    </span>
            </li>
            <li>
                    <span>
                        <i class="fa fa-wifi" aria-hidden="true"></i>
                        <span>Бесплатный Wi-Fi</span>
                    </span>
            </li>
            <li>
                    <span>
                        <i class="fa fa-bath" aria-hidden="true"></i>
                        <span>Душевая комната</span>
                    </span>
            </li>
            <li>
                    <span>
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        <span>Аптека</span>
                    </span>
            </li>
            <li>
                    <span>
                        <i class="fa fa-wifi" aria-hidden="true"></i>
                        <span>Бесплатный Wi-Fi</span>
                    </span>
            </li><li>
                    <span>
                        <i class="fa fa-bath" aria-hidden="true"></i>
                        <span>Душевая комната</span>
                    </span>
            </li>
        </ul>
    </div>
</div>



