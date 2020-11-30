<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\KontakController;
use App\Http\Controllers\Frontend\TarifController;
use App\Http\Controllers\Frontend\SettingController;
use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {
    Route::group([
        'namespace'  => 'Frontend',
    ], function () {

        Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
        Route::get('tarif-home', [TarifController::class, 'home'])->name('tarif-home');
        Route::get('about-home', [AboutController::class, 'home'])->name('about-home');

        // Route::get('/', function () {
        //     return view('welcome2');
        // });
        
        

    });
});

Route::name('frontend.')->group(function () {
    Route::group([
        // 'namespace' => 'Admin',
        'middleware' => 'auth'
    ], function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');

        Route::resource('tarif', TarifController::class);
        Route::get('/tarif/{tarif}/delete', [TarifController::class, 'destroy'])->name('tarif.delete');

        Route::resource('setting', SettingController::class);
        Route::resource('kontak', KontakController::class);
    });
});