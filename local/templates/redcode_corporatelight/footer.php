<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
?>
<footer>
    <div class="footerWrap">
        <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "footerMenu2row",
            array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "",
                "COMPONENT_TEMPLATE" => "footerMenu2row",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_THEME" => "site",
                "ROOT_MENU_TYPE" => "main",
                "USE_EXT" => "Y"
            ),
            false
        ); ?>
        <div class="footerCopyrightCustom">&copy; ИП Киселева И.А. 2022-<?= date('Y')?>.<br>Все права защищены</div>
    </div>
</footer>

<div class="buttonPosition">
    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR . "include_areas/footer/buttonTop.php"
    ),
        false,
        array(
            "ACTIVE_COMPONENT" => "Y"
        )
    );
    ?>
</div>
<div class="materialIcons buttonMenu">&#xE5D2;</div>
<div class="materialIcons buttonSearch">&#xE8B6;</div>
<div id="blackBack"></div>
<div id="siteDir" data-dir="<?= SITE_DIR; ?>"></div>

<?
$APPLICATION->IncludeComponent(
    "redcode:feedback",
    "callBack",
    array(
        "EMAIL_TO" => "iakiseleva2007@yandex.ru",
        "REQUIRED_FIELDS" => array(
            0 => "PHONE",
        ),
        "COMPONENT_TEMPLATE" => "callBack",
        "EVENT_MESSAGE_ID" => "11",
        "ELEMENT_FORM" => array(
            0 => "NAME",
            1 => "PHONE",
            2 => "EMAIL",
        ),
        "OPTION_THEME" => $optionTheme,
    ),
    false
);
$APPLICATION->IncludeComponent(
    "bitrix:search.form",
    "top",
    array(
        "COMPONENT_TEMPLATE" => "top",
        "PAGE" => "#SITE_DIR#search/index.php",
        "USE_SUGGEST" => "N"
    ),
    false
);
$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "topMenu",
    array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "",
        "COMPONENT_TEMPLATE" => "topMenu",
        "DELAY" => "N",
        "MAX_LEVEL" => "1",
        "MENU_CACHE_GET_VARS" => array(),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "MENU_THEME" => "site",
        "ROOT_MENU_TYPE" => "top",
        "USE_EXT" => "Y"
    ),
    false
);

$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.cookie.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/scripts.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/custom.js", true);
$asset->addJs(SITE_TEMPLATE_PATH . "/js/lazyload.js", true);
$asset->addCss(SITE_TEMPLATE_PATH . "/css/custom.css", true);
$asset->addCss("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

if ($APPLICATION->GetCurPage(false) != SITE_DIR) {
    $asset->addJs("//yastatic.net/es5-shims/0.0.2/es5-shims.min.js");
    $asset->addJs("//yastatic.net/share2/share.js");
} else {
    $asset->addJs(SITE_TEMPLATE_PATH . "/js/imagesloaded.pkgd.min.js");
    $asset->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
    $asset->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.css");
}
?>

</body>
</html>