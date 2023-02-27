<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/include_areas/seo/last_modified.php'))
    include_once($_SERVER['DOCUMENT_ROOT'] . '/include_areas/seo/last_modified.php');

$loc = new \Bitrix\Main\Localization\Loc;
$loc->loadMessages(__FILE__);

$rootURL = ($APPLICATION->IsHTTPS() ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'];
$currentURL = $rootURL . $APPLICATION->GetCurPage(false);

$asset = \Bitrix\Main\Page\Asset::getInstance();

// Viewport
$asset->addString('<meta name="viewport" content="width=device-width, user-scalable=no">', true);

// Favicon icons
$asset->addString('<link rel="apple-touch-icon" sizes="180x180" href="' . SITE_TEMPLATE_PATH . '/favicon/apple-touch-icon.png">', true);
$asset->addString('<link rel="icon" type="image/png" sizes="32x32" href="' . SITE_TEMPLATE_PATH . '/favicon/favicon-32x32.png">', true);
$asset->addString('<link rel="icon" type="image/png" sizes="16x16" href="' . SITE_TEMPLATE_PATH . '/favicon/favicon-16x16.png">', true);
$asset->addString('<link rel="manifest" href="' . SITE_TEMPLATE_PATH . '/favicon/site.webmanifest">', true);
$asset->addString('<link rel="shortcut icon" href="' . SITE_TEMPLATE_PATH . '/favicon/favicon.ico">', true);
$asset->addString('<link rel="mask-icon" href="' . SITE_TEMPLATE_PATH . '/safari-pinned-tab.svg" color="#5bbad5">', true);
$asset->addString('<meta name="msapplication-TileColor" content="#da532c">', true);
$asset->addString('<meta name="msapplication-config" content="' . SITE_TEMPLATE_PATH . '/favicon/browserconfig.xml">', true);

// Fonts
$asset->addString('<link rel="preconnect" href="https://fonts.googleapis.com">', true);
$asset->addString('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>', true);
$asset->addString('<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">', true);

// jQuery
$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery-2.2.4.min.js");
?>
    <!DOCTYPE HTML>
<html lang="<?= LANGUAGE_ID ?>">
    <head>
        <title><? $APPLICATION->ShowTitle(); ?></title>

        <? if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/include_areas/seo/gtm-head.php'))
            include_once($_SERVER['DOCUMENT_ROOT'] . '/include_areas/seo/gtm-head.php');
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/include_areas/seo/canonical.php'))
            include_once($_SERVER['DOCUMENT_ROOT'] . '/include_areas/seo/canonical.php');
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/include_areas/seo/noindex.php'))
            include_once($_SERVER['DOCUMENT_ROOT'] . '/include_areas/seo/noindex.php');

        $APPLICATION->ShowHead();
        $detailed = $APPLICATION->GetCurPage(false) != SITE_DIR;
        ?>
        <? // Schema.org Organization ?>
        <script type="application/ld+json">
            {
                "@context": "http://schema.org/",
                "@type": "Organization",
                "name": "K&H Communications",
                "logo": "<?= $rootURL . SITE_TEMPLATE_PATH . '/img/logo.jpg' ?>",
                "url": "<?= $currentURL ?>",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Нижняя Красносельская, 43",
                    "addressLocality": "г. Москва",
                    "postalCode": "105066",
                    "addressCountry": "Russia"
                },
                "telephone": "+7 (903) 288-14-62",
                "email": "info@khcom.ru"
            }
        </script>
    </head>

<body class="detailed">
<? if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/include_areas/seo/gtm-body.php'))
    include_once($_SERVER['DOCUMENT_ROOT'] . '/include_areas/seo/gtm-body.php'); ?>
<?php
$APPLICATION->ShowPanel();
//$optionTheme = $APPLICATION->IncludeComponent("redcode:switch.color", "", array(), false, array("HIDE_ICONS" => "Y"));
?>
    <header>
        <div class="headerWrap">
            <div class="logo">
                <? echo $APPLICATION->GetCurDir() != SITE_DIR ? '<a href="' . SITE_DIR . '">' : '' ?>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include", "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include_areas/header/logo.php",
                    )
                ); ?>
                <? echo $APPLICATION->GetCurDir() != SITE_DIR ? '</a>' : '' ?>
            </div>

            <div class="postLogo">
                <div class="d-flex">
                    <div class="topMenu materialIcons">&#xE5D2;</div>
                    <div class="topMenu header-phone">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include", "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include_areas/contact/header-phone.php",
                            )
                        ); ?>
                    </div>
                    <div class="logoText">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo-text.svg" alt="K&H communications">
                    </div>
                </div>
            </div>

            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "headerMenu2row",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "",
                    "COMPONENT_TEMPLATE" => "headerMenu2row",
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
        </div>
    </header>
<? if ($APPLICATION->GetCurDir() != SITE_DIR): ?>
    <? $APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        ".default",
        array(
            "START_FROM" => "",
            "PATH" => "",
            "SITE_ID" => SITE_ID,
            "COMPONENT_TEMPLATE" => ""
        ),
        false
    ); ?>
<? endif; ?>