<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Календарь событий');
?>  
<?php
$APPLICATION->IncludeComponent(
    'bitrix:calendar.grid',
    '',
    [
        'CALENDAR_TYPE'     => 'events',
        'ALLOW_SUPERPOSE'   => 'N',
        'ALLOW_RES_MEETING' => 'N',
    ],
    false
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
