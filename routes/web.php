<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.sign_in');
});

Route::get('/administrator', function () {
    return view('index');
});

Route::get('/sign-in', function () {
    return view('pages.sign_in');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/deskboard', function () {
    return view('pages.deskboard');
});

Route::get('/personal-info', function () {
    return view('pages.personal_info');
});

Route::get('/account-setting', function () {
    return view('pages.account_setting');
});

Route::get('/email-preferences', function () {
    return view('pages.email_prefer');
});