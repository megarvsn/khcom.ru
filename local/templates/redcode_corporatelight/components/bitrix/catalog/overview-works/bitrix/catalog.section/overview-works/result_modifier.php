<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

foreach ($arResult['ITEMS'] as $key => $arElement) {
    $arMap[$arElement['ID']] = $key;
}

$arElements = CIBlockElement::GetList(
    array(),
    array("IBLOCK_ID" => $arResult["IBLOCK_ID"], "ID" => array_keys($arMap), "ACTIVE" => "Y"),
    false,
    false,
    array("ID", "PROPERTY_UP_BUTTON_NAME", "PROPERTY_UP_PDF", "PROPERTY_UP_VIDEO")
);
while ($arElement = $arElements->GetNext()) {
    if (!isset($arMap[$arElement['ID']]))
        continue;
    $key = $arMap[$arElement['ID']];
    if ($arElement['~PROPERTY_UP_BUTTON_NAME_VALUE']) {
        $arResult['ITEMS'][$key]['BUTTON_NAME'] = $arElement['~PROPERTY_UP_BUTTON_NAME_VALUE'];
    }
    if ($arElement['PROPERTY_UP_PDF_VALUE']) {
        $pdf = CFile::GetFileArray($arElement["PROPERTY_UP_PDF_VALUE"]);
        $arResult['ITEMS'][$key]['PDF'] = $pdf["SRC"];
    }
    if ($arElement['PROPERTY_UP_VIDEO_VALUE'])
        $arResult['ITEMS'][$key]['VIDEO'] = $arElement['~PROPERTY_UP_VIDEO_VALUE'];
}