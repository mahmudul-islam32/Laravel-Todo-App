<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', [
    'uses' => 'TodosController@index',
    'as'  => 'todos'
    
    ]);


Route::post('/create/todo', [
    'uses' => 'TodosController@store'
    ]);
    
    Route::get('/delete/todo/{id}', [
    'uses' => 'TodosController@delete',
    'as'  => 'todo.delete'
    ]);
    
        Route::get('/update/todo/{id}', [
    'uses' => 'TodosController@update',
    'as'  => 'todo.update'
    ]);
    
   Route::post('/todo/save/{id}', [
    'uses' => 'TodosController@save',
    'as'  => 'todos.save'
    ]);
    
  Route::get('/todos/completed/{id}', [
    'uses' => 'TodosController@completed',
    'as'  => 'todos.completed'
    ]);