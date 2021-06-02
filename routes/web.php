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


Route::get('/teste', function () {
    return view('teste');
});
Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::get('/contatos', function () {
    return view('contatos');
});
Route::get('/cadastrocontato', function () {
    return view('cadastrocontato');
});

