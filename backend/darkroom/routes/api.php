<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmstocksController;

Route::get('/films', [FilmstocksController::class, 'index']);
Route::get('/films/{id}', [FilmstocksController::class, 'show']);