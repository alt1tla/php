<?php
//прописываем на какой запрос кто реагирует
    return [
        '~^$~' => [src\Controllers\MainController::class, 'main'],
        '~hello/(.+)~' => [src\Controllers\MainController::class, 'sayHello']
    ];