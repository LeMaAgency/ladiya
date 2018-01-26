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
    </ul>
<? endif ?>