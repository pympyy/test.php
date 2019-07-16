<?php

// подключаем файлы ядра
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/DB.php';

require_once 'core/route.php';

try {
    Route::start(); // запускает маршрутизатор с помощью статичного метода Старт
} catch (\Throwable $exception) {
    Route::ErrorPage500();
    $filename = "log.txt";
    file_put_contents(
        $filename,
        sprintf("\n [%s] %s - line: %s infile: %s \n", date("Y-m-d H-i-s"), $exception->getMessage(), $exception->getLine(), $exception->getFile()),
        FILE_APPEND
    );
}

