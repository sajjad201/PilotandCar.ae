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
        <div class="container">
            <div class="row mt-5 mb-6">
                <div class="col-md-5 pr-5">
                    <div class="fr-det">
                        <div><b>{{$from}} -> {{$to}}</b></div>
                        <div>Vehicle Name: <b>Limosine</b></div>
                        <div>Date: <b>{{$date}}</b></div>
                        <div>Time: <b>{{$time}}</b></div>
                        <div>Type: <b>{{$ridetype}}</b></div>
                        <div>Price: <b>{{$price}}</b></div>
                    </div>
                </div>
                <div class="col-md-6 fr-div-form">
                    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
                        <input type="hidden" name="from" value="{{$from}}">
                        <input type="hidden" name="to" value="{{$to}}">
                        <input type="hidden" name="date" value="{{$date}}">
                        <input type="hidden" name="time" value="{{$time}}">
                        <input type="hidden" name="type" value="{{$ridetype}}">
                        <input type="hidden" name="price" value="{{$price}}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="uname" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="Address">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="Contact-No">Contact No</label>
                            <input type="text" name="contact" class="form-control" placeholder="Contact No">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" name="des" class="form-control" placeholder="Description...">
                        </div>
                        <button type="submit" class="btn btn-sm">Book Ride</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

@endsection



