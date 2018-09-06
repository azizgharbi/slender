<?php

use App\Controllers\HomeController;

$app->get('/', HomeController::class . ':index');

$app->get('/api/test', HomeController::class . ':test');

