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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/pre', 'UserController@index')->name('pro');
Route::post('/pre', 'UserController@index')->name('pro');

Route::post('home', function () {
    // Retrieve a piece of data from the session...
    $value = session('key');

    // Store a piece of data in the session...
    session(['key' => 'value']);
});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@reservation')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/choose', 'UserController@chooseCar')->name('choose');
Route::post('/choose', 'UserController@chooseCar')->name('choose');
// Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/faq', 'HomeController@faq')->name('faq');

Route::get('/member', 'MemberController@index')->name('member');
Route::post('/processing', 'HomeController@check')->name('processing');
// Route::post('/prime/webhook', '');


// Administration routes
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLogInForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@showLogInForm')->name('admin.login.submit');
    Route::get('/', 'Administration\DashboardController@index')->name('admin.dashboard');
    Route::get('/users', 'Administration\DashboardController@users')->name('admin.users');
    Route::get('/vehicles', 'Administration\VehiclesController@index')->name('admin.vehicles');
   

    // Vue routes
    Route::prefix('/vue')->group(function () {

        Route::prefix('/users')->middleware('can:access-users')->group(function () {
            Route::get('/', 'Administration\UsersController@list');
        });
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
