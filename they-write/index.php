<? require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Экспертиза, результат, развитие, уникальность, команда");
$APPLICATION->SetPageProperty("title", "Творческие идеи, решения для стратегий продвижения – заказать в Москве");
$APPLICATION->SetTitle("Так пишут");
$APPLICATION->SetPageProperty("description", "Комплексное видение профессиональной экспертизы в коммуникациях, закажите рекламу в Москве у специалистов креативного агентства K&H Communications");
?>
    <div class="mainTitle">
        <? $APPLICATION->IncludeFile(SITE_DIR . "they-write/header-box.php.inc", array(), array("MODE" => "html", "NAME" => "Заголовок")); ?>
    </div>
    <div class="workArea">
        <main>
            <div class="company">
                <? $APPLICATION->IncludeFile(SITE_DIR . "they-write/text.php.inc", array(), array("MODE" => "html", "NAME" => "Текст")); ?>
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