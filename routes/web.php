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

use App\Services\Twitter;

Route::get('/', function (Twitter $twitter) {
    return view('welcome');
});

//Route::patch('/tasks/{task}', 'ProjectTasksController@update');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');

Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');

Route::resource('projects', 'ProjectsController');

/* Route::get('/projects','ProjectsController@index');

Route::post('/projects','ProjectsController@store');

Route::get('/projects/create','ProjectsController@create');

Route::get('/projects/{project}','ProjectsController@show');

Route::get('/projects/{project}/edit','ProjectsController@edit');

Route::patch('/projects/{project}','ProjectsController@update');

Route::delete('/projects/{project}','ProjectsController@destroy'); */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
