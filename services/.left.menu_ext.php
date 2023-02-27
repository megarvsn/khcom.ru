<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

if(!\Bitrix\Main\Loader::includeModule("iblock"))
	die();

$arSelect = array("NAME", "CODE");
$arFilter = array("IBLOCK_ID" => "20", "ACTIVE" => "Y");
$arOrder = array("SORT" => "ASC");

$arElements = \Bitrix\Iblock\ElementTable::getList(
	array(
		"select" => $arSelect,
		"filter" => $arFilter,
		"order" => $arOrder
	)
);

while($arElement = $arElements->fetch())
{
	$aMenuLinksExt[] = array(
		$arElement["NAME"],
		SITE_DIR."services/".$arElement["CODE"]."/",
		array(),
		array(),
		""
	);
}

$aMenuLinks = $aMenuLinksExt;