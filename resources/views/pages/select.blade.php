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
                
                <div class="row se-pr padd-0">
                    <div class="se-pr-div">
                        <div class="row">
                            <div class="col-md-8 se-pr-title">
                                S Class
                                <div class="se-ti-txt">Booking Time: <b>{{$time}}</b></div>
                                <div class="se-ti-txt">Booking Date: <b><b>{{$date}}</b></b></div>
                            </div>
                            <div class="col-md-4 se-pr-times">
                                <div class="se-desti">
                                    Location/Destination
                                </div>
                                <div class="col-md-6 se-pr-times-from padd-0 pr-4">
                                    From<br>
                                    <div class="se-pr-from-des">
                                        @if($from =='')
                                            <span class="sel-no-sel">no location selected</span>
                                        @else
                                            {{$from}}
                                        @endif
                                        
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 se-pr-times-from padd-0">
                                    To<br>
                                    <div class="se-pr-from-des">
                                        @if($to =='')
                                            <span class="sel-no-sel">no location selected</span>
                                        @else
                                            {{$to}}
                                        @endif
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="se-pr-div-bott">
                        <div class="col-md-9 se-pr-div-bott-img  padd-0">
                            <img src="pilotpublic/images/up/img/p/p1.jpg" class="se-pr-div-bott-img-inn" alt="">
                        </div>
                        <div class="col-md-3  padd-0">
                            <div class="se-pr-div-bott-botton">
                                <div class="se-pr-div-bott-botton-txt">
                                    200 AED<br>
                                </div>
                                <form action="form" method="get">
                                    <input type="hidden" name="from" value="{{$from}}">
                                    <input type="hidden" name="to" value="{{$to}}">
                                    <input type="hidden" name="date" value="{{$date}}">
                                    <input type="hidden" name="time" value="{{$time}}">
                                    <input type="hidden" name="ridetype" value="{{$ridetype}}">
                                    <input type="hidden" name="price" value="200">
                                    <input type="hidden" name="name" value="S Class">
                                    <button type="submit" class="btn mybtn-lg btn-block sel-btn-pa">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- 2 --}}
                <div class="row se-pr padd-0">
                    <div class="se-pr-div">
                        <div class="row">
                            <div class="col-md-8 se-pr-title">
                                S Class
                                <div class="se-ti-txt">Booking Time: <b>{{$time}}</b></div>
                                <div class="se-ti-txt">Booking Date: <b>{{$date}}</b></div>
                            </div>
                            <div class="col-md-4 se-pr-times">
                                <div class="se-desti">
                                    Location/Destination
                                </div>
                                <div class="col-md-6 se-pr-times-from padd-0 pr-4">
                                    From<br>
                                    <div class="se-pr-from-des">
                                        @if($from =='')
                                            <span class="sel-no-sel">no location selected</span>
                                        @else
                                            {{$from}}
                                        @endif
                                        
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 se-pr-times-from padd-0">
                                    To<br>
                                    <div class="se-pr-from-des">
                                        @if($to =='')
                                            <span class="sel-no-sel">no location selected</span>
                                        @else
                                            {{$to}}
                                        @endif
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="se-pr-div-bott">
                        
                        <div class="col-md-9 se-pr-div-bott-img  padd-0">
                            <img src="pilotpublic/images/up/img/p/p2.jpg" class="se-pr-div-bott-img-inn" alt="">
                        </div>
                        <div class="col-md-3  padd-0">
                            <div class="se-pr-div-bott-botton">
                                <div class="se-pr-div-bott-botton-txt">
                                    100 AED<br>
                                </div>
                                <form action="form" method="get">
                                    <input type="hidden" name="from" value="{{$from}}">
                                    <input type="hidden" name="to" value="{{$to}}">
                                    <input type="hidden" name="date" value="{{$date}}">
                                    <input type="hidden" name="time" value="{{$time}}">
                                    <input type="hidden" name="ridetype" value="{{$ridetype}}">
                                    <input type="hidden" name="price" value="100">
                                    <input type="hidden" name="name" value="S Class">
                                    <button type="submit" class="btn mybtn-lg btn-block sel-btn-pa">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row se-pr padd-0">
                    <div class="se-pr-div">
                        <div class="row">
                            <div class="col-md-8 se-pr-title">
                                GMC Yukon
                                <div class="se-ti-txt">Booking Time: <b>{{$time}}</b></div>
                                <div class="se-ti-txt">Booking Date: <b>{{$date}}</b></div>
                            </div>
                            <div class="col-md-4 se-pr-times">
                                <div class="se-desti">
                                    Location/Destination
                                </div>
                                <div class="col-md-6 se-pr-times-from padd-0 pr-4">
                                    From<br>
                                    <div class="se-pr-from-des">
                                        @if($from =='')
                                            <span class="sel-no-sel">no location selected</span>
                                        @else
                                            {{$from}}
                                        @endif
                                        
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 se-pr-times-from padd-0">
                                    To<br>
                                    <div class="se-pr-from-des">
                                        @if($to =='')
                                            <span class="sel-no-sel">no location selected</span>
                                        @else
                                            {{$to}}
                                        @endif
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="se-pr-div-bott">
                        
                        <div class="col-md-9 se-pr-div-bott-img  padd-0">
                            <img src="pilotpublic/images/up/img/p/p3.jpg" class="se-pr-div-bott-img-inn" alt="">
                        </div>
                        <div class="col-md-3  padd-0">
                            <div class="se-pr-div-bott-botton">
                                <div class="se-pr-div-bott-botton-txt">
                                    150 AED<br>
                                </div>
                                <form action="form" method="get">
                                    <input type="hidden" name="from" value="{{$from}}">
                                    <input type="hidden" name="to" value="{{$to}}">
                                    <input type="hidden" name="date" value="{{$date}}">
                                    <input type="hidden" name="time" value="{{$time}}">
                                    <input type="hidden" name="ridetype" value="{{$ridetype}}">
                                    <input type="hidden" name="price" value="150">
                                    <input type="hidden" name="name" value="S Class">
                                    <button type="submit" class="btn mybtn-lg btn-block sel-btn-pa">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row se-pr padd-0">
                    <div class="se-pr-div">
                        <div class="row">
                            <div class="col-md-8 se-pr-title">
                                V Class
                                <div class="se-ti-txt">Booking Time: <b>{{$time}}</b></div>
                                <div class="se-ti-txt">Booking Date: <b>{{$date}}</b></div>
                            </div>
                            <div class="col-md-4 se-pr-times">
                                <div class="se-desti">
                                    Location/Destination
                                </div>
                                <div class="col-md-6 se-pr-times-from padd-0 pr-4">
                                    From<br>
                                    <div class="se-pr-from-des">
                                        @if($from =='')
                                            <span class="sel-no-sel">no location selected</span>
                                        @else
                                            {{$from}}
                                        @endif
                                        
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 se-pr-times-from padd-0">
                                    To<br>
                                    <div class="se-pr-from-des">
                                        @if($to =='')
                                            <span class="sel-no-sel">no location selected</span>
                                        @else
                                            {{$to}}
                                        @endif
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="se-pr-div-bott">
                        
                        <div class="col-md-9 se-pr-div-bott-img  padd-0">
                            <img src="pilotpublic/images/up/img/p/p4.jpg" class="se-pr-div-bott-img-inn" alt="">
                        </div>
                        <div class="col-md-3  padd-0">
                            <div class="se-pr-div-bott-botton">
                                <div class="se-pr-div-bott-botton-txt">
                                    150 AED<br>
                                </div>
                                <form action="form" method="get">
                                    <input type="hidden" name="from" value="{{$from}}">
                                    <input type="hidden" name="to" value="{{$to}}">
                                    <input type="hidden" name="date" value="{{$date}}">
                                    <input type="hidden" name="time" value="{{$time}}">
                                    <input type="hidden" name="ridetype" value="{{$ridetype}}">
                                    <input type="hidden" name="price" value="150">
                                    <input type="hidden" name="name" value="S Class">
                                    <button type="submit" class="btn mybtn-lg btn-block sel-btn-pa">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>

@endsection



