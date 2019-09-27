
@extends('layouts.app-one')

@section('page_title')
    OUR SERVICES
@endsection

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
<style>
    .car-img-text {
      position: relative;
      color: white;
    }
    
    
    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 70px;
      font-weight: 900;
      text-shadow: 4px 2px #577284;
      letter-spacing: 2px;
    }
    .active{
      padding: unset;
    }
    </style>
{{-- slider --}}
<div id="demo" class="carousel slide" data-ride="carousel">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="car-img-text">
        <img class="d-block w-100" src="pilotpublic/images/13.jpg" style="height:500px;  ">
        <div class="centered">BOOK RIDE NOW</div>
      </div>  
    </div>
    <div class="carousel-item">
      <div class="car-img-text">
        <img class="d-block w-100" src="pilotpublic/images/14.jpg" style="height:500px; ">
        <div class="centered">BOOK RIDE NOW</div>
      </div>  

    </div>
    <div class="carousel-item">
      <div class="car-img-text">
        <img class="d-block w-100" src="pilotpublic/images/7.jpg" style="height:500px;  ">
        <div class="centered">BOOK RIDE NOW</div>
      </div>  
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="page-nav-links">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-nav-links-col">
        <div class="col-md-1 page-nav-links-col-internal">
          <a href="{{url('/')}}">Home <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
        <div class="col-md-1 page-nav-links-col-internal-current">
          <a href="{{url('#')}}">Our Services <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>


<br><br><br>

      <section>
        <div class="container" style="padding:25px 0px 10px 0px; font-size:40px; font-weight:900; color:#2a4b7c">
          <div class="col-md-12" style="padding:0px">
            OUR SERVICES HERE
          </div>
        </div>
      </section>
      <div class="section-color">
        
        <section class="os-det">
          <a href="{{url('/service-one')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/limo/p5.jpg">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Limousine Service Dubai </h2>
                  <div class="os-body-text">
                    Limos are designed to accommodate large and tiny events Starting from 9 seater to 18 seater . 
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>AED 250</strong></h5>
                  <button type="button" class="btn btn-block btn-info" style="padding:15px; padding-top:20px; padding-bottom:20px; margin: 0 auto; border-radius: 1px;">
                    BOOK NOW
                  </button>
                </div>
              </div>
              <div class="col-md-12 os-bottom-border-div">
                <div class="os-bottom-border"></div>
              </div>
            </div>
          </div>
          </a>
        </section>
        <section class="os-det">
          <a href="{{url('/service-two')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/h8.jpg">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Checkout Service Two</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>AED 250</strong></h5>
                  <button type="button" class="btn btn-block btn-info" style="padding:15px; padding-top:20px; padding-bottom:20px; margin: 0 auto; border-radius: 1px;">
                    BOOK NOW
                  </button>
                </div>
              </div>
              <div class="col-md-12 os-bottom-border-div">
                <div class="os-bottom-border"></div>
              </div>
            </div>
          </div>
          </a>
        </section>
        <section class="os-det">
          <a href="{{url('/service-three')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/h8.jpg">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Checkout Service Three</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>AED 250</strong></h5>
                  <button type="button" class="btn btn-block btn-info" style="padding:15px; padding-top:20px; padding-bottom:20px; margin: 0 auto; border-radius: 1px;">
                    BOOK NOW
                  </button>
                </div>
              </div>
              <div class="col-md-12 os-bottom-border-div">
                <div class="os-bottom-border"></div>
              </div>
            </div>
          </div>
          </a>
        </section>
        <section class="os-det">
          <a href="{{url('/service-four')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/h8.jpg">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Hire Car With Four</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>AED 250</strong></h5>
                  <button type="button" class="btn btn-block btn-info" style="padding:15px; padding-top:20px; padding-bottom:20px; margin: 0 auto; border-radius: 1px;">
                    BOOK NOW
                  </button>
                </div>
              </div>
              <div class="col-md-12 os-bottom-border-div">
                <div class="os-bottom-border"></div>
              </div>
            </div>
          </div>
          </a>
        </section>
        <section class="os-det">
          <a href="{{url('/service-five')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/h8.jpg">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Hire Car With Five</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>AED 250</strong></h5>
                  <button type="button" class="btn btn-block btn-info" style="padding:15px; padding-top:20px; padding-bottom:20px; margin: 0 auto; border-radius: 1px;">
                    BOOK NOW
                  </button>
                </div>
              </div>
              <div class="col-md-12 os-bottom-border-div">
                <div class="os-bottom-border"></div>
              </div>
            </div>
          </div>
          </a>
        </section>
        <section class="os-det">
          <a href="{{url('/service-six')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/h8.jpg">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Hire Car With Six</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>AED 250</strong></h5>
                  <button type="button" class="btn btn-block btn-info" style="padding:15px; padding-top:20px; padding-bottom:20px; margin: 0 auto; border-radius: 1px;">
                    BOOK NOW
                  </button>
                </div>
              </div>
              <div class="col-md-12 os-bottom-border-div">
                <div class="os-bottom-border"></div>
              </div>
            </div>
          </div>
          </a>
        </section>
        <section class="os-det">
          <a href="{{url('/service-seven')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/h8.jpg">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Hire Car With Seven</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>AED 250</strong></h5>
                  <button type="button" class="btn btn-block btn-info" style="padding:15px; padding-top:20px; padding-bottom:20px; margin: 0 auto; border-radius: 1px;">
                    BOOK NOW
                  </button>
                </div>
              </div>
              <div class="col-md-12 os-bottom-border-div">
                <div class="os-bottom-border"></div>
              </div>
            </div>
          </div>
          </a>
        </section>
        <section class="os-det">
          <a href="{{url('/service-eight')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/h8.jpg">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Checkout Service Eight</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>AED 250</strong></h5>
                  <button type="button" class="btn btn-block btn-info" style="padding:15px; padding-top:20px; padding-bottom:20px; margin: 0 auto; border-radius: 1px;">
                    BOOK NOW
                  </button>
                </div>
              </div>
              <div class="col-md-12 os-bottom-border-div">
                <div class="os-bottom-border"></div>
              </div>
            </div>
          </div>
          </a>
        </section>
        <section class="os-det">
          <a href="{{url('/service-nine')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/h8.jpg">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Hire Car With Nine</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>AED 250</strong></h5>
                  <button type="button" class="btn btn-block btn-info" style="padding:15px; padding-top:20px; padding-bottom:20px; margin: 0 auto; border-radius: 1px;">
                    BOOK NOW
                  </button>
                </div>
              </div>
              <div class="col-md-12 os-bottom-border-div">
                <div class="os-bottom-border"></div>
              </div>
            </div>
          </div>
          </a>
        </section>
        <section class="os-det">
          <a href="{{url('/service-ten')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/h8.jpg">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Hire Car With Ten</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>AED 250</strong></h5>
                  <button type="button" class="btn btn-block btn-info" style="padding:15px; padding-top:20px; padding-bottom:20px; margin: 0 auto; border-radius: 1px;">
                    BOOK NOW
                  </button>
                </div>
              </div>
              <div class="col-md-12 os-bottom-border-div">
                <div class="os-bottom-border"></div>
              </div>
            </div>
          </div>
          </a>
        </section>
      
      </div>

      <br><br><br>  
      <section class="others">
          <h1 class="other-h1">Other Links</h1>
          <div class="container">
            <div class="row">
              <div class="col-md-2">
              <div class="other-cnt">
                <a href="#" class="other-a">
                  <div class="other-icon-cnt">
                    <i class="fa fa-car"></i>
                  </div>
                  <div class="other-text-cnt">
                    <h4>Service One</h4>
                  </div>
                </a>
              </div>
              </div>
              <div class="col-md-2">
              <div class="other-cnt">
                <a href="#" class="other-a">
                  <div class="other-icon-cnt">
                    <i class="fa fa-bus"></i>
                  </div>
                  <div class="other-text-cnt">
                    <h4>Service One</h4>
                  </div>
                </a>
              </div>
              </div>
              <div class="col-md-2">
              <div class="other-cnt">
                <a href="#" class="other-a">
                  <div class="other-icon-cnt">
                    <i class="fa fa-motorcycle"></i>
                  </div>
                  <div class="other-text-cnt">
                    <h4>Service One</h4>
                  </div>
                </a>
              </div>
              </div>
              <div class="col-md-2">
              <div class="other-cnt">
                <a href="#" class="other-a">
                  <div class="other-icon-cnt">
                    <i class="fa fa-truck"></i>
                  </div>
                  <div class="other-text-cnt">
                    <h4>Service One</h4>
                  </div>
                </a>
              </div>
              </div>
              <div class="col-md-2">
              <div class="other-cnt">
                <a href="#" class="other-a">
                  <div class="other-icon-cnt">
                    <i class="fa fa-bus"></i>
                  </div>
                  <div class="other-text-cnt">
                    <h4>Service One</h4>
                  </div>
                </a>
              </div>
              </div>
              <div class="col-md-2">
              <div class="other-cnt">
                <a href="#" class="other-a">
                  <div class="other-icon-cnt">
                    <i class="fa fa-plane"></i>
                  </div>
                  <div class="other-text-cnt">
                    <h4>Service One</h4>
                  </div>
                </a>
              </div>
              </div>
            </div>
          </div>
          </section>
      <br><br>
    
@endsection



