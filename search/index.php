<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Результаты поиска");
$APPLICATION->SetPageProperty("title", "Поиск");
$APPLICATION->SetPageProperty("keywords", "Ключевые, слова, вашей, страницы");
$APPLICATION->SetPageProperty("description", "Описание страницы");
?>

<main>
	<?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"redcode", 
	array(
		"COMPONENT_TEMPLATE" => "redcode",
		"RESTART" => "N",
		"NO_WORD_LOGIC" => "N",
		"CHECK_DATES" => "N",
		"USE_TITLE_RANK" => "N",
		"DEFAULT_SORT" => "rank",
		"arrFILTER" => array(
			0 => "iblock_redcode_corporate",
		),
		"PAGE_RESULT_COUNT" => "3",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGER_TEMPLATE" => "redcode",
		"arrFILTER_iblock_redcode_corporate" => array(
			0 => "11",
			1 => "5",
			2 => "1",
			3 => "12",
			4 => "6",
			5 => "3",
			6 => "10",
			7 => "17",
			8 => "15",
		)
	),
	false
);?>
</main>
<div class="sidebar">
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include", "",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "sidebar",
			"AREA_FILE_RECURSIVE" => "Y",
		),
		false
	);?>
</div>
<div class="clear"></div>

<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>