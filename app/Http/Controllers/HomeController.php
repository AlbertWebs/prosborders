<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contact_us()
    {
        return view('front.contact-us');
    }
    public function vision_and_mission()
    {
        return view('front.vision-and-mission');
    }

    public function terms_and_conditions()
    {
        return view('front.terms_and_conditions');
    }

    public function privacy_policy()
    {
        return view('front.privacy-policy');
    }
    public function copyright()
    {
        return view('front.copyright');
    }
    public function center_of_excellence()
    {
        return view('front.center-of-excellence');
    }




}
