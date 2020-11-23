<?php

use App\Http\Controllers\Frontend\AdminController;
use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {
    Route::group([
        'namespace'  => 'Frontend',
        // 'middleware' => ['auth', 'role:user']
    ], function () {

        Route::get('/', function () {
            return view('welcome2');
        });
        
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    });
});