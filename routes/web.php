<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrivacyController;

use Illuminate\Support\Facades\Session;


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

Route::get('/toggle-view-mode', function () {
    $currentMode = Session::get('viewMode', 'web'); // Default to web
    $newMode = $currentMode === 'web' ? 'mobile' : 'web';
    Session::put('viewMode', $newMode);
    return back();
})->name('toggleViewMode');
