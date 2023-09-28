<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle('Форум');
?>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:forum',
    '',
    [
        'SEF_MODE'                => 'Y',
        'CACHE_TYPE'              => 'A',
        'CACHE_TIME'              => '3600',
        'DATE_FORMAT'             => 'd.m.Y',
        'DATE_TIME_FORMAT'        => 'd.m.Y H:i:s',
        'FID'                     => [
            0 => 3,
            1 => 4,
            2 => 5,
        ],
        'SET_TITLE'               => 'Y',
        'SET_NAVIGATION'          => 'Y',
        'FORUMS_PER_PAGE'         => '20',
        'TOPICS_PER_PAGE'         => '20',
        'MESSAGES_PER_PAGE'       => '25',

        'SHOW_FORUMS_LIST'        => 'Y',
        'SHOW_FORUM_ANOTHER_SITE' => 'Y',
        'SEF_FOLDER'              => '/communication/forum/',

        'SHOW_VOTE'               => 'Y',
        'VOTE_CHANNEL_ID'         => '4',
        'VOTE_GROUP_ID'           => [
            0 => '6',
            1 => '1',
        ],
        'VOTE_COUNT_QUESTIONS'    => '10',
        'VOTE_COUNT_ANSWERS'      => '20',
        'VOTE_TEMPLATE'           => 'light',
        'AJAX_POST'               => 'Y',
        'SHOW_RATING'             => 'Y',
        'RATING_TYPE'             => 'standart',
        'RATING_ID'               => [
            '3',
            '4',
        ],
        'SEF_URL_TEMPLATES'       => [
            'index'        => 'index.php',
            'list'         => 'forum#FID#/',
            'read'         => 'forum#FID#/#TITLE_SEO#',
            'help'         => 'help/',
            'message'      => 'messages/forum#FID#/message#MID#/#TITLE_SEO#',
            'message_appr' => 'message/approve/forum#FID#/topic#TID#/',
            'message_move' => 'message/move/forum#FID#/topic#TID#/message#MID#/',
            'pm_list'      => 'pm/forlder#FID#/',
            'pm_edit'      => 'pm/folder#FID#/message#MID#/user#UID#/#mode#/',
            'pm_read'      => 'pm/folder#FID#/message#MID#/',
            'pm_search'    => 'pm/search/',
            'pm_folder'    => 'pm/folders/',
            'search'       => 'search/',
            'subscr_list'  => 'subscribe/',
            'active'       => 'topic/new/',
            'topic_move'   => 'topic/move/forum#FID#/topic#TID#/',
            'topic_new'    => 'topic/add/forum#FID#/',
            'topic_search' => 'topic/search/',
            'user_list'    => 'users/',
            'profile'      => 'user/#UID#/edit/',
            'profile_view' => 'user/#UID#/',
            'user_post'    => 'user/#UID#/post/#mode#/',
            'message_send' => 'user/#UID#/send/#TYPE#/',
        ],
        'VARIABLE_ALIASES'        => [
            'index'        => [],
            'list'         => [],
            'read'         => [],
            'help'         => [],
            'message_appr' => [],
            'message_move' => [],
            'pm_list'      => [],
            'pm_edit'      => [],
            'pm_read'      => [],
            'pm_search'    => [],
            'pm_folder'    => [],
            'search'       => [],
            'subscr_list'  => [],
            'active'       => [],
            'topic_move'   => [],
            'topic_new'    => [],
            'topic_search' => [],
            'user_list'    => [],
            'profile'      => [],
            'profile_view' => [],
            'user_post'    => [],
            'message_send' => [],
        ],
    ]
);
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
