<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', 'UsuarioControlador@index');
Route::get('/usuarios/{id}', 'UsuarioControlador@show')
->where('id', '[0-9]+');

/*Route::get('/usuarios/{id}', function ($id) {
return "Detalles del usuario: {$id}";
})->where('id', '[0-9]+'); */


Route::get('/usuarios/nuevo', function () {
return 'Crear nuevo Usuario';
});

Route::get('/saludo/{nombre}/{apodo?}', function ($nombre,$apodo = null) {
if($apodo){
return "Hola {$nombre} tu apodo es {$apodo}";
}else{
return "Hola {$nombre}, no tienes apodo";
}
});















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
