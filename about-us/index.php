<? require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Ломка стереотипов, системное мышление, интуиция, вдохновение");
$APPLICATION->SetTitle("О нас");
$APPLICATION->SetPageProperty("title", "Заказать интересную продающую рекламу у креативной команды в Москве");
$APPLICATION->SetPageProperty("description", "Закажите рекламные идеи на основе системного мышления, отказа от стереотипов, вдохновения, дисциплины в Москве, у профессионалов K&H Communications");
?>
    <div class="mainTitle">
        <? $APPLICATION->IncludeFile(SITE_DIR . "about-us/header-box.php.inc", array(), array("MODE" => "html", "NAME" => "Заголовок")); ?>
    </div>
    <div class="workArea">
        <main>
            <div class="company">
                <? $APPLICATION->IncludeFile(SITE_DIR . "about-us/text.php.inc", array(), array("MODE" => "html", "NAME" => "Текст")); ?>
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