
@extends('layouts.app-two')

@section('page_title')
    SERVICE THREE
@endsection

@section('content')

<section>
  <div style="position:relative">
    <img src="pilotpublic/images/chauf/B2.jpg" class="img-b">
    <div style="position:absolute; left:5%; top:25%">
      <h1 style="text-shadow: 1px 1px 7px black; color:white; font-size:50px">
        <strong>THIS IS THE TEXT</strong>
      </h1>
    <div>
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
          <a href="{{url('#')}}">Service Three <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
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
            <img src="pilotpublic/images/chauf/G9.jpg" style="height:300px" class="img-b">
          </div>
          <div class="os4-txt-cnt">
            <h6 class="text-center">Italy</h6>
            <h1 style="color:#333333">Chauffeur</h1>
            <h5 class="">Discover for yourself</h5>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="os4-wrap">
          <div class="os4-img-cnt">
            <img src="pilotpublic/images/chauf/G3.jpg" style="height:300px" class="img-b">
          </div>
          <div class="os4-txt-cnt">
            <h6 class="text-center">Italy</h6>
            <h1 style="color:#333333">Limousine</h1>
            <h5 class="">Discover for yourself</h5>
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
                        Chauffer Service in Dubai 
                        <div style="border:2px solid blue; width:5%; margin-top:10px"></div>
                        <br>
                    </div>
                    <div class="t3-div-1-text-body">
                        Dubai is beautiful city in the Region of Gulf   , its Biggest, and busiest
                         hub of transit passengers Who travels from Europe to Central Asia and Gulf 
                         countries, or vice versa . This city contains several entertainment places, 
                         tourism and nightlife, Pilot & Car Transport Service in Dubai offers several 
                         amazing option for all class of traveler from Luxury Chauffer service to most 
                         economical and affordable one, with our chauffeur driver you will be comfortable 
                         and safe  
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
                        Why should you select our luxury Chauffeur Service? 	
                    </div>
                    <div class="t3-div-1-text-body">
                        Our Service based on our trained chauffeurs, each of our drivers has good knowledge of routs they have 
                        Idea of traffic jam hours and how to take alternative routes to reach on 
                        time of your destination or any tourist spot with safety.
                        Our all Professional Chauffeur are smartly dressed in black color suits. With us you will 
                        feel yourself in Premium luxury class. With our executive class fleet we can organize 
                        your business or holiday trip unforgettable. We have customized travel packages for Dubai 
                        City tours and Abu Dhabi City tours , we have special airport transfer packages for our 
                        corporate and regular clients , our online booking system is very convenient and user friendly . 
                        You can contact with us 24-7 on our helpline Number 
                        Our well trained and experienced team will defiantly help you get the possible service in Dubai. 
                        It’s not finished you can see our offer to get our special low rates offers.

                    </div>
                </div>
            </div>
            <div class="col-md-12 t3-div-1">
                <div class="col-md-1 t3-div-1-icon-width">
                    <img src="https://cdn.ek.aero//ae/english/images/Travel_icon_tcm277-1806967.png" style="height:20px">
                </div>
                <div class="col-md-11 t3-div-1-text">
                    <div class="t3-div-1-text-head">
                        Monthly Chauffeur Service Dubai 
                    </div>
                    <div class="t3-div-1-text-body">
                        It is most economical and hassle free  service , where you not have to  pay monthly 
                        installment of your car , no need to pay  parking ,fuel and Salik ( Toll gate charges) , 
                        even if the car model is not according to your class you are not bound to make a long term 
                        agreement with us . 
                        Your children school transportation, your shopping tours or your 
                        official travel within UAE we can make all in one affordable monthly 
                        car with drivers package for you   

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End-text-two --}}
@include('inc.product-two')

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
        padding-left: 15%;
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
                High Demanded booking .
            </strong>
        </div>
        <div class="col-md-12 t2-sec1">
            <div class="col-md-6 t2-sec1-1">
                <div class="t2-sec1-1-text1" style="padding-top:130px">
                    Chauffeur driver In Dubai 
                </div>
                <div class="t2-sec1-1-text2">
                    One of our service is to Provide you Chauffer driver on Daily, weekly or monthly basis.
                    You can easily avail our chauffer driver service even on a single call, our Driver mean our Pilots
                    are mannered and professional  most of them have experience of Dubai roads more than 3 years  .
                       
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
                        <h3><b>Airport Transfer</b></h3>   
                        We are specialized for airport transfer; we can take you from your hotel or residence community to 
                        any airport terminal in Dubai in your selected Luxury Car model at very affordable rates                  
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="https://images.ctfassets.net/q8mvene1wzq4/2jlBRtlrtnYXgNHoyNW14B/0c411aab3c372ecb683f8b9c751a8eee/debit_2_2x.png" style="width: 240px">
                    <div class="t2-sec1-1-text2">
                        <h3><b>Full Day Trip </b></h3>
                        If you have guests from your home country, want to explore Dubai you are far from a single call or mail ,
                        we can make memorable holiday experience ,we can offer you best possible  Chauffeur Service in Dubai                       
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="https://images.ctfassets.net/q8mvene1wzq4/1O67IjJ0C5uoPnqJehHCLK/b143d0c2d9f8200928147fd2343f6401/debit_3_2x.png" style="width: 240px">
                    <div class="t2-sec1-1-text2">
                        <h3><b>Hotel Transfer  </b></h3>   
                        Pilot & Car transport Service is dedicated to provide you best chauffeur Service in Dubai
                        with our fleet of luxury Cars including  SUV ,Sedan and luxury Minivan , for large groups we 
                        have 14 seater Toyota Hiace  , Viano and Sprinter . We can Transfer you to or from all hotels 
                        to Deira Dubai ,Bur Dubai , Seikh Zayed road hotels ,down town hotel area near Burj Al Khalifa , 
                        JBR hotels and many more 
                          
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 t2-sec1">
            <div class="col-md-6 t2-sec1-1">
                <div class="t2-sec1-1-text1" style="padding-top:130px">
                    What is best part of luxury Chauffeur Service Dubai
                </div>
                <div class="t2-sec1-1-text2">
                    We try to give you always our lowest service rates in Dubai , We are flexible about  
                    payments terms , you can pay us trough your preferred payment options and book online with ease ,
                     we guarantee you that our fares are lowest one for luxury Transport service in Dubai .                   
                </div>
            </div>
            <div class="col-md-6 t2-sec1-2">
                <img src="https://images.ctfassets.net/q8mvene1wzq4/3S21XHVz41j8cJVdkxdBDx/ca7ec94792d292d3845b5e1d721614e6/drivercenter.gif">
            </div>
        </div>
        <div class="col-md-12" style="margin:80px 0px 80px 0px">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <h1><b>OUR MOST DEMANDED LUXURY CARS<br> WITH IN DUBAI </b></h1><br><br>
                <div class="col-md-3">
                    <img src="https://images.ctfassets.net/q8mvene1wzq4/3XwA6n02C3MaQWRc8AWfEw/0bcd2f7a93662a792a1d63d38346e6d7/drivercenter_1_2x.png" style="width: 240px">
                    <div class="t2-sec1-1-text2">
                        Lexus ES 350 with chauffeur, with leather seats, 
                        Fully climate control perfect for Dubai season and road .                 
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="https://images.ctfassets.net/q8mvene1wzq4/2vYGqAsRPLA7KXi6mK1u8p/67459367e2d275069190669f5eeee912/drivercenter_2_2x.png" style="width: 240px">
                    <div class="t2-sec1-1-text2">
                        Mercedes S400 with chauffeur is another Premium class category which we own for our fleet                    
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="https://images.ctfassets.net/q8mvene1wzq4/59cz30Jvmhcj6bhnaFSbe/9f5e503d915ff216da4e443945f1d94f/drivercenter_3_2x.png" style="width: 240px">
                    <div class="t2-sec1-1-text2">
                        BMW 740 Series with Chauffeur in Dubai , Benchmarking comfort , most impressive Black color is part of our luxury cars fleet                 
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="https://images.ctfassets.net/q8mvene1wzq4/3XwA6n02C3MaQWRc8AWfEw/0bcd2f7a93662a792a1d63d38346e6d7/drivercenter_1_2x.png" style="width: 240px">
                    <div class="t2-sec1-1-text2">
                        Mercedes Viano and V class is perfect luxury van with chauffeur with large enough luggage capacity       
                    </div>
                </div><
                <div class="row" style="margin:80px 0px 0px 0px; background-color:#fbfbfb; padding:0px 10px 20px 30px">
                    <div class="col-lg-12 t2-sec1-1-text2">
                        <h1><b>Enjoy your trip with chauffeur Service Dubai </b></h1>
    
                        Whenever you visit next time, your chauffeur Service Dubai choice will be Pilot & Car Transport. 
                        Our service will never let you find any other Transport Service in the city , we have years of 
                        Experience with visitors , tours, groups and residents .
                        We are ready to help all tailor tour packages for your travel need, with Us you will save Time,
                        Energy and Money. Our trained Personal Driver and office staff ensure the Best Luxury Transport Chauffer service in Dubai 
                        <h4>We are available <br><b>24-7 Call us   +971-4 -2223201</b></h4>
                        
                    </div>
                </div>
            </div>
            
        </div>
        

    </div>
</section>
{{-- End-text-one--}}

<section style="margin:50px 0px 100px 0px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
            <div class="col-md-12" style="text-align:center; font-size:40px; color:#333333; margin:50px 0px 50px 0px">
              Check out other services
            </div>
              <span class="em-box">
              <i class="fab fa-angular" style="font-size:40px;"></i><br>
               Hotels
                <div class="em-box-border">
                  <div class="em-box-border-inner"></div>
                </div>
              </span><span class="em-box">
                  <i class="fab fa-angular" style="font-size:40px;"></i><br>
                   Hotels 
                    <div class="em-box-border">
                      <div class="em-box-border-inner"></div>
                    </div>
                  </span><span class="em-box">
                      <i class="fab fa-angular" style="font-size:40px;"></i><br>
                       Hotels
                        <div class="em-box-border">
                          <div class="em-box-border-inner"></div>
                        </div>
                      </span><span class="em-box">
                          <i class="fab fa-angular" style="font-size:40px;"></i><br>
                           Hotels
                            <div class="em-box-border">
                              <div class="em-box-border-inner"></div>
                            </div>
                          </span><span class="em-box">
                              <i class="fab fa-angular" style="font-size:40px;"></i><br>
                               Hotels
                                <div class="em-box-border">
                                  <div class="em-box-border-inner"></div>
                                </div>
                              </span><span class="em-box">
                                  <i class="fab fa-angular" style="font-size:40px;"></i><br>
                                   Hotels
                                    <div class="em-box-border">
                                      <div class="em-box-border-inner"></div>
                                    </div>
                                  </span><span class="em-box">
                                      <i class="fab fa-angular" style="font-size:40px;"></i><br>
                                       Hotels
                                        <div class="em-box-border">
                                          <div class="em-box-border-inner"></div>
                                        </div>
                                      </span><span class="em-box">
                                          <i class="fab fa-angular" style="font-size:40px;"></i><br>
                                           Hotels
                                            <div class="em-box-border">
                                              <div class="em-box-border-inner"></div>
                                            </div>
                                          </span>
            
          </div>
        </div>
      </div>
    </section>

   @include('inc.bottom-icons-one') 


@endsection




