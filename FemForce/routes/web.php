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

Auth::routes();
