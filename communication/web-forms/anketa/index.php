<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Анкета посетителя сайта');
?>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:form.result.new',
    '',
    [
        'WEB_FORM_ID'     => '1',
        'LIST_URL'        => '',
        'EDIT_URL'        => '',
        'CHAIN_ITEM_TEXT' => '',
        'CHAIN_ITEM_LINK' => '',
        'SET_TITLE'       => 'Y',
        'CACHE_TIME'      => '3600',
    ]
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
