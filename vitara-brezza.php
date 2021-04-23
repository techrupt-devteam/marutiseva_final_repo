<?php   
$title="Vitara Brezza | Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur | SEVA";	

$pgDesc="Check New Maruti Suzuki Vitara Brezza Price at SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur. Maruti Brezza Car on road price, Petrol, VDI, ZDI, Images and More"; 

$pgKeywords="Maruti Suzuki, Maruti Suzuki Car Showroom, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Showrooms near me, Maruti Suzuki Finance, vitara brezza, brezza, maruti suzuki vitara brezza, brezza price, brezza car, vitara brezza price, maruti brezza, brezza car price, maruti suzuki brezza, brezza petrol, brezza vdi, suzuki brezza, brezza zdi, brezza on road price, brezza petrol price, brezza images, brezza 2020, vitara brezza 2020"; 

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
						<source srcset="assets/images/vitara-brezza/top-desk.jpg" alt="Vitara Brezza Banner" media="(min-width: 992px)">
						<source srcset="assets/images/vitara-brezza/top-ipad.jpg" alt="Vitara Brezza Banner" media="(min-width: 768px)">
						<source srcset="assets/images/vitara-brezza/top-mobile.jpg" alt="Vitara Brezza Banner" media="(min-width: 320px)"> <img srcset="assets/images/vitara-brezza/top-desk.jpg" alt="Vitara Brezza Banner"> </picture>
					<div class="mediacontent col-lg-5 white right vcenter"> <img srcset="assets/images/vitara-brezza/top-text.png" alt="Vitara Brezza Banner">
						<div class="desktopcontent hidden-xs hidden-sm mt-2">
							<p>Filled with doses of wickedness, the all-new Vitara Brezza, is irresistibly flamboyant with a powerful 1.5L Petrol engine. So, buckle-up and get ready to go gutsy! </p>
						</div>
						<div class="mobilecontent hidden-md hidden-lg">
							<p>Filled with doses of wickedness, the all-new Vitara Brezza </p>
						</div>
					</div>
				</div>
			</div>
			<div class="price-section mobileViewPrice">
				<h3> VITARA  BREZZA - BS  6 Prices</h3>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td colspan="3" align="center">Ex-Showroom Prices</td>
					</tr>
					<tr>
						<td>Varient</td>
						<!-- <td></td> -->
						<td>Price</td>
					</tr>
         	 <?php
				$sql = "SELECT varient,on_road_price FROM product WHERE car = 8 GROUP BY varient";
				$result = mysqli_query($conn, $sql);
				while($row = $result->fetch_assoc()) {
				?>
				<tr>
					<td><?php echo $row['varient'];?></td>
					<!-- <td>M</td> -->
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
					<li><a href="assets/images/vitara-brezza/Vitara-Brezza_Brochure.pdf" target="_blank">Product Brochure</a></li>
					<li><a href="maruti-finance.php">Finance</a></li>
				</ul>
			</div>
			<div class="product-carousel">
				<div class="item">
					<picture class="productcarouselbg">
						<source srcset="assets/images/vitara-brezza/2-desk.jpg" alt="Maruti Suzuki Vitara Brezza" media="(min-width: 992px)">
						<source srcset="assets/images/vitara-brezza/2-ipad.jpg" alt="Maruti Suzuki Vitara Brezza" media="(min-width: 768px)">
						<source srcset="assets/images/vitara-brezza/2-mobile.jpg" alt="Maruti Suzuki Vitara Brezza" media="(min-width: 320px)"> <img srcset="assets/images/vitara-brezza/2-desk.jpg" alt="Maruti Suzuki Vitara Brezza" class="img-responsive productbg"> </picture>
					<div class="productItems Aligner">
						<div class="container-fluid rel">
							<div class="car-color-variant">
								<a onclick="color_function(1,9)" href="javascript:void(0);"><img src="assets/images/cc-FeiryYellowandArcticwhite.jpg"></a>
								<a onclick="color_function(2,9)" href="javascript:void(0);"><img src="assets/images/cc-ceruleanblue.jpg"></a>
								<a onclick="color_function(3,9)" href="javascript:void(0);"><img src="assets/images/cc-black-blue.jpg"></a>
								<a onclick="color_function(4,9)" href="javascript:void(0);"><img src="assets/images/cc-red-black.jpg"></a>
								<a onclick="color_function(5,9)" href="javascript:void(0);"><img src="assets/images/cc-silkysilver.jpg"></a>
								<a onclick="color_function(6,9)" href="javascript:void(0);"><img src="assets/images/cc-granitegrey.jpg"></a>
								<a onclick="color_function(7,9)" href="javascript:void(0);"><img src="assets/images/cc-superiorwhite.jpg"></a>
								<a onclick="color_function(8,9)" href="javascript:void(0);"><img src="assets/images/cc-AutumnOrange.jpg"></a>
								<a onclick="color_function(9,9)" href="javascript:void(0);"><img src="assets/images/cc-blazingred.jpg"></a>
							</div>
							<div class="row">
								<div class="col-lg-6"> <img id="image_1" src="assets/images/vitara-brezza/red-org.png" alt="Maruti Suzuki Vitara Brezza"> <img id="image_2" src="assets/images/vitara-brezza/blue-color.png" style="display:none"> <img id="image_3" src="assets/images/vitara-brezza/blue-black-color.png" style="display:none"> <img id="image_4" src="assets/images/vitara-brezza/red-black-color.png" style="display:none"> <img id="image_5" src="assets/images/vitara-brezza/gray-color.png" style="display:none"> <img id="image_6" src="assets/images/vitara-brezza/dark-gray.png" style="display:none"> <img id="image_7" src="assets/images/vitara-brezza/white-color.png" style="display:none"> <img id="image_8" src="assets/images/vitara-brezza/orange-color.png" style="display:none"> <img id="image_9" src="assets/images/vitara-brezza/red-color.png" style="display:none"> </div>
								<div class="col-lg-6">
									<div class="proudctFooter">
										<div class="col-lg-10">
											<div class="product-content">
												<h3 class="terms mileage">Mileage of the Maruti Suzuki Vitara Brezza</h3>
												<p class="last-termsP">The new-age BS6 compliant 1.5L petrol engine in Vitara Brezza is robust and powered to be wicked on performance. The manual variant of Vitara Brezza delivers a strong mileage of 17.03 km/l* while the automatic variant with progressive Smart Hybrid technology delivers 18.76 km/l*. Drive smooth, go gutsy!</p>
												<p></p>
												<ul>
													<li>
														<h3>PETROL MT</h3>
														<h4>17.03 <span>km/l*</span></h4> </li>
													<li>
														<h3>PETROL AT</h3>
														<h4>18.76 <span>km/l*</span></h4> </li>
												</ul>
												<p class="last-termsP">*As certified by Test Agency Under Rule 115 (G) of CMVR
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
						<source srcset="assets/images/vitara-brezza/3-desk.jpg" alt="Vitara Brezza Design" media="(min-width: 992px)">
						<source srcset="assets/images/vitara-brezza/3-ipad.jpg" alt="Vitara Brezza Design" media="(min-width: 768px)">
						<source srcset="assets/images/vitara-brezza/3-mobile.jpg" alt="Vitara Brezza Design" media="(min-width: 320px)">
						<!--[if IE 9]></video><![endif]--><img srcset="assets/images/vitara-brezza/3-desk.jpg" alt="Vitara Brezza Design" class="img-responsive mainbg"> </picture>
					<section class="three60view-content col-lg-5">
						<section class="chase-description">
							<h2>Looks to be Wicked</h2>
							<p>Attractive and bold, the powerful all-new Vitara Brezza has an expression that’s indomitable. </p>
							<div class="price-section deskViewprice">
								<h3> VITARA  BREZZA - BS  6 Prices</h3>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td colspan="3" align="center">Ex-Showroom Prices</td>
									</tr>
									<tr>
										<td>Varient</td>
										<!-- <td></td> -->
										<td>Price</td>
									</tr>
                  <?php
                  $sql = "SELECT varient,on_road_price FROM product WHERE car = 8 GROUP BY varient";
                  $result = mysqli_query($conn, $sql);
                  while($row = $result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?php echo $row['varient'];?></td>
                    <!-- <td>M</td> -->
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
									<a href="assets/images/vitara-brezza/highlight1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/vitara-brezza/highlight1.jpg" alt="Vitara Brezza - Cruise Control" /> </a>
								</div>
							</div>
							<div class="col-lg-7 col-sm-7 col-xs-7">
								<div class="row">
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/vitara-brezza/highlight2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/vitara-brezza/highlight2.jpg" alt="Vitara Brezza - Front Profile" /> </a>
									</div>
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/vitara-brezza/highlight3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/vitara-brezza/highlight3.jpg" alt="Vitara Brezza LED Tail Lights" /> </a>
									</div>
								</div>
								<div class="row">
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/vitara-brezza/highlight4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/vitara-brezza/highlight4.jpg" alt="Vitara Brezza Precision Cut Alloy Wheels" /> </a>
									</div>
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/vitara-brezza/highlight5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/vitara-brezza/highlight5.jpg" alt="Vitara Brezza LED Projector Headlamps" /> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-engine" role="tabpanel" aria-labelledby="pills-profile-tab">
						<div class="row imageRow">
							<div class="col-lg-5 col-sm-5 col-xs-5 p-0">
								<div class="single first item-images">
									<a href="assets/images/vitara-brezza/exterior1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/vitara-brezza/exterior1.jpg" alt="Vitara Brezza Sporty Bold Design" /> </a>
								</div>
							</div>
							<div class="col-lg-7 col-sm-7 col-xs-7">
								<div class="row">
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/vitara-brezza/exterior2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/vitara-brezza/exterior2.jpg" alt="Vitara Brezza Auto Folding ORVMs" /></a>
									</div>
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/vitara-brezza/exterior3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/vitara-brezza/exterior3.jpg" alt="Vitara Brezza LED Fog Lamps" /></a>
									</div>
								</div>
								<div class="row">
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/vitara-brezza/exterior4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/vitara-brezza/exterior4.jpg" alt="Vitara Brezza Auto Headlamps" /> </a>
									</div>
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/vitara-brezza/exterior5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/vitara-brezza/exterior5.jpg" alt="Vitara Brezza Floating Roof Design" /> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-transmission" role="tabpanel" aria-labelledby="pills-contact-tab">
						<div class="row imageRow">
							<div class="col-lg-5 col-sm-5 col-xs-5 p-0">
								<div class="single first item-images">
									<a href="assets/images/vitara-brezza/interior1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/vitara-brezza/interior1.jpg" alt="Vitara Brezza Premium Dashboard" /> </a>
								</div>
							</div>
							<div class="col-lg-7 col-sm-7 col-xs-7">
								<div class="row">
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/vitara-brezza/interior2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/vitara-brezza/interior2.jpg" alt="Vitara Brezza Flip-Foldable Seats" /> </a>
									</div>
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/vitara-brezza/interior3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/vitara-brezza/interior3.jpg" alt="Vitara Brezza New-Ags Smartplay Studio" /> </a>
									</div>
								</div>
								<div class="row">
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/vitara-brezza/interior4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/vitara-brezza/interior4.jpg" alt="Vitara Brezza Front Armrest" /> </a>
									</div>
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/vitara-brezza/interior5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/vitara-brezza/interior5.jpg" alt="Vitara Brezza Wide Cabin Space" /> </a>
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
					<select id="specification" class="browser-default custom-select" onchange="function_brezza()">
						<option value="LXI">LXI</option>
						<option value="VXI">VXI</option>
						<option value="VXI AT">VXI AT</option>
						<option value="ZXI">ZXI</option>
						<option value="ZXI+">ZXI+</option>
						<option value="ZXI AT">ZXI AT</option>
						<option value="ZXI+ AT">ZXI+ AT</option>
					</select>
					<div class="row ">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-dimensions-tab" data-toggle="pill" href="#v-pills-dimensions" role="tab" aria-controls="v-pills-dimensions" aria-selected="true">Dimensions</a> <a class="nav-link" id="v-pills-engine-tab" data-toggle="pill" href="#v-pills-engine" role="tab" aria-controls="v-pills-engine" aria-selected="false">Engine</a> <a class="nav-link" id="v-pills-brakes-tab" data-toggle="pill" href="#v-pills-brakes" role="tab" aria-controls="v-pills-brakes" aria-selected="false">Brakes</a> <a class="nav-link" id="v-pills-suspension-tab" data-toggle="pill" href="#v-pills-suspension" role="tab" aria-controls="v-pills-suspension" aria-selected="false">Suspension  System</a> </div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="tab-content" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-pills-dimensions" role="tabpanel" aria-labelledby="v-pills-dimensions-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4>Overall Length</h4>
												<p> 3995 mm </p>
											</div>
											<div class="display-cell">
												<h4>Overall Width</h4>
												<p> 1790 mm </p>
											</div>
											<div class="display-cell">
												<h4>Overall Height</h4>
												<p> 1640 mm </p>
											</div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4>Wheelbase</h4>
												<p> 2500 &nbsp;mm </p>
											</div>
											<div class="display-cell">
												<h4>Fuel Tank Capacity</h4>
												<p> 48 L </p>
											</div>
											<div class="display-cell">
												<h4>Turning Radius</h4>
												<p> 5.2 m </p>
											</div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4> Kerb Weight (kg)</h4>
												<p> 1110-1130 kg </p>
											</div>
											<div class="display-cell">
												<h4>Gross Vehicle Weight (kg)</h4>
												<p> 1600 kg </p>
											</div>
										</div>
										<p style="font-size:10px">*Dimensions are common across all Variants</p>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-engine" role="tabpanel" aria-labelledby="v-pills-engine-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4>Engine Type</h4>
												<p>K15B</p>
											</div>
											<div class="display-cell">
												<h4>Engine Capacity</h4>
												<p> 1462 CC </p>
											</div>
											<div class="display-cell">
												<h4>Max Power</h4>
												<p> 77 kW @ 6000 rpm </p>
											</div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4>Transmission Type</h4>
												<p>5 MT</p>
											</div>
											<div class="display-cell">
												<h4>Fuel Efficiency</h4>
												<p>17.03 km/l* </p>
											</div>
											<div class="display-cell">
												<h4>No. of Cylinder</h4>
												<p> 4 </p>
											</div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4>Max Torque</h4>
												<p> 138 Nm @ 4400 rpm </p>
											</div>
											<div class="display-cell">
												<h4>Emission Standard</h4>
												<p>BS6</p>
											</div>
										</div>
										<p style="font-size:10px">*As certified by Test Agency Under Rule 115 (G) of CMVR 1989</p>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-brakes" role="tabpanel" aria-labelledby="v-pills-brakes-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4>Front Brakes</h4>
												<p>Ventilated Disc</p>
											</div>
											<div class="display-cell">
												<h4>Rear Brakes</h4>
												<p> Drum </p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-suspension" role="tabpanel" aria-labelledby="v-pills-suspension-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4>Front Suspension</h4>
												<p>McPherson Strut with Coil Spring</p>
											</div>
											<div class="display-cell">
												<h4>Rear Suspension</h4>
												<p>Torsion Beam with Coil Spring</p>
											</div>
											<div class="display-cell">
												<h4>Tyre Size</h4>
												<p>205/60 R16 (Steel Wheel)</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="img-car"> <img src="assets/images/vitara-brezza/4-Brezza1-v1.png" alt="carFooter"> </div>
				</div>
			</div>
			<div class="performance">
				<div class="performnace-bg">
					<picture>
						<source srcset="assets/images/vitara-brezza/5-desk.jpg" alt="Vitara Brezza engine performance" media="(min-width: 992px)">
						<source srcset="assets/images/vitara-brezza/5-ipad.jpg" alt="Vitara Brezza engine performance" media="(min-width: 768px)">
						<source srcset="assets/images/vitara-brezza/5-mobile.jpg" alt="Vitara Brezza engine performance" media="(min-width: 320px)"> <img srcset="assets/images/vitara-brezza/5-desk.jpg" alt="Vitara Brezza engine performance" class="img-responsive bg-image"></picture>
					<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12 prod-image"> <img src="assets/images/vitara-brezza/5-engine_brezza_petrol.png" class="img-responsive" alt="Brezza Petrol Engine"> </div>
					<div class="performance-content col-xs-12 col-sm-6 col-md-9 col-lg-6">
						<h2>Features</h2>
						<select id="features" class="browser-default custom-select" onchange="function_brezza_features()">
							<option value="LXI">LXI</option>
							<option value="VXI">VXI</option>
							<option value="VXI AT">VXI AT</option>
							<option value="ZXI">ZXI</option>
							<option value="ZXI+">ZXI+</option>
							<option value="ZXI AT">ZXI AT</option>
							<option value="ZXI+ AT">ZXI+ AT</option>
						</select>
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-12">
								<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-exterior-tab" data-toggle="pill" href="#v-pills-exterior" role="tab" aria-controls="v-pills-exterior" aria-selected="true">Exterior</a> <a class="nav-link" id="v-pills-interiors-tab" data-toggle="pill" href="#v-pills-interiors" role="tab" aria-controls="v-pills-interiors" aria-selected="false">Interiors</a> <a class="nav-link" id="v-pills-comfort-tab" data-toggle="pill" href="#v-pills-comfort" role="tab" aria-controls="v-pills-comfort" aria-selected="false">Comfort </a> <a class="nav-link" id="v-pills-safety-tab" data-toggle="pill" href="#v-pills-safety" role="tab" aria-controls="v-pills-safety" aria-selected="false">Safety and Security</a> <a class="nav-link" id="v-pills-utility-tab" data-toggle="pill" href="#v-pills-utility" role="tab" aria-controls="v-pills-utility" aria-selected="false">Audio and Entertainment</a> <a class="nav-link" id="v-pills-colorvar-tab" data-toggle="pill" href="#v-pills-colorvar" role="tab" aria-controls="v-pills-colorvar" aria-selected="false">Colour Varient</a> </div>
							</div>
							<div class="col-lg-9 col-md-9 col-sm-12">
								<div class="tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade show active" id="v-pills-exterior" role="tabpanel" aria-labelledby="v-pills-exterior-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Roof End Spoiler</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Electric Outside Mirrors (Manually Fold)</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Floating Roof Design</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Chrome Front Grille</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Chrome Garnish Backdoor</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Coloured Bumper (Body Color)</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Split Rear Combination Lamp</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>LED High Mounted Stop Lamp</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>LED Tail Lamps</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Body Coloured Door Handles </strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Body Coloured ORVM (Body)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Side Turn Indicators on ORVMs</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Wheel Arch Extension </strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Projector Headlamps(Halogen)</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Steel Wheels</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Skid Plate Garnish (Black)</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Spare Tyre (Standard Tyre) (Steel)^</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Side Under Protection Garnish </strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Side Door Molding</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>LED Light Guide in HeadLamp</strong></h4> </div>
											</div>
											<p style="font-size:10px">^Spare tyre wheel material is steel &amp; spare tyre is 215/60 R16 for ZXi/ZXi+ variant.</p>
										</div>
									</div>
									<div class="tab-pane fade" id="v-pills-interiors" role="tabpanel" aria-labelledby="v-pills-interiors-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Side AC Louver (Black)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Chrome Finish on AC Louver Knobs</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Room Lamp (Roof Center)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Multi-Information Display with Tripmeter and Fuel Level Indicator</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Tachometer</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Inside Door Grab Handle (4 Doors)</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Speedometer</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Water Temparature Indicator (Cool/Hot)</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Meter Illumination Color</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Audible Headlight on Reminder </strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Low Fuel Warning Light</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Key Off Reminder</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Door Ajar Warning Lamp </strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Center Console with Cupholder</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Center Lower Box</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Day/Night Rear View Mirror (Manual)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Drivers Ticket Holder</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Passenger Sun Visor</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Upper Hook in Luggage Room</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Inside Door Ornament (Black)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Center Louver/Audio Ring (Silver)</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>7 Step Illumination Control</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Center Louver Knob (Chrome)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>IP Ornament (Silver)</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Shift Lever (Black)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Interior Color (Black)</strong></h4> </div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="v-pills-comfort" role="tabpanel" aria-labelledby="v-pills-comfort-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Windscreen Wipers (Manual)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Keyless Entry System</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Driver Side FR Windows (Auto Up/Down)</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Front &amp; Rear Power Windows</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Electrically Adjustable ORVM</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Tilt Steering</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Rear Seat Flip &amp; Fold</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Driver Side Footrest</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Dust and Pollen Filter</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>All Door Trims with 1000 ml Bottle Holders</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Front  Accessory Socket</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Gear Shift Indicator</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Manual AC</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Electronic Power Steering</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Tailgate Open System (Electromagnetic)</strong></h4> </div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="v-pills-safety" role="tabpanel" aria-labelledby="v-pills-safety-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Anti-Theft Security System</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Suzuki TECT Body</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>ABS with EBD</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Dual Airbag (Dr. &amp; Co-Dr.)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Front Seat Belt Pre-Tensioners &amp; Force Limiter</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Seat Belt Reminder Lamp &amp; Buzzer (Dr. &amp; Co-Dr.)</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Dual Horn</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Engine Immobilizer</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Reverse Parking Sensor with Infographic Display</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>ISOFIX Child Seat Restraint System</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>High Speed Warning Alert<sup>#</sup></strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Security Alarm</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Central Locking</strong></h4>
													<p>5 Door</p>
												</div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Child-Proof Rear Door Locks</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Pedal Release System</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Side Impact Protection Beam</strong></h4> </div>
											</div>
											<p style="font-size:10px">#If the vehicle’s speed exceeds 80 km/h, then the primary level warning will beep twice every minute. And, if the speed goes above 120 km/h, the secondary level warning will keep beeping. If the vehicle’s speed slows down to 118 km/h, primary warning will resume. If the vehicle is slowed down to 78 km/h, speed alert warning will stop. This buzzer does not indicate any malfunction in the vehicle.</p>
										</div>
									</div>
									<div class="tab-pane fade" id="v-pills-utility" role="tabpanel" aria-labelledby="v-pills-utility-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Audio with CD Player</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>USB, Aux-in &amp; Bluetooth Connectivity</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Side Door Speaker (4)</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Antenna </strong></h4> </div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="v-pills-colorvar" role="tabpanel" aria-labelledby="v-pills-colorvar-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Granite Grey</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Torque Blue</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Pearl Arctic White</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Premium Silver</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Autumn Orange</strong></h4> </div>
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
					<div class="carousel-item active"> <img class="first-slide" src="assets/images/vitara-brezza/slide1.jpg" alt="Automatic Transmission">
						<div class="caption">
							<h2>Technology to <span>be wicked</span></h2>
							<p>Zipping through the rush hour or those impromptu late-night long drives. The automatic transmission ensures an effortless drive, whichever field you are playing on.</p>
							<ul>
								<li><strong>Automatic Transmission</strong></li>
								<li>Progressive Smart Hybrid Technology</li>
								<li>New-Age SmartPlay Studio</li>
								<li>Dual Airbags</li>
								<li>Suzuki TECT (Total Effective Control Technology)</li>
								<li>Anti-lock Braking System (ABS) with Electronic Brakeforce Distribution (EBD)</li>
								<li>Rear Armrest with Cup Holder</li>
								<li>60:40 Split, Flip-Foldable Rear Seats</li>
								<li>Automatic Rain Sensing Wipers</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/vitara-brezza/slide2.jpg" alt="Progressive Smart Hybrid Technology">
						<div class="caption">
							<h2>Technology to <span>be wicked</span></h2>
							<p>Zipping through the rush hour or those impromptu late-night long drives. The automatic transmission ensures an effortless drive, whichever field you are playing on.</p>
							<ul>
								<li>Automatic Transmission</li>
								<li><strong>Progressive Smart Hybrid Technology</strong></li>
								<li>New-Age SmartPlay Studio</li>
								<li>Dual Airbags</li>
								<li>Suzuki TECT (Total Effective Control Technology)</li>
								<li>Anti-lock Braking System (ABS) with Electronic Brakeforce Distribution (EBD)</li>
								<li>Rear Armrest with Cup Holder</li>
								<li>60:40 Split, Flip-Foldable Rear Seats</li>
								<li>Automatic Rain Sensing Wipers</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/vitara-brezza/slide3.jpg" alt="New-Age SmartPlay Studio">
						<div class="caption">
							<h2>Technology to <span>be wicked</span></h2>
							<p>Zipping through the rush hour or those impromptu late-night long drives. The automatic transmission ensures an effortless drive, whichever field you are playing on.</p>
							<ul>
								<li>Automatic Transmission</li>
								<li>Progressive Smart Hybrid Technology</li>
								<li><strong>New-Age SmartPlay Studio</strong></li>
								<li>Dual Airbags</li>
								<li>Suzuki TECT (Total Effective Control Technology)</li>
								<li>Anti-lock Braking System (ABS) with Electronic Brakeforce Distribution (EBD)</li>
								<li>Rear Armrest with Cup Holder</li>
								<li>60:40 Split, Flip-Foldable Rear Seats</li>
								<li>Automatic Rain Sensing Wipers</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/vitara-brezza/slide4.jpg" alt="Dual Airbags">
						<div class="caption">
							<h2>Technology to <span>be wicked</span></h2>
							<p>Zipping through the rush hour or those impromptu late-night long drives. The automatic transmission ensures an effortless drive, whichever field you are playing on.</p>
							<ul>
								<li>Automatic Transmission</li>
								<li>Progressive Smart Hybrid Technology</li>
								<li>New-Age SmartPlay Studio</li>
								<li><strong>Dual Airbags</strong></li>
								<li>Suzuki TECT (Total Effective Control Technology)</li>
								<li>Anti-lock Braking System (ABS) with Electronic Brakeforce Distribution (EBD)</li>
								<li>Rear Armrest with Cup Holder</li>
								<li>60:40 Split, Flip-Foldable Rear Seats</li>
								<li>Automatic Rain Sensing Wipers</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/vitara-brezza/slide5.jpg" alt="Suzuki TECT (Total Effective Control Technology)">
						<div class="caption">
							<h2>Technology to <span>be wicked</span></h2>
							<p>Zipping through the rush hour or those impromptu late-night long drives. The automatic transmission ensures an effortless drive, whichever field you are playing on.</p>
							<ul>
								<li>Automatic Transmission</li>
								<li>Progressive Smart Hybrid Technology</li>
								<li>New-Age SmartPlay Studio</li>
								<li>Dual Airbags</li>
								<li><strong>Suzuki TECT (Total Effective Control Technology)</strong></li>
								<li>Anti-lock Braking System (ABS) with Electronic Brakeforce Distribution (EBD)</li>
								<li>Rear Armrest with Cup Holder</li>
								<li>60:40 Split, Flip-Foldable Rear Seats</li>
								<li>Automatic Rain Sensing Wipers</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/vitara-brezza/slide6.jpg" alt="Anti-lock Braking System (ABS) with Electronic Brakeforce Distribution (EBD)">
						<div class="caption">
							<h2>Technology to <span>be wicked</span></h2>
							<p>Zipping through the rush hour or those impromptu late-night long drives. The automatic transmission ensures an effortless drive, whichever field you are playing on.</p>
							<ul>
								<li>Automatic Transmission</li>
								<li>Progressive Smart Hybrid Technology</li>
								<li>New-Age SmartPlay Studio</li>
								<li>Dual Airbags</li>
								<li>Suzuki TECT (Total Effective Control Technology)</li>
								<li><strong>Anti-lock Braking System (ABS) with Electronic Brakeforce Distribution (EBD)</strong></li>
								<li>Rear Armrest with Cup Holder</li>
								<li>60:40 Split, Flip-Foldable Rear Seats</li>
								<li>Automatic Rain Sensing Wipers</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/vitara-brezza/slide7.jpg" alt="Rear Armrest with Cup Holder">
						<div class="caption">
							<h2>Technology to <span>be wicked</span></h2>
							<p>Zipping through the rush hour or those impromptu late-night long drives. The automatic transmission ensures an effortless drive, whichever field you are playing on.</p>
							<ul>
								<li>Automatic Transmission</li>
								<li>Progressive Smart Hybrid Technology</li>
								<li>New-Age SmartPlay Studio</li>
								<li>Dual Airbags</li>
								<li>Suzuki TECT (Total Effective Control Technology)</li>
								<li>Anti-lock Braking System (ABS) with Electronic Brakeforce Distribution (EBD)</li>
								<li><strong>Rear Armrest with Cup Holder</strong></li>
								<li>60:40 Split, Flip-Foldable Rear Seats</li>
								<li>Automatic Rain Sensing Wipers</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/vitara-brezza/slide8.jpg" alt="60:40 Split, Flip-Foldable Rear Seats">
						<div class="caption">
							<h2>Technology to <span>be wicked</span></h2>
							<p>Zipping through the rush hour or those impromptu late-night long drives. The automatic transmission ensures an effortless drive, whichever field you are playing on.</p>
							<ul>
								<li>Automatic Transmission</li>
								<li>Progressive Smart Hybrid Technology</li>
								<li>New-Age SmartPlay Studio</li>
								<li>Dual Airbags</li>
								<li>Suzuki TECT (Total Effective Control Technology)</li>
								<li>Anti-lock Braking System (ABS) with Electronic Brakeforce Distribution (EBD)</li>
								<li>Rear Armrest with Cup Holder</li>
								<li><strong>60:40 Split, Flip-Foldable Rear Seats</strong></li>
								<li>Automatic Rain Sensing Wipers</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/vitara-brezza/slide9.jpg" alt="Automatic Rain Sensing Wipers">
						<div class="caption">
							<h2>Technology to <span>be wicked</span></h2>
							<p>Zipping through the rush hour or those impromptu late-night long drives. The automatic transmission ensures an effortless drive, whichever field you are playing on.</p>
							<ul>
								<li>Automatic Transmission</li>
								<li>Progressive Smart Hybrid Technology</li>
								<li>New-Age SmartPlay Studio</li>
								<li>Dual Airbags</li>
								<li>Suzuki TECT (Total Effective Control Technology)</li>
								<li>Anti-lock Braking System (ABS) with Electronic Brakeforce Distribution (EBD)</li>
								<li>Rear Armrest with Cup Holder</li>
								<li>60:40 Split, Flip-Foldable Rear Seats</li>
								<li><strong>Automatic Rain Sensing Wipers</strong></li>
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
								<input type="hidden" class="form-control" id="model" name="model" value="Vitara Brezza"> </div>
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
								<input type="hidden" class="form-control" id="model" name="model" value="Vitara Brezza"> </div>
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
		<?php  require_once('footer.php');?>