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

    function abudhabicitytour(){
        return view('pages.abu-dhabi-city-tour');
    }
    function airporttransfer(){
        return view('pages.airport-transfer');
    }
    function busrentaldubai(){
        return view('pages.bus-rental-dubai');
    }
    function chauffeurservice(){
        return view('pages.chauffer-service');
    }
    function deliveryvans(){
        return view('pages.delivery-vans');
    }
    function driverorchauffeur(){
        return view('pages.driver-chauffeur');
    }
    function dubaicitytour(){
        return view('pages.dubai-city-tour');
    }
    function limousineservice(){
        return view('pages.limousine-service');
    }
    function rentacar(){
        return view('pages.rent-car');
    }
    function vans(){
        return view('pages.vans');
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
    function select(){
        return view('pages.select');
    }

    function searchbyhour(Request $request){

        //validate
        $this->validate($request, [
            'from' => 'required',
            'to' => 'required',
            'date' => 'required',
            'time' => 'required',
            'ridetype' => 'required'
        ]);
        
        //get data in variables
        $from=$request->from;
        $to=$request->to;
        $date=$request->date;
        $time=$request->time;
        $ridetype=$request->ridetype;

        //return data to view "select"
        return view('pages.select')->with([
            'from' => $from, 
            'to' => $to, 
            'date' => $date, 
            'time' => $time,
            'ridetype' => $ridetype
            
        ]);
    }
    
    function form(Request $request){
        //get data in variables
        $from=$request->from;
        $to=$request->to;
        $date=$request->date;
        $time=$request->time;
        $ridetype=$request->ridetype;
        $price=$request->price;
        $name=$request->name;

        //return data to view "FORM"
        return view('pages.form')->with([
            'from' => $from, 
            'to' => $to, 
            'date' => $date, 
            'time' => $time,
            'ridetype' => $ridetype,
            'price' => $price,
            'name' => $name
            
        ]);
    }
    function productform($type, $price, $name, $service, $link){
        // //get data in variables
        // $from=$request->from;
        // $to=$request->to;
        // $date=$request->date;
        // $time=$request->time;
        // $ridetype=$request->ridetype;
        // $price=$request->price;

        // //return data to view "FORM"
        // return view('pages.productform')->with([
        //     'from' => $from, 
        //     'to' => $to, 
        //     'date' => $date, 
        //     'time' => $time,
        //     'ridetype' => $ridetype,
        //     'price' => $price
            
        // ]);

        //$name=$request->name;
        return view('pages.product-form', compact('type', 'price', 'name', 'service', 'link'));
    }
}
