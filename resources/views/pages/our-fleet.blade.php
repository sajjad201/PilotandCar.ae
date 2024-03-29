
@extends('layouts.app-one')

@section('page_title')
    SERVICE THREE
@endsection

@section('tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection

@section('content')
<style>
.active{
  padding: 0;
}
</style>

  <section>
  <div class="container">
    <div class="row">
        <div class="col-md-12" style="padding:0px">
        <h1 style="font-size: 45px; padding:100px 0px 0px; color:navy"><b>CHECK VEHICLE MODELS</b></h1>
        <div style="font-size: 15px; padding:0px 0px 20px; color:gray; font-weight:300">
          Our latest fleet is here. Select and Book ride now
        </div>
        </div>
      </div>
    <ul class="nav nav-pills" style="background-color:white">
      <li class="active"><a data-toggle="pill" href="#home" class="active show"><p>All</p></a></li>
      <li><a data-toggle="pill" href="#menu1"><p>SUV</p></a></li>
      <li><a data-toggle="pill" href="#menu2"><p>Luxury</p></a></li>
      <li><a data-toggle="pill" href="#menu3"><p>Economy</p></a></li>
    </ul>
  
    <div class="tab-content">
      <div id="home" class="tab-pane fade in active show">
        <div class="fleet-box">
          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/fleet/1.png" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>Toyota Prado</h2>
                  <h4>Category:Luxury</h4>
                  <p>AED 1400</p>
                </div>
              </div>
              <div class="avail">
                <p class="avail-p">Check Availability</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="fleet-data">
                <ul>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/fleet/3.png" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>LUXURY SEDAN</h2>
                  <h4>Category:Lexus ES350</h4>
                  <p>AED 1400</p>
                </div>
              </div>
              <div class="avail">
                <p class="avail-p">Check Availability</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="fleet-data">
                <ul>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/fleet/5.png" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>BUSINESS VAN</h2>
                  <h4>Category:V Class</h4>
                  <p>AED 1400</p>
                </div>
              </div>
              <div class="avail">
                <p class="avail-p">Check Availability</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="fleet-data">
                <ul>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
                          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/fleet/7.png" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>LUXURY SUV</h2>
                  <h4>Category: GMC Yukon</h4>
                  <p>AED 1400</p>
                </div>
              </div>
              <div class="avail">
                <p class="avail-p">Check Availability</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="fleet-data">
                <ul>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
                          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/fleet/9.png" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>FIRST CLASS</h2>
                  <h4>Category:S class , BMW 7 series</h4>
                  <p>AED 1400</p>
                </div>
              </div>
              <div class="avail">
                <p class="avail-p">Check Availability</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="fleet-data">
                <ul>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
                          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/fleet/11.png" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>Top Luxury</h2>
                  <h4>Category: Rolls</h4>
                  <p>AED 1400</p>
                </div>
              </div>
              <div class="avail">
                <p class="avail-p">Check Availability</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="fleet-data">
                <ul>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
                          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/fleet/13.png" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>STRETCH LIMO</h2>
                  <h4>Category:Hummer</h4>
                  <p>AED 1400</p>
                </div>
              </div>
              <div class="avail">
                <p class="avail-p">Check Availability</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="fleet-data">
                <ul>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
        </div>
  
      </div>
      <div id="menu1" class="tab-pane fade">
              <div class="fleet-box">
  
                  <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/fleet/15.png" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>Luxury Buses</h2>
                  <h4>Category: Kinglong</h4>
                  <p>AED 1400</p>
                </div>
              </div>
              <div class="avail">
                <p class="avail-p">Check Availability</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="fleet-data">
                <ul>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="menu2" class="tab-pane fade">
             <div class="fleet-box">
          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/fleet/19.png" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>FAMILY VAN</h2>
                  <h4>Category: HIACE</h4>
                  <p>AED 1400</p>
                </div>
              </div>
              <div class="avail">
                <p class="avail-p">Check Availability</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="fleet-data">
                <ul>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="menu3" class="tab-pane fade">
              <div class="fleet-box">
          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/fleet/n1.png" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>Mercedes-S Class</h2>
                  <h4>Category:Luxury</h4>
                  <p>AED 1400</p>
                </div>
              </div>
              <div class="avail">
                <p class="avail-p">Check Availability</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="fleet-data">
                <ul>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 31px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
        </div>
    </div>
  
  </div>
    
  </section>
      
    
@endsection




