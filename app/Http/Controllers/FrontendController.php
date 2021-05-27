<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Index
    public function index(){
        return view('frontend.index');
    }

    // Profile
    public function companyProfile(){
        return view('frontend.company.profile');
    }

    // Chairman Messages
    public function companyMessage(){
        return view('frontend.company.message');
    }

    // Why choose narcissus
    public function whyChoose(){
        return view('frontend.company.whychoose');
    }

    // Recruitment Policy
    public function Recruitment(){
        return view('frontend.company.recruitment');
    }

    // Workforce
    public function Workforce(){
        return view('frontend.company.workforce');
    }

    // Performance
    public function Performance(){
        return view('frontend.company.performance');
    }


    // Licence
    public function Licence(){
        return view('frontend.company.licence');
    }
}
