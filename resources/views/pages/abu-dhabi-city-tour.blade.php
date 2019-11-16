
@extends('layouts.app-two')

@section('page_title')
Abu Dhabi city tour
@endsection

@section('tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection

@section('content')

<section>
  <div style="position:relative">
    <img src="pilotpublic/images/city/g2.jpeg" class="img-b" style="height:500px">
    <div style="position:absolute; left:2%; bottom:3%">
      <h1 class="animated slideInDown" style="text-shadow: 1px 1px 3px black; color:white; font-size:45px; text-transform: uppercase">
        <strong>Abu Dhabi city tour</strong>
        <p class="animated fadeIn ch-t-img-txt" style="animation-delay: 1s;">
            The places are located in Dubai and Abu Dhabi is amazing and  <br>
            doesn’t look for admiration as places can be admired. When you are talking <br>
            about Abu Dhabi city tour or want to taste the best things of nature so you should go for a tour. 
        </p>
      </h1>
    <div>
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
          <a href="{{url('#')}}">Chauffer Service <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="wrapper os4-wrapper" style="padding:50px 0px 70px 0px ">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="os4-wrap">
          <div class="os4-img-cnt">
            <img src="pilotpublic/images/city/p1.jpeg" style="height:300px" class="img-b">
          </div>
          <div class="os4-txt-cnt">
            <h6 class="text-center">PILOT AND CAR</h6>
            <h1 style="color:#333333">Executive Travel</h1><br><br>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="os4-wrap">
          <div class="os4-img-cnt">
            <img src="pilotpublic/images/city/g1.jpeg" style="height:300px" class="img-b">
          </div>
          <div class="os4-txt-cnt">
            <h6 class="text-center">PILOT AND CAR</h6>
            <h1 style="color:#333333">Personal usage  </h1><br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Text two--}}
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
                        Discover Abu Dhabi Mosque Tour on the Holiday
                        <div style="border:2px solid blue; width:5%; margin-top:10px"></div>
                        <br>
                    </div>
                    <div class="t3-div-1-text-body">
                        No doubt Dubai is growing rapidly and its cities are attracting people more and more. The places are located in Dubai and Abu 
                        Dhabi is amazing and doesn’t look for admiration as places can be admired. When you are talking about Abu Dhabi city tour or 
                        want to taste the best things of nature so you should go for a tour. This is very easy to discover Abu Dhabi mosque tour on the holiday. 
                    </div>
                </div>
            </div>
            
            {{-- <div class="col-md-12" style="padding:50px 0px 50px 0px; text-align:center">
                <div class="t3-div-1-text-head" style="color:#333333">
                    Our destinations in Oman
                </div>
                
                <div class="col-md-6">
                    <div class="t3-center-img">
                        <img src="https://c.ekstatic.net/shared/images/destination/v1/airports/MCT/810x270.jpeg" style="width:100%"> 
                        <div class="t3-center-img-txt">
                            <div class="t3-center-img-txt1">OMAN</div>
                            <div class="t3-center-img-txt2">FLIGHTS TO MASQAT</div>
                            <div class="t3-center-img-txt3">the old quarter, where traditional Arab architecture dominates and old Portuguese
                                forts can be found along the seafront.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="t3-center-img">
                        <img src="https://c.ekstatic.net/shared/images/destination/v1/airports/MCT/810x270.jpeg" style="width:100%"> 
                        <div class="t3-center-img-txt">
                            <div class="t3-center-img-txt1">OMAN</div>
                            <div class="t3-center-img-txt2">FLIGHTS TO MASQAT</div>
                            <div class="t3-center-img-txt3">the old quarter, where traditional Arab architecture dominates and old Portuguese
                                forts can be found along the seafront.
                            </div>
                        </div>
                    </div>
                </div>
                
            </div> --}}

            <div class="col-md-12 t3-div-1">
                <div class="col-md-1 t3-div-1-icon-width">
                    <img src="https://cdn.ek.aero//ae/english/images/EssentialInfo_icon_tcm277-1806966.png" style="height:20px">
                </div>
                <div class="col-md-11 t3-div-1-text">
                    <div class="t3-div-1-text-head">
                        Take a Breath in the Fresh Air  	
                    </div>
                    <div class="t3-div-1-text-body">
                        Usually, people are very busy to make schedule properly for their tours. They must take a breath in the fresh air. 
                        There are so many cab services whose are offering their best lavish service to you. Abu Dhabi is located on the island
                        with the shape of T letter into the Arabian Gulf from the central-western. Approximately 2 hours of continuous driving
                        from Dubai and Sharjah. So, when you are looking for Abu Dhabi city tour packages, they will make every traveler speechless 
                        with amazing services. The people who love and desperate to love travelling, this is the one city that is must explore at least 
                        once in a life. 
                    </div>
                </div>
            </div>
            <div class="col-md-12 t3-div-1">
                <div class="col-md-1 t3-div-1-icon-width">
                    <img src="https://cdn.ek.aero//ae/english/images/Travel_icon_tcm277-1806967.png" style="height:20px">
                </div>
                <div class="col-md-11 t3-div-1-text">
                    <div class="t3-div-1-text-head">
                        Find Travel Agencies like Abu Dhabi City Tour 
                    </div>
                    <div class="t3-div-1-text-body">
                        Different companies are offering their cab service. But the most important thing is that when you are coming overseas there shouldn’t 
                        any compromise on tour services. Ultimately, there is no particular time or season when you call for any Abu Dhabi city tour deals to 
                        explore the destination of beautiful places. If you love to explore things and places or to the shopaholic in nature so there are some
                        shopping festival that is celebrated in the city and you can take advantage of it. 
                        If you will look around or search you may find many travel agencies like Abu Dhabi city tour, having the best packages with them. Surely,
                        they will give you the best scope to explore the places. You can travel alone, family or group with complete safety with this company. 
                        They will never let you feel bored as give you full entertainment as long as you are with them. 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End-text-two --}}

<section class="mt-20" style="padding:30px 0px 100px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="padding:0px 5px;">
          <div class="st10-split-text">
            CHECK OUR PRODUCTS
          </div>
        </div>
        <div class="product-cnt">

          <div class="col-md-4">
            <div class="product">
              <div class="pr-img">
              <img src="pilotpublic/images/up/product/abudhabicity/p1.jpeg" class="img-fluid cp-img">
              </div>
            </div>
            <h1 class="pr-h1">Lexus ES</h1>
            <div class="pr-txt">
              <ul class="pr-ul">
                <?php $link="pilotpublic|images|up|product|abudhabicity|p1.jpeg" ?>      
                <li><a href="{{url('product-form/hour/700/Lexus ES/abu dhabi city tour/' .$link)}}" class="pt-link-ok">By Day
                  <div class="pt-price-clr">price 700 AED</div><i class="fa fa-caret-right pull-right"></i></span></a>
                </li>
                <?php $link="pilotpublic|images|up|product|abudhabicity|p1.jpeg" ?>      
                <li><a href="{{url('product-form/hour/100/Lexus ES/abu dhabi city tour/' .$link)}}" class="pt-link-ok">Per Hour
                  <div class="pt-price-clr">price 100 AED</div><i class="fa fa-caret-right pull-right"></i></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product">
              <div class="pr-img">
              <img src="pilotpublic/images/up/product/abudhabicity/p2.jpeg" class="img-fluid cp-img">
              </div>
            </div>
            <h1 class="pr-h1">Toyota Prado</h1>
            <div class="pr-txt">
              <ul class="pr-ul">
                <?php $link="pilotpublic|images|up|product|abudhabicity|p2.jpeg" ?>      
                <li><a href="{{url('product-form/hour/700/Toyota Prado/abu dhabi city tour/' .$link)}}" class="pt-link-ok">By Day
                  <div class="pt-price-clr">price 700 AED</div><i class="fa fa-caret-right pull-right"></i></span></a>
                </li>
                <?php $link="pilotpublic|images|up|product|abudhabicity|p2.jpeg" ?>      
                <li><a href="{{url('product-form/hour/90/Toyota Prado/abu dhabi city tour/' .$link)}}" class="pt-link-ok">Per Hour
                  <div class="pt-price-clr">price 90 AED</div><i class="fa fa-caret-right pull-right"></i></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product">
              <div class="pr-img">
              <img src="pilotpublic/images/up/product/abudhabicity/p3.jpeg" class="img-fluid cp-img">
              </div>
            </div>
            <h1 class="pr-h1">Toyota Hi Roof</h1>
            <div class="pr-txt">
              <ul class="pr-ul">
                <?php $link="pilotpublic|images|up|product|abudhabicity|p3.jpeg" ?>      
                <li><a href="{{url('product-form/hour/750/Toyota Hi Roof/abu dhabi city tour/' .$link)}}" class="pt-link-ok">By Day
                  <div class="pt-price-clr">price 700</div><i class="fa fa-caret-right pull-right"></i></span></a>
                </li>
                <?php $link="pilotpublic|images|up|product|abudhabicity|p3.jpeg" ?>      
                <li><a href="{{url('product-form/hour/100/Toyota Hi Roof/abu dhabi city tour/' .$link)}}" class="pt-link-ok">Per Hour
                  <div class="pt-price-clr">price 100</div><i class="fa fa-caret-right pull-right"></i></span></a>
                </li>
              </ul>
            </div>
          </div>
               
        </div>
      </div>
    </div>
  </section>

{{-- Text one--}}
<style>
    .t2{
        background-color: white;
        color: #182041;
        padding: 0px 0px 0px 0px;
    }
    .t2-head-1{
        padding: 30px 20px 30px 20px;
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
        padding-left: 10%;
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
                Abu Dhabi city tour with Ferrari world 
            </strong>
        </div>
        <div class="col-md-12 t2-sec1">
            <div class="col-md-6 t2-sec1-1">
                <div class="t2-sec1-1-text1" style="padding-top:0px">
                    Deals With The Best Inclusion
                </div>
                <div class="t2-sec1-1-text2">
                    Among the other tour companies, Abu Dhabi city tour deals are with the best inclusion in every tour package that according
                    to your needs. When you select a package for you or your family they will make the necessary lavish arrangements for you in
                    time. Many of other events that are organized for entertainment to their guest – you can choose the best one you want and 
                    suits your temperament. 
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
                        <h3><b>Grand Mosque</b></h3>   
                        Another exciting thing is about grand mosque Abu Dhabi tour Ferrari in Abu Dhabi is the best attractive theme park. 
                        The delighted park is in the capital city of UAE. It has the 38record breaking rides and all attraction of ages and groups. 
                  
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="https://images.ctfassets.net/q8mvene1wzq4/2jlBRtlrtnYXgNHoyNW14B/0c411aab3c372ecb683f8b9c751a8eee/debit_2_2x.png" style="width: 240px">
                    <div class="t2-sec1-1-text2">
                        <h3><b>Comfortable & Friendly Park </b></h3>
                        The different rides are in the Abu Dhabi city tour with Ferrari world making a more comfortable and friendly park. 
                        No doubt Abu Dhabi is the main attraction and huge mosque in the world, best to see.      
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="https://images.ctfassets.net/q8mvene1wzq4/1O67IjJ0C5uoPnqJehHCLK/b143d0c2d9f8200928147fd2343f6401/debit_3_2x.png" style="width: 240px">
                    <div class="t2-sec1-1-text2">
                        <h3><b>Avail Incredible Service</b></h3>   
                        You can also avail the service of the tour guide to explore more about its history and origins. This is an astonishing landmark, 
                        place of worship. The incredible glasswork is a witness of its beauty. 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 t2-sec1">
            <div class="col-md-6 t2-sec1-1">
                <div class="t2-sec1-1-text1" style="padding-top:0px">
                    Love Exciting Rossa
                </div>
                <div class="t2-sec1-1-text2">
                    Some so many people love speed, an exciting Rossa is would be your favourite one. This is the world’s faster roller coaster ride that 
                    doesn’t want or need quick drops from huge heights. During the ride, it will make you screaming after stomach-churning. Never think about
                    that in the Ferrari world, this is an easy ride. Usually, ride about speed and lightning. Another thing is about speed, the hydraulic 
                    launch system use to make sure reason this unimaginable speed. In the end, the 2km distance has some tricky corners which make things 
                    more exciting. 
                       
                </div>
            </div>
            <div class="col-md-6 t2-sec1-2">
                <img src="https://images.ctfassets.net/q8mvene1wzq4/3S21XHVz41j8cJVdkxdBDx/ca7ec94792d292d3845b5e1d721614e6/drivercenter.gif">
            </div>
        </div>
        <div class="col-md-12" style="margin:80px 0px 80px 0px">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              
                <div class="col-md-4">
                    <img src="https://images.ctfassets.net/q8mvene1wzq4/3XwA6n02C3MaQWRc8AWfEw/0bcd2f7a93662a792a1d63d38346e6d7/drivercenter_1_2x.png" style="width: 240px">
                    <div class="t2-sec1-1-text2">
                        Along with more than 20rides are including some of the world’s best adventurous. Whereas, the Ferrari World 
                        Abu Dhabi price is nominal, easy to get for you and your family.         
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="https://images.ctfassets.net/q8mvene1wzq4/2vYGqAsRPLA7KXi6mK1u8p/67459367e2d275069190669f5eeee912/drivercenter_2_2x.png" style="width: 240px">
                    <div class="t2-sec1-1-text2">
                        This is becoming more and more attractive and visiting the place from all over the world. With riding tower, 
                        it shoots approximately 62 meters in the air with full force.                   
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="https://images.ctfassets.net/q8mvene1wzq4/59cz30Jvmhcj6bhnaFSbe/9f5e503d915ff216da4e443945f1d94f/drivercenter_3_2x.png" style="width: 240px">
                    <div class="t2-sec1-1-text2">
                        This is best enough to provide you shiver for enjoyment. Besides the Ferrari world with Abu Dhabi city tour, your key 
                        is to unlock the best enjoyment as much as a company can.                                
                    </div>
                </div>
            </div>
            
        </div>
        

    </div>
</section>
{{-- End-text-one--}}

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
            <a href="limousine-service" target="_blank">
                <i class="fab fa-angular" style="font-size:40px;"></i><br>
                Limousine Service
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

<section>
    <div class="container">
        <div class="col-md-12 t3-div-1">
            <div class="col-md-1 t3-div-1-icon-width">
                <img src="https://cdn.ek.aero//ae/english/images/Travel_icon_tcm277-1806967.png" style="height:20px">
            </div>
            <div class="col-md-11 t3-div-1-text">
                <div class="t3-div-1-text-head">
                    Your Ticket may Includes with These Listed Prices
                </div>
                <div class="t3-div-1-text-body"><br>
                        •	You can save up to 60 AED off the gate price on fixed dated tickets if you buy online<br>
                        •	Unlimited all-day access to Ferrari World in Abu Dhabi city tour <br>
                        •	AED 50 extraordinary rate for your nanny purchased at gate specifically for UAE residents/ local only<br><br>

                    Usually, artificial, Yas Island is the famous city of Abu Dhabi which has been credited with most of the attraction in the lavish
                    world.  Offering companies are offering an exclusive tour of the unique theme of Ferrari in Abu Dhabi. It let you experience the
                    rush with same to driving and actual Ferrari. The theme park is the world’s largest space in one frame and must-visit. When you
                    are in Abu Dhabi and not visit yet grand mosque Abu Dhabi with grand mosque Abu Dhabi tour planner, this is ending yet. The 
                    grand mosque, Sheikh Zayed in one of the world’s largest mosque, you must agree with that. 
                    A lavish and heart touching place embedded with most beautiful marble inside. This is part of a tour package, enlisted this grand mosque. People know 
                    that it was completed in 2007 and always says welcome to the local and tourist community. After that government worked a lot of 20years of construction
                    now having a capacity of 40,000 people in one time. The Abu Dhabi offering proper guides with pick n drop service include the provided packages.
                </div>
            </div>
        </div>
    </div>
</section>

   @include('inc.bottom-icons-one') 


@endsection




