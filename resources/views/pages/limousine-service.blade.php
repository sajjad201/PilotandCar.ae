
@extends('layouts.app-two')

@section('page_title')
Limousine services Dubai 
@endsection

@section('tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection

@section('content')


<section class="bg-img-int bg-pic" style="background-image: url(pilotpublic/images/limo/g12.jpg); height: 700px;">

<div class="bg-txt-cnt">
<div class="bg-txt-inner animated zoomIn" style="    background-color: rgba(255, 255, 255, 0.9);  ">
    <h1 class="text-center animated fadeInDown" style="font-weight:700; animation-delay: .5s;">Limousine services Dubai </h1>
  <p class="text-center animated fadeInUp" style="animation-delay: 1s;">
      Limos are designed to accommodate large and tiny events Starting from 9 seater to 18 seater . 
      Thus choosing the limousine that fits your vogue and event may be a sleek challenge. Most businesses 
      impartation limousine service have the satisfactory models of vehicles to supply you associate exceptional 
      road joy. Automobile services have become one in all the foremost in-demand transportation services in
      the city and throughout the UAE.
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
          <a href="{{url('#')}}">Dubai International Airport <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>



<style>
.wrapper {
  margin:0px;
}
</style>
<section class="wrapper os-2-wrap" style="color:#313131; background-color:#f2f2f2; padding:60px 0px 60px 0px">
  <div class="container">
    <div class="col-md-12"><h1 style="color:#034F84"><strong>BOOK RIDES NOW<br><br></strong></h1></div>
    
      <div class="col-md-4" style="margin-bottom: 30px;">
        <div class="os-2-cont">
          <div class="os-2-img-cont rel">
            <img src="pilotpublic/images/limo/g10.jpg" style="height:200px; width:100%" class="object-image">
            <h3 class="abs-head">Hong Kong SAR </h3>
            <span class="fa fa-star abs-icon"></span>
          </div>
          <div class="os2-txt-cont">
            <div class="overlay1">
              <span class="overlay1-txt">
                <div class="overlay1-txt-sm">Hourly Ride</div> 
                <?php $link="pilotpublic|images|limo|g10.jpg" ?>  
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
                  <?php $link="pilotpublic|images|limo|g10.jpg" ?>  
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
            <img src="pilotpublic/images/limo/g14.jpg" style="height:200px; width:100%" class="object-image">
            <h3 class="abs-head">Hong Kong SAR </h3>
            <span class="fa fa-star abs-icon"></span>
          </div>
          <div class="os2-txt-cont">
            <div class="overlay1">
              <span class="overlay1-txt">
                <div class="overlay1-txt-sm">Hourly Ride</div> 
                <?php $link="pilotpublic|images|limo|g14.jpg" ?>  
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
                  <?php $link="pilotpublic|images|limo|g14.jpg" ?>  
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
            <img src="pilotpublic/images/limo/g7.jpg" style="height:200px; width:100%" class="object-image">
            <h3 class="abs-head">Hong Kong SAR </h3>
            <span class="fa fa-star abs-icon"></span>
          </div>
          <div class="os2-txt-cont">
            <div class="overlay1">
              <span class="overlay1-txt">
                <div class="overlay1-txt-sm">Hourly Ride</div> 
                <?php $link="pilotpublic|images|limo|g14.jpg" ?>  
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
                  <?php $link="pilotpublic|images|limo|g14.jpg" ?>  
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
     



<section class="os6-sec wrapper">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="os6-h1" style="font-size:36px; font-weight:700">Royal First Class</h1>
      <img src="pilotpublic/images/limo/g16.jpg" class="img-fluid object-image" style="height:450px; width:100%"><br><br><br>
      <h1 class="os6-h1" style="font-size:36px; font-weight:700">The Experience</h1>
      <p class="os6-p" style="font-family: calibri;">
          In our Fleet we have Hummer limo, Chrysler Limo  ,  Cadillac Escalade Limo  
          we can be part of your Event like Birthday Party , wedding event , take your guest 
          for Dinner , impressive Air port transfers which could be remember able moment in your life 
          Dubai is while not a doubt one amongst the head destinations for tour & visiting. 
          The motives for this are exceptional places to travel to, persistent journey and grandeur.
          These days, a widely known traveling organization conducted an online survey and determined that the city 
          is that the most favored playground selected by the guests and city limousine is legendary for the flowery styles.
          The city has frequently been associated with its noted night lifestyles, luxurious and mind-blowing looking spots. 
          Dubai limousine is famous for the fancy designs so you can visit Variety of the world-well-known traveler spots in 
          the city are flower field, Burj Khalifa, palm island, Wild Wadi Water park, Burj al Arab, Jumeirah beach and Ibn 
          Battuta mall and then forth.
      </p>
      <br>
      
      <div class="row gal-cnt">
        <div class="col-md-8" style="padding: 5px;">
          <img src="pilotpublic/images/gal1.jpg" class="gal-img object-image">
        </div>
        <div class="col-md-4" style="padding: 5px;">
          <img src="pilotpublic/images/limo/p3.jpg" class="gal-img object-image">
        </div>
      </div>
      <div class="row gal-cnt">
        <div class="col-md-7" style="padding: 5px;">
          <img src="pilotpublic/images/gal3.jpg" class="gal-img object-image">
        </div>
        <div class="col-md-5" style="padding: 5px;">
          <img src="pilotpublic/images/limo/p2.jpg" class="gal-img object-image">
        </div>
      </div>
      
      <div class="os6-p" style="font-family: calibri; font-weight:600; font-size:30px">limousine Dubai prices</div>
      <div class="os6-p" style="font-family: calibri; font-weight:600">Hire a Luxury Automobile</div>
      <p class="os6-p" style="font-family: calibri;">
          Hiring a luxury automobile rental in the city is extremely simple. In reality, that's one in all 
          the explanations why it's so much one of the utmost desired destinations for vacationers from around 
          the arena. There are many limousine companies in Dubai businesses in Dubai that provide their services in the town.
          The price for limo rental Dubai is affordable they offers low prices limousine Dubai price is considered cheap and affordable.
      </p>
  

      <br><br><br>
      <h1 class="os6-h1" style="font-size:36px; font-weight:700">FIXED & GUARANTED RATES UNTIL YOUR DESTINATION</h1>
      <img src="pilotpublic/images/limo/p1.jpg" class="object-image" style="height:550px">
      
      <div class="row">
        <div class="col-md-8" style="padding: 5px;">
          <img src="pilotpublic/images/limo/g5.jpg" class="gal-img object-image">
        </div>
        <div class="col-md-4" style="padding: 5px;">
          <img src="pilotpublic/images/gal3.jpg" class="gal-img object-image">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4" style="padding: 5px;">
          <img src="pilotpublic/images/limo/g6.jpg" class="gal-img object-image">
        </div>
        <div class="col-md-8" style="padding: 5px;">
          <img src="pilotpublic/images/limo/g12.jpg" class="gal-img object-image">
        </div>
      </div>
      
    </div>
  </div>
</div>
</section>

<section>
  <div class="container">
    <div class="os14-h1">Transport Services</div>

    <div class="col-md-6" style="padding:0px">
      <p class="os14-inner-p">Find out more about accompanying facilities and services.</p>
      <a href="rent-a-car-with-driver"  target="_blank">
        <div class="os14-inner-cnt">
          <div class="col-md-4">
            <div class="os14-sec2-inner">
              <img src="pilotpublic/images/limo/g2.jpg" class="img-fluid" style="height:120px; width:100%">
            </div>
          </div>
          <div class="col-md-8">
            <div class="os14-sec2-inner2">
              <h5>Rent A Car With Driver</h5>
              <h3 style="font-size:12px; line-height:15px; color:gray">
                  Dubai, it’s strongly recommended to rent a car with driver in Dubai. 
              </h3>
            </div>
          </div>
        </div>
      </a>
      <a href="chauffeur-service"  target="_blank">
        <div class="os14-inner-cnt">
          <div class="col-md-4">
            <div class="os14-sec2-inner">
              <img src="pilotpublic/images/limo/g1.jpg" class="img-fluid" style="height:120px">
            </div>
          </div>
          <div class="col-md-8">
            <div class="os14-sec2-inner2">
              <h5>Chauffeur Service</h5>
              <h3 style="font-size:12px; line-height:15px; color:gray">
                  Our all Professional Chauffeur are smartly dressed in black color suits. 
              </h3>
            </div>
          </div>
        </div>
      </a>
      <a href="limousine-service"  target="_blank">  
        <div class="os14-inner-cnt">
          <div class="col-md-4">
            <div class="os14-sec2-inner">
              <img src="pilotpublic/images/limo/g7.jpg" class="img-fluid" style="height:120px">
            </div>
          </div>
          <div class="col-md-8">
            <div class="os14-sec2-inner2">
              <h5>Limousine Service</h5>
              <h3 style="font-size:12px; line-height:15px; color:gray">
                  Most businesses impartation limousine service have the satisfactory models of vehicles to supply you associate exceptional road joy. 
              </h3>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6" style="padding:60px 100px 0px 50px">
      <div class="os8-rel-cnt bg-white bs-8-3">
				<ul class="related-list">
					<li class="related-list-iner"><a href="bus-rental-dubai" target="_blank">Luxury Duses and Coaches<i class="fa fa-angle-right"></i></a></li>
					<li class="related-list-iner"><a href="dubai-city-tour" target="_blank"> Dubai City Tours and Sightseeing<i class="fa fa-angle-right"></i></a></li>
          <li class="related-list-iner"><a href="vans" target="_blank">Luxury Vans<i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
    </div>
  </div>
</section>

<section>
  <div class="container" style="margin-top:50px">
      <p class="os6-p" style="font-family: calibri;">
          <div class="os6-p" style="font-family: calibri; font-weight:600">CARS WITH A ALOT OF LUGGAGE SPACE</div> 
          <p class="os6-p" style="font-family: calibri;">
            One concept that involves thoughts straightaway is that it'll be high priced. However, this isn't really due to the 
            very fact the fare of the limo is extremely low priced in city equipped you to contact correct rent a vehicle service company. 
            By scrutiny rent with completely different limousine providers, you'll be able to have a decent deal. Limousine services Dubai 
            are noted as a result of Dubai is usually visited by tourists and businessmen.
            You could travel in fashion by means that of hiring by way of city low-cost limousine therefore on really make your journey cozy. Just in
            case you assume limousine offerings are for moneyed best then you're ways that from the truth. Hiring a limousine Dubai offers you a best
            ride for an occasion or event is certainly one of the ideal methods to feature exhilaration and glitz. After you are visiting during a 
            luxurious vehicle like a machine that's ready with current facilities it makes the journey terribly exciting. The phrase limo in itself 
            may be a definition on luxurious. It cannot get any further. Its miles life's most loved sensation. Hiring a limo for an event or event 
            is actually one amongst the perfect strategies to feature joyfulness and loudness. . Limo ride Dubai provides you a comfortable and luxurious
            journey.  This can be an unprecedented plan because of the very fact your journey to the preferred destination is terribly comfortable. 
            The state of affairs of public delivery in the city is never sure this is why its miles typically helpful to lease a luxury automobile in
            the city just in case you would like to journey around the town in associate comfortable approach. 
               
          </p> 
      </p>
  </div>
</section>
    
@include('inc.bottom-icons-two')    
@endsection




