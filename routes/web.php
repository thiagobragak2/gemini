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

Route::get('/','App\Http\Controllers\HomeController');

Route::prefix('/config')->group(function(){
    Route::get('/','App\Http\Controllers\Admin\ConfigController@index');
    Route::get('info','App\Http\Controllers\Admin\ConfigController@info');
    Route::get('permissoes','App\Http\Controllers\Admin\ConfigController@permissoes');
});

Route::fallback(function(){
    return view('404');
});


Route::prefix('/tarefas')->group(function(){
    Route::get('/','App\Http\Controllers\CadController@list')->name('tarefas.list');//listagem

    Route::get('add','App\Http\Controllers\CadController@add')->name('tarefas.add');//edição
    Route::post('add','App\Http\Controllers\CadController@addaction');//editar,

    Route::get('edit/{id}','App\Http\Controllers\CadController@edit')->name('tarefas.edit');//edição
    Route::post('edit/{id}','App\Http\Controllers\CadController@editaction');//editar

    Route::get('delete/{id}','App\Http\Controllers\CadController@del')->name('tarefas.del');//deletar
});
