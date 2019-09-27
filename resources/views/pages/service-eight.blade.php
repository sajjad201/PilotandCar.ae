
@extends('layouts.app-two')

@section('page_title')
    SERVICE EIGHT
@endsection

@section('content')


<section class="os8-hero bg-pic" style="background-image: url(pilotpublic/images/os81.jpg);">
	<div class="os8-hero-cnt">
		<div class="os8-hero-txt-cnt container2">
			<h1 class="os-8-h1 text1">CABIN FEATURES</h1>
			<h3 class="text2">Relax in comfortable seats in every class. Travel better with Pilots and Car</h3>
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
          <a href="{{url('#')}}">Service Eight <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br><br><br>
<section>
	<div class="container" style="padding-left:30px; font-size:40px; font-weight:900; color:navy">
		<span>CHEKCOUT NEW STYLES</span>
	</div>
</section>
<br>
<section>
	<div class="container">
		<div class="row class">
			<div class="col-md-7 pr-lg-0">
				<div class="pr-img-height">
				<a href="#" class="class-img bg-pic block" style="background-image: url(pilotpublic/images/os82.jpg);"></a>
					
				</div>
			</div>
			<div class="col-md-5 pl-lg-0 pt-5">
				<div class="class-txt">
					<h3>First Class</h3>
					<p>Travel First Class and arrive inspired. Slide the privacy doors closed, choose your entertainment and unwind in your own world.</p>
					<a href="#">Explore More...</a>
				</div>
			</div>
		</div>

		<div class="row class">
			<div class="col-md-5 pr-lg-0 pt-5">
				<div class="class-txt">
					<h3>Business Class</h3>
					<p>Travel Business Class and arrive inspired. Slide the privacy doors closed, choose your entertainment and unwind in your own world.</p>
					<a href="#">Explore More...</a>
				</div>
			</div>
			<div class="col-md-7  pl-lg-0">
				<div class="pr-img-height">
				<a href="#" class="class-img bg-pic block" style="background-image: url(pilotpublic/images/os84.jpg);"></a>
					
				</div>
			</div>
			
		</div>

		<div class="row class">
			<div class="col-md-7 pr-lg-0">
				<div class="pr-img-height">
				<a href="#" class="class-img bg-pic block" style="background-image: url(pilotpublic/images/os83.jpg);"></a>
					
				</div>
			</div>
			<div class="col-md-5 pl-lg-0 pt-5">
				<div class="class-txt">
					<h3>Economy Class</h3>
					<p>Travel Economy Class and arrive inspired. Slide the privacy doors closed, choose your entertainment and unwind in your own world.</p>
					<a href="#">Explore More...</a>
				</div>
			</div>
		</div>
	</div>
</section>
<br><br> 
<section class="0s8-bottom">
	<div class="container bg-pic" style="background-image: url(pilotpublic/images/cabin.jpg); border-radius: 4px;">
		<div class="row">
			<div class="col-md-12">
				<div class="bottom-inner">
					<div class="bottom-txt">
						<p class="os8-p">Immersive Experience</p>
						<h1 class="os8-h1">Explore Our Services</h1>
						<p class="os8-p">Get the full Pilot and Car luxury experience</p>
					</div>
					<div class="bottom-btn-cnt ">
						<button href="#" class="btn btn-warning">Book Now</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br><br><br><br><br><br> 
@include('inc.product-five')

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

@include('inc.bottom-icons-one') 
    
@endsection




