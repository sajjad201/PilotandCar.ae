@extends('layouts.app-one')

@section('page_title')
    Select Car
@endsection

@section('tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row mt-5">
                @for($i=0; $i<10; $i++)
                <div class="row se-pr padd-0">
                    <div class="se-pr-div">
                        <div class="row">
                            <div class="col-md-8 se-pr-title">
                                Bussiness Class
                                <div class="se-ti-txt">Timings for Booking: {{$time}}</div>
                                <div class="se-ti-txt">Booking Date: {{$date}}</div>
                            </div>
                            <div class="col-md-4 se-pr-times">
                                <div class="se-desti">
                                    Location/Destination
                                </div>
                                <div class="col-md-6 se-pr-times-from padd-0 pr-4">
                                    From<br>
                                    <div class="se-pr-from-des">
                                        {{$from}}
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 se-pr-times-from padd-0">
                                    To<br>
                                    <div class="se-pr-from-des">
                                        {{$to}}
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="se-pr-div-bott">
                        <div class="col-md-3  padd-0">
                            <div class="se-pr-div-bott-txt">
                                <div class="se-pr-div-bott-txt-align">
                                    A dedicated 24x7 customer
                                    support team always at your
                                    service to help solve any problem
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 se-pr-div-bott-img  padd-0">
                            <img src="pilotpublic/images/fleet/5.png" class="se-pr-div-bott-img-inn" alt="">
                        </div>
                        <div class="col-md-3  padd-0">
                            <div class="se-pr-div-bott-botton">
                                <div class="se-pr-div-bott-botton-txt">
                                    USD 400<br>
                                </div>
                                <form action="form" method="get">
                                    <input type="hidden" name="from" value="{{$from}}">
                                    <input type="hidden" name="to" value="{{$to}}">
                                    <input type="hidden" name="date" value="{{$date}}">
                                    <input type="hidden" name="time" value="{{$time}}">
                                    <input type="hidden" name="ridetype" value="{{$ridetype}}">
                                    <input type="hidden" name="price" value="USD 400">
                                    <button type="submit" class="btn mybtn-lg btn-block">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor

            </div>
        </div>
    </section>

@endsection



