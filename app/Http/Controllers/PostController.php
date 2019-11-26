<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\booking;
use App\registration;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tbl_obj=new registration;
        $tbl_obj->from=$request->input('from');
        $tbl_obj->to=$request->input('to');
        $tbl_obj->date=$request->input('date');
        $tbl_obj->time=$request->input('time');
        $tbl_obj->vehicle=$request->input('vehicle');
        $tbl_obj->type=$request->input('type');
        $tbl_obj->price=$request->input('price');
        $tbl_obj->uname=$request->input('uname');
        $tbl_obj->address=$request->input('address');
        $tbl_obj->contact=$request->input('contact');
        $tbl_obj->duration=$request->input('duration');
        $tbl_obj->des=$request->input('des');
        $tbl_obj->save();

        return redirect('/')->with('ridebooked', 'You Booked Ride Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
