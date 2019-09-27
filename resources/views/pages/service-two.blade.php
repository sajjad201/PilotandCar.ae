
@extends('layouts.app-two')

@section('page_title')
    SERVICE TWO
@endsection

@section('content')


<section>
  <div style="position: relative; color:white">
    <img src="pilotpublic/images/18.jpg">
    <div style="position: absolute; top:35%; left:35%; color:white; font-size:60px; font-weight:900" class="animated fadeIn">PILOT AND CAR</div>
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
          <a href="{{url('#')}}">Service Two <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<br><br><br>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="padding:0px; font-size:55px; color:navy">
        <div class="col-md-12" style="padding:0px"><strong>CHECK AWESOME SERVICES</strong></div>
      </div>
    </div>
  </div>
</section>
<br>

<link rel="stylesheet" type="text/css" href="pilotpublic/css/testing.css">
<section>
  <div class="iw_component" id="1530865241414"><div class="offers_promotion_p">  
    <div id="hotels" class="bl_op_a fst" style="background-color:#fbfbfb !important">
      <div class="container">
        <div class="special_block">
          <div class="main_slide">
            <div class="slide_pro slide"><div>
              <img alt="" src="https://www.thaiairways.com/static/common/images/travel-extras/HOTELS.jpg" class="sh_pic img-responsive"></div>
            </div>
            <div class="slide_fix"><div>
            <div class="bl_pro">
              <h2 tabindex="0" class="l">Hotels</h2>
              <p tabindex="0" class="desc">Find the best accommodation for your pleasant journey. THAI offer you a wide range of quality hotels, resorts, homes, and vacation rentals worldwide with special rates. Book your hotel with THAI and enjoy your stay.</p>
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>
  </div>
  
  
  <div id="carrental" class="bl_op_b">
    <div class="container">
      <div class="special_block">
        <div class="main_slide">
          <div class="slide_pro slide"><div>
            <img alt="" src="https://www.thaiairways.com/static/common/imgscontent/TravelExtras/carrental.jpg" class="sh_pic img-responsive"></div>
          </div>
          <div class="slide_fix"><div>
          <div class="bl_pro">
            <h2 tabindex="0" class="l">Car Rental</h2>
            <p tabindex="0" class="desc">Search, Compare &amp; Save - Compare 900 companies at over 53,000 locations. Best price guaranteed.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  
  
  <div id="airporttransfer" class="bl_op_a">
    <div class="container">
      <div class="special_block">
        <div class="main_slide">
          <div class="slide_pro slide"><div>
            <img alt="" src="https://www.thaiairways.com/static/common/images/travel-extras/AIRPORTTRANSFER.jpg" class="sh_pic img-responsive"></div>
          </div>
        <div class="slide_fix gray_travelextra"><div>
          <div class="bl_pro">
            <h2 tabindex="0" class="l">Airport Transfer</h2>
            <p tabindex="0" class="desc">Offering you airport to city and resort transfers in over 12,000 destinations across 130 countries around the world.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  
  
  <div id="xbag" class="bl_op_a">
    <div class="container">
      <div class="special_block">
        <div class="main_slide">
          <div class="slide_pro slide"><div>
            <img alt="" src="https://www.thaiairways.com/static/common/imgscontent/TravelExtras/exbag_01.jpg" class="sh_pic img-responsive"></div>
          </div>
          <div class="slide_fix reverse"><div>
          <div class="bl_pro">
            <h2 tabindex="0" class="l">Extra Baggage Allowance</h2>
            <p tabindex="0" class="desc">Passengers on THAI flights can pre-purchase extra baggage allowance online no less than 24 hours prior to their departures.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  
  
  <div id="meals" class="bl_op_b">
    <div class="container">
      <div class="special_block">
        <div class="main_slide">
          <div class="slide_pro slide"><div>
            <img alt="" src="https://www.thaiairways.com/static/common/images/travel-extras/PRE-ORDERMEALS.jpg" class="sh_pic img-responsive"></div>
          </div>
          <div class="slide_fix gray_travelextra"><div>
          <div class="bl_pro">
            <h2 tabindex="0" class="l">Pre-order Meals</h2>
            <p tabindex="0" class="desc">As an additional privilege, Royal First Class and Royal Silk Class passengers can pre-select their meals from our gourmet  menu of finely created meals, including certified halal or vegetarian dishes or other special dietary needs</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  </div>
  </div>
  </div>
  </div>
  </section>

<br><br><br><br><br><br>
@include('inc.product-four')
<br><br><br><br><br><br>  

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

{{-- Text One --}}

<section class="t1">
  <div class="container-fluid">
      <div class="col-md-12 t1-head-1">
          <strong> PRODUCTS</strong><br>
          <span class="t1-head-2">
              what we offer
          </span>
      </div>
      <div class="col-md-12 t1-sec1">
          <div class="col-md-6 t1-sec1-1">
              <div class="t1-sec1-1-text1">
                  Commercial transport
              </div>
              <div class="t1-sec1-1-text2">
                  Leasing of commercial vehicles for a period of 3 up to 
                  5 years with 10% prepayment and with the possibility 
                  of making a seasonal schedule for installments
                  Let’s get started →                        
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
                      Commercial transport
                  </div>
                  <div class="t1-sec1-1-text2">
                      Leasing of commercial vehicles for a period of 3 up to 
                      5 years with 10% prepayment and with the possibility 
                      of making a seasonal schedule for installments
                      Let’s get started →                        
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-12 t1-sec1">
          <div class="col-md-6 t1-sec1-1">
              <div class="t1-sec1-1-text1">
                  Road-building equipment
              </div>
              <div class="t1-sec1-1-text2">
                  Leasing of road construction equipment for a period of up to 
                  10 years with 10% prepayment, with a possible subsequent 
                  buy-back by the manufacturer and renovation of the operated fleet.                   
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
                      Commercial transport
                  </div>
                  <div class="t1-sec1-1-text2">
                      Leasing of commercial vehicles for a period of 3 up to 
                      5 years with 10% prepayment and with the possibility 
                      of making a seasonal schedule for installments
                      Let’s get started →                        
                  </div>
              </div>
          </div>
      </div>

  </div>
</section>
{{-- End-Text-One --}}

@include('inc.bottom-icons-one')
    
@endsection




