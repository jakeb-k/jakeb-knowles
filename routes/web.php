<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrivacyController;


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

Route::resource('/project', PostController::class);
Route::get('/', [PostController::class, 'index']);
Route::post('/contact', [PostController::class, 'store']); 
Route::get('/hahahubprivacy',[PrivacyController::class, 'hahahub']); 
