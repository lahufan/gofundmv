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

Route::get('/', 'GoFundMv@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/fundraisers', 'FundRaisers');
Route::view('/successstories', 'SuccessStories');
//Route::get('/post', 'PostController@index');

Route::get('/dashboard', 'DashboardController@index');
Route::resource('users', 'UserController');

Route::resource('posts', 'PostController');
Route::post('/addpost', 'PostController@store');
Route::get('/donations', 'DonationController@index');
// Route::get('donation/{donation}', 'DonationController');

// Frontend
Route::resource('fund', 'FundController');

//User Portal
Route::get('/my-account', 'HomeController@myAccount');
Route::get('/my-account/new-post', 'HomeController@newPost');
//admin
Route::get('/my-admin-account', 'HomeController@myAdminAccount')->middleware('admin');
