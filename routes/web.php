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

Route::get('/comics', function () {
    $confi_fumetti = config("comics");
    $data = [
        "fumetti" => $confi_fumetti,
        
    ];
    return view('comics', $data);
})->name("comics");

Route::get('/comics/{id}', function ($id) {
    dump($id);
    $confi_fumetti = config("comics");
    dump($confi_fumetti[$id]);
    $data = [
        "fumetti" => $confi_fumetti,
        "fumetto_singolo" => $confi_fumetti[$id]
    ];
    return view('comic', $data);
})->name("comic");


