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

    public function submitquery(Request $Request){
        dd($Request->all());
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
    public function buildingComponent(){
        return view('buildingComponents',['title' => 'Building Components - Meking Steel']);
    }
    public function structuresteelbuildings(){
        return view('structuralSteelBuildings',['title' => 'Structure Steel Building - Meking Steel']);
    }
    public function turnkeyconstructionsolutions(){
        return view('turnkeyConstructionSolutions',['title'=>'Turnkey Construction Solutions - Meking Steel']);
    }
    public function productliterature(){
        return view('productLiterature',['title' => 'Product Literature - Meking Steel']);
    }
    public function productRD(){
        return view('productR-D',['title' => 'Product Literature - Meking Steel']);
    }
    public function qualityassurance(){
        return view('qualityAssurance', ['title' => 'Quality Assurance - Meking Steel']);
    }
    public function PEBBasicTerms(){
        return view('pEBBasicTerms',['title' => 'PEB Basic Terms - Meking Steel']);
    }
    public function careers(){
        return view('careers',['title' => 'Careers - Meking Steel']);
    }
}
