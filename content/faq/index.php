<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Часто задаваемые вопросы');
?>

<?php
$APPLICATION->IncludeComponent(
    'bitrix:support.faq',
    '.default',
    [
        'IBLOCK_TYPE'         => 'services',
        'IBLOCK_ID'           => '19',
        'SECTION'             => '-',
        'EXPAND_LIST'         => 'N',
        'SEF_MODE'            => 'Y',
        'SEF_FOLDER'          => '/content/faq/',
        'AJAX_MODE'           => 'Y',
        'AJAX_OPTION_SHADOW'  => 'Y',
        'AJAX_OPTION_JUMP'    => 'N',
        'AJAX_OPTION_STYLE'   => 'Y',
        'AJAX_OPTION_HISTORY' => 'N',
        'CACHE_TYPE'          => 'A',
        'CACHE_TIME'          => '3600',
        'SEF_URL_TEMPLATES'   => [
            'faq'     => '',
            'section' => '#SECTION_ID#/',
            'detail'  => '#SECTION_ID#/#ELEMENT_ID#',
        ],
    ]
);
?>

<br />
<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
