<?php
define("NO_KEEP_STATISTIC", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

foreach($_FILES as $file)
{
	$propertyFile = array(
		"name" => $file["name"],
		"size" => $file["size"],
		"type" => $file["type"],
		"tmp_name" => $file["tmp_name"],
	);
	$fileInformation[] = CFile::SaveFile($propertyFile, "redcode");
	$fileInformation[] = translit($file["name"]);
}

echo json_encode($fileInformation);


/* FUNCTION OF TRANSLITERATION */
function translit($string)
{
	$letters = array(
		'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 
		'Е' => 'E', 'Ё' => 'YO', 'Ж' => 'ZH', 'З' => 'Z', 'И' => 'I', 
		'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 
		'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 
		'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'CH', 
		'Ш' => 'SH', 'Щ' => 'CSH', 'Ь' => '', 'Ы' => 'Y', 'Ъ' => '', 
		'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA', 
		'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',  
		'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 
		'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 
		'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 
		'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 
		'ш' => 'sh', 'щ' => 'csh', 'ь' => '', 'ы' => 'y', 'ъ' => '', 
		'э' => 'e', 'ю' => 'yu', 'я' => 'ya', ' '=>'_'
	);

	return str_replace(array_keys($letters), array_values($letters), $string);
}