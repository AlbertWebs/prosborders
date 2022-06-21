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
    return view('front.index');
});
Route::get('/vision-and-mission', [App\Http\Controllers\HomeController::class, 'vision_and_mission'])->name('vision-and-mission');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/center-of-excellence', [App\Http\Controllers\HomeController::class, 'center_of_excellence'])->name('center-of-excellence');


// Legal
Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms_and_conditions'])->name('terms-and-conditions');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/copyright', [App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



