<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Job;

class HomeController extends Controller
{
    function view()
    {
        $companies =  Company::with(['jobs'=> function ($jobs) {
            $jobs->with('benefits');
        }])->with('image')->get();

        $categories = Category::all();

        $featuredJobs = Job::all();
        return view('home', compact('companies', 'categories', 'featuredJobs'));
    }
}
