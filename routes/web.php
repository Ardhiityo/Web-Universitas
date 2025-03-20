<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisionMissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/history', [HistoryController::class, 'history'])->name('history');
Route::get('/vision-mission', [VisionMissionController::class, 'visionMission'])->name('visionMission');
