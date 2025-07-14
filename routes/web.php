<?php

use Illuminate\Http\Request;
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

Route::get('/html-encode', function (Request $req) {
    return view('html-encoding', ['name' => $req->input('name')]);
});

Route::get('/disabled', function () {
    return view('disabled', ['name' => 'Wiro']);
});

// If statement
Route::view('/if', 'if_state', ['hobi' => ['Nonton',]]);

// Unless statement
Route::view('/unless', 'unless', ['isMember' => false]);
