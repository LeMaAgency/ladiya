<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)): ?>
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Еще</a>
                <ul class="dropdown-menu">
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
                    <? endforeach ?>
                </ul>
        </li>
    </ul>
<? endif ?>