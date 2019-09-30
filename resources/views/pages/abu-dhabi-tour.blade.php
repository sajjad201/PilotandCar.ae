
@extends('layouts.app-two')

@section('page_title')
Airport Transfer
@endsection

@section('content')

<style>
.slick-slider{
  padding: 0px;
}
.t1-sec1-1 {
    padding-left: 5.5%;
}
</style>

<section class="os7-body">
  <div class="slider-for-os7">
    <div class="slick-wrap bg-pic" style="background-image:linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0)),  url(pilotpublic/images/city/g2.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="animated slideInDown ss-top-text"><strong> Abu Dhabi city tour with ferrari world</strong></h1>
            <p class="animated fadeIn ss-top-text-bottom" style="animation-delay: 1.5s;">
                So, when you are looking for Abu Dhabi city tour packages, they will make every <br>traveler speechless with amazing services. 
            </p>
          </div>
        </div>
    </div>
  </div>
    <div class="slick-wrap bg-pic" style="background-image:linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0)),  url(pilotpublic/images/city/g1.jpg);">
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="animated slideInDown ss-top-text"><strong> abu dhabi mosque tour</strong></h1>
        <p class="animated fadeIn ss-top-text-bottom" style="animation-delay: 1.5s;">
            This is very easy to discover Abu Dhabi mosque tour on the holiday. 
        </p>
      </div>
    </div>
  </div>
  </div>
    <div class="slick-wrap bg-pic img-cover" style="background-image: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0)), url(pilotpublic/images/airport/door.jpg);">
    <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h1 class="animated slideInDown ss-top-text"><strong>Pick up from your Hotel </strong></h1>
          <p class="animated fadeIn ss-top-text-bottom" style="animation-delay: 1.5s;">
              Pilot and car provides facilities to pick up your ride from the door of hoter. 
          </p>
      </div>
    </div>
  </div>
  </div>
    <div class="slick-wrap bg-pic" style="background-image: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0)), url(pilotpublic/images/city/p3.jpg);">
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="animated slideInDown ss-top-text"><strong> ticket with these listed prices</strong></h1>
        <p class="animated fadeIn ss-top-text-bottom" style="animation-delay: 1.5s;">
            # save up to 60 AED off <br>
            # Unlimited all-day access to Ferrari World in Abu Dhabi city tour <br>
            # AED 50 extraordinary rate for your nanny purchased 
        </p>
      </div>
    </div>
  </div>
  </div>
  </div>
  </section>
  
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="slider-nav-os7">
              <div class="slick-wrap bg-pic bg-pic-img-shadow" style="background-image: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url(pilotpublic/images/city/g2.jpg);">
    <div class="row">
      <div class="col-md-12">
        <h1>City Tour</h1>
        <p>So, when you are looking for Abu Dhabi city tour packages, they will make every <br>traveler speechless with amazing services.</p><br>
        
      </div>
    </div>
  </div>
    <div class="slick-wrap bg-pic bg-pic-img-shadow" style="background-image: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url(pilotpublic/images/city/g1.jpg);">
    <div class="row">
      <div class="col-md-12">
        <h1>Mosque Tour</h1>
        <p>This is very easy to discover Abu Dhabi mosque tour on the holiday.</p><br><br>
        
      </div>
    </div>
  </div>
    <div class="slick-wrap bg-pic bg-pic-img-shadow" style="background-image: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url(pilotpublic/images/airport/door.jpg);">
  
    <div class="row">
      <div class="col-md-12">
        <h1>Pick From Hotel</h1>
        <p>Pilot and car provides facilities to pick up your ride from the door of hoter.</p><br><br>
        
      </div>
    </div>
  </div>
  
    <div class="slick-wrap bg-pic bg-pic-img-shadow" style="background-image: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url(pilotpublic/images/city/p3.jpg);">
  
    <div class="row">
      <div class="col-md-12">
        <h1>Ticket with Prices</h1>
        <p>
            # Save up to 60 AED off <br>
            # All-day access to Ferrari World in Abu Dhabi city tour <br>
            # AED 50 extraordinary rate for your nanny purchased 
        </p><br>
        
      </div>
    </div>
  </div>
          </div>
        </div>
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
          <a href="{{url('#')}}">Van Rental <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<br>

    


  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 style="color:navy"><strong> THE PERFECT HPTEL RIDES AND PACKAGES</strong></h1><br><br>
        </div>
      </div>
    </div>
  </section>  
  <section>
    <div class="container">
      <div class="row">
       
        <div class="col-md-6">
          <div class="os7-box" style="background-image:  linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), url(pilotpublic/images/city/g2.jpg);">
            <h4 class="os7-h1">Park Plaza Nuremberg | Book in Advance</h4>
            <p class="os7-p">Get 20% off the best-connected hotel in Nuremberg</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="os7-box bg-pic" style="background-image:  linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), url(pilotpublic/images/van/G2.jpg);">
            <h4 class="os7-h1">Park Plaza Nuremberg | Book in Advance</h4>
            <p class="os7-p">Get 20% off the best-connected hotel in Nuremberg</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="os7-box" style="background-image:  linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), url(pilotpublic/images/city/p6.jpg);">
            <h4 class="os7-h1">Park Plaza Nuremberg | Book in Advance</h4>
            <p class="os7-p">Get 20% off the best-connected hotel in Nuremberg</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="os7-box bg-pic" style="background-image:  linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), url(pilotpublic/images/van/G5.jpg);">
            <h4 class="os7-h1">Park Plaza Nuremberg | Book in Advance</h4>
            <p class="os7-p">Get 20% off the best-connected hotel in Nuremberg</p>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <br><br><br><br>
  
  <script type="text/javascript">
     $('.slider-for-os7').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav-os7'
  });
  $('.slider-nav-os7').slick({
    centerPadding:0,
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for-os7',
    dots: true,
    centerMode: true,
    arrows:true,
    focusOnSelect: true
  });
  </script>

@include('inc.product-five')



{{-- Text-one --}}   
<section class="t1">
  <div class="container-fluid">
      <div class="col-md-12 t1-head-1">
          <strong> PRODUCTS</strong><br>
          <span class="t1-head-2">
              ABU DHABI CITY TOUR
          </span>
      </div>
      <div class="col-md-12 t1-sec1">
          <div class="col-md-6 t1-sec1-1">
              <div class="t1-sec1-1-text1">
                Abu Dhabi City Tour With Ferrari World
              </div>
              <div class="t1-sec1-1-text2">
                No doubt Dubai is growing rapidly and its cities are attracting people more and more.
                 The places are located in Dubai and Abu Dhabi is amazing and doesn’t look for admiration
                  as places can be admired. When you are talking about Abu Dhabi city tour or want to taste 
                  the best things of nature so you should go for a tour. This is very easy to discover Abu 
                  Dhabi mosque tour on the holiday.                     
              </div>
          </div>
          <div class="col-md-6 t1-sec1-2">
              <img src="https://www.gilk.ru/images/svg/products/product1.svg">
          </div>
      </div>
      <div class="col-md-12" style="padding:100px;">
          <div class="col-md-12" style="background-color: cadetblue; padding:100px 30px 100px 30px; border-radius:4px">
              <div class="col-md-6 t1-sec1-2" style="padding-top:60px">
              <img src="https://www.gilk.ru/images/svg/products/product2.svg">
              </div>
              <div class="col-md-6 t1-sec1-1">
                  <div class="t1-sec1-1-text1">
                    Abu dhabi City Tour Deals
                  </div>
                  <div class="t1-sec1-1-text2">
                    Usually, people are very busy to make schedule properly for their tours. 
                    They must take a breath in the fresh air. There are so many cab services 
                    whose are offering their best lavish service to you. Abu Dhabi is located on 
                    the island with the shape of T letter into the Arabian Gulf from the central-western.
                     Approximately 2 hours of continuous driving from Dubai and Sharjah. 
                    So, when you are looking for Abu Dhabi city tour packages, they will make every traveler 
                    speechless with amazing services. The people who love and desperate to love travelling, 
                    this is the one city that is must explore at least once in a life. 
                                   
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-12 t1-sec1">
          <div class="col-md-6 t1-sec1-1">
              <div class="t1-sec1-1-text1">
                Ferrari World Abu Dhabi Price
              </div>
              <div class="t1-sec1-1-text2">
                Different companies are offering their cab service. But the most important thing is that when
                 you are coming overseas there shouldn’t any compromise on tour services. Ultimately, there is
                  no particular time or season when you call for any Abu Dhabi city tour deals to explore the 
                  destination of beautiful places. If you love to explore things and places or to the shopaholic
                   in nature so there are some shopping festival that is celebrated in the city and you can take 
                   advantage of it. 
                If you will look around or search you may find many travel agencies like Abu Dhabi city tour, having
                the best packages with them. Surely, they will give you the best scope to explore the places. You can 
                travel alone, family or group with complete safety with this company. They will never let you feel bored 
                as give you full entertainment as long as you are with them. 
                                  
              </div>
          </div>
          <div class="col-md-6 t1-sec1-2">
              <img src="https://www.gilk.ru/images/svg/products/product3.svg">
          </div>
      </div>
      <div class="col-md-12" style="padding:100px;">
          <div class="col-md-12" style="background-color:floralwhite; padding:100px 30px 100px 30px; border-radius:4px">
              <div class="col-md-6 t1-sec1-2" style="padding-top:60px">
              <img src="https://www.gilk.ru/images/svg/products/product2.svg">
              </div>
              <div class="col-md-6 t1-sec1-1">
                  <div class="t1-sec1-1-text1">
                    Grand Mosque Abu Dhabi Tour
                  </div>
                  <div class="t1-sec1-1-text2">
                    Among the other tour companies, Abu Dhabi city tour deals are with the best inclusion in every tour 
                    package that according to your needs. When you select a package for you or your family they will 
                    make the necessary lavish arrangements for you in time. Many of other events that are organized for
                     entertainment to their guest – you can choose the best one you want and suits your temperament. 
                    Another exciting thing is about grand mosque Abu Dhabi tour Ferrari in Abu Dhabi is the best attractive
                     theme park. The delighted park is in the capital city of UAE. It has the 38record breaking rides and 
                     all attraction of ages and groups. The different rides are in the Abu Dhabi city tour with Ferrari 
                     world making a more comfortable and friendly park. No doubt Abu Dhabi is the main attraction and huge
                      mosque in the world, best to see. You can also avail the service of the tour guide to explore more 
                      about its history and origins. This is an astonishing landmark, place of worship. The incredible 
                      glasswork is a witness of its beauty. 
                                            
                  </div>
              </div>
          </div>
      </div>

  </div>
</section>

{{-- End-text-one --}}

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
                          Ferrari Speed Drives With Comfort 
                          <div style="border:2px solid blue; width:5%; margin-top:10px"></div>
                          <br>
                      </div>
                      <div class="t3-div-1-text-body">
                        Some so many people love speed, an exciting Rossa is would be your favourite one. 
                        This is the world’s faster roller coaster ride that doesn’t want or need quick drops
                         from huge heights. During the ride, it will make you screaming after stomach-churning.
                          Never think about that in the Ferrari world, this is an easy ride. Usually, ride about
                           speed and lightning. Another thing is about speed, the hydraulic launch system use to
                            make sure reason this unimaginable speed. In the end, the 2km distance has some tricky
                             corners which make things more exciting. 
                        Along with more than 20rides are including some of the world’s best adventurous. Whereas, 
                        the Ferrari World Abu Dhabi price is nominal, easy to get for you and your family. This is 
                        becoming more and more attractive and visiting the place from all over the world. With riding 
                        tower, it shoots approximately 62 meters in the air with full force. This is best enough to 
                        provide you shiver for enjoyment. Besides the Ferrari world with Abu Dhabi city tour, your key
                         is to unlock the best enjoyment as much as a company can.
                        
                      </div>
                  </div>
              </div>
              
              {{-- <div class="col-md-12" style="padding:50px 0px 50px 0px; text-align:center">
                  <div class="t3-div-1-text-head" style="color:#333333">
                      Our destinations in Oman
                  </div>
                  
                  <div class="col-md-6">
                      <div class="t3-center-img">
                          <img src="https://c.ekstatic.net/shared/images/destination/v1/airports/MCT/810x270.jpg" style="width:100%"> 
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
                          <img src="https://c.ekstatic.net/shared/images/destination/v1/airports/MCT/810x270.jpg" style="width:100%"> 
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
                        Your Ticket May Includes With These Listed Prices
                      </div>
                      <div class="t3-div-1-text-body">
                        •	You can save up to 60 AED off the gate price on fixed dated tickets if you buy online</div>
                        <div class="t3-div-1-text-body">•	Unlimited all-day access to Ferrari World in Abu Dhabi city tour </div>
                          <div class="t3-div-1-text-body" style="margin-bottom:30px">
                            •	AED 50 extraordinary rate for your nanny purchased at gate specifically for UAE residents/ local only
                          </div>
                          
                            <div class="t3-div-1-text-body">Usually, artificial, Yas Island is the famous city of Abu Dhabi which has been credited with most of 
                        the attraction in the lavish world.  Offering companies are offering an exclusive tour of the unique 
                        theme of Ferrari in Abu Dhabi. It let you experience the rush with same to driving and actual Ferrari.
                       The theme park is the world’s largest space in one frame and must-visit. When you are in Abu Dhabi and
                        not visit yet grand mosque Abu Dhabi with grand mosque Abu Dhabi tour planner, this is ending yet.
                        The grand mosque, Sheikh Zayed in one of the world’s largest mosque, you must agree with that. 
                        
  
                      </div>
                  </div>
              </div>
              <div class="col-md-12 t3-div-1">
                  <div class="col-md-1 t3-div-1-icon-width">
                      <img src="https://cdn.ek.aero//ae/english/images/Travel_icon_tcm277-1806967.png" style="height:20px">
                  </div>
                  <div class="col-md-11 t3-div-1-text">
                      <div class="t3-div-1-text-head">
                        Touching Place in Tour Packages
                      </div>
                      <div class="t3-div-1-text-body">
                        A lavish and heart touching place embedded with most beautiful marble inside. 
                        This is part of a tour package, enlisted this grand mosque. People know that it
                         was completed in 2007 and always says welcome to the local and tourist community. 
                         After that government worked a lot of 20years of construction now having a capacity 
                         of 40,000 people in one time. The Abu Dhabi offering proper guides with pick n drop 
                         service include the provided packages.
  
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  {{-- End-text-two --}}

<style>
.ser-one-rel{
  background: unset;
  background-color: #d1b894 !important;
}
.ser-one-rel:hover{ 
  background: linear-gradient(to bottom, #ba945e 0%, #ba945e 100%);
}

</style>
<section>
  <div class="container-fluid" style="margin-bottom:40px">
    <div class="row rt-pg-one-text">
      <div>Related Pages</div>
    </div>
    <div class="row">
      <div class="col-md-2" style="padding:0px 1px 0px 0px; ">
        <div class="col-md-12 ser-one-rel">
            <i class="fab fa-500px"></i><br>
            <div style="margin-top:15px;">Booking on Hold</div>
          </div>
      </div>
      <div class="col-md-2" style="padding:0px 1px 0px 0px; ">
        <div class="col-md-12 ser-one-rel">
          <i class="fab fa-adn"></i><br>
          <div style="margin-top:15px;">Flight Rebooking</div>
        </div>
      </div>
      <div class="col-md-2" style="padding:0px 1px 0px 0px; ">
        <div class="col-md-12 ser-one-rel">
          <i class="fas fa-air-freshener"></i><br>
          <div style="margin-top:15px;">Seat Selection</div>
        </div>
      </div>
      <div class="col-md-2" style="padding:0px 1px 0px 0px; ">
        <div class="col-md-12 ser-one-rel">
          <i class="fab fa-500px"></i><br>
          <div style="margin-top:15px;">Confirm Flight</div>
        </div>
      </div>
      <div class="col-md-2" style="padding:0px 1px 0px 0px; ">
        <div class="col-md-12 ser-one-rel">
          <i class="fab fa-amazon-pay"></i><br>
          <div style="margin-top:15px;">Our Fleet</div>
        </div>
      </div>
      <div class="col-md-2" style="padding:0px 0px 0px 0px; ">
        <div class="col-md-12 ser-one-rel">
          <i class="fab fa-angular"></i><br>
          <div style="margin-top:15px;">Services</div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('inc.bottom-icons-one')
    
@endsection




