
@extends('layouts.app-two')

@section('page_title')
    SERVICE TEN
@endsection

@section('content')



<section>
  <div style="position: relative; color:white">
    <img src="pilotpublic/images/18.jpg">
    <div style="position: absolute; top:35%; left:25%; color:white; font-size:60px; font-weight:900" class="frame-5">
    <span>OFFERS</span> <span>FROM</span> <span>PILOT & CAR</span></div>
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
          <a href="{{url('#')}}">Service Ten <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
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
            <div class="st-em-col-small-text" style="padding:0px 0px">Flying as it should be</div>
            The Emirates<br>A380
          </div>
          <img src="https://c.ekstatic.net/ecl/aircraft-exterior/airbus-A380/a380-on-the-runway-d600.jpg?h=fNksKUzMuvSi9csL1NrQ8A" style="width:100%; margin-top: -1rem;">
        </div>
      </div>
      <div class="col-md-6 st-em-col">
        <div class="row">
          <div class="col-md-6" style="padding:0px 5px">
            <div class="st-em-col-two">
              <div class="st-em-col-two-text">
                <div class="st-em-col-small-text">A Journey of Distinction</div>
                The Emirates A380
              </div>
              <img src="https://c.ekstatic.net/ecl/emirates-staff/ground-staff/emirates-staff-infront-of-home-checkin-van-600x400.jpg?h=3h0bSHrZ-yeGEmqa5iyXOQ" style="width:100%; height:100%">
            </div>
          </div>
          <div class="col-md-6" style="padding:0px 5px">
            <div class="st-em-col-two">
              <div class="st-em-col-two-text">
                <div class="st-em-col-small-text">Check in Your Bags from Home</div>
                The Emirates A380
              </div>
              <img src="https://c.ekstatic.net/ecl/emirates-staff/ground-staff/emirates-staff-infront-of-home-checkin-van-600x400.jpg?h=3h0bSHrZ-yeGEmqa5iyXOQ" style="width:100%; height:100%">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="padding:10px 5px">
              <div class="st-em-col-two">
                <div class="st-em-col-two-text">
                  <div class="st-em-col-small-text">Causine That Takes you places</div>
                  The Emirates A380
                </div>
                <img src="https://c.ekstatic.net/ecl/emirates-staff/ground-staff/emirates-staff-infront-of-home-checkin-van-600x400.jpg?h=3h0bSHrZ-yeGEmqa5iyXOQ" style="width:100%; height:100%">
              </div>
            </div>
            <div class="col-md-6" style="padding:10px 5px">
              <div class="st-em-col-two">
                <div class="st-em-col-two-text">
                  <div class="st-em-col-small-text">Your Window into new world</div>
                  The Emirates A380
                </div>
                <img src="https://c.ekstatic.net/ecl/emirates-staff/ground-staff/emirates-staff-infront-of-home-checkin-van-600x400.jpg?h=3h0bSHrZ-yeGEmqa5iyXOQ" style="width:100%; height:100%">
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
          <img src="pilotpublic/images/12.jpg" style="height:500px; width:100%; border-radius:1px">
        </div>
        <div class="col-md-5 st-ten-inf-col5">
            <h1><strong> CATERING</strong></h1>
            <h4> winning flavors in the skies</h4>
            Throughout your comfortable journey in Business Class, 
            our flying chefs will present you with the finest examples 
            of Turkish and world cuisine, served up on stylish porcelain 
            tableware. In Business Class, we make sure that your trip is 
            also a journey of tastes, with our award-winning dining on board 
            service, which is prepared by Turkish Do&Co.
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
                        Introducing Lyft Driver Services, designed to save you money and make driving easier.
                </strong>
            </div>
            <div class="col-md-12 t2-sec1">
                <div class="col-md-6 t2-sec1-1">
                    <div class="t2-sec1-1-text1" style="padding-top:130px">
                        Lyft Direct Debit Card
                    </div>
                    <div class="t2-sec1-1-text2">
                        Leasing of commercial vehicles for a period of 3 up to 
                        5 years with 10% prepayment and with the possibility 
                        of making a seasonal schedule for installments
                        Let’s get started →                        
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
                            Leasing of commercial vehicles for a period of 3 up to 
                            5 years with 10% prepayment and with the possibility                    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/2jlBRtlrtnYXgNHoyNW14B/0c411aab3c372ecb683f8b9c751a8eee/debit_2_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                            Leasing of commercial vehicles for a period of 3 up to 
                            5 years with 10% prepayment and with the possibility                    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/1O67IjJ0C5uoPnqJehHCLK/b143d0c2d9f8200928147fd2343f6401/debit_3_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                            Leasing of commercial vehicles for a period of 3 up to 
                            5 years with 10% prepayment and with the possibility                    
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 t2-sec1">
                <div class="col-md-6 t2-sec1-1">
                    <div class="t2-sec1-1-text1" style="padding-top:130px">
                        Lyft Direct Debit Card
                    </div>
                    <div class="t2-sec1-1-text2">
                        Leasing of commercial vehicles for a period of 3 up to 
                        5 years with 10% prepayment and with the possibility 
                        of making a seasonal schedule for installments
                        Let’s get started →                        
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
                            Leasing of commercial vehicles for a period of 3 up to 
                            5 years with 10% prepayment and with the possibility                    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/2vYGqAsRPLA7KXi6mK1u8p/67459367e2d275069190669f5eeee912/drivercenter_2_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                            Leasing of commercial vehicles for a period of 3 up to 
                            5 years with 10% prepayment and with the possibility                    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://images.ctfassets.net/q8mvene1wzq4/59cz30Jvmhcj6bhnaFSbe/9f5e503d915ff216da4e443945f1d94f/drivercenter_3_2x.png" style="width: 240px">
                        <div class="t2-sec1-1-text2">
                            Leasing of commercial vehicles for a period of 3 up to 
                            5 years with 10% prepayment and with the possibility                    
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
                <h6 class="text-center">Italy</h6>
                <h1 style="color:#333333">Rome One</h1>
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
                <h6 class="text-center">Italy</h6>
                <h1 style="color:#333333">Rome Two</h1>
                <h5 class="">Discover for yourself</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
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




