<?php

use App\Http\Controllers\TarefasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[TarefasController::class, 'index'])->name('tarefas-index');
Route::get('{id}/details',[TarefasController::class, 'details'])->where('id', '[0-9]+')->name('tarefas-details');
Route::get('/create',[TarefasController::class, 'create'])->name('tarefas-create');
Route::post('/',[TarefasController::class, 'store'])->name('tarefas-store');
Route::get('{id}/edit',[TarefasController::class, 'edit'])->name('tarefas-edit');
Route::put('{id}',[TarefasController::class, 'update'])->where('id', '[0-9]+')->name('tarefas-update');
Route::delete('{id}',[TarefasController::class, 'destroy'])->where('id', '[0-9]+')->name('tarefas-destroy');

