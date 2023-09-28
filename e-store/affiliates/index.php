<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Отчет');
?>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:sale.affiliate.account',
    '',
    [
        'REGISTER_PAGE' => '/e-store/affiliates/register.php',
        'SET_TITLE'     => 'Y',
    ]
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
