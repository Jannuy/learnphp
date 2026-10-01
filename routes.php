<?php

use App\Controllers\PublicController;
use App\Router; 

Router::addRoute('/', [PublicController::class, 'index']);

Router::addRoute('/test', function () {
    $db = new App\DB();
});
Router::addRoute('/test', [PublicController::class, 'test']);


Router::addRoute('/form', [PublicController::class, 'form']);
Router::addRoute('/answer', [PublicController::class, 'answer']);
