<? require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Популярные коммуникации, стратегические инструменты, контроль качества");
$APPLICATION->SetTitle("О продукте");
$APPLICATION->SetPageProperty("title", "Качественный рекламный продукт | K&H: 7 903 288 14 62, info@khcom.ru");
$APPLICATION->SetPageProperty("description", "Произведем привлекательный рекламный продукт для широкого спектра ЦА на базе стратегии и с контролем качества | K&H: 7 903 288 14 62, info@khcom.ru");
?>
    <div class="mainTitle">
        <? $APPLICATION->IncludeFile(SITE_DIR . "about-product/header-box.php.inc", array(), array("MODE" => "html", "NAME" => "Заголовок")); ?>
    </div>
    <div class="workArea">
        <main>
            <div class="company">
                <? $APPLICATION->IncludeFile(SITE_DIR . "about-product/text.php.inc", array(), array("MODE" => "html", "NAME" => "Текст")); ?>
            </div>
        </main>
        <div class="sidebar">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include", "",
                array(
                    "AREA_FILE_SHOW" => "sect",
                    "AREA_FILE_SUFFIX" => "sidebar",
                    "AREA_FILE_RECURSIVE" => "Y",
                    "EDIT_MODE" => "html",
                ),
                false
            ); ?>
        </div>
        <div class="clear"></div>
    </div>

<? require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>