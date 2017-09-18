<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index',['title' => 'Homepage - Meking Steel']);
    }


    public function contact(){

        return view('contact',['title'=>'Contact us - Meking Steel']);
    }

    public function services(){

        return view('services',['title'=>'Services we offer - Meking Steel']);
    }

    public function sfs(){

        return view('peb',['title'=>'Space Frame Structure - Meking Steel']);
    }
    public function aboutUs(){

        return view('about',['title'=>'About - Meking Steel']);
    }
}
