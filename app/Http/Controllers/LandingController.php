<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{

    /**
     * Show the landing page if not logged in.
     * Show the application dashboard if logged in.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Auth::check())
        {
            return redirect()->action('HomeController@index');
        }
        else
        {
            return view('pages.landing');
        }
    }

}
