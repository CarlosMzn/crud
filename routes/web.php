<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create', [UserController::class, 'create'])->name('user.create');
Route::post('/store', [UserController::class, 'store'])->name('user.store');
Route::get('/show/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
