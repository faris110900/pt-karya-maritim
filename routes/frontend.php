<?php

use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {
    Route::group([
        'namespace'  => 'Frontend',
        // 'middleware' => ['auth', 'role:user']
    ], function () {

        Route::get('/', function () {
            return view('welcome2');
        });
        
    });
});