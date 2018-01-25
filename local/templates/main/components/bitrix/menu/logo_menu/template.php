<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)): ?>
    <ul class="nav navbar-nav">
        <?
        foreach ($arResult as $arItem):
            if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <? if ($arItem["SELECTED"] && $arItem["FROM_IBLOCK"] != "Y"):?>
            <li class="active"><a href="<?= $arItem["LINK"] ?>" ><?= $arItem["TEXT"] ?></a></li>
            <? else:?>
                <?if($arItem["FROM_IBLOCK"] != "Y"):?>
                    <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                <?endif;?>
            <? endif ?>

        <? endforeach ?>
        <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Еще</a>
            <ul class="dropdown-menu">
                <? foreach($arResult as $arItem):?>
                    <?if($arItem["FROM_IBLOCK"]=="Y"):?>
                        <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["NAME"]?></a></li>
                    <?endif?>
                <?endforeach;?>
                <? $APPLICATION->IncludeFile(
                    SITE_DIR."include/logo_menu/logo_menu-more.php",
                    array(),
                    array(
                            "NAME"=>"пункт меню \"Еще\" "
                    )
                ); ?>
            </ul>
        </li>
    </ul>
<? endif ?>