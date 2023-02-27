<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	die(GetMessage("NF_INFO_LIST_ERROR"));

/* GET LIST IBLOCK ID */
$rsIBlock = CIBlock::GetList(array("sort" => "asc"), array("TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE" => "Y"));
while($arr = $rsIBlock->Fetch())
	$arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];

$arTemplateParameters = array(
	"IBLOCK_ID" => array(
		"PARENT" => "BASE",
		"NAME" => GetMessage("NF_BLOCK"),
		"TYPE" => "LIST",
		"MULTIPLE" => "Y",
		"VALUES" => $arIBlock,
		"REFRESH" => "Y",
	),
	"INFO_LIST_TITLE" => array(
		"PARENT" => "BASE",
		"NAME" => GetMessage("NF_INFO_LIST_TITLE"),
		"TYPE" => "STRING",
	),


	"PARENT_SECTION_CODE" => array(
		"HIDDEN" => "Y",
	),
	"PARENT_SECTION" => array(
		"HIDDEN" => "Y",
	),
	"ADD_SECTIONS_CHAIN" => array(
		"HIDDEN" => "Y",
	),
	"INCLUDE_IBLOCK_INTO_CHAIN" => array(
		"HIDDEN" => "Y",
	),
	"SET_LAST_MODIFIED" => array(
		"HIDDEN" => "Y",
	),
	"SET_META_DESCRIPTION" => array(
		"HIDDEN" => "Y",
	),
	"SET_META_KEYWORDS" => array(
		"HIDDEN" => "Y",
	),
	"SET_BROWSER_TITLE" => array(
		"HIDDEN" => "Y",
	),
	"SET_TITLE" => array(
		"HIDDEN" => "Y",
	),
	"PAGER_TEMPLATE" => array(
		"HIDDEN" => "Y",
	),
	"DISPLAY_BOTTOM_PAGER" => array(
		"HIDDEN" => "Y",
	),
	"PAGER_TITLE" => array(
		"HIDDEN" => "Y",
	),
);