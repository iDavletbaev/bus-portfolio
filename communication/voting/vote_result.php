<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Результаты опросы');
?>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:voting.result',
    'with_description',
    [
        'VOTE_ID' => $_REQUEST['VOTE_ID'],
    ]
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
