<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<script>
    jQuery(function ($) {

        "use strict";

        var $owl = $("#carouselSlider");

        $owl.owlCarousel({
            items: 1,
            dots: <?echo(isset($arParams["SHOW_DOTS"]) && $arParams["SHOW_DOTS"] === "Y" ? "true" : "false");?>,
            mouseDrag: <?echo(isset($arParams["MOUSE_DRAG"]) && $arParams["MOUSE_DRAG"] === "Y" ? "true" : "false");?>,
            touchDrag: false,
            nav: <?echo(isset($arParams["SHOW_NAV"]) && $arParams["SHOW_NAV"] === "Y" ? "true" : "false");?>,
            navText: ["&#xE5CB;", "&#xE5CC;"],
            smartSpeed: <?echo(isset($arParams["SLIDER_SPEED"]) && !empty($arParams["SLIDER_SPEED"]) ? $arParams["SLIDER_SPEED"] : "200");?>,
            autoplay: <?echo(isset($arParams["AUTOPLAY"]) && $arParams["AUTOPLAY"] === "Y" ? "true" : "false");?>,
            autoplaySpeed: <?echo(isset($arParams["AUTOPLAY_SPEED"]) && !empty($arParams["AUTOPLAY_SPEED"]) ? $arParams["AUTOPLAY_SPEED"] : "600");?>,
            loop: <?echo(isset($arParams["LOOP"]) && $arParams["LOOP"] === "Y" ? "true" : "false");?>,
            video: false,
            autoplayHoverPause: <?echo(isset($arParams["AUTOPLAY_HOVER_PAUSE"]) && $arParams["AUTOPLAY_HOVER_PAUSE"] === "Y" ? "true" : "false");?>,
            dotsContainer: ".owlDots",
            navContainer: ".owlNav",
            navClass: ["materialIcons owl-prev", "materialIcons owl-next"],
            animateOut: "<?echo(isset($arParams["ANIMATION_SLIDER"]) && !empty($arParams["ANIMATION_SLIDER"]) ? $arParams["ANIMATION_SLIDER"] : 'fadeOut');?>",
        });

        $owl.on("translate.owl.carousel", function (event) {
            $(".sliderInside > div").removeClass("fadeInLeftBig").css({"opacity": "0"});
            $(".sliderInside .sliderImage").removeClass("fadeInUp").css({"opacity": "0"});

            $(".owl-item:eq(" + event.item.index + ") .sliderInside > div").css({"opacity": "1"}).addClass("fadeInLeftBig");
            $(".owl-item:eq(" + event.item.index + ") .sliderInside .sliderImage").css({"opacity": "1"}).addClass("fadeInUp");
        });

        $(".sliderInside .sliderImage").css({"marginTop": "-" + $(".sliderInside .sliderImage").outerWidth() + "px"});
    });
</script>

<div class="indexSlider">
    <div id="carouselSlider" class="owl-carousel">
        <? foreach ($arResult["ITEMS"] as $key => $arItem):
            $this->AddEditAction($arItem["ID"], $arItem["EDIT_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem["ID"], $arItem["DELETE_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage("CT_BNL_ELEMENT_DELETE_CONFIRM")));
            ?>
            <? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
            <div>
                <div id="<?= $this->GetEditAreaId($arItem["ID"]); ?>" class="slide lazy-img-bg" data-src="url('<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>')">
                    <div class="sliderControls">
                        <div class="sliderControlsWrapper">
                            <div class="owlDots"></div>
                            <div class="owlNav"></div>
                        </div>
                    </div>
                </div>
                <div class="sliderInside">
                    <div <? echo($key == 0 ? "class='fadeInLeftBig'" : ""); ?>>
                        <div class="slideText"><?= $arItem["~NAME"]; ?></div>
                        <div class="slideTextDetail">
                            <div>
                                <p><?= $arItem["~PREVIEW_TEXT"]; ?></p>
                                <? if (!empty($arItem["PROPERTIES"]["URL"]["VALUE"])) {
                                    ?>
                                    <a class="sliderDetail" target="_blank"
                                       href="<?= $arItem["PROPERTIES"]["URL"]["VALUE"]; ?>"
                                       title="<?= $arItem["NAME"]; ?>"><?= GetMessage("IL_SLIDER_DETAIL"); ?></a>
                                <? } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div class="mouseSlider"></div>
</div>