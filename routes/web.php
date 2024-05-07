<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $comics = config('comics');
    /* dd('$comics'); */

    return view('comics', ['comics' => $comics]);
})->name('comics');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
