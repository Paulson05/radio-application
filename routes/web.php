<?php

use App\Http\Controllers\Frontend\PagesController;
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
    return view('homepage');
});


Route::get('/about',[PagesController::class, 'about'])->name('frontend.about');
Route::get('/contact-us',[PagesController::class, 'contactUs'])->name('frontend.contactus');
Route::get('/scheduler',[PagesController::class, 'scheduler'])->name('frontend.scheduler');

