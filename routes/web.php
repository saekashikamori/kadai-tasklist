<?php

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

Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');


//
// CRUD
// // メッセージの個別詳細ページ表示
// Route::get('Task/{id}', 'TasksController@show');
// // メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
// Route::post('Task/create', 'TasksController@create');->name('Task.create');
// // メッセージの更新処理（編集画面を表示するためのものではありません）
// Route::put('Task/{id}/edit', 'TasksController@edit');->name('Task.edit');
// // index: showの補助ページ
// Route::get('Task', 'TasksController@index');->name('Task.index');
// メッセージを削除
Route::delete('taskes/{id}', 'TasksController@destroy');