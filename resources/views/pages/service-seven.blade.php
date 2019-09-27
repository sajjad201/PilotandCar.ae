
@extends('layouts.app-two')

@section('page_title')
    SERVICE SEVEN
@endsection

@section('content')

<style>
.slick-slider{
  padding: 0px;
}
</style>

<section class="os7-body">
  <div class="slider-for-os7">
    <div class="slick-wrap bg-pic" style="background-image:linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),  url(pilotpublic/images/19.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="animated slideInDown"><strong> London Pass</strong></h1>
            <p class="animated fadeIn" style="animation-delay: 1.5s;">Explore the capital city with a 2-night London pass, a stay in some of London's most central anddesirable locations and breakfast.</p>
            <a href="#" class="os7-book animated slideInUp">Book Now</a>
          </div>
        </div>
    </div>
  </div>
    <div class="slick-wrap bg-pic" style="background-image:linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),  url(pilotpublic/images/12.jpg);">
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Plan & Save</h1>
        <p>Explore the capital city with a 2-night London pass, a stay in some of London's most central anddesirable locations and breakfast.</p>
        <a href="#" class="os7-book">Book Now</a>
      </div>
    </div>
  </div>
  </div>
    <div class="slick-wrap bg-pic" style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(pilotpublic/images/gal3.jpg);">
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Save Upto 25% on 2 nights</h1>
        <p>Explore the capital city with a 2-night London pass, a stay in some of London's most central anddesirable locations and breakfast.</p>
        <a href="#" class="os7-book">Book Now</a>
      </div>
    </div>
  </div>
  </div>
    <div class="slick-wrap bg-pic" style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(pilotpublic/images/gal4.jpg);">
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Look Ahead, Book Ahead</h1>
        <p>Explore the capital city with a 2-night London pass, a stay in some of London's most central anddesirable locations and breakfast.</p>
        <a href="#" class="os7-book">Book Now</a>
      </div>
    </div>
  </div>
  </div>
  </div>
  </section>
  
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="slider-nav-os7">
              <div class="slick-wrap bg-pic bg-pic-img-shadow" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(pilotpublic/images/gal1.jpg);">
    <div class="row">
      <div class="col-md-12">
        <h1>1-night London Pass</h1>
        <p>Explore the capital city with a 2-night London pass, a stay in some of London's most central anddesirable locations and breakfast.</p>
        
      </div>
    </div>
  </div>
    <div class="slick-wrap bg-pic bg-pic-img-shadow" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(pilotpublic/images/gal2.jpg);">
    <div class="row">
      <div class="col-md-12">
        <h1>2-night London Pass</h1>
        <p>Explore the capital city with a 2-night London pass, a stay in some of London's most central anddesirable locations and breakfast.</p>
        
      </div>
    </div>
  </div>
    <div class="slick-wrap bg-pic bg-pic-img-shadow" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(pilotpublic/images/gal3.jpg);">
  
    <div class="row">
      <div class="col-md-12">
        <h1>3-night London Pass</h1>
        <p>Explore the capital city with a 2-night London pass, a stay in some of London's most central anddesirable locations and breakfast.</p>
        
      </div>
    </div>
  </div>
  
    <div class="slick-wrap bg-pic bg-pic-img-shadow" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(pilotpublic/images/gal4.jpg);">
  
    <div class="row">
      <div class="col-md-12">
        <h1>4-night London Pass</h1>
        <p>Explore the capital city with a 2-night London pass, a stay in some of London's most central anddesirable locations and breakfast.</p>
        
      </div>
    </div>
  </div>
          </div>
        </div>
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
          <a href="{{url('#')}}">Service Seven <i class="fas fa-chevron-right page-nav-links-col-internal-icon"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<br>

    


  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 style="color:navy"><strong> THE PERFECT HPTEL RIDES AND PACKAGES</strong></h1><br><br>
        </div>
      </div>
    </div>
  </section>  
  <section>
    <div class="container">
      <div class="row">
        @for ($i = 0; $i < 2; $i++)
        <div class="col-md-6">
          <div class="os7-box" style="background-image:  linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(pilotpublic/images/7.jpg);">
            <h4 class="os7-h1">Park Plaza Nuremberg | Book in Advance</h4>
            <p class="os7-p">Get 20% off the best-connected hotel in Nuremberg</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="os7-box bg-pic" style="background-image:  linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(pilotpublic/images/h9.jpg);">
            <h4 class="os7-h1">Park Plaza Nuremberg | Book in Advance</h4>
            <p class="os7-p">Get 20% off the best-connected hotel in Nuremberg</p>
          </div>
        </div>
        @endfor
      </div>
    </div>
  </section>
  <br><br><br><br>
  
  <script type="text/javascript">
     $('.slider-for-os7').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav-os7'
  });
  $('.slider-nav-os7').slick({
    centerPadding:0,
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for-os7',
    dots: true,
    centerMode: true,
    arrows:true,
    focusOnSelect: true
  });
  </script>

@include('inc.product-five')



{{-- Text-one --}}   
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

{{-- End-text-one --}}

<style>
.ser-one-rel{
  background: unset;
  background-color: #d1b894 !important;
}
.ser-one-rel:hover{ 
  background: linear-gradient(to bottom, #ba945e 0%, #ba945e 100%);
}

</style>
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

@include('inc.bottom-icons-one')
    
@endsection




