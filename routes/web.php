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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('salary', 'SalaryController');
Route::get('salary/create', 'SalaryController@create');
Route::resource('payment', 'PaymentController');
Route::get('dashboard', 'CentraldashboardController@index');
Route::get('salapay', 'SalapayController@index');
Route::get('register', 'RegisterController@index')->name('register');
Route::resource('manager', 'ManagerController');
Route::get('manager/create', 'ManagerController@create');
Route::post('manager/store','ManagerController@store' );
Route::resource('accountant', 'AccountantController');
Route::get('accountant/create', 'AccountantController@create');
Route::post('accountant/store', 'AccountantController@store')->name('storeaccountant');

Route::get('staff/create', 'StaffController@create');
Route::post('staff/store', 'StaffController@store')->name('storestaff');
Route::resource('dailyreport', 'DailyreportController');
Route::get('dailyreport/create', 'DailyreportController@create');
Route::post('dailyreport/store', 'DailyreportController@store');
Route::resource('profile', 'ProfileController');
Route::resource('user', 'UserController');