<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HumanResourceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\VisionMissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])
    ->name('home');

Route::get('/history', [HistoryController::class, 'history'])
    ->name('history');

Route::get('/vision-mission', [VisionMissionController::class, 'visionMission'])
    ->name('visionMission');

Route::get('/greeting', [GreetingController::class, 'greeting'])
    ->name('greeting');

Route::get('/facility', [FacilityController::class, 'facility'])
    ->name('facility');

Route::get('/human-resource', [HumanResourceController::class, 'humanResource'])
    ->name('humanResource');

Route::get('/announcement', [AnnouncementController::class, 'announcement'])
    ->name('announcement');

Route::get('/announcement/{slug}', [AnnouncementController::class, 'announcementDetail'])
    ->name('announcementDetail');

Route::get('/news', [NewsController::class, 'news'])
    ->name('news');

Route::get('/news/{slug}', [NewsController::class, 'newsDetail'])
    ->name('newsDetail');

Route::get('/registration', [RegistrationController::class, 'registration'])
    ->name('registration');

Route::post('/registration', [RegistrationController::class, 'storeRegistration'])
    ->name('storeRegistration');
