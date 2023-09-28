<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Отчет по программе');
?>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:sale.affiliate.report',
    '',
    [
        'REGISTER_PAGE' => '/e-store/affiliates/register.php',
        'SET_TITLE'     => 'Y',
    ]
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
