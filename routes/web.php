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
      
Route::post('/password-request', 'UserController@resetPassword')->name('password-request');
Route::post('save-user-info', 'DeshboardController@saveUserInfo')->name('save-user-info');

Route::get('/', 'DeshboardController@index')->name('/');

Route::get('user-login', 'DeshboardController@userLogin')->name('user-login');
Route::get('user-registration', 'DeshboardController@userReg')->name('user-ragistration');
Route::post('save-user-info', 'DeshboardController@saveUserInfo')->name('save-user-info');

Route::get('GD/application', 'GDApplicatioController@GD_application_page')->name('GD_application_page');
Route::post('save/GD/application', 'GDApplicatioController@save_GD_application_page')->name('save-gd-application-info');
Route::get('GD/application/list', 'GDApplicatioController@GD_application_list')->name('GD_application_list');
Route::get('GD/application/preview', 'GDApplicatioController@GD_application_preview')->name('GD_application_preview');

Route::get('GD/Clearance_page', 'GDApplicatioController@Clearance_page')->name('Clearance_page');
Route::get('GD/Clearance/list', 'GDApplicatioController@Clearance_list')->name('clearance_list');
Route::get('GD/Clearance/preview', 'GDApplicatioController@Clearance_preview')->name('clearance_preview');


Route::get('add/vehicle', 'VehicleController@addVehicle')->name('add-vehicle');
Route::get('search/vehicle', 'VehicleController@searchVehicle')->name('search-vehicle');

Route::get('news', 'NewsController@news')->name('news');
Route::get('news/details/{id}', 'NewsController@newsDetails')->name('news-details');
Route::get('news/add', 'NewsController@addNews')->name('add-news');
Route::post('news/save', 'NewsController@saveNews')->name('save-news-info');





Route::group(['middleware' => ['auth', 'verified:ture']], function () {
    
    Route::group(['middleware' => 'role:Admin'], function () {

 
        
    });
    Route::group(['middleware' => 'role:User'], function () {

 
        
    });
    Route::group(['middleware' => 'role:Admin|User'], function () {

 
        
    });

});
Auth::routes(['verify' => true]);
// Auth::routes();
