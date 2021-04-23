<?php   
@session_start();
error_reporting(E_ALL);  
ini_set('display_errors', '1');

$title="Alto 800 | Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur | SEVA";	

$pgDesc="Checkout India's Best Hatchback Car Maruti Suzuki Alto 800 price at SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur. Alto LXI, Alto VXI available";

$pgKeywords="small hatchbacks, maruti suzuki, maruti suzuki car, alto 800, alto k10, maruti, maruti showrooms near me, maruti cars, Maruti Suzuki Showroom Nagpur, Maruti Suzuki Nagpur, Maruti Suzuki Showroom Nashik, Maruti Suzuki ARENA Nagpur, ARENA Nashik, alto, alto price in nashik, alto price in nagpur, Maruti Suzuki Alto, Alto 800 LXI, Alto 800 VXI, Alto 800 STD, alto new model, alto petrol, alto cng, small car, hatchback cars, small car, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Suzuki Finance";

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
						<source srcset="assets/images/alto/ALTO-800.jpg" alt="Alto Banner" media="(min-width: 992px)">
						<source srcset="assets/images/alto/alto800-banner-ipad.png" alt="Alto Banner" media="(min-width: 768px)">
						<source srcset="assets/images/alto/alto800-banner-mobile.png" alt="Alto Banner" media="(min-width: 320px)"> <img srcset="assets/images/alto/ALTO-800.jpg" alt="Alto Banner"> </picture>
					<div class="mediacontent col-lg-5 white right vcenter"> <img src="assets/images/alto/liberate-your-drive.png" alt="Liberate Your Drive">
						<div class="desktopcontent hidden-xs hidden-sm mt-2">
							<p>It’s not easy to be the country’s most driven car. So keeping years of trust and faith in mind, we have upgraded the new Alto. Experience the captivating design of the new Alto, which will give you a sense of pride every time you go for a drive.</p>
						</div>
						<div class="mobilecontent hidden-md hidden-lg">
							<p> It’s not easy to be the country’s most driven car. So keeping years of trust and faith in mind</p>
						</div>
					</div>
				</div>
			</div>
			<div class="price-section mobileViewPrice">
				<h3>Ex-Showroom Prices</h3>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td colspan="3" align="center">ALTO 800</td>
					</tr>                
					<tr>
						<td>Varient</td>
						<td>Color</td>
						<td>Price</td>
					</tr>
						<?php
						$sql = "SELECT varient,on_road_price FROM product WHERE car = 1 GROUP BY varient";
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
					<li><a href="assets/images/alto/Alto_Brand_Brochure.pdf" target="_blank">Product Brochure</a></li>
					<li><a href="maruti-finance.php">Finance</a></li>
				</ul>
			</div>
			<div class="product-carousel">
				<div class="item">
					<picture class="productcarouselbg">
						<source srcset="assets/images/alto/Alto800-Backgroundl-lg.jpg" alt="Alto 800 Side Mirror" media="(min-width: 992px)">
						<source srcset="assets/images/alto/Alto800-Background-tablet.jpg" alt="" media="(min-width: 768px)">
						<source srcset="assets/images/alto/Alto800-Background-sm.jpg" alt="" media="(min-width: 320px)"> <img srcset="assets/images/alto/Alto800-Backgroundl-lg.jpg" alt="Alto 800 Side Mirror" class="img-responsive productbg"> </picture>
					<div class="productItems flex-container">
						<div class="container-fluid rel">
							<div class="car-color-variant">
								<a onclick="color_function(1,6)" href="javascript:void(0);"><img src="assets/images/cc-blazingred.jpg"></a>
								<a onclick="color_function(2,6)" href="javascript:void(0);"><img src="assets/images/cc-ceruleanblue.jpg"></a>
								<a onclick="color_function(3,6)" href="javascript:void(0);"><img src="assets/images/cc-granitegrey.jpg"></a>
								<a onclick="color_function(4,6)" href="javascript:void(0);"><img src="assets/images/cc-mojitogreen.jpg"></a>
								<a onclick="color_function(5,6)" href="javascript:void(0);"><img src="assets/images/cc-silkysilver.jpg"></a>
								<a onclick="color_function(6,6)" href="javascript:void(0);"><img src="assets/images/cc-silkysilver.jpg"></a>
							</div>
							<div class="row">
								<div class="col-lg-6"> <img id="image_1" src="assets/images/alto/Alto800_Blazing_Red_new.png"> <img id="image_2" src="assets/images/alto/Alto800_Cerulean_BLue.png" style="display:none"> <img id="image_3" src="assets/images/alto/Alto800_Granite_GREY.png" style="display:none"> <img id="image_4" src="assets/images/alto/Alto800_Mojito_Green.png" style="display:none"> <img id="image_5" src="assets/images/alto/Alto800_Silky_Silver.png" style="display:none"> <img id="image_6" src="assets/images/alto/Alto800_Superior_White_New.png" style="display:none"> </div>
								<div class="col-lg-6">
									<div class="proudctFooter">
										<div class="col-md-10 col-sm-12">
											<div class="product-content">
												<h3 class="terms mileage">Mileage of the Maruti Suzuki Alto</h3>
												<p class="terms mileage">Get the freedom to go the distance with an efficient mileage of 22.05* km/l.</p>
												<p></p>
												<ul>
													<li>
														<h3>CNG</h3>
														<h4>31.59 <span>km/kg#</span></h4> </li>
													<li>
														<h3>Petrol</h3>
														<h4>22.05 <span>km/l*</span></h4> </li>
												</ul>
												<p class="last-termsP">*For Petrol Variants only. #In CNG mode CNG variants only.As certified by Test Agency under Rule 115 of CMVR.
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
						<source srcset="assets/images/alto/fourth-Alto800-Design.jpg" alt="Alto Infotainment System" media="(min-width: 992px)">
						<source srcset="assets/images/alto/fourth-360-tab.jpg" alt="Alto Infotainment System" media="(min-width: 768px)">
						<source srcset="assets/images/alto/fourth-360.jpg" alt="Alto Infotainment System" media="(min-width: 320px)">
						<!--[if IE 9]></video><![endif]--><img srcset="assets/images/alto/fourth-Alto800-Design.jpg" alt="Alto Infotainment System" class="img-responsive mainbg"> </picture>
					<section class="three60view-content col-lg-5">
						<section class="chase-description ">
							<h2>Pride of Design</h2>
							<p>The elegant new grille and sharp headlights bring a fresh appeal to the new Alto, while the newly designed bumper and side fender accentuate the looks.</p>
							<div class="price-section deskViewprice">
								<h3 style="text-align:center !important">Ex-Showroom Prices</h3>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td colspan="3" align="center">ALTO 800</td>
									</tr>                
									<tr>
										<td>Varient</td>
										<td>Color</td>
										<td>Price</td>
									</tr>
										<?php
									    $sql = "SELECT varient,on_road_price FROM product WHERE car = 1 GROUP BY varient";
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
									<a href="assets/images/alto/highlights-new-drivier-side-airbag-1000.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."><img src="assets/images/alto/highlights-new-drivier-side-airbag-1000.jpg" alt="Plants: image 1 0f 4 thumb" /></a>
								</div>
							</div>
							<div class="col-lg-7 col-sm-7 col-xs-7">
								<div class="row">
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/alto/highlights-fresh-spacious-Interiors-800_new.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."><img src="assets/images/alto/highlights-fresh-spacious-Interiors-800_new.jpg" alt="Plants: image 2 0f 4 thumb" /></a>
									</div>
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/alto/highlights-new-Remote-Keyless-Entry-450.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="assets/images/alto/highlights-new-Remote-Keyless-Entry-450.jpg" alt="Plants: image 3 0f 4 thumb" /></a>
									</div>
								</div>
								<div class="row">
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/alto/highlights-new-Alto-800-1.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"><img src="assets/images/alto/highlights-new-Alto-800-1.jpg" alt="Plants: image 4 0f 4 thumb" /></a>
									</div>
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/alto/highlights-Dual-Airbags-for-Added-Safety.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"><img src="assets/images/alto/highlights-Dual-Airbags-for-Added-Safety.jpg" alt="Plants: image 4 0f 4 thumb" /></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-engine" role="tabpanel" aria-labelledby="pills-profile-tab">
						<div class="row imageRow">
							<div class="col-lg-5 col-sm-5 col-xs-5 p-0">
								<div class="single first item-images">
									<a href="assets/images/alto/exterior-new-Sporty-Bumper-Grille-1000.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."><img src="assets/images/alto/exterior-new-Sporty-Bumper-Grille-1000.jpg" alt="Plants: image 1 0f 4 thumb" /></a>
								</div>
							</div>
							<div class="col-lg-7 col-sm-7 col-xs-7">
								<div class="row">
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/alto/exterior-right-left-ORVM.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."><img src="assets/images/alto/exterior-right-left-ORVM.jpg" alt="Plants: image 2 0f 4 thumb" /></a>
									</div>
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/alto/exterior-3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="assets/images/alto/exterior-3.jpg" alt="Plants: image 3 0f 4 thumb" /></a>
									</div>
								</div>
								<div class="row">
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/alto/exterior-new-Sporty-Bumper-Grille-1000.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"><img src="assets/images/alto/exterior-new-Sporty-Bumper-Grille-1000.jpg" alt="Plants: image 4 0f 4 thumb" /></a>
									</div>
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/alto/exterior-Trendy-headlights.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"><img src="assets/images/alto/exterior-Trendy-headlights.jpg" alt="Plants: image 4 0f 4 thumb" /></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-transmission" role="tabpanel" aria-labelledby="pills-contact-tab">
						<div class="row imageRow">
							<div class="col-lg-5 col-sm-5 col-xs-5 p-0">
								<div class="single first item-images">
									<a href="assets/images/alto/interior-new-Lively-Integrated-Stereo-1000.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."><img src="assets/images/alto/interior-new-Lively-Integrated-Stereo-1000.jpg" alt="New Speedometer Design" /></a>
								</div>
							</div>
							<div class="col-lg-7 col-sm-7 col-xs-7">
								<div class="row">
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/alto/interior-Fresh-and-Spacious-Interiors-800_new.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."><img src="assets/images/alto/interior-Fresh-and-Spacious-Interiors-800_new.jpg" alt="Stylish Dual Tone Interiors" /></a>
									</div>
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/alto/interior-new-Power-Windows-I-Alto.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="assets/images/alto/interior-new-Power-Windows-I-Alto.jpg" alt="Front and Rear Console Bottle Holder" /></a>
									</div>
								</div>
								<div class="row">
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/alto/interior-new Alto-800-1.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"><img src="assets/images/alto/interior-new Alto-800-1.jpg" alt="Smartplay Studio - 17.78  cm Touch Screen Infotainment System" /></a>
									</div>
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/alto/interior-Stylish-and-Spacious-Interiors-800.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"><img src="assets/images/alto/interior-Stylish-and-Spacious-Interiors-800.jpg" alt="Elegant new Dual Tone Dashboard" /></a>
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
					<select id="specification" name="specification" class="browser-default custom-select" onchange="function_alto()">
						<option value="LXi">LXi</option>
						<option value="VXi">VXi</option>
						<option value="VXi AMT">VXi AMT</option>
						<option value="ZXi">ZXi</option>
						<option value="ZXi AMT">ZXi AMT</option>
						<option value="ZXi+">ZXi+</option>
						<option value="ZXi+ AMT">ZXi+ AMT</option>
					</select>
					<div class="row ">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v--pills-dimensions-tab" data-toggle="pill" href="#v-pills-dimensions" role="tab" aria-controls="v-pills-dimensions" aria-selected="true">Dimensions</a> <a class="nav-link" id="v--pills-engine-tab" data-toggle="pill" href="#v-pills-engine" role="tab" aria-controls="v-pills-engine" aria-selected="false">Engine</a> <a class="nav-link" id="v--pills-brakes-tab" data-toggle="pill" href="#v-pills-brakes" role="tab" aria-controls="v-pills-brakes" aria-selected="false">Brakes</a> <a class="nav-link" id="v--pills-suspension-tab" data-toggle="pill" href="#v-pills-suspension" role="tab" aria-controls="v-pills-suspension" aria-selected="false">Suspension  System</a> <a class="nav-link" id="v--pills-weight-tab" data-toggle="pill" href="#v-pills-weight" role="tab" aria-controls="v-pills-weight" aria-selected="false">Weight</a> <a class="nav-link" id="v--pills-capacity-tab" data-toggle="pill" href="#v-pills-capacity" role="tab" aria-controls="v-pills-capacity" aria-selected="false">CAPACITY</a> <a class="nav-link" id="v--pills-tyres-tab" data-toggle="pill" href="#v-pills-tyres" role="tab" aria-controls="v-pills-tyres" aria-selected="false">Tyres</a> </div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="tab-content" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-pills-dimensions" role="tabpanel" aria-labelledby="v-pills-dimensions-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4>Overall Length</h4>
												<p> 3445 mm</p>
											</div>
											<div class="display-cell">
												<h4>Overall Width</h4>
												<p> 1490 mm
													<br> (Without side molding)</p>
											</div>
											<div class="display-cell">
												<h4>Overall Width </h4>
												<p> 1515 mm
													<br> (With side molding)</p>
											</div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4>Overall Height</h4>
												<p> 1475 mm (Unladen) </p>
											</div>
											<div class="display-cell">
												<h4>Tread </h4>
												<p> 1295 mm
													<br> (Front)</p>
											</div>
											<div class="display-cell">
												<h4>Tread </h4>
												<p> 1290 mm
													<br> (Rear)</p>
											</div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4>Turning Radius</h4>
												<p> 4.6 m</p>
											</div>
											<div class="display-cell">
												<h4>Wheelbase</h4>
												<p> 2360 mm</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-engine" role="tabpanel" aria-labelledby="v-pills-engine-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4>No. of Cylinders</h4>
												<p>3</p>
											</div>
											<div class="display-cell">
												<h4>No. of Valves</h4>
												<p>12</p>
											</div>
											<div class="display-cell">
												<h4>Swept Volume</h4>
												<p>796 cc</p>
											</div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4>Engine Type</h4>
												<p>F8D</p>
											</div>
											<div class="display-cell">
												<h4>Maximum Power</h4>
												<p>35.3 kW @ 6000 rpm</p>
											</div>
											<div class="display-cell">
												<h4>Transmission</h4>
												<p>5 Speed MT</p>
											</div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4>Maximum Torque</h4>
												<p>69 Nm @ 3500 rpm</p>
											</div>
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
												<h4><strong>Front</strong></h4>
												<p>MacPherson Strut</p>
											</div>
											<div class="display-cell">
												<h4><strong>Rear</strong></h4>
												<p>3 Link Rigid Axle Suspension</p>
											</div>
											<div class="display-table">
												<h4><strong></strong></h4> </div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-weight" role="tabpanel" aria-labelledby="v-pills-weight-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4>Gross Vehicle Weight</h4>
												<p>1185 kg</p>
											</div>
											<div class="display-cell">
												<h4>Kerb Weight</h4>
												<p>730 kg</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-capacity" role="tabpanel" aria-labelledby="v-pills-capacity-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4><strong>Seating</strong></h4>
												<p>5 Persons</p>
											</div>
											<div class="display-cell">
												<h4><strong>Fuel Tank</strong></h4>
												<p>35 L</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-tyres" role="tabpanel" aria-labelledby="v-pills-tyres-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4>Tyre Size</h4>
												<p> 145/80 R12 (Tubeless) </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="img-car"> <img src="assets/images/alto/specification-Altto-800-vv1.png" alt="carFooter"> </div>
				</div>
			</div>
			<div class="performance">
				<div class="performnace-bg">
					<picture>
						<source srcset="assets/images/alto/Alto800-Performance.jpg	" alt="" media="(min-width: 992px)">
						<source srcset="assets/images/alto/Alto800-Performance-tab.jpg" alt="" media="(min-width: 768px)">
						<source srcset="assets/images/alto/Alto800-Performance-mobile.jpg" alt="" media="(min-width: 320px)"> <img srcset="assets/images/alto/Alto800-Performance-mobile.jpg" alt="" class="img-responsive bg-image"></picture>
					<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12 prod-image"> <img src="assets/images/alto/800 P-engine.png" class="img-responsive" alt="Alto Engine"> </div>
					<div class="performance-content col-xs-12 col-sm-6 col-md-9 col-lg-6">
						<h2>Features</h2>
						<select id="features" name="features" class="browser-default custom-select" onchange="function_alto_features()">
							<option value="LXi">LXi</option>
							<option value="VXi">VXi</option>
							<option value="VXi AMT">VXi AMT</option>
							<option value="ZXi">ZXi</option>
							<option value="ZXi AMT">ZXi AMT</option>
							<option value="ZXi+">ZXi+</option>
							<option value="ZXi+ AMT">ZXi+ AMT</option>
						</select>
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-12">
								<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills--exterior-tab" data-toggle="pill" href="#v-pills-exterior" role="tab" aria-controls="v-pills-exterior" aria-selected="true">Exterior</a> <a class="nav-link" id="v-pills--interiors-tab" data-toggle="pill" href="#v-pills-interiors" role="tab" aria-controls="v-pills-interiors" aria-selected="false">Interiors</a> <a class="nav-link" id="v-pills--comfort-tab" data-toggle="pill" href="#v-pills-comfort" role="tab" aria-controls="v-pills-comfort" aria-selected="false">Comfort </a> <a class="nav-link" id="v-pills--safety-tab" data-toggle="pill" href="#v-pills-safety" role="tab" aria-controls="v-pills-safety" aria-selected="false">Safety and Security</a> <a class="nav-link" id="v-pills--utility-tab" data-toggle="pill" href="#v-pills-utility" role="tab" aria-controls="v-pills-utility" aria-selected="false">Utility</a> </div>
							</div>
							<div class="col-lg-9 col-md-9 col-sm-12">
								<div class="tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade show active" id="v-pills-exterior" role="tabpanel" aria-labelledby="v-pills-exterior-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4>Wheel Covers</h4>
													<p>Center Cap</p>
												</div>
												<div class="display-cell">
													<h4>Body Coloured Outside Door Handles</h4> </div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="v-pills-interiors" role="tabpanel" aria-labelledby="v-pills-interiors-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Seat Upholstery<br>
                      (Vinyl)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>C Pillar Lower Trim (Molded)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Dual-tone Interiors</strong></h4> </div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="v-pills-comfort" role="tabpanel" aria-labelledby="v-pills-comfort-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Sun Visor<br>
                      (Dr.)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Assist Grips (Co - Dr. + Rear)</strong></h4> </div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="v-pills-safety" role="tabpanel" aria-labelledby="v-pills-safety-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong> Immobiliser </strong></h4> </div>
												<div class="display-cell">
													<h4><strong> Tubeless Tyres </strong></h4> </div>
												<div class="display-cell">
													<h4><strong> Headlight Levelling </strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong> High-Mounted Stop Lamp </strong></h4> </div>
												<div class="display-cell">
													<h4><strong> Front Wiper &amp; Washer <br>
                      ( 2 Speed )</strong></h4> </div>
												<div class="display-cell">
													<h4><strong> Collapsible Steering Column </strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong> Driver Side Airbag </strong></h4> </div>
												<div class="display-cell">
													<h4><strong> Seat Belt Reminder <br>
                      (Dr.+ Co - Dr.)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong> Speed Alert System</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong> Reverse Parking Sensor</strong></h4> </div>
												<div class="display-cell">
													<h4><strong> ABS with EBD</strong></h4> </div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="v-pills-utility" role="tabpanel" aria-labelledby="v-pills-utility-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Front Console Bottle Holder</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Rear Console Bottle Holder</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Front Door Trim Map Pocket (Dr.)</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Front Door Trim Map Pocket (Passenger)</strong></h4> </div>
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
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active"> <img class="first-slide" src="assets/images/alto/footer-Airbag1.jpg" alt="First slide">
						<div class="caption">
							<h2>Pride Of <span>Safety</span></h2>
							<p> Experience peace of mind and enhanced safety with Dual Airbags in the new Alto.</p>
							<ul>
								<li data-slide="1"><strong style="font-size: 16px;">Dual Airbags for Added Safety</strong></li>
								<li data-slide="2">ABS with EBD for Enhanced Safety</li>
								<li data-slide="3">Smart Reverse Parking Sensors</li>
								<li data-slide="4">Driver + Co-Driver Seat Belt Reminder</li>
								<li data-slide="5">Rear Door Child Lock</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/alto/footer-Child-Lock2_Alto.jpg" alt="Second slide">
						<div class="caption">
							<h2>Pride Of <span>Safety</span></h2>
							<p> Unlock optimum safety for your loved ones with Rear Door Child-Lock in the new Alto.</p>
							<ul>
								<li data-slide="1">Dual Airbags for Added Safety</li>
								<li data-slide="2">ABS with EBD for Enhanced Safety</li>
								<li data-slide="3">Smart Reverse Parking Sensors</li>
								<li data-slide="4">Driver + Co-Driver Seat Belt Reminder</li>
								<li data-slide="5"><strong style="font-size: 16px;">Rear Door Child Lock</strong></li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/alto/footer-EBS.png" alt="Second slide">
						<div class="caption">
							<h2>Pride Of <span>Safety</span></h2>
							<p> Unlock optimum safety for your loved ones with Rear Door Child-Lock in the new Alto.</p>
							<ul>
								<li data-slide="1">Dual Airbags for Added Safety</li>
								<li data-slide="2"><strong style="font-size: 16px;">ABS with EBD for Enhanced Safety</strong></li>
								<li data-slide="3">Smart Reverse Parking Sensors</li>
								<li data-slide="4">Driver + Co-Driver Seat Belt Reminder</li>
								<li data-slide="5">Rear Door Child Lock</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/alto/footer-Keyless-Entry.jpg" alt="Second slide">
						<div class="caption">
							<h2>Pride Of <span>Safety</span></h2>
							<p> Unlock optimum safety for your loved ones with Rear Door Child-Lock in the new Alto.</p>
							<ul>
								<li data-slide="1">Dual Airbags for Added Safety</li>
								<li data-slide="2">ABS with EBD for Enhanced Safety</li>
								<li data-slide="3"><strong style="font-size: 16px;">Smart Reverse Parking Sensors</strong></li>
								<li data-slide="4">Driver + Co-Driver Seat Belt Reminder</li>
								<li data-slide="5">Rear Door Child Lock</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/alto/footer-Left-and-Right-Hand-ORVM.jpg" alt="Second slide">
						<div class="caption">
							<h2>Pride Of <span>Safety</span></h2>
							<p> Unlock optimum safety for your loved ones with Rear Door Child-Lock in the new Alto.</p>
							<ul>
								<li data-slide="1">Dual Airbags for Added Safety</li>
								<li data-slide="2">ABS with EBD for Enhanced Safety</li>
								<li data-slide="3">Smart Reverse Parking Sensors</li>
								<li data-slide="4"><strong style="font-size: 16px;">Driver + Co-Driver Seat Belt Reminder</strong></li>
								<li data-slide="5">Rear Door Child Lock</strong>
								</li>
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
								<input type="text" class="form-control" id="first-name" name="full_name" required="true" data-parsley-required-message="Please Enter Name" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only">
								<input type="hidden" class="form-control" id="model" name="model" value="alto"> </div>
							<div class="form-group">
								<label for="Email" class="col-form-label">Email<span class="parsley-required">*</span></label>
								<input type="email" class="form-control" id="Email" name="email" required="true" data-parsley-type="email" data-parsley-required-message="Please Enter Email Id"> </div>
							<div class="form-group">
								<label for="Phone" class="col-form-label">Phone<span class="parsley-required">*</span></label>
								<input type="tel" class="form-control" id="phone" name="phone_no" required="true" data-parsley-type="digits" maxlength="10" data-parsley-required-message="Please Enter Contact No" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit"> </div>
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
								<input type="text" class="form-control" id="first-name" name="full_name" required="true" data-parsley-required-message="Please Enter Name" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only">
								<input type="hidden" class="form-control" id="model" name="model" value="alto"> </div>
							<div class="form-group">
								<label for="Email" class="col-form-label">Email<span class="parsley-required">*</span></label>
								<input type="email" class="form-control" id="Email" name="email" required="" data-parsley-type="email" data-parsley-required-message="Please Enter Email Id"> </div>
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