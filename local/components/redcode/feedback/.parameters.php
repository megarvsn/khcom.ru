<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
$arFilter = array("ACTIVE" => "Y");
if($site !== false)
	$arFilter["LID"] = $site;

$arEvent = array();
$dbType = CEventMessage::GetList($by = "ID", $order = "DESC", $arFilter);
while($arType = $dbType->GetNext())
	$arEvent[$arType["ID"]] = "[".$arType["ID"]."] ".$arType["SUBJECT"];

$elementForm = array(
	"NAME" => GetMessage("PARAMETERS_FEEDBACK_NAME"),
	"SURNAME" => GetMessage("PARAMETERS_FEEDBACK_SURNAME"),
	"PATRONYMIC" => GetMessage("PARAMETERS_FEEDBACK_PATRONYMIC"),
	"SUBJECT" => GetMessage("PARAMETERS_FEEDBACK_SUBJECT"),
	"PHONE" => GetMessage("PARAMETERS_FEEDBACK_PHONE"),
	"FILE" => GetMessage("PARAMETERS_FEEDBACK_FILE"),
	"EMAIL" => GetMessage("PARAMETERS_FEEDBACK_EMAIL"),
	"MESSAGE" => GetMessage("PARAMETERS_FEEDBACK_MESSAGE"),
);

$requiredFields = array_merge(array("NONE" => GetMessage("PARAMETERS_FEEDBACK_OPTIONAL")), $elementForm);
unset($requiredFields["MESSAGE"]);

$arComponentParameters = array(
	"PARAMETERS" => array(
		"ELEMENT_FORM" => array(
			"NAME" => GetMessage("PARAMETERS_FEEDBACK_ELEMENT_FORM"), 
			"TYPE" => "LIST", 
			"VALUES" => $elementForm,
			"DEFAULT" => "", 
			"MULTIPLE" => "Y", 
			"COLS" => 25, 
			"PARENT" => "BASE",
		),
		"EMAIL_TO" => array(
			"NAME" => GetMessage("MFP_EMAIL_TO"), 
			"TYPE" => "STRING",
			"DEFAULT" => htmlspecialcharsbx(COption::GetOptionString("main", "email_from")), 
			"PARENT" => "BASE",
		),
		"REQUIRED_FIELDS" => array(
			"NAME" => GetMessage("MFP_REQUIRED_FIELDS"), 
			"TYPE" => "LIST", 
			"MULTIPLE" => "Y", 
			"VALUES" => $requiredFields,
			"DEFAULT" => "", 
			"COLS" => 25, 
			"PARENT" => "BASE",
		),
		"EVENT_MESSAGE_ID" => array(
			"NAME" => GetMessage("MFP_EMAIL_TEMPLATES"), 
			"TYPE" => "LIST", 
			"VALUES" => $arEvent,
			"DEFAULT" => "", 
			"MULTIPLE" => "N", 
			"COLS" => 25, 
			"PARENT" => "BASE",
		),
	)
);