<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Форма опроса');
?>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:voting.form',
    'with_description',
    [
        'VOTE_ID'              => $_REQUEST['VOTE_ID'],
        'VOTE_RESULT_TEMPLATE' => 'vote_result.php?VOTE_ID=#VOTE_ID#',
    ]
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
