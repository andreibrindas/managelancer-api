<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Client;
use \App\Http\Controllers\ClientsController;
use \App\Http\Controllers\ProjectController;

// Route::resource('photos', PhotoController::class);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::resource('clients', ClientsController::class);
Route::apiResources([
    'clients' => 'ClientsController',
    'projects' => 'ProjectController',
]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
