<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
  $router->get('/example', ['uses' => 'exampleController@example']);
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router ->get('/usuario/usuarioListar', ['uses' => 'UsuariosController@listar']);
$router ->post('/usuario/usuarioInsertar', ['uses' => 'UsuariosController@insertar']);
$router ->post('/usuario/usuarioUpdate', ['uses' => 'UsuariosController@actualizar']);
$router ->delete('/usuario/usuarioeliminar/{id}', ['uses' => 'UsuariosController@eliminar']);
$router ->get('/usuario/usuarioconsultar/{id}', ['uses' => 'UsuariosController@consultar']);




