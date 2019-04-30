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



Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/admin/login','Auth\AdminLoginController@showLoginform')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login');

Route::prefix('admin')->group(function (){

    Route::post('/logout','Auth\AdminLoginController@Adminlogout')->name('admin.logout');
    Route::get('/','AdminController@index')->name('admin-dashboard');

    Route::post('password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/reset','Auth\AdminResetPasswordController@reset')->name('admin.password.update');
    Route::get('password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::resource('/user','Admin\UserController');
    Route::resource('/product','Admin\ProductController');

});
