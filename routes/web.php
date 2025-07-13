<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view(
        'hello',
        [
            'title' => 'Belajar',
            'name' => 'Ukhasyah'
        ]
    );
});

// Nested -> gunakan titik
Route::view('/head-nav', 'head.nav');
