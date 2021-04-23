<?php    
$title="Swift Dzire | Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur | SEVA";	
 
$pgDesc="Check New Maruti Suzuki Swift Dzire Price at SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur. Ask for Swift Dzire LXI, Swift Dzire VXI, Swift Dzire ZXI";

$pgKeywords="dzire, sedan cars, dzire vxi, dzire vdi, maruti sedan cars, dzire automatic, swift dzire, swift dzire price, Maruti Suzuki, Maruti Suzuki Car Showroom, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Showrooms near me, Maruti Suzuki Finance, maruti suzuki dzire, swift dzire on road price, dzire car, maruti dzire, maruti suzuki dzire vxi, maruti suzuki swift dzire, maruti swift dzire, swift dzire car, dzire price, maruti suzuki dzire lxi, maruti swift dzire price, swift dzire vdi, swift dzire vxi, swift dzire 2020";

include 'header.php'; 
include 'connection.php';
?>
<style type="text/css">
.parsley-required {
  color: red;
}

.parsley-type {
  color: red;
}

.parsley-pattern {
  color: red;
}

.parsley-range {
  color: red;
}
</style>
<main>
  <div class="generic-hero">
    <div class="itemimg">
      <picture>
        <source srcset="assets/images/dzire/top-desk.png" alt="Dzire Car Banner" media="(min-width: 992px)">
        <source srcset="assets/images/dzire/top-ipad.png" alt="Dzire Car Banner" media="(min-width: 768px)">
        <source srcset="assets/images/dzire/top-mobile.png" alt="Dzire Car Banner" media="(min-width: 320px)"> <img srcset="assets/images/dzire/top-desk.png" alt="Dzire Car Banner"> </picture>
      <div class="mediacontent col-lg-5 white right vcenter"> <img src="assets/images/dzire/top-text.png" alt="Move up to a New World of Technology">
        <div class="desktopcontent hidden-xs hidden-sm mt-2">
          <p>When you move up in life, everything around you moves up too. So, here’s welcoming you to a new world of comfort, convenience and style. So, enjoy the success and let your loved ones enjoy it too with the new 2020 Dzire.
            <br />Move up to a new world. </p>
        </div>
        <div class="mobilecontent hidden-md hidden-lg">
          <p>When you move up in life, everything around you moves up too. </p>
        </div>
      </div>
    </div>
  </div>
  <div class="price-section  mobileViewPrice">
    <h3 class="text-align"> Ex-Showroom Prices</h3>    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" align="center"> NEW DZIRE BS - 6</td>
      </tr>
      <tr>
        <td>Model Description</td>
        <td></td>
        <td>Price</td>
      </tr>
      <?php
      $sql = "SELECT varient,on_road_price FROM product WHERE car = 5 GROUP BY varient";
      $result = mysqli_query($conn, $sql);
      while($row = $result->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $row['varient'];?></td>
        <td>M</td>
        <td><i class="flaticon-rupee-indian"></i> <?php echo $row['on_road_price'];?></td>
      </tr>
      <?php
      }
      ?>		
    </table>  
  </div>
  <div class="mid-nav fixed-bottom">
    <ul>
      <li><a data-toggle="modal" data-target="#get-quotePopup">Get A Quote</a></li>
      <li><a data-toggle="modal" data-target="#book-testDrivePopup">Book Test Drive</a></li>
      <li><a href="assets/images/dzire/Dzire_Brand_Brochure.pdf" target="_blank">Product Brochure</a></li>
      <li><a href="maruti-finance.php">Finance</a></li>
    </ul>
  </div>
  <div class="product-carousel">
    <div class="item">
      <picture class="productcarouselbg">
        <source srcset="assets/images/dzire/2-desk.jpg" alt="Maruti Dzire Car" media="(min-width: 992px)">
        <source srcset="assets/images/dzire/2-ipad.jpg" alt="Maruti Dzire Car" media="(min-width: 768px)">
        <source srcset="assets/images/dzire/2-mobile.jpg" alt="Maruti Dzire Car" media="(min-width: 320px)"> <img srcset="assets/images/dzire/2-desk.jpg" alt="Maruti Dzire Car" class="img-responsive productbg"> </picture>
      <div class="productItems Aligner">
        <div class="container-fluid rel">
          <div class="car-color-variant">
            <a onclick="color_function(1,6)" href="javascript:void(0);"><img src="assets/images/cc-ceruleanblue.jpg"></a>
            <a onclick="color_function(2,6)" href="javascript:void(0);"><img src="assets/images/cc-superiorwhite.jpg"></a>
            <a onclick="color_function(3,6)" href="javascript:void(0);"><img src="assets/images/cc-silkysilver.jpg"></a>
            <a onclick="color_function(4,6)" href="javascript:void(0);"><img src="assets/images/cc-granitegrey.jpg"></a>
            <a onclick="color_function(5,6)" href="javascript:void(0);"><img src="assets/images/cc-gallantred.jpg"></a>
            <a onclick="color_function(6,6)" href="javascript:void(0);"><img src="assets/images/cc-sherwoodbrown.jpg"></a>
          </div>
          <div class="row">
            <div class="col-lg-6"> <img id="image_1" src="assets/images/dzire/2-car.png"> <img id="image_2" src="assets/images/dzire/DzireWhitemerged-v4.png" style="display:none"> <img id="image_3" src="assets/images/dzire/DzireSilkySilvermerged-v6.png" style="display:none"> <img id="image_4" src="assets/images/dzire/DzireMagmaGreymerged-v2.png" style="display:none"> <img id="image_5" src="assets/images/dzire/DzireGallantRedmerged-v1.png" style="display:none"> <img id="image_6" src="assets/images/dzire/DzireSherwoodBrownmerged-v5.png" style="display:none"> </div>
            <div class="col-lg-6">
              <div class="proudctFooter">
                <div class="col-lg-10">
                  <div class="product-content">
                    <h3 class="terms mileage">Mileage of the Maruti Suzuki Dzire</h3>
                    <ul>
                      <li>
                        <h3>Petrol (AMT)</h3>
                        <h4>24.12 <span>km/l*</span></h4> </li>
                      <li>
                        <h3>Petrol (MT)</h3>
                        <h4>23.26 <span>km/l*</span></h4> </li>
                    </ul>
                    <p class="last-termsP">*As certified by Test Agency Under Rule 115 (G) of CMVR 1989
                      <br> **Car colors shown may not be available across all variants.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="design">
    <div class="three60view dzire3rd">
      <picture class="front">
        <!--[if IE 9]><video style="display: none; "><![endif]-->
        <source srcset="assets/images/dzire/3-desk.png" alt="Dzire Side Profile" media="(min-width: 992px)">
        <source srcset="assets/images/dzire/3-ipad.jpg" alt="Dzire Side Profile" media="(min-width: 768px)">
        <source srcset="assets/images/dzire/3-mobile.jpg" alt="Dzire Side Profile" media="(min-width: 320px)">
        <!--[if IE 9]></video><![endif]--><img srcset="assets/images/dzire/3-desk.png" alt="Dzire Side Profile" class="img-responsive mainbg"> </picture>
      <section class="three60view-content col-lg-5">
        <section class="chase-description">
          <h2>Move up to a New World of Style</h2>
          <p>The new 2020 Dzire is the perfect blend of style that’s bold and premium. It’s a reflection of your lifestyle, with a touch of class in it. </p>
          <div class="price-section deskViewprice">
            <h3 class="text-align"> Ex-Showroom Prices</h3>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">            
              <tr>
                <td>Model Description</td>
                <td></td>
                <td>Price</td>
              </tr>
              <?php
              $sql = "SELECT varient,on_road_price FROM product WHERE car = 5 GROUP BY varient";
              $result = mysqli_query($conn, $sql);
              while($row = $result->fetch_assoc()) {
              ?>
              <tr>
                <td><?php echo $row['varient'];?></td>
                <td>M</td>
                <td><i class="flaticon-rupee-indian"></i> <?php echo $row['on_road_price'];?></td>
              </tr>
              <?php
              }
              ?>		
            </table>          
          </div>
        </section>
      </section>
    </div>
  </div>
  <div class="container-fluid car-gallery">
    <ul class="nav nav-pills specification-tabs  d-flex justify-content-center" id="pills-tab" role="tablist">
      <li class="nav-item"> <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-body" role="tab" aria-controls="pills-home" aria-selected="true">Highlights</a> </li>
      <li class="nav-item"> <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-engine" role="tab" aria-controls="pills-profile" aria-selected="false">Exterior</a> </li>
      <li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-transmission" role="tab" aria-controls="pills-contact" aria-selected="false"> Interior</a> </li>
    </ul>
    <div class="tab-content d-flex justify-content-center" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-body" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="row imageRow">
          <div class="col-lg-5 col-sm-5 col-xs-5 p-0">
            <div class="single first item-images">
              <a href="assets/images/dzire/highlights1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/dzire/highlights1.jpg" alt="Dzire Burl Wood Ornamentation" /> </a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-7 col-xs-7">
            <div class="row">
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/dzire/highlights2.png" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/dzire/highlights2.png" alt="Dzire Automatic Climate Control" /> </a>
              </div>
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/dzire/highlights3.png" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/dzire/highlights3.png" alt="Dzire Rear AC Vent" /> </a>
              </div>
            </div>
            <div class="row">
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/dzire/highlights4.png" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/dzire/highlights4.png" alt="Dzire Rear Armrest" /> </a>
              </div>
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/dzire/highlights5.png" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/dzire/highlights5.png" alt="Dzire Refined Speedometer with Satin Chrome Meter Rings" /> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-engine" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row imageRow">
          <div class="col-lg-5 col-sm-5 col-xs-5 p-0">
            <div class="single first item-images">
              <a href="assets/images/dzire/exterior1.png" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/dzire/exterior1.png" alt="Dzire LED Projector Headlamps with DRLs" /> </a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-7 col-xs-7">
            <div class="row">
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/dzire/exterior2.png" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/dzire/exterior2.png" alt="Dzire Fog Lamps with Chrome Fins" /></a>
              </div>
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/dzire/exterior3.png" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/dzire/exterior3.png" alt="Dzire Precision-cut Two-tone Alloy Wheels" /></a>
              </div>
            </div>
            <div class="row">
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/dzire/exterior4.png" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/dzire/exterior4.png" alt="Dzire Fog Lamps With Bold Chrome Accents" /> </a>
              </div>
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/dzire/exterior5.png" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/dzire/exterior5.png" alt="Dzire LED Projector Headlamps & DRLs" /> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-transmission" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="row imageRow">
          <div class="col-lg-5 col-sm-5 col-xs-5 p-0">
            <div class="single first item-images">
              <a href="assets/images/dzire/interior1.png" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/dzire/interior1.png" alt="Dzire Premium Trims with Champagne Accents" /> </a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-7 col-xs-7">
            <div class="row">
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/dzire/interior2.png" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/dzire/interior2.png" alt="Dzire Exclusive Wood Finish With Natural Gloss Effect" /> </a>
              </div>
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/dzire/interior3.png" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/dzire/interior3.png" alt="Dzire Rear Armrest with Cupholder" /> </a>
              </div>
            </div>
            <div class="row">
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/dzire/interior4.png" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/dzire/interior4.png" alt="Dzire Rear AC Vent" /> </a>
              </div>
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/dzire/interior5.png" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/dzire/interior5.png" alt="Dzire Coloured Multi-Information Display" /> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="spcification">
    <div class="container">
      <h2>Specification</h2>
      <select id="specification" class="browser-default custom-select" onchange="function_dzire()">
        <option value="LXi">LXi</option>
        <option value="VXi">VXi</option>
        <option value="VXi AMT">VXi AMT</option>
        <option value="ZXi">ZXi</option>
        <option value="ZXi AMT">ZXi AMT</option>
        <option value="ZXi +">ZXi +</option>
        <option value="ZXi + AMT">ZXi + AMT</option>
      </select>
      <div class="row ">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-dimensions-tab" data-toggle="pill" href="#v-pills-dimensions" role="tab" aria-controls="v-pills-dimensions" aria-selected="true">Dimensions</a> <a class="nav-link" id="v-pills-engine-tab" data-toggle="pill" href="#v-pills-engine" role="tab" aria-controls="v-pills-engine" aria-selected="false">Engine</a> <a class="nav-link" id="v-pills-brakes-tab" data-toggle="pill" href="#v-pills-brakes" role="tab" aria-controls="v-pills-brakes" aria-selected="false">Brakes</a> <a class="nav-link" id="v-pills-suspension-tab" data-toggle="pill" href="#v-pills-suspension" role="tab" aria-controls="v-pills-suspension" aria-selected="false">Suspension  System</a> <a class="nav-link" id="v-pills-weight-tab" data-toggle="pill" href="#v-pills-weight" role="tab" aria-controls="v-pills-weight" aria-selected="false">Others</a> <a class="nav-link" id="v-pills-tyre-tab" data-toggle="pill" href="#v-pills-tyre" role="tab" aria-controls="v-pills-tyre" aria-selected="false">Steering</a> <a class="nav-link" id="v-pills-transmission-tab" data-toggle="pill" href="#v-pills-transmission" role="tab" aria-controls="v-pills-transmission" aria-selected="false">Transmission</a> </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-dimensions" role="tabpanel" aria-labelledby="v-pills-dimensions-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Length</h4>
                    <p>3995 mm</p>
                  </div>
                  <div class="display-cell">
                    <h4>Width</h4>
                    <p>1735 mm</p>
                  </div>
                  <div class="display-cell">
                    <h4>Height</h4>
                    <p>1515 mm (unladen)</p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Wheelbase</h4>
                    <p>2450 mm</p>
                  </div>
                  <div class="display-cell">
                    <h4>Boot Space</h4>
                    <p> 378 L</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-engine" role="tabpanel" aria-labelledby="v-pills-engine-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Engine Capacity</h4>
                    <p>1197 cc</p>
                  </div>
                  <div class="display-cell">
                    <h4>Max Power</h4>
                    <p>66 kW @ 6000 rpm</p>
                  </div>
                  <div class="display-cell">
                    <h4>Max Torque</h4>
                    <p>113 Nm @ 4400 rpm</p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Number of cylinders</h4>
                    <p>4</p>
                  </div>
                </div>
                <div class="display-cell">
                  <h4></h4>
                  <p>&nbsp;</p>
                </div>
                <div class="display-cell">
                  <h4></h4>
                  <p>&nbsp;</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-brakes" role="tabpanel" aria-labelledby="v-pills-brakes-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Front</h4>
                    <p>Disc</p>
                  </div>
                  <div class="display-cell">
                    <h4>Rear</h4>
                    <p>Drum</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-suspension" role="tabpanel" aria-labelledby="v-pills-suspension-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Front</h4>
                    <p>Mac Pherson Strut</p>
                  </div>
                  <div class="display-cell">
                    <h4>Rear</h4>
                    <p>Torsion Beam</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-weight" role="tabpanel" aria-labelledby="v-pills-weight-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Fuel  Tank Capacity</h4>
                    <p>37 L</p>
                  </div>
                  <div class="display-cell">
                    <h4>Kerb Weight</h4>
                    <p>880-915 kg</p>
                  </div>
                  <div class="display-cell">
                    <h4>Gross Vehicle Weight</h4>
                    <p>1335 kg</p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Seating Capacity</h4>
                    <p>5</p>
                  </div>
                  <div class="display-cell">
                    <h4>Tyre Size (Steel)</h4>
                    <p>165/80 R14</p>
                  </div>
                  <div class="display-cell">
                    <h4>Tyre Size (Alloy)</h4>
                    <p>185/65 R15</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-tyre" role="tabpanel" aria-labelledby="v-pills-tyre-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Turning Radius</h4>
                    <p>4.8 <span style="font-size: 10px;">m</span></p>
                  </div>
                  <div class="display-cell">
                    <h4>Power Steering Type</h4>
                    <p>Electric</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-transmission" role="tabpanel" aria-labelledby="v-pills-transmission-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Type</h4>
                    <p>5MT</p>
                  </div>
                  <div class="display-cell"> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="img-car"> <img src="assets/images/dzire/4-Dezire-v9.png" alt="carFooter"> </div>
    </div>
  </div>
  <div class="performance">
    <div class="performnace-bg">
      <picture>
        <source srcset="assets/images/dzire/5-desk.jpg" alt="Maruti Suzuki Dzire performance" media="(min-width: 992px)">
        <source srcset="assets/images/dzire/5-ipad.jpg" alt="Maruti Suzuki Dzire performance" media="(min-width: 768px)">
        <source srcset="assets/images/dzire/5-mobile.jpg" alt="Maruti Suzuki Dzire performance" media="(min-width: 320px)"> <img srcset="assets/images/dzire/5-desk.jpg" alt="Maruti Suzuki Dzire performance" class="img-responsive bg-image"></picture>
      <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12 prod-image"> <img src="assets/images/dzire/5-engine.png" class="img-responsive" alt="Alto Engine"> </div>
      <div class="performance-content col-xs-12 col-sm-6 col-md-9 col-lg-6">
        <h2>Features</h2>
        <select id="features" class="browser-default custom-select" onchange="function_dzire_features()">
          <option value="LXi">LXi</option>
          <option value="VXi">VXi</option>
          <option value="VXi AMT">VXi AMT</option>
          <option value="ZXi">ZXi</option>
          <option value="ZXi AMT">ZXi AMT</option>
          <option value="ZXi +">ZXi +</option>
          <option value="ZXi + AMT">ZXi + AMT</option>
        </select>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-exterior-tab" data-toggle="pill" href="#v-pills-exterior" role="tab" aria-controls="v-pills-exterior" aria-selected="true">Exterior</a> <a class="nav-link" id="v-pills-interiors-tab" data-toggle="pill" href="#v-pills-interiors" role="tab" aria-controls="v-pills-interiors" aria-selected="false">Interiors</a> <a class="nav-link" id="v-pills-comfort-tab" data-toggle="pill" href="#v-pills-comfort" role="tab" aria-controls="v-pills-comfort" aria-selected="false">Comfort </a> <a class="nav-link" id="v-pills-safety-tab" data-toggle="pill" href="#v-pills-safety" role="tab" aria-controls="v-pills-safety" aria-selected="false">Safety and Security</a> <a class="nav-link" id="v-pills-utility-tab" data-toggle="pill" href="#v-pills-utility" role="tab" aria-controls="v-pills-utility" aria-selected="false">AUDIO & ENTERTAINMENT</a> </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-exterior" role="tabpanel" aria-labelledby="v-pills-exterior-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Rear Combination  LED Lamp</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>High Mounted LED Stop Lamp</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Wheels</strong></h4>
                      <p>Steel</p>
                    </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Door Outer-Weather Strip</strong></h4>
                      <p>Black</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-interiors" role="tabpanel" aria-labelledby="v-pills-interiors-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Dual-Tone Interiors</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Multi-Information  Display</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Low-Fuel  Warning Lamp</strong></h4> </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-comfort" role="tabpanel" aria-labelledby="v-pills-comfort-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Manual Air Conditioner with Heater</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Pollen Filter</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Front Accessory Socket</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Gear Shift Indicator </strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Tilt Steering</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong> Bottle Holder on All Doors</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Idle Start Stop</strong></h4> </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-safety" role="tabpanel" aria-labelledby="v-pills-safety-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Suzuki  HEARTECT body</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>ABS with EBD and Brake Assist</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Dual Airbags</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Front Fog Lamp Garnish</strong></h4>
                      <p>Silver</p>
                    </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Reverse Parking Sensors</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>ISOFix Child Seat Anchorages</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Front Seat Belt with Pre-Tensioner</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Engine Immobilizer</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Key-Left Warning Lamp &amp; Buzzer</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>^Speed Alert</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Driver &amp; Co-Driver Seat Belt Reminder</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong> Door Ajar Warning Lamp</strong></h4> </div>
                  </div>
                  <p style="text-align: center;"><span style="font-size: 10px;
text-align: left !important;
display: inline-block;
padding-right: 30px;
line-height: 18px;"> ^The speed alert system gives audible warning for alert of over-speed to driver. When vehicle speed exceeds about 80 Km/h, primary level warning with two beeps will sound every minute. When the vehicle speed about 120 Km/h, secondary level warning with continuous beeps will sound.If the Vehicle Speed is slowed down to about 118 km/h, primary warning will resume. If the vehicle is slowed down to about  78 km/h, speed alert warning will stop. This buzzer does not indicate any malfunction in vehicle. </span></p>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-utility" role="tabpanel" aria-labelledby="v-pills-utility-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Roof Antenna</strong></h4> </div>
                    <div class="display-cell"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="myCarousel" class="carousel slide footer-banner" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active"> <img class="first-slide" src="assets/images/dzire/slide1.png" alt="Smartplay Studio System">
        <div class="caption">
          <h2>Move up to a New World of <span>Technology</span></h2>
          <p> The new 2020 Dzire comes with a host of features and latest technology that is available at your fingertips. </p>
          <ul>
            <li data-slide="1"><strong style="font-size: 16px;">Smartplay Studio System</strong></li>
            <li data-slide="2">Coloured Multi-Information Display</li>
            <li data-slide="3">Steering-Mounted Controls with Cruise Mode</li>
            <li data-slide="4"> Suzuki HEARTECT Platform</li>
            <li data-slide="4">Electronic Stability Program With Hill-Hold</li>
            <li data-slide="6">Dual Airbags</li>
            <li data-slide="7">Anti-locking Braking System</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/dzire/slide2.png" alt="Coloured Multi-Information Display">
        <div class="caption">
          <h2>Move up to a New World of <span>Technology</span></h2>
          <p> The new 2020 Dzire comes with a host of features and latest technology that is available at your fingertips. </p>
          <ul>
            <li data-slide="1">Smartplay Studio System</li>
            <li data-slide="2"><strong style="font-size: 16px;">Coloured Multi-Information Display</strong></li>
            <li data-slide="3">Steering-Mounted Controls with Cruise Mode</li>
            <li data-slide="4"> Suzuki HEARTECT Platform</li>
            <li data-slide="5">Electronic Stability Program With Hill-Hold</li>
            <li data-slide="6">Dual Airbags</li>
            <li data-slide="7">Anti-locking Braking System</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/dzire/slide3.png" alt="Steering-Mounted Controls with Cruise Mode">
        <div class="caption">
          <h2>Move up to a New World of <span>Technology</span></h2>
          <p> The new 2020 Dzire comes with a host of features and latest technology that is available at your fingertips. </p>
          <ul>
            <li data-slide="1">Smartplay Studio System</li>
            <li data-slide="2">Coloured Multi-Information Display</li>
            <li data-slide="3"><strong style="font-size: 16px;">Steering-Mounted Controls with Cruise Mode</strong></li>
            <li data-slide="4">Suzuki HEARTECT Platform</li>
            <li data-slide="5">Electronic Stability Program With Hill-Hold</li>
            <li data-slide="6">Dual Airbags</li>
            <li data-slide="7">Anti-locking Braking System</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/dzire/slide4.png" alt="Suzuki HEARTECT Platform">
        <div class="caption">
          <h2>Move up to a New World of <span>Technology</span></h2>
          <p> The new 2020 Dzire comes with a host of features and latest technology that is available at your fingertips. </p>
          <ul>
            <li data-slide="1">Smartplay Studio System</li>
            <li data-slide="2">Coloured Multi-Information Display</li>
            <li data-slide="3">Steering-Mounted Controls with Cruise Mode</li>
            <li data-slide="4"><strong style="font-size: 16px;">  Suzuki HEARTECT Platform</strong></li>
            <li data-slide="5">Electronic Stability Program With Hill-Hold</li>
            <li data-slide="6">Dual Airbags</li>
            <li data-slide="7">Anti-locking Braking System</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/dzire/slide5.png" alt="Electronic Stability Program With Hill-Hold">
        <div class="caption">
          <h2>Move up to a New World of <span>Technology</span></h2>
          <p> The new 2020 Dzire comes with a host of features and latest technology that is available at your fingertips. </p>
          <ul>
            <li data-slide="1">Smartplay Studio System</li>
            <li data-slide="2">Coloured Multi-Information Display</li>
            <li data-slide="3">Steering-Mounted Controls with Cruise Mode</li>
            <li data-slide="4">Suzuki HEARTECT Platform</li>
            <li data-slide="5"><strong style="font-size: 16px;">Electronic Stability Program With Hill-Hold</strong></li>
            <li data-slide="6">Dual Airbags</li>
            <li data-slide="7">Anti-locking Braking System</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/dzire/slide6.png" alt="Dual Airbags">
        <div class="caption">
          <h2>Move up to a New World of <span>Technology</span></h2>
          <p> The new 2020 Dzire comes with a host of features and latest technology that is available at your fingertips. </p>
          <ul>
            <li data-slide="1">Smartplay Studio System</li>
            <li data-slide="2">Coloured Multi-Information Display</li>
            <li data-slide="3">Steering-Mounted Controls with Cruise Mode</li>
            <li data-slide="4"> Suzuki HEARTECT Platform</li>
            <li data-slide="5">Electronic Stability Program With Hill-Hold</li>
            <li data-slide="6"><strong style="font-size: 16px;">Dual Airbags</strong></li>
            <li data-slide="7">Anti-locking Braking System</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/dzire/slide7.png" alt="Anti-locking Braking System">
        <div class="caption">
          <h2>Move up to a New World of <span>Technology</span></h2>
          <p> The new 2020 Dzire comes with a host of features and latest technology that is available at your fingertips. </p>
          <ul>
            <li data-slide="1">Smartplay Studio System</li>
            <li data-slide="2">Coloured Multi-Information Display</li>
            <li data-slide="3">Steering-Mounted Controls with Cruise Mode</li>
            <li data-slide="4">Suzuki HEARTECT Platform</li>
            <li data-slide="5">Electronic Stability Program With Hill-Hold</li>
            <li data-slide="6">Dual Airbags</li>
            <li data-slide="7"><strong style="font-size: 16px;">Anti-locking Braking System</strong></li>
          </ul>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
  </div>
</main>
<!--Get A Quote Modal -->
<div class="get-quotePopup modal fade" id="get-quotePopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get A Quote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <form action="send_mail_quotation.php" method="post" data-parsley-validate="parsley">
        <div class="modal-body">
          <div class="form-group">
            <label for="First Name" class="col-form-label">Full Name<span class="parsley-required">*</span></label>
            <input type="text" class="form-control" id="first-name" name="full_name" required="true" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter Name">
            <input type="hidden" class="form-control" id="model" name="model" value="Dzire"> </div>
          <div class="form-group">
            <label for="Email" class="col-form-label">Email<span class="parsley-required">*</span></label>
            <input type="email" class="form-control" id="Email" name="email" required="true" data-parsley-type="email" data-parsley-required-message="Please Enter Email Id"> </div>
          <div class="form-group">
            <label for="Phone" class="col-form-label">Phone<span class="parsley-required">*</span></label>
            <input type="tel" class="form-control" id="phone" name="phone_no" required="true" data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No"> </div>
          <div class="form-group">
            <label for="inputAddress2">City<span class="parsley-required" style="color:red">*</span></label>
            <select class="form-control city" required="true" aria-required="true" aria-invalid="false" name="city" id="city" onchange="check(event);">
              <option value="Nagpur">Nagpur</option>
              <option value="Nanded">Nanded</option>
              <option value="Dhule">Dhule</option>
              <option value="Nandurbar">Nandurbar</option>
              <option value="Nashik">Nashik</option>
              <option value="Hinganghat">Hinganghat</option>
            </select>
          </div>
          <div class="form-group">
            <p style="font-size:12px"><span class="parsley-required">*</span>
              <input type="checkbox" id="FormChkBoxBook6" name="FormChkBox" style="vertical-align: sub;" required="true" data-parsley-required-message="Please indicate that you accept the Terms and Conditions"> I agree <a href="disclaimer.php" style="color: blue">Terms and Conditions.</a> by clicking the ‘Continue’ button below and I am explicitly soliciting a call from Seva Maruti. Or its partners on my ‘Mobile’.</p>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
          <input type="submit" name="submit" class="btn btn-primary button-purple"> </form>
      </div>
    </div>
  </div>
</div>
<!--Get A Quote Modal -->
<!--Book Test Drive -->
<div class="book-testDrivePopup modal fade" id="book-testDrivePopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book a test drive</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <form action="send_mail_testdriveproduct.php" method="post" data-parsley-validate="parsley">
        <div class="modal-body">
          <div class="form-group">
            <label for="First Name" class="col-form-label">Full Name<span class="parsley-required">*</span></label>
            <input type="text" class="form-control" id="first-name" name="full_name" required="true" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter Name">
            <input type="hidden" class="form-control" id="model" name="model" value="Dzire"> </div>
          <div class="form-group">
            <label for="Email" class="col-form-label">Email<span class="parsley-required">*</span></label>
            <input type="email" class="form-control" id="Email" name="email" required="" data-parsley-type="email" data-parsley-required-message="Please Enter Email"> </div>
          <div class="form-group">
            <label for="Phone" class="col-form-label">Phone<span class="parsley-required">*</span></label>
            <input type="tel" class="form-control" id="phone" name="phone_no" required="true" data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No"> </div>
          <div class="form-group">
            <p style="font-size:12px"><span class="parsley-required">*</span>
              <input type="checkbox" id="FormChkBoxBook6" name="FormChkBox" style="vertical-align: sub;" required="" data-parsley-required-message="Please indicate that you accept the Terms and Conditions"> I agree <a href="disclaimer.php" style="color: blue">Terms and Conditions.</a> by clicking the ‘Continue’ button below and I am explicitly soliciting a call from Seva Maruti. Or its partners on my ‘Mobile’.</p>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
          <input type="submit" name="submit" class="btn btn-primary button-purple"> </form>
      </div>
    </div>
  </div>
</div>
<!--Book Test Drive -->
<script src="assets/js/jquery1.12.0-min.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/parsley.js"></script>
<?php  
require_once('footer.php');
?>