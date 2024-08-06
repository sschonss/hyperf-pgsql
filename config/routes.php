<?php

declare(strict_types=1);

use Hyperf\HttpServer\Router\Router;
use App\Database\DatabaseController as DatabaseController;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::get('/favicon.ico', function () {
    return '';
});

Router::get('/user', 'App\Controller\UserController@index');