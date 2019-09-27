
@extends('layouts.app-two')

@section('page_title')
    SERVICE THREE
@endsection

@section('content')

<section>
  <div style="position:relative">
    <img src="pilotpublic/images/19.jpg">
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
            <img src="pilotpublic/images/9.jpg" style="height:300px">
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
            <img src="pilotpublic/images/8.jpg" style="height:300px">
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

@include('inc.text-three')
@include('inc.product-two')

{{-- Text one--}}
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




