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

Route::get('/', 'SiteController@home');
Route::get('/fetch-posts', 'SiteController@latestMediumPosts');
Route::post('/send-email', 'SiteController@sendEmail');

Route::get('/project/{project}', 'SiteController@project');

Route::get('/gift/{code}', 'ExtrasController@gift');
