<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;

class CompanyController extends Controller
{
    function getCompanies()
    {
        $companies =  Company::with(['jobs'=> function ($jobs) {
            $jobs->with('benefits');
        }])->with('image')->get();
        return $companies;
    }
}
