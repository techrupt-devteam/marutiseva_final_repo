<?php    
$title="Eeco | Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur | SEVA";	


$pgDesc="Check New Maruti Suzuki Eeco Price at SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur. Maruti Eeco Car Price, 7 seater with AC, 5 seater and More";
$pgKeywords="Maruti Suzuki, Maruti Suzuki Car Showroom, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Showrooms near me, Maruti Suzuki Finance, Van, maruti suzuki eeco, eeco, maruti eeco, eeco car, eeco car price, eeco price, maruti eeco price, maruti suzuki eeco price, eko maruti suzuki, eeco van, maruti eeco 7 seater ac on road price, suzuki eeco, maruti suzuki eeco 7 seater with ac, eeco 7 seater, eeco on road price, maruti eeco on road price, maruti eeco 7 seater, maruti eeco 10 seater, maruti eeco 8 seater, maruti eeco carmaruti suzuki eeco car";

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
					<source srcset="assets/images/eeco/top-desk.jpg" alt="Vitara Brezza Banner" media="(min-width: 992px)">
					<source srcset="assets/images/eeco/top-ipad.jpg" alt="Vitara Brezza Banner" media="(min-width: 768px)">
					<source srcset="assets/images/eeco/top-mobile.jpg" alt="Vitara Brezza Banner" media="(min-width: 320px)"> <img srcset="assets/images/eeco/top-desk.jpg" alt="Vitara Brezza Banner"> </picture>
				<div class="mediacontent col-lg-5 white right vcenter"> <img srcset="assets/images/eeco/top-text.png" alt="Vitara Brezza Banner">
					<div class="desktopcontent hidden-xs hidden-sm mt-2">
						<p>As a family person, no other journey gives you as much pleasure as the journeys you make with your loved ones. And you enjoy these journeys the most when you are comfortable. So, to ensure your family is always with you, the Maruti Suzuki EECO comes with large cabin space and a seven-seating option. Now make every moment a happy memory, and ensure total convenience and safety for every member of your family.</p>
					</div>
					<div class="mobilecontent hidden-md hidden-lg">
						<p>As a family person, no other journey gives you as much pleasure as the journeys</p>
					</div>
				</div>
			</div>
		</div>
		<div class="price-section mobileViewPrice">
			<h3> NEW EECO & NEW EECO TOUR Prices</h3>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td colspan="3" align="center" style="background:#000 !important"> EECO BS-6</td>
				</tr>
				<tr>
					<td>Varient</td>
					<td></td>
					<td>Price</td>
				</tr>
				<?php
				$sql = "SELECT varient,on_road_price FROM product WHERE car = 9 GROUP BY varient";
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
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td colspan="3" align="center" style="background: #000 !important"> TOUR V BS-6</td>
				</tr>
				<tr>
					<td>Varient</td>
					<td></td>
					<td>Price</td>
				</tr>
				<?php
				$sql_tour = "SELECT varient,on_road_price FROM product WHERE car = 'EECO TOUR V BS-6' GROUP BY varient";
				$result_tour = mysqli_query($conn, $sql_tour);
				while($row_tour = $result_tour->fetch_assoc()) {
				?>
				<tr>
					<td><?php echo $row_tour['varient'];?></td>
					<td>M</td>
					<td><i class="flaticon-rupee-indian"></i> <?php echo $row_tour['on_road_price'];?></td>
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
				<li><a href="assets/images/eeco/Eeco_Brand_brochure.pdf" target="_blank">Product Brochure</a></li>
				<li><a href="maruti-finance.php">Finance</a></li>
			</ul>
		</div>
		<div class="product-carousel">
			<div class="item">
				<picture class="productcarouselbg">
					<source srcset="assets/images/eeco/2-desk.jpg" alt="Maruti Suzuki Vitara Brezza" media="(min-width: 992px)">
					<source srcset="assets/images/eeco/2-ipad.jpg" alt="Maruti Suzuki Vitara Brezza" media="(min-width: 768px)">
					<source srcset="assets/images/eeco/2-mobile.jpg" alt="Maruti Suzuki Vitara Brezza" media="(min-width: 320px)"> <img srcset="assets/images/eeco/2-desk.jpg" alt="Maruti Suzuki Vitara Brezza" class="img-responsive productbg"> </picture>
				<div class="productItems Aligner">
					<div class="container-fluid rel">
						<div class="car-color-variant">
							<a onclick="color_function(1,5)" href="javascript:void(0);"><img src="assets/images/cc-ceruleanblue.jpg"></a>
							<a onclick="color_function(2,5)" href="javascript:void(0);"><img src="assets/images/cc-black.jpg"></a>
							<a onclick="color_function(3,5)" href="javascript:void(0);"><img src="assets/images/cc-granitegrey.jpg"></a>
							<a onclick="color_function(4,5)" href="javascript:void(0);"><img src="assets/images/cc-silkysilver.jpg"></a>
							<a onclick="color_function(5,5)" href="javascript:void(0);"><img src="assets/images/cc-superiorwhite.jpg"></a>
						</div>
						<div class="row">
							<div class="col-lg-6"> <img id="image_1" src="assets/images/eeco/2-car.png" alt="Maruti Suzuki Vitara Brezza"> <img id="image_2" src="assets/images/eeco/eeco-midnight-black.png" style="display:none"> <img id="image_3" src="assets/images/eeco/eeco-silky-silver.png" style="display:none"> <img id="image_4" src="assets/images/eeco/eeco-mettalic-grey.png" style="display:none"> <img id="image_5" src="assets/images/eeco/ecco-superior-white.png" style="display:none"> </div>
							<div class="col-lg-6">
								<div class="proudctFooter">
									<div class="col-lg-10">
										<div class="product-content">
											<h3 class="terms mileage">Mileage of the Maruti EECO</h3>
											<p></p>
											<ul>
												<li>
													<h3>Petrol</h3>
													<h4>16.11 <span>km/l*</span></h4> </li>
												<li>
													<h3>CNG</h3>
													<h4>20.88 <span>km/kg*</span></h4> </li>
											</ul>
											<p class="last-termsP">
												<p class="terms">*As certified by Test Agency Under Rule 115 (G) of CMVR 1989 | Appearance of black shade on glass is due to lighting effect
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
					<source srcset="assets/images/eeco/3-desk.jpg" alt="Vitara Brezza Design" media="(min-width: 992px)">
					<source srcset="assets/images/eeco/3-ipad.jpg" alt="Vitara Brezza Design" media="(min-width: 768px)">
					<source srcset="assets/images/eeco/3-mobile.jpg" alt="Vitara Brezza Design" media="(min-width: 320px)">
					<!--[if IE 9]></video><![endif]--><img srcset="assets/images/eeco/3-desk.jpg" alt="Vitara Brezza Design" class="img-responsive mainbg"> </picture>
				<section class="three60view-content col-lg-5">
					<section class="chase-description">
						<h2>Expansive Design</h2>
						<p>The Maruti Suzuki EECO brings both comfort and style to your driving experience. Its contemporary design, ample space, and new body graphics add joy to every journey that you take with your family.</p>
						<div class="price-section deskViewprice">
							<h3> NEW EECO & NEW EECO TOUR Prices</h3>
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td colspan="3" align="center" style="background:#000 !important"> EECO BS-6</td>
								</tr>
								<tr>
									<td>Model Description</td>
									<td></td>
									<td>Price</td>
								</tr>
								<?php
								$sql = "SELECT varient,on_road_price FROM product WHERE car = 9 GROUP BY varient";
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
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td colspan="3" align="center" style="background: #000 !important"> TOUR V BS-6</td>
								</tr>
								<tr>
									<td>Model Description</td>
									<td></td>
									<td>Price</td>
								</tr>
								<?php
								$sql_tour = "SELECT varient,on_road_price FROM product WHERE car = 11 GROUP BY varient";
								$result_tour = mysqli_query($conn, $sql_tour);
								while($row_tour = $result_tour->fetch_assoc()) {
								?>
								<tr>
									<td><?php echo $row_tour['varient'];?></td>
									<td>M</td>
									<td><i class="flaticon-rupee-indian"></i> <?php echo $row_tour['on_road_price'];?></td>
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
								<a href="assets/images/eeco/highlight1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/eeco/highlight1.jpg" alt="Vitara Brezza - Cruise Control" /> </a>
							</div>
						</div>
						<div class="col-lg-7 col-sm-7 col-xs-7">
							<div class="row">
								<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
									<a href="assets/images/eeco/highlight2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/eeco/highlight2.jpg" alt="Vitara Brezza - Front Profile" /> </a>
								</div>
								<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
									<a href="assets/images/eeco/highlight3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/eeco/highlight3.jpg" alt="Vitara Brezza LED Tail Lights" /> </a>
								</div>
							</div>
							<div class="row">
								<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
									<a href="assets/images/eeco/highlight4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/eeco/highlight4.jpg" alt="Vitara Brezza Precision Cut Alloy Wheels" /> </a>
								</div>
								<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
									<a href="assets/images/eeco/highlight5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/eeco/highlight5.jpg" alt="Vitara Brezza LED Projector Headlamps" /> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-engine" role="tabpanel" aria-labelledby="pills-profile-tab">
					<div class="row imageRow">
						<div class="col-lg-5 col-sm-5 col-xs-5 p-0">
							<div class="single first item-images">
								<a href="assets/images/eeco/exterior1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/eeco/exterior1.jpg" alt="Vitara Brezza Sporty Bold Design" /> </a>
							</div>
						</div>
						<div class="col-lg-7 col-sm-7 col-xs-7">
							<div class="row">
								<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
									<a href="assets/images/eeco/exterior2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/eeco/exterior2.jpg" alt="Vitara Brezza Auto Folding ORVMs" /></a>
								</div>
								<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
									<a href="assets/images/eeco/exterior3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/eeco/exterior3.jpg" alt="Vitara Brezza LED Fog Lamps" /></a>
								</div>
							</div>
							<div class="row">
								<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
									<a href="assets/images/eeco/exterior4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/eeco/exterior4.jpg" alt="Vitara Brezza Auto Headlamps" /> </a>
								</div>
								<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
									<a href="assets/images/eeco/exterior5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/eeco/exterior5.jpg" alt="Vitara Brezza Floating Roof Design" /> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-transmission" role="tabpanel" aria-labelledby="pills-contact-tab">
					<div class="row imageRow">
						<div class="col-lg-5 col-sm-5 col-xs-5 p-0">
							<div class="single first item-images">
								<a href="assets/images/eeco/interior1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/eeco/interior1.jpg" alt="Vitara Brezza Premium Dashboard" /> </a>
							</div>
						</div>
						<div class="col-lg-7 col-sm-7 col-xs-7">
							<div class="row">
								<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
									<a href="assets/images/eeco/interior2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/eeco/interior2.jpg" alt="Vitara Brezza Flip-Foldable Seats" /> </a>
								</div>
								<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
									<a href="assets/images/eeco/interior3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/eeco/interior3.jpg" alt="Vitara Brezza New-Ags Smartplay Studio" /> </a>
								</div>
							</div>
							<div class="row">
								<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
									<a href="assets/images/eeco/interior4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/eeco/interior4.jpg" alt="Vitara Brezza Front Armrest" /> </a>
								</div>
								<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
									<a href="assets/images/eeco/interior5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/eeco/interior5.jpg" alt="Vitara Brezza Wide Cabin Space" /> </a>
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
				<select id="specification" class="browser-default custom-select" onchange="function_ecco()">
					<option value="5 Seater Standard">5 Seater Standard </option>
					<option value="7 Seater Standard">7 Seater Standard </option>
					<option value="5 Seater AC">5 Seater AC</option>
					<option value="5 Seater AC, CNG">5 Seater AC, CNG</option>
					<option value="EECO Care">EECO Care</option>
					<option value="Tour V 5 STR STD">Tour V 5 STR STD</option>
					<option value="Tour V 7 STR STD">Tour V 7 STR STD</option>
					<option value="Tour V 5 STR AC">Tour V 5 STR AC</option>
					<option value="TOUR V 5 STR AC with CNG">TOUR V 5 STR AC with CNG</option>
					<option value="EECO Cargo Petrol">EECO Cargo Petrol</option>
					<option value="EECO Cargo CNG">EECO Cargo CNG</option>
					<option value="EECO Cargo CNG AC">EECO Cargo CNG AC</option>
				</select>
				<div class="row ">
					<div class="col-lg-3 col-md-3 col-sm-12">
						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-dimensions-tab" data-toggle="pill" href="#v-pills-dimensions" role="tab" aria-controls="v-pills-dimensions" aria-selected="true">Dimensions</a> <a class="nav-link" id="v-pills-engine-tab" data-toggle="pill" href="#v-pills-engine" role="tab" aria-controls="v-pills-engine" aria-selected="false">Engine</a> <a class="nav-link" id="v-pills-brakes-tab" data-toggle="pill" href="#v-pills-brakes" role="tab" aria-controls="v-pills-brakes" aria-selected="false">Brakes</a> <a class="nav-link" id="v-pills-suspension-tab" data-toggle="pill" href="#v-pills-suspension" role="tab" aria-controls="v-pills-suspension" aria-selected="false">Regulation</a> <a class="nav-link" id="v-pills-transmission-tab" data-toggle="pill" href="#v-pills-transmission" role="tab" aria-controls="v-pills-transmission" aria-selected="false">Transmission</a> <a class="nav-link" id="v-pills-weight-tab" data-toggle="pill" href="#v-pills-weight" role="tab" aria-controls="v-pills-weight" aria-selected="false">Weight</a> </div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-12">
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="v-pills-dimensions" role="tabpanel" aria-labelledby="v-pills-dimensions-tab">
								<div class="tab-contents">
									<div class="display-table" style="display: table;">
										<div class="display-cell">
											<h4>Full Length</h4>
											<p>3675 <span style="font-size: 10px;">mm</span></p>
										</div>
										<div class="display-cell">
											<h4>Full Width</h4>
											<p>1475 <span style="font-size: 10px;">mm</span></p>
										</div>
										<div class="display-cell">
											<h4>Full Height</h4>
											<p>1825 <span style="font-size: 10px;">mm (Unladen )</span></p>
										</div>
									</div>
									<div class="display-table" style="display: table;">
										<div class="display-cell">
											<h4>Wheelbase</h4>
											<p>2350 <span style="font-size: 10px;"> mm</span></p>
										</div>
										<div class="display-cell">
											<h4>Front Tread</h4>
											<p>1280 <span style="font-size: 10px;"> mm</span></p>
										</div>
										<div class="display-cell">
											<h4>Rear Tread </h4>
											<p>1290 <span style="font-size: 10px;"> mm</span></p>
										</div>
									</div>
									<div class="display-table" style="display: table;">
										<div class="display-cell">
											<h4>Minimum Turning Radius</h4>
											<p>4.5<span style="font-size: 10px;"> m</span></p>
										</div>
										<div class="display-cell">&nbsp;</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-engine" role="tabpanel" aria-labelledby="v-pills-engine-tab">
								<div class="tab-contents">
									<div class="display-table">
										<div class="display-cell">
											<h4>Engine Displacement</h4>
											<p>1196 <span style="font-size: 10px;">CC</span></p>
										</div>
										<div class="display-cell">
											<h4>Engine Type</h4>
											<p>G12B</p>
										</div>
										<div class="display-cell">
											<h4>Tank Capacity</h4>
											<p>40 L</p>
										</div>
									</div>
									<div class="display-table">
										<div class="display-cell">
											<h4>Max. Power</h4>
											<p> 54 kW @ 6000 rpm</p>
										</div>
										<div class="display-cell">
											<h4>Max. Torque</h4>
											<p>98 Nm @ 3000 rpm </p>
										</div>
										<div class="display-cell">
											<h4>Fuel Efficiency</h4>
											<p>16.11 km/l</p>
										</div>
									</div>
									<div class="display-table">
										<div class="display-cell">
											<h4>Emission Gas (Petrol)</h4>
											<p>BS6</p>
										</div>
										<div class="display-cell"> </div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-brakes" role="tabpanel" aria-labelledby="v-pills-brakes-tab">
								<div class="tab-contents">
									<div class="display-table">
										<div class="display-cell">
											<h4>Brake Front</h4>
											<p>Disc</p>
										</div>
										<div class="display-cell">
											<h4>Brake Rear</h4>
											<p>Drum</p>
										</div>
										<div class="display-cell">
											<h4>Front Suspension</h4>
											<p>MacPherson Strut</p>
										</div>
									</div>
									<div class="display-table">
										<div class="display-cell">
											<h4>Tyre Size</h4>
											<p>155 R13 LT 8PR</p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-suspension" role="tabpanel" aria-labelledby="v-pills-suspension-tab">
								<div class="tab-contents">
									<div class="display-table">
										<div class="display-cell">
											<h4><strong>ABS with EBD</strong></h4> </div>
										<div class="display-cell">
											<h4><strong>Child Lock for Doors</strong></h4> </div>
										<div class="display-cell">
											<h4><strong>Driver Airbag</strong></h4> </div>
									</div>
									<div class="display-table">
										<div class="display-cell">
											<h4><strong>Reverse Parking Sensor System</strong></h4> </div>
										<div class="display-cell">
											<h4><strong>Seat Belt Reminder <br>
                      (Dr + Co-Dr)</strong></h4> </div>
										<div class="display-cell">
											<h4><strong>Speed Alert System*</strong></h4> </div>
									</div>
									<div class="display-table">
										<div class="display-cell">
											<h4><strong>Offset Crash (As per AIS 098)^</strong></h4> </div>
									</div>
									<div>
										<p class="terms">^Crash Compliance is with Offset Crash (As per AIS 098)</p>
										<p class="terms">*As certified by Test Agency Under Rule 115 Central Motor Vehicles Rules, 1989</p>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-transmission" role="tabpanel" aria-labelledby="v-pills-transmission-tab">
								<div class="tab-contents">
									<div class="display-table">
										<div class="display-cell">
											<h4>Petrol</h4> <strong>5 MT</strong> </div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-weight" role="tabpanel" aria-labelledby="v-pills-weight-tab">
								<div class="tab-contents">
									<div class="display-table">
										<div class="display-cell">
											<h4>Kerb Weight (Petrol)</h4>
											<p>940 kg</p>
										</div>
										<div class="display-cell"> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="img-car"> <img src="assets/images/eeco/4-eceo.png" alt="carFooter"> </div>
			</div>
		</div>
		<div class="performance">
			<div class="performnace-bg">
				<picture>
					<source srcset="assets/images/eeco/5-desk.jpg" alt="Vitara Brezza engine performance" media="(min-width: 992px)">
					<source srcset="assets/images/eeco/5-ipad.jpg" alt="Vitara Brezza engine performance" media="(min-width: 768px)">
					<source srcset="assets/images/eeco/5-mobile.jpg" alt="Vitara Brezza engine performance" media="(min-width: 320px)"> <img srcset="assets/images/eeco/5-desk.jpg" alt="Vitara Brezza engine performance" class="img-responsive bg-image"></picture>
				<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12 prod-image"> <img src="assets/images/eeco/5-Engine.png" class="img-responsive" alt="Brezza Petrol Engine"> </div>
				<div class="performance-content col-xs-12 col-sm-6 col-md-9 col-lg-6">
					<h2>Features</h2>
					<select id="features" class="browser-default custom-select" onchange="function_ecco_features()">
						<option value="5 Seater Standard">5 Seater Standard </option>
						<option value="7 Seater Standard">7 Seater Standard </option>
						<option value="5 Seater AC">5 Seater AC</option>
						<option value="5 Seater AC, CNG">5 Seater AC, CNG</option>
						<option value="EECO Care">EECO Care</option>
						<option value="Tour V 5 STR STD">Tour V 5 STR STD</option>
						<option value="Tour V 7 STR STD">Tour V 7 STR STD</option>
						<option value="Tour V 5 STR AC">Tour V 5 STR AC</option>
						<option value="TOUR V 5 STR AC with CNG">TOUR V 5 STR AC with CNG</option>
						<option value="EECO Cargo Petrol">EECO Cargo Petrol</option>
						<option value="EECO Cargo CNG">EECO Cargo CNG</option>
						<option value="EECO Cargo CNG AC">EECO Cargo CNG AC</option>
					</select>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-exterior-tab" data-toggle="pill" href="#v-pills-exterior" role="tab" aria-controls="v-pills-exterior" aria-selected="true">Exterior</a> <a class="nav-link" id="v-pills-interiors-tab" data-toggle="pill" href="#v-pills-interiors" role="tab" aria-controls="v-pills-interiors" aria-selected="false">Interiors</a> <a class="nav-link" id="v-pills-comfort-tab" data-toggle="pill" href="#v-pills-comfort" role="tab" aria-controls="v-pills-comfort" aria-selected="false">Comfort </a> <a class="nav-link" id="v-pills-safety-tab" data-toggle="pill" href="#v-pills-safety" role="tab" aria-controls="v-pills-safety" aria-selected="false">Safety and Security</a> <a class="nav-link" id="v-pills-utility-tab" data-toggle="pill" href="#v-pills-utility" role="tab" aria-controls="v-pills-utility" aria-selected="false">Audio and Entertainment</a> </div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="tab-content" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-pills-exterior" role="tabpanel" aria-labelledby="v-pills-exterior-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4><strong>Front Mud Flaps </strong></h4> </div>
											<div class="display-cell">
												<h4><strong>Wheel Cover (Center Cap)</strong></h4> </div>
											<div class="display-cell">
												<h4><strong>Outside Rear View Mirror (Left &amp; Right)</strong></h4> </div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-interiors" role="tabpanel" aria-labelledby="v-pills-interiors-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4><strong>Interior Color </strong></h4> </div>
											<div class="display-cell">
												<h4><strong>Both Side Sunvisor </strong></h4> </div>
											<div class="display-cell">
												<h4><strong>Molded Floor Carpet</strong></h4> </div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4><strong>Molded Roof Lining </strong></h4> </div>
											<div class="display-cell">
												<h4><strong>Rear Cabin Lamp</strong></h4> </div>
											<div class="display-cell">
												<h4><strong>Front Cabin Lamp</strong></h4> </div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4><strong>New Color Seat Matching Interior Color </strong></h4> </div>
											<div class="display-cell">
												<h4><strong>Assist Grip<br>
                        (Co - Driver + Rear) </strong></h4> </div>
											<div class="display-cell">
												<h4><strong> </strong></h4> </div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-comfort" role="tabpanel" aria-labelledby="v-pills-comfort-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4><strong>Heater</strong></h4> </div>
											<div class="display-cell">
												<h4><strong>Sliding Driver Seat</strong></h4> </div>
											<div class="display-cell">
												<h4><strong>Reclining Front Seats</strong></h4> </div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4><strong>Integrated</strong><strong> Head Rest -</strong><strong> Front Row </strong> </h4> </div>
											<div class="display-cell"> </div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-safety" role="tabpanel" aria-labelledby="v-pills-safety-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4><strong>Headlamp Leveling </strong></h4> </div>
											<div class="display-cell">
												<h4><strong>Side Impact Beams </strong></h4> </div>
											<div class="display-cell">
												<h4><strong>Seat Belts for all Seats </strong></h4> </div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4><strong>High Mount Stop Lamp </strong></h4> </div>
											<div class="display-cell">
												<h4><strong>Child Lock for Sliding Doors &amp; Windows## </strong></h4> </div>
										</div>
										<div>
											<p class="terms">##Child lock not applicable in Tour V variants</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-utility" role="tabpanel" aria-labelledby="v-pills-utility-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4><strong>Multi Tripmeter</strong></h4> </div>
											<div class="display-cell">
												<h4><strong>12 Volt Accessory Socket</strong></h4> </div>
											<div class="display-cell">
												<h4><strong>Speedometer Illumination Colour </strong></h4> <strong>(Amber)</strong> </div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4><strong>Digital</strong><strong> Meter Cluster </strong></h4>
												<p> <strong> (Fuel level, Odometer &amp; Tripmeter)</strong> </p>
											</div>
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
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active"> <img class="first-slide" src="assets/images/eeco/slide1.jpg" alt="Automatic Transmission">
					<div class="caption">
						<h2>Reliable <span>Safety</span></h2>
						<p>Get yourself safety assured with reliable features like, Driver Airbag, ABS+EBD, Reverse Parking Sensor, Driver+Co-driver seat belt reminder. So, cover miles with worry-free smiles.</p>
						<ul>
							<li data-slide="1"><strong>Driver airbag</strong></li>
							<li data-slide="2">ABS+EBD</li>
							<li data-slide="3">Reverse parking sensor</li>
							<li data-slide="4">Driver+Co-driver seat belt reminder (lamp+buzzer)</li>
						</ul>
					</div>
				</div>
				<div class="carousel-item"> <img class="second-slide" src="assets/images/eeco/slide2.jpg" alt="Progressive Smart Hybrid Technology">
					<div class="caption">
						<h2>Reliable <span>Safety</span></h2>
						<p>Get yourself safety assured with reliable features like, Driver Airbag, ABS+EBD, Reverse Parking Sensor, Driver+Co-driver seat belt reminder. So, cover miles with worry-free smiles.</p>
						<ul>
							<li data-slide="1">Driver airbag</li>
							<li data-slide="2"><strong>ABS+EBD</strong></li>
							<li data-slide="3">Reverse parking sensor</li>
							<li data-slide="4">Driver+Co-driver seat belt reminder (lamp+buzzer)</li>
						</ul>
					</div>
				</div>
				<div class="carousel-item"> <img class="second-slide" src="assets/images/eeco/slide3.jpg" alt="New-Age SmartPlay Studio">
					<div class="caption">
						<h2>Reliable <span>Safety</span></h2>
						<p>Get yourself safety assured with reliable features like, Driver Airbag, ABS+EBD, Reverse Parking Sensor, Driver+Co-driver seat belt reminder. So, cover miles with worry-free smiles.</p>
						<ul>
							<li data-slide="1">Driver airbag</li>
							<li data-slide="2">ABS+EBD</li>
							<li data-slide="3"><strong>Reverse parking sensor</strong></li>
							<li data-slide="4">Driver+Co-driver seat belt reminder (lamp+buzzer)</li>
						</ul>
					</div>
				</div>
				<div class="carousel-item"> <img class="second-slide" src="assets/images/eeco/slide4.jpg" alt="Dual Airbags">
					<div class="caption">
						<h2>Reliable <span>Safety</span></h2>
						<p>Get yourself safety assured with reliable features like, Driver Airbag, ABS+EBD, Reverse Parking Sensor, Driver+Co-driver seat belt reminder. So, cover miles with worry-free smiles.</p>
						<ul>
							<li data-slide="1">Driver airbag</li>
							<li data-slide="2">ABS+EBD</li>
							<li data-slide="3">Reverse parking sensor</li>
							<li data-slide="4"><strong>Driver+Co-driver seat belt reminder (lamp+buzzer)</strong></li>
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
							<input type="hidden" class="form-control" id="model" name="model" value="Eeco"> </div>
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
							<input type="hidden" class="form-control" id="model" name="model" value="Eeco"> </div>
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