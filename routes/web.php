<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', function () {
    return view('index');
})->name('home');

//about
Route::get('about', [MainController::class, 'about'])->name('about');

//Services
Route::get('services', [MainController::class, 'services'])->name('services');

//contact
Route::get('contact', [MainController::class, 'contact'])->name('contact');

//news
Route::get('news', [MainController::class, 'news'])->name('news');

//news bulletin
Route::get('news bulletin', [MainController::class, 'newsBulletin'])->name('news-single');



//get quote
Route::get('get quote', [MainController::class, 'getQuote'])->name('getQuote');
