<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
    <ul class="nav navbar-nav">
        <?
        foreach ($arResult as $arItem):
            if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <? if ($arItem["SELECTED"]):?>
            <li class="active"><a href="<?= $arItem["LINK"] ?>" ><?= $arItem["TEXT"] ?></a></li>
        <? else:?>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                <ul class="dropdown-menu">
                    <li><a href="" title="">ds</a></li>
                    <li><a href="" title="">ds</a></li>
                </ul>
            </li>
        <? endif ?>

        <? endforeach ?>
    </ul>
<? endif ?>