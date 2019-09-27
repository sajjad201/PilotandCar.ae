<div class="container-fluid" style="padding-top: 20px; margin-top: 40px; border-top: 1px solid #ebe8e8;">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    
                    <div class="col-lg-12 footer-for-pc" style="padding:10px">
                        <div class="col-lg-12" style="padding-top:20px; padding-bottom:20px; ">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div style="padding-top:15px; font-weight:600; padding-right:7px; font-size: 16px; color:#034f84">ABOUT </div>
                                <div class="footer-menue-top">Careers<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="footer-menue-other">Company<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="footer-menue-other">Media<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                            </div>
                            
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div style="padding-top:15px; font-weight:600; padding-right:7px; font-size: 16px; color:#034f84">SERVICES </div>
                                <div class="footer-menue-top">Arrival and Departure<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="footer-menue-other">Check-in information<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="footer-menue-other">Baggage<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div style="padding-top:15px; font-weight:600; padding-right:7px; font-size: 16px; color:#034f84" >CUSTOMER SUPPORT </div>
                                <div class="footer-menue-top">Contact<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="footer-menue-other">Help<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="footer-menue-other">Refund<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div style="padding-top:15px; font-weight:600; padding-right:7px; font-size: 16px; color:#034f84">DIGITAL </div>
                                <div class="footer-menue-top">Newsletter<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="footer-menue-other">Mobile Apps<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="footer-menue-other">Accessibility<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                            </div>
                        </div>
                    </div>
                    <!---footer-for-mobile--->
                    <div class="col-lg-12 footer-for-mobile">
                        <div class="col-lg-12" style="padding-top:20px; padding-bottom:20px; ">
                            <div class="col-lg-3">
                                <div style="padding-top:15px; font-weight:600; color:#034f84; padding-right:7px;" class="about">
                                    ABOUT <i class="fas fa-caret-right about-icon-right" style="float:right; font-size:16px"></i>
                                          <i class="fas fa-sort-down about-icon-down" style="float:right; font-size:16px; display:none"></i>
                                </div>
                                <div class="second-footer-menue-top hideshow-about">Careers<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="second-footer-menue-other hideshow-about">Company<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="second-footer-menue-other hideshow-about">Media<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                            </div>
                            <script>
                            $(document).ready(function(){
                                  $(".about").click(function(){
                                    $(".services-icon-right").show();
                                    $(".services-icon-down").hide();
                                    $(".customer-support-icon-right").show();
                                    $(".customer-support-icon-down").hide();
                                    $(".digital-icon-right").show();
                                    $(".digital-icon-down").hide();
                                    $(".about-icon-right").toggle("slide", { direction: "left" }, 1000);
                                    $(".about-icon-down").toggle("slide", { direction: "left" }, 1000);
                                    $(".hideshow-about").toggle("slide", { direction: "left" }, 1000);
                                    $(".hideshow-services").hide();
                                    $(".hideshow-customer-support").hide();
                                    $(".hideshow-digital").hide();
                                  });
                                  $(".services").click(function(){
                                    $(".about-icon-right").show();
                                    $(".about-icon-down").hide();
                                    $(".customer-support-icon-right").show();
                                    $(".customer-support-icon-down").hide();
                                    $(".digital-icon-right").show();
                                    $(".digital-icon-down").hide();
                                    $(".hideshow-about").hide();
                                    $(".hideshow-customer-support").hide();
                                    $(".hideshow-digital").hide();
                                    $(".services-icon-right").toggle("slide", { direction: "left" }, 1000);
                                    $(".services-icon-down").toggle("slide", { direction: "left" }, 1000);
                                    $(".hideshow-services").toggle("slide", { direction: "left" }, 1000);
                                  });
                                  $(".customer-support").click(function(){
                                    $(".about-icon-right").show();
                                    $(".about-icon-down").hide();
                                    $(".services-icon-right").show();
                                    $(".services-icon-down").hide();
                                    $(".digital-icon-right").show();
                                    $(".digital-icon-down").hide();
                                    $(".hideshow-about").hide();
                                    $(".hideshow-services").hide();
                                    $(".hideshow-digital").hide();
                                    $(".customer-support-icon-right").toggle("slide", { direction: "left" }, 1000);
                                    $(".customer-support-icon-down").toggle("slide", { direction: "left" }, 1000);
                                    $(".hideshow-customer-support").toggle("slide", { direction: "left" }, 1000);
                                  });
                                  $(".digital").click(function(){
                                    $(".about-icon-right").show();
                                    $(".about-icon-down").hide();
                                    $(".services-icon-right").show();
                                    $(".services-icon-down").hide();
                                    $(".customer-support-icon-right").show();
                                    $(".customer-support-icon-down").hide();
                                    $(".hideshow-about").hide();
                                    $(".hideshow-services").hide();
                                    $(".hideshow-customer-support").hide();
                                    $(".digital-icon-right").toggle("slide", { direction: "left" }, 1000);
                                    $(".digital-icon-down").toggle("slide", { direction: "left" }, 1000);
                                    $(".hideshow-digital").toggle("slide", { direction: "left" }, 1000);
                                  });
                            });
                            </script>
                            <div class="col-lg-3">
                                <div style="padding-top:15px; font-weight:600; color:#034f84; padding-right:7px;" class="services">
                                    SERVICES 
                                    <i class="fas fa-caret-right services-icon-right" style="float:right; font-size:16px"></i>
                                    <i class="fas fa-sort-down services-icon-down" style="float:right; font-size:16px; display:none"></i>
                                </div>
                                <div class="second-footer-menue-top hideshow-services">Arrival and Departure<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="second-footer-menue-other hideshow-services">Check-in information<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="second-footer-menue-other hideshow-services">Baggage<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                            </div>
                            <div class="col-lg-3">
                                <div style="padding-top:15px; font-weight:600; color:#034f84; padding-right:7px;" class="customer-support">
                                    CUSTOMER SUPPORT 
                                    <i class="fas fa-caret-right customer-support-icon-right" style="float:right; font-size:16px"></i>
                                    <i class="fas fa-sort-down customer-support-icon-down" style="float:right; font-size:16px; display:none"></i>
                                </div>
                                <div class="second-footer-menue-top hideshow-customer-support">Contact<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="second-footer-menue-other hideshow-customer-support">Help<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="second-footer-menue-other hideshow-customer-support">Refund<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                            </div>
                            <div class="col-lg-3">
                                <div style="padding-top:15px; font-weight:600; color:#034f84; padding-right:7px;" class="digital">
                                    DIGITAL 
                                    <i class="fas fa-caret-right digital-icon-right" style="float:right; font-size:16px"></i>
                                    <i class="fas fa-sort-down digital-icon-down" style="float:right; font-size:16px; display:none"></i>
                                </div>
                                <div class="second-footer-menue-top hideshow-digital">Newsletter<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="second-footer-menue-other hideshow-digital">Mobile Apps<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                                <div class="second-footer-menue-other hideshow-digital">Accessibility<img src="pilotpublic/images/play.png" class="footer-menue-arrow"></div>
                            </div>
                        </div>
                    </div>
                    <!---footer-for-mobile--->
                </div>
            </div>
        </div>
    </div>
    
    <div class="container logos-container">
        <div class="row">
            <center>
                <div class="logos-fb" style="display:inline-block; margin:0 auto; ">
                    <i class="fab fa-facebook fb-icon" style="font-size:20px; color:#666666;"></i>
                </div>
                <div class="logos-twitter" style="display:inline-block; margin:0 auto; ">
                    <i class="fab fa-twitter-square twitter-icon" style="font-size:20px; color:#666666"></i>
                </div>
                <div class="logos-linkedin" style="display:inline-block; margin:0 auto; ">
                    <i class="fab fa-linkedin linkedin-icon" style="font-size:20px; color:#666666"></i>
                </div>
                <div class="logos-youtube" style="display:inline-block; margin:0 auto; ">
                    <i class="fab fa-youtube youtube-icon" style="font-size:20px; color:#666666"></i>
                </div>
                <div class="logos-instagram" style="display:inline-block; margin:0 auto; ">
                    <i class="fab fa-instagram instagram-icon" style="font-size:20px; color:#666666"></i>
                </div>
            </center>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12" style="background-color:#f2f2f2; padding:20px; padding-top:22px; padding-bottom:16px; color:#333333;">
                    <div class="col-lg-4 footer-col-one">
                        <span class="footer-one-text footer-col-one-logo" style="font-weight: 800; font-size: 18px">Logo</span>	
                        <span class="footer-one-text">Swiss International Air Lines</span>
                        
                    </div>
                    <div class="col-lg-4 footer-col-two">
                        <div class="footer-one-text footer-one-text-inline">Sitemap</div>
                        <div class="footer-one-text footer-one-text-inline">Legal</div>
                        <div class="footer-one-text footer-one-text-inline">Data Protection</div>
                        <div class="footer-one-text footer-one-text-inline">Change Cookiee Setting</div>
                    </div>
                    <div class="col-lg-4 footer-col-three">
                        <span class="footer-one-text">A Star Allience Member</span>	
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function(){
    
    $(".c-hamburger").click(function(){
    $(".ruby-menu").slideToggle();
    });
    
    $(".ruby-dropdown-toggle").click(function(){
        $(".mob-menu").slideToggle();
    });
    
    $(".hidden-md").click(function(){
        $(".ruby-grid").slideToggle();
    });
    
        });
    </script>