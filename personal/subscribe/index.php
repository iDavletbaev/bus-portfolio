<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Рассылки");
?><?php $APPLICATION->IncludeComponent("bitrix:subscribe.index", ".default", array(
    "SHOW_COUNT"    =>  "N",
    "SHOW_HIDDEN"   =>  "N",
    "PAGE"  =>  "#SITE_DIR#personal/subscribe/subscr_edit.php",
    "CACHE_TIME"    =>  "3600",
    "SET_TITLE" =>  "Y"
    ));?><?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
