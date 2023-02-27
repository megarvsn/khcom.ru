<?php
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true) die();
/**
* Bitrix vars
*
* @var array $arParams
* @var array $arResult
* @var CBitrixComponentTemplate $this
* @global CMain $APPLICATION
* @global CUser $USER
*/
?>

<div class="fileID"></div>
<form method="post" class="modal sendForm" data-form="sendSummary">
	<div class="modalWrapper">

		<div class="modalHeader">
			<div class="materialIcons modalClose">&#xE5CD;</div>
			<h3><?=GetMessage("SEND_SUMMARY_TITLE")?></h3>
		</div>
		
		<div class="modalBody">
			<?foreach($arResult["ELEMENT"] as $element) echo $element[0];?>				
		</div>
		
		<?if(!empty($arParams["OPTION_THEME"])):
			foreach($arParams["OPTION_THEME"] as $elementCode => $element):
				if($elementCode === "PERSONAL_INFO" && $element["VALUE"] === "Y"):?>
					<div class="personalInfo">
						<div class="checkboxError"><?=$element["TEXT_ERROR"];?></div>
						<input id="<?=$elementCode;?>_sendSummary" type="checkbox" name="<?=$elementCode;?>" />
						<label for="<?=$elementCode;?>_sendSummary">
							<?=$element["TEXT_ONE"];?> <a href="<?=SITE_DIR;?>include_areas/details-agreement.php" target="_blank"><?=$element["TEXT_SECOND"];?></a>
						</label>
					</div>
		<?		endif;
			endforeach;
		endif;?>
		
		<div class="modalFooter">
			<div class="buttonAnimation">
				<input type="hidden" name="nameElement" value="" />
				<input type="hidden" name="emailTo" value="<?=$arParams["EMAIL_TO"];?>" />
				<input type="hidden" name="eventMessageId" value="<?=$arParams["EVENT_MESSAGE_ID"];?>" />
				<input type="submit" disabled data-file="<?=GetMessage("SEND_SUMMARY_SET_FILE")?>" data-text="<?=GetMessage("SUBMIT")?>" value="<?=GetMessage("SEND_SUMMARY_SET_FILE")?>" class="disabled modalSend" />
				<div class="materialIcons sendOkey">&#xE876;</div>
				<div class="moreAnimationBlock"></div>
			</div>
		</div>

	</div>
</form>