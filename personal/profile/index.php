<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Настройки пользователя");
?><?php $APPLICATION->IncludeComponent(
    "bitrix:main.profile",
    "",
    array(
        "SET_TITLE" => "Y",
    )
);?><?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
