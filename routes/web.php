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
Route::get('/', 'Entrance\EntranceFormController@index')->name('entrance');
Route::post('/', 'Entrance\EntranceFormController@store')->name('entrance.store');
Route::get('/entrance-result', 'Entrance\EntranceResultController@search')->name('entrance.search');
Route::post('/entrance-result', 'Entrance\EntranceResultController@store')->name('entrance.query');
Route::get('/admit-card/{serial}', 'Entrance\EntranceFormController@show')->name('entrance.show');
Route::get('/entrance-result-dob', 'Entrance\EntranceResultController@result')->name('entrance.result');
Route::post('/entrance-result-dob', 'Entrance\EntranceResultController@resultStore')->name('entrance.dob');

// Login GateWay Route list

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

// Backend Route List
Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'web']], function () {
    Route::resource('user', 'Backend\UserController');
    Route::resource('menu', 'Backend\MenuController');
    Route::resource('faculty', 'Backend\FacultyController');
    Route::resource('grade', 'Backend\GradeController');
    Route::post('menu/{menu}', 'Backend\MenuController@togglestatus')->name('toggle.status');

    // Form List Route Setting
    Route::get('form-list', 'Backend\FormListController@index')->name('form-list.index');
    Route::get('form-list/action', 'Backend\FormListController@action')->name('form-list.action');
    Route::get('form-list/destroy', 'Backend\FormListController@destroy')->name('form-list.destroy');
    Route::post('form-list/download', 'Backend\FormListController@export')->name('form-list.export');

    // Result List Setting
    Route::get('result-list', 'Backend\ResultController@index')->name('result.index');
    Route::get('result-list/action', 'Backend\ResultController@action')->name('result-list.action');
    Route::post('result-list/import', 'Backend\ResultController@import')->name('result-list.import');
    Route::get('result-list/destroy', 'Backend\ResultController@destroy')->name('result-list.destroy');
    Route::post('result-list/download', 'Backend\ResultController@export')->name('result-list.export');
});
