<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */
$this->setFrameMode(true);
?>
<div class="mainTitle">
    <h1><?= $arResult["~DESCRIPTION"] ?></h1>
</div>
<div class="workArea">
    <div class="indexServices mt--50">
        <? if (!empty($arResult['ITEMS'])): ?>
            <div class="indexServicesBlock">
                <? foreach ($arResult['ITEMS'] as $item): ?>
                    <div class="indexServicesItem">
                        <div class="indexServicesTop">
                            <img data-src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $item['NAME'] ?>"
                                 title="<?= $item['NAME'] ?>" class="lazy-img">
                            <h3><?= $item['~PREVIEW_TEXT'] ?></h3>
                        </div>
                        <div class="indexServicesBottom">
                            <? if ($item['PDF'])
                                $attr = 'href="' . $item['PDF'] . '" target="_blank"';
                            else
                                $attr = 'href="' . $item['DETAIL_PAGE_URL'] . '"'; ?>
                            <a <?= $attr ?> class="indexServices_button"><?= $item['BUTTON_NAME'] ?></a>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        <? endif; ?>
    </div>
</div>