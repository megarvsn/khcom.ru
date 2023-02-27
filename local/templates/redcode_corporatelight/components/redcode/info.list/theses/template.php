<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
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
<div class="indexTheses">
    <? if (!empty($arParams["INFO_LIST_TITLE"])) { ?>
        <h2><?= $arParams["INFO_LIST_TITLE"]; ?></h2>
    <? } ?>
    <div class="theses">
        <? foreach ($arResult["ITEMS"] as $arItem) {
            $this->AddEditAction($arItem["ID"], $arItem["EDIT_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem["ID"], $arItem["DELETE_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage("CT_BNL_ELEMENT_DELETE_CONFIRM")));
            ?>
            <div class="thesesItem" id="<?= $this->GetEditAreaId($arItem["ID"]); ?>">
                <? if (!empty($arItem["PROPERTIES"]["ICON"]["VALUE"]) && isset($arItem["PROPERTIES"]["ICON"]["VALUE"])) { ?>
                    <div class="materialIcons icon"><?= $arItem["PROPERTIES"]["ICON"]["VALUE"]; ?></div>
                <? } elseif (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) { ?>
                    <img data-src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" title="<?= $arItem["NAME"]; ?>"
                         alt="<?= $arItem["NAME"]; ?>" class="lazy-img">
                <? } ?>
                <h3><?= $arItem["~NAME"]; ?></h3>
                <a href="<?= $arItem["PROPERTIES"]["URL"]["VALUE"] ?>"><?= GetMessage("BTN_MORE") ?></a>
            </div>
        <? } ?>
    </div>
</div>