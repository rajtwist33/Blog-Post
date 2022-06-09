<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'show'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/post',[PostController::class,'index'])->middleware(['auth'])->middleware(['can:isAdmin'])->name('index');
Route::post('/store_post',[PostController::class,'store'])->middleware(['auth'])->name('post_store');
Route::get('/show_post',[PostController::class,'show'])->middleware(['auth'])->name('post_show');
Route::delete('delete_post/{id}',[PostController::class,'destroy'])->middleware(['auth'])->name('post_delete');
Route::get('edit_post/{id}',[PostController::class,'edit'])->middleware(['auth'])->name('post_edit');
Route::post('update_post/{id}',[PostController::class,'update'])->middleware(['auth'])->name('post_update');

require __DIR__.'/auth.php';
