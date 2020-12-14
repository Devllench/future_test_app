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
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('index');
});
Route::post('/submit', [CommentController::class,'submit_fun'])->name('comment-form');
Route::get('/', [CommentController::class,'allDate'])->name('comment-date');

