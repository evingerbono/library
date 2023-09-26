<?php

use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/book', [BookController::class, 'index']);
Route::get('/api/book/{id}', [BookController::class, 'show']); 
Route::post('/api/book', [BookController::class, 'store']);
Route::put('/api/book/{id}', [BookController::class, 'update']);
Route::delete('/api/book/delete/{id}', [BookController::class, 'destroy']); 

Route::get('/book/list', [BookController::class, 'listview']);
Route::get('/book/new', [BookController::class, 'newview']);
Route::get('/book/edit/{id}', [BookController::class, 'editview']);
Route::get('/book/{id}/delete', [BookController::class, 'deleteView'])->name('szavak.delete');