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
?>
<p>
   <br> <span style="font-weight: bold;">
       <?=$arResult["SECTION"]["PATH"][0]["NAME"]?>
    </span>
</p>
<table class="tbc" cellspacing="0" cellpadding="0" border="0" style="width: 100%">
    <tbody>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
                <? if($arItem["PROPERTIES"]["IS_TABLE_TITLES"]["VALUE"] == "true"):?>
                    <tr id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <th>
                            <p>
                                <span style="font-weight: bold;">
                                   <?=!empty($arItem["PROPERTIES"]["TABLE_FIELD_1"]["VALUE"])? $arItem["PROPERTIES"]["TABLE_FIELD_1"]["VALUE"] : "-";?>
                                </span>
                            </p>
                        </th>
                        <th>
                            <p>
                                <span style="font-weight: bold;">
                                    <?=!empty($arItem["PROPERTIES"]["TABLE_FIELD_1"]["VALUE"])? $arItem["PROPERTIES"]["TABLE_FIELD_2"]["VALUE"] : "-";?>
                                </span>
                            </p>
                        </th>
                        <th>
                            <p>
                                <span style="font-weight: bold;">
                                    <?=!empty($arItem["PROPERTIES"]["TABLE_FIELD_1"]["VALUE"])? $arItem["PROPERTIES"]["TABLE_FIELD_3"]["VALUE"] : "-";?>
                                </span>
                            </p>
                        </th>
                    </tr>
                <?else:?>
                    <tr id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <td>
                            <p>
                                <?=!empty($arItem["PROPERTIES"]["TABLE_FIELD_1"]["VALUE"])? $arItem["PROPERTIES"]["TABLE_FIELD_1"]["VALUE"] : "-";?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?=!empty($arItem["PROPERTIES"]["TABLE_FIELD_2"]["VALUE"])? $arItem["PROPERTIES"]["TABLE_FIELD_2"]["VALUE"] : "-";?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?=!empty($arItem["PROPERTIES"]["TABLE_FIELD_3"]["VALUE"])? $arItem["PROPERTIES"]["TABLE_FIELD_3"]["VALUE"] : "-";?>
                            </p>
                        </td>
                    </tr>
                <?endif;?>
        <?endforeach;?>
    </tbody>
</table>