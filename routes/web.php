<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'show_users'])->name('show_users');


Route::get('/create_user', [UserController::class, 'create_user'])->name('create_user');

Route::delete('/delete_user/{id}', [UserController::class, 'delete_user'])->name('delete_user');


Route::get('/show_edit_user/{id}', [UserController::class, 'show_edit_user'])->name('show_edit_user');

Route::put('/edit_user/{id}', [UserController::class, 'edit_user'])->name('edit_user');