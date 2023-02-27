<?php
if (file_exists($_SERVER['DOCUMENT_ROOT'].'/redirect.php')) {
    include_once($_SERVER['DOCUMENT_ROOT'].'/redirect.php');
}
//вырезаем type="text/javascript"
AddEventHandler("main", "OnEndBufferContent", "removeType");

function removeType(&$content)
{
    $content = replace_output($content);
}
function replace_output($d)
{
    return str_replace(' type="text/javascript"', "", $d);
}