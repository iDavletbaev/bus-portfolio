<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('');
?>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:blog',
    '',
    [
        'SEF_MODE'                   => 'Y',
        'PATH_TO_SMILE'              => '/bitrix/images/blog/smile/',
        'CACHE_TYPE'                 => 'A',
        'CACHE_TIME'                 => '600',
        'SET_TITLE'                  => 'Y',
        'CACHE_TIME_LONG'            => '604800',
        'SET_NAV_CHAIN'              => 'Y',
        'MESSAGE_COUNT'              => '20',
        'BLOG_COUNT'                 => '20',
        'MESSAGE_LENGTH'             => '200',
        'SEF_FOLDER'                 => '/communication/blog/',
        'SHOW_RATING'                => 'Y',
        'RATING_TYPE'                => '',
        'NOT_USE_COMMENT_TITLE'      => 'Y',
        'SHOW_NAVIGATION'            => 'Y',
        'SEO_USER'                   => 'Y',
        'COMMENT_ALLOW_IMAGE_UPLOAD' => 'A',
        'COMMENT_ALLOW_VIDEO'        => 'Y',
        'AJAX_POST'                  => 'Y',
        'GROUP_ID'                   => [
            2,
            3,
            4,
            5,
            6,
            7,
            8,
        ],
        'SEF_URL_TEMPLATES'          => [
            'index'              => '',
            'group'              => 'group/#group_id#.php',
            'blog'               => '#blog#/',
            'user'               => 'user/#user_id#.php',
            'user_friends'       => 'friends/#user_id#.php',
            'search'             => 'search.php',
            'user_settings'      => '#blog#/user_settings.php',
            'user_settings_edit' => '#blog#/user_settings_edit.php?id=#user_id#',
            'group_edit'         => '#blog#/group_edit.php',
            'blog_edit'          => '#blog#/blog_edit.php',
            'category_edit'      => '#blog#/category_edit.php',
            'post_edit'          => '#blog#/post_edit.php?id=#post_id#',
            'draft'              => '#blog#/draft.php',
            'trackback'          => '/blog/index.php?blog=#blog#&id=#post_id#&page=trackback',
            'post'               => '#blog#/#post_id#.php',
            'rss'                => '#blog#/rss/#type#',
        ],
        'VARIABLE_ALIASES'           => [
            'index'              => [],
            'group'              => [],
            'blog'               => [],
            'user'               => [],
            'user_friends'       => [],
            'search'             => [],
            'user_settings'      => [],
            'user_settings_edit' => ['user_id' => 'id'],
            'group_edit'         => [],
            'blog_edit'          => [],
            'category_edit'      => [],
            'post_edit'          => ['post_id' => 'id'],
            'draft'              => [],
            'trackback'          => ['post_id' => 'id'],
            'post'               => [],
            'rss'                => [],
        ],
    ]
);
?>
<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
