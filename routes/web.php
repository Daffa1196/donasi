<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CampaignController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [HomeController::class, 'profil']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/donasi', [HomeController::class, 'donasi']);

Route::resource('campaign', CampaignController::class);