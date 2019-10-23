

<!-- gjdhkfjghdkj -->

@extends('layouts.app-one')

@section('page_title')
    OUR SERVICES
@endsection

@section('tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
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
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 65px;
      font-weight: 900;
      text-shadow: 4px 2px #034f84;
      letter-spacing: 2px;
      text-transform: uppercase;
      line-height: 70px;
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
        <img class="object-image" src="pilotpublic/images/airport/b3.jpg" style="height:500px; ">
        <div class="centered">Car service</div>
      </div>  
    </div>
    <div class="carousel-item">
      <div class="car-img-text">
        <img class="d-block w-100 object-image" src="pilotpublic/images/cars/g7.jpg" style="height:500px; ">
        <div class="centered">Chauffeur Service</div>
      </div>  

    </div>
    <div class="carousel-item">
      <div class="car-img-text">
        <img class="d-block w-100  object-image" src="pilotpublic/images/cars/g6.jpg" style="height:500px;  ">
        <div class="centered">Limousine Service</div>
      </div>  
    </div>
    <div class="carousel-item">
        <div class="car-img-text">
          <img class="object-image" src="pilotpublic/images/bus/b2.jpg" style="height:500px; ">
          <div class="centered">Luxury Buses</div>
        </div>  
      </div>
      <div class="carousel-item">
        <div class="car-img-text">
          <img class="d-block w-100 object-image" src="pilotpublic/images/city/g2.jpg" style="height:500px; ">
          <div class="centered">Dubai tours</div>
        </div>  
  
      </div>
      <div class="carousel-item">
        <div class="car-img-text">
          <img class="d-block w-100  object-image" src="pilotpublic/images/airport/g10.jpg" style="height:500px;  ">
          <div class="centered">Abu Dhabi Tour</div>
        </div>  
      </div>
      <div class="carousel-item">
      <div class="car-img-text">
        <img class="object-image" src="pilotpublic/images/airport/b1.jpg" style="height:500px; ">
        <div class="centered">Airport Transfer</div>
      </div>  
    </div>
    <div class="carousel-item">
      <div class="car-img-text">
        <img class="d-block w-100 object-image" src="pilotpublic/images/van/p1.jpg" style="height:500px; ">
        <div class="centered">Luxury Vans</div>
      </div>  

    </div>
    <div class="carousel-item">
      <div class="car-img-text">
        <img class="d-block w-100  object-image" src="pilotpublic/images/os82.jpg" style="height:500px;  ">
        <div class="centered">Hire Driver</div>
      </div>  
    </div>
    <div class="carousel-item">
      <div class="car-img-text">
        <img class="object-image" src="pilotpublic/images/van/b2.jpg" style="height:500px; ">
        <div class="centered">Delivery Vans</div>
      </div>  
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <div class="carousel-control-prev-circle">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </div>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <div class="carousel-control-prev-circle">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </div>
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
          <a href="{{url('/rent-a-car-with-driver')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/cars/p1.2.jpg" class="object-image">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Rent A Car</h2>
                  <div class="os-body-text">
                    Limos are designed to accommodate large and tiny events Starting from 9 seater to 18 seater . 
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>FROM 999$</strong></h5>
                  <button type="button" class="btn btn-block os-book-nw-btn">
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
          <a href="{{url('/chauffeur-service')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/chauf/g1.jpg" class="object-image">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Chauffeur Service</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>FROM 999$</strong></h5>
                  <button type="button" class="btn btn-block os-book-nw-btn">
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
          <a href="{{url('/limousine-service')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/limo/g12.jpg" class="object-image">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Limousine Service</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>FROM 999$</strong></h5>
                  <button type="button" class="btn btn-block os-book-nw-btn">
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
          <a href="{{url('/bus-rental-dubai')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/bus/g7.jpg" class="object-image">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Luxury Buses</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>FROM 999$</strong></h5>
                  <button type="button" class="btn btn-block os-book-nw-btn">
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
          <a href="{{url('/dubai-city-tour')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/dubai/p1.jpg" class="object-image">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Dubai City Tour</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>FROM 999$</strong></h5>
                  <button type="button" class="btn btn-block os-book-nw-btn">
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
          <a href="{{url('/abu-dhabi-city-tour')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/city/p2.jpg" class="object-image">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Abu Dhabi City Tour</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>FROM 999$</strong></h5>
                  <button type="button" class="btn btn-block os-book-nw-btn">
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
          <a href="{{url('/airport-transfer')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/airport/p6.png" class="object-image">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Airport Transfer</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>FROM 999$</strong></h5>
                  <button type="button" class="btn btn-block os-book-nw-btn">
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
          <a href="{{url('/vans')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/van/p2.jpg" class="object-image">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Luxury Vans</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>FROM 999$</strong></h5>
                  <button type="button" class="btn btn-block os-book-nw-btn">
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
          <a href="{{url('/driver-or-chauffeur')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/chaf2/g2.jpg" class="object-image">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Hire Driver / Chauffeur</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>FROM 999$</strong></h5>
                  <button type="button" class="btn btn-block os-book-nw-btn">
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
          <a href="{{url('/delivery-vans')}}">
          <div class="container-fluid container">
            <div class="row">
              <div class="col-md-5" style="padding:10px; padding-bottom:0px">
              <div class="os-img-cont">
                <img src="pilotpublic/images/chaf2/g6.jpg" class="object-image">
              </div>
              </div>
              <div class="col-md-5">
                <div class="os-text-cont">
                  <p class="os-text-heading-top">PILOT&CAR DESTINATIONS</p>
                  <h2 class="os-head">Delivery Vans & Trucks</h2>
                  <div class="os-body-text">
                    Remix business with pleasure when you travel by Pilotandcars. Remix business with pleasure when you travel by Pilotandcars.
                    
                  </div>
                </div>
              </div>
              <div class="col-md-2 os-right-button">
                <div style="text-align:center">
                  <h5><strong>FROM 999$</strong></h5>
                  <button type="button" class="btn btn-block os-book-nw-btn">
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
      {{-- <section class="others">
          <h1 class="other-h1">Other Links</h1>
          <div class="container">
            <div class="row">
              <div class="col-md-2">
              <div class="other-cnt">
                <a href="" class="other-a">
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
          </section> --}}
      <br><br>
    
@endsection



