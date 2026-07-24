<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DocumentationFileController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [HomeController::class, 'profil']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/donasi', [HomeController::class, 'donasi']);

Route::get('/documentations', [DocumentationFileController::class, 'index']);
Route::post('/documentations', [DocumentationFileController::class, 'store']);

Route::resource('campaign', CampaignController::class);