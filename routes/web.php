<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemsController;

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
Route::post('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/', [UserController::class, 'home']);
Route::get('/register', [UserController::class, 'registrationForm']);
Route::get('/login', [UserController::class, 'loginForm']);
Route::get('/verification/{user}/{token}', [UserController::class, 'verification']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/dashboard', function(){
    return redirect('/dashboard/items');
})->middleware('auth');
Route::get('/dashboard/items', [ItemsController::class, 'index'])->middleware('auth');
Route::get('/dashboard/items/create', [ItemsController::class, 'create'])->middleware('auth');
Route::get('/dashboard/items/delete/{item}', [ItemsController::class, 'delete'])->middleware('auth');
Route::get('/dashboard/items/edit/{item}', [ItemsController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/items/create', [ItemsController::class, 'store'])->middleware('auth');
Route::patch('/dashboard/items/edit/{item}', [ItemsController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/items/delete/{item}', [ItemsController::class, 'destroy'])->middleware('auth');