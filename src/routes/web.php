<?php

use App\Http\Controllers\NotebookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('/notebook', [NotebookController::class, 'index']);

Route::get('/notebook/create', [NotebookController::class, 'create']);
Route::post('/notebook/store', [NotebookController::class, 'store']);

Route::post('/notebook/find', [NotebookController::class, 'find']);
Route::get('/notebook/find/{id}', [NotebookController::class, 'findId']);

Route::post('/notebook/delete', [NotebookController::class, 'delete']); 
Route::get('/notebook/delete/{id}', [NotebookController::class, 'deleteId']); 