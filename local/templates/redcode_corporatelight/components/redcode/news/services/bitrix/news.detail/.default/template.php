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
/*$APPLICATION->AddHeadString("<meta property='og:image' content='" . $arResult["PREVIEW_PICTURE"]["SRC"] . "' />", true);*/
$templateData = $arResult["PROPERTIES"]["SIZE_TITLE"]["VALUE"];
//AddMessage2Log(print_r($arResult, true), "Выгрузка массива \$arResult");
?>
<div itemscope itemtype="http://schema.org/Product">
    <div class="mainTitle">
        <? if ($arResult["PROPERTIES"]["UP_HEADER_DETAIL"]["~VALUE"]["TEXT"]): ?>
            <h1 itemprop="name"><?= $arResult["PROPERTIES"]["UP_HEADER_DETAIL"]["~VALUE"]["TEXT"] ?></h1>
        <? else: ?>
            <h1 itemprop="name"><span class="bg-color-4"><?= $arResult["NAME"] ?>&nbsp;</span><span
                        class="bg-color-1">&nbsp;&nbsp;</span>
            </h1>
        <? endif; ?>
    </div>
    <div class="workArea">
        <main class="boxShadow">
            <div class="newsDetailTitle"></div>
            <div class="newsDetail">
                <? if (!empty($arResult["DETAIL_PICTURE"]["SRC"])): ?>
                    <div class="newsDetailImage">
                        <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["NAME"] ?>"
                             class="img-fluid" itemprop="image">
                    </div>
                <? endif; ?>
                <? if ($arResult["DISPLAY_PROPERTIES"]["UP_COST"]["VALUE"] > 0): ?>
                    <div class="cost" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <?= $arResult["DISPLAY_PROPERTIES"]["UP_TEXT_COST"]["~VALUE"] ?> <span class="costValue"
                                itemprop="price"><?= number_format($arResult["DISPLAY_PROPERTIES"]["UP_COST"]["VALUE"], 0, ',', ' ') ?></span> <span
                                itemprop="priceCurrency" class="d-none">RUB</span> руб.
                    </div>
                <? endif; ?>
                <? if (!empty($arResult["DETAIL_TEXT"]))
                    echo '<div itemprop="description">' . $arResult["DETAIL_TEXT"] . '</div>';
                else
                    echo "<p>" . GetMessage("PAGE_PROCESS_FILLING") . "</p>";
                ?>
                <div class="newsBack">
                    <a href="<?= $arResult["LIST_PAGE_URL"] ?>">
                        <span class="bg-color-4"><?= $arParams["LINK_BACK"] ?>&nbsp;<i
                                    class="fa fa-angle-double-right"></i></span>
                    </a>
                </div>
            </div>
        </main>
        <div class="sidebar">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include", "",
                array(
                    "AREA_FILE_SHOW" => "sect",
                    "AREA_FILE_SUFFIX" => "sidebar",
                    "AREA_FILE_RECURSIVE" => "Y",
                ),
                false
            ); ?>
        </div>
        <div class="clear"></div>
    </div>
</div>