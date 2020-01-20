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

Route::get('/', "DriveController@index");

Route::get('/drive', "DriveController@index")->middleware('auth');

Route::get('/notifications', "NotificationController@index")->middleware('auth');

Route::get('/drive/mobile/m_notifications', "DriveController@mNotifications")->middleware('auth');
Route::get('/drive/mobile/m_storage', "DriveController@mStorage")->middleware('auth');
Route::get('/drive/mobile/m_share/', "DriveController@mShare")->middleware('auth');

Route::post('/storeFile', "FileController@store")->middleware('auth');

Route::get('/files/{id}/destroy', 'FileController@destroy');

Route::get('/files/{id}/download', 'FileController@download');

Route::post('/share', "NotificationController@share");


Auth::routes();
