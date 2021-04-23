<?php    
$title="Ertiga | Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur | SEVA";	

$pgDesc="Check New Maruti Suzuki Ertiga Price at SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur. New Ertiga Car Price List, CNG, Diesel, VXI, Interior and More";

$pgKeywords="Maruti Suzuki, Maruti Suzuki Car Showroom, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Showrooms near me, Maruti Suzuki Finance, ertiga, ertiga price, ertiga car, maruti suzuki ertiga, suzuki ertiga, ertiga 2019, maruti ertiga, ertiga new model, new ertiga, ertiga car price, maruti suzuki ertiga price, maruti ertiga price, ertiga on road price, maruti suzuki ertiga vxi, new ertiga price, ertiga cng, ertiga diesel, ertiga interior, ertiga price list, ertiga top model price";

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
        <source srcset="assets/images/ertiga/top-desk.png" alt="Ertiga Car Banner" media="(min-width: 992px)">
        <source srcset="assets/images/ertiga/top-ipad.png" alt="Ertiga Car Banner" media="(min-width: 768px)">
        <source srcset="assets/images/ertiga/top-mobile.png" alt="Ertiga Car Banner" media="(min-width: 320px)"> <img srcset="assets/images/ertiga/top-desk.png" alt="Ertiga Car Banner"> </picture>
      <div class="mediacontent col-lg-5 white right vcenter">
        <div class="desktopcontent hidden-xs hidden-sm mt-2">
          <p>A blend of comfort, power and style, the Ertiga has won the hearts of consumers and is now the no. 1 selling MPV. So, get ready to drive together in style with the stunning Next-Gen Ertiga. </p>
        </div>
        <div class="mobilecontent hidden-md hidden-lg">
          <p>A blend of comfort, power and style, the Ertiga has won the hearts of consumers and is now the no. </p>
        </div>
      </div>
    </div>
  </div>
  <div class="price-section mobileViewPrice">
    <h3 class="text-center" style="align:center !important"> Ex-Showroom Prices</h3>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">      
      <tr>
        <td>Varient</td>
        <td></td>
        <td>Price</td>
      </tr>
      <?php
      $sql = "SELECT varient,on_road_price FROM product WHERE car = 7 GROUP BY varient";
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
      <li><a href="assets/images/ertiga/Ertiga_Brand_Brochure.pdf" target="_blank">Product Brochure</a></li>
      <li><a href="maruti-finance.php">Finance</a></li>
    </ul>
  </div>
  <div class="product-carousel">
    <div class="item">
      <picture class="productcarouselbg">
        <source srcset="assets/images/ertiga/2-desk.jpg" alt="Maruti suzuki Ertiga Gear Shift" media="(min-width: 992px)">
        <source srcset="assets/images/ertiga/2-ipad.jpg" alt="Maruti suzuki Ertiga Gear Shift" media="(min-width: 768px)">
        <source srcset="assets/images/ertiga/2-mobile.jpg" alt="Maruti suzuki Ertiga Gear Shift" media="(min-width: 320px)"> <img srcset="assets/images/ertiga/2-desk.jpg" alt="Maruti suzuki Ertiga Gear Shift" class="img-responsive productbg"> </picture>
      <div class="productItems Aligner">
        <div class="container-fluid rel">
          <div class="car-color-variant">
            <a onclick="color_function(1,6)" href="javascript:void(0);"><img src="assets/images/cc-gallantred.jpg"></a>
            <a onclick="color_function(2,6)" href="javascript:void(0);"><img src="assets/images/cc-granitegrey.jpg"></a>
            <a onclick="color_function(3,6)" href="javascript:void(0);"><img src="assets/images/cc-ceruleanblue.jpg"></a>
            <a onclick="color_function(4,6)" href="javascript:void(0);"><img src="assets/images/cc-superiorwhite.jpg"></a>
            <a onclick="color_function(5,6)" href="javascript:void(0);"><img src="assets/images/cc-silkysilver.jpg"></a>
          </div>
          <div class="row">
            <div class="col-lg-6"> <img id="image_1" src="assets/images/ertiga/2-RED.png" alt="Ertiga MPV Price"> <img id="image_2" src="assets/images/ertiga/magma-grey.png" style="display:none"> <img id="image_3" src="assets/images/ertiga/prime-oxford-blue.png" style="display:none"> <img id="image_4" src="assets/images/ertiga/artic-white.png" style="display:none"> <img id="image_5" src="assets/images/ertiga/silky-silver.png" style="display:none"> </div>
            <div class="col-lg-6">
              <div class="proudctFooter">
                <div class="col-lg-10">
                  <div class="product-content">
                    <h3 class="terms mileage">Go the Extra Mile with Style</h3>
                    <ul>
                      <li>
                        <h3>Petrol MT</h3>
                        <h4>19.01 <span>km/l*</span></h4> </li>
                      <li>
                        <h3>Petrol AT</h3>
                        <h4>17.99 <span>km/l*</span></h4> </li>
                      <li>
                        <h3>CNG</h3>
                        <h4>26.08 <span>km/kg*</span></h4> </li>
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
        <source srcset="assets/images/ertiga/3-desk.png" alt="Ertiga Rear Profile" media="(min-width: 992px)">
        <source srcset="assets/images/ertiga/3-ipad.png" alt="Ertiga Rear Profile" media="(min-width: 768px)">
        <source srcset="assets/images/ertiga/3-mobile.png" alt="Ertiga Rear Profile" media="(min-width: 320px)">
        <!--[if IE 9]></video><![endif]--><img srcset="assets/images/ertiga/3-desk.png" alt="Ertiga Rear Profile" class="img-responsive mainbg"> </picture>
      <section class="three60view-content col-lg-5">
        <section class="chase-description">
          <h2>Sculpted to Stand Out.</h2>
          <p>The Ertiga flaunts a bold personality that is carved into every crease, corner and contour of its design. </p>
          <div class="price-section  deskViewprice">
            <h3 class="text-align">Ex-Showroom Prices</h3>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">            
              <tr>
                <td>Varient</td>
                <td></td>
                <td>Price</td>
              </tr>
              <?php
              $sql = "SELECT varient,on_road_price FROM product WHERE car = 7 GROUP BY varient";
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
              <a href="assets/images/ertiga/highlight1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/ertiga/highlight1.jpg" alt="New Ertiga Recliner Seats" /> </a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-7 col-xs-7">
            <div class="row">
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/ertiga/highlight2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/ertiga/highlight2.jpg" alt="New Ertiga Platform" /> </a>
              </div>
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/ertiga/highlight3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/ertiga/highlight3.jpg" alt="New Ertiga Speed Console" /> </a>
              </div>
            </div>
            <div class="row">
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/ertiga/highlight4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/ertiga/highlight4.jpg" alt="New Ertiga Tail Light" /> </a>
              </div>
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/ertiga/highlight5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/ertiga/highlight5.jpg" alt="New Ertiga Car Platform" /> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-engine" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row imageRow">
          <div class="col-lg-5 col-sm-5 col-xs-5 p-0">
            <div class="single first item-images">
              <a href="assets/images/ertiga/exterior1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/ertiga/exterior1.jpg" alt="Ertiga New Grille" /> </a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-7 col-xs-7">
            <div class="row">
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/ertiga/exterior2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/ertiga/exterior2.jpg" alt="New Ertiga Headlamps" /></a>
              </div>
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/ertiga/exterior3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/ertiga/exterior3.jpg" alt="Ertiga Tail Light" /></a>
              </div>
            </div>
            <div class="row">
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/ertiga/exterior4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/ertiga/exterior4.jpg" alt="Ertiga New Allo Wheels" /> </a>
              </div>
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/ertiga/exterior5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/ertiga/exterior5.jpg" alt="Ertiga New Foglights" /> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-transmission" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="row imageRow">
          <div class="col-lg-5 col-sm-5 col-xs-5 p-0">
            <div class="single first item-images">
              <a href="assets/images/ertiga/interior1.png" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/ertiga/interior1.png" alt="New Ertiga Dashboard" /> </a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-7 col-xs-7">
            <div class="row">
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/ertiga/interior2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/ertiga/interior2.jpg" alt="New Ertiga Seats" /> </a>
              </div>
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/ertiga/interior3.png" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/ertiga/interior3.png" alt="New-age SmartPlay Studio" /> </a>
              </div>
            </div>
            <div class="row">
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/ertiga/interior4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/ertiga/interior4.jpg" alt="New Ertiga Controls" /> </a>
              </div>
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/ertiga/interior5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/ertiga/interior5.jpg" alt="2nd Row Adjustable AC" /> </a>
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
      <select id="specification" class="browser-default custom-select" onchange="function_ertiga()">
        <option value="LXi">LXi</option>
        <option value="VXi">VXi</option>
        <option value="VXI AT">VXI AT</option>
        <option value="VXi CNG">VXi CNG</option>
        <option value="ZXi">ZXi</option>
        <option value="ZXi AT">ZXi AT</option>
        <option value="ZXi+">ZXi+</option>
      </select>
      <div class="row ">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-dimensions-tab" data-toggle="pill" href="#v-pills-dimensions" role="tab" aria-controls="v-pills-dimensions" aria-selected="true">Dimensions</a> <a class="nav-link" id="v-pills-engine-tab" data-toggle="pill" href="#v-pills-engine" role="tab" aria-controls="v-pills-engine" aria-selected="false">Engine</a> <a class="nav-link" id="v-pills-brakes-tab" data-toggle="pill" href="#v-pills-brakes" role="tab" aria-controls="v-pills-brakes" aria-selected="false">Brakes</a> <a class="nav-link" id="v-pills-suspension-tab" data-toggle="pill" href="#v-pills-suspension" role="tab" aria-controls="v-pills-suspension" aria-selected="false">Suspension  System</a> <a class="nav-link" id="v-pills-weight-tab" data-toggle="pill" href="#v-pills-weight" role="tab" aria-controls="v-pills-weight" aria-selected="false">Weight</a> <a class="nav-link" id="v-pills-capacity-tab" data-toggle="pill" href="#v-pills-capacity" role="tab" aria-controls="v-pills-capacity" aria-selected="false">New Technology</a> <a class="nav-link" id="v-pills-transmission-tab" data-toggle="pill" href="#v-pills-transmission" role="tab" aria-controls="v-pills-transmission" aria-selected="false">Transmission</a> </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-dimensions" role="tabpanel" aria-labelledby="v-pills-dimensions-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Length</h4>
                    <p>4395 <span style="font-size: 10px;">mm</span></p>
                  </div>
                  <div class="display-cell">
                    <h4>Width</h4>
                    <p>1735 <span style="font-size: 10px;">mm</span></p>
                  </div>
                  <div class="display-cell">
                    <h4>Height</h4>
                    <p>1690 <span style="font-size: 10px;">mm</span></p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Wheelbase</h4>
                    <p>2740 <span style="font-size: 10px;">mm</span></p>
                  </div>
                  <div class="display-cell">
                    <h4>Turning Radius</h4>
                    <p>5.2 <span style="font-size: 10px;">m</span></p>
                  </div>
                  <div class="display-cell">
                    <h4>Seating Capacity</h4>
                    <p>7</p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Boot Space (L)</h4>
                    <p>209 ( All 3 Rows Up), 550 (3<sup>rd</sup> Row Folded) &amp; 803 (2<sup>nd</sup> Row and 3<sup>rd</sup> Row Folded)</p>
                  </div>
                  <div class="display-cell">
                    <h4></h4> </div>
                </div>
                <div class="displaytable">
                  <div class="terms " style="padding-top:15px;padding-bottom:15px;">*Dimensions are common across all Variants</div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-engine" role="tabpanel" aria-labelledby="v-pills-engine-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Engine Type</h4>
                    <p>K15B SMART HYBRID</p>
                  </div>
                  <div class="display-cell">
                    <h4>Capacity</h4>
                    <p>1462 cc</p>
                  </div>
                  <div class="display-cell">
                    <h4>Compression Ratio</h4>
                    <p>(10.5 ± 0.3):1</p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Bore X Stroke</h4>
                    <p>74.0 x 85.0 mm</p>
                  </div>
                  <div class="display-cell">
                    <h4>Power</h4>
                    <p> 77 kW @ 6000 RPM </p>
                  </div>
                  <div class="display-cell">
                    <h4>Torque</h4>
                    <p>138 Nm @ 4400 RPM</p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Fuel Tank Capacity</h4>
                    <p>45 L</p>
                  </div>
                  <div class="display-cell">
                    <h4>Emission Type</h4>
                    <p>BS6</p>
                  </div>
                  <div class="display-cell">
                    <h4>Fuel Efficiency# </h4>
                    <p>19.01 km/l</p>
                  </div>
                </div>
                <div>
                  <p class="terms">#As certified by Test Agency Under Rule 115 of CMVR 1989</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-brakes" role="tabpanel" aria-labelledby="v-pills-brakes-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Front</h4>
                    <p>(Ventilated) Disc</p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Rear</h4>
                    <p>(Leading &amp; Trailing) Drum</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-suspension" role="tabpanel" aria-labelledby="v-pills-suspension-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Front</h4>
                    <p>MacPherson Strut &amp; Coil Spring</p>
                  </div>
                  <div class="display-cell">
                    <h4>Rear</h4>
                    <p>Torsion Beam &amp; Coil Spring</p>
                  </div>
                  <div class="display-cell">
                    <h4>Tyre Size</h4>
                    <p>185/65 R15</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-weight" role="tabpanel" aria-labelledby="v-pills-weight-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Kerb Weight</h4>
                    <p>1135 kg</p>
                  </div>
                  <div class="display-cell">
                    <h4>Gross Vehicle Weight</h4>
                    <p>1730 kg</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-capacity" role="tabpanel" aria-labelledby="v-pills-capacity-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4><strong>Idle Start Stop</strong></h4> </div>
                  <div class="display-cell">
                    <h4><strong>Brake Energy Regeneration</strong></h4> </div>
                  <div class="display-cell">
                    <h4><strong>Torque Assist during Acceleration</strong></h4> </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-transmission" role="tabpanel" aria-labelledby="v-pills-transmission-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Drive</h4>
                    <p>2WD, FF</p>
                  </div>
                  <div class="display-cell">
                    <h4>Transmission</h4>
                    <p>5MT</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="img-car"> <img src="assets/images/ertiga/4-ertiga.png" alt="carFooter"> </div>
    </div>
  </div>
  <div class="performance">
    <div class="performnace-bg">
      <picture>
        <source srcset="assets/images/ertiga/5-desk.jpg" alt="Ertiga Engine" media="(min-width: 992px)">
        <source srcset="assets/images/ertiga/5-ipad.jpg" alt="Ertiga Engine" media="(min-width: 768px)">
        <source srcset="assets/images/ertiga/5-mobile.jpg" alt="Ertiga Engine" media="(min-width: 320px)"> <img srcset="assets/images/ertiga/5-desk.jpg" alt="" class="img-responsive bg-image"></picture>
      <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12 prod-image"> <img src="assets/images/ertiga/5-engine.png" class="img-responsive" alt="Ertiga Engine"> </div>
      <div class="performance-content col-xs-12 col-sm-6 col-md-9 col-lg-6">
        <h2>Features</h2>
        <select id="features" class="browser-default custom-select" onchange="function_ertiga_features()">
          <option value="LXi">LXi</option>
          <option value="VXi">VXi</option>
          <option value="VXI AT">VXI AT</option>
          <option value="VXi CNG">VXi CNG</option>
          <option value="ZXi">ZXi</option>
          <option value="ZXi AT">ZXi AT</option>
          <option value="ZXi+">ZXi+</option>
        </select>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-exterior-tab" data-toggle="pill" href="#v-pills-exterior" role="tab" aria-controls="v-pills-exterior" aria-selected="true">Exterior</a> <a class="nav-link" id="v-pills-interiors-tab" data-toggle="pill" href="#v-pills-interiors" role="tab" aria-controls="v-pills-interiors" aria-selected="false">Interiors</a> <a class="nav-link" id="v-pills-comfort-tab" data-toggle="pill" href="#v-pills-comfort" role="tab" aria-controls="v-pills-comfort" aria-selected="false">Comfort </a> <a class="nav-link" id="v-pills-safety-tab" data-toggle="pill" href="#v-pills-safety" role="tab" aria-controls="v-pills-safety" aria-selected="false">Safety and Security</a> <a class="nav-link" id="v-pills-utility-tab" data-toggle="pill" href="#v-pills-utility" role="tab" aria-controls="v-pills-utility" aria-selected="false">Instrument Cluster</a> </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-exterior" role="tabpanel" aria-labelledby="v-pills-exterior-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Projector Headlamps (Halogen)</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>3D Tail Lamps with LED</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Painted Front Grille</strong></h4> </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-interiors" role="tabpanel" aria-labelledby="v-pills-interiors-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Dual Tone Interiors</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>2nd Row Seats 60:40 Split with Slide and Recline</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>3rd Row Seats 50:50 Split with Recline</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Headrest Front Row Seats</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Head Rest 2nd Row Seats</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Head Rest 3rd Row Seats</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Driver Side Sunvisor with Ticket Holder</strong></h4> </div>
                    <div class="display-cell">
                      <h4></h4> </div>
                    <div class="display-cell">
                      <h4></h4> </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-comfort" role="tabpanel" aria-labelledby="v-pills-comfort-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Manual AC</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Air Cooled Twin Cup Holder (Console)</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Accessory Socket Front Row with Smartphone Storage Space</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Power Windows (Fr/Rr) with Dr. Side Auto Down Functions</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Power &amp; Tilt Steering</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Bottle Holders (In each row)</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Cabin Lamp (Fr. + Rr.)</strong></h4> </div>
                    <div class="display-cell"></div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-safety" role="tabpanel" aria-labelledby="v-pills-safety-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Dual Airbag </strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>ABS with EBD and Brake Assist</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Engine Immobilizer</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>ISOFIX Child Seat Anchorages (2nd Row Seats) </strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Front Seat Belts with Pre-tensioner &amp; Force Limiters (Dr.+Co-Dr.)</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Seat Belt Reminder Lamp with Buzzer (Dr.+Co-Dr.)</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Speed Sensitive Auto Door Lock</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Rear Parking Sensors </strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Central Locking </strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>High Speed Alert System </strong></h4> </div>
                    <div class="display-cell"> </div>
                    <div class="display-cell"></div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-utility" role="tabpanel" aria-labelledby="v-pills-utility-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>MID with Coloured TFT</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Tachometer</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Gear Shift Indicator</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Digital Clock</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Fuel Consumption<br>
    <span>(Instantaneous and Avg)</span></strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Distance to Empty</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Headlamp on Warning</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Door Ajar Warning Lamp</strong></h4> </div>
                    <div class="display-table">
                      <h4></h4> </div>
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
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active"> <img class="first-slide" src="assets/images/ertiga/slide1.jpg" alt="TFT Multi-Information Colour Display">
        <div class="caption">
          <h2>Always Awsome. <span>Always Advanced.</span></h2>
          <p>Air Cooled cup/bottle holders in the front add a new dimension to utility and are conveniently placed within arm’s reach – a segment's first.</p>
          <ul>
            <li> <strong>TFT Multi-Information Colour Display</strong></li>
            <li>New-age SmartPlay Studio</li>
            <li>Steering Mounted Audio and Calling Controls</li>
            <li>Air Cooled Twin Cup Holders</li>
            <li> Automatic Climate Control</li>
            <li>Dual Airbags</li>
            <li>ABS with EBD</li>
            <li>Hill Hold Technology</li>
            <li>Electronic Stability Program</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/ertiga/slide2.png" alt="New-age SmartPlay Studio">
        <div class="caption">
          <h2>Always Awsome. <span>Always Advanced.</span></h2>
          <p>Air Cooled cup/bottle holders in the front add a new dimension to utility and are conveniently placed within arm’s reach – a segment's first.</p>
          <ul>
            <li> TFT Multi-Information Colour Display</li>
            <li><strong>New-age SmartPlay Studio</strong></li>
            <li>Steering Mounted Audio and Calling Controls</li>
            <li>Air Cooled Twin Cup Holders</li>
            <li> Automatic Climate Control</li>
            <li>Dual Airbags</li>
            <li>ABS with EBD</li>
            <li>Hill Hold Technology</li>
            <li>Electronic Stability Program</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/ertiga/slide3.jpg" alt="Steering Mounted Audio and Calling Controls">
        <div class="caption">
          <h2>Always Awsome. <span>Always Advanced.</span></h2>
          <p>Air Cooled cup/bottle holders in the front add a new dimension to utility and are conveniently placed within arm’s reach – a segment's first.</p>
          <ul>
            <li> TFT Multi-Information Colour Display</li>
            <li>New-age SmartPlay Studio</li>
            <li><strong>Steering Mounted Audio and Calling Controls</strong></li>
            <li>Air Cooled Twin Cup Holders</li>
            <li> Automatic Climate Control</li>
            <li>Dual Airbags</li>
            <li>ABS with EBD</li>
            <li>Hill Hold Technology</li>
            <li>Electronic Stability Program</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/ertiga/slide4.jpg" alt="Air Cooled Twin Cup Holders">
        <div class="caption">
          <h2>Always Awsome. <span>Always Advanced.</span></h2>
          <p>Air Cooled cup/bottle holders in the front add a new dimension to utility and are conveniently placed within arm’s reach – a segment's first.</p>
          <ul>
            <li> TFT Multi-Information Colour Display</li>
            <li>New-age SmartPlay Studio</li>
            <li>Steering Mounted Audio and Calling Controls</li>
            <li><strong>Air Cooled Twin Cup Holders</strong></li>
            <li> Automatic Climate Control</li>
            <li>Dual Airbags</li>
            <li>ABS with EBD</li>
            <li>Hill Hold Technology</li>
            <li>Electronic Stability Program</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/ertiga/slide5.jpg" alt="Automatic Climate Control">
        <div class="caption">
          <h2>Always Awsome. <span>Always Advanced.</span></h2>
          <p>Air Cooled cup/bottle holders in the front add a new dimension to utility and are conveniently placed within arm’s reach – a segment's first.</p>
          <ul>
            <li> TFT Multi-Information Colour Display</li>
            <li>New-age SmartPlay Studio</li>
            <li>Steering Mounted Audio and Calling Controls</li>
            <li>Air Cooled Twin Cup Holders</li>
            <li> <strong>Automatic Climate Control</strong></li>
            <li>Dual Airbags</li>
            <li>ABS with EBD</li>
            <li>Hill Hold Technology</li>
            <li>Electronic Stability Program</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/ertiga/slide6.png" alt="Dual Airbags">
        <div class="caption">
          <h2>Always Awsome. <span>Always Advanced.</span></h2>
          <p>Air Cooled cup/bottle holders in the front add a new dimension to utility and are conveniently placed within arm’s reach – a segment's first.</p>
          <ul>
            <li> TFT Multi-Information Colour Display</li>
            <li>New-age SmartPlay Studio</li>
            <li>Steering Mounted Audio and Calling Controls</li>
            <li>Air Cooled Twin Cup Holders</li>
            <li> Automatic Climate Control</li>
            <li><strong>Dual Airbags</strong></li>
            <li>ABS with EBD</li>
            <li>Hill Hold Technology</li>
            <li>Electronic Stability Program</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/ertiga/slide7.jpg" alt="ABS with EBD">
        <div class="caption">
          <h2>Always Awsome. <span>Always Advanced.</span></h2>
          <p>Air Cooled cup/bottle holders in the front add a new dimension to utility and are conveniently placed within arm’s reach – a segment's first.</p>
          <ul>
            <li> TFT Multi-Information Colour Display</li>
            <li>New-age SmartPlay Studio</li>
            <li>Steering Mounted Audio and Calling Controls</li>
            <li>Air Cooled Twin Cup Holders</li>
            <li> Automatic Climate Control</li>
            <li>Dual Airbags</li>
            <li><strong>ABS with EBD</strong></li>
            <li>Hill Hold Technology</li>
            <li>Electronic Stability Program</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/ertiga/slide8.jpg" alt="Hill Hold Technology">
        <div class="caption">
          <h2>Always Awsome. <span>Always Advanced.</span></h2>
          <p>Air Cooled cup/bottle holders in the front add a new dimension to utility and are conveniently placed within arm’s reach – a segment's first.</p>
          <ul>
            <li> TFT Multi-Information Colour Display</li>
            <li>New-age SmartPlay Studio</li>
            <li>Steering Mounted Audio and Calling Controls</li>
            <li>Air Cooled Twin Cup Holders</li>
            <li> Automatic Climate Control</li>
            <li>Dual Airbags</li>
            <li>ABS with EBD</li>
            <li><strong>Hill Hold Technology</strong></li>
            <li>Electronic Stability Program</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/ertiga/slide9.jpg" alt="Electronic Stability Program">
        <div class="caption">
          <h2>Always Awsome. <span>Always Advanced.</span></h2>
          <p>Air Cooled cup/bottle holders in the front add a new dimension to utility and are conveniently placed within arm’s reach – a segment's first.</p>
          <ul>
            <li> TFT Multi-Information Colour Display</li>
            <li>New-age SmartPlay Studio</li>
            <li>Steering Mounted Audio and Calling Controls</li>
            <li>Air Cooled Twin Cup Holders</li>
            <li> Automatic Climate Control</li>
            <li>Dual Airbags</li>
            <li>ABS with EBD</li>
            <li>Hill Hold Technology</li>
            <li><strong>Electronic Stability Program</strong></li>
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
            <input type="hidden" class="form-control" id="model" name="model" value="alto-k10"> </div>
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
            <input type="hidden" class="form-control" id="model" name="model" value="alto-k10"> </div>
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