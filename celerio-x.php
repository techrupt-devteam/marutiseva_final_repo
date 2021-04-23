<?php    
$title="Celerio X | Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur | SEVA";	

$pgDesc="Check New Maruti Suzuki CelerioX price at SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur. Celerio X the blend of Xpression, Xcitement and Xperience";

$pgKeywords="Maruti Suzuki, Maruti Suzuki Car Showroom, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Showrooms near me, Maruti Suzuki Finance, celerio x, celeriox, maruti suzuki celeriox, maruti suzuki celerio x, celeriox price, celeriox car, maruti celerio x, celerio x price, suzuki celerio x";

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
        <source srcset="assets/images/celerio-x/top-desk1.jpg" alt="Alto Banner" media="(min-width: 992px)">
        <source srcset="assets/images/celerio-x/top-ipad2.jpg" alt="Alto Banner" media="(min-width: 768px)">
        <source srcset="assets/images/celerio-x/top-mobile3.jpg" alt="Alto Banner" media="(min-width: 320px)"> <img srcset="assets/images/celerio-x/top-desk1.jpg" alt="ACelerio Car Banner"> </picture>
      <div class="mediacontent col-lg-5 white right vcenter"> <img src="assets/images/celerio-x/top-text.png" alt="Life Takes a Leap">
        <div class="desktopcontent hidden-xs hidden-sm mt-2">
          <p>The all-new CelerioX is a car that speaks your language. Its design is the Xpression of youth, as its performance screams of Xcitement. Xperience what it’s like to be elegant, stylish, young and sporty, at the same time, while you’re on the road. </p>
        </div>
        <div class="mobilecontent hidden-md hidden-lg">
          <p>The all-new CelerioX is a car that speaks your language.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="price-section mobileViewPrice">
    <h3>Ex-Showroom Prices</h3>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">    
      <tr>
        <td>Varient</td>
        <td></td>
        <td>Price</td>
      </tr>
      <?php
        $sql = "SELECT varient,on_road_price FROM product WHERE car = 4 GROUP BY `product`.`varient` ASC";
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
        ?>
        <tr>
          <td>
            <?php echo $row['varient'];?>
          </td>
          <td>M</td>
          <td><i class="flaticon-rupee-indian"></i>
            <?php echo $row['on_road_price'];?>
          </td>
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
      <li><a href="assets/images/celerio-x/Celerio-x_brand_brochure.pdf" target="_blank">Product Brochure</a></li>
      <li><a href="maruti-finance.php">Finance</a></li>
    </ul>
  </div>
  <div class="product-carousel">
    <div class="item">
      <picture class="productcarouselbg">
        <source srcset="assets/images/celerio-x/2-desk1.jpg" alt="" media="(min-width: 992px)">
        <source srcset="assets/images/celerio-x/2-ipad2.jpg" alt="" media="(min-width: 768px)">
        <source srcset="assets/images/celerio-x/2-mobile3.jpg" alt="" media="(min-width: 320px)"> <img srcset="assets/images/celerio-x/2-desk1.jpg" alt="Alto 800 Side Mirror" class="img-responsive productbg"> </picture>
      <div class="productItems Aligner">
        <div class="container-fluid rel">
          <div class="car-color-variant">
            <a onclick="color_function(1,6)" href="javascript:void(0);"><img src="assets/images/cc-AutumnOrange.jpg"></a>
            <a onclick="color_function(2,6)" href="javascript:void(0);"><img src="assets/images/cc-superiorwhite.jpg"></a>
            <a onclick="color_function(3,6)" href="javascript:void(0);"><img src="assets/images/cc-ceruleanblue.jpg"></a>
            <a onclick="color_function(4,6)" href="javascript:void(0);"><img src="assets/images/cc-granitegrey.jpg"></a>
            <a onclick="color_function(5,6)" href="javascript:void(0);"><img src="assets/images/cc-NutmegBrown.jpg"></a>
          </div>
          <div class="row">
            <div class="col-lg-6"> <img id="image_1" src="assets/images/celerio-x/2orange.png"> <img id="image_2" src="assets/images/celerio-x/CelerioX-new-format-color-i9mg.png" style="display:none"> <img id="image_3" src="assets/images/celerio-x/Torque-Blue.png" style="display:none"> <img id="image_4" src="assets/images/celerio-x/New-Metalic-Glistening-Grey.png" style="display:none"> <img id="image_5" src="assets/images/celerio-x/Prl-Caffein-Brown.png" style="display:none"> </div>
            <div class="col-lg-6">
              <div class="proudctFooter">
                <div class="col-lg-10">
                  <div class="product-content">
                    <h3 class="terms mileage">Drive Easy, Drive More</h3>
                    <p></p>
                    <ul>
                      <li>
                        <h3>petrol </h3>
                        <h4>21.63 <span>km/l*</span></h4> </li>
                      <li>
                        <h3>Petrol (AGS) </h3>
                        <h4>21.63 <span>km/l*</span></h4> </li>
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
    <div class="three60view">
      <picture class="front">
        <!--[if IE 9]><video style="display: none; "><![endif]-->
        <source srcset="assets/images/celerio-x/3desk.jpg" alt="" media="(min-width: 992px)">
        <source srcset="assets/images/celerio-x/3ipad.jpg" alt="" media="(min-width: 768px)">
        <source srcset="assets/images/celerio-x/3mobile.jpg" alt="" media="(min-width: 320px)">
        <!--[if IE 9]></video><![endif]--><img srcset="assets/images/celerio-x/3desk.jpg" alt="" class="img-responsive mainbg"> </picture>
      <section class="three60view-content col-lg-5">
        <section class="chase-description">
          <h2>Xpressive Bold Design</h2>
          <p>‘Bold and sporty’ is the look of the new age. And that’s what CelerioX wears - a mix of confidence and radiance. </p>
          <div class="price-section deskViewprice">
            <h3>Ex-Showroom Prices</h3>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">            
              <tr>
                <td>Varient</td>
                <td></td>
                <td>Price</td>
              </tr>
              <?php
              $sql = "SELECT varient,on_road_price FROM product WHERE car = 4 GROUP BY `product`.`varient` ASC";
              $result = mysqli_query($conn, $sql);
              while($row = $result->fetch_assoc()) {
              ?>
              <tr>
                <td>
                  <?php echo $row['varient'];?>
                </td>
                <td>M</td>
                <td><i class="flaticon-rupee-indian"></i>
                  <?php echo $row['on_road_price'];?>
                </td>
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
              <a href="assets/images/celerio-x/highlights1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/celerio-x/highlights1.jpg" alt="Celerio Driver Airbag in every variant" /> </a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-7 col-xs-7">
            <div class="row">
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/celerio-x/highlights2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/celerio-x/highlights2.jpg" alt="Celerio Stylish Front Grille" /> </a>
              </div>
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/celerio-x/highlights3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/celerio-x/highlights3.jpg" alt="Celerio AGS" /> </a>
              </div>
            </div>
            <div class="row">
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/celerio-x/highlights4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/celerio-x/highlights4.jpg" alt="Celerio Modern Seat Fabric Design" /> </a>
              </div>
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/celerio-x/highlights5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/celerio-x/highlights5.jpg" alt="Celerio Impressive Wide Rear With Elegant Back Door Garnish" /> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-engine" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row imageRow">
          <div class="col-lg-5 col-sm-5 col-xs-5 p-0">
            <div class="single first item-images">
              <a href="assets/images/celerio-x/exterior1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/celerio-x/exterior1.jpg" alt="Celerio Strong Road Presence" /> </a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-7 col-xs-7">
            <div class="row">
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/celerio-x/exterior2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/celerio-x/exterior2.jpg" alt="Celerio Stylish Front Grille" /></a>
              </div>
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/celerio-x/exterior3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/celerio-x/exterior3.jpg" alt="Celerio Stylish Alloy Wheels" /></a>
              </div>
            </div>
            <div class="row">
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/celerio-x/exterior4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/celerio-x/exterior4.jpg" alt="Celerio Electrically adjustable ORVM" /> </a>
              </div>
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/celerio-x/exterior5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/celerio-x/exterior5.jpg" alt="Celerio Impressive Wide Rear With Elegant Back Door Garnish" /> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-transmission" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="row imageRow">
          <div class="col-lg-5 col-sm-5 col-xs-5 p-0">
            <div class="single first item-images">
              <a href="assets/images/celerio-x/interior1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/celerio-x/interior1.jpg" alt="Celerio Exciting dual tone interiors" /> </a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-7 col-xs-7">
            <div class="row">
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/celerio-x/interior2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/celerio-x/interior2.jpg" alt="Celerio Spacious Interior" /> </a>
              </div>
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/celerio-x/interior3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/celerio-x/interior3.jpg" alt="Celerio Seat Height Adjuster" /> </a>
              </div>
            </div>
            <div class="row">
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/celerio-x/interior4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/celerio-x/interior4.jpg" alt="Celerio Modern Seat fabric design" /> </a>
              </div>
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/celerio-x/interior5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/celerio-x/interior5.jpg" alt="Celerio Large boot space" /> </a>
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
      <select id="specification" class="browser-default custom-select" onchange="function_celeriox()">
        <option value="VXi">VXi</option>
        <option value="VXi (O)">VXi (O)</option>
        <option value="VXi AGS">VXi AGS</option>
        <option value="VXi AGS (O)">VXi AGS (O)</option>
        <option value="ZXi">ZXi </option>
        <option value="ZXi (O)">ZXi (O)</option>
        <option value="ZXi AGS">ZXi AGS</option>
        <option value="ZXi AGS (O)">ZXi AGS (O)</option>
      </select>
      <div class="row ">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-dimensions-tab" data-toggle="pill" href="#v-pills-dimensions" role="tab" aria-controls="v-pills-dimensions" aria-selected="true">Dimensions</a> <a class="nav-link" id="v-pills-engine-tab" data-toggle="pill" href="#v-pills-engine" role="tab" aria-controls="v-pills-engine" aria-selected="false">Engine</a> <a class="nav-link" id="v-pills-brakes-tab" data-toggle="pill" href="#v-pills-brakes" role="tab" aria-controls="v-pills-brakes" aria-selected="false">Brakes</a> <a class="nav-link" id="v-pills-suspension-tab" data-toggle="pill" href="#v-pills-suspension" role="tab" aria-controls="v-pills-suspension" aria-selected="false">Suspension  System</a> <a class="nav-link" id="v-pills-weight-tab" data-toggle="pill" href="#v-pills-weight" role="tab" aria-controls="v-pills-weight" aria-selected="false">Weight</a> <a class="nav-link" id="v-pills-capacity-tab" data-toggle="pill" href="#v-pills-capacity" role="tab" aria-controls="v-pills-capacity" aria-selected="false">CAPACITY</a> <a class="nav-link" id="v-pills-tyre-tab" data-toggle="pill" href="#v-pills-tyre" role="tab" aria-controls="v-pills-tyre" aria-selected="false">Tyre</a> <a class="nav-link" id="v-pills-transmission-tab" data-toggle="pill" href="#v-pills-transmission" role="tab" aria-controls="v-pills-transmission" aria-selected="false">Transmission</a> <a class="nav-link" id="v-pills-powersteering-tab" data-toggle="pill" href="#v-pills-powersteering" role="tab" aria-controls="v-pills-powersteering" aria-selected="false">Power Steering</a> </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-dimensions" role="tabpanel" aria-labelledby="v-pills-dimensions-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Length</h4>
                    <p> 3715&nbsp;<span style="font-size: 10px;">mm</span></p>
                  </div>
                  <div class="display-cell">
                    <h4>Width</h4>
                    <p> 1635 <span style="font-size: 10px;">mm</span></p>
                  </div>
                  <div class="display-cell">
                    <h4>Height</h4>
                    <p> 1565 <span style="font-size: 10px;">mm</span></p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Wheelbase</h4>
                    <p> 2425<span style="font-size: 10px;">&nbsp;mm</span></p>
                  </div>
                  <div class="display-cell">
                    <h4>Tread Front</h4>
                    <p> 1420 <span style="font-size: 10px;">mm</span></p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Tread Rear</h4>
                    <p> 1410 <span style="font-size: 10px;">mm</span></p>
                  </div>
                  <div class="display-cell">
                    <h4>Minimum Turning Radius</h4>
                    <p> 4.7 <span style="font-size: 10px;">m</span></p>
                  </div>
                  <div class="display-cell"> </div>
                </div>
                <br>
                <br>
                <p class="terms displayCell"><strong> Dimensions are common for MT &amp; AGS</strong> </p>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-engine" role="tabpanel" aria-labelledby="v-pills-engine-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Type</h4>
                    <p>K10B</p>
                  </div>
                  <div class="display-cell">
                    <h4>Capacity</h4>
                    <p>998 cc</p>
                  </div>
                  <div class="display-cell">
                    <h4>Engine Type</h4>
                    <p>Aluminum</p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Maximum Power</h4>
                    <p>50 kW @ 6000 rpm</p>
                  </div>
                  <div class="display-cell">
                    <h4>Maximum Torque</h4>
                    <p>90 Nm @ 3500 rpm</p>
                  </div>
                  <div class="display-cell">
                    <h4>Number Of Valves</h4>
                    <p>4</p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Number Of Cylinders</h4>
                    <p>3</p>
                  </div>
                  <div class="display-cell">
                    <h4>Emission Standard Type</h4>
                    <p>BS6 + OBD I</p>
                  </div>
                  <div class="display-cell">
                    <h4>Accelerator Pedal Type</h4>
                    <p>Electric type</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-brakes" role="tabpanel" aria-labelledby="v-pills-brakes-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Front</h4>
                    <p>Ventilated Disc</p>
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
                    <p>MacPherson strut with coil spring</p>
                    <p> </p>
                  </div>
                  <div class="display-cell">
                    <h4>Rear</h4>
                    <p>Coupled torsion beam axle with coil spring</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-weight" role="tabpanel" aria-labelledby="v-pills-weight-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Kerb Weight <span style="font-size: 10px;">(min./with Full Options)</span></h4>
                    <p>835/850<span style="font-size: 13px;">&nbsp;kg</span></p>
                  </div>
                  <div class="display-cell">
                    <h4>Gross Weight</h4>
                    <p>1250<span style="font-size: 13px;">&nbsp;kg</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-capacity" role="tabpanel" aria-labelledby="v-pills-capacity-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Seating Capacity</h4>
                    <p>5 Persons</p>
                  </div>
                  <div class="display-cell">
                    <h4>Luggage Capacity</h4>
                    <p>235 L </p>
                  </div>
                  <div class="display-cell">
                    <h4>Fuel Tank Capacity</h4>
                    <p>35 L </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-tyre" role="tabpanel" aria-labelledby="v-pills-tyre-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Tyre Size</h4>
                    <p>165/70R14</p>
                  </div>
                  <div class="display-cell"> </div>
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
            <div class="tab-pane fade" id="v-pills-powersteering" role="tabpanel" aria-labelledby="v-pills-powersteering-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Type</h4>
                    <p>Electronic Power Steering</p>
                  </div>
                  <div class="display-cell"> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="img-car"> <img src="assets/images/celerio-x/4Celerio-X.png" alt="carFooter"> </div>
    </div>
  </div>
  <div class="performance">
    <div class="performnace-bg">
      <picture>
        <source srcset="assets/images/celerio-x/5bg-desk.jpg" alt="" media="(min-width: 992px)">
        <source srcset="assets/images/celerio-x/5bg-ipad2.jpg" alt="" media="(min-width: 768px)">
        <source srcset="assets/images/celerio-x/5bg-mobile.jpg" alt="" media="(min-width: 320px)"> <img srcset="assets/images/celerio-x/5bg-desk.jpg" alt="" class="img-responsive bg-image"></picture>
      <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12 prod-image"> <img src="assets/images/celerio-x/5engine.png" class="img-responsive" alt="Alto Engine"> </div>
      <div class="performance-content col-xs-12 col-sm-6 col-md-9 col-lg-6">
        <h2>Features</h2>
        <select id="features" class="browser-default custom-select" onchange="function_celeriox_features()">
          <option value="VXi">VXi</option>
          <option value="VXi (O)">VXi (O)</option>
          <option value="VXi AGS">VXi AGS</option>
          <option value="VXi AGS (O)">VXi AGS (O)</option>
          <option value="ZXi">ZXi </option>
          <option value="ZXi (O)">ZXi (O)</option>
          <option value="ZXi AGS">ZXi AGS</option>
          <option value="ZXi AGS (O)">ZXi AGS (O)</option>
        </select>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-exterior-tab" data-toggle="pill" href="#v-pills-exterior" role="tab" aria-controls="v-pills-exterior" aria-selected="true">Exterior</a> <a class="nav-link" id="v-pills-interiors-tab" data-toggle="pill" href="#v-pills-interiors" role="tab" aria-controls="v-pills-interiors" aria-selected="false">Interiors</a> <a class="nav-link" id="v-pills-comfort-tab" data-toggle="pill" href="#v-pills-comfort" role="tab" aria-controls="v-pills-comfort" aria-selected="false">Comfort </a> <a class="nav-link" id="v-pills-safety-tab" data-toggle="pill" href="#v-pills-safety" role="tab" aria-controls="v-pills-safety" aria-selected="false">Safety and Security</a> <a class="nav-link" id="v-pills-utility-tab" data-toggle="pill" href="#v-pills-utility" role="tab" aria-controls="v-pills-utility" aria-selected="false">Central Console & Instrumental Panel</a> </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-exterior" role="tabpanel" aria-labelledby="v-pills-exterior-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Body Coloured </strong></h4>
                      <p>Bumper</p>
                    </div>
                    <div class="display-cell">
                      <h4><strong>Black Roof </strong></h4>
                      <p>Rail</p>
                    </div>
                    <div class="display-cell">
                      <h4><strong> Black Painted </strong></h4>
                      <p>ORVMs</p>
                    </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Black Painted </strong></h4>
                      <p>Outside Door Handles</p>
                    </div>
                    <div class="display-cell">
                      <h4><strong>Body Colored </strong></h4>
                      <p>Back Door Garnish</p>
                    </div>
                    <div class="display-cell">
                      <h4><strong>Black Full </strong></h4>
                      <p>Wheel Covers</p>
                    </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Bumper Cladding</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong> Bumpers Guard </strong></h4>
                      <p>Extension</p>
                    </div>
                    <div class="display-cell">
                      <h4><strong>Black Colored </strong></h4>
                      <p>Front Bumper Bezel</p>
                    </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Add On Part </strong></h4>
                      <p>For Rear Bumper Garnish</p>
                    </div>
                    <div class="display-cell">
                      <h4><strong>Body Side Cladding</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Door Side Moldings</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>B Pillar Black Out</strong></h4> </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-interiors" role="tabpanel" aria-labelledby="v-pills-interiors-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Integrated Rear </strong></h4>
                      <p>Headrest</p>
                    </div>
                    <div class="display-cell">
                      <h4><strong> Day Night </strong></h4>
                      <p>IRVM</p>
                    </div>
                    <div class="display-cell">
                      <h4><strong>Rear Seat </strong></h4>
                      <p>60:40 split</p>
                    </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Co-Dr Vanity</strong></h4>
                      <p>Mirror In Sunvisor</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-comfort" role="tabpanel" aria-labelledby="v-pills-comfort-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Power Windows<br>
    <p>Auto Down Driver Side</p>
    </strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Inside Manual <br>
    <p>Outside Mirrors</p>
    </strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Air Conditioner<br>
    <p>Manual</p>
    </strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Power Steering</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Central Door Lock <br>
    <p>5 Doors</p>
    </strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Electric Windows <br>
    <p>Power Windows)(Front+Rear)</p>
    </strong></h4> </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-safety" role="tabpanel" aria-labelledby="v-pills-safety-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Immobilizer</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Driver Airbag</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Seat Belt Reminder <br>
    (Driver and Passenger)</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Child-proof Rear Door Locks </strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Headlight Leveling</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Front Ventilated Disc</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Pedestrian Protection</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Reverse Parking Sensors</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>ABS</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Speed Alert System</strong></h4> </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-utility" role="tabpanel" aria-labelledby="v-pills-utility-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Illumination Colour<br>
    <p>(Amber)</p>
    </strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Urethane Steering<br>
    <p>(Wheel)</p>
    </strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Silver Painted<br>
    <p>Dial-type Climate Control</p>
    </strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Accessory Socket </strong></h4> </div>
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
      <div class="carousel-item active"> <img class="first-slide" src="assets/images/celerio-x/slide1.jpg" alt="First slide">
        <div class="caption">
          <h2>Xtraordinary <span>Technology</span></h2>
          <p> The Maruti Suzuki CelerioX is here to enhance your driving experience. Equipped with the revolutionary AGS technology, this car is going to make your drive as effortless as it can get. To add to that, steering mounted audio controls will entertain you throughout your drive. </p>
          <ul>
            <li data-slide="1"><strong style="font-size: 16px;">Steering-mounted Audio Control</strong></li>
            <li data-slide="2">Multi-info display</li>
            <li data-slide="3">Auto Gear Shift</li>
            <li data-slide="4">Dual Airbags**</li>
            <li data-slide="5">Front Seat Belt Pre-Tensioners and Force Limiter</li>
            <li data-slide="6">Anti-lock Braking System (ABS) for better control</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/celerio-x/slide2.jpg" alt="Second slide">
        <div class="caption">
          <h2>Xtraordinary <span>Technology</span></h2>
          <p> The Maruti Suzuki CelerioX is here to enhance your driving experience. Equipped with the revolutionary AGS technology, this car is going to make your drive as effortless as it can get. To add to that, steering mounted audio controls will entertain you throughout your drive. </p>
          <ul>
            <li data-slide="1">Steering-mounted Audio Control</li>
            <li data-slide="2"><strong style="font-size: 16px;">Multi-info display</strong></li>
            <li data-slide="3">Auto Gear Shift</li>
            <li data-slide="4">Dual Airbags**</li>
            <li data-slide="5">Front Seat Belt Pre-Tensioners and Force Limiter</li>
            <li data-slide="6">Anti-lock Braking System (ABS) for better control</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/celerio-x/slide3.jpg" alt="Second slide">
        <div class="caption">
          <h2>Xtraordinary <span>Technology</span></h2>
          <p> The Maruti Suzuki CelerioX is here to enhance your driving experience. Equipped with the revolutionary AGS technology, this car is going to make your drive as effortless as it can get. To add to that, steering mounted audio controls will entertain you throughout your drive. </p>
          <ul>
            <li data-slide="1">Steering-mounted Audio Control</li>
            <li data-slide="2">Multi-info display</li>
            <li data-slide="3"><strong style="font-size: 16px;">Auto Gear Shift</strong></li>
            <li data-slide="4">Dual Airbags**</li>
            <li data-slide="5">Front Seat Belt Pre-Tensioners and Force Limiter</li>
            <li data-slide="6">Anti-lock Braking System (ABS) for better control</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/celerio-x/slide4.jpg" alt="Second slide">
        <div class="caption">
          <h2>Xtraordinary <span>Technology</span></h2>
          <p> The Maruti Suzuki CelerioX is here to enhance your driving experience. Equipped with the revolutionary AGS technology, this car is going to make your drive as effortless as it can get. To add to that, steering mounted audio controls will entertain you throughout your drive. </p>
          <ul>
            <li data-slide="1">Steering-mounted Audio Control</li>
            <li data-slide="2">Multi-info display</li>
            <li data-slide="3">Auto Gear Shift</li>
            <li data-slide="4"><strong style="font-size: 16px;">Dual Airbags**</strong></li>
            <li data-slide="5">Front Seat Belt Pre-Tensioners and Force Limiter</li>
            <li data-slide="6">Anti-lock Braking System (ABS) for better control</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/celerio-x/slide5.jpg" alt="Second slide">
        <div class="caption">
          <h2>Xtraordinary <span>Technology</span></h2>
          <p> The Maruti Suzuki CelerioX is here to enhance your driving experience. Equipped with the revolutionary AGS technology, this car is going to make your drive as effortless as it can get. To add to that, steering mounted audio controls will entertain you throughout your drive. </p>
          <ul>
            <li data-slide="1">Steering-mounted Audio Control</li>
            <li data-slide="2">Multi-info display</li>
            <li data-slide="3">Auto Gear Shift</li>
            <li data-slide="4">Dual Airbags**</li>
            <li data-slide="5"><strong style="font-size: 16px;">Front Seat Belt Pre-Tensioners and Force Limiter</strong></li>
            <li data-slide="6">Anti-lock Braking System (ABS) for better control</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/celerio-x/slide6.jpg" alt="Second slide">
        <div class="caption">
          <h2>Xtraordinary <span>Technology</span></h2>
          <p> The Maruti Suzuki CelerioX is here to enhance your driving experience. Equipped with the revolutionary AGS technology, this car is going to make your drive as effortless as it can get. To add to that, steering mounted audio controls will entertain you throughout your drive. </p>
          <ul>
            <li data-slide="1">Steering-mounted Audio Control</li>
            <li data-slide="2">Multi-info display</li>
            <li data-slide="3">Auto Gear Shift</li>
            <li data-slide="4">Dual Airbags**</li>
            <li data-slide="5">Front Seat Belt Pre-Tensioners and Force Limiter</li>
            <li data-slide="6"><strong style="font-size: 16px;">Anti-lock Braking System (ABS) for better control</strong></li>
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
            <input type="hidden" class="form-control" id="model" name="model" value="Celerio-x"> </div>
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
            <input type="hidden" class="form-control" id="model" name="model" value="Celerio-x"> </div>
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