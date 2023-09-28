<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Список опросов');
?>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:voting.list',
    '',
    [
        'CHANNEL_SID'          => [
            'ANKETA',
            'BOOKS_VOTE',
        ],
        'VOTE_FORM_TEMPLATE'   => 'vote_new.php?VOTE_ID=#VOTE_ID#',
        'VOTE_RESULT_TEMPLATE' => 'vote_result.php?VOTE_ID=#VOTE_ID#',
    ]
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
