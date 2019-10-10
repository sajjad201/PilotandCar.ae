
@extends('layouts.app-one')

@section('page_title')
    SERVICE FAQS
@endsection

@section('tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection

@section('content')

<style>
.cohXzM {
	color: white;
	display: flex;
	background: rgb(120, 94, 240);
	padding: 50px;
}
.eJSgbb {
    background: rgb(82, 69, 194);
}
@media only screen and (min-width: 768px){
	.dvbfrh {
		display: flex;
		max-width: 960px;
		margin: 0px auto;
	}
	.fCyojW {
    max-width: 230px;
    padding-bottom: 25px;
	}
}

.kWQICu {
    display: flex;
    -webkit-box-flex: 1;
    flex-grow: 1;
    margin-right: 10px;
}
.CeeqZ {
    display: flex;
}
.cRSgQr {
    height: 60px;
    margin-right: 20px;
}
.fCyojW {
    font-style: italic;
    font-weight: 600;
    font-size: 38px;
    line-height: 38px;
    letter-spacing: -2px;
}

.gDSYPy {
    padding-right: 25px;
}
.eJSgbb {
    background: rgb(82, 69, 194);
}
.hhByfK {
    max-width: 1050px;
    display: flex;
    margin: 0px auto;
    padding: 20px 50px;
}
.bRkXTe {
    color: white;
    font-style: italic;
    font-size: 38px;
    line-height: 38px;
    letter-spacing: -1px;
    font-weight: 600;
    -webkit-box-flex: 1;
    flex-grow: 1;
}
.jGqaXi {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
}
.pKKMO {
    color: black;
    text-transform: uppercase;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 5px 0px;
    font-weight: 500;
    font-size: 14px;
    height: 45px;
    white-space: nowrap;
    cursor: default;
    background: rgb(252, 238, 34);
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    border-radius: 45px;
    padding: 0px 45px;
}


.faq-inner{
	padding:60px 8%;
}
.faq-h1{
	color: #fff;
	font-size: 70px;
	font-weight: bold;
	text-shadow: 1px 3px 3px black;
}
.faq-p{
	color: #fff;
	font-size: 1.2rem;
}

.eMdhRo {
    font-size: 58px;
    font-weight: 800;
    letter-spacing: -3px;
    margin: 50px 0px;
}
.hlxkug {
    padding-bottom: 35px;
    margin-bottom: 35px;
    border-bottom: 1px solid rgb(216, 220, 230);
}
.edQKDL {
    display: flex;
    cursor: pointer;
}
.jCTEqM {
    -webkit-box-flex: 1;
    flex-grow: 1;
}

.hgnFwS {
    font-weight: 600;
    font-size: 36px;
}
.dsfbzM {
    padding-bottom: 3px;
    font-size: 25px;
    cursor: pointer;
    margin-left: 10px;
    border-width: 2px;
    border-style: solid;
    border-color: black;
    border-image: initial;
}
.bXpLDp {
    width: 30px;
    height: 30px;
    min-width: 30px;
    min-height: 30px;
    display: flex;
    flex-direction: column;
    -webkit-box-pack: center;
    justify-content: center;
    text-align: center;
    user-select: none;
	border-radius: 30px;
	padding: 0px 0px -3px ;
}
</style>

<div style="color:#2e2e2e">
<section style="background-image: url(pilotpublic/images/os82.jpg);">
	<div class="faq-inner">
		<h1 class="faq-h1">FAQs</h1>
		<p class="faq-p">Find answers to your frequently asked questions</p>
	</div>
</section>

<section>
	<div class="container-fluid" style="padding:50px 20px 50px 20px; background-color:#fbfbfb">
		<h1><strong>YOUR MAKE-IT-HAPPEN RENTAL CAR.</strong></h1>
		<p>Find answers to your frequently asked questions</p>
	</div>
</section>


<section>
	<div class="sc-dNLxif cohXzM">
		<div class="sc-jqCOkK dvbfrh">
			<div class="sc-hmzhuo kWQICu">
				<div class="sc-frDJqD CeeqZ">
					<div>
						<img src="https://cdn.lyft.com/expressdrivefe/checkmark.43baadb5.svg" class="sc-jbKcbu cRSgQr">
					</div>
					<div>
						<div class="sc-kvZOFW fCyojW">Costs are covered</div>
						<div class="sc-hqyNC gDSYPy">Insurance and standard maintenance are always included.</div>
					</div>
				</div>
			</div>
			<div class="sc-hmzhuo kWQICu">
				<div class="sc-frDJqD CeeqZ">
					<div>
						<img src="https://cdn.lyft.com/expressdrivefe/unlock.632dc76e.svg" class="sc-jbKcbu cRSgQr">
					</div>
					<div>
						<div class="sc-kvZOFW fCyojW">Rent. Drive. Earn.</div>
						<div class="sc-hqyNC gDSYPy">Drive unlimited miles for Lyft and get extra miles for personal use.</div>
					</div>
				</div>
			</div>
			<div class="sc-hmzhuo kWQICu">
				<div class="sc-frDJqD CeeqZ"><div>
					<img src="https://cdn.lyft.com/expressdrivefe/calendar.6d73f63e.svg" class="sc-jbKcbu cRSgQr">
				</div>
				<div>
					<div class="sc-kvZOFW fCyojW">No long-term contract</div>
					<div class="sc-hqyNC gDSYPy">Get a car to earn on your terms. Return it anytime after seven days.</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="sc-kgAjT eJSgbb">
	<div class="sc-dVhcbM sc-TOsTZ hhByfK">
		<div class="sc-cJSrbW bRkXTe">Earn with a rental car.</div>
		<div class="sc-ksYbfQ jGqaXi">
			<button class="sc-cHGsZl pKKMO">Apply Now</button>
		</div>
	</div>
</div>

</section>
<br><br><br>
<section>
	<div class="container">
		<div class="sc-gipzik eMdhRo">
			Frequently asked questions
		</div>
		<div class="sc-iRbamj hlxkug">
			<div class="sc-jlyJG edQKDL" data-toggle="collapse" data-target="#q1">
				<div class="sc-gPEVay jCTEqM">
					<h1 class="sc-jDwBTQ hgnFwS">How do I apply?</h1>
				</div>
				<div class="sc-jAaTju dsfbzM sc-cMljjf bXpLDp" size="30">+</div>
			</div>
			<div id="q1" class="collapse">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</div>
		</div>
		
		
		<div class="sc-iRbamj hlxkug">
			<div class="sc-jlyJG edQKDL" data-toggle="collapse" data-target="#q2">
				<div class="sc-gPEVay jCTEqM">
					<h1 class="sc-jDwBTQ hgnFwS">Where is Express Drive available?</h1>
				</div>
				<div class="sc-jAaTju dsfbzM sc-cMljjf bXpLDp" size="30">+</div>
			</div>
			<div id="q2" class="collapse">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</div>
		</div>
		
		<div class="sc-iRbamj hlxkug">
			<div class="sc-jlyJG edQKDL" data-toggle="collapse" data-target="#q3">
				<div class="sc-gPEVay jCTEqM">
					<h1 class="sc-jDwBTQ hgnFwS">How long can I keep my rental?</h1>
				</div>
				<div class="sc-jAaTju dsfbzM sc-cMljjf bXpLDp" size="30">+</div>
			</div>
			<div id="q3" class="collapse">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</div>
		</div>
		
		<div class="sc-iRbamj hlxkug">
			<div class="sc-jlyJG edQKDL" data-toggle="collapse" data-target="#q4">
				<div class="sc-gPEVay jCTEqM">
					<h1 class="sc-jDwBTQ hgnFwS">How do I get paid?</h1>
				</div>
				<div class="sc-jAaTju dsfbzM sc-cMljjf bXpLDp" size="30">+</div>
			</div>
			<div id="q4" class="collapse">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</div>
		</div>
		
		<div class="sc-iRbamj hlxkug"><div class="sc-jlyJG edQKDL" data-toggle="collapse" data-target="#q5">
			<div class="sc-gPEVay jCTEqM">
				<h1 class="sc-jDwBTQ hgnFwS">Is Lyft safe?</h1>
			</div>
			<div class="sc-jAaTju dsfbzM sc-cMljjf bXpLDp" size="30">+</div>
		</div>
		<div id="q5" class="collapse">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</div>
	</div>
	
	<div class="sc-iRbamj hlxkug">
		<div class="sc-jlyJG edQKDL" data-toggle="collapse" data-target="#q6">
			<div class="sc-gPEVay jCTEqM">
				<h1 class="sc-jDwBTQ hgnFwS">What do I need to drive with Lyft?</h1>
			</div>
			<div class="sc-jAaTju dsfbzM sc-cMljjf bXpLDp" size="30">+</div>
		</div>
		<div id="q6" class="collapse">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</div>
	</div>
	
	<div class="sc-iRbamj hlxkug">
		<div class="sc-jlyJG edQKDL" data-toggle="collapse" data-target="#q7">
			<div class="sc-gPEVay jCTEqM">
				<h1 class="sc-jDwBTQ hgnFwS">Is there an age limit for Express Drive?</h1>
			</div>
			<div class="sc-jAaTju dsfbzM sc-cMljjf bXpLDp" size="30">+</div>
		</div>
		<div id="q7" class="collapse">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</div>
	</div>
	
	<div class="sc-iRbamj hlxkug">
		<div class="sc-jlyJG edQKDL" data-toggle="collapse" data-target="#q8">
			<div class="sc-gPEVay jCTEqM">
				<h1 class="sc-jDwBTQ hgnFwS">Do I have to give Lyft rides to keep my rental?</h1>
			</div>
			<div class="sc-jAaTju dsfbzM sc-cMljjf bXpLDp" size="30">+</div>
		</div>
		<div id="q8" class="collapse">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</div>
	</div>
	
	<div class="sc-iRbamj hlxkug">
		<div class="sc-jlyJG edQKDL" data-toggle="collapse" data-target="#q9">
			<div class="sc-gPEVay jCTEqM">
				<h1 class="sc-jDwBTQ hgnFwS">Is there a deposit required?</h1>
			</div>
			<div class="sc-jAaTju dsfbzM sc-cMljjf bXpLDp" size="30">+</div>
		</div>
		<div id="q9" class="collapse">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</div>
	</div>
	
	</div>
</section>
</div>      
    
@endsection




