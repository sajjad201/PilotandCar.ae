<style>
.pr-5-head-txt{
    font-size: 40px;
    font-weight: 700;
    color: navy;
    margin-bottom: 30px;
}    
.pr-5-flex-div {
  background-color: white;
  font-size: 15px;
  border:1px solid #eeeeee;
  position: relative;
  width: 202px;
  color: #252525;
  margin: 10px;
}
.pr-5-flex-div-txt{
    padding: 25px 10px 25px 10px;
    text-align: center;
    border-bottom: 1px solid lightgray;
    font-size: 16px;
}
.pr-5-flex-div-links{
    border-bottom: 1px solid lightgray;
    padding: 15px 20px 10px 20px;
    cursor: pointer;
    height: 50px;
}
.pr-5-flex-div-links-icons{
    margin-top: 2px;
    float: right;
}
.pr-5-flex-div-links:hover{
    padding: 12px 20px 10px 20px;
    background-color: #F0EDE5;
    font-size: 18px;
}
.pr-5-flex-div-links:hover .pr-5-flex-div-links-icons{
    margin-top: 5px;
}
.pr-5-flex-div-links-span{
    font-size: 11px;
    display: inline-block;
    margin-left: 5px;
    font-weight: 100;
    color: black;
}
</style>
<section class="pr-5">
    <div class="container-fluid">
        <div class="container">
            <div class="col-md-12 pr-5-head-txt">
                Find your destination
            </div>
            <div class="row">
                <div class="col-md-12 flex-container">

                   @for($i=0; $i<5; $i++)
                    <div class="pr-5-flex-div">
                       <img src="pilotpublic/images/airport/p1.jpeg" style="width:100%; height:125px" class="img-b">
                        <div class="pr-5-flex-div-txt">Shanghai<br>
                            <span style="font-weight:100; font-size:10px"> China (mainland)</span>
                        </div>
                        <div class="pr-5-flex-div-links">   
                            <?php $link="pilotpublic|images|chauf|p6.jpeg" ?>                       
                            <a href="{{url('product-form/hourly/340/' .$link)}}" class="a-link-ok">
                                BOOK RIDE<div class="pr-5-flex-div-links-span"><span style="background-color:blanchedalmond"> per hour</span></div>
                                <i class="fas fa-caret-right pr-5-flex-div-links-icons"></i>
                            </a>    
                        </div>
                        <div class="pr-5-flex-div-links">   
                            <?php $link="pilotpublic|images|chauf|p3.jpeg" ?>                                 
                            <a href="{{url('product-form/hourly/340/' .$link)}}" class="a-link-ok">
                                BOOK RIDE <div class="pr-5-flex-div-links-span"><span style="background-color:blanchedalmond"> per day</span></div>
                                <i class="fas fa-caret-right pr-5-flex-div-links-icons"></i>
                            </a>    
                        </div>
                    </div>

                    
                    <div class="pr-5-flex-div">
                       <img src="pilotpublic/images/airport/p3.jpeg" style="width:100%; height:125px" class="img-b">
                        <div class="pr-5-flex-div-txt">Shanghai<br>
                            <span style="font-weight:100; font-size:10px"> China (mainland)</span>
                        </div>
                        <div class="pr-5-flex-div-links">  
                            <?php $link="pilotpublic|images|chauf|p3.jpeg" ?>                                   
                            <a href="{{url('product-form/hourly/340/' .$link)}}" class="a-link-ok">
                                BOOK RIDE<div class="pr-5-flex-div-links-span"><span style="background-color:blanchedalmond"> per hour</span></div>
                                <i class="fas fa-caret-right pr-5-flex-div-links-icons"></i>
                            </a>
                        </div>
                        <div class="pr-5-flex-div-links">  
                            <?php $link="pilotpublic|images|chauf|p3.jpeg" ?>                                   
                            <a href="{{url('product-form/hourly/340/' .$link)}}" class="a-link-ok">
                                BOOK RIDE <div class="pr-5-flex-div-links-span"><span style="background-color:blanchedalmond"> per day</span></div>
                                <i class="fas fa-caret-right pr-5-flex-div-links-icons"></i>
                            </a>
                            </a>
                        </div>
                    </div>

                    @endfor
                   
                   
                    
                </div>
            </div>
        </div>
    </div>
</section>