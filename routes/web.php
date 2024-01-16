<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
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


/*user*/

Route::get('/', [UserController::class, 'show_users'])->name('show_users');

Route::get('/create_user', [UserController::class, 'create_user'])->name('create_user');

Route::delete('/delete_user/{id}', [UserController::class, 'delete_user'])->name('delete_user');

Route::get('/show_edit_user/{id}', [UserController::class, 'show_edit_user'])->name('show_edit_user');

Route::put('/edit_user/{id}', [UserController::class, 'edit_user'])->name('edit_user');


Route::get('/show_asign_a_u', [UserController::class, 'show_asign_a_u'])->name('show_asign_a_u');

Route::post('/asign_a_u', [UserController::class, 'asign_a_u'])->name('asign_a_u');


/*address*/

Route::get('/show_create_address', [AddressController::class, 'show_create_address'])->name('show_create_address');
Route::post('/create_address', [AddressController::class, 'create_address'])->name('create_address');

