<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Статья');
?>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:news.detail',
    '.default',
    [
        'IBLOCK_TYPE'               => 'paid',
        'IBLOCK_ID'                 => '20',
        'ELEMENT_ID'                => $_REQUEST['ID'],
        'ELEMENT_CODE'              => '',
        'CHECK_DATES'               => 'Y',
        'FIELD_CODE'                => [
            0 => '',
            1 => '',
        ],
        'PROPERTY_CODE'             => [
            0 => 'AUTHOR',
            1 => '',
        ],
        'IBLOCK_URL'                => '',
        'AJAX_MODE'                 => 'N',
        'AJAX_OPTION_SHADOW'        => 'Y',
        'AJAX_OPTION_JUMP'          => 'N',
        'AJAX_OPTION_STYLE'         => 'Y',
        'AJAX_OPTION_HISTORY'       => 'N',
        'CACHE_TYPE'                => 'A',
        'CACHE_TIME'                => '3600',
        'META_KEYWORDS'             => '-',
        'META_DESCRIPTION'          => '-',
        'BROWSER_TITLE'             => 'BROWSER_TITLE',
        'DISPLAY_PANEL'             => 'Y',
        'SET_TITLE'                 => 'Y',
        'SET_STATUS_404'            => 'Y',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'ADD_SECTIONS_CHAIN'        => 'Y',
        'ACTIVE_DATE_FORMAT'        => 'd.m.Y',
        'USE_PERMISSIONS'           => 'Y',
        'GROUP_PERMISSIONS'         => [
            0 => '1',
            1 => '15',
        ],
        'DISPLAY_TOP_PAGER'         => 'N',
        'DISPLAY_BOTTOM_PAGER'      => 'Y',
        'PAGER_TITLE'               => 'Страница',
        'PAGER_TEMPLATE'            => '',
        'PAGER_SHOW_ALL'            => 'N',
        'DISPLAY_DATE'              => 'Y',
        'DISPLAY_NAME'              => 'N',
        'DISPLAY_PICTURE'           => 'Y',
        'DISPLAY_PREVIEW_TEXT'      => 'Y',
        'AJAX_OPTION_ADDITIONAL'    => '',
    ],
    false
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
