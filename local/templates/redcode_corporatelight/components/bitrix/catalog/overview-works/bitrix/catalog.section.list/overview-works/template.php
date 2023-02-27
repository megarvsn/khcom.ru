<?
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

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<? if ($APPLICATION->GetCurPage(false) == $arParams["SEF_FOLDER"]): ?>
    <div class="mainTitle">
        <? $res = CIBlock::GetByID($arParams["IBLOCK_ID"]);
        if ($ar_res = $res->GetNext()) {
            $arName = explode(" ", $ar_res['NAME']);
            $str1 = '';
            $str2 = '';
            $cnt = 0;
            foreach ($arName as $word) {
                if ($cnt < (int)$arParams["COUNT_WORD_H1"])
                    $str1 .= $word . ' ';
                else
                    $str2 .= '&nbsp;' . $word;
                $cnt++;
            }
            echo '<h1><span class="bg-color-4">' . $str1 . '</span><span class="bg-color-1">' . $str2 . '</span></h1>';
        } ?>
    </div>
<? endif; ?>

<? if (0 < $arResult["SECTIONS_COUNT"]): ?>
    <? if ($APPLICATION->GetCurPage(false) != SITE_DIR) $classMargin = " mt--50"; ?>
    <div class="workArea">
        <div class="indexServices<?= $classMargin ?>">
            <? if ($arParams["HEADER_MAIN"]) echo '<h2>' . $arParams["HEADER_MAIN"] . '</h2>'; ?>
            <div class="indexServicesBlock">
                <? foreach ($arResult['SECTIONS'] as &$arSection):
                    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

                    if (false === $arSection['PICTURE'])
                        $arSection['PICTURE'] = array(
                            'SRC' => $arCurView['EMPTY_IMG'],
                            'ALT' => (
                            '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                                ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                                : $arSection["NAME"]
                            ),
                            'TITLE' => (
                            '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                                ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                                : $arSection["NAME"]
                            )
                        ); ?>
                    <div id="<?= $this->GetEditAreaId($arSection['ID']); ?>" class="indexServicesItem">
                        <div class="indexServicesTop">
                            <img data-src="<?= $arSection['PICTURE']['SRC'] ?>" alt="<?= $arSection['NAME'] ?>"
                                 title="<?= $arSection['NAME'] ?>" class="lazy-img">
                            <h3><?= strip_tags($arSection['DESCRIPTION'], '<spam>') ?></h3>
                        </div>
                        <div class="indexServicesBottom">
                            <a href="<?= $arSection['SECTION_PAGE_URL'] ?>" class="indexServices_button"><?= $arSection["BUTTON_NAME"] ?></a>
                        </div>
                    </div>
                <? endforeach; ?>
                <? unset($arSection); ?>
            </div>
        </div>
    </div>
<? endif; ?>