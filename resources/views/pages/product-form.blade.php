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
                <div class="col-md-7 pf-div7">
                    <div class="pf-div7-hd">
                        About Product
                    </div>
                    <div class="pf-div7-pr-det text-capitalize">
                        <div class="pf-div7-pr-det-img">
                            <?php $newlink=str_replace("|","/",$link); ?>
                            <img src="{{asset($newlink)}}" class="img-fluid cp-img ">
                        </div>
                        Type: {{$type}}<br>
                        Price: {{$price}}
                    </div>
                </div>
                <div class="col-md-5 fr-div-form">
                    <div class="row fr-div-form-inn">
                        {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
                            {{ csrf_field() }}         
                            
                            <input type="hidden" name="type" value="{{$type}}">
                            <input type="hidden" name="price" value="{{$price}}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="output2" class="output"></div>
                                    </div><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">From</label>
                                            <input type="text"  placeholder="Current Location" name="from"  id="current3" onfocus="initializeAutocompleteThree()" aria-required="true" required>
                                            <input type="hidden" value="" name="citythree" id="citythree">
                                            <input type="hidden" name="latitudethree" id="latitudethree" placeholder="Latitude" value="">
                                            <input type="hidden" name="longitudethree" id="longitudethree" placeholder="Longitude" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">To</label>
                                            <input type="text" placeholder="Adress, airport, hotel,..."  name="to" id="locality4" onfocus="initializeAutocompleteFour()" aria-required="true" required>
                                            <input type="hidden" value="" name="city" id="city">
                                            <input type="hidden" name="latitude" id="latitude" placeholder="Latitude" value="" >
                                            <input type="hidden" name="latitude" id="latitudeone" placeholder="Latitude" value="" >
                                            <input type="hidden" name="longitude" id="longitude" placeholder="Longitude" value="">
                                            <input type="hidden" name="longitude" id="longitudeone" placeholder="Longitude" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date">
                                                Date
                                            </label>
                                            <label class="licon" for="date"></label>
                                            <input id="date" type="date" name="date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="time" >
                                                Time
                                            </label>
                                            <label class="licon" for="time2"></label>
                                            <input id="time2" type="text" name="time"  placeholder="" required>
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="uname" class="form-control" placeholder="Enter Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Contact-No">Contact No</label>
                                            <input type="text" name="contact" class="form-control" placeholder="Contact No" required>
                                        </div>
                                    </div>
                                </div>    
                                <div class="col-md-12 pb-3">
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="Description">Description</label>
                                        <input type="text" name="des" class="form-control" placeholder="Description..." required>
                                    </div>
                                    <button type="submit" class="btn btn-sm">Book Ride</button>
                                </div>
                                
                        {!! Form::close() !!}
                    </div>    
                </div>
                
            </div>
        </div>
    </section>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqqhqN5q545cx57GD5ht6JVidUQuuGd34&sensor=false&v=3&libraries=geometry,places&callback=initAutocomplete" async defer></script>
    <script src="{{asset('pilotpublic/js/map2.js')}}"></script>
@endsection



