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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');

//About Page
Route::get('/company-profile', [App\Http\Controllers\FrontendController::class, 'companyProfile'])->name('profile.company');
Route::get('/message', [App\Http\Controllers\FrontendController::class, 'companyMessage'])->name('message.company');
Route::get('/why-choose', [App\Http\Controllers\FrontendController::class, 'whyChoose'])->name('whychoose.company');
Route::get('/recruitment', [App\Http\Controllers\FrontendController::class, 'Recruitment'])->name('recruitment.company');
Route::get('/workforce', [App\Http\Controllers\FrontendController::class, 'Workforce'])->name('workforce.company');
Route::get('/performance', [App\Http\Controllers\FrontendController::class, 'Performance'])->name('performance.company');

// Licence
Route::get('/licence', [App\Http\Controllers\FrontendController::class, 'Licence'])->name('licence');
