<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () {
    return response()->json([
        'cpf' => '999.999.999-99',
        'nome' => 'Fulano da Silva',
        'endereco' => 'Rua teste',
        'dividas' => [
            [
                'valor' => 100.00
            ]
        ]
    ]);
});
