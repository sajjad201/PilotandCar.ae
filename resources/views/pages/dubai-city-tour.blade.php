
@extends('layouts.app-two')

@section('page_title')
Dubai City Tour
@endsection

@section('tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection


@section('content')

<section class="bg-img-int bg-pic" style="background-image: url(pilotpublic/images/dubai/p0.jpeg); height: 500px;">

<div class="bg-txt-cnt">
<div class="bg-txt-inner " style="    background-color: rgba(255, 255, 255, 0.9);  ">
    <h1 class="text-center animated fadeInRight" style="font-weight:700">
      <span style="font-size:14px">
        Pilot & Car<br>
      </span>
      Dubai City Tour    </h1>
  <p class="text-center animated fadeInLeft">
    Check Glamorous Dubai sightseeing with Pilot & Car
    
  </p>
</div>
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
          <a href="{{url('#')}}">Rent a car with Driver <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="os14-h1">Find Your Way</div>
      <div class="row">
      <div class="col-md-4">
        <div class="os14-inner">
          <div class="os14-img">
            <img src="pilotpublic/images/dubai/g6.jpeg" class="os14-img-1">
          </div>
          <div class="info">
            <div class="info-box">
              <h3>Amazing view of desert </h3>
              <p>
                Abu Dhabi City Tour will give you the amazing view of desert scenery and you can visit the Heritage Village,
                Emirates Palace, Yas Island, Sheikh Zayed Grand Mosque
              </p>
              <div class="info-more">
                <a href="#">More </a> <i class="fa fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="os14-inner">
          <div class="os14-img">
            <img src="pilotpublic/images/dubai/g2.jpeg" class="os14-img-1">
          </div>
          <div class="info">
            <div class="info-box">
              <h3>Dubai Palm Jumeirah </h3>
              <p>
                New Dubai City Tour covers the glitz and glamour  of Dubai Palm Jumeirah, Dubai Marina, Down Town Dubai, and Miracle Garden
              </p>
              <div class="info-more">
                <a href="#">More </a> <i class="fa fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="os14-inner">
          <div class="os14-img">
            <img src="pilotpublic/images/dubai/g3.jpeg" class="os14-img-1">
          </div>
          <div class="info">
            <div class="info-box">
              <h3>Hire Driver In Dubai </h3>
              <p>
                Traditional Dubai City Tour comes with the Arabian essence mixed in its air as you go on your trip through the
                Emirati Gold Bazaar, Spice Souq, Creek Area and Dubai Museum
              </p>
              <div class="info-more">
                <a href="#">More </a> <i class="fa fa-arrow-right"></i>
              </div>
            </div>
          </div>
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
            <img src="pilotpublic/images/up/product/dubaicity/p1.jpeg" style="height:200px; width:100%" class="object-image">
            <h3 class="abs-head">Lexus ES </h3>
            <span class="fa fa-star abs-icon"></span>
          </div>
          <div class="os2-txt-cont">
            <div class="overlay1">
              <span class="overlay1-txt">
                <div class="overlay1-txt-sm">PER DAY</div> 
                <?php $link="pilotpublic|images|up|product|dubaicity|p1.jpeg" ?>  
                <a href="{{url('product-form/per day/700/Lexus ES/dubai city tour/' .$link)}}" class="a-link-ok"><span class="overlay1-txt-lg">BOOK RIDE</span></a>
              </span>
              <i class="fas fa-car overlay1-txt-icon" style="margin-left:25px"></i>
            </div>
            <div>PER DAY</div>
            <div class="os2-h3">700 AED<span class="fa fa-angle-right fl-right fs-20"></span></div>
          </div>
          <div class="os2-txt-cont" style="border-top:5px solid #f9f9f9">
              <div class="overlay1">
                <span class="overlay1-txt">
                  <div class="overlay1-txt-sm">PER HOUR</div> 
                  <?php $link="pilotpublic|images|up|product|dubaicity|p1.jpeg" ?>  
                  <a href="{{url('product-form/per hour/100/Lexus ES/dubai city tour/' .$link)}}" class="a-link-ok"><span class="overlay1-txt-lg">BOOK RIDE</span></a>
                </span>
                <i class="fas fa-shuttle-van overlay1-txt-icon" style="margin-left:25px"></i>
              </div>
              <div>PER HOUR</div>
              <div class="os2-h3">100 AED<span class="fa fa-angle-right fl-right fs-20"></span></div>
            </div>
        </div>
      </div>
      <div class="col-md-4" style="margin-bottom: 30px;">
        <div class="os-2-cont">
          <div class="os-2-img-cont rel">
            <img src="pilotpublic/images/up/product/dubaicity/p2.jpeg" style="height:200px; width:100%" class="object-image">
            <h3 class="abs-head">Toyota Prado </h3>
            <span class="fa fa-star abs-icon"></span>
          </div>
          <div class="os2-txt-cont">
            <div class="overlay1">
              <span class="overlay1-txt">
                <div class="overlay1-txt-sm">PER DAY</div> 
                <?php $link="pilotpublic|images|up|product|dubaicity|p2.jpeg" ?>  
                <a href="{{url('product-form/per day/700/Toyota Prado/dubai city tour/' .$link)}}" class="a-link-ok"><span class="overlay1-txt-lg">BOOK RIDE</span></a>
              </span>
              <i class="fas fa-car overlay1-txt-icon" style="margin-left:25px"></i>
            </div>
            <div>PER DAY</div>
            <div class="os2-h3">700 AED<span class="fa fa-angle-right fl-right fs-20"></span></div>
          </div>
          <div class="os2-txt-cont" style="border-top:5px solid #f9f9f9">
              <div class="overlay1">
                <span class="overlay1-txt">
                  <div class="overlay1-txt-sm">PER HOUR</div> 
                  <?php $link="pilotpublic|images|up|product|dubaicity|p2.jpeg" ?>  
                  <a href="{{url('product-form/per hour/90/Toyota Prado/dubai city tour/' .$link)}}" class="a-link-ok"><span class="overlay1-txt-lg">BOOK RIDE</span></a>
                </span>
                <i class="fas fa-shuttle-van overlay1-txt-icon" style="margin-left:25px"></i>
              </div>
              <div>PER HOUR</div>
              <div class="os2-h3">90 AED<span class="fa fa-angle-right fl-right fs-20"></span></div>
            </div>
        </div>
      </div>
      <div class="col-md-4" style="margin-bottom: 30px;">
        <div class="os-2-cont">
          <div class="os-2-img-cont rel">
            <img src="pilotpublic/images/up/product/dubaicity/p3.jpeg" style="height:200px; width:100%" class="object-image">
            <h3 class="abs-head">Toyota Hi Roof </h3>
            <span class="fa fa-star abs-icon"></span>
          </div>
          <div class="os2-txt-cont">
            <div class="overlay1">
              <span class="overlay1-txt">
                <div class="overlay1-txt-sm">PER DAY</div> 
                <?php $link="pilotpublic|images|up|product|dubaicity|p3.jpeg" ?>  
                <a href="{{url('product-form/per day/700/Toyota Prado/dubai city tour/' .$link)}}" class="a-link-ok"><span class="overlay1-txt-lg">BOOK RIDE</span></a>
              </span>
              <i class="fas fa-car overlay1-txt-icon" style="margin-left:25px"></i>
            </div>
            <div>PER DAY</div>
            <div class="os2-h3">700 AED<span class="fa fa-angle-right fl-right fs-20"></span></div>
          </div>
          <div class="os2-txt-cont" style="border-top:5px solid #f9f9f9">
              <div class="overlay1">
                <span class="overlay1-txt">
                  <div class="overlay1-txt-sm">PER HOUR</div> 
                  <?php $link="pilotpublic|images|up|product|dubaicity|p3.jpeg" ?>  
                  <a href="{{url('product-form/per hour/100/Toyota Prado/dubai city tour/' .$link)}}" class="a-link-ok"><span class="overlay1-txt-lg">BOOK RIDE</span></a>
                </span>
                <i class="fas fa-shuttle-van overlay1-txt-icon" style="margin-left:25px"></i>
              </div>
              <div>PER HOUR</div>
              <div class="os2-h3">100 AED<span class="fa fa-angle-right fl-right fs-20"></span></div>
            </div>
        </div>
      </div>
      
      
    
  </div>
</section>



{{-- Text Two--}}
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
              Hire A Car With Driver In Dubai
          </strong>
      </div>
      <div class="col-md-12 t2-sec1">
          <div class="col-md-6 t2-sec1-1">
              <div class="t2-sec1-1-text1" style="padding-top:0px">
                  Rent a car with driver   
              </div>
              <div class="t2-sec1-1-text2">
              Dubai has made impossible fantasies of the human civilization come true with its luxurious skyline, 
              7-star hotels and restaurants, iconic landmarks, manmade sizzling Palm Island, beaches, deserts and
              numerous entertainment options, which attract thousands of young and adult tourists to heed to this 
              destination for holidays every year. 
              Al-Ain City Tour will take you on a refreshing trip through Camel market, Hot Water Springs,
              Al-Ain Oasis, National Museum, Palace Museum and a lot more. 
              Hatta Fort Tours  in our amazing SUV Fleet.
              Pilot and Cars offer you most selling two Dubai City tour deals that include: 
              1) Full-day Dubai city tour 2) Half-Day tour Packages
                
                  
                                     
              </div>
          </div>
          <div class="col-md-6 t2-sec1-2">
              <img src="https://images.ctfassets.net/q8mvene1wzq4/1fSCETF4C1urRbZueu2Lnw/c69983b5da846b3bedf48c81dad0b7aa/debit.gif">
          </div>
      </div>
      <div class="col-md-12" style="margin:80px 0px 80px 0px">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="col-lg-12" style="margin-bottom:35px">
              <h1><strong>Dubai city Tour Itinerary </strong></h1>
              <h4>You can visit the most famous and desired places in Dubai with our affordable Dubai City Sightseeing package deals. <br> 
                  Our Dubai Sightseeing Tours mainly include the following places   </h4>
            </div>
              <div class="col-md-4">
                  <img src="https://images.ctfassets.net/q8mvene1wzq4/4LN0lFZvT11860VbQkFAwd/60e81ce87ff8595d17e7c5852fc81bb2/debit_1_2x.png" style="width: 240px">
                  <div class="t2-sec1-1-text2">
                      •	Dubai Museum<br>•	Burj Khalifa<br>•	Dubai Spice Souk<br>•	Jumeirah Mosque     
                  </div>
              </div>
              <div class="col-md-4">
                  <img src="https://images.ctfassets.net/q8mvene1wzq4/2jlBRtlrtnYXgNHoyNW14B/0c411aab3c372ecb683f8b9c751a8eee/debit_2_2x.png" style="width: 240px">
                  <div class="t2-sec1-1-text2">
                      •	Dubai Fountains<br>•	Bollywood Parks<br>•	Deira Gold Souk<br>•	Dubai Palm
                                          
                  </div>
              </div>
              <div class="col-md-4">
                  <img src="https://images.ctfassets.net/q8mvene1wzq4/1O67IjJ0C5uoPnqJehHCLK/b143d0c2d9f8200928147fd2343f6401/debit_3_2x.png" style="width: 240px">
                  <div class="t2-sec1-1-text2">
                      •	Legoland Dubai<br>•	Dubai Fish Market<br>•	Miracle Garden<br>•	Aqua Venture Park
                                        
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-12 t2-sec1">
          <div class="col-md-6 t2-sec1-1">
              <div class="t2-sec1-1-text1" style="padding-top:0px">
                  Dubai Day Trip Package Itinerary 
              </div>
              <div class="t2-sec1-1-text2">
                  <b>Touring Dubai on a sunny and bright day is a fantabulous experience which you wouldn’t love to miss.
                  So, we offer you a flexible Dubai City Tour Deal including</b><br><br>
                  •	Pickup from your Hotel or residence and a safe drop off after the tour <br><br>
                  •	Visit Dubai Creek, Gold Souk, Dubai fish Market called as Waterfront Market, Meena Bazaar, Dubai Museum, Jumeirah Beach, Burj Al Arab, and Atlantis Hotel<br><br>
                  •	Half-day or morning session is just a 5 hours trip that will cover all the above-mentioned places in Dubai
                                     
              </div>
          </div>
          <div class="col-md-6 t2-sec1-2">
              <img src="https://images.ctfassets.net/q8mvene1wzq4/3S21XHVz41j8cJVdkxdBDx/ca7ec94792d292d3845b5e1d721614e6/drivercenter.gif">
          </div>
      </div>
      <div class="col-md-12" style="margin:80px 0px 80px 0px">
          <div class="col-md-1"></div>
          <div class="col-md-10">
              <div class="col-lg-12" style="margin-bottom:35px">
                  <h1><strong>Dubai City Tour Price<br></strong></h1>
                </div>
              <div class="col-md-4">
                  <img src="https://images.ctfassets.net/q8mvene1wzq4/3XwA6n02C3MaQWRc8AWfEw/0bcd2f7a93662a792a1d63d38346e6d7/drivercenter_1_2x.png" style="width: 240px">
                  <div class="t2-sec1-1-text2">
                    <strong>Hire a driver in Dubai</strong><br>
                    Pilot and Cars guarantee you lowest and fixed rates for city tours with no hidden fees. 
                    The prices will depend on the type of car or van you are choosing for your trip. Our experienced 
                    and friendly staff will guide you throughout the trip according to your convenient time and preferences
                  </div>
              </div>
              <div class="col-md-4">
                  <img src="https://images.ctfassets.net/q8mvene1wzq4/2vYGqAsRPLA7KXi6mK1u8p/67459367e2d275069190669f5eeee912/drivercenter_2_2x.png" style="width: 240px">
                  <div class="t2-sec1-1-text2">
                      <strong>Our Collection of Fleet for Dubai City Tours</strong><br>
                      You can go on your Dubai city tour by car, van, Dubai Sightseeing bus or by hop on hop off
                      Dubai as you are free select from our versatile fleet collection
                      <br><br><hr>
                      <b>Economical Transport</b>
                      •	Previa 7 seater<br>Lexus ES sedan<br>•	Toyota Prado 7 seater <br>•	Luxury Toyota Van 14 Seater for a big family<br><br>
                  </div>
              </div>
              <div class="col-md-4">
                  <img src="https://images.ctfassets.net/q8mvene1wzq4/59cz30Jvmhcj6bhnaFSbe/9f5e503d915ff216da4e443945f1d94f/drivercenter_3_2x.png" style="width: 240px">
                  <div class="t2-sec1-1-text2">
                    <strong>Luxurious Transport</strong><br>
                    •	Benz S Class <br>•	BMW 7 Series<br>•	Suburban SUV<br>•	Mercedes Sprinter<br>•	Benz Viano
                     
                  </div>
              </div>
              <div class="col-md-12 mt-5 pt-5">
                <div class="t2-sec1-1-text2">
                  <h1><b>Booking your Dubai City Tour with Us</b></h1>
                  Booking tours with Pilot and Cars is easy and simple. Just mention your location and preferred to pick up 
                  timing and our local Dubai Tour Operators will get back to you with our driver’s details and confirmation 
                  as soon as possible.
                  Your safety and comfort is our topmost priority and our staff will ensure that all the time. 
                  Just call 04-2223201 or WhatsApp us on +971-50-7852656 to book your lifetime for City Sightseeing Dubai. 

                </div>
              </div>
          </div>
      </div>
      

  </div>
</section>


<section style="background-color: #fbfbfb; padding-bottom:150px; text-align:center;     color: #404040;">
      <br><br>
      <h1><strong>Find out other services</strong></h1>

      <div class="container link-card__card-container link-card__card-container-mb ">
            
          <a href="chauffeur-service" target="_blank" class="context-item link-card__item hover--move-up">
              <div class="icon-container">
                  <i class="img-icon icon-new-hotel"></i>
              </div>
              <div class="text-center link-sm-03 text-xs-19 color-custom-4">
                  Chauffeur Service
              </div>
          </a>
      
          <a href="limousine-service" target="_blank" class="context-item link-card__item hover--move-up">
              <div class="icon-container">
                  <i class="img-icon icon-new-transit_hotel"></i>
              </div>
              <div class="text-center link-sm-03 text-xs-19 color-custom-4">
                  Limousine Service
              </div>
          </a>
      
          <a href="bus-rental-dubai" target="_blank" class="context-item link-card__item hover--move-up">
              <div class="icon-container">
                  <i class="img-icon icon-new-driving"></i>
              </div>
              <div class="text-center link-sm-03 text-xs-19 color-custom-4">
                  Luxury Buses
              </div>
          </a>
      
          <a href="dubai-city-tour" target="_blank" class="context-item link-card__item hover--move-up">
              <div class="icon-container">
                  <i class="img-icon icon-new-get_connected_in_sg"></i>
              </div>
              <div class="text-center link-sm-03 text-xs-19 color-custom-4">
                  Dubai City Tours
              </div>
          </a>
          <a href="abu-dhabi-city-tour" target="_blank" class="context-item link-card__item hover--move-up">
            <div class="icon-container">
                <i class="img-icon icon-new-get_connected_in_sg"></i>
            </div>
            <div class="text-center link-sm-03 text-xs-19 color-custom-4">
                Abu Dhabi City Tour
            </div>
        </a>
        <a href="airport-transfer" target="_blank" class="context-item link-card__item hover--move-up">
          <div class="icon-container">
              <i class="img-icon icon-new-get_connected_in_sg"></i>
          </div>
          <div class="text-center link-sm-03 text-xs-19 color-custom-4">
              Airport Transfer
          </div>
      </a>


      
  </div>
  </section>


@include('inc.bottom-icons-one')


@endsection




