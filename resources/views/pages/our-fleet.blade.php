
@extends('layouts.app-one')

@section('page_title')
    SERVICE THREE
@endsection

@section('content')
<style>
.active{
  padding: 0;
}
</style>

<section class="os-head">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <h1 class="text-center" style="padding: 20px;font-family: playfair display">Vehicle Modals</h1>
        </div>
      </div>
    </div>
  </section>
  
  <section>
  <div class="container">
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
                  <img src="pilotpublic/images/24.png" class="img-fluid">
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
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/cadillac.jpg" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>Cadillac</h2>
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
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/bmw.jpg" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>BMW-7 Series</h2>
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
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
                          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/coaster.jpg" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>Toyota Coaster</h2>
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
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
                          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/viano.jpg" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>Mercedez-Benz Viano</h2>
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
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
                          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/camry.jpg" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>Toyota - Camry</h2>
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
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 2 Suitcase</li>
                </ul>
                <a href="" class="res-now">Reserve Now</a>
              </div>
            </div>
          </div>
                          <div class="row">
            <div class="col-md-8" style="padding: 0">
              <div class="col-sm-6" style="padding: 0">
                <div class="flt-img-cont">
                  <img src="pilotpublic/images/landcruiser.jpg" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>Toyota Landcruiser</h2>
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
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 2 Suitcase</li>
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
                  <img src="pilotpublic/images/cadillac.jpg" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="fl-txt-cont">
                  <h2>Cadillac</h2>
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
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 2 Suitcase</li>
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
                  <img src="pilotpublic/images/mer-s.jpg" class="img-fluid">
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
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 2 Suitcase</li>
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
                  <img src="pilotpublic/images/mer-s.jpg" class="img-fluid">
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
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> Driver</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Seats</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 4 Doors</li>
                  <li><span><img src="pilotpublic/images/driver.png" style="width: 17px; margin-top: 3px;"></span> 2 Suitcase</li>
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




