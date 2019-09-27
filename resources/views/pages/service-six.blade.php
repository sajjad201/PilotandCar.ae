
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
      <p class="os6-p" style="font-family: calibri;">Impeccability is our way to fulfill all of your needs on your journey, within our elegant surroundings integrated with Thai culture and heritage to offer the finest first class experience to you.</p>
      <p class="os6-p" style="font-family: calibri;">In our spacious first class cabin, savour fine champagne and silken caviar as it is served to greet you on board, whilst you feel completely at ease on a fully horizontal bed in the tranquility of your semi-private suite.</p>
      <p class="os6-p" style="font-family: calibri;">Relax and reawaken your senses before the flight with our “Touch of Silk”, indulgent full body oil massage or experience the traditional Thai style massage with our Royal Thai massage at the Royal First Lounge of Bangkok’s Suvarmabhumi Airport.</p>
      <br><br><br>
      <h1 class="os6-h1" style="font-size:36px; font-weight:700">Royal First Class Seats</h1>
      <p class="os6-p" style="font-family: calibri;">Our cabins are meticulously designed using traditional Thai motifs with a contemporary interior. A diverse range of elegant cabins and seats are available on our various routes and aircraft for your mesmorising journey. The finest of THAI service, while in absolute comfort, and an impeccable service. Innovative, gourmet, culinary delights along with luxurious amenities, in-flight lounge areas and even changing rooms to allow you to freshen up and slip into something more comfortable.</p>
      <p class="os6-p" style="font-family: calibri;">Fly in First class privacy on our Airbus A380s and the newly remodelled Boeing 747s. Both of which provide specious 8 feet long semi-private suites. Our Boeing 747s are equipped with seats with a width of 23 inches and the Airbus A380s with a seat an expansive width of 27 inches.</p>
      <p class="os6-p" style="font-family: calibri;">Choose from approximately 130 must-see movies, 300 TV programmes and enjoy around 500 music CDs. Also have a little fun with the variety of games and special features on our In-flight entertainment systems on an interactive 23 inch flat screen monitor.</p>
      <p class="os6-p" style="font-family: calibri;">Additionally, Boeing 747s and Airbus A340s offer luxury pod designs equipped with 180-degree fully flat beds at almost 7 feet of private space between each Royal First seat. Each seat has a generous minimum of 21 inches in width. All of our flat screens offer the same range of on demand audio and video platforms.</p>

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
      <h1 class="os6-h1" style="font-size:36px; font-weight:700">Amenities</h1>
      <img src="pilotpublic/images/gal4.jpg" class="img-fluid">
      <p class="os6-p" style="font-family: calibri;">Royal First Class travelers enjoy luxurious comfort in every aspect, including bespoke amenities to soothe and scent the journey. On intercontinental flights lasting six hours or more, comfort wear and slippers are provide, while on all flights a beautiful tailored travel kit is provided with a range of designer toiletries and accessories.</p>
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
      <p class="os6-p" style="font-family: calibri;">Soft down pillows and fine cloth blankets make sleeping a dream within each semi-private suite while dedicated Royal First Class lavatories are stocked with soft linen towels and a range of toiletries for ladies and gentlemen for refreshment at any time during the flight.</p>
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




