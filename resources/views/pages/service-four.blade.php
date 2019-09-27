
@extends('layouts.app-two')

@section('page_title')
    SERVICE ELEVEN
@endsection

@section('content')


<section class="hyatt-hero bg-pic" style="background-image: url(pilotpublic/images/hyatt-hero.jpg); min-height: 625px;">
  <div class="hh-txt-cnt animated fadeInDown">
    <!-- <h1>Welcome to <span style="color:#FF7C17">Beautiful</span> Place</h1> -->
    <div id="container1">
  Welcome
  <div id="flip">
    <div><div>Beautifull</div></div>
  </div>
  Place
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
          <a href="{{url('#')}}">Service Four <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br><br><br>


<section>
  <div class="container">
  <h1 class="text-center hyatt-h1">Offers</h1>
    <div class="row">
      <div class="col-md-7">
        <div class="hyatt-img-cnt">
          <img src="pilotpublic/images/break.jpg" class="img-fluid">
        </div>
      </div>
      <div class="col-md-5">
        <div class="hyatt-txt-cnt">
          <h2 class="hyatt-h2">The Big Break</h2>
          <p class="hyatt-p">Save up to 20% on advance purchase bookings at Pilot and Cars worldwide</p>
          <a href="#" class="hyatt-btn">See Details</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pb-lg90" style="min-height: 900px;">
  <div class="container">
  <h1 class="hyatt-h1">Meet Pilot and Cars</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="hyatt-img">
          <img src="pilotpublic/images/h1.jpg" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6 rel">
        <div class="hyatt-txt-cnt h-pad2">
          <p class="hyatt-p">At Hyatt Place hotels, we understand that every trip has a purpose, and every stay should be an opportunity to recharge and make the next day more successful than the one before. After all, you never settle. So neither do we.</p>
        </div>
        <div class="hyatt-img-abs">
            <img src="pilotpublic/images/h2.jpg" class="img-fluid">
          </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container rel">
    <div class="row">
    <img src="pilotpublic/images/hyatt-bg.jpg" class="img-fluid mb-35">
      <div class="abs-head2 bg-pic" style="background-image: url(pilotpublic/images/TapeCenter.svg);">
        <h4>Traveling</h4>
      </div>
      <div class="mb-18" style="min-height: 385px;">
                <div class="col-md-6">
        <div class="hyatt-img-cnt">
          <img src="pilotpublic/images/hyatt3.jpg" class="img-fluid">
        </div>
      </div>

      <div class="col-md-6">
        <div class="hyatt-txt">
          <h3 class="hyatt-h3">Wake up to breakfast every day</h3>
          <p class="hyatt-p mb-18 pb-0">Wake up to breakfast served fresh every day. Start your morning with hot breakfast items, fresh fruit, local and regional specialties, and more. Pair your breakfast with coffee, milk, juice, or tea.</p>
          <p class="hyatt-p mb-18 pb-0">Breakfast is free with your World of Hyatt membership when you book an eligible rate at participating Hyatt Place hotels. Not a member? Join as you book to enjoy free breakfast starting with your first stay.</p>
          <p class="hyatt-p-bold"><em>Eligible rates are defined in the World of Hyatt program terms (see worldofhyatt.com/terms). Eligibility for complimentary breakfast may vary at Hyatt Place hotels outside the United States. In Europe, the Middle East, Africa, and India, complimentary breakfast may not be available to all members. Please speak with a hotel representative for details.</em></p>
        </div>
      </div>
      </div>

              <div class="mb-18" style="min-height: 385px">
                <div class="col-md-6">
        <div class="hyatt-img-cnt">
          <img src="pilotpublic/images/h8.jpg" class="img-fluid">
        </div>
      </div>

      <div class="col-md-6">
        <div class="hyatt-txt">
          <h3 class="hyatt-h3">Book anytime, 24 hours a day</h3>
          <p class="hyatt-p mb-18 pb-0">Our 24/7 Gallery Menu features craft cocktails and freshly prepared bar bites and shareables made with premium ingredients. On the go? Head to the 24/7 Gallery Market for prepackaged salads, snacks, and desserts.</p>
        </div>
      </div>
      </div>

    </div>
  </div>
</section>

<section class="mt-100">
  <div class="container-fluid">
    <div class="row">
      <div class="hyatt-main">
        <div class="hyattmain-inner">
          <div class="col-md-7">
            <div class="h-inner-img">
              <img src="pilotpublic/images/h5.jpg" class="img-fluid">
              <div class="abs-head3 bg-pic" style="background-image: url(pilotpublic/images/TapeCenter.svg);">
                <h4>Services</h4>
              </div>
              <img src="pilotpublic/images/mask.webp" class="abs4">
            </div>
          </div>
          <div class="col-md-5">
            <img src="pilotpublic/images/flair.svg" class="flair">
            <p class="hyatt-p h-pad2">Work whenever and wherever you want with work spaces designed around you. Go from your room's spacious desk to the 24/7 Business Center to the inspiring Gallery. Hosting a group? Our hotels offer meeting spaces equipped with audiovisual features, catering, and a customizable room setup.</p>
          </div>
        </div>
        <div class="hyattmain-inner">
          <div class="col-md-5">
            <img src="pilotpublic/images/flair.svg" class="flair">
            <p class="hyatt-p h-pad2">Work whenever and wherever you want with work spaces designed around you. Go from your room's spacious desk to the 24/7 Business Center to the inspiring Gallery. Hosting a group? Our hotels offer meeting spaces equipped with audiovisual features, catering, and a customizable room setup.</p>
          </div>
          <div class="col-md-7">
            <div class="h-inner-img">
              <img src="pilotpublic/images/h6.jpg" class="img-fluid">
              <div class="abs-head3 bg-pic" style="background-image: url(pilotpublic/images/TapeCenter.svg);">
                <h4>Services</h4>
              </div>
              <img src="pilotpublic/images/mask.webp" class="abs4 abs-inverse">
            </div>
          </div>
        </div>
        <div class="hyattmain-inner">
          <div class="col-md-7">
            <div class="h-inner-img">
              <img src="pilotpublic/images/h7.jpg" class="img-fluid">
              <div class="abs-head3 bg-pic" style="background-image: url(pilotpublic/images/TapeCenter.svg);">
                <h4>Services</h4>
              </div>
              <img src="pilotpublic/images/mask.webp" class="abs4">
            </div>
          </div>
          <div class="col-md-5">
            <img src="pilotpublic/images/flair.svg" class="flair">
            <p class="hyatt-p h-pad2">Work whenever and wherever you want with work spaces designed around you. Go from your room's spacious desk to the 24/7 Business Center to the inspiring Gallery. Hosting a group? Our hotels offer meeting spaces equipped with audiovisual features, catering, and a customizable room setup.</p>
          </div>
        </div>
        <div class="hyattmain-inner">
          <div class="col-md-5">
            <img src="pilotpublic/images/flair.svg" class="flair">
            <p class="hyatt-p h-pad2">Work whenever and wherever you want with work spaces designed around you. Go from your room's spacious desk to the 24/7 Business Center to the inspiring Gallery. Hosting a group? Our hotels offer meeting spaces equipped with audiovisual features, catering, and a customizable room setup.</p>
          </div>
          <div class="col-md-7">
            <div class="h-inner-img">
              <img src="pilotpublic/images/h8.jpg" class="img-fluid">
              <div class="abs-head3 bg-pic" style="background-image: url(pilotpublic/images/TapeCenter.svg);">
                <h4>Services</h4>
              </div>
              <img src="pilotpublic/images/mask.webp" class="abs4 abs-inverse">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('inc.product-four')
<br><br><br><br><br><br> 
<section>
	<div class="container">
	<div class="rel-h1">
					<h1 class="text-center" style="color:black">Related Pages</h1>
				</div>
		<div class="row">
			<div class="col-md-4 mt-5">
			<div class="os8-rel-cnt bs-8">
				<div class="os8-rel-img-cnt">
					<img src="pilotpublic/images/os81.jpg" class="img-fluid">
				</div>
				<div class="os8-rel-txt-cnt">
					<a href="">Seating</a>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			</div>
			<div class="col-md-4 mt-5">
			<div class="os8-rel-cnt bs-8">
				<div class="os8-rel-img-cnt">
					<img src="pilotpublic/images/os84.jpg" class="img-fluid">
				</div>
				<div class="os8-rel-txt-cnt">
					<a href="">Seating</a>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			</div>
			<div class="col-md-4 mt-5">
			<div class="os8-rel-cnt bg-white bs-8-3">
				<ul class="related-list">
					<li class="related-list-iner"><a href="#">Dining <i class="fa fa-angle-right"></i></a></li>
					<li class="related-list-iner"><a href="#">Dining <i class="fa fa-angle-right"></i></a></li>
					<li class="related-list-iner"><a href="#">Dining <i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
			</div>
		</div>
	</div>
</section>
<br><br><br>
@include('inc.bottom-icons-one')

@endsection




