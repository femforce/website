<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use Mailchimp;
use Mailchimp_Error;
use Mailchimp_Lists;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function subscribe(){
        $mailChimp = new Mailchimp(env('MAILCHIMP_API_KEY'));
        $mailChimpLists = new Mailchimp_Lists($mailChimp);
        $subscriber = array('email' => $_POST['email']);
        try {
            $mailChimpLists->unsubscribe(env('MAILCHIMP_LIST_ID'), $subscriber, true, false, false);
        }
        catch (Mailchimp_Error $error){
            // Do Nothing, continue through
        }
        try {
            $mailChimpLists->subscribe(env('MAILCHIMP_LIST_ID'), $subscriber, null, 'html', false, false, false, false);
        }
        catch (Mailchimp_Error $error){
            // Do Nothing, continue through
        }

        $user = new User();
        $user->email = $subscriber['email'];
        $user->name = "";
        $user->password = bcrypt(str_random(8));
        $user->save();

        return $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $companies =  Company::with(['jobs'=> function ($jobs) {
            $jobs->with('benefits');
        }])->with('image')->get();

        $categories = Category::all();

        $featuredJobs = Job::all();
        return view('home', compact('companies', 'categories', 'featuredJobs'));
    }
}
