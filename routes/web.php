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


Route::get('/about','VisitCardController@about');
Route::get('/','VisitCardController@about');
Route::get('/resume','VisitCardController@resume');
Route::get('/contact','VisitCardController@contact')->name('contact');

Route::resource('messages', 'MessageController');
Route::resource('feedback', 'FeedbackController');
Auth::routes();

Route::get('/feedback{id}','FeedbackController@feedback')->name('feedback1');

Route::post('/feedstore{id}','FeedbackController@feedstore')->name('feedstore');