
@extends('layouts.indexapp')

@section('page_title')
    INDEX
@endsection

@section('tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection

@section('content')
<style>
.active{
    padding: unset;
}
.slick-next{
    right: 10px !important;
    top: 42px;

}
.slick-prev{
    left: 25px !important;
    top: 42px;
}
.auto-sl{
    padding: 0px 70px !important;
}
.btn-palma-de{
    background-color: #034f84;
    color: #FFFFFF;
    cursor: unset !important;
}
.btn-palma-de:hover{
    background-color: #023b64;
    color: #FFFFFF;
}
.relaxed-journey{
    top:unset;
    bottom: 34px;
    left: 64px;
}
</style>



<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12" style="background-color:#408080; ">
                    <div class="col-lg-12 ">
                        <div class="col-lg-12 header-image" style=" width:100%; height:600px; position: relative; ">
                            <img src="pilotpublic/images/cover.jpeg" style="height:100%; width:100%;" class="obj-cover" class="object-image" />
                            <div class="col-lg-8 relaxed-journey">
                                    <div class="col-lg-12" style="padding:20px; text-align:left; padding-right: 250px; padding-top:15px">
                                        <div style="font-family: 'Gentona Book'; font-size: 13px; font-weight:400; color:#ffffff !important;">
                                            THE ROYAL ESSENCE OF JOURNEY
                                        </div>
                                        <div style="font-family: 'Gentona Book'; font-size: 50px; font-weight:600; color:#ffffff;">
                                            RELAXED JOURNEY EVER
                                        </div>
                                    </div>
                                </div>
                            
    
                            <div class="col-lg-4 centered-form-div">
                                <section class="loginWrapper">
                                    <ul class="tabs">
                                        <li class="active" style="font-size: 16px; border-top-left-radius:3px;">ONE WAY</li>
                                        <li style="font-size: 16px; border-top-right-radius:3px;">BY THE HOUR</li>
                                    </ul>
                                    <ul class="tab__content">
                                        <li class="active">
                                            <div class="content__wrapper">
                                                
                                                <form method="GET" action="searchbyhour" class="form ind-form">
                                                    <input type="hidden" name="ridetype" value="One Way">
                                                    @if (Session('ridebooked'))
                                                    <button type="button" class="btn btn-primary hidebtn" data-toggle="modal" data-target="#myModal" id="mybtn">
                                                        Open modal
                                                    </button>
                                                    <div class="modal fade" id="myModal">
                                                        <div class="modal-dialog modal-s">
                                                            <div class="modal-content">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title p-4">
                                                                You Booked Ride Successfully!<br>
                                                                We Will Get You Soon<br>
                                                                Thanks for Using Our Services.
                                                                <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times ridebooked"></i></button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>document.getElementById('mybtn').click();</script>
                                                    @endif
                                                    {{ csrf_field() }}
                                                    <div class="ipar">
                                                        <div class="cinner cinner-border-rem">
                                                            <label for="addr" class="label">
                                                                From
                                                            </label>
                                                            <label class="licon" for="addr"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                                            <input type="text" class="inputfocus" placeholder="Current Location" name="from" id="current" onfocus="initializeAutocompleteLocOne()" aria-required="true" required>
                                                            <input type="hidden" name="cityone" id="cityone" placeholder="City" value="">
                                                            <input type="hidden" name="latitudeone" id="latitudeone" placeholder="Latitude" value="">
                                                            <input type="hidden" name="longitudeone" id="longitudeone" placeholder="Longitude" value="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="to" class="label">
                                                                To
                                                            </label>
                                                            <label class="licon" for="to"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                                            <input type="text" class="inputfocus" placeholder="Enter Ride" name="to" id="locality" onfocus="initializeAutocomplete()" aria-required="true" value="" required>
                                                            <input type="hidden" name="city" id="city" placeholder="City" value="">
                                                            <input type="hidden" name="latitude" id="latitude" placeholder="Latitude" value="" >
                                                            <input type="hidden" name="longitude" id="longitude" placeholder="Longitude" value="">

                                                        </div>
                                                    </div>

                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="date" class="label">
                                                                Date
                                                            </label>
                                                            <label class="licon" for="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></label>
                                                            <input type='text' name="date" 
                                                                class="datepicker-here inputfocus" data-language='en' id="date" value="<?php echo date("m/d/Y")?>" />
                                                        </div>
                                                    </div>
                                                   
                                                    @if ($errors->has('dateone'))
                                                        <div class="alert alert-danger">
                                                            Error! Date is Required
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                        </div>
                                                    @endif
                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="time" class="label">
                                                                Time
                                                            </label>
                                                            <label class="licon" for="time"><i class="fa fa-clock-o" aria-hidden="true"></i></label>
                                                            <input id="time" type="text" name="time" class="inputfocus">
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('timeone'))
                                                        <div class="alert alert-danger">
                                                            Error! Time is Required
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                        </div>
                                                    @endif
                                                    <div id="output" class="output">
                                                       
                                                    </div>
                                                    
                                                    <button type="submit" class="search btn">Search One</button>
                                                </form>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="content__wrapper">
                                                <form method="get" action="searchbyhour"  class="form">
                                                    <input type="hidden" name="ridetype" value="By Hour">
                                                    {{ csrf_field() }}                                                    
                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="addr" class="label">
                                                                From
                                                            </label>
                                                            <label class="licon" for="addr"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                                            <input type="text" class="inputfocus" placeholder="Current Location" name="from"  id="current3" onfocus="initializeAutocompleteThree()" aria-required="true" required>
                                                            <input type="hidden" value="" name="citythree" id="citythree">
                                                            <input type="hidden" name="latitudethree" id="latitudethree" placeholder="Latitude" value="">
                                                            <input type="hidden" name="longitudethree" id="longitudethree" placeholder="Longitude" value="">
                                                        </div>
                                                    </div>
                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="to" class="label">
                                                                To
                                                            </label>
                                                            <label class="licon" for="to"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                                            <input type="text" placeholder="Adress, airport, hotel,..." class="inputfocus" name="to" id="locality4" onfocus="initializeAutocompleteFour()" aria-required="true" required>
                                                            <input type="hidden" value="" name="cityfour" id="cityfour">
                                                            <input type="hidden" name="latitudefour" id="latitudefour" placeholder="Latitude" value="" >
                                                            <input type="hidden" name="latitudefour" id="latitudefour" placeholder="Longitude" value="">

                                                        </div>
                                                    </div>
                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="date" class="label">
                                                                Date
                                                            </label>
                                                            <label class="licon" for="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></label>
                                                            <input type='text' id="date" name="date" class="datepicker-here inputfocus" data-language='en' />
                                                        </div>
                                                    </div>
                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="time" class="label">
                                                                Time
                                                            </label>
                                                            <label class="licon" for="time2"><i class="fa fa-clock-o" aria-hidden="true"></i></label>
                                                            <input id="time2" type="text" name="time"  placeholder="" class="inputfocus">
                                                        </div>
                                                    </div>
                                                    <div id="output2" class="output">
                                                       
                                                    </div>
                                                    <button type="submit" class="search btn">Search Two</button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Slick Js slider start -->
    <div class="container container-position ">
            <div class="row autoplay slick-slider-bg auto-sl">
            
            <div class=" slick_main slick_main_hover ">
                <div class="content-holder ind-six-icons">
                    <div class="ind-six-icons-comm ind-six-icons-img">
                        <img src="pilotpublic/images/icons/6icons/1.png" alt="" class="ind-six-icons-img-c">
                    </div>
                    <div class="ind-six-icons-comm ind-six-icons-txt">
                        <div class="ind-six-icons-txt-1">
                            Transparent Fares
                        </div>
                        <div class="ind-six-icons-txt2-">
                            Economy  to Luxury fleet
                        </div>
                    </div>
                </div>
            </div>
            <div class=" slick_main slick_main_hover ">
                <div class="content-holder ind-six-icons">
                    <div class="ind-six-icons-comm ind-six-icons-img">
                        <img src="pilotpublic/images/icons/6icons/4.png" alt="" class="ind-six-icons-img-c">
                    </div>
                    <div class="ind-six-icons-comm ind-six-icons-txt">
                        <div class="ind-six-icons-txt-1">
                            Ac Cars
                        </div>
                        <div class="ind-six-icons-txt2-">
                            One way trip 
                        </div>
                    </div>
                </div>
            </div>
            <div class=" slick_main slick_main_hover ">
                <div class="content-holder ind-six-icons">
                    <div class="ind-six-icons-comm ind-six-icons-img">
                        <img src="pilotpublic/images/icons/6icons/6.png" alt="" class="ind-six-icons-img-c">
                    </div>
                    <div class="ind-six-icons-comm ind-six-icons-txt">
                        <div class="ind-six-icons-txt-1">
                            Insurance coverage
                        </div>
                        <div class="ind-six-icons-txt2-">
                            Easy to Book
                        </div>
                    </div>
                </div>
            </div>
            <div class=" slick_main slick_main_hover ">
                <div class="content-holder ind-six-icons">
                    <div class="ind-six-icons-comm ind-six-icons-img">
                        <img src="pilotpublic/images/icons/6icons/5.png" alt="" class="ind-six-icons-img-c">
                    </div>
                    <div class="ind-six-icons-comm ind-six-icons-txt">
                        <div class="ind-six-icons-txt-1">
                            Lower Rates
                        </div>
                        <div class="ind-six-icons-txt2-">
                            Hourly Rides
                        </div>
                    </div>
                </div>
            </div>
            <div class=" slick_main slick_main_hover ">
                <div class="content-holder ind-six-icons">
                    <div class="ind-six-icons-comm ind-six-icons-img">
                        <img src="pilotpublic/images/icons/6icons/3.png" alt="" class="ind-six-icons-img-c">
                    </div>
                    <div class="ind-six-icons-comm ind-six-icons-txt">
                        <div class="ind-six-icons-txt-1">
                            One Way Trip
                        </div>
                        <div class="ind-six-icons-txt2-">
                            Shopping Tours
                        </div>
                    </div>
                </div>
            </div>
            <div class=" slick_main slick_main_hover ">
                <div class="content-holder ind-six-icons">
                    <div class="ind-six-icons-comm ind-six-icons-img">
                        <img src="pilotpublic/images/icons/6icons/2.png" alt="" class="ind-six-icons-img-c">
                    </div>
                    <div class="ind-six-icons-comm ind-six-icons-txt">
                        <div class="ind-six-icons-txt-1">
                            Free cancelation
                        </div>
                        <div class="ind-six-icons-txt2-">
                            City Tour
                        </div>
                    </div>
                </div>
            </div>
            
             
              
                          
            </div>
         </div>
        </div>
         <!-- main slick slider end -->
    
    
   
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="padding-top:40px; padding-bottom:0px;">
                <div class="col-lg-12">
                    
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-12 text-uppercase" style="font-size:40px; text-align:center; font-weight:100; color:#f96714">
                            Airport services
                        </div>
                        
                        <section class="bottom-icons1">
                            <div class="container-fluid">
                            <div class="row">
                            
                            <div class="col-md-3 bottom-icons1-div">
                                <div class="bottom-icons1-div-icon">
                                    <img src="pilotpublic/images/icons/air/1.png" class="in-ic-img" />
                                </div>
                                <div class="bottom-icons1-div-text1 ind-icons1-div-text1">Airport Transfers</div>
                                <div class="bottom-icons1-div-text2">
                                    Get to and from the airport<br>Quickly and easily
                                </div>
                                
                            </div>
                            <div class="col-md-3 bottom-icons1-div">
                                <div class="bottom-icons1-div-icon">
                                    <img src="pilotpublic/images/icons/air/2.png" class="in-ic-img" />
                                </div>
                                <div class="bottom-icons1-div-text1 ind-icons1-div-text1">Professional Chauffeurs</div>
                                <div class="bottom-icons1-div-text2">
                                    We will Drive you anywhere<br>Safely and confidently
                                </div>
                                
                            </div>
                            <div class="col-md-3 bottom-icons1-div">
                                <div class="bottom-icons1-div-icon">
                                    <img src="pilotpublic/images/icons/air/3.png" class="in-ic-img" />
                                </div>
                                <div class="bottom-icons1-div-text1 ind-icons1-div-text1">Fixed Fares</div>
                                <div class="bottom-icons1-div-text2">
                                    Minimum rates guaranteed<br>book at great Prices
                                </div>
                                
                            </div>
                            <div class="col-md-3 bottom-icons1-div">
                                <div class="bottom-icons1-div-icon">
                                    <img src="pilotpublic/images/icons/air/4.png" class="in-ic-img" />
                                </div>
                                <div class="bottom-icons1-div-text1 ind-icons1-div-text1">Standard to Luxury </div>
                                <div class="bottom-icons1-div-text2">
                                    All fleet of ground transport<br>under one roof
                                </div>
                                
                            </div>
                            </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div> 



    
    <div class="container-fluid" style=" padding:0px">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12 col-md-12 col-sm-12" style="background-color:#fbfbfb; padding:10px; padding-top:20px; padding-bottom:50px">
                    <div class="col-lg-12" style=" padding-left:15px; padding-top:20px">
                        <div class="col-md-12" style="border-left:4px solid #FF8040; font-size:36px; font-weight:500;  
                                    padding-left:10px; color:#034f84; font-family:'SigvarRegular'">
                            Singapore Airlines Experience
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-top:10px">
                        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:20px">
                            <div class="card2" style="cursor:pointer">
                                <div class="parent">
                                    <div class="child">
                                        <img src="pilotpublic/images/6box/1.jpeg" style="height:100%; width:100%" class="obj-cover"  />
                                    </div>
                                </div>
                                <div class="col-lg-12 card3" style="background-color:#FFFFFF; padding:18px; border:1px solid rgb(245, 242, 242)">
                                    <div class="card3-style">
                                        <img src="pilotpublic/images/car02-01.png" height="100%"/>
                                    </div>
                                    <div style="font-size:24px; font-weight:500; color:#333333">Explore Dubai City with Our Pilots</div>
                                    <div class="in-six-box-sm-txt">Chose Range of Cars from our Fleet according to your  Budget and numbers
                                            Of passengers want to travel around the city or other part of emirates 
                                            .</div>
                                    <div class="index-six-boxes">
                                        <div class="index-six-boxes-inner-one">
                                            <div class="in-box-inn-div">
                                                <div class="in-box-inn-div-one">
                                                    <img src="pilotpublic/images/icons/main/6.png" class="main-icon-img" />
                                                </div>
                                                <div class="in-box-inn-div-two">Quality <br>Driver</div>
                                            </div>
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <div class="in-box-inn-div">
                                                <div class="in-box-inn-div-one">
                                                    <img src="pilotpublic/images/icons/main/2.png" class="main-icon-img" />
                                                </div>
                                                <div class="in-box-inn-div-two">Transparent<br>Fares</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="font-weight:600; color:#034f84; font-size:16px; margin-top:10px; padding-top:15px; border-top:1px solid lightgray">Discover Now</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:20px">
                            <div class="card2" style="cursor:pointer">
                                <div class="parent">
                                    <div class="child">
                                        <img src="pilotpublic/images/6box/2.jpeg" style="height:100%; width:100%" class="obj-cover"  />
                                    </div>
                                </div>
                                <div class="col-lg-12 card3" style="background-color:#FFFFFF; padding:18px; border:1px solid rgb(245, 242, 242)">
                                    <div class="card3-style">
                                        <img src="pilotpublic/images/car02-01.png" height="100%"/>
                                    </div>
                                    <div style="font-size:24px; font-weight:500; color:#333333">Range of Service under one roof </div>
                                    <div class="in-six-box-sm-txt">
                                            We have choices of Service , from everyone  use  standard to High - end luxury cars ,you can book instantly 
                                            Or in advance we will follow your booking Dates and time                                            
                                    </div>
                                    <div class="index-six-boxes">
                                        <div class="index-six-boxes-inner-one">
                                            <div class="in-box-inn-div">
                                                <div class="in-box-inn-div-one">
                                                    <img src="pilotpublic/images/icons/main/1.1.png" class="main-icon-img" />
                                                </div>
                                                <div class="in-box-inn-div-two">Insurance <br>Coverage</div>
                                            </div>
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <div class="in-box-inn-div">
                                                <div class="in-box-inn-div-one">
                                                    <img src="pilotpublic/images/icons/main/2.2.png" class="main-icon-img" />
                                                </div>
                                                <div class="in-box-inn-div-two">24/7  <br>Customer Support</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="font-weight:600; color:#034f84; font-size:16px; margin-top:10px; padding-top:15px; border-top:1px solid lightgray">Read More</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:20px">
                            <div class="card2" style="cursor:pointer">
                                <div class="parent">
                                    <div class="child">
                                        <img src="pilotpublic/images/6box/3.jpeg" style="height:100%; width:100%" class="obj-cover"  />
                                    </div>
                                </div>
                                <div class="col-lg-12 card3" style="background-color:#FFFFFF; padding:18px; border:1px solid rgb(245, 242, 242)">
                                    <div class="card3-style">
                                        <img src="pilotpublic/images/car02-01.png" height="100%"/>
                                    </div>
                                    <div style="font-size:24px; font-weight:500; color:#333333">We are Secure and Safe</div>
                                    <div class="in-six-box-sm-txt">
                                            All our fleet is technically passed from RTA department,  pilots are verified and trained 
                                            From the road and Transport authority , we ensure you safe travel Experience of Chauffeur Service in Dubai   
                                    </div>
                                    <div class="index-six-boxes">
                                        <div class="index-six-boxes-inner-one">
                                            <div class="in-box-inn-div">
                                                <div class="in-box-inn-div-one">
                                                    <img src="pilotpublic/images/icons/main/6.6.png" class="main-icon-img" />
                                                </div>
                                                <div class="in-box-inn-div-two">Advance <br> Booking</div>
                                            </div>
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <div class="in-box-inn-div">
                                                <div class="in-box-inn-div-one">
                                                    <img src="pilotpublic/images/icons/main/4.4.png" class="main-icon-img" />
                                                </div>
                                                <div class="in-box-inn-div-two">One way <br> Trip</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="font-weight:600; color:#034f84; font-size:16px; margin-top:10px; padding-top:15px; border-top:1px solid lightgray">Book now</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:20px">
                            <div class="card2" style="cursor:pointer">
                                <div class="parent">
                                    <div class="child">
                                        <img src="pilotpublic/images/6box/4.jpeg" style="height:100%; width:100%" class="obj-cover"  />
                                    </div>
                                </div>
                                <div class="col-lg-12 card3" style="background-color:#FFFFFF; padding:18px; border:1px solid rgb(245, 242, 242)">
                                    <div class="card3-style">
                                        <img src="pilotpublic/images/car02-01.png" height="100%"/>
                                    </div>
                                    <div style="font-size:24px; font-weight:500; color:#333333">24/7 Customer support</div>
                                    <div class="in-six-box-sm-txt">
                                        Our Dedicated team is  ready to Listen you any time , we can suggest you perfect advise related 
                                        about Ground transport for individuals or Big Events
                                    </div>
                                    <div class="index-six-boxes">
                                        <div class="index-six-boxes-inner-one">
                                            <div class="in-box-inn-div">
                                                <div class="in-box-inn-div-one">
                                                    <img src="pilotpublic/images/icons/main/3.png" class="main-icon-img" />
                                                </div>
                                                <div class="in-box-inn-div-two">Card & <br> Cash</div>
                                            </div>
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <div class="in-box-inn-div">
                                                <div class="in-box-inn-div-one">
                                                    <img src="pilotpublic/images/icons/main/5.png" class="main-icon-img" />
                                                </div>
                                                <div class="in-box-inn-div-two">Easy <br> Booking</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="font-weight:600; color:#034f84; font-size:16px; margin-top:10px; padding-top:15px; border-top:1px solid lightgray">Select more</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:20px">
                            <div class="card2" style="cursor:pointer">
                                <div class="parent">
                                    <div class="child">
                                        <img src="pilotpublic/images/6box/5.jpeg" style="height:100%; width:100%" class="obj-cover"  />
                                    </div>
                                </div>
                                <div class="col-lg-12 card3" style="background-color:#FFFFFF; padding:18px; border:1px solid rgb(245, 242, 242)">
                                    <div class="card3-style">
                                        <img src="pilotpublic/images/car02-01.png" height="100%"/>
                                    </div>
                                    <div style="font-size:24px; font-weight:500; color:#333333">New Model Fleet</div>
                                    <div class="in-six-box-sm-txt">
                                            Our majority of car fleet is less than 2 years Old , with company Maintained History , 
                                            With every day service and  cleaning                                            
                                    </div>
                                    <div class="index-six-boxes">
                                        <div class="index-six-boxes-inner-one">
                                            <div class="in-box-inn-div">
                                                <div class="in-box-inn-div-one">
                                                    <img src="pilotpublic/images/icons/main/4.png" class="main-icon-img" />
                                                </div>
                                                <div class="in-box-inn-div-two">Economy to <br> Premium</div>
                                            </div>
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <div class="in-box-inn-div">
                                                <div class="in-box-inn-div-one">
                                                    <img src="pilotpublic/images/icons/main/1.png" class="main-icon-img" />
                                                </div>
                                                <div class="in-box-inn-div-two">Lower  <br>Rates</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="font-weight:600; color:#034f84; font-size:16px; margin-top:10px; padding-top:15px; border-top:1px solid lightgray">Learn more</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:20px">
                            <div class="card2" style="cursor:pointer">
                                <div class="parent">
                                    <div class="child">
                                        <img src="pilotpublic/images/6box/6.jpeg" style="height:100%; width:100%" class="obj-cover"  />
                                    </div>
                                </div>
                                <div class="col-lg-12 card3" style="background-color:#FFFFFF; padding:18px; border:1px solid rgb(245, 242, 242)">
                                    <div class="card3-style">
                                        <img src="pilotpublic/images/car02-01.png" height="100%"/>
                                    </div>
                                    <div style="font-size:24px; font-weight:500; color:#333333">Experienced  and Safe Drivers</div>
                                    <div class="in-six-box-sm-txt">
                                            We have Experienced and safe Drivers ,who can take to your Destination without any navigation Use
                                    </div>
                                    <div class="index-six-boxes">
                                        <div class="index-six-boxes-inner-one">
                                            <div class="in-box-inn-div">
                                                <div class="in-box-inn-div-one">
                                                    <img src="pilotpublic/images/icons/main/5.5.png" class="main-icon-img" />
                                                </div>
                                                <div class="in-box-inn-div-two">Ac  <br>Cars</div>
                                            </div>
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <div class="in-box-inn-div">
                                                <div class="in-box-inn-div-one">
                                                    <img src="pilotpublic/images/icons/main/3.3.png" class="main-icon-img" />
                                                </div>
                                                <div class="in-box-inn-div-two">Booking by <br> Calls</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="font-weight:600; color:#034f84; font-size:16px; margin-top:10px; padding-top:15px; border-top:1px solid lightgray">Book your ride</div>
                                </div>
                            </div>
                        </div>
                        
                    
                </div>
            </div>
        </div>
    </div>
    
    <style>
    .new-slick-class .slick-prev {
        margin-top: 70px;
        
    }
    .new-slick-class .slick-next {
        margin-top: 70px;
        
    }
    .new-slick-class2 .slick-next{
        margin-top: 200px;
        padding: 20px;
    }
    .new-slick-class2 .slick-prev{
        margin-top: 200px;
        padding: 20px;
    }
    </style>
    <div class="container-fluid" style="padding:0px; padding-top:60px; padding-bottom:0px; margin-bottom:50px; ">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12" style="padding-left:20px">
                        <div class="col-lg-12 meet-our-fleet">
                                Meet our Awesome Fleet
                                <br> 
                            <span style="font-weight: 100; color:rgba(0,0,0,0.92); font-size:18px;   opacity: 0.5; font-family:'AvenirNextLTPro-Regular'">
                                The widest variety of cars to choose from
                            </span>
                        </div>
                    </div>
                <div class="col-lg-12 sec-4" style="background-color:#FFFFFF; ">
                    <div class="container-fluid mt-5 slick2 " style="text-align:left; padding:0;">
                        <div class="row">
                            <div class="main" >
                                <div class="slider slider-nav h-260 new-slick-class" style="padding:60px 60px 0 60px;">
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="car-back " src="pilotpublic/images/car2-01.png" style="">
                                   <img  class="slick2-custom-navigation car-for" src="pilotpublic/images/car3-01.png" />
                                   </div>
    <p class="car-type">Mini</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                   <div class="hover-cont">
                                    <div class="img-hold">
                                       <img class="car-back " src="pilotpublic/images/icons/carvechile/1.png" style="">
                                   <img class="slick2-custom-navigation car-for" src="pilotpublic/images/icons/carvechile/11.png" />
                                   </div>
    <p class="car-type">Auto</p>
    </div>
    <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div>
                     </div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                 <div class="hover-cont">
                                                                  <div class="img-hold">
                                       <img class="car-back " src="pilotpublic/images/icons/carvechile/2.png" style="">
                                   <img class="slick2-custom-navigation car-for" src="pilotpublic/images/icons/carvechile/22.png" />
                                   </div>
    <p class="car-type">Bike</p>
    </div>
    <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div>
                     </div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                  <div class="img-hold">
                                    <img  class="car-back "  src="pilotpublic/images/icons/carvechile/3.png" style="">
                                   <img class="slick2-custom-navigation car-for" src="pilotpublic/images/icons/carvechile/3.png" />
                                                                  </div>
                                       
                                   
    <p class="car-type">Bus</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="car-back"  src="pilotpublic/images/icons/carvechile/4.png" style="">
                                   <img class="slick2-custom-navigation car-for" src="pilotpublic/images/icons/carvechile/4.png" />
                                   </div>
                                   
    <p class="car-type">Micro</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div>
    </div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img  class="car-back "  src="pilotpublic/images/icons/carvechile/5.png" style="">
                                   <img class="slick2-custom-navigation car-for" src="pilotpublic/images/icons/carvechile/55.png" />
                                   </div>
                                   
    <p class="car-type">Auto</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="car-back "  src="pilotpublic/images/icons/carvechile/6.png" style="">
                                   <img  class="slick2-custom-navigation car-for" src="pilotpublic/images/icons/carvechile/66.png" />
                                   </div>
    <p class="car-type">Auto</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="car-back "  src="pilotpublic/images/icons/carvechile/7.png" style="">
                                   <img class="slick2-custom-navigation car-for" src="pilotpublic/images/icons/carvechile/77.png" />
                                    </div>
    <p class="car-type">Prime Play</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img  class="car-back "  src="pilotpublic/images/icons/carvechile/8.png" style="">
                                   <img class="slick2-custom-navigation car-for" class="car-back slick2-custom-navigation" src="pilotpublic/images/icons/carvechile/88.png" />
                                    </div>
    <p class="car-type">Prime SUV</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="car-back " src="pilotpublic/images/icons/carvechile/9.png" style="">
                                   <img  class="slick2-custom-navigation car-for"  src="pilotpublic/images/icons/carvechile/99.png" />
                                    </div>
    <p class="car-type">Auto</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div>
                     </div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="car-back "   src="pilotpublic/images/car2-01.png" style="">
                                   <img class="slick2-custom-navigation car-for" src="pilotpublic/images/car3-01.png" />
                                   </div>
    <p class="car-type">Kaali Peeli</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="car-back "  src="pilotpublic/images/car2-01.png" style="">
                                   <img class="slick2-custom-navigation car-for"  src="pilotpublic/images/car3-01.png" />
                                   </div>
    <p class="car-type">Mini</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   
                                </div>
                                
                                
                                <div class="col-lg-12 new-slick-class2">
                                    <div class="col-lg-12 slider slider-for h-300 bg-light for-prev" style="padding-top:100px; padding-bottom:100px; 
                                        background: linear-gradient(to bottom, #e0e7eb 0%, #ffffff 100%);">
                                        
                                        <div class="main_nav"><img src="pilotpublic/images/s1.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 1</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/slick12.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 2</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/s1.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 3</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/slick12.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 4</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/s1.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 5</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/slick12.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 6</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/s1.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 7</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/slick12.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 8</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/s1.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 9</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/slick12.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 10</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/s1.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 11</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/slick12.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 12</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        
                                    </div>
                                </div>
                                    
                                    
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="pilotpublic/js/sina-nav.js"></script>
    <script type="text/javascript" src="pilotpublic/js/nav1.js"></script>
    <script type="text/javascript" src="pilotpublic/js/main.js"></script> 
    
    <script type="text/javascript" src="pilotpublic/slick/slick.js"></script>
    
    <script type="text/javascript"> 
    $(function(){
    $('.autoplay').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
     
      responsive: [
    
        {
    
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
            // centerMode:true,
          }
    
        }]
    });
    
     
    $('.slider-for').slick({
            slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        centerMode: true,
        fade: true,
        infinite: false,
        slidesPerRow:2,
        asNavFor: '.slider-nav',
       });
    
      $('.slider-nav').slick({
          slidesToShow: 10,
          slidesToScroll: 1,
          asNavFor: '.slider-for',
          focusOnSelect: true,
          infinite: false,
          arrows: true,
        
        responsive: [
          {
            breakpoint: 1400,
            settings: {
                  slidesToShow: 8,
                  slidesToScroll: 1,
              }
          },
          {
            breakpoint: 1024,
            settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
              }
          },
          {
            breakpoint: 800,
            settings: {
                  slidesToShow: 6,
                  slidesToScroll: 1,
              }
          },
          {
            breakpoint: 768,
            settings: {
                  slidesToShow: 5,
                  swipe: false,
              }
          },
          {
            breakpoint: 600,
            settings: {
                  slidesToShow: 4,
                  swipe: false,
              }
          },
          {
            breakpoint: 480,
            settings: {
                  slidesToShow: 1,
                  swipe: false,
              }
          },
          {
            breakpoint: 350,
            settings: {
                  slidesToShow: 1,
                  swipe: false,
              }
          },
    
        ]
        });
    
    
      $('.slick-cmnts').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
        responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        }
      ]
    
    });
    
    });
    
    
    
    </script>
    
    <div class="container-fluid obj-cover" style="padding:0px; background-image:url(pilotpublic/images/buildings-cars-city-169677.jpeg); ">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12" style=" padding-bottom:40px">
                    <div class="col-lg-12" style="text-align:center; padding-top:60px; padding-bottom:40px;">
                        <div class="palma">
                                TRAVEL IN STYLE ACROSS
                        </div>
                        <div class="palma-sub">
                                The United Arab Emirates
                        </div>
                    </div>
                    <div class="col-lg-12 " style="padding:10px">
                        <div class="col-lg-15 col-lg-3 col-sm-4 col-xs-12 palma-one" style="padding:0px; cursor:pointer" id="HoverChangeText1">
                            <div style="padding:10px">
                                <div class="col-lg-12" style="background-color:#FFFFFF; padding:0px">
                                    <div class="col-lg-12 box-head"  id="changeText1">ATTRACTIONS</div>
                                    <div class="col-lg-12" style="height:145px;">
                                        <img src="pilotpublic/images/5box/1.jpeg" style="height:100%; width:100%;"  />
                                    </div>
                                    <div class="col-lg-12 text-cont">
                                        <div style="font-size:16px; font-weight:600; margin-top:5px; color:#333333">
                                            Reveal Years of history
                                          </div>
                                        <div style="font-size:14px; ">Hidden Gem</div>
                                        <div style="font-size:14px; padding:15px; color:#999999; font-family: calibri">
                                                Our Energetic chauffeurs are ready to drive you ,for  Dubai City tour
                                                We can cover 12 top attractions , you can enjoy the view of the old town , then 
                                                Can ahead to Modern architect of the new city                                                
                                        </div>
                                        <div style="padding:5px; height:40px">
                                            <div style="display:none" id="hidelogo1">
                                                <img src="pilotpublic/images/slickimg.png" style="height:20px; width:20px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </div>
                        <div class="col-lg-15 col-lg-3 col-sm-4 col-xs-12 palma-two" style="padding:0px; cursor:pointer" id="HoverChangeText2">
                            <div style="padding:10px">
                                <div class="col-lg-12" style="background-color:#FFFFFF; padding:0px">
                                    <div class="col-lg-12 box-head" id="changeText2">LUXURY RIDE</div>
    
                                    <div class="col-lg-12" style="height:145px;">
                                        <img src="pilotpublic/images/5box/2.jpeg" style="height:100%; width:100%;"  />
                                    </div>
                                    <div class="col-lg-12 text-cont">
                                        <div style="font-size:16px; font-weight:600; margin-top:5px; color:#333333">Rolls Royce</div>
                                        <div style="font-size:14px; ">Ghost </div>
                                        <div style="font-size:14px; padding:15px; color:#999999; font-family: calibri">
                                                Book a luxury transfer  for your event or Meeting , and inspire your 
                                                Beloved one let they feel  how they are important . we can combine 
                                                for you luxury and comfort .                                                
                                        </div>
                                        <div style="height:40px; padding:5px">
                                            <div style="display:none" id="hidelogo2">
                                                <img src="pilotpublic/images/slickimg.png" style="height:20px; width:20px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </div>
                        <div class="col-lg-15 col-lg-3 col-sm-4 col-xs-12 palma-three" style="padding:0px; cursor:pointer" id="HoverChangeText3">
                            <div style="padding:10px">
                                <div class="col-lg-12" style="background-color:#FFFFFF; padding:0px">
                                    <div class="col-lg-12  box-head" id="changeText3">DISCOVER</div>
                                    <div class="col-lg-12" style="height:145px;">
                                        <img src="pilotpublic/images/5box/3.jpeg" style="height:100%; width:100%;" />
                                    </div>
                                    <div class="col-lg-12 text-cont">
                                        <div style="font-size:16px; font-weight:600; margin-top:5px; color:#333333">Do Not Miss</div>
                                        <div style="font-size:14px; ">Shopping  Opportunity</div>
                                        <div style="font-size:14px; padding:15px; color:#999999; font-family: calibri">
                                                Even if you have a short stay in Dubai , according to your 
                                                Time availability we can offer you our affordable shopping trips packages                                                
                                        </div>
                                        <div style="height:40px; padding:5px">
                                            <div style="display:none" id="hidelogo3">
                                                <img src="pilotpublic/images/slickimg.png" style="height:20px; width:20px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </div>
                        <div class="col-lg-15 col-lg-3 col-sm-4 col-xs-12 palma-four" style="padding:0px; cursor:pointer" id="HoverChangeText4">
                            <div style="padding:10px">
                                <div class="col-lg-12" style="background-color:#FFFFFF; padding:0px">
                                    <div class="col-lg-12  box-head" id="changeText4">CONVENIENCE</div>
                                    <div class="col-lg-12" style="height:145px;">
                                        <img src="pilotpublic/images/5box/4.jpeg" style="height:100%; width:100%;" />
                                    </div>
                                    <div class="col-lg-12 text-cont" >
                                        <div style="font-size:16px; font-weight:600; margin-top:5px; color:#333333">Experience of 20 Years</div>
                                        <div style="font-size:14px; ">Chauffeur Service</div>
                                        <div style="font-size:14px; padding:15px; color:#999999; font-family: calibri">
                                                Save your time during your stay in Dubai , 
                                                Get a Ride with our attentive and Friendly Drivers .
                                                We have offers according to your need                                                 
                                        </div>
                                        <div style="height:40px; padding:5px">
                                            <div style="display:none" id="hidelogo4">
                                                <img src="pilotpublic/images/slickimg.png" style="height:20px; width:20px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </div>
                        <div class="col-lg-15 col-lg-3 col-sm-4 col-xs-12 palma-five" style="padding:0px; cursor:pointer" id="HoverChangeText5">
                            <div style="padding:10px">
                                <div class="col-lg-12" style="background-color:#FFFFFF; padding:0px">
                                    <div class="col-lg-12  box-head" id="changeText5">EXPLORE</div>
                                    <div class="col-lg-12" style="height:145px;">
                                        <img src="pilotpublic/images/5box/5.jpeg" style="height:100%; width:100%;"  />
                                    </div>
                                    <div class="col-lg-12 text-cont" >
                                        <div style="font-size:16px; font-weight:600; margin-top:5px; color:#333333">Economical  to</div>
                                        <div style="font-size:14px; ">Luxury Fleet</div>
                                        <div style="font-size:14px; padding:15px; color:#999999; font-family: calibri">
                                                Take advantage of our hourly and daily and monthly offers , which 
                                                Is all inclusive of fuel , Driver and Car , No Hidden charges <br><br> <br>                                               
                                        </div>
                                        <div style="height:40px; padding:5px">
                                            <div style="display:none" id="hidelogo5">
                                                <img src="pilotpublic/images/slickimg.png" style="height:20px; width:20px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" style="margin-top:50px; margin-bottom:20px">
                        <div class="container">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-block btn-palma-de" style="border-radius:0px; padding:15px">Discover Palma De Mellorca</button>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $('#HoverChangeText1').hover(function () {
        $("#hidelogo1").toggle();
        $('#changeText1').fadeOut(200, function () {
            $('#changeText1').text('UNLOCK YOUR STAY').fadeIn();		
        });
    },
    function () {
        $("#hidelogo1").toggle();
        $('#changeText1').fadeOut(200, function () {
            $('#changeText1').text('ATTRACTIONS').fadeIn();
        });
    });
    
    $('#HoverChangeText2').hover(function () {
        $("#hidelogo2").toggle();
        $('#changeText2').fadeOut(200, function () {
            $('#changeText2').text('WORLD CLASS STANDARD').fadeIn();
        });
    },
    function () {
        $("#hidelogo2").toggle();
        $('#changeText2').fadeOut(200, function () {
            $('#changeText2').text('LUXURY RIDE').fadeIn();
        });
    });
    
    $('#HoverChangeText3').hover(function () {
        $("#hidelogo3").toggle();
        $('#changeText3').fadeOut(200, function () {
            $('#changeText3').text('SHOPPING TOURS').fadeIn();
        });
    },
    function () {
        $("#hidelogo3").toggle();
        $('#changeText3').fadeOut(200, function () {
            $('#changeText3').text('DISCOVER').fadeIn();
        });
    });
    $('#HoverChangeText4').hover(function () {
        $("#hidelogo4").toggle();
        $('#changeText4').fadeOut(200, function () {
            $('#changeText4').text('COMFORT  JOURNEY').fadeIn();
        });
    },
    function () {
        $("#hidelogo4").toggle();
        $('#changeText4').fadeOut(200, function () {
            $('#changeText4').text('CONVENIENCE').fadeIn();
        });
    });
    $('#HoverChangeText5').hover(function () {
        $("#hidelogo5").toggle();
        $('#changeText5').fadeOut(200, function () {
            $('#changeText5').text('HOT OFFERS').fadeIn();
        });
    },
    function () {
        $("#hidelogo5").toggle();
        $('#changeText5').fadeOut(200, function () {
            $('#changeText5').text('EXPLORE').fadeIn();
        });
    });
    </script>
    
    <div class="container-fluid" style="padding:0px; margin-top:60px; margin-bottom:10px;">
        <div class="row">
            <div class="col-lg-12" style="padding:0px">
                <div class="col-lg-12" style="padding-left:10px; padding-bottom:15px">
                    <div class="col-lg-12" style="margin-bottom:10px; border-left:4px solid #FF8040; font-size:30px; 
                    font-weight: 500; padding-left:10px; color:#034f84; font-family:'SigvarRegular'">
                        Find Us on Maps
                    </div>
                </div>
                <div class="col-lg-12 map-cont">
                    <img src="pilotpublic/images/map.jpeg" style="height:100%; width:100%" class="obj-cover" >
            <img class="car-move move" src="pilotpublic/images/car3-1.png">
            <img class="car-move move1" src="pilotpublic/images/car1.png">
           <!--  <img class="car-move move2" src="pilotpublic/images/car3.png"> -->
            <img class="car-move move3" src="pilotpublic/images/car2.png">
          <!--   <img class="car-move move4" src="pilotpublic/images/car3-1.png">   --> 
                </div>
            </div>
        </div>
    </div>
    
    <section>
      <div class="container-fluid" style="box-shadow: 0 -7px 8px rgba(0, 0, 0, 0.25); padding-top:25px; padding-bottom:10px; margin-top:20px">
        <div class="row">
                <div class="col-lg-12" style="padding-left:10px; padding-bottom:15px">
                        <div class="col-lg-12" style="border-left:4px solid #FF8040; font-size:30px; font-weight: 500; 
                        padding-left:10px; color:#034f84; font-family:'SigvarRegular'">
                            Captan Ratings
                        </div>
                    </div>
          <div class="col-md-3">
            <div class="rate-left">
              <h3 class="text-center">Great</h3>
              <div class="star-cont">
                <span class="starr"><i class="glyphicon glyphicon-star star-one" aria-hidden="true"></i></span>
                <span class="starr"><i class="glyphicon glyphicon-star star-one" aria-hidden="true"></i></span>
                <span class="starr"><i class="glyphicon glyphicon-star star-one" aria-hidden="true"></i></span>
                <span class="starr"><i class="glyphicon glyphicon-star star-one" aria-hidden="true"></i></span>
                <span class="starr"><i class="glyphicon glyphicon-star star-one" aria-hidden="true"></i></span>
              </div>
              <a href="#" class="based">Based on <span class="text-underline">34,247</span></a>
            </div>
          </div>
          <div class="col-md-9 slick-cmnts" style="padding: 0 5% !important">
          <div class="cmnts-cont"><div class="cmnts">
              <div class="stars-cont">
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
              </div>
              <h4 style="color: #333333">Nice Car One</h4>
              <p> Nice car with plenty of space, driver was early, he took quickest root</p>
              <p class="name">SavyNYC</p>
            </div></div>
            <div class="cmnts-cont"><div class="cmnts">
              <div class="stars-cont">
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
              </div>
              <h4 style="color: #333333">Nice Car Two</h4>
              <p> Nice car with plenty of space, driver was early, he took quickest root</p>
              <p class="name">SavyNYC</p>
            </div></div>
            <div class="cmnts-cont"><div class="cmnts">
              <div class="stars-cont">
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
              </div>
              <h4 style="color: #333333">Nice Car Three</h4>
              <p> Nice car with plenty of space, driver was early, he took quickest root</p>
              <p class="name">SavyNYC</p>
            </div></div>
            
            <div class="cmnts-cont"><div class="cmnts">
              <div class="stars-cont">
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
              </div>
              <h4 style="color: #333333">Nice Car Four</h4>
              <p> Nice car with plenty of space, driver was early, he took quickest root</p>
              <p class="name">SavyNYC</p>
            </div></div>
          
        </div>
      </div>
    </section>
    
    
    
<script>
    $(".inputfocus").focus(function(){
        $(this).parent().removeClass("cinner-border-rem");
        $(this).parent().addClass("cinner-border-add");

        }).blur(function(){
            $(this).parent().removeClass("cinner-border-add");
            $(this).parent().addClass("cinner-border-rem");
    });
</script>
    
    
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="pilotpublic/js/mdtimepicker.js"></script>
    <script>
      $(document).ready(function(){
        $('#time').mdtimepicker(); //Initializes the time picker
         $('#time2').mdtimepicker();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        
        // Variables
        var clickedTab = $(".tabs > .active");
        var tabWrapper = $(".tab__content");
        var activeTab = tabWrapper.find(".active");
        var activeTabHeight = activeTab.outerHeight();
        
        // Show tab on page load
        activeTab.show();
        
        // Set height of wrapper on page load
        tabWrapper.height(activeTabHeight);
        
        $(".tabs > li").on("click", function() {
            
            // Remove class from active tab
            $(".tabs > li").removeClass("active");
            
            // Add class active to clicked tab
            $(this).addClass("active");
            
            // Update clickedTab variable
            clickedTab = $(".tabs .active");
            
            // fade out active tab
            activeTab.fadeOut(250, function() {
                
                // Remove active class all tabs
                $(".tab__content > li").removeClass("active");
                
                // Get index of clicked tab
                var clickedTabIndex = clickedTab.index();
    
                // Add class active to corresponding tab
                $(".tab__content > li").eq(clickedTabIndex).addClass("active");
                
                // update new active tab
                activeTab = $(".tab__content > .active");
                
                // Update variable
                activeTabHeight = activeTab.outerHeight();
                
                // Animate height of wrapper to new tab height
                tabWrapper.stop().delay(50).animate({
                    height: activeTabHeight
                }, 500, function() {
                    
                    // Fade in active tab
                    activeTab.delay(50).fadeIn(250);
                    
                });
            });
        });
    });
    </script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript"  src="pilotpublic/js/sina-nav.js"></script>
  <script type="text/javascript"  src="pilotpublic/js/main.js"></script> 
  <script type="text/javascript"  src="pilotpublic/slick/slick.js"></script>


<script type="text/javascript">
  
$(function(){
$('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
 
  responsive: [

    {

      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode:true,
      }

    }]
});


 // $("#cardhead, #cardhead2, #cardhead3").mouseover(function () {
 //       $('#cardhead, #cardhead2, #cardhead3').text("This is the new html");
 //      $('#cardiconshow, #cardiconshow2, #cardiconshow3').show('slow');
 //    });
 //     $("#cardhead, #cardhead2, #cardhead3").mouseleave(function () {
 //      $('#cardhead, #cardhead2, #cardhead3').text("Lorem Ipsum");
 //      $('#cardiconshow, #cardiconshow2, #cardiconshow3').hide('slow');

 //    });
 // $('.cardhead').on({
 //    mouseover: function(){
 //      $('.cardhead').text("This is the new html")
 //    }, 
 //    mouseleave: function(){
 //      $(this).css("background-color", "lightblue");
 //    }, 
 //    click: function(){
 //      $(this).css("background-color", "yellow");
 //    } 
 //  });

  

// var perv_for = $('.prev-btn');
//   var next_for = $('.next-btn');
//   var prev_nav = $('.prev-btn-nav');
//   var next_nav = $('.next-btn-nav');
//   var dot_indicator = $('.dot-indicator');
$('.slider-for').slick({
        slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    centerMode: true,
    fade: true,
    infinite: false,
    slidesPerRow:2,
    asNavFor: '.slider-nav',
    //  prevArrow: '<div class="slick-prev"><img width="20" src="images/play.png"></div>',
    // nextArrow: '<div class="slick-next"><img width="20" src="images/play.png"></div>',
   });
  $('.slider-nav').slick({
      slidesToShow: 10,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      focusOnSelect: true,
      infinite: false,
      arrows: true,
    
    responsive: [
      {
        breakpoint: 1400,
        settings: {
              slidesToShow: 8,
              slidesToScroll: 1,
          }
      },
      {
        breakpoint: 1024,
        settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
          }
      },
      {
        breakpoint: 800,
        settings: {
              slidesToShow: 6,
              slidesToScroll: 1,
          }
      },
      {
        breakpoint: 768,
        settings: {
              slidesToShow: 5,
              swipe: false,
          }
      },
      {
        breakpoint: 600,
        settings: {
              slidesToShow: 4,
              swipe: false,
          }
      },
      {
        breakpoint: 480,
        settings: {
              slidesToShow: 3,
              swipe: false,
          }
      },
      {
        breakpoint: 350,
        settings: {
              slidesToShow: 2,
              swipe: false,
          }
      },

    ]
    });


 // $('.slider-for').slick({
 //   slidesToShow: 1,
 //   slidesToScroll: 1,
 //   arrows: false,
 //   fade: true,
 //   asNavFor: '.slider-nav',
 //   mobileFirst: true,


 // });
 // $('.slider-nav').slick({
 //   slidesToShow: 7,
 //   slidesToScroll: 1,
 //   asNavFor: '.slider-for',
 //   // dots: true,
 //   focusOnSelect: true,
 //      responsive: [
 //      {
 //          breakpoint: 768,
 //          settings: {
 //              slidesPerRow: 2,
 //              rows: 1,
 //              slidesToScroll: 1,
 //              slidesToShow: 1,
 //              dots: false
 //          }
 //      }
 //  ]
 // });

});

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqqhqN5q545cx57GD5ht6JVidUQuuGd34&sensor=false&v=3&libraries=geometry,places&callback=initAutocomplete" async defer></script>


<script>
function initializeAutocomplete(){
	var input = document.getElementById('locality');
	var options = {
    //types: ['(regions)'],
    componentRestrictions: {country: "AE"}
	};

	var autocomplete = new google.maps.places.Autocomplete(input, options);

	google.maps.event.addListener(autocomplete, 'place_changed', function() {
	var place = autocomplete.getPlace();
	var lat = place.geometry.location.lat();
	var lng = place.geometry.location.lng();
	var placeId = place.place_id;
	// to set city name, using the locality param
	var componentForm = {
		locality: 'short_name',
	};
	  
	  for (var i = 0; i < place.address_components.length; i++) {
		var addressType = place.address_components[i].types[0];
		if (componentForm[addressType]) {
		  var val = place.address_components[i][componentForm[addressType]];
		  document.getElementById("city").value = val;
		}
	  }
	  
		document.getElementById("latitude").value = lat;
		document.getElementById("longitude").value = lng;
		
		var latitude2 = document.getElementById("latitudeone").value;
		console.log(latitude2);
		var longitude2 = document.getElementById("longitudeone").value;
		console.log(longitude2);
		var latitude1 = lat;
		console.log(latitude1);
		var longitude1 = lng;
		console.log(longitude1);

		calculateTimeAndDistance(latitude1,longitude1,latitude2,longitude2);
		
	});

}
  
function initializeAutocompleteLocOne(){
    var input = document.getElementById('current');
    var options = {
       //types: ['(regions)'],
       componentRestrictions: {country: "AE"}
    };
    //var options = {}

    var autocomplete = new google.maps.places.Autocomplete(input, options);

    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var place = autocomplete.getPlace();
      var lat = place.geometry.location.lat();
      var lng = place.geometry.location.lng();
      var placeId = place.place_id;
      // to set city name, using the locality param
      var componentForm = {
        locality: 'short_name',
      };
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById("cityone").value = val;
        }
      }
      document.getElementById("latitudeone").value = lat;
      document.getElementById("longitudeone").value = lng;
     
    });
 }
  

var x = document.getElementById("demo");

$('#current_loc_btn').click(function(e){

  e.preventDefault();
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
	
  }
});

function showPosition(position) {
  document.getElementById("current").value = position.coords.latitude + ',' +  position.coords.longitude;
  initMap();
	  
}
  
//set the address in field


function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 8,
	  center: {lat: 40.731, lng: -73.997}
	});
	var geocoder = new google.maps.Geocoder;
	var infowindow = new google.maps.InfoWindow;

	
	geocodeLatLng(geocoder, map, infowindow);
	
  }

function geocodeLatLng(geocoder, map, infowindow) {
	var input = document.getElementById('current').value;
	var latlngStr = input.split(',', 2);
	var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
	geocoder.geocode({'location': latlng}, function(results, status) {
	  if (status === 'OK') {
		if (results[0]) {
		  document.getElementById("current").value =  results[0].formatted_address ;
		  document.getElementById("latitudeone").value = latlngStr[0];
		  document.getElementById("longitudeone").value = latlngStr[1];
		} else {
		  window.alert('No results found');
		}
	  } else {
		window.alert('Geocoder failed due to: ' + status);
	  }
	});
  }

  
  function calculateTimeAndDistance(latitude1,longitude1,latitude2,longitude2){
			var bounds = new google.maps.LatLngBounds;
        var markersArray = [];

        var origin1 = new google.maps.LatLng(latitude1, longitude1);
        
        var destinationA = new google.maps.LatLng(latitude2, longitude2);

        var destinationIcon = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=D|FF0000|000000';
        var originIcon = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=O|FFFF00|000000';
        
        var geocoder = new google.maps.Geocoder;

        var service = new google.maps.DistanceMatrixService;
        service.getDistanceMatrix({
          origins: [origin1],
          destinations: [destinationA],
          travelMode: 'DRIVING',
          unitSystem: google.maps.UnitSystem.METRIC,
          avoidHighways: false,
          avoidTolls: false
        }, function(response, status) {
          if (status !== 'OK') {
            alert('Error was: ' + status);
          } else {
            var originList = response.originAddresses;
            var destinationList = response.destinationAddresses;
            var outputDiv = document.getElementById('output');
            outputDiv.innerHTML = '';
            

            var showGeocodedAddressOnMap = function(asDestination) {
              var icon = asDestination ? destinationIcon : originIcon;
              return function(results, status) {
                if (status === 'OK') {
                  map.fitBounds(bounds.extend(results[0].geometry.location));
                  markersArray.push(new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    icon: icon
                  }));
                } else {
                  alert('Geocode was not successful due to: ' + status);
                }
              };
            };

            for (var i = 0; i < originList.length; i++) {
              var results = response.rows[i].elements;
              geocoder.geocode({'address': originList[i]},
                  showGeocodedAddressOnMap(false));
              for (var j = 0; j < results.length; j++) {
                
                outputDiv.innerHTML += 'Distance : ' + results[j].distance.text + '. Time ' +
                    results[j].duration.text + '<br>';
              }
            }
          }
        });
  }


  
  
  //now and letter change function
$("#nowandlatter").change(function(){
	if($('#nowandlatter').val() == 'later'){
	$("#later").show('slow');
	}
	else{
		$("#later").hide('slow');
	}
});  



$(function() {
  $(document).ready(function () {
	var todaysDate = new Date();
	var year = todaysDate.getFullYear();
	var month = ("0" + (todaysDate.getMonth() + 1)).slice(-2);
	var day = ("0" + todaysDate.getDate()).slice(-2);
	var maxDate = (year +"-"+ month +"-"+ day);
	$('#mindate').attr('min',maxDate);
  });
});

$(".hidden-md").hover(function(){
  $("#ruby-active").removeClass("ruby-active-menu-item");
  });
		


</script>





<script src="pilotpublic/js/map2.js"></script>
@endsection



