<?php

require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Инструкции');
?>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:sale.affiliate.instructions',
    '',
    [
        'REGISTER_PAGE' => '/e-store/affiliates/register.php',
        'SHOP_NAME'     => '',
        'SHOP_URL'      => '',
        'AFF_REG_PAGE'  => '/e-store/affiliates/register.php',
        'SET_TITLE'     => 'Y',
    ]
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
