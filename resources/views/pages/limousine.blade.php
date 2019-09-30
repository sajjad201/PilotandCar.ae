
@extends('layouts.app-two')

@section('page_title')
Limousine Service Dubai
@endsection

@section('content')



<section>
  <div style="position: relative; color:white">
    <img src="pilotpublic/images/limo/p5.jpg" class="limo-ban-img">
    <div style="position: absolute; top:20%; left:15%; color:white; font-size:60px; font-weight:900" class="frame-5">
    <span>Limousine LIMOUSINE SERVICE DUABI<br><span style="font-size:40px;"> From 9 seater to 18 seater </span></span></div>
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
          <img src="pilotpublic/images/limo/g16.jpg" class="object-image" style="width:100%; margin-top: -1rem; height:325px; ">
        </div>
      </div>
      <div class="col-md-6 st-em-col">
        <div class="row">
          <div class="col-md-6" style="padding:0px 5px">
            <div class="st-em-col-two">
              <div class="st-em-col-two-text">
                <div class="st-em-col-small-text">A Journey of Distinction</div>
              </div>
              <img src="pilotpublic/images/limo/g1.jpg" class="object-image" style="width:100%; height:200px">
            </div>
          </div>
          <div class="col-md-6" style="padding:0px 5px">
            <div class="st-em-col-two">
              <div class="st-em-col-two-text">
                <div class="st-em-col-small-text">Check in Your Bags from Home</div>
              </div>
              <img src="pilotpublic/images/limo/g15.jpg" class="object-image" style="width:100%; height:200px">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="padding:10px 5px">
              <div class="st-em-col-two">
                <div class="st-em-col-two-text">
                  <div class="st-em-col-small-text">Causine That Takes you places</div>
                </div>
                <img src="pilotpublic/images/limo/g7.jpg" class="object-image" style="width:100%; height:200px">
              </div>
            </div>
            <div class="col-md-6" style="padding:10px 5px">
              <div class="st-em-col-two">
                <div class="st-em-col-two-text">
                  <div class="st-em-col-small-text">Your Window into new world</div>
                </div>
                <img src="pilotpublic/images/limo/g12.jpg" class="object-image" style="width:100%; height:200px">
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
          <img src="pilotpublic/images/limo/g12.jpg" class="object-image" style="height:500px; width:100%; border-radius:1px">
        </div>
        <div class="col-md-5 st-ten-inf-col5">
            <h1><strong> Limousine rental Dubai   </strong></h1>
            <h4> Limousine Automobile services </h4>
              Limos are designed to accommodate large and tiny events Starting from 9 seater to 18 seater .
              Thus choosing the limousine that fits your vogue and event may be a sleek challenge. 
              Most businesses impartation limousine service have the satisfactory models of vehicles to 
              supply you associate exceptional road joy. Automobile services have become one in all the 
              foremost in-demand transportation services in the city and throughout the UAE.
              In our Fleet we have Hummer limo, Chrysler Limo  ,  Cadillac Escalade Limo  
              we can be part of your Event like Birthday Party , wedding event , take your guest 
              for Dinner , impressive Air port transfers which could be remember able moment in your life 
              Dubai is while not a doubt one amongst the head destinations for tour & visiting. The motives 
              for this are exceptional places to travel to, persistent journey and grandeur.
              These days, a widely known traveling organization conducted an online survey and determined that
              the city is that the most favored playground selected by the guests and city limousine is legendary
              for the flowery styles. The city has frequently been associated with its noted night lifestyles,
              luxurious and mind-blowing looking spots. Dubai limousine is famous for the fancy designs so you 
              can visit Variety of the world-well-known traveler spots in the city are flower field, Burj Khalifa,
              palm island, Wild Wadi Water park, Burj al Arab, Jumeirah beach and Ibn Battuta mall and then forth.


        </div>
      </div>
      </div>
  </div>
</section>

<br><br><br>
@include('inc.product-one')
<br><br><br>

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
                    You might be speculative why to lease a limousine for traveling?
                </strong>
            </div>
            <div class="col-md-12 t2-sec1">
                <div class="col-md-6 t2-sec1-1">
                    <div class="t2-sec1-1-text1" style="padding-top: 0px;;">
                        Limousine Dubai offers 
                    </div>
                    <div class="t2-sec1-1-text2">
                        Similarly, one concept that involves thoughts straightaway is that it'll be high priced. 
                        However, this isn't really due to the very fact the fare of the limo is extremely low priced
                        in city equipped you to contact correct rent a vehicle service company. By scrutiny rent with
                        completely different limousine providers, you'll be able to have a decent deal. Limousine 
                        services Dubai are noted as a result of Dubai is usually visited by tourists and businessmen.                       
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
                            You could travel in fashion by means that of hiring by way of city 
                            low-cost limousine therefore on really make your journey cozy.                   
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/2jlBRtlrtnYXgNHoyNW14B/0c411aab3c372ecb683f8b9c751a8eee/debit_2_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                            Just in case you assume limousine offerings are for moneyed 
                            best then you're ways that from the truth.                    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/1O67IjJ0C5uoPnqJehHCLK/b143d0c2d9f8200928147fd2343f6401/debit_3_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                            Hiring a limousine Dubai offers you a best ride for an occasion or 
                            event is certainly one of the ideal methods to feature exhilaration and glitz.                    
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 t2-sec1">
                <div class="col-md-6 t2-sec1-1">
                    <div class="t2-sec1-1-text1" style="padding-top: 0px;;">
                        Life's most loved sensation
                    </div>
                    <div class="t2-sec1-1-text2">
                        After you are visiting during a luxurious vehicle like a machine that's ready with current 
                        facilities it makes the journey terribly exciting. The phrase limo in itself may be a definition
                       on luxurious. It cannot get any further. Its miles life's most loved sensation. Hiring a limo for
                        an event or event is actually one amongst the perfect strategies to feature joyfulness and loudness
                        Limo ride Dubai provides you a comfortable and luxurious journey.  
                       This can be an unprecedented plan because of the very fact your journey to the preferred
                        destination is terribly comfortable. The state of affairs of public delivery in the city
                       is never sure this is why its miles typically helpful to lease a luxury automobile in the
                        city just in case you would like to journey around the town in associate comfortable approach.
                        Hiring a luxury automobile rental in the city is extremely simple. In reality, that's one in all the explanations why
                        it's so much one of the utmost desired destinations for vacationers from around the arena. There are many limousine 
                        companies in Dubai businesses in Dubai that provide their services in the town. The price for limo rental Dubai is 
                        affordable they offers low prices limousine Dubai price is considered cheap and affordable.
                   
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
                          <strong>Limousine companies in Dubai </strong><br>
                            Hiring a luxury automobile rental in the city is extremely simple. In reality, 
                            that's one in all the explanations why it's so much one of the utmost desired 
                            destinations for vacationers from around the arena. There are many limousine 
                            companies in Dubai businesses in Dubai that provide their services in the town. 
                            The price for limo rental Dubai is affordable they offers low prices limousine 
                            Dubai price is considered cheap and affordable.                    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/2vYGqAsRPLA7KXi6mK1u8p/67459367e2d275069190669f5eeee912/drivercenter_2_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                            <strong>Most Selling Limousine Packages: </strong><br>
                            Mostly we full fill client demand on hourly basis, Half day Dubai City tour or sightseeing is another High Demanded                  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/59cz30Jvmhcj6bhnaFSbe/9f5e503d915ff216da4e443945f1d94f/drivercenter_3_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                            <strong>We have Years of Experience for: </strong><br>
                            <div class="list-flex">
                              <div>Airport Transfer limo</div><div>Wedding Limo</div><div>Dubai City tours limo</div>
                              <div>Stretch Limo Dubai</div><div>Corporate Event Limo</div><div>Stretch Limo for Weddings</div>
                              <div>Limo Ride Dubai Price</div><div>Dinner Drop off </div><div>Graduation parties Limo</div>
                              <div>Stretch Limo For Birthday Parties</div><div>Limousine Dubai Deals</div>
                            </div>                  
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
                <img src="pilotpublic/images/9.jpg" style="height:300px">
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
                <img src="pilotpublic/images/8.jpg" style="height:300px">
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
            <a href="luxury-buses-and-coaches" target="_blank">
                <i class="fab fa-angular" style="font-size:40px;"></i><br>
                Luxury Buses
                <div class="em-box-flex-link-bor">
                    <div></div>
                </div>
            </a>
            <a href="dubai-city-tours-and-sightseeing" target="_blank">
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
            <a href="luxury-vans" target="_blank">
                <i class="fab fa-angular" style="font-size:40px;"></i><br>
                Luxury Vans
                <div class="em-box-flex-link-bor">
                    <div></div>
                </div>
            </a>

        </div>
    </div>
</section>
@include('inc.bottom-icons-one')      
    
@endsection




