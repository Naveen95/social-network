<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->middleware('auth');
        return view('home');
    }

    public function userprofile()
    {
        $current_user = \Auth::user();
        if ($current_user->name != NULL && $current_user->firstname && $current_user->lastname && $current_user->username && $current_user->nationality
            && $current_user->dobday && $current_user->dobmonth && $current_user->dobyear)
        {
            return view('user-profile');
        }

        else
        {
            return view('user-profile');
        }
    }
}
