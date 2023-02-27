<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<div class="mainTitle">
    <h1><span class="bg-color-4">&nbsp;<?= $arParams["PAGER_TITLE"] ?>&nbsp;</span><span class="bg-color-1">&nbsp;&nbsp;</span></h1>
</div>
<div class="workArea">
    <div class="indexServices mt--50">
        <div class="indexServicesBlock">
            <? foreach ($arResult["ITEMS"] as $arItem) {
                $this->AddEditAction($arItem["ID"], $arItem["EDIT_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem["ID"], $arItem["DELETE_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage("CT_BNL_ELEMENT_DELETE_CONFIRM")));
                ?>
                <div class="indexServicesItem" id="<?= $this->GetEditAreaId($arItem["ID"]); ?>">
                    <div class="indexServicesTop">
                        <img data-src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem['NAME'] ?>"
                             title="<?= $arItem['NAME'] ?>" class="lazy-img">
                        <h3><?= strip_tags($arItem['NAME'], '<spam>') ?></h3>
                    </div>
                    <div class="indexServicesBottom">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"
                           class="indexServices_button"><?= $arParams["BUTTON_NAME"] ?></a>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>

    <? if ($arParams["DISPLAY_BOTTOM_PAGER"] && !empty($arResult["ITEMS"]) && ($arResult["NAV_RESULT"]->nStartPage != $arResult["NAV_RESULT"]->NavPageCount)) { ?>
        <div class="showMore">
            <a href="#" class="showMoreButton"><?= GetMessage("SHOW_MORE"); ?></a>
            <div class="moreAnimation">
                <div class="moreAnimationBlock"></div>
            </div>
        </div>
    <? } ?>

    <div class="pageNews hidden"
         data-sortOrder="<?= $arParams["SORT_ORDER1"]; ?>"
         data-sortBy="<?= $arParams["SORT_BY1"]; ?>"
         data-sortOrder2="<?= $arParams["SORT_ORDER2"]; ?>"
         data-sortBy2="<?= $arParams["SORT_BY2"]; ?>"
         data-pageEnd="<?= $arResult["NAV_RESULT"]->NavPageCount; ?>"
         data-iblockID="<?= $arParams["IBLOCK_ID"]; ?>"
         data-pageSize="<?= $arParams["NEWS_COUNT"]; ?>"
         data-page="<?= $arResult["NAV_RESULT"]->nStartPage; ?>"></div>
</div>