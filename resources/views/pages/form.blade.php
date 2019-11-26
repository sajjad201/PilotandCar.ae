@extends('layouts.app-two')

@section('page_title')
    Fill Form
@endsection

@section('tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection

@section('content')

<style>
form input{
    margin: 0px;
}
.btn-primary{
    border: none
}
</style>
    <section>
        <div class="container-fluid">
            <div class="row mt-5 mb-6">
                <div class="col-md-5 pr-5">
                    <div class="fr-det">
                        <div class="fr-det-tit">Booking Details</div>
                        <div>
                            @if($from =='')
                                From:<span class="sel-no-sel"> no location selected<br></span>
                            @else
                                From: <b>{{$from}}</b><br>
                            @endif
                            @if($to =='')
                                To: <span class="sel-no-sel">no location selected</span>
                            @else
                                To: <b>{{$to}}</b><br>
                            @endif
                        </div>
                        
                        <div>Vehicle Name: <b>{{$name}}</b></div>
                        <div>Date: <b>{{$date}}</b></div>
                        <div>Time: <b>{{$time}}</b></div>
                        <div>Type: <b>{{$ridetype}}</b></div>
                        <div>Price: <b>{{$price}} AED</b></div>
                    </div>
                </div>
                <div class="col-md-6 fr-div-form fr-div-form-fr">
                    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
                        <input type="hidden" name="from" value="{{$from}}">
                        <input type="hidden" name="to" value="{{$to}}">
                        <input type="hidden" name="date" value="{{$date}}">
                        <input type="hidden" name="time" value="{{$time}}">
                        <input type="hidden" name="vehicle" value="{{$name}}">
                        <input type="hidden" name="type" value="{{$ridetype}}">
                        <input type="hidden" name="price" value="{{$price}}">
                        <div class="form-group">
                            <label for="name">Select Booking Duration (in hours or by Days)</label>
                            <select name="duration" style="width:100%; padding:10px" required>
                                <option value="2 hours">Book for 2 Hours</option>
                                <option value="3 hours">Book for 3 Hours</option>
                                <option value="4 hours">Book for 4 Hours</option>
                                <option value="5 hours">Book for 5 Hours</option>
                                <option value="6 hours">Book for 6 Hours</option>
                                <option value="7 hours">Book for 7 Hours</option>
                                <option value="8 hours">Book for 8 Hours</option>
                                <option value="9 hours">Book for 9 Hours</option>
                                <option value="10 hours">Book for 10 Hours</option>
                                <option value="11 hours">Book for 11 Hours</option>
                                <option value="12 hours">Book for 12 Hours</option>
                                <option value="ONE DAY">BOOK FOR ONE DAY</option>
                                <option value="TWO DAYS">BOOK FOR TWO DAYS</option>
                                <option value="THREE DAYS">BOOK FOR THREE DAYS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="uname" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group">
                            <label for="Address">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
                        </div>
                        <div class="form-group">
                            <label for="Contact-No">Contact No</label>
                            <input type="text" name="contact" class="form-control" placeholder="Contact No" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" name="des" class="form-control" placeholder="Description..." required>
                        </div>
                        <button type="submit" class="btn btn-sm">Book Ride</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

@endsection



