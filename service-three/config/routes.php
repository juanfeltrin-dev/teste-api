<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET'], '/', 'App\Controller\IndexController@index');
Router::addRoute(['GET'], '/store', 'App\Controller\IndexController@store');

Router::get('/favicon.ico', function () {
    return '';
});
