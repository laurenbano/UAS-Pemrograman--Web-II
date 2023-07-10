<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/penitipan', [App\Http\Controllers\PenitipanController::class, 'index'])->name('penitipan');

Route::get('/penitipan/create', [App\Http\Controllers\PenitipanController::class, 'create']);
Route::post('/penitipan', [App\Http\Controllers\PenitipanController::class, 'store'])->name('penitipan');

Route::get('penitipan/{id}/edit', [App\Http\Controllers\PenitipanController::class, 'edit']);

Route::get('penitipan/{id}/lihat', [App\Http\Controllers\PenitipanController::class, 'lihat']);

Route::get('penitipan/search', [App\Http\Controllers\PenitipanController::class, 'search'])->name('search');

Route::patch('penitipan/{id}', [App\Http\Controllers\PenitipanController::class, 'update']);

Route::delete('penitipan/{id}', [App\Http\Controllers\PenitipanController::class, 'destroy'])->name('penitipan');

