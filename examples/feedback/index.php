<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Форма обратной связи");
?><?php
$APPLICATION->IncludeComponent("bitrix:main.feedback", ".default", array(
	"USE_CAPTCHA" => "Y",
	"OK_TEXT" => "Спасибо, ваше сообщение принято.",
	),
	false
);?><?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
