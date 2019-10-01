
@extends('layouts.app-two')

@section('page_title')
    ABOUT US
@endsection

@section('content')
<section>
  <div style="position: relative; color:white">
    <img src="pilotpublic/images/19.jpg">
    <div style="position: absolute; top:35%; left:35%; color:gray; font-size:60px; font-weight:900">ABOUT US</div>
  </div>
</section>

<div class="about-bg">
<section>
	<div class="container mb-60">
		<h1 class="about-h1">Our Heritage</h1>
		<p class="about-p">About Pilot & Car Transport Service Dubai			</p>
		<p class="">Discover our milestones by clicking the decade that you.</p>
	</div>
</section>

<section  data-spy="scroll" data-target="#myScrollspy" data-offset="20" style="position: relative">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-xs-9">
				<div class="about-main">
					<div class="about-inner" id="section1">
						<div class="about-pic-cnt">
							<h3 class="about-inner-h3">Pilot & Car 2019</h3>
							<div class="about-pic">
								<img src="pilotpublic/images/h6.jpg" class="img-fluid">
							</div>
							<div class="about-pic-p">
							<p>We have been operating a top quality transport service across Dubai, United Arab Emirates for more than 
								13 years now and have become experts at handling large and complex bookings for our corporate customers.
								 Pilot & Car Transport Service Dubai chose to specialize within the hospitality industry by offering only
								  experiences of exceptional quality. Our objective is to be recognized as the company that operates the 
								  finest limo, car & bus rental service in Dubai. Our company is well known to be a five-star rated limo 
								  service and one of the leading car, limo and luxury Bus service providers in UAE. Many travelers have 
								  chosen to reward our car services with 5-star reviews on Google. These clients’ support and referral, 
								  continues to boost our growth and to them, we stay committed to offering the best quality service at all times.
								</p>
							</div>
						</div>
						<div class="about-border">
							<span class="fa fa-circle"></span>
							<i class="fa fa-caret-left" aria-hidden="true"></i>
						</div>
					</div>
					<div class="about-inner" id="section2">
						<div class="about-border">
							<span class="fa fa-circle"></span>
							<i class="fa fa-caret-left" aria-hidden="true"></i>
						</div>
						<div class="about-pic-cnt">
							<h3 class="about-inner-h3">Pilot & Car 2018</h3>
							<div class="about-pic">
								<img src="pilotpublic/images/chaf2/p3.jpg" class="img-fluid">
							</div>
							<div class="about-pic-p">
							<p>We have been operating a top quality transport service across Dubai, United Arab Emirates for more than 13 years now 
								and have become experts at handling large and complex bookings for our corporate customers. Our service includes 
								luxury buses hire at affordable prices and bring comfortable and accessible travel to everyone through our nationwide
								network. Bringing you a customer service team who have been highly trained to ensure that our clients get the best 
								customer service available at all times.
								Our team is able to cater for all your needs from the commencement to completion of 
								your travel plan and our Operation manager is available 24/7 to help with your every need.
								When you choose Pilot & Car Transport Service Dubai, you are choosing a premium service 
								without the premium price tag, giving you the quality service that you deserve!
								</p>
							</div>
						</div>
					</div>
					<div class="about-inner" id="section3">
						<div class="about-border">
							<span class="fa fa-circle"></span>
							<i class="fa fa-caret-left" aria-hidden="true"></i>
						</div>
						<div class="about-pic-cnt">
							<h3 class="about-inner-h3">Pilot & Car 2017</h3>
							<div class="about-pic-p">
							<p>Pilot & Car Transport Service Dubai aims to provide the best 
								possible transportation to all travelers in the best level of quality service that stresses safety, 
								reliability and comfort. In order to achieve our mission, we have consistently recruited the most 
								experienced drivers in the industry. We conduct scheduled vehicle inspections and driver training 
								programs to ensure that each passenger travels safely and securely when using our service. We have 
								adopted the most advanced computer and communication technology.
								Our operating staff is available to provide prompt and expeditious service to all of our passengers, 
								both when placing a reservation and traveling in our vehicles. As we continue to expand our fleet, 
								client-base and geographical boundaries, we are increasingly able to accommodate our diverse clientele
								with their transportation needs. Our objective is to provide the best possible service at the best 
								possible price and that is just one of the reasons our customers keep coming back time after time.
							</p>
							</div>
							
						</div>
					</div>
					
					
				</div>
			</div>
			<div class="col-md-4 col-xs-3" id="myScrollspy" >
				<div class="about-lict-cnt" data-spy="affix" data-offset-top="197">
					<ul class="about-ul">
						<li><a class="au-active" href="#section1">Recent</a></li>
						<li><a href="#section2">2018-2019</a></li>
						<li><a href="#section3">2017-2018</a></li>
						<li><a href="#section4">2016-2017</a></li>
						<li><a href="#section5">2015-2016</a></li>
						<li><a href="#section6">2014-2015</a></li>
						<li><a href="#section7">2013-2014</a></li>
						<li><a href="#section8">2012-2013</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
$(document).ready(function(){
	$('.about-ul li a').on('click', function(){
		$('.au-active').removeClass('au-active');
		$(this).addClass('au-active');
	});
});
</script>
</div>    

@endsection




