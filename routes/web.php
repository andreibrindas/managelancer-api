<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/clients', 'ClientsController@index')->name('client.index');
Route::get('/client/create', 'ClientsController@create')->name('client.create');
Route::post('/client', 'ClientsController@store')->name('client.create');
Route::get('/client/{client}', 'ClientsController@show')->name('client.show');

Route::get('/projects', 'ProjectController@index')->name('project.index');
Route::get('/project/create', 'ProjectController@create')->name('project.create');
