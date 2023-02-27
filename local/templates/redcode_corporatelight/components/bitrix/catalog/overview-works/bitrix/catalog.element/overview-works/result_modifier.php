<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

$dbElement = CIBlockElement::GetList(
    array("SORT" => "ASC"),
    array("SECTION_CODE" => $arResult["ORIGINAL_PARAMETERS"]["SECTION_CODE"], "ACTIVE" => "Y"),
    false,
    false,
    array("NAME", "PREVIEW_TEXT", "DETAIL_PAGE_URL")
);
$cnt = 0;
while ($arElement = $dbElement->GetNext()) {
    if ($arElement["NAME"])
        $arResult["MENU"][$cnt]["NAME"] = $arElement["NAME"];

    if ($arElement["~PREVIEW_TEXT"])
        $arResult["MENU"][$cnt]["HTML"] = $arElement["~PREVIEW_TEXT"];

    if ($arElement["DETAIL_PAGE_URL"])
        $arResult["MENU"][$cnt]["URL"] = $arElement["DETAIL_PAGE_URL"];

    if ($arElement["DETAIL_PAGE_URL"] == $arResult["DETAIL_PAGE_URL"])
        $arResult["MENU"][$cnt]["SELECTED"] = ' class="selected"';
    else
        $arResult["MENU"][$cnt]["SELECTED"] = '';
    $cnt++;
}