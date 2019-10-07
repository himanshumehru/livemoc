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
    return view('frontend.welcome');
})->middleware('guest');

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/profile', 'AuthPagesController@profile');

Route::get('/pcof', 'AuthPagesController@pcof');

Route::get('/one-pager', 'AuthPagesController@onepager');

Route::get('/pre-test', 'AuthPagesController@pretest');

Route::get('/post-test', 'AuthPagesController@posttest');

Route::post('/pre-test', 'SubmissionController@store');

Route::post('/post-test', 'SubmissionController@store');

//testing form builder and edit profile

// Route::get('/edit-profile', 'AuthPagesController@editprofile');

// Route::patch('/edit-profile', 'AuthPagesController@updateuser')->name('user.update');


