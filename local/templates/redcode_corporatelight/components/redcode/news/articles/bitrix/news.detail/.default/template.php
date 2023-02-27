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
$APPLICATION->AddHeadString("<meta property='og:image' content='" . $arResult["PREVIEW_PICTURE"]["SRC"] . "' />", true);
$templateData = $arResult["PROPERTIES"]["SIZE_TITLE"]["VALUE"];
?>
<div class="mainTitle">
    <? if ($arResult["PROPERTIES"]["UP_HEADER_DETAIL"]["~VALUE"]["TEXT"]): ?>
    <h1><?= $arResult["PROPERTIES"]["UP_HEADER_DETAIL"]["~VALUE"]["TEXT"] ?></h1>
    <? else: ?>
        <h1><span class="bg-color-4"><?= $arResult["NAME"] ?>&nbsp;</span><span class="bg-color-1">&nbsp;&nbsp;</span></h1>
    <? endif; ?>
</div>
<div class="workArea">
    <main class="boxShadow">
        <div class="newsDetailTitle"></div>
        <div class="newsDetail">
            <?
            if (!empty($arResult["DETAIL_TEXT"]))
                echo $arResult["DETAIL_TEXT"];
            else
                echo "<p>" . GetMessage("PAGE_PROCESS_FILLING") . "</p>";
            ?>
            <div class="newsBack">
                <a href="<?= $arResult["LIST_PAGE_URL"] ?>">
                    <span class="bg-color-4"><?= $arParams["LINK_BACK"] ?>&nbsp;<i class="fa fa-angle-double-right"></i></span>
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