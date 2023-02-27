<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<div class="footerMenu">
    <div class="footerMenuWrapper">
        <? if (!empty($arResult)) {
            $cnt = 1;
            foreach ($arResult as $arItem) {
                if (($cnt % 2) <> 0) { ?>
                    <div class="colMenu">
                    <a href="<?= $arItem["LINK"] ?>"
                       class="<? if ($arItem["SELECTED"]) echo "root-item-selected"; else echo "root-item"; ?>">
                        <?= $arItem["TEXT"] ?>
                    </a>
                <? } else { ?>
                    <a href="<?= $arItem["LINK"] ?>"
                       class="<? if ($arItem["SELECTED"]) echo "root-item-selected"; else echo "root-item"; ?>">
                        <?= $arItem["TEXT"] ?>
                    </a>
                    </div>
                <? } ?>
                <? $cnt++;
            }
        } ?>
    </div>
</div>