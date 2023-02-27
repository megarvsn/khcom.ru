<? require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "K&H Communications – креативное агентство в Москве – свяжитесь с нами");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetPageProperty("keywords", "Контакты, обратная связь, адрес, схема проезда");
$APPLICATION->SetPageProperty("description", "Наши контакты: +7(903) 288 1462, info@khcom.ru, 105066 г. Москва, ул. Нижняя Красносельская, 43. Закажите проект у профессионалов K&H Communications");
?>
    <div class="mainTitle">
        <? $APPLICATION->IncludeFile(SITE_DIR . "contacts/header-box.php.inc", array(), array("MODE" => "html", "NAME" => "Заголовок")); ?>
    </div>
    <div class="workArea">
        <div class="requisitesWriteUs">
            <div itemscope itemtype="http://schema.org/Organization">
                <span itemprop="name" class="d-none">K&H Communications</span>
                <div class="contactsData" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR . "include_areas/contact/addressContact.php",
                        ),
                        false,
                        array(
                            "ACTIVE_COMPONENT" => "Y"
                        )
                    ); ?>
                </div><!--
	 -->
                <div class="contactsData">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include", "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR . "include_areas/contact/phoneContact.php",
                        )
                    ); ?>
                </div><!--
	 -->
                <div class="contactsData">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include", "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR . "include_areas/contact/emailContact.php",
                        )
                    ); ?>
                </div>
            </div>

            <? $APPLICATION->IncludeComponent(
                "redcode:feedback",
                "mapCallBack",
                array(
                    "EMAIL_TO" => "iakiseleva2007@yandex.ru",
                    "REQUIRED_FIELDS" => array(
                        0 => "NAME",
                        1 => "EMAIL",
                    ),
                    "COMPONENT_TEMPLATE" => "mapCallBack",
                    "EVENT_MESSAGE_ID" => "14",
                    "ELEMENT_FORM" => array(
                        0 => "NAME",
                        1 => "SUBJECT",
                        2 => "PHONE",
                        3 => "EMAIL",
                        4 => "MESSAGE",
                    ),
                    "OPTION_THEME" => $optionTheme,
                ),
                false
            ); ?>
        </div>

    </div> <? // Закрывающий тег .workArea ?>

<? $APPLICATION->IncludeComponent(
    "redcode:info.list",
    "contacts",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPONENT_TEMPLATE" => "contacts",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "PREVIEW_TEXT",
            2 => "DETAIL_PICTURE",
            3 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "4",
        "IBLOCK_TYPE" => "redcode_corporate",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "redcode",
        "PAGER_TITLE" => "Контакты",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "MAP_COORDINATE",
            1 => "MORE_TEXT",
            2 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ID",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "FILE_404" => "",
        "ZOOM_MAP" => "16",
        "NEWS_COUNT" => "1",
        "ADD_SECTIONS_CHAIN" => "N"
    ),
    false
); ?>

<? /*$APPLICATION->IncludeComponent(
    "redcode:info.list",
    "requisites",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPONENT_TEMPLATE" => "requisites",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "PREVIEW_TEXT",
            2 => "DATE_ACTIVE_FROM",
            3 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "9",
        "IBLOCK_TYPE" => "redcode_corporate",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "modern",
        "PAGER_TITLE" => "Партнеры",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "N",
        "SHOW_404" => "Y",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "PROPERTY_CODE" => array(
            0 => "REQUISITES",
            1 => "",
        ),
        "FILE_404" => ""
    ),
    false
);*/ ?>

<? require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>