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

Route::get('/', [\App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::get('/download-resume', [\App\Http\Controllers\ProfileController::class, 'downloadResume'])->name('profile.download-resume');
Route::post('/send-contact', [\App\Http\Controllers\ProfileController::class, 'sendContactMail'])->name('profile.send-contact');
