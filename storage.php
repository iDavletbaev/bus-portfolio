<?php

use Bitrix\Main\Application;
use Bitrix\Main\Config\Configuration;
use Bitrix\Main\Diag\ExceptionHandlerFormatter;
use Bitrix\Main\Engine\Response\AjaxJson;
use Bitrix\Main\Error;
use Bitrix\Main\ErrorCollection;

try {
    require($_SERVER["DOCUMENT_ROOT"]."/desktop_app/headers.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

    /** @var CAllMain $APPLICATION */
    $diskEnabled = false;
    if (IsModuleInstalled('disk')) {
        $diskEnabled =
            \Bitrix\Main\Config\Option::get('disk', 'successfully_converted', false) &&
            CModule::includeModule('disk');
        if ($diskEnabled && \Bitrix\Disk\Configuration::REVISION_API >= 5) {
            $storageController = new Bitrix\Disk\Bitrix24Disk\Legacy\StorageController();
            $storageController
                ->setActionName($_REQUEST['action'])
                ->exec();
        } else {
            $diskEnabled = false;
        }
    }
    if (!$diskEnabled) {
        $APPLICATION->IncludeComponent('bitrix:webdav.disk', '', array('VISUAL' => false));
        CMain::FinalActions();
        die();
    }
} catch (\Throwable $e) {
    $errorCollection = new ErrorCollection();
    $exceptionHandling = Configuration::getValue('exception_handling');
    if (!empty($exceptionHandling['debug'])) {
        $errorCollection[] = new Error(ExceptionHandlerFormatter::format($e));
        if ($e->getPrevious()) {
            $errorCollection[] = new Error(ExceptionHandlerFormatter::format($e->getPrevious()));
        }
    }

    if ($e instanceof \Exception || $e instanceof \Error) {
        $exceptionHandler = Application::getInstance()->getExceptionHandler();
        $exceptionHandler->writeToLog($e);
    }


    /** @global \CMain $APPLICATION */
    global $APPLICATION;

    $APPLICATION->RestartBuffer();
    while (ob_end_clean());

    Application::getInstance()->end(0, AjaxJson::createError($errorCollection));
}
