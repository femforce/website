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

Route::get('/', function() {
    return view('comingSoon');
});

Route::get('/about-us', function() {
    return view('aboutUs');
});

Route::get('/home', 'HomeController@view');

Route::get('/companies', 'CompanyController@getCompanies');