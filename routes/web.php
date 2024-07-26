<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreateAnnouncementController;
use App\Http\Controllers\OneMessageController;

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'index')->name('home');
    });


Route::controller(AboutController::class)
    ->group(function () {
        Route::get('/about', 'about')->name('about');
    });


Route::controller(PopularController::class)
    ->group(function () {
        Route::get('/popular', 'popular')->name('popular');
    });

Route::controller(CreateAnnouncementController::class)
    ->group(function () {
        Route::get('/create', 'create')->name('create');
    });

Route::controller(CreateAnnouncementController::class)
    ->group(function () {
        Route::post('/create/check', 'create_check')->name('create_check');
    });


Route::controller(OneMessageController::class)
    ->group(function () {
        Route::get('/OneMessage/{id}', 'OneMessage')->name('OneMessage');
    });
