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

use App\Company;

Route::get('/', 'HomeController@view')->middleware('auth');

Route::get('/home', 'HomeController@view')->middleware('auth');

Route::get('/candidates', 'CandidateController@view')->middleware('auth');

Route::get('/employers', 'EmployerController@view')->middleware('auth');

Route::get('/about-us', 'AboutUsController@view')->middleware('auth');

Route::get('/companies', 'CompanyController@getCompanies')->middleware('auth');

Route::get('/blog', 'BlogController@view')->middleware('auth');

Route::get('/employee/blog', 'BlogController@edit')->middleware('auth');

Route::post('/employee/create-blog', 'BlogController@create')->middleware('auth');

Route::post('/blog/get', 'BlogController@get')->middleware('auth');

Auth::routes();
