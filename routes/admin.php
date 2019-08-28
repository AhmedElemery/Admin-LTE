<?php

// Admin Routes

use Illuminate\Support\Facades\Config;

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Config::set('auth:defines', 'admin');
    Route::get('login', 'AdminAuth@login');
    Route::post('login', 'AdminAuth@loged');
    Route::get('forgot/password', 'AdminAuth@forgot_password');
    Route::post('forgot/password', 'AdminAuth@forgot_password_post');
    Route::get('reset/password/{token}', 'AdminAuth@reset_password');
    Route::post('reset/password/{token}', 'AdminAuth@reset_password_send');

    Route::group(['middleware' => 'admin:admin'], function () {

        Route::resource('admin', 'AdminController');

        Route::get('/', function () {
            return view('admin.home');
        });

        Route::get('lang/{lang}', function ($lang) {
            session()->has('lang') ? session()->forget('lang') : '';
            $lang == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
            return back();
        });

        Route::any('logout', 'AdminAuth@logout');

    });
});
