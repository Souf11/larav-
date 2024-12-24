<?php

use Illuminate\Support\Facades\Route;

Route::get('/clients', [ClientController::class, 'index']);
Route::get('/client/{id}', [ClientController::class, 'show'])->name('client.show');
Route::get('/index', [CityController::class, 'index']);
Route::post('/clientCreate', [ClientController::class, 'store'])->name('clientCreate.store');


Route::get('/', function () {
    return view('welcome');
});
