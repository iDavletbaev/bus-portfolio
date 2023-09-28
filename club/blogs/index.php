<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Блог-лента');
?>
<p>Блог-лента социальной сети. Ссылки ведут в личные блоги в разделе &quot;Социальная сеть&quot;.</p>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:blog',
    'general_page',
    [
        'MESSAGE_COUNT'           => '25',
        'PERIOD_DAYS'             => '30',
        'MESSAGE_COUNT_MAIN'      => '6',
        'BLOG_COUNT_MAIN'         => '6',
        'COMMENTS_COUNT'          => '25',
        'MESSAGE_LENGTH'          => '100',
        'BLOG_COUNT'              => '20',
        'DATE_TIME_FORMAT'        => 'd.m.Y H:i:s',
        'NAV_TEMPLATE'            => '',
        'SEF_MODE'                => 'N',
        'AJAX_MODE'               => 'N',
        'AJAX_OPTION_SHADOW'      => 'Y',
        'AJAX_OPTION_JUMP'        => 'N',
        'AJAX_OPTION_STYLE'       => 'Y',
        'AJAX_OPTION_HISTORY'     => 'N',
        'CACHE_TYPE'              => 'A',
        'CACHE_TIME'              => '3600',
        'CACHE_TIME_LONG'         => '604800',
        'PATH_TO_SMILE'           => '/bitrix/images/blog/smile/',
        'SET_TITLE'               => 'Y',
        'SET_NAV_CHAIN'           => 'Y',
        'USER_PROPERTY'           => [],
        'BLOG_PROPERTY'           => [],
        'BLOG_PROPERTY_LIST'      => [],
        'POST_PROPERTY'           => [],
        'POST_PROPERTY_LIST'      => [],
        'USE_ASC_PAGING'          => 'N',
        'GROUP_ID'                => '1',
        'PATH_TO_BLOG'            => '/club/user/#user_id#/blog/',
        'PATH_TO_POST'            => '/club/user/#user_id#/blog/#post_id#/',
        'PATH_TO_GROUP_BLOG'      => '/club/group/#group_id#/blog/',
        'PATH_TO_GROUP_BLOG_POST' => '/club/group/#group_id#/blog/#post_id#/',
        'PATH_TO_USER'            => '/club/user/#user_id#/',
        'bxpiwidth'               => '691',
        'SHOW_RATING'             => 'Y',
        'VARIABLE_ALIASES'        => [
            'blog'     => 'blog',
            'post_id'  => 'post_id',
            'user_id'  => 'user_id',
            'page'     => 'page',
            'group_id' => 'group_id',
        ],
    ]
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
