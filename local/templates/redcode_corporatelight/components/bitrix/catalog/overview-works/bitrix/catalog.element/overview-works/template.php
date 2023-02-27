<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);

if ($arResult["PROPERTIES"]["UP_HEADER_DETAIL"]["~VALUE"]["TEXT"])
    $headerPage = $arResult["PROPERTIES"]["UP_HEADER_DETAIL"]["~VALUE"]["TEXT"];
else
    $headerPage = '<span class="bg-color-1">' . $arResult["~NAME"] . '&nbsp;</span><span class="bg-color-4">&nbsp; &nbsp; &nbsp;&nbsp;</span>';
?>
<div class="mainTitle">
    <h1><?= $headerPage ?></h1>
</div>
<div class="workArea">
    <main>
        <div class="work">
            <?
            if ($arResult["~DETAIL_TEXT"])
                echo $arResult["~DETAIL_TEXT"];
            elseif ($arResult["~PREVIEW_TEXT"])
                echo $arResult["~PREVIEW_TEXT"];
            ?>
        </div>
    </main>
    <div class="sidebar">
        <ul class="leftMenu">
            <? foreach ($arResult["MENU"] as $itemMenu): ?>
                <li<?= $itemMenu["SELECTED"] ?>>
                    <a href="<?= $itemMenu["URL"] ?>"><?= $itemMenu["NAME"] ?></a>
                </li>
            <? endforeach; ?>
        </ul>
    </div>
    <div class="clear"></div>
</div>