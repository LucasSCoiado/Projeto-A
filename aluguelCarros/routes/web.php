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

    $nome = "Lucas";
    $idade = 22;

    $arr = [10,20,30,40,50];
    $nomes = ['Lucas', 'Vitoria', 'Miguel'];

    return view('welcome', ['nome'=>$nome, 'idade'=>$idade, 'arr'=>$arr, 'nomes'=>@$nomes]);
});

Route::get('/carros', function () {

    $busca = request('search');

    return view('carros', ['busca'=>$busca]);
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/clienteT/{id?}', function ($id = null) {
    return view('cliente', ['id'=>$id]);
});

Route::get('/carrosT/{id?}', function ($id = null) {
    return view('carro', ['id'=>$id]);
});

Route::get('/funcionarios', function ($id = null) {
    return view('funcionarios');
});

Route::get('/funcionariosT/{id?}', function ($id = null) {
    return view('funcionario', ['id'=>$id]);
});