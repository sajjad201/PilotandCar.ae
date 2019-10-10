<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>
    @yield('page_title', 'Pilot and Car')
</title>
@yield('tags')

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="pilotpublic/images/logo.jpeg">

<link rel="stylesheet" type="text/css" href="pilotpublic/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="pilotpublic/css/mdtimepicker.css">
<link rel="stylesheet" type="text/css" href="pilotpublic/css/styleold.css">
<link rel="stylesheet" type="text/css" href="pilotpublic/css/style.css">
<link rel="stylesheet" type="text/css" href="pilotpublic/css/sina-nav.css">
<link rel="stylesheet" type="text/css" href="pilotpublic/css/animate.css">
<link rel="stylesheet" type="text/css" href="pilotpublic/slick/slick.css">
<link rel="stylesheet" type="text/css" href="pilotpublic/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="pilotpublic/css/global.css">
<link rel="stylesheet" type="text/css" href="pilotpublic/css/fonts.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<script src="pilotpublic/bootstrap/jq/jquery-3.1.1.js"></script>
<script src="pilotpublic/bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 

<style>
.container-fluid{
	padding:0px;
}
@font-face {
    font-family: 'Gentona Book';
    src: url('pilotpublic/fonts/Gentona/Gentona Book.otf');
}
@font-face {
    font-family: 'SigvarRegular';
    src: url('pilotpublic/fonts/SigvarRegular.ttf');
}
@font-face {
    font-family: 'AvenirNextLTPro-Regular';
    src: url('pilotpublic/fonts/AvenirNextLTPro-Regular.otf');
}
/* form-css*/
.loginWrapper {
  display: block;
  position: relative;
  text-align: center; 
  margin: auto;
  right: 0;
  left: 0;
  transition: box-shadow 1s;
}

.trending{
	border-radius: 10px;
	padding-bottom: 55px !important;
	transition: all 0.3s ease 0s;
}



.header-contact-icons{
	margin-left:6.5%;
}
.header-contact-icons-text{
	font-family:calibri;
	color: #333333;
	font-size:14px;
}

@media (max-width:1210px){
	.header-contact-icons{
		margin-left:unset;
	}
	.header-contact-icons-text{
		font-size:20px;
		color: #000000;
		font-weight:100;
	}
	.header-contact-icons-text-one{
		margin-top:30px;
	}
}

.btn-rent-car-now{
	background-color:#578CA9;
	border:2px solid#578CA9;
	padding:15px;
	font-weight:700;
	padding-left:35px;
	padding-right:35px;
}
.btn-rent-car-now:hover{
	background-color:#ffffff;
	border:2px solid#345465;
	background-color: rgba(255, 255, 255, 0.01);
	color:#ffffff;
}
.search{
	background: linear-gradient(to right, #0066ff 0%, #cc33ff 100%) !important;
	padding: 15px !important;
	border:none;
	transition: all 0.4s ease;
}
.search:hover{
	background: linear-gradient(to right, #0000ff 40%, #cc00ff 100%) !important;
	color:#ffffff;
}

.logginFormFooter {
  text-align: center;
  color: #777;
  width: 100%;
  font-size: 12px;
  position: fixed;
  bottom: 10px;
}

  .logginFormFooter a       {color: #777; font-weight: 600;}
  .logginFormFooter a:hover {color: #AAA;}

* {
  box-sizing:border-box;
  padding: 0;
  margin: 0;
}

/*nav {
  z-index: 9;
  color: #FFF;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 20px 0;
  text-align: center;
}*/

.tabs {
  display: table;
  table-layout: fixed;
  width: 100%;
  -webkit-transform: translateY(5px);
  transform: translateY(5px);
  margin-bottom: 0;
}

.tabs > li {
  transition-duration: .25s;
  display: table-cell;
  list-style: none;
  text-align: center;
  padding: 20px;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  color: #666;
  background-color: #0D0D0D;
  font-weight: bold;

}
.tabs > li:before {
  z-index: -1;
  position: absolute;
  content: "";
  width: 100%;
  height: 120%;
  color: #FFF;  
  top: 0;
  left: 0;
  background-color: #DDD;
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
  transition-duration: .25s;
  border-radius: 0;
}

.tabs > li:hover:before {
  -webkit-transform: translateY(70%);
  transform: translateY(70%);
}
.tabs > li.active {
  color: #FFF;
  background-color: transparent;
}
.tabs > li.active:before {
  transition-duration: .5s;
  background-color: #444;
  -webkit-transform: translateY(0);
  transform: translateY(0);
}

.tab__content {
  background-color: white;
  position: relative;
  width: 100%;
  border-radius: 5px 5px 0px 0px;
  background-color: #444;
-webkit-box-shadow: 0px 12px 34px -8px rgba(0,0,0,0.28);
-moz-box-shadow: 0px 12px 34px -8px rgba(0,0,0,0.28);
box-shadow: 0px 12px 34px -8px rgba(0,0,0,0.28);
 
}
.tab__content > li {
  width: 100%;
  position: absolute;
  border-radius: 5px;
  color: #FFF;
  top: 0;
  left: 0;
  background-color: #444;
  display: none;
  list-style: none;
}
.tab__content > li .content__wrapper {
  text-align: center;
  border-radius: 5px;
  padding-top: 24px;
  background-color: #444;
}

.flex-bg{
		 background-image: url(images/package-05.jpg);
background-attachment: fixed;
background-size: cover;
background-position: center;
background-repeat: no-repeat;}

.palma{font-size:36px; font-weight:600;
color: #fff;
letter-spacing: 4px;}

.palma-sub{font-size:24px;
color: #fff;
letter-spacing: 0.5px;}

.box-head{ padding: 10px !important;
	text-align: center;
}

.form{padding: 16px;}
form input {
	border: none;
	padding: 6px;
	background: #fff;
	font-size: 16px;
	margin: 12px;
	width: -webkit-fill-available;
	outline: none;
	color:#666666;
}
form input:first-child {margin-top: 8px;}
form input:last-child { margin-bottom: 0px;}
form input:focus {background-color: #FFF;}
form input:hover {background-color: #FFF;}
form input:placeholder {color: blue;}
form [type="submit"]:focus,
form [type="submit"]:hover {background: #009CEF;}
form [type="submit"] {
	background: #3399DD;
	color: #FFF;
	padding: 24px;
	width: 100%;
	cursor: pointer;
}

::-webkit-input-placeholder {color: #DDD;}
:-moz-placeholder           {color: #DDD;}
::-moz-placeholder          {color: #DDD;}
:-ms-input-placeholder      {color: #DDD;}
.ipar{
	margin-bottom: 8px;
	background:#fff;
	border-radius: 4px;
	padding:0px;
}
.cinner{position: relative;}
.label{    position: absolute;
    color: #a9a8a8;
    text-transform: uppercase;
    font-size: 11px;
    letter-spacing: 1.2px;
    margin:3px 0px ;
    left: 5px;}

    ::placeholder { 
  color: #757575;
font-size: 18px;

}
.input:focus .ipar{border:1px solid;}
.licon{position: absolute;
    left: auto;
    bottom: 5px;
    right: 5px;
    color: #757575;
    font-size: 18px;
}
/* end-form-css*/


.col-xs-15,
.col-sm-15,
.col-md-15,
.col-lg-15 {
    position: relative;
    min-height: 1px;
    padding-right: 10px;
    padding-left: 10px;
}
.col-xs-15 {
    width: 20%;
    float: left;
}
@media (min-width: 768px) {
.col-sm-15 {
        width: 20%;
        float: left;
    }
}
@media (min-width: 992px) {
    .col-md-15 {
        width: 20%;
        float: left;
    }
}
@media (min-width: 1200px) {
    .col-lg-15 {
        width: 20%;
        float: left;
    }
}


.slick_main_hover{
	margin:0px; 
	cursor:pointer;
	padding: 20px 0;
}

.slickslider1 .img-fluid{padding-top: 10px;}

.slick_main_hover:hover{
	background-color:#F7F7F7;
}


.col-lg-12{
	padding:0px;
}
.header-image {
  position: relative;
  text-align: center;
  color: white;
  height:100px;
  background: rgba(0,0,0,0.9);
  
}
.centered-form-div {
  position: absolute;
  top: 8%;
  right:50px;
  width:400px;
}



.text-cont{
	text-align: center;
	padding: 10px;
}



/*Image-zoom-on-hover*/
.parent {
    width: 100%;
	background-color:#CCFF66;
	padding:0px;
    cursor: pointer;
	overflow: hidden;
    position: relative;
	
}
.child {
    height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s;
}
.parent:hover .child, .parent:focus .child {
    -ms-transform: scale(1.03);
    -moz-transform: scale(1.03);
    -webkit-transform: scale(1.03);
    -o-transform: scale(1.03);
    transform: scale(1.03);
}
.card2:hover .child, .parent:focus .child {
    -ms-transform: scale(1.07);
    -moz-transform: scale(1.07);
    -webkit-transform: scale(1.07);
    -o-transform: scale(1.07);
    transform: scale(1.07);
	
}
.card2:hover{
	transition: all 0.3s ease 0s;
	box-shadow: 0 0 16px 0 rgba(51,51,51,0.2);
}
.card3:hover{
	box-shadow:0px 0px 10px lightgray;
}
.card3-style{	
	border-radius:50%; 
	height:60px; 
	width:60px;  
	padding:0px; 
	position:absolute;
	margin-top:-54px; right:3%
}
.parent:hover .child:before, .parent:focus .child:before {
    display: block;
}
.parent:hover a, .parent:focus a {
    display: block;
}
.child:before {
    content: "";
    display: none;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
}
@media screen and (max-width: 960px) {
    .parent {width: 100%; height:210px; display:block }
}
@media screen and (max-width: 778px) {
    .parent {width: 100%; height:210px; display:block}
}
/*end-image-zoom-on-hover*/

@media only screen and (max-width: 768px){
	.centered-form-div {
  position: absolute;
  top: 8%;
  right:5%;
  max-width: 92%;
}
}

.relaxed-journey{
	padding:20px; 
	position: absolute; 
	top: 50px; 
	left: 16px; 
	padding-top:0px;
}
@media (max-width:992px){
	.relaxed-journey{
		display:none;
	}
}


.logos-fb{
	height:50px; 
	width:50px; 
	border-radius:50%; 
	padding:14px; 
	padding-left:17px;
	margin-left:10px
}
.logos-fb:hover{
	cursor:pointer;
	background-color:#F0F0F0;
}
.logos-twitter{
	height:50px; 
	width:50px; 
	border-radius:50%; 
	padding:15px; 
	padding-left:17px; 
	margin-left:10px
}
.logos-twitter:hover{
	cursor:pointer;
	background-color:#F0F0F0;
}
.logos-linkedin{
	height:50px; 
	width:50px; 
	border-radius:50%; 
	padding:15px; 
	padding-left:17px; 
	margin-left:10px
}
.logos-linkedin:hover{
	cursor:pointer;
	background-color:#F0F0F0;
}
.logos-youtube{
	height:50px; 
	width:50px; 
	border-radius:50%; 
	padding:15px; 
	padding-left:14px; 
	margin-left:10px;
}
.logos-youtube:hover{
	cursor:pointer;
	background-color:#F0F0F0;
}
.logos-instagram{
	height:50px; 
	width:50px; 
	border-radius:50%; 
	padding:15px; 
	padding-left:17px; 
	margin-left:10px
}
.logos-instagram:hover{
	cursor:pointer;
	background-color:#F0F0F0;
}


@media (max-width: 576px) {
	.palma-one{
		display:block;
	}
	.palma-two, .palma-three, .palma-four, .palma-five{
		display:none;
	}
}
@media screen  and (max-width: 768px) and (min-width: 576px) {
	.palma-one, .palma-two, .palma-three{
		display:block;
	}
	.palma-four, .palma-five{
		display:none;
	}
	
}
@media screen  and (max-width: 992px) and (min-width: 768px) {
	.palma-one, .palma-two, .palma-three{
		display:block;
	}
	.palma-four, .palma-five{
		display:none;
	}
}
@media screen  and (max-width: 1200px) and (min-width: 992px) {
	.palma-one, .palma-two, .palma-three{
		display:block;
	}
	.palma-four, .palma-five{
		display:none;
	}
}
@media screen  and (max-width: 1800px) and (min-width: 1200px) {
	.palma-one, .palma-two, .palma-three, .palma-four, .palma-five{
		display:block;
	}
}

.meet-our-fleet{
	font-size:36px; 
	font-weight: 600; 
	padding-left:10px; 
	color:rgba(0, 0, 0, 0.92);
}
@media (max-width:768px){
	.meet-our-fleet{
		font-size:28px; 
	}
}


.footer-menue-top{
	padding-top:12px; 
	padding-bottom:12px; 
	margin-top:10px;
	border-top:1px solid #f1efef; 
	border-bottom:1px solid #f1efef;
	font-size: 14px !important;
	color:#666666;
	
}
.footer-menue-top:hover{
	cursor:pointer;
	background-color:#F0F0F0;
	color:#005299;
}
.footer-menue-other{
	padding-top:12px; 
	padding-bottom:12px; 
	color:#666666;
	font-size: 14px !important;
	border-bottom:1px solid #f1efef;
	
}
.footer-menue-other:hover{
	cursor:pointer;
	background-color:#F0F0F0;
	color:#005299;
}

.second-footer-menue-top{
	padding-top:12px; 
	padding-bottom:12px; 
	margin-top:10px;
	border-top:1px solid #f1efef; 
	border-bottom:1px solid #f1efef;
	font-size: 14px !important;
	color:#666666;
	
}
.second-footer-menue-top:hover{
	cursor:pointer;
	background-color:#F0F0F0;
	color:#005299;
}
.second-footer-menue-other{
	padding-top:12px; 
	padding-bottom:12px; 
	color:#666666;
	font-size: 14px !important;
	border-bottom:1px solid #f1efef;
}
.second-footer-menue-other:hover{
	cursor:pointer;
	background-color:#F0F0F0;
	color:#005299;
}

.footer-menue-arrow{
	height:7px; 
	float:right; 
	margin-top:7px;
	margin-right:10px;
}

@media (max-width: 768px) {
	.footer-for-pc{
		display:none
	}
	.footer-for-mobile{
		display:block;
		padding:0px;
	}
	.footer-menue-top{
		padding:8px;
		padding-left:3px;
		padding-right:3px;
	}
	.footer-menue-other{
		padding:8px;
		padding-left:3px;
		padding-right:3px;
	}
}

@media (min-width: 768px) {
	.footer-for-pc{
		display:block;
	}
	.footer-for-mobile{
		padding:10px;
		display:none;
	}
}

@media (max-width: 768px) {
	.second-footer-menue-top, .second-footer-menue-other {
        display:none;
		font-family: calibri;
    }
	.about, .services, .customer-support, .digital{
		cursor:pointer;
		padding:5px;
		border-radius:1px;
		font-size: 16px;
		padding-bottom:13px;
	}	
	.about:hover, .services:hover, .customer-support:hover, .digital:hover{
		background-color:#F7F7F7;
	}
}


.footer-one-text{
	cursor:pointer;
	font-weight:100;
	font-family:calibri;
	font-size: 14px;
} 
.footer-one-text-inline{
	display:inline;
	margin-left: 8px;
	margin-right: 8px;
}
.footer-one-text:hover{
	color:#005299;
} 

.footer-col-one{
	color:#6f6660;
}
.footer-col-two{
	color:#6f6660;
}
.footer-col-three{
	color:#6f6660;
	text-align:right;
}
@media(max-width:768px){
	.footer-one-text-inline{
		line-height: 2;
	}
	
	.footer-col-one{
		text-align:center;
	}
	.footer-col-one-logo{
		padding-bottom:5px;
		display: block;
		font-size:18px;
	}
	.footer-col-two{
		padding-top:5px;
		text-align:center;
	}
	.footer-col-three{
		margin-top:10px;
		text-align:center;
	}
}


.logos-container{
	margin-bottom: 10px; 
	}

@media (max-width:768px){
	.logos-container{
		border-top:1px solid #f8f8f8;
	}
}
.starr{
	padding:6px;
	padding-top:10px; 
	padding-left:8px;
	background-color:#008000; 
	font-size:26px
}
.star{
	padding:6px;
	padding-left:8px;
	padding-top:10px; 
	background-color:#008080; 
	margin:2px;
	font-size:14px;
}
.star-one{
	color:#FFFFFF;
}
.star-all{
	color:#FFFFFF;
}
</style>
</head>

<body style="font-family:'Gentona Book'; color:#999999; " >
    @include('inc.navbar')   
	@yield('content')
    @include('inc.footer')
</body>
</html>