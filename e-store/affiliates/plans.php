<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Планы');
?>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:sale.affiliate.plans',
    '',
    ['SET_TITLE' => 'Y']
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
