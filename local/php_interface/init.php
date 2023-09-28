<?php

// Подключение автолоадера composerю
if (file_exists($_SERVER["DOCUMENT_ROOT"].'/local/vendor/autoload.php')) {
    include $_SERVER["DOCUMENT_ROOT"].'/local/vendor/autoload.php';
}

include 'include/events.php'; // Файл подключения обработчиков событий
