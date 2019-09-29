
@extends('layouts.app-two')

@section('page_title')
    SERVICE SIX
@endsection

@section('content')


<section class="bg-img-int bg-pic" style="background-image: url(pilotpublic/images/interior.jpg); height: 500px;">

<div class="bg-txt-cnt">
<div class="bg-txt-inner animated zoomIn" style="    background-color: rgba(255, 255, 255, 0.9);  ">
    <h1 class="text-center animated fadeInDown" style="font-weight:700; animation-delay: .5s;">Royal First Class</h1>
  <p class="text-center animated fadeInUp" style="animation-delay: 1s;">The airline finely selects in-flight facilities to serve passenger needs. Passengers will experience different dishes in Royal First class throughout the flights.</p>
</div>
</div>
</section>
<section class="page-nav-links">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-nav-links-col">
        <div class="col-md-1 page-nav-links-col-internal">
          <a href="{{url('/')}}">Home <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
        <div class="col-md-1 page-nav-links-col-internal">
          <a href="{{url('/our-services')}}">Our Serives <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
        <div class="col-md-1 page-nav-links-col-internal-current">
          <a href="{{url('#')}}">Service Six <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('inc.product-one')

<br><br>

<section class="os6-sec wrapper">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="os6-h1" style="font-size:36px; font-weight:700">Royal First Class</h1>
      <img src="pilotpublic/images/os-2.jpg" class="img-fluid" style="height:450px; width:100%"><br><br><br>
      <h1 class="os6-h1" style="font-size:36px; font-weight:700">The Experience</h1>
      <p class="os6-p" style="font-family: calibri;">
          Travelling can fuel your wanderlust but at the same time, it demands strong nerves to deal 
          with unavoidable hassles, especially, when you have to navigate with the complexities of a 
          foreign transportation system.  <br><br>
          This situation can get worse at the Dubai International Airport, keeping in mind the fact that, 
          it is one of the world’s biggest and busiest airports, by the number of international passenger 
          traffic handled each day. The airport is located at Al Garhoud district, almost 2.5 miles at the 
          outskirts from the main city which makes it hard for a foreigner to navigate their way from the 
          airport to their final destination. 
          
      </p>
      <br><br><br>
      <h1 class="os6-h1" style="font-size:36px; font-weight:700">Why Choose Pilot and Cars? </h1>
      <p class="os6-p" style="font-family: calibri;">
          Everyone traveling abroad has faced the unnecessary pain 
          of long waits, searching for good transports and negotiating on fares from the airport till reaching their destinations. 
          Whether you have become a pro at handling airport hassles or not you would gladly wish to avoid all 
          these troubles and reach your destination smoothly. <br><br>
          Pilot and Cars (site name) will arrange your Dubai airport transport and save you time once you land.  
          You don’t need to stand at taxi stands or in long queues to find your transport.
           Instead our driver and staff member will be present at the airport to pick you up ahead of your arrival 
           time and drop you at your hotel door without any fuss. 
          <div class="os6-p" style="font-family: calibri; font-weight:600; font-size:30px">OUR DUBAI AIRPORT TRANSFER SERVICES INCLUDE</div>
          <div class="os6-p" style="font-family: calibri; font-weight:600">- ONE HOUR WAIT</div>
          <p class="os6-p" style="font-family: calibri;">
            Our Dubai Airport Transfer services include a one-hour wait stance because we understand all the 
            pros and cons of traveling very well. 
            Your flight can get delayed without prior notice or sometimes the baggage may arrive late. To adjust 
            well with these mishaps our driver will be waiting for you up to one hour after your arrival time. 
            You can contact our help desk if your delay exceeds over this waiting time and we will plan out your 
            transfer from Dubai airport to hotel alternatively. 
          </p>
          <div class="os6-p" style="font-family: calibri; font-weight:600">- PAGING OF PASSENGER</div>
           
          <p class="os6-p" style="font-family: calibri;">
            Looking for your designated Taxi from Dubai airport can become very irritating. 
            Our responsible staff member will be present at the airport holding a paging board at hand with your name on it to avoid unnecessary confusion. 
            Our staff members have good knowledge about the localities, as a result, we can assure you a safe and comfortable airport transfer Dubai to hotel. 
          </p>  
          <div class="os6-p" style="font-family: calibri; font-weight:600">- CALL OUR DESKTOP HELP 24/7</div> 
          <p class="os6-p" style="font-family: calibri;">
            Our driver will be waiting for you at Dubai airport pick-up even before your arrival. 
            In case you cannot find the driver at Dubai airport transfers terminals, you can call our 
            help desk anytime. We will get your reference number and contact the driver to reach out to your location at the airport. 
          </p>  

          </p>

      <div class="row gal-cnt">
        <div class="col-md-8" style="padding: 5px;">
          <img src="pilotpublic/images/gal1.jpg" class="gal-img">
        </div>
        <div class="col-md-4" style="padding: 5px;">
          <img src="pilotpublic/images/gal2.jpg" class="gal-img">
        </div>
      </div>
      <div class="row gal-cnt">
        <div class="col-md-7" style="padding: 5px;">
          <img src="pilotpublic/images/gal3.jpg" class="gal-img">
        </div>
        <div class="col-md-5" style="padding: 5px;">
          <img src="pilotpublic/images/gal4.jpg" class="gal-img">
        </div>
      </div>
      <br><br><br>
      <h1 class="os6-h1" style="font-size:36px; font-weight:700">FIXED & GUARANTED RATES UNTIL YOUR DESTINATION</h1>
      <img src="pilotpublic/images/gal4.jpg" class="img-fluid">
      <p class="os6-p" style="font-family: calibri;">
          <div class="os6-p" style="font-family: calibri; font-weight:600">- CALL OUR DESKTOP HELP 24/7</div> 
          <p class="os6-p" style="font-family: calibri;">
              Finding a Taxi in Dubai airport and negotiating with drivers on the fares can become really tiring after a long flight. 
              Traveling with Pilot and Cars is very convenient for our passengers because we offer you fixed and guaranteed fares with no changes made until your destination. 
              You can enjoy a cozy and warm Dubai Airport Transfer with us without worrying about hidden fees or uninformed charges. 
              Our Dubai airport taxi booking procedure is absolutely hassled free, fast and easy as anyone can make their reservations ahead of their travel online.                
          </p>  
      </p>
      <div class="row">
        <div class="col-md-8" style="padding: 5px;">
          <img src="pilotpublic/images/gal5.jpg" class="gal-img">
        </div>
        <div class="col-md-4" style="padding: 5px;">
          <img src="pilotpublic/images/gal3.jpg" class="gal-img">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4" style="padding: 5px;">
          <img src="pilotpublic/images/gal6.png" class="gal-img">
        </div>
        <div class="col-md-8" style="padding: 5px;">
          <img src="pilotpublic/images/gal1.jpg" class="gal-img">
        </div>
      </div>
      <p class="os6-p" style="font-family: calibri;">
          <div class="os6-p" style="font-family: calibri; font-weight:600">- TRAVEL IN ECONOMICAL OR LUXURY IVP CARS</div> 
          <p class="os6-p" style="font-family: calibri;">
              Our Dubai Airport Transfer bring in economical to luxury VIP cars for the passengers and offer different 
              price ranges for the kind of transport they choose.  
              You may choose to travel by airport shuttle Dubai and share your ride with other passengers at an affordable price. 
              If you need to perk up before an important meeting on your way to the destination or want to travel privately, 
              our VIP cars will be present for the airport pick-up in Dubai.  
              Whatever car size or class preference you have, Pilot and Cars will get you covered at the most affordable price! 
               
          </p>  
          <div class="os6-p" style="font-family: calibri; font-weight:600">- Exclusice Family CARS WITH A ALOT OF LUGGAGE SPACE</div> 
          <p class="os6-p" style="font-family: calibri;">
              Transportation from Dubai airport to the hotel can become a strenuous experience for you if you are visiting 
              Dubai for the first time. Pilot and Cars’ luxury airport transfers Dubai will help to reduce this unwanted 
              stress so that you can reach your final destination safely and happily with your family. 
              We offer exclusive family cars with a lot of luggage space so that you don’t need to worry about tucking your big baggage or 
              suitcases within a small space. 
              Our family cars are spacious. Your whole family can sit back comfortably and enjoy the Dubai airport transfers luxury without 
              worrying much about safety or getting lost. 
               
          </p> 
      </p>
    </div>
  </div>
</div>
</section>

<section>
  <div class="container">
    <div class="os14-h1">Transport Services</div>

    <div class="col-md-6" style="padding:0px">
      <p class="os14-inner-p">Find out more about accompanying facilities and services.</p>
      <div class="os14-inner-cnt">
        <div class="col-md-4">
          <div class="os14-sec2-inner">
            <img src="pilotpublic/images/gal5.jpg" class="img-fluid" style="height:120px">
          </div>
        </div>
        <div class="col-md-8">
          <div class="os14-sec2-inner2">
            <h5>Parking at the Airport</h5>
          </div>
        </div>
      </div>
      <div class="os14-inner-cnt">
        <div class="col-md-4">
          <div class="os14-sec2-inner">
            <img src="pilotpublic/images/h5.jpg" class="img-fluid" style="height:120px">
          </div>
        </div>
        <div class="col-md-8">
          <div class="os14-sec2-inner2">
            <h5>Parking at the Airport</h5>
          </div>
        </div>
      </div>
      <div class="os14-inner-cnt">
        <div class="col-md-4">
          <div class="os14-sec2-inner">
            <img src="pilotpublic/images/gal2.jpg" class="img-fluid" style="height:120px">
          </div>
        </div>
        <div class="col-md-8">
          <div class="os14-sec2-inner2">
            <h5>Parking at the Airport</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6" style="padding:60px 100px 0px 50px">
      <div class="os8-rel-cnt bg-white bs-8-3">
				<ul class="related-list">
					<li class="related-list-iner"><a href="#">Dining 1<i class="fa fa-angle-right"></i></a></li>
					<li class="related-list-iner"><a href="#">Dining 2<i class="fa fa-angle-right"></i></a></li>
          <li class="related-list-iner"><a href="#">Dining 3<i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
    </div>
  </div>
</section>
    
@include('inc.bottom-icons-two')    
@endsection




