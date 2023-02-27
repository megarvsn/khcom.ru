<? if (!CModule::IncludeModule("iblock")) return;

$redirect = array();

if ($_SERVER['REQUEST_URI'] != '/') {
    $dbElement = CIBlockElement::GetList(
        Array(),
        Array(
            "IBLOCK_CODE" => "redirect-301",
            "ACTIVE" => "Y",
            "PROPERTY_UP_URL_SOURCE" => $_SERVER['REQUEST_URI']
        ),
        false,
        false,
        Array(
            "NAME",
            "PROPERTY_UP_URL_SOURCE"
        )
    );
    while ($arElement = $dbElement->fetch()) {
        $arElement["NAME"] = trim($arElement["NAME"]);
        if (substr($arElement["NAME"], -1) != '/'
                && strpos($arElement["NAME"], '/?') === false) {
            $arElement["NAME"] .= '/';
        }

        $redirect[$arElement["PROPERTY_UP_URL_SOURCE_VALUE"]] = $arElement["NAME"];
    }
}

if (isset($redirect[$_SERVER['REQUEST_URI']])) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $redirect[$_SERVER['REQUEST_URI']]);
    exit();
}
