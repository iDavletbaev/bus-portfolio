<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Счет пользователя");
?><?php $APPLICATION->IncludeComponent(
    "bitrix:sale.personal.account",
    "",
    array(
        "SET_TITLE" => "Y"
    )
);?><?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
