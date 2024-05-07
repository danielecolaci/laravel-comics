<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $comics = config('comics');
    /* dd('$comics'); */

    return view('comics', ['comics' => $comics]);
})->name('comics');
