<?php    
$title="Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur | SEVA";	
 $pgDesc="Visit SEVA Automotive's Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur for the best Maruti Suzuki s presso, Brezza, Swift Dzire, Ertiga & Swift price";
 $pgKeywords="maruti suzuki, maruti suzuki car, Car, brezza, swift dzire, ertiga, alto 800, wagon r, alto k10, maruti, celerio, swift price, vitara brezza, swift dzire price, maruti suzuki swift, ertiga price, ertiga car, maruti suzuki s presso, maruti x presso, maruti suzuki arena, maruti showrooms near me, maruti cars, maruti suzuki ertiga, suzuki ertiga, maruti swift, wagon r 2020, swift vdi, dzire,Maruti Suzuki Showroom Nagpur, Maruti Suzuki Nagpur, Maruti Suzuki Showroom Nashik, Maruti Suzuki ARENA Nagpur, ARENA Nashik";
 
 include('connection.php');
  include 'header.php';
?>
<main>
  <!--Starting BOX-->
  
  <div id="boxes">
    <div style="display: none;" id="dialog" class="window">
      <div class="website_intro">
        <div class="welcomesect">
          <div class="row"> 
            <!--  <div class="col-md-6 text-left">Welcome to Seva</div> -->
            <div class="col-md-4 ml-auto text-md-right">
              <picture>
                <source srcset="assets/images/icon/maruti-opisial.svg" type="image/webp">
                <source srcset="assets/images/marutilogo.png" type="image/png">
                <img src="assets/images/marutilogo.png" class="martuiLogo lazyload"> </picture>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="seva-logo"> <img src="assets/images/icon/seva-logo.svg" class="lazyload" style="width: 180px;" /> </div>
          </div>
        </div>
        <h2>Select your Drive</h2>
        <div class="other-sites" id="popupfoot"> 
          <a class="close agree" href="https://marutiseva.com/"> 
            <img src="assets/images/icon/arena.svg" class="lazyload"  /> 
          </a> 
          <a href="https://nexa.marutiseva.com/"> 
            <img src="assets/images/icon/nexa.svg" class="lazyload"/> 
          </a> 
          <a href="https://truevalue.marutiseva.com/"> 
            <img src="assets/images/true-value-white.svg" /> 
          </a> 
          <a href="https://commercial.marutiseva.com/"> 
            <img src="assets/images/icon/commercial.svg" class="lazyload"  /> 
          </a> 
        </div>
      </div>
    </div>
    <div id="mask"></div>
  </div>
  <!--Starting BOX-->

  <div class="container-fluid">
    <div class="row body-content">
      <div class="col-sm-12 px-0">
        <div id="carousel-example-1z" class="carousel slide carousel-fade desktop-view" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <?php 
              $slider = "SELECT * FROM `slider` ORDER BY `slider`.`slider_id` ASC";
              $results = mysqli_query($conn, $slider);
              $i =1; 
              while ($row = $results->fetch_assoc()) {
            ?>
            <div class="carousel-item <?php if($i ==1){echo "active";}?>"> 
              <a href="<?php echo $row['link'];?>">
              <picture>
                <source srcset="admin/upload/seva_banner/<?php echo $row['slider_img'];?>" type="image/jpg">
                <source srcset="admin/upload/seva_banner/<?php echo $row['slider_img'];?>" type="image/jpg">
                <img class="d-block w-100 lazyload" src="admin/upload/seva_banner/<?php echo $row['slider_img'];?>" alt="eight slide"> </picture>
              </a> 
            </div>
            <?php 
            $i++;
            }
            ?>
          </div>
          <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
      </div>
    </div>
  </div>
  <section class="feature-car car_browse_area page-section-ptb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <div class="section-title"> <!--<span>Check out our recent cars</span> -->
            <h2>Product</h2>
            <div class="separator"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="blogCarousel" class="carousel slide" data-ride="carousel">
            <?php 
              $product = "SELECT * FROM `product_cat` where car !='Eeco Tour' ORDER BY `product_cat`.`id` ASC";
              $results1 = mysqli_query($conn, $product);
              $count = $results1->num_rows;
            ?>
            <ol class="carousel-indicators">
              <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#blogCarousel" data-slide-to="1"></li>
            </ol>
               <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-3 col-6">
                    <div class="car-item">
                      <div class="car-image"> 
                        <img src="assets/images/alto/alto-12.jpg" alt="Image" style="max-width:100%;">
                        <!-- <div class="car-overlay-banner">
                          <ul>
                            <li><a href="#"><i class="mdi mdi-car-sports"></i></a></li>
                            <li><a href="#"><i class="mdi mdi-download"></i></a></li>
                          </ul>
                        </div> -->
                      </div>
                      <!-- <div class="car-list">
                        <ul class="list-inline">
                          <li><i class="fa fa-registered"></i> 2017</li>
                          <li><i class="fa fa-cog"></i> Manual </li>
                          <li><i class="fa fa-cart-arrow-down"></i> 6,000 mi</li>
                        </ul>
                      </div> -->
                      <div class="car-content">
                        <a href="alto.php"> Alto </a>
                        <div class="separator d-none d-md-block"></div>
                        <!-- <div class="price"> 
                          <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768</span> 
                          <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                        </div> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="car-item">
                      <div class="car-image"> <img src="assets/images/wagonr/wegonr.jpg" alt="Image" style="max-width:100%;">
                    </div>
                      
                      <div class="car-content">
                        <a href="wagonr.php">Wagon R </a>
                        <div class="separator d-none d-md-block"></div>
                        <!-- <div class="price"> 
                          <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768 </span> 
                          <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                        </div> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="car-item">
                      <div class="car-image"> 
                      <img src="assets/images/celerio/exterior1.jpg" alt="Image" style="max-width:100%;">
                    </div>
                      
                      <div class="car-content">
                        <a href="celerio.php">Celerio</a>
                        <div class="separator d-none d-md-block"></div>
                        <!-- <div class="price"> 
                          <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768</span> 
                          <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                        </div> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="car-item">
                      <div class="car-image"> <img src="assets/images/exterior1.jpg" alt="Image" style="max-width:100%;">
                    </div>
                      
                      <div class="car-content">
                        <a href="dzire.php">Dzire</a>
                        <div class="separator d-none d-md-block"></div>
                        <!-- <div class="price"> 
                          <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768</span> 
                          <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-3 col-6">
                    <div class="car-item">
                      <div class="car-image"> 
                        <img src="assets/images/swift/exterior1.jpg" alt="Image" style="max-width:100%;">
                      </div>
                      <div class="car-content">
                        <a href="swift.php">  Swift </a>
                        <div class="separator d-none d-md-block"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="car-item">
                      <div class="car-image"> <img src="assets/images/ecco-product.png" alt="Image" style="max-width:100%;">
                    </div>
                      
                      <div class="car-content">
                        <a href="eeco.php">EECO </a>
                        <div class="separator d-none d-md-block"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="car-item">
                      <div class="car-image"> <img src="assets/images/vitara-brezza/exterior1.jpg" alt="Image" style="max-width:100%;">
                    </div>
                      
                      <div class="car-content">
                        <a href="vitara-brezza.php">Vitara Brezza</a>
                        <div class="separator d-none d-md-block"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="car-item">
                      <div class="car-image"> <img src="assets/images/s-presso/s-presso.jpg" alt="Image" style="max-width:100%;">
                    </div>
                      
                      <div class="car-content">
                        <a href="s-presso.php">S Presso</a>
                        <div class="separator d-none d-md-block"></div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container-fluid treading-section hero">
    <div class="outer slick-initialized slick-slider">
      <div class="slick-list draggable">
        <div class="slick-track">
          <div class="row">
            <div class="col-lg-5 col-sm-12 px-0 pr-0 trending-rockerz leftColumn">
              <div id="demo" class="carousel slide" data-ride="carousel">
             <?php 
                $offer_slider = "SELECT * FROM `offerslider` ORDER BY `offerslider`.`slider_id` ASC";
                $offer_slider_Result = mysqli_query($conn, $offer_slider);
                $number = $offer_slider_Result->num_rows;
                $i =1;$j=0;?>

                <ul class="carousel-indicators">
                  <?php 
                    for ($j=0; $j < $number ; $j++) { 
                     if($j==0){ $active=""; }else{ $active="";}
                  ?>
                  <li data-target="#demo" data-slide-to="<?php echo $j;?>" class="<?php echo $active;?>"></li>
                  <?php }?> 

                </ul>
              
                <!-- The slideshow -->
                <div class="carousel-inner" style="width: 102.5%;">
                <?php 
                 while ($offer_row = $offer_slider_Result->fetch_assoc()) {
                  $active = ($i==1)?"active":'';
                ?>
                <div class="carousel-item <?php echo $active;?>">
                   <img src="admin/upload/seva_offer_banner/<?php echo $offer_row['slider_img'];?>" alt="maruti-seva" class="w-100">
                </div>

                <?php $i++; }?>
                <!-- 
                  <div class="carousel-item">
                    <img src="assets/new-offer/ertiga.jpg" alt="New Offer" class="w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/new-offer/dzire.webp" alt="New Offer" class="w-100">
                  </div> -->
                </div>
              
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              
              </div>
            </div>
      
            <div class="col-md-12 col-lg-7 ">
              <div class="row">
                <div class="col-6 col-sm-6 px-0 pr-0 trending-rockerz column centerColumn slick-slide slick-active"> 
                  <img src="assets/images/icon/seva-service.jpg" class="img-fluid"> 
                  <div class="services-center-box">
                   <div class="inner-conntent"> 
                    <div class="row">
                      <div class="col-md-12">
                        <div class="imgbox-content">
                          <h2 class="text-white">Schedule Service / Accident Repair</h2>
                          <p>Seva's Authorised Maruti Suzuki service Centers to serve Best in Class and Professional Services</p>
                          <div class="wrap-btn">
                              <a href="schedule-services.php" class="flat-button btn-radius v2">BOOK SERVICE</a>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div> 
                    </div>
                </div>
                <div class="col-6 col-sm-6 px-0 pr-0 trending-rockerz column rightColumn slick-slide slick-active">
                  <img src="assets/images/icon/true-value.jpg" class="img-fluid">
                  <div class="services-center-box">
                    <div class="inner-conntent"> 
                     <div class="row">
                       <div class="col-md-12">
                         <div class="imgbox-content">
                           <h2 class="text-white">
                             <a href="https://truevalue.marutiseva.com/" target="_blank">Used / Preowned Cars <br/> Sell and Buy</a>
                            </h2>
                           <p>Seva Maruti Suzuki True Value, an online trading portal for pre-owned and used cars</p>
                           <div class="wrap-btn">
                            <a href="https://truevalue.marutiseva.com/" class="flat-button btn-radius v2">VIEW MORE</a>
                        </div>
                         </div>
                       </div>
                       </div>
                     </div> 
                     </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <section id="ts-feature" class="custom-block-3 white-bg page-section-pb">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="title">
            <h1>About Seva Automotive</h1>
          </div>
          <div class="content ">
             
            <p class="text-justify">Seva Automotive is an authorized multi-location Maruti Suzuki dealership since 1985. Headquartered in Nashik, Seva Automotive family has marked its presence in Nashik, Nagpur, Nanded, Dhule, Wardha & Nandurbar. It also has its presence in rural areas like Igatpuri, Yeola, Hinganghat, Ramtek, Katol with overall 11 Arena Showrooms (including 2 E-outlets and 5 R-Outlets), 3 Nexa Showrooms, 4 Commercial Showrooms, 2 True Value Outlets, 13 Workshops in Maharashtra. </p>
            <p class="text-justify">
              We're a full service, state-of-the-art Maruti Suzuki dealership who strives to provide high-quality service, amenities, & experience. With Seva Automotive you are one step closer to owning your dream car. Our goal is to provide our customers with quality cars they can drive right off our showroom floor. 
            </p>
          </div>
         
        </div>
        <div class="col-md-6">
          <div class="overimg-layout"> <img src="assets/images/icon/head-office.jpeg" class="img-fluid"/> </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container feature-car mt-5">
    <div class="section-title mb-2">
      <h2>Our Values</h2>
      <div class="separator"></div>
    </div>
    <div class="our-values">
      <div class="row">
        <ul class="col-lg-12 col-md-12 col-sm-12">
          <li >
            <div class="img-space"><img src="assets/images/responsible.png" alt="responsible lazyload"></div>
            <div class="content-holder">
              <h3 class="text-uppercase">Responsible</h3>
              <p>You can always rely on us and our network.</p>
            </div>
          </li>
          <li >
            <div class="img-space"><img src="assets/images/dynamic.png" alt="dynamic" class="lazyload"></div>
            <div class="content-holder">
              <h3 class="text-uppercase">Dynamism</h3>
              <p><span style="background-color: #ffffff; letter-spacing: -0.5px; color: #585858;">Always evolving with your needs.</span></p>
            </div>
          </li>
          <li >
            <div class="img-space"><img src="assets/images/open.png" alt="open" class="lazyload"></div>
            <div class="content-holder">
              <h3 class="text-uppercase">Open</h3>
              <p>All our actions are open and transparent.</p>
            </div>
          </li>
          <li>
            <div class="img-space"><img src="assets/images/efficient.png" alt="reliable" class="lazyload"></div>
            <div class="content-holder">
              <h3 class="text-uppercase">Efficient</h3>
              <p>Expertise that ensures utmost efficiency.</p>
            </div>
          </li>
          <li>
            <div class="img-space"><img src="assets/images/reliable.png" alt="efficient"></div>
            <div class="content-holder">
              <h3 class="text-uppercase">Reliable</h3>
              <p><span style="background-color: #ffffff; letter-spacing: -0.5px; color: #585858;">Your safety is our number one priority.</span></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="happy-customer"> 
      
      <!--<div class="col-md-6 text-center">

                    <div class="customer-count clearfix">

                        <div class="numscroller scrollzip roller-title-number-1 isShown" data-delay="20000" data-increment="111111" data-min="0" data-max="22309923" data-slno="1">22309923</div>		

                        

                    </div>

                    <span class="count-label">Happy Customers and Counting...</span>

                </div>--> 
      <!-- <div class="d-lg-flex d-md-flex justify-content-center">
                <div class="col-md-4 text-center">
                    <div class="middle-component col-divider" style="border-left:none">
                        <h2 class="count-number">14.75L</h2>
                        <span class="count-label">Cars Serviced Every Month</span>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <h2 class="count-number">3.5K</h2>
                    <span class="count-label">Exclusive Showrooms</span>
                </div>
            </div> --> 
    </div>
    
    <!-- <div class="button-gutter text-center">

                <a href="enquiry.php" class="button button-purple button-180 triggerBookAShowRoomVisitButton">Enquire Now</a>

                <a href="schedule-services.php"  class="button button-red button-180 bookAServiceAppointmentButton" onclick="window.location.href='/service'">Book a service</a>

            </div> --> 
    
  </div>
</main>

<!--Book Test Drive 
<div class="book-testDrivePopup modal fade" id="maruti-drvingSchool" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Maruti Driving School</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="send_mail_drivingschool.php" method="post" data-parsley-validate="parsley">
      <div class="modal-body">
          <div class="form-group">
            <label for="First Name" class="col-form-label">Full Name<span class="parsley-required">*</span></label>
            <input type="text" class="form-control" id="first-name" name="full_name" required="true" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter Name">
            <input type="hidden" class="form-control" id="model" name="model" value="alto-k10">

          </div>
          <div class="form-group">
            <label for="Email" class="col-form-label">Email<span class="parsley-required">*</span></label>
            <input type="email" class="form-control" id="Email" name="email" required="" data-parsley-type="email" data-parsley-required-message="Please Enter Email">
          </div>
          <div class="form-group">
            <label for="Phone" class="col-form-label">Phone<span class="parsley-required">*</span></label>
            <input type="tel" class="form-control" id="phone" name="phone_no" required="true" data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[7-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No">
          </div>
          <div class="form-group">
          <p style="font-size:12px"><span class="parsley-required">*</span><input type="checkbox" id="FormChkBoxBook6" name="FormChkBox" style="vertical-align: sub;" required="" data-parsley-required-message="Please indicate that you accept the Terms and Conditions">
                    I agree <a href="disclaimer.php" style="color: blue">Terms and Conditions.</a> by clicking the Continue button below and I am explicitly soliciting a call from Seva Maruti. Or its partners on my Mobile.</p>
          </div>
          
        
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <input type="submit" name="submit" class="btn btn-primary button-purple">
    </form>
      </div>
    </div>
  </div>
</div>
 Book Test Drive -->

<!--<a href="#" class="enquire-nowBtn"> Enquire Now</a>-->
<script src="assets/js/jquery-1.7.2.min.js"></script>
<script defer>
$(document).ready(function(){
  setInterval(function () {
   $('#dialog').show();
}, 43200000);
});
</script>
<?php  

require_once('footer.php');

?>