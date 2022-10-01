<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userControl;
use App\Http\Controllers\profileControl;

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
Route::get('/users', [userControl::class, 'index']);
Route::get('/users/create', [userControl::class, 'create']);
Route::post('/users/create', [userControl::class, 'store']);
Route::get('/users/{id}', [userControl::class, 'show'])->name('single_user');
Route::get('/users/{id}/edit', [userControl::class, 'edit']);
Route::patch('/users/{id}/edit', [userControl::class, 'update']);
Route::delete('/users/{id}/delete', [userControl::class, 'destroy']);

Route::get('/profiles', [profileControl::class, 'index']);
Route::get('/profiles/{id}/edit', [profileControl::class, 'edit']);
Route::patch('/profiles/{id}/edit', [profileControl::class, 'update']);