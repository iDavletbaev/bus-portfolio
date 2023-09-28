<?php

define('BX_SKIP_USER_LIMIT_CHECK', true);
require $_SERVER['DOCUMENT_ROOT'] . '/desktop_app/headers.php';
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';

\Bitrix\Main\Page\Asset::getInstance()->setJsToBody(false);

if (!CModule::IncludeModule('im')) {
    return;
}

if (intval($USER->GetID()) <= 0 || \Bitrix\Im\User::getInstance()->isConnector()) {
    ?>
    <script type="text/javascript">
        if (typeof (BXDesktopSystem) != 'undefined')
            BXDesktopSystem.Login({});
        else
            location.href = '/';
    </script>
    <?php
    return true;
}

if (\Bitrix\Main\Loader::includeModule('bitrix24')
    && \Bitrix\Bitrix24\Limits\User::isUserRestricted($USER->GetID())
) {
    LocalRedirect('/desktop_app/limit.php');
    return false;
}

IncludeModuleLangFile($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/im/install/public/desktop_app/index.php');

if (isset($_GET['IFRAME']) == 'Y') {
    $APPLICATION->IncludeComponent(
        'bitrix:im.messenger',
        'iframe',
        [
            'CONTEXT' => 'FULLSCREEN',
            'DESKTOP' => true,
        ],
        false,
        ['HIDE_ICONS' => 'Y']
    );
} else {
    if (!isset($_GET['BXD_API_VERSION']) && mb_strpos($_SERVER['HTTP_USER_AGENT'], 'BitrixDesktop') === false) {
        $APPLICATION->IncludeComponent(
            'bitrix:im.messenger',
            'fullscreen',
            [
                'CONTEXT' => 'FULLSCREEN',
                'DESIGN' => 'DESKTOP',
                'DESKTOP' => true,
            ],
            false,
            ['HIDE_ICONS' => 'Y']
        );
    } else {
        ?>
        <script type="text/javascript">
            if (typeof (BXDesktopSystem) != 'undefined')
                BX.desktop.init();
            <?php if (!isset($_GET['BXD_MODE'])) : ?>
            <?php else : ?>
                location.href = '/';
            <?php endif; ?>
        </script>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:im.messenger',
            '',
            [
                'CONTEXT' => 'DESKTOP',
                'DESKTOP' => true,
            ],
            false,
            ['HIDE_ICONS' => 'Y']
        );

        if (IsModuleInstalled('ui')) {
            $APPLICATION->IncludeComponent('bitrix:ui.info.helper', '', []);
        }

        $diskEnabled = false;
        if (IsModuleInstalled('disk')) {
            $diskEnabled = \Bitrix\Main\Config\Option::get('disk', 'successfully_converted', false) &&
                CModule::includeModule('disk');
            if ($diskEnabled && \Bitrix\Disk\Configuration::REVISION_API >= 5) {
                $APPLICATION->IncludeComponent(
                    'bitrix:disk.bitrix24disk',
                    '',
                    ['AJAX_PATH' => '/desktop_app/disk.ajax.new.php'],
                    false,
                    ['HIDE_ICONS' => 'Y']
                );
            } else {
                $diskEnabled = false;
            }
        }

        if (!$diskEnabled && IsModuleInstalled('webdav')) {
            $APPLICATION->IncludeComponent(
                'bitrix:webdav.disk',
                '',
                ['AJAX_PATH' => '/desktop_app/disk.ajax.php'],
                false,
                ['HIDE_ICONS' => 'Y']
            );
        }

        if (CModule::IncludeModule('timeman')) {
            \Bitrix\Main\UI\Extension::load('im_timecontrol');

            if (class_exists('\Bitrix\Timeman\Monitor\Config')) {
                \Bitrix\Main\UI\Extension::load('timeman.monitor');
                ?>
                <script type="text/javascript">
                    BX.Timeman.Monitor.init(<?php echo \Bitrix\Timeman\Monitor\Config::json(); ?>);
                </script>
                <?php
            }
        }
    }
}//end if

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';

