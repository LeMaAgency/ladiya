<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)): ?>
    <ul class="nav navbar-nav">
        <li class="logo_other_menu">
            <a href="<?=SITE_DIR.'uslugi/'?>" class="logo_other_menu_link">Еще</a>
                <ul class="logo_other_menu_drop">
                        <?
                    foreach ($arResult as $arItem):
                    if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
                    ?>
                        <?if($arItem["FROM_IBLOCK"]=="Y"):?>
                            <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["NAME"]?></a></li>
                        <?else:?>
                            <li><a href="<?= $arItem["LINK"] ?>" ><?= $arItem["TEXT"] ?></a></li>
                        <?endif;?>
                    <? endforeach ;?>
                </ul>
        </li>
    </ul>
<? endif ?>