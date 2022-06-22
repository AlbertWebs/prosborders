<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    public function how_we_do_it()
    {
        return view('front.how-we-do-it');
    }
    public function our_policies()
    {
        return view('front.our-policies');
    }

    public function center_of_excellence_single($slung)
    {
        $Service = DB::table('services')->where('slung',$slung)->get();
        return view('front.center-of-excellence-single', compact('Service'));
    }

    public function blog($slung)
    {
        $Blog = DB::table('blogs')->where('slung',$slung)->get();
        return view('front.blog-details', compact('Blog'));
    }



}
