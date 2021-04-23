<?php    
$title="S-Presso | Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur | SEVA";	

$pgDesc="Check New Maruti Suzuki S Presso Price at SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur. Maruti S Presso Price, Image, Features, Specifications & more";

$pgKeywords="Maruti Suzuki, Maruti Suzuki Car Showroom, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Showrooms near me, Maruti Suzuki Finance, maruti suzuki s presso, s presso, maruti s presso, suzuki s presso, maruti suzuki s presso car, s presso price, s presso car, maruti s presso price, maruti suzuki espresso, maruti suzuki s presso price, s presso on road price, s presso image, spresso maruti suzuki, s presso features, maruti s presso interior, s presso maruti";

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
        <source srcset="assets/images/s-presso/top-desk.jpg" alt="S Presso Banner" media="(min-width: 992px)">
        <source srcset="assets/images/s-presso/top-ipad.jpg" alt="S Presso Banner" media="(min-width: 768px)">
        <source srcset="assets/images/s-presso/top-mobile.jpg" alt="S Presso Banner" media="(min-width: 320px)"> <img srcset="assets/images/s-presso/top-desk.jpg" alt="S Presso Banner"> </picture>
      <div class="mediacontent col-lg-5 white right vcenter"> <img src="assets/images/s-presso/top-text.png" alt="Live it Up">
        <div class="desktopcontent hidden-xs hidden-sm mt-2">
          <p>How do you turn every day into something exciting? Simple, by adding passion, enthusiasm, and a touch of surprise. That's what the Maruti Suzuki <strong>S Presso</strong> is all about - live up the drive like never before as you accelerate through a journey of spirited living. </p>
        </div>
        <div class="mobilecontent hidden-md hidden-lg">
          <p>How do you turn every day into something exciting? </p>
        </div>
      </div>
    </div>
  </div>
  <div class="price-section  mobileViewPrice">
    <h3> S-PRESSO Prices</h3>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" align="center"> S-PRESSO</td>
      </tr>
      <tr>
        <td>Varient</td>
        <td></td>
        <td>Price</td>
      </tr>
      <?php
      $sql = "SELECT varient,on_road_price FROM product WHERE car = 6 GROUP BY varient";
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
      <li><a href="assets/images/s-presso/S-PRESSO_Brochure.pdf" target="_blank">Product Brochure</a></li>
      <li><a href="maruti-finance.php">Finance</a></li>
    </ul>
  </div>
  <div class="product-carousel">
    <div class="item">
      <picture class="productcarouselbg">
        <source srcset="assets/images/s-presso/2-desk.jpg" alt="Mileage of the Maruti Suzuki S-PRESSO" media="(min-width: 992px)">
        <source srcset="assets/images/s-presso/2-ipad.jpg" alt="Mileage of the Maruti Suzuki S-PRESSO" media="(min-width: 768px)">
        <source srcset="assets/images/s-presso/2-mobile.jpg" alt="Mileage of the Maruti Suzuki S-PRESSO" media="(min-width: 320px)"> <img srcset="assets/images/s-presso/2-desk.jpg" alt="Mileage of the Maruti Suzuki S-PRESSO" class="img-responsive productbg"> </picture>
      <div class="productItems Aligner">
        <div class="container-fluid rel">
          <div class="car-color-variant">
            <a onclick="color_function(1,6)" href="javascript:void(0);"><img src="assets/images/cc-AutumnOrange.jpg"></a>
            <a onclick="color_function(2,6)" href="javascript:void(0);"><img src="assets/images/cc-silkysilver.jpg"></a>
            <a onclick="color_function(3,6)" href="javascript:void(0);"><img src="assets/images/cc-superiorwhite.jpg"></a>
            <a onclick="color_function(4,6)" href="javascript:void(0);"><img src="assets/images/cc-blazingred.jpg"></a>
            <a onclick="color_function(5,6)" href="javascript:void(0);"><img src="assets/images/cc-ceruleanblue.jpg"></a>
            <a onclick="color_function(6,6)" href="javascript:void(0);"><img src="assets/images/cc-granitegrey.jpg"></a>
          </div>
          <div class="row">
            <div class="col-lg-6"> <img id="image_1" src="assets/images/s-presso/2-orange.png" alt="Mileage of the Maruti Suzuki S-PRESSO"> <img id="image_2" src="assets/images/s-presso/silver.png" style="display:none"> <img id="image_3" src="assets/images/s-presso/white.png" style="display:none"> <img id="image_4" src="assets/images/s-presso/red.png" style="display:none"> <img id="image_5" src="assets/images/s-presso/blue.png" style="display:none"> <img id="image_6" src="assets/images/s-presso/grey.png" style="display:none"> </div>
            <div class="col-lg-6">
              <div class="proudctFooter">
                <div class="col-lg-10">
                  <div class="product-content">
                    <h3 class="terms mileage">Mileage of the Maruti Suzuki S-PRESSO</h3>
                    <p>Amp up the excitement in your drive with a mileage of 21.4 km/l* in STD, LXI and 21.7 km/l* in VXI, VXI+(MT and AGS) variants.</p>
                    <ul>
                      <li>
                        <h3>Petrol (STD, LXI)</h3>
                        <h4>21.4 <span>km/l*</span></h4> </li>
                      <li>
                        <h3>Petrol (VXI, VXI+, AGS)</h3>
                        <h4>21.7 <span>km/l*</span></h4> </li>
                    </ul>
                    <p class="last-termsP">*Accessories and features shown may not be a part of standard equipment.
                      <br>**As certified by Test Agency Under Rule 115 (G) of CMVR 1989
                      <br> ***Car colors shown may not be available across all variants.</p>
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
        <source srcset="assets/images/s-presso/3-desk.jpg" alt="S-Presso Side Profile" media="(min-width: 992px)">
        <source srcset="assets/images/s-presso/3-ipad.jpg" alt="S-Presso Side Profile" media="(min-width: 768px)">
        <source srcset="assets/images/s-presso/3-mobile.jpg" alt="S-Presso Side Profile" media="(min-width: 320px)">
        <!--[if IE 9]></video><![endif]--><img srcset="assets/images/s-presso/3-desk.jpg" alt="S-Presso Side Profile" class="img-responsive mainbg"> </picture>
      <section class="three60view-content col-lg-5">
        <section class="chase-description">
          <h2>World That Feels Alive</h2>
          <p>Slide in behind the wheel of this Mini SUV and make the world look up.</p>
          <div class="price-section deskViewprice">
            <h3 class="text-center"> Ex-Showroom Prices</h3>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="3" align="center" style="background: #000"> S-PRESSO</td>
              </tr>
              <tr>
                <td>Varient</td>
                <td></td>
                <td>Price</td>
              </tr>
              <?php
              $sql = "SELECT varient,on_road_price FROM product WHERE car = 6 GROUP BY varient";
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
              <a href="assets/images/s-presso/highlights1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/s-presso/highlights1.jpg" alt="S Presso Speedometer" /> </a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-7 col-xs-7">
            <div class="row">
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/s-presso/highlights2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/s-presso/highlights2.jpg" alt="S Presso - Heartect Platform" /> </a>
              </div>
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/s-presso/highlights3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/s-presso/highlights3.jpg" alt="S Presso Steering" /> </a>
              </div>
            </div>
            <div class="row">
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/s-presso/highlights4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/s-presso/highlights4.jpg" alt="S Presso Manual Gear" /> </a>
              </div>
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/s-presso/highlights5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/s-presso/highlights5.jpg" alt="S Presso Interior" /> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-engine" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row imageRow">
          <div class="col-lg-5 col-sm-5 col-xs-5 p-0">
            <div class="single first item-images">
              <a href="assets/images/s-presso/exterior1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/s-presso/exterior1.jpg" alt="S Presso Tail Lamp" /> </a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-7 col-xs-7">
            <div class="row">
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/s-presso/exterior2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/s-presso/exterior2.jpg" alt="S Presso Head lamp" /></a>
              </div>
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/s-presso/exterior3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/s-presso/exterior3.jpg" alt="S Presso Side Mirror" /></a>
              </div>
            </div>
            <div class="row">
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/s-presso/exterior4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/s-presso/exterior4.jpg" alt="S Presso Fender" /> </a>
              </div>
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/s-presso/exterior5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/s-presso/exterior5.jpg" alt="S Presso Front Grill" /> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-transmission" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="row imageRow">
          <div class="col-lg-5 col-sm-5 col-xs-5 p-0">
            <div class="single first item-images">
              <a href="assets/images/s-presso/interior1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/s-presso/interior1.jpg" alt="S Presso Seats" /> </a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-7 col-xs-7">
            <div class="row">
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/s-presso/interior2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/s-presso/interior2.jpg" alt="S Presso trunk" /> </a>
              </div>
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/s-presso/interior3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/s-presso/interior3.jpg" alt="S Presso Interior Design" /> </a>
              </div>
            </div>
            <div class="row">
              <div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
                <a href="assets/images/s-presso/interior4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/s-presso/interior4.jpg" alt="S Presso Cup Holder" /> </a>
              </div>
              <div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
                <a href="assets/images/s-presso/interior5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/s-presso/interior5.jpg" alt="S Presso Dashboard" /> </a>
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
      <select id="specification" class="browser-default custom-select" onchange="function_spresso()">
        <option value="STD">STD</option>
        <option value="STD(O)">STD(O)</option>
        <option value="LXI">LXI</option>
        <option value="LXI (O)">LXI (O)</option>
        <option value="VXI">VXI</option>
        <option value="VXI (O)">VXI (O)</option>
        <option value="VXI +">VXI+</option>
        <option value="VXI AGS">VXI AGS</option>
      </select>
      <div class="row ">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-dimensions-tab" data-toggle="pill" href="#v-pills-dimensions" role="tab" aria-controls="v-pills-dimensions" aria-selected="true">Dimensions</a> <a class="nav-link" id="v-pills-engine-tab" data-toggle="pill" href="#v-pills-engine" role="tab" aria-controls="v-pills-engine" aria-selected="false">Engine</a> <a class="nav-link" id="v-pills-brakes-tab" data-toggle="pill" href="#v-pills-brakes" role="tab" aria-controls="v-pills-brakes" aria-selected="false">Brakes</a> <a class="nav-link" id="v-pills-suspension-tab" data-toggle="pill" href="#v-pills-suspension" role="tab" aria-controls="v-pills-suspension" aria-selected="false">Suspension  System</a> <a class="nav-link" id="v-pills-weight-tab" data-toggle="pill" href="#v-pills-weight" role="tab" aria-controls="v-pills-weight" aria-selected="false">Weight</a> <a class="nav-link" id="v-pills-capacity-tab" data-toggle="pill" href="#v-pills-capacity" role="tab" aria-controls="v-pills-capacity" aria-selected="false">Emmision Type</a> <a class="nav-link" id="v-pills-transmission-tab" data-toggle="pill" href="#v-pills-transmission" role="tab" aria-controls="v-pills-transmission" aria-selected="false">Transmission</a> </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-dimensions" role="tabpanel" aria-labelledby="v-pills-dimensions-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Length</h4>
                    <p>3565 mm</p>
                  </div>
                  <div class="display-cell">
                    <h4>Width</h4>
                    <p>1520 mm</p>
                  </div>
                  <div class="display-cell">
                    <h4>Height</h4>
                    <p>1549 mm</p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Wheelbase</h4>
                    <p>2380 mm</p>
                  </div>
                  <div class="display-cell">
                    <h4>Turning Radius</h4>
                    <p> 4.5 m</p>
                  </div>
                  <div class="display-cell">
                    <h4>Seating Capacity</h4>
                    <p> 5</p>
                  </div>
                </div>
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
                    <h4>Compression Ratio</h4>
                    <p>11.0:1 </p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Bore X Stroke</h4>
                    <p>73.0 x 79.5 mm</p>
                  </div>
                  <div class="display-cell">
                    <h4>Power</h4>
                    <p>50 kW @ 5500 RPM</p>
                  </div>
                  <div class="display-cell">
                    <h4>Torque</h4>
                    <p>90 Nm @ 3500 RPM</p>
                  </div>
                </div>
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Fuel Type</h4>
                    <p>Petrol</p>
                  </div>
                  <div class="display-cell">
                    <h4>Fuel Tank Capacity</h4>
                    <p>27 L</p>
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
                    <p>MacPherson Strut with Coil Spring</p>
                  </div>
                  <div class="display-cell">
                    <h4>Rear</h4>
                    <p>Torsion Beam with Coil Spring</p>
                  </div>
                  <div class="display-cell">
                    <h4>Tyre Size</h4>
                    <p> 145/80 R13</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-weight" role="tabpanel" aria-labelledby="v-pills-weight-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>Kerb Weight</h4>
                    <p>726 kg</p>
                  </div>
                  <div class="display-cell">
                    <h4>Maximum GVW</h4>
                    <p>1170 kg</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-capacity" role="tabpanel" aria-labelledby="v-pills-capacity-tab">
              <div class="tab-contents">
                <div class="display-table">
                  <div class="display-cell">
                    <h4>EMMISION TYPE</h4>
                    <p>BS6</p>
                  </div>
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
      <div class="img-car"> <img src="assets/images/s-presso/4car.png" alt="carFooter"> </div>
    </div>
  </div>
  <div class="performance">
    <div class="performnace-bg">
      <picture>
        <source srcset="assets/images/s-presso/5-desk.jpg" alt="" media="(min-width: 992px)">
        <source srcset="assets/images/s-presso/5-ipad.jpg" alt="" media="(min-width: 768px)">
        <source srcset="assets/images/s-presso/5-mobile.jpg" alt="" media="(min-width: 320px)"> <img srcset="assets/images/s-presso/5-desk.jpg" alt="" class="img-responsive bg-image"></picture>
      <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12 prod-image"> <img src="assets/images/s-presso/5-engine.png" class="img-responsive" alt="Alto Engine"> </div>
      <div class="performance-content col-xs-12 col-sm-6 col-md-9 col-lg-6">
        <h2>Features</h2>
        <select id="features" class="browser-default custom-select" onchange="function_spresso_features()">
          <option value="STD">STD</option>
          <option value="STD(O)">STD(O)</option>
          <option value="LXI">LXI</option>
          <option value="LXI (O)">LXI (O)</option>
          <option value="VXI">VXI</option>
          <option value="VXI (O)">VXI (O)</option>
          <option value="VXI +">VXI+</option>
          <option value="VXI AGS">VXI AGS</option>
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
                      <h4><strong>SUV Inspired Bold Front Fascia</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Twin Chamber Headlamps</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Signature C shaped Tail Lamps</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Side Body Cladding</strong></h4> </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-interiors" role="tabpanel" aria-labelledby="v-pills-interiors-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Dynamic Centre Console</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>High Seating for commanding drive view</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Front Cabin Lamp( 3 positions)</strong></h4> </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-comfort" role="tabpanel" aria-labelledby="v-pills-comfort-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Front Console Utility Space</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>1L Bottle Holders with Map Pockets (front doors) </strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Rear Console Utility Space</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Co-Driver Side Utility Space</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Reclining &amp; Front Sliding Seats</strong></h4> </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-safety" role="tabpanel" aria-labelledby="v-pills-safety-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>HEARTECT Platform</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Driver side Airbag</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>ABS with EBD</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Seat belt reminder (Dr+Co. Dr) with Buzzer</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Reverse Parking Sensors</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Speed Alert System^</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Pedestrian protection</strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Crash compliance </strong></h4> </div>
                    <div class="display-cell">
                      <h4><strong>Immobiliser</strong></h4> </div>
                  </div>
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Child Proof Rear Door Lock</strong></h4> </div>
                  </div>
                  <p style="text-align: center;"><span style="font-size: 10px;"> ^The speed alert system gives audible warning for alert of over-speed to driver. When vehicle speed
exceeds about 80 km/h, primary level warning with two beeps will sound every minute. When the vehicle speed exceeds about 120 km/h, secondary level warning with continuous beeps will sound. If the vehicle speed is slowed down to about 118 km/h, primary warning will resume. If the vehicle is slowed down to about 78 km/h, speed alert warning will stop. This buzzer does not indicate any
malfunction in vehicle. </span></p>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-utility" role="tabpanel" aria-labelledby="v-pills-utility-tab">
                <div class="tab-contents">
                  <div class="display-table">
                    <div class="display-cell">
                      <h4><strong>Digital Display in the Instrument Cluster</strong></h4> </div>
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
      <div class="carousel-item active"> <img class="first-slide" src="assets/images/s-presso/slide1.jpg" alt="First slide">
        <div class="caption">
          <h2>Live Up Your Drive With <span>Technology</span></h2>
          <p>
            <p>The Spresso’s uniquely positioned instrument cluster puts you in total control of your drive. The customizable Smartplay studio ensures all your information and entertainment goes wherever you go. And the Auto-gear Shift Technology makes every drive as full of life as the last.</p>
          </p>
          <ul>
            <li><strong style="font-size: 16px;">Uniquely Positioned Instrument Cluster</strong></li>
            <li>Smartplay Studio with Audio and Voice Controls</li>
            <li>Centrally Located Power Window Switches</li>
            <li>Auto Gear Shift</li>
            <li>Rear Parking Assist Sensor</li>
            <li>Dual Airbags</li>
            <li>Large Cabin Space</li>
            <li>Good Luggage volume</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/s-presso/slide2.jpg" alt="Second slide">
        <div class="caption">
          <h2>Live Up Your Drive With <span>Technology</span></h2>
          <p>
            <p>The Spresso’s uniquely positioned instrument cluster puts you in total control of your drive. The customizable Smartplay studio ensures all your information and entertainment goes wherever you go. And the Auto-gear Shift Technology makes every drive as full of life as the last.</p>
          </p>
          <ul>
            <li>Uniquely Positioned Instrument Cluster</li>
            <li><strong>Smartplay Studio with Audio and Voice Controls</strong></li>
            <li>Centrally Located Power Window Switches</li>
            <li>Auto Gear Shift</li>
            <li>Rear Parking Assist Sensor</li>
            <li>Dual Airbags</li>
            <li>Large Cabin Space</li>
            <li>Good Luggage volume</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/s-presso/slide3.jpg" alt="Second slide">
        <div class="caption">
          <h2>Live Up Your Drive With <span>Technology</span></h2>
          <p>
            <p>The Spresso’s uniquely positioned instrument cluster puts you in total control of your drive. The customizable Smartplay studio ensures all your information and entertainment goes wherever you go. And the Auto-gear Shift Technology makes every drive as full of life as the last.</p>
          </p>
          <ul>
            <li>Uniquely Positioned Instrument Cluster</li>
            <li>Smartplay Studio with Audio and Voice Controls</li>
            <li><strong>Centrally Located Power Window Switches</strong></li>
            <li>Auto Gear Shift</li>
            <li>Rear Parking Assist Sensor</li>
            <li>Dual Airbags</li>
            <li>Large Cabin Space</li>
            <li>Good Luggage volume</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/s-presso/slide4.jpg" alt="Second slide">
        <div class="caption">
          <h2>Live Up Your Drive With <span>Technology</span></h2>
          <p>
            <p>The Spresso’s uniquely positioned instrument cluster puts you in total control of your drive. The customizable Smartplay studio ensures all your information and entertainment goes wherever you go. And the Auto-gear Shift Technology makes every drive as full of life as the last.</p>
          </p>
          <ul>
            <li>Uniquely Positioned Instrument Cluster</li>
            <li>Smartplay Studio with Audio and Voice Controls</li>
            <li>Centrally Located Power Window Switches</li>
            <li><strong>Auto Gear Shift</strong></li>
            <li>Rear Parking Assist Sensor</li>
            <li>Dual Airbags</li>
            <li>Large Cabin Space</li>
            <li>Good Luggage volume</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/s-presso/slide5.jpg" alt="Second slide">
        <div class="caption">
          <h2>Live Up Your Drive With <span>Technology</span></h2>
          <p>
            <p>The Spresso’s uniquely positioned instrument cluster puts you in total control of your drive. The customizable Smartplay studio ensures all your information and entertainment goes wherever you go. And the Auto-gear Shift Technology makes every drive as full of life as the last.</p>
          </p>
          <ul>
            <li>Uniquely Positioned Instrument Cluster</li>
            <li>Smartplay Studio with Audio and Voice Controls</li>
            <li>Centrally Located Power Window Switches</li>
            <li>Auto Gear Shift</li>
            <li><strong>Rear Parking Assist Sensor</strong></li>
            <li>Dual Airbags</li>
            <li>Large Cabin Space</li>
            <li>Good Luggage volume</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/s-presso/slide6.jpg" alt="Second slide">
        <div class="caption">
          <h2>Live Up Your Drive With <span>Technology</span></h2>
          <p>
            <p>The Spresso’s uniquely positioned instrument cluster puts you in total control of your drive. The customizable Smartplay studio ensures all your information and entertainment goes wherever you go. And the Auto-gear Shift Technology makes every drive as full of life as the last.</p>
          </p>
          <ul>
            <li>Uniquely Positioned Instrument Cluster</li>
            <li>Smartplay Studio with Audio and Voice Controls</li>
            <li>Centrally Located Power Window Switches</li>
            <li>Auto Gear Shift</li>
            <li>Rear Parking Assist Sensor</li>
            <li><strong>Dual Airbags</strong></li>
            <li>Large Cabin Space</li>
            <li>Good Luggage volume</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/s-presso/slide7.jpg" alt="Second slide">
        <div class="caption">
          <h2>Live Up Your Drive With <span>Technology</span></h2>
          <p>
            <p>The Spresso’s uniquely positioned instrument cluster puts you in total control of your drive. The customizable Smartplay studio ensures all your information and entertainment goes wherever you go. And the Auto-gear Shift Technology makes every drive as full of life as the last.</p>
          </p>
          <ul>
            <li>Uniquely Positioned Instrument Cluster</li>
            <li>Smartplay Studio with Audio and Voice Controls</li>
            <li>Centrally Located Power Window Switches</li>
            <li>Auto Gear Shift</li>
            <li>Rear Parking Assist Sensor</li>
            <li>Dual Airbags</li>
            <li><strong>Large Cabin Space</strong></li>
            <li>Good Luggage volume</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item"> <img class="second-slide" src="assets/images/s-presso/slide8.jpg" alt="Second slide">
        <div class="caption">
          <h2>Live Up Your Drive With <span>Technology</span></h2>
          <p>
            <p>The Spresso’s uniquely positioned instrument cluster puts you in total control of your drive. The customizable Smartplay studio ensures all your information and entertainment goes wherever you go. And the Auto-gear Shift Technology makes every drive as full of life as the last.</p>
          </p>
          <ul>
            <li>Uniquely Positioned Instrument Cluster</li>
            <li>Smartplay Studio with Audio and Voice Controls</li>
            <li>Centrally Located Power Window Switches</li>
            <li>Auto Gear Shift</li>
            <li>Rear Parking Assist Sensor</li>
            <li>Dual Airbags</li>
            <li>Large Cabin Space</li>
            <li><strong>Good Luggage volume</strong></li>
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
            <input type="hidden" class="form-control" id="model" name="model" value="S-presso>

      </div>
      <div class=" form-group ">
        <label for="Email " class="col-form-label ">Email<span class="parsley-required ">*</span></label>
        <input type="email " class="form-control " id="Email " name="email " required="true " data-parsley-type="email " data-parsley-required-message="Please Enter Email Id ">
      </div>
      <div class="form-group ">
        <label for="Phone " class="col-form-label ">Phone<span class="parsley-required ">*</span></label>
        <input type="tel " class="form-control " id="phone " name="phone_no " required="true " data-parsley-type="digits " maxlength="10 " data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit " data-parsley-required-message="Please Enter Contact No ">
      </div>
      <div class="form-group ">
        <label for="inputAddress2 ">City<span class="parsley-required " style="color:red ">*</span></label>
        <select class="form-control city " required="true "  aria-required="true " aria-invalid="false " name="city " id="city " onchange="check(event); ">
        <option value="Nagpur ">Nagpur</option>
        <option value="Nanded ">Nanded</option>
        <option value="Dhule ">Dhule</option>
        <option value="Nandurbar ">Nandurbar</option>
        <option value="Nashik ">Nashik</option>
        <option value="Hinganghat ">Hinganghat</option>
        </select>
      </div>
      <div class="form-group ">
      <p style="font-size:12px "><span class="parsley-required ">*</span><input type="checkbox " id="FormChkBoxBook6 " name="FormChkBox " style="vertical-align: sub; " required="true " data-parsley-required-message="Please indicate that you accept the Terms and Conditions ">
                I agree <a href="disclaimer.php " style="color: blue ">Terms and Conditions.</a> by clicking the ‘Continue’ button below and I am explicitly soliciting a call from Seva Maruti. Or its partners on my ‘Mobile’.</p>
      </div>
      
    
  </div>
  <div class="modal-footer d-flex justify-content-between ">
    <!--<button type="button " class="btn btn-secondary " data-dismiss="modal ">Close</button>-->
    <input type="submit " name="submit " class="btn btn-primary button-purple ">
    </form>
  </div>
</div>
</div>
</div>
<!--Get A Quote Modal -->

<!--Book Test Drive -->
<div class="book-testDrivePopup modal fade " id="book-testDrivePopup " tabindex="-1 " role="dialog " aria-labelledby="exampleModalLabel " aria-hidden="true ">
<div class="modal-dialog " role="document ">
<div class="modal-content ">
  <div class="modal-header ">
    <h5 class="modal-title " id="exampleModalLabel ">Book a test drive</h5>
    <button type="button " class="close " data-dismiss="modal " aria-label="Close ">
      <span aria-hidden="true ">&times;</span>
    </button>
  </div>
  <form action="send_mail_testdriveproduct.php " method="post " data-parsley-validate="parsley ">
  <div class="modal-body ">
      <div class="form-group ">
        <label for="First Name " class="col-form-label ">Full Name<span class="parsley-required ">*</span></label>
        <input type="text " class="form-control " id="first-name " name="full_name " required="true " data-parsley-pattern="^[a-zA-Z.,/ $()]+$ " data-parsley-pattern-message="Name should be in text only " data-parsley-required-message="Please Enter Name ">
        <input type="hidden " class="form-control " id="model " name="model " value="S-presso> </div>
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