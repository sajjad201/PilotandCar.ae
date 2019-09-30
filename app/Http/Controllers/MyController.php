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


    function rentacar(){
        return view('pages.rent-a-car');
    }
    function chauffeurservice(){
        return view('pages.chauffeur');
    }
    function limousineservice(){
        return view('pages.limousine');
    }
    function luxurybusesandcoaches(){
        return view('pages.bus');
    }
    function dubaicitytoursandsightseeing(){
        return view('pages.dubai-city');
    }
    function abudhabicitytour(){
        return view('pages.abu-dhabi-tour');
    }
    function airporttransfer(){
        return view('pages.airport');
    }
    function luxuryvans(){
        return view('pages.vans');
    }
    function hireadriversorchauffeur(){
        return view('pages.driver-chauffeur');
    }
    function deliveryvansandtrucks(){
        return view('pages.vans-and-trucks');
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
