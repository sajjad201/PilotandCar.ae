
@extends('layouts.app-two')

@section('page_title')
Airport Transfer
@endsection

@section('tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection

@section('content')



<section>
  <div style="position: relative; color:white">
    <img src="pilotpublic/images/airport/g6.webp" class="limo-ban-img">
    <div style="position: absolute; bottom:3%; left:5%; color:white; font-size:60px; font-weight:900" class="frame-5">
    <span>AIRPORT TRANSFER SERVICES<br><span style="font-size:40px;"> Travel With Pilot And Car </span></span></div>
  </div>
</section>
<section class="page-nav-links">
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-nav-links-col">
          <div class="page-nav-links-col-internal">
            <a href="{{url('/')}}">Home <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
          </div>
          <div class="page-nav-links-col-internal">
            <a href="{{url('/our-services')}}">Our Serives <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
          </div>
          <div class="page-nav-links-col-internal-current">
            <a href="{{url('#')}}">Limousine Service Dubai <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

<br><br><br>
<section class="st-em">
  <div class="container st-em-con">
    <div class="row">
      <div class="col-md-6 st-em-col" style="padding:0px 5px">
        <div class="st-em-col-one">
          <div class="st-em-col-one-text">
            <div class="st-em-col-small-text" style="padding:0px 0px;">PILOT AND CAR</div>
            <div style="margin-bottom:50px"> Destinations for<br>Tour<br></div>
          </div>
          <img src="pilotpublic/images/airport/b3.jpg" class="object-image" style="width:100%; margin-top: -1rem; height:325px; ">
        </div>
      </div>
      <div class="col-md-6 st-em-col">
        <div class="row">
          <div class="col-md-6" style="padding:0px 5px">
            <div class="st-em-col-two">
              <div class="st-em-col-two-text">
                <div class="st-em-col-small-text">A Journey of Distinction</div>
              </div>
              <img src="pilotpublic/images/airport/g1.jpg" class="object-image" style="width:100%; height:200px">
            </div>
          </div>
          <div class="col-md-6" style="padding:0px 5px">
            <div class="st-em-col-two">
              <div class="st-em-col-two-text">
                <div class="st-em-col-small-text">Check in Your Bags from Home</div>
              </div>
              <img src="pilotpublic/images/airport/g2.jpg" class="object-image" style="width:100%; height:200px">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="padding:10px 5px">
              <div class="st-em-col-two">
                <div class="st-em-col-two-text">
                  <div class="st-em-col-small-text">Causine That Takes you places</div>
                </div>
                <img src="pilotpublic/images/airport/g7.jpg" class="object-image" style="width:100%; height:200px">
              </div>
            </div>
            <div class="col-md-6" style="padding:10px 5px">
              <div class="st-em-col-two">
                <div class="st-em-col-two-text">
                  <div class="st-em-col-small-text">Your Window into new world</div>
                </div>
                <img src="pilotpublic/images/airport/g8.webp" class="object-image" style="width:100%; height:200px">
            </div>
          </div>  

        </div>
        
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container-fluid">
    <div class="st-ten-inf">
      <div class="row">
        <div class="col-md-7">
          <img src="pilotpublic/images/airport/g3.jpg" class="object-image" style="height:500px; width:100%; border-radius:1px">
        </div>
        <div class="col-md-5 st-ten-inf-col5">
            <h1><strong> Why Choose Pilot and Cars   </strong></h1>
            <h4> Limousine Automobile services </h4>
            Travelling can fuel your wanderlust but at the same time, it demands strong nerves to deal with unavoidable hassles, especially, 
            when you have to navigate with the complexities of a foreign transportation system.  
            This situation can get worse at the Dubai International Airport, keeping in mind the fact that, it is one of the world’s biggest and
            busiest airports, by the number of international passenger traffic handled each day. The airport is located at Al Garhoud district, 
            almost 2.5 miles at the outskirts from the main city which makes it hard for a foreigner to navigate their way from the airport to
            their final destination.
        </div>
      </div>
      </div>
  </div>
</section>



<section class="wrapper os-2-wrap" style="color:#313131; background-color:#f2f2f2; padding:60px 0px 60px 0px">
  <div class="container">
    <div class="col-md-12"><h1 style="color:#034F84"><strong>BOOK RIDES NOW<br><br></strong></h1></div>
    
      <div class="col-md-4" style="margin-bottom: 30px;">
        <div class="os-2-cont">
          <div class="os-2-img-cont rel">
            <img src="pilotpublic/images/airport/g4.jpg" style="height:200px; width:100%" class="object-image">
            <h3 class="abs-head">Hong Kong SAR </h3>
            <span class="fa fa-star abs-icon"></span>
          </div>
          <div class="os2-txt-cont">
            <div class="overlay1">
              <span class="overlay1-txt">
                <div class="overlay1-txt-sm">Hourly Ride</div> 
                <?php $link="pilotpublic|images|airport|g4.jpg" ?>  
                <a href="{{url('product-form/hourly/340/' .$link)}}" class="a-link-ok"><span class="overlay1-txt-lg">BOOK RIDE</span></a>
              </span>
              <i class="fas fa-car overlay1-txt-icon" style="margin-left:25px"></i>
            </div>
            <div>HOURLY RIDE</div>
            <div class="os2-h3">AED 950 <span class="fa fa-angle-right fl-right fs-20"></span></div>
          </div>
          <div class="os2-txt-cont" style="border-top:5px solid #f9f9f9">
              <div class="overlay1">
                <span class="overlay1-txt">
                  <div class="overlay1-txt-sm">Per Day</div> 
                  <?php $link="pilotpublic|images|airport|g4.jpg" ?>  
                  <a href="{{url('product-form/hourly/340/' .$link)}}" class="a-link-ok"><span class="overlay1-txt-lg">BOOK RIDE</span></a>
                </span>
                <i class="fas fa-shuttle-van overlay1-txt-icon" style="margin-left:25px"></i>
              </div>
              <div>PER DAY</div>
              <div class="os2-h3">AED 950 <span class="fa fa-angle-right fl-right fs-20"></span></div>
            </div>
        </div>
      </div>
      <div class="col-md-4" style="margin-bottom: 30px;">
        <div class="os-2-cont">
          <div class="os-2-img-cont rel">
            <img src="pilotpublic/images/airport/g3.jpg" style="height:200px; width:100%" class="object-image">
            <h3 class="abs-head">Hong Kong SAR </h3>
            <span class="fa fa-star abs-icon"></span>
          </div>
          <div class="os2-txt-cont">
            <div class="overlay1">
              <span class="overlay1-txt">
                <div class="overlay1-txt-sm">Hourly Ride</div> 
                <?php $link="pilotpublic|images|airport|g3.jpg" ?>  
                <a href="{{url('product-form/hourly/340/' .$link)}}" class="a-link-ok"><span class="overlay1-txt-lg">BOOK RIDE</span></a>
              </span>
              <i class="fas fa-car overlay1-txt-icon" style="margin-left:25px"></i>
            </div>
            <div>HOURLY RIDE</div>
            <div class="os2-h3">AED 950 <span class="fa fa-angle-right fl-right fs-20"></span></div>
          </div>
          <div class="os2-txt-cont" style="border-top:5px solid #f9f9f9">
              <div class="overlay1">
                <span class="overlay1-txt">
                  <div class="overlay1-txt-sm">Per Day</div> 
                  <?php $link="pilotpublic|images|airport|g3.jpg" ?>  
                  <a href="{{url('product-form/hourly/340/' .$link)}}" class="a-link-ok"><span class="overlay1-txt-lg">BOOK RIDE</span></a>
                </span>
                <i class="fas fa-shuttle-van overlay1-txt-icon" style="margin-left:25px"></i>
              </div>
              <div>PER DAY</div>
              <div class="os2-h3">AED 950 <span class="fa fa-angle-right fl-right fs-20"></span></div>
            </div>
        </div>
      </div>
      <div class="col-md-4" style="margin-bottom: 30px;">
        <div class="os-2-cont">
          <div class="os-2-img-cont rel">
            <img src="pilotpublic/images/airport/g7.jpg" style="height:200px; width:100%" class="object-image">
            <h3 class="abs-head">Hong Kong SAR </h3>
            <span class="fa fa-star abs-icon"></span>
          </div>
          <div class="os2-txt-cont">
            <div class="overlay1">
              <span class="overlay1-txt">
                <div class="overlay1-txt-sm">Hourly Ride</div> 
                <?php $link="pilotpublic|images|airport|g7.jpg" ?>  
                <a href="{{url('product-form/hourly/340/' .$link)}}" class="a-link-ok"><span class="overlay1-txt-lg">BOOK RIDE</span></a>
              </span>
              <i class="fas fa-car overlay1-txt-icon" style="margin-left:25px"></i>
            </div>
            <div>HOURLY RIDE</div>
            <div class="os2-h3">AED 950 <span class="fa fa-angle-right fl-right fs-20"></span></div>
          </div>
          <div class="os2-txt-cont" style="border-top:5px solid #f9f9f9">
              <div class="overlay1">
                <span class="overlay1-txt">
                  <div class="overlay1-txt-sm">Per Day</div> 
                  <?php $link="pilotpublic|images|airport|g7.jpg" ?>  
                  <a href="{{url('product-form/hourly/340/' .$link)}}" class="a-link-ok"><span class="overlay1-txt-lg">BOOK RIDE</span></a>
                </span>
                <i class="fas fa-shuttle-van overlay1-txt-icon" style="margin-left:25px"></i>
              </div>
              <div>PER DAY</div>
              <div class="os2-h3">AED 950 <span class="fa fa-angle-right fl-right fs-20"></span></div>
            </div>
        </div>
      </div>
      
    
  </div>
</section>



{{-- Text two --}}
<style>
.t2{
    background-color: white;
    color: #182041;
    padding: 0px 0px 0px 0px;
}
.t2-head-1{
    padding: 50px 20px;
    background-color: lightblue;
    font-size: 40px;
    text-align: center;
}

.t2-head-2{
    font-size: 26px;
}
.t2-sec1{
   padding: 45px;
   margin-top: 30px;
}
.t2-sec1-1{
    padding-left: 9%;
}
.t2-sec1-2{
    padding-left: 100px;
}
.t2-sec1-1-text1{
    font-size: 36px;
    font-weight: 700;
}

.t2-sec1-1-text2{
    margin-top: 30px;
    font-size: 20px;
    font-weight: 100;
    font-family: calibri;
}
</style>

<section class="t2">
        <div class="container-fluid">
            <div class="col-md-12 t2-head-1">
                <strong> 
                    You might be speculative why to lease our vehicles for traveling?
                </strong>
            </div>
            <div class="col-md-12 t2-sec1">
                <div class="col-md-6 t2-sec1-1">
                    <div class="t2-sec1-1-text1" style="padding-top: 0px;;">
                        We will Handle Your Airport Hassles 
                    </div>
                    <div class="t2-sec1-1-text2">
                      Everyone traveling abroad has faced the unnecessary pain of long waits, searching for good transports and negotiating 
                      on fares from the airport till reaching their destinations. 
                      Whether you have become a pro at handling airport hassles or not you would gladly wish to avoid all these troubles and reach your 
                      destination smoothly. 
                    </div>
                </div>
                <div class="col-md-6 t2-sec1-2">
                    <img src="https://images.ctfassets.net/q8mvene1wzq4/1fSCETF4C1urRbZueu2Lnw/c69983b5da846b3bedf48c81dad0b7aa/debit.gif">
                </div>
            </div>
            <div class="col-md-12" style="margin:80px 0px 80px 0px">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/4LN0lFZvT11860VbQkFAwd/60e81ce87ff8595d17e7c5852fc81bb2/debit_1_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                            Pilot and Cars (site name) will arrange your Dubai airport transport and save you time once you land.  
                            You don’t need to stand at taxi stands or in long queues to find your transport.                  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/2jlBRtlrtnYXgNHoyNW14B/0c411aab3c372ecb683f8b9c751a8eee/debit_2_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                            Instead our driver and staff member will be present at the airport to pick you up ahead of your 
                            arrival time and drop you at your hotel door without any fuss.                
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/1O67IjJ0C5uoPnqJehHCLK/b143d0c2d9f8200928147fd2343f6401/debit_3_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                            Our Dubai Airport Transfer services include a one-hour wait stance because we understand 
                            all the pros and cons of traveling very well.            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 t2-sec1">
                <div class="col-md-6 t2-sec1-1">
                    <div class="t2-sec1-1-text1" style="padding-top: 0px;;">
                        Our Dubai Airport Transfer services Include:
                    </div>
                    <div class="t2-sec1-1-text2">
                        <b><h4>- One-hour wait</h4></b>
                        <b><h4>- Paging of Passengers</h4></b>
                        <b><h4>- Call our help desk 24/7</h4></b>
                        <b><h4>- Fixed & guaranteed rates until your Destination</h4></b>
                        <b><h4>- Travel in Economical or Luxury VIP Cars</h4></b>
                        <b><h4>- Exclusive family cars with a lot of luggage space</h4></b>
                   
                    </div>
                </div>
                <div class="col-md-6 t2-sec1-2">
                    <img src="https://images.ctfassets.net/q8mvene1wzq4/3S21XHVz41j8cJVdkxdBDx/ca7ec94792d292d3845b5e1d721614e6/drivercenter.gif">
                </div>
            </div>
            <div class="col-md-12" style="margin:80px 0px 80px 0px">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/3XwA6n02C3MaQWRc8AWfEw/0bcd2f7a93662a792a1d63d38346e6d7/drivercenter_1_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                          Our Dubai Airport Transfer services include a one-hour wait stance because we 
                          understand all the pros and cons of traveling very well.                  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/2vYGqAsRPLA7KXi6mK1u8p/67459367e2d275069190669f5eeee912/drivercenter_2_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                            Your flight can get delayed without prior notice or sometimes the baggage may arrive late.                   
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/59cz30Jvmhcj6bhnaFSbe/9f5e503d915ff216da4e443945f1d94f/drivercenter_3_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                            To adjust well with these mishaps our driver will be waiting for you up to one hour after your arrival time.                
                        </div>
                    </div>
                </div>
            </div>
            
    
        </div>
    </section>
{{-- End-text-two --}}

  <section class="wrapper os4-wrapper" style="padding:50px 0px 70px 0px ">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="os4-wrap">
              <div class="os4-img-cnt">
                <img src="pilotpublic/images/airport/g10.jpg" style="height:300px" class="object-image">
              </div>
              <div class="os4-txt-cnt">
                <h6 class="text-center">PILOT AND CAR</h6>
                <h1 style="color:#333333">Wedding Limo</h1>
                <h5 class="">Discover for yourself</h5>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="os4-wrap">
              <div class="os4-img-cnt">
                <img src="pilotpublic/images/airport/g9.jpg" style="height:300px" class="object-image">
              </div>
              <div class="os4-txt-cnt">
                <h6 class="text-center">PILOT AND CAR</h6>
                <h1 style="color:#333333">Dinner Drop off </h1>
                <h5 class="">Discover for yourself</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  <section style="margin:50px 0px 100px 0px">
    <div class="container">
        <div class="row em-box-all-row">
            Find out other services
        </div>
        <div class="em-box-flex-link">

            <a href="rent-a-car-with-driver" target="_blank">
                <i class="fab fa-angular" style="font-size:40px;"></i><br>
                Rent A Car
                <div class="em-box-flex-link-bor">
                    <div></div>
                </div>
            </a>
            <a href="chauffeur-service" target="_blank">
                <i class="fab fa-angular" style="font-size:40px;"></i><br>
                Chauffeur Service
                <div class="em-box-flex-link-bor">
                    <div></div>
                </div>
            </a>
            <a href="bus-rental-dubai" target="_blank">
                <i class="fab fa-angular" style="font-size:40px;"></i><br>
                Luxury Buses
                <div class="em-box-flex-link-bor">
                    <div></div>
                </div>
            </a>
            <a href="dubai-city-tour" target="_blank">
                <i class="fab fa-angular" style="font-size:40px;"></i><br>
                Dubai City Tours
                <div class="em-box-flex-link-bor">
                    <div></div>
                </div>
            </a>
            <a href="abu-dhabi-city-tour" target="_blank">
                <i class="fab fa-angular" style="font-size:40px;"></i><br>
                Abu Dhabi Tour
                <div class="em-box-flex-link-bor">
                    <div></div>
                </div>
            </a>
            <a href="airport-transfer" target="_blank">
                <i class="fab fa-angular" style="font-size:40px;"></i><br>
                Airport Transfer
                <div class="em-box-flex-link-bor">
                    <div></div>
                </div>
            </a>
            <a href="vans" target="_blank">
                <i class="fab fa-angular" style="font-size:40px;"></i><br>
                Luxury Vans
                <div class="em-box-flex-link-bor">
                    <div></div>
                </div>
            </a>

        </div>
    </div>
</section>

<style>
.t3-sec{
    margin: 60px 0px 60px 0px;
}    
.t3-div-1{
    padding: 30px;
    border: 1px solid lightgray;
    border-radius: 4px;
    color:#333333;
    margin: 10px 0px;
}
.t3-div-1-icon-width{
    width: 50px;
}
.t3-div-1-text-head{
    font-size: 30px;
    margin-top: -15px;
}
.t3-div-1-text-body{
    font-size: 16px;
    font-family: calibri;
}

.t3-center-img{
    margin-top: 20px;
    box-shadow: 0px 0px 4px gray;
    color: #333333;
}
.t3-center-img:hover{
    cursor: pointer;
    box-shadow: 0px 0px 10px gray;
}
.t3-center-img-txt{
    padding: 20px 10px 20px 10px;
}
.t3-center-img-txt1{
    font-weight: 700;
    font-size: 12px;
}
.t3-center-img-txt2{
    margin-top: 10px;
    font-weight: 600;
    font-size: 24px;
}
.t3-center-img-txt3{
    margin-top: 10px;
    color: gray;
    font-family: calibri;
    font-size: 14px;
}
</style>

<section class="t3-sec">
    <div class="container">
        <div class="col-md-12">

            <div class="col-md-12 t3-div-1">
                <div class="col-md-12 t3-div-1-text">
                    <div class="t3-div-1-text-head">
                        <div style="font-size:10px; letter-spacing:2px; font-weight:800">
                            PILOT AND CAR
                        </div>
                        Paging of Passengers
                        <div style="border:2px solid blue; width:5%; margin-top:10px"></div>
                        <br>
                    </div>
                    <div class="t3-div-1-text-body">
                        Looking for your designated Taxi from Dubai airport can become very irritating. 
                        Our responsible staff member will be present at the airport holding a paging board at hand with your name on it to avoid unnecessary confusion. 
                        Our staff members have good knowledge about the localities, as a result, we can assure you a safe and comfortable airport transfer Dubai to hotel. 
                    </div>
                </div>
            </div>
            
            

            <div class="col-md-12 t3-div-1">
                <div class="col-md-1 t3-div-1-icon-width">
                    <img src="https://cdn.ek.aero//ae/english/images/Travel_icon_tcm277-1806967.png" style="height:20px">
                </div>
                <div class="col-md-11 t3-div-1-text">
                    <div class="t3-div-1-text-head">
                        Call our help desk 24/7  	
                    </div>
                    <div class="t3-div-1-text-body">
                        Our driver will be waiting for you at Dubai airport pick-up even before your arrival. In case you cannot 
                        find the driver at Dubai airport transfers terminals, you can call our help desk anytime. We will get your 
                        reference number and contact the driver to reach out to your location at the airport. 
                    </div>
                </div>
            </div>
            <div class="col-md-12 t3-div-1">
                <div class="col-md-1 t3-div-1-icon-width">
                    <img src="https://cdn.ek.aero//ae/english/images/Travel_icon_tcm277-1806967.png" style="height:20px">
                </div>
                <div class="col-md-11 t3-div-1-text">
                    <div class="t3-div-1-text-head">
                        Fixed & guaranteed rates until your Destination 
                    </div>
                    <div class="t3-div-1-text-body">
                        Finding a Taxi in Dubai airport and negotiating with drivers on the fares can become really tiring after a long flight. 
                        Traveling with Pilot and Cars is very convenient for our passengers because we offer you fixed and guaranteed fares 
                        with no changes made until your destination. 
                        You can enjoy a cozy and warm Dubai Airport Transfer with us without worrying about hidden fees or uninformed charges.
                        Our Dubai airport taxi booking procedure is absolutely hassled free, fast and easy as anyone can make their reservations
                        ahead of their travel online.   
                    </div>
                </div>
            </div>
            <div class="col-md-12 t3-div-1">
                <div class="col-md-1 t3-div-1-icon-width">
                    <img src="https://cdn.ek.aero//ae/english/images/Travel_icon_tcm277-1806967.png" style="height:20px">
                </div>
                <div class="col-md-11 t3-div-1-text">
                    <div class="t3-div-1-text-head">
                        Travel in Economical or Luxury VIP Cars 
                    </div>
                    <div class="t3-div-1-text-body">
                        Our Dubai Airport Transfer bring in economical to luxury VIP cars for the passengers and offer different price ranges for the
                        kind of transport they choose.  
                        You may choose to travel by airport shuttle Dubai and share your ride with other passengers at an affordable price. 
                        If you need to perk up before an important meeting on your way to the destination or want to travel privately, our VIP cars will be present for the 
                        airport pick-up in Dubai.  
                        Whatever car size or class preference you have, Pilot and Cars will get you covered at the most affordable price! 

                    </div>
                </div>
            </div>
            <div class="col-md-12 t3-div-1">
                <div class="col-md-1 t3-div-1-icon-width">
                    <img src="https://cdn.ek.aero//ae/english/images/Travel_icon_tcm277-1806967.png" style="height:20px">
                </div>
                <div class="col-md-11 t3-div-1-text">
                    <div class="t3-div-1-text-head">
                        Exclusive family cars with a lot of luggage space 
                    </div>
                    <div class="t3-div-1-text-body">
                        Transportation from Dubai airport to the hotel can become a strenuous experience for you if you are visiting Dubai 
                        for the first time. Pilot and Cars’ luxury airport transfers Dubai will help to reduce this unwanted stress so that
                        you can reach your final destination safely and happily with your family. 
                        We offer exclusive family cars with a lot of luggage space so that you don’t need to worry about tucking your big baggage or suitcases within
                        a small space. 
                        Our family cars are spacious. Your whole family can sit back comfortably and enjoy the Dubai airport transfers luxury without worrying much 
                        about safety or getting lost. 

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@include('inc.bottom-icons-one')      
    
@endsection




