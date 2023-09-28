<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('');?>

<?php
$APPLICATION->IncludeComponent(
    'bitrix:learning.student.gradebook',
    '',
    [
        'TEST_DETAIL_TEMPLATE'   => 'course/index.php?COURSE_ID=#COURSE_ID#&TEST_ID=#TEST_ID#',
        'COURSE_DETAIL_TEMPLATE' => 'course/index.php?COURSE_ID=#COURSE_ID#&INDEX=Y',
        'TEST_ID_VARIABLE'       => 'TEST_ID',
        'SET_TITLE'              => 'Y',
    ]
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
