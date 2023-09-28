<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Каталог ресурсов');
?>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:iblock.element.add',
    '.default',
    [
        'IBLOCK_TYPE'                 => 'services',
        'IBLOCK_ID'                   => '18',
        'NAV_ON_PAGE'                 => '10',
        'USE_CAPTCHA'                 => 'N',
        'USER_MESSAGE_ADD'            => 'Сайт успешно добавлен',
        'USER_MESSAGE_EDIT'           => 'Изменения успешно сохранены',
        'PROPERTY_CODES'              => [
            0 => 'NAME',
            1 => 'IBLOCK_SECTION',
            2 => 'PREVIEW_TEXT',
            3 => 'DETAIL_TEXT',
            4 => '72',
            5 => '71',
        ],
        'PROPERTY_CODES_REQUIRED'     => [
            0 => 'NAME',
            1 => 'IBLOCK_SECTION',
            2 => 'PREVIEW_TEXT',
            3 => 'DETAIL_TEXT',
            4 => '72',
            5 => '71',
        ],
        'GROUPS'                      => [0 => '2'],
        'STATUS'                      => 'ANY',
        'STATUS_NEW'                  => 'NEW',
        'ELEMENT_ASSOC'               => 'PROPERTY_ID',
        'ELEMENT_ASSOC_PROPERTY'      => '73',
        'ALLOW_EDIT'                  => 'Y',
        'ALLOW_DELETE'                => 'N',
        'MAX_USER_ENTRIES'            => '10',
        'MAX_LEVELS'                  => '2',
        'LEVEL_LAST'                  => 'Y',
        'MAX_FILE_SIZE'               => '0',
        'SEF_MODE'                    => 'N',
        'CUSTOM_TITLE_NAME'           => 'Название сайта',
        'CUSTOM_TITLE_IBLOCK_SECTION' => 'Категория',
        'CUSTOM_TITLE_PREVIEW_TEXT'   => 'Краткое описание сайта',
        'CUSTOM_TITLE_DETAIL_TEXT'    => 'Полное описание сайта',
    ]
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
