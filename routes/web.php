<?php

use Illuminate\Support\Facades\Route;

// Catch-all route for React
Route::get('/{any}', function () {
    return view('home');   // loads resources/views/home.blade.php
})->where('any', '.*');
