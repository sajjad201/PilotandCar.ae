
@extends('layouts.app-two')

@section('page_title')
    SERVICE ONE
@endsection

@section('content')

<section class="bg-img-int bg-pic" style="background-image: url(pilotpublic/images/limo/p5.jpg); height: 500px;">

<div class="bg-txt-cnt">
<div class="bg-txt-inner " style="    background-color: rgba(255, 255, 255, 0.9);  ">
    <h1 class="text-center animated fadeInRight" style="font-weight:700">Limousine Service Dubai   </h1>
  <p class="text-center animated fadeInLeft">Limos are designed to accommodate large and tiny events Starting from 9 seater to 18 seater . Thus choosing the limousine that fits your vogue and event may be a sleek challenge.</p>
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
          <a href="{{url('#')}}">Service One <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="os14-h1">Find Your Way</div>
      <div class="row">
      <div class="col-md-4">
        <div class="os14-inner">
          <div class="os14-img">
            <img src="pilotpublic/images/limo/g1.jpg" class="os14-img-1">
          </div>
          <div class="info">
            <div class="info-box">
              <h3>Getting to the Airport</h3>
              <p>Find out how to get to Changi Airport from the city and other parts of Singapore.</p>
              <div class="info-more">
                <a href="#">More </a> <i class="fa fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="os14-inner">
          <div class="os14-img">
            <img src="pilotpublic/images/limo/g9.jpg" class="os14-img-1">
          </div>
          <div class="info">
            <div class="info-box">
              <h3>Getting to the Airport</h3>
              <p>Find out how to get to Changi Airport from the city and other parts of Singapore.</p>
              <div class="info-more">
                <a href="#">More </a> <i class="fa fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="os14-inner">
          <div class="os14-img">
            <img src="pilotpublic/images/limo/g11.jpg" class="os14-img-1">
          </div>
          <div class="info">
            <div class="info-box">
              <h3>Getting to the Airport</h3>
              <p>Find out how to get to Changi Airport from the city and other parts of Singapore.</p>
              <div class="info-more">
                <a href="#">More </a> <i class="fa fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
</section>
<br><br><br>
@include('inc.product-one')

{{-- Text Two--}}
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
                  Our Limousine Services
          </strong>
      </div>
      <div class="col-md-12 t2-sec1">
          <div class="col-md-6 t2-sec1-1">
              <div class="t2-sec1-1-text1" style="padding-top:130px">
                  Limousine Service Dubai   
              </div>
              <div class="t2-sec1-1-text2">
                Limos are designed to accommodate large and tiny events Starting 
                from 9 seater to 18 seater . Thus choosing the limousine that fits 
                your vogue and event may be a sleek challenge. Most businesses 
                impartation limousine service have the satisfactory models of 
                vehicles to supply you associate exceptional road joy. Automobile 
                services have become one in all the foremost in-demand transportation services in
                the city and throughout the UAE.
                                     
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
                      The motives for this are exceptional places to travel to, 
                      persistent journey and grandeur.                
                  </div>
              </div>
              <div class="col-md-4">
                  <img src="https://images.ctfassets.net/q8mvene1wzq4/2jlBRtlrtnYXgNHoyNW14B/0c411aab3c372ecb683f8b9c751a8eee/debit_2_2x.png" style="width: 240px">
                  <div class="t2-sec1-1-text2">
                    You could travel in fashion by means 
                    that of hiring by way of city low-cost limousine 
                    therefore on really make your journey cozy.                    
                  </div>
              </div>
              <div class="col-md-4">
                  <img src="https://images.ctfassets.net/q8mvene1wzq4/1O67IjJ0C5uoPnqJehHCLK/b143d0c2d9f8200928147fd2343f6401/debit_3_2x.png" style="width: 240px">
                  <div class="t2-sec1-1-text2">
                    This can be an unprecedented plan because of the 
                    very fact your journey to the preferred destination 
                    is terribly comfortable.                     
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-12 t2-sec1">
          <div class="col-md-6 t2-sec1-1">
              <div class="t2-sec1-1-text1" style="padding-top:130px">
                You might be speculative why to lease a limousine for traveling?
              </div>
              <div class="t2-sec1-1-text2">
                Similarly, one concept that involves thoughts straightaway is that 
                'll be high priced. However, this isn't really due to the very fact 
                the fare of the limo is extremely low priced in city equipped you to 
                contact correct rent a vehicle service company. By scrutiny rent with 
                completely different limousine providers, you'll be able to have a decent 
                deal. Limousine services Dubai are noted as a result of Dubai is usually 
                visited by tourists and businessmen.                     
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
                    You could travel in fashion by means that of hiring by way of city
                     low-cost limousine therefore on really make your journey cozy.                  
                  </div>
              </div>
              <div class="col-md-4">
                  <img src="https://images.ctfassets.net/q8mvene1wzq4/2vYGqAsRPLA7KXi6mK1u8p/67459367e2d275069190669f5eeee912/drivercenter_2_2x.png" style="width: 240px">
                  <div class="t2-sec1-1-text2">
                    Just in case you assume limousine offerings are for moneyed best then you're ways 
                    that from the truth. Hiring a limousine Dubai offers you a best ride for an 
                    occasion or event is certainly one of the ideal methods to feature exhilaration and glitz.                     
                  </div>
              </div>
              <div class="col-md-4">
                  <img src="https://images.ctfassets.net/q8mvene1wzq4/59cz30Jvmhcj6bhnaFSbe/9f5e503d915ff216da4e443945f1d94f/drivercenter_3_2x.png" style="width: 240px">
                  <div class="t2-sec1-1-text2">
                    After you are visiting during a luxurious vehicle like a machine that's ready 
                    with current facilities it makes the journey terribly exciting.                     
                  </div>
              </div>
          </div>
      </div>
      

  </div>
</section>


<section style="background-color: #fbfbfb; padding-bottom:150px; text-align:center;     color: #404040;">
      <br><br>
      <h1><strong> PLANNING FOR YOUR TRIP</strong></h1>

      <div class="container link-card__card-container link-card__card-container-mb ">
            
          <a href="https://www.booking.com/index.html?aid=1183184" target="_blank" class="context-item link-card__item hover--move-up">
              <div class="icon-container">
                  <i class="img-icon icon-new-hotel"></i>
              </div>
              <div class="text-center link-sm-03 text-xs-19 color-custom-4">
                  Book Hotels
              </div>
          </a>
      
          <a href="http://www.changiairport.com/en/airport-guide/facilities-and-services/transit-hotels.html" class="context-item link-card__item hover--move-up">
              <div class="icon-container">
                  <i class="img-icon icon-new-transit_hotel"></i>
              </div>
              <div class="text-center link-sm-03 text-xs-19 color-custom-4">
                  Transit Hotels
              </div>
          </a>
      
          <a href="https://www.rentalcars.com/?affiliateCode=changiairport" target="_blank" class="context-item link-card__item hover--move-up">
              <div class="icon-container">
                  <i class="img-icon icon-new-driving"></i>
              </div>
              <div class="text-center link-sm-03 text-xs-19 color-custom-4">
                  Rent a Car
              </div>
          </a>
      
          <a href="https://www.changirecommends.com/owifi.aspx" target="_blank" class="context-item link-card__item hover--move-up">
              <div class="icon-container">
                  <i class="img-icon icon-new-get_connected_in_sg"></i>
              </div>
              <div class="text-center link-sm-03 text-xs-19 color-custom-4">
                  Rent a WiFi Router
              </div>
          </a>
          <a href="https://www.changirecommends.com/owifi.aspx" target="_blank" class="context-item link-card__item hover--move-up">
            <div class="icon-container">
                <i class="img-icon icon-new-get_connected_in_sg"></i>
            </div>
            <div class="text-center link-sm-03 text-xs-19 color-custom-4">
                Rent a WiFi Router
            </div>
        </a>
        <a href="https://www.changirecommends.com/owifi.aspx" target="_blank" class="context-item link-card__item hover--move-up">
          <div class="icon-container">
              <i class="img-icon icon-new-get_connected_in_sg"></i>
          </div>
          <div class="text-center link-sm-03 text-xs-19 color-custom-4">
              Rent a WiFi Router
          </div>
      </a>


      
  </div>
  </section>


@include('inc.bottom-icons-one')


@endsection




