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

Route::get('/product/{id}', function ($id) {
    $comics = config('comics');
    if (isset($comics[$id])) {
        $comic = $comics[$id];
        return view('product', ['comic' => $comic]);
    } else {
        abort(404);
    }
})->name('product');