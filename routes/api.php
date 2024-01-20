<?php


use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});


Route::get('tarefas', [ApiController::class, 'getAll']);
Route::get('tarefas/{id}', [ApiController::class, 'getId']);
Route::post('tarefas',[ApiController::class, 'create']);
Route::put('tarefas/{id}',[ApiController::class, 'update'])->where('id', '[0-9]+');
Route::delete('tarefas/{id}',[ApiController::class, 'destroy'])->where('id', '[0-9]+');