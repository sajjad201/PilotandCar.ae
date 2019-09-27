<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index(){
        return view('pages.index');
    }
    function ourservices(){
        return view('pages.our-services');
    }
    function serviceone(){
        return view('pages.service-one');
    }
    function servicetwo(){
        return view('pages.service-two');
    }
    function servicethree(){
        return view('pages.service-three');
    }
    function servicefour(){
        return view('pages.service-four');
    }
    function servicefive(){
        return view('pages.service-five');
    }
    function servicesix(){
        return view('pages.service-six');
    }
    function serviceseven(){
        return view('pages.service-seven');
    }
    function serviceeight(){
        return view('pages.service-eight');
    }
    function servicenine(){
        return view('pages.service-nine');
    }
    function serviceten(){
        return view('pages.service-ten');
    }
    function serviceeleven(){
        return view('pages.service-eleven');
    }
    function servicetwelve(){
        return view('pages.service-twelve');
    }
    function ourfleet(){
        return view('pages.our-fleet');
    }
    function aboutus(){
        return view('pages.about-us');
    }
    function offers(){
        return view('pages.offers');
    }
    function test(){
        return view('pages.test');
    }
    function faqs(){
        return view('pages.faq');
    }
    function contactus(){
        return view('pages.contact-us');
    }
    function blog(){
        return view('pages.blog');
    }
}
