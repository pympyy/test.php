<?php

// подключаем файлы ядра
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/DB.php';

require_once 'core/route.php';

try {
    Route::start(); // запускаем маршрутизатор
} catch (\Throwable $exception) {
//    открыть файл
//    записать в файл ошибкеу $exception->getMessage();
//    закрыть файл
//    почитать про sprint_f
    Route::ErrorPage500();
    $filename = "log.txt";
    file_put_contents(
        $filename,
        sprintf("[%s] %s - line: %s infile: %s \n", date("Y-m-d H-i-s"), $exception->getMessage(), $exception->getLine(), $exception->getFile()),
        FILE_APPEND
    );
}

