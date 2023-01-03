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

Route::get('/', [\App\Http\Controllers\ResumeController::class, 'index'])->name('resume.index');
Route::get('/download', [\App\Http\Controllers\ResumeController::class, 'download'])->name('resume.download');
Route::post('/contact', [\App\Http\Controllers\ResumeController::class, 'contact'])->name('resume.contact');

Route::get('/legals', \App\Http\Controllers\LegalsController::class)->name('legals.index');
