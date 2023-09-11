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

Route::get('/showbooks', [BookController::class, 'showbook_All'] );
Route::get('/formNEWbook', [BookController::class, 'form_newbook'] );
Route::get('/modifybookform/{id}', [BookController::class, 'modifybookform'] )->name('modifybookform');

Route::post('/newbook', [BookController::class, 'newbook_form'] )->name('newbook');
Route::post('/modifybook', [BookController::class, 'modifybook'] )->name('modifybook');
Route::get('/deletebook/{id}', [BookController::class, 'deletebook'] )->name('deletebook');
