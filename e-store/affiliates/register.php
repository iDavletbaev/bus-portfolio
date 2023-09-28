<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Регистрация');
?>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:sale.affiliate.register',
    '.default',
    [
        'REDIRECT_PAGE'       => $_REQUEST['REDIRECT_PAGE'],
        'REGISTER_PAGE'       => '/auth/',
        'AGREEMENT_TEXT_FILE' => '/bitrix/components/bitrix/sale.affiliate.register/agreement-ru.htm',
        'SET_TITLE'           => 'Y',
    ]
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
