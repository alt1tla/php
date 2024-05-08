<?php
//прописываем на какой запрос кто реагирует
    return [
        '~^$~' => [src\Controllers\MainController::class, 'main'],
        '~hello/(.+)~' => [src\Controllers\MainController::class, 'sayHello'],
        '~bye/(.+)~' => [src\Controllers\MainController::class, 'sayBye'],
        '~articles~'=> [src\Controllers\ArticleController::class, 'index'],
        '~article/(\d+)~'=> [src\Controllers\ArticleController::class, 'show'],
    ];