<?php    
$title="New Wagon R | Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur | SEVA";	

 $pgDesc="Check India's Most Loved Family Car New Maruti Suzuki Wagon R price at SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur. Wagon R CNG, Wagonr VXI, LXI available";

 $pgKeywords="Maruti Suzuki, Maruti Suzuki Car Showroom, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Showrooms near me, Maruti Suzuki Finance, wagon r, wagonr, maruti suzuki wagonr, maruti suzuki wagon r, maruti wagon r, maruti wagonr, wagon r 2019, wagon r 2020, wagon r price, wagon r CNG, new wagon r, suzuki wagon r, wagonr new model, wagonr car, wagon r vxi, wagon r lxi, new wagon r price, wagon r car price, wagon r 7 seater price, wagon r 7 seater";

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
		<main class="wagnor-details">
			<div class="generic-hero">
				<div class="itemimg">
					<picture>
						<source srcset="assets/images/wagonr/top1-banner_web.jpg" alt="Alto Banner" media="(min-width: 992px)">
						<source srcset="assets/images/wagonr/tab_banner-ipad.png" alt="Alto Banner" media="(min-width: 768px)">
						<source srcset="assets/images/wagonr/tab_banner-mobile.png" alt="Alto Banner" media="(min-width: 320px)"> <img srcset="assets/images/wagonr/top1-banner_web.jpg" alt="Alto Banner"> </picture>
					<div class="mediacontent col-lg-5 white right vcenter"> <img src="assets/images/wagonr/top1-bannertxt.png" alt="Liberate Your Drive">
						<div class="desktopcontent hidden-xs hidden-sm mt-2">
							<p>Confidence means strength of character . And that’s what lies at the heart of the Big New Maruti Suzuki WagonR. The car comes with the advanced K-series engine, a bold new exterior and generous cabin space. To take on every journey in full stride.</p>
						</div>
						<div class="mobilecontent hidden-md hidden-lg">
							<p> Confidence means strength of character . And that’s what lies at the heart of the</p>
						</div>
					</div>
				</div>
			</div>
			<div class="price-section mobileViewPrice">
				<h3 class="text-align">Ex-Showroom Prices</h3>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td colspan="3" align="center"> WAGON R BS - 6</td>
					</tr>
					<tr>
						<td>Varient</td>
						<td></td>
						<td>Price</td>
					</tr>
          			<?php
					$sql = "SELECT varient,on_road_price FROM product WHERE car = 2 GROUP BY `product`.`varient` ASC";
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
						<td colspan="3" align="center"> WAGON R BS - 6</td>
					</tr>
					<tr>
						<td>Varient</td>
						<td></td>
						<td>Price</td>
					</tr>
         			<?php
						$sql = "SELECT varient,on_road_price FROM product WHERE car = 2 GROUP BY `product`.`varient`";
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
					<li><a href="assets/images/wagonr/WagonR_Brand_Brochure.pdf" target="_blank">Product Brochure</a></li>
					<li><a href="maruti-finance.php">Finance</a></li>
				</ul>
			</div>
			<div class="product-carousel">
				<div class="item">
					<picture class="productcarouselbg">
						<source srcset="assets/images/wagonr/2nd-exp_bg.jpg" alt="Alto 800 Side Mirror" media="(min-width: 992px)">
						<source srcset="assets/images/wagonr/2nd-ipad_bg.jpg" alt="" media="(min-width: 768px)">
						<source srcset="assets/images/wagonr/2nd-mobile_bg.jpg" alt="" media="(min-width: 320px)"> <img srcset="assets/images/wagonr/2nd-exp_bg.jpg" alt="Alto 800 Side Mirror" class="img-responsive productbg"> </picture>
					<div class="productItems Aligner">
						<div class="container-fluid rel">
							<div class="car-color-variant">
								<a onclick="color_function(1,6)" href="javascript:void(0);"><img src="assets/images/cc-ceruleanblue.jpg"></a>
								<a onclick="color_function(2,6)" href="javascript:void(0);"><img src="assets/images/cc-granitegrey.jpg"></a>
								<a onclick="color_function(3,6)" href="javascript:void(0);"><img src="assets/images/cc-NutmegBrown.jpg"></a>
								<a onclick="color_function(4,6)" href="javascript:void(0);"><img src="assets/images/cc-silkysilver.jpg"></a>
								<a onclick="color_function(5,6)" href="javascript:void(0);"><img src="assets/images/cc-AutumnOrange.jpg"></a>
								<a onclick="color_function(6,6)" href="javascript:void(0);"><img src="assets/images/cc-superiorwhite.jpg"></a>
							</div>
							<div class="row">
								<div class="col-lg-6"> <img id="image_1" src="assets/images/wagonr/2-model-BLUE.png"> <img id="image_2" src="assets/images/wagonr/MAGMA-GREY.png" style="display:none"> <img id="image_3" src="assets/images/wagonr/NUTMEG-BROWN.png" style="display:none"> <img id="image_4" src="assets/images/wagonr/SILKY-SILVER.png" style="display:none"> <img id="image_5" src="assets/images/wagonr/AUTUMN-ORANGE.png" style="display:none"> <img id="image_6" src="assets/images/wagonr/SUPERIOR-WHITE.png" style="display:none"> </div>
								<div class="col-lg-6">
									<div class="proudctFooter">
										<div class="col-lg-10">
											<div class="product-content">
												<h3 class="terms mileage">Strong in Character, Big on Efficiency</h3>
												<p></p>
												<ul>
													<li>
														<h3>Petrol MT (1.0 L)</h3>
														<h4>21.79 <span>km/l*</span></h4> </li>
													<li>
														<h3>Petrol AGS (1.0 L)</h3>
														<h4>21.79 <span>km/l*</span></h4> </li>
													<li>
														<h3>Petrol AGS (1.2 L)</h3>
														<h4>20.52 <span>km/l*</span></h4> </li>
													<li>
														<h3>CNG 1L</h3>
														<h4>32.52 <span>km/kg*</span></h4> </li>
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
				<div class="three60view wagnor3rd">
					<picture class="front">
						<!--[if IE 9]><video style="display: none; "><![endif]-->
						<source srcset="assets/images/wagonr/3-strong_outside.jpg" alt="Alto Infotainment System" media="(min-width: 992px)">
						<source srcset="assets/images/wagonr/3-strong_ipad.jpg" alt="Alto Infotainment System" media="(min-width: 768px)">
						<source srcset="assets/images/wagonr/3-strong_mobile.jpg" alt="Alto Infotainment System" media="(min-width: 320px)">
						<!--[if IE 9]></video><![endif]--><img srcset="assets/images/wagonr/3-strong_outside.jpg" alt="Alto Infotainment System" class="img-responsive mainbg"> </picture>
					<section class="three60view-content col-lg-5">
						<section class="chase-description">
							<h3 style="color:#fff"> STRONG ON THE OUTSIDE</h3>
							<p>A true tall boy, the Big New WagonR has a robust design language with a wide stance, which makes it sturdy and look strikingly attractive. </p>
							<div class="price-section deskViewprice">
								<h3 class="text-center"> Ex-Showroom Prices</h3>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
										<td>Model Description</td>
										<td></td>
										<td>Price</td>
									</tr>
									<?php
									$sql = "SELECT varient,on_road_price FROM product WHERE car = 2 GROUP BY `product`.`varient`";
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
								<table width="100%" border="0" cellspacing="0" cellpadding="0" style="display:none; ">
									<tr>
										<td>Model Description</td>
										<td></td>
										<td>Price</td>
									</tr>
									<?php
									$sql = "SELECT varient,on_road_price FROM product WHERE car = 2 GROUP BY `product`.`varient`";
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
									<a href="assets/images/wagonr/highlights-1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/wagonr/highlights-1.jpg" alt="Wagonr Spacious" /></a>
								</div>
							</div>
							<div class="col-lg-7 col-sm-7 col-xs-7">
								<div class="row">
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/wagonr/highlights-2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/wagonr/highlights-2.jpg" alt="Wagonr Heartect Platform" /></a>
									</div>
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/wagonr/highlights-3.png" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="assets/images/wagonr/highlights-3.png" alt="Wagonr Smartplay" /></a>
									</div>
								</div>
								<div class="row">
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/wagonr/highlights-4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"><img src="assets/images/wagonr/highlights-4.jpg" alt="Wagonr Automatic Gear" /></a>
									</div>
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/wagonr/highlights-5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"><img src="assets/images/wagonr/highlights-5.jpg" alt="Wagonr Spacious" /></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-engine" role="tabpanel" aria-labelledby="pills-profile-tab">
						<div class="row imageRow">
							<div class="col-lg-5 col-sm-5 col-xs-5 p-0">
								<div class="single first item-images">
									<a href="assets/images/wagonr/exterior1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/wagonr/exterior1.jpg" alt="Wagonr Grille" /> </a>
								</div>
							</div>
							<div class="col-lg-7 col-sm-7 col-xs-7">
								<div class="row">
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/wagonr/exterior2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/wagonr/exterior2.jpg" alt="Wagonr Headlamps" /></a>
									</div>
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/wagonr/exterior3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="assets/images/wagonr/exterior3.jpg" alt="Wagonr Sculpted Exterior" /></a>
									</div>
								</div>
								<div class="row">
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/wagonr/exterior4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/wagonr/exterior4.jpg" alt="Wagonr Foglight" /> </a>
									</div>
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/wagonr/exterior5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="assets/images/wagonr/exterior5.jpg" alt="Wagonr Extrior ORVM" /> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-transmission" role="tabpanel" aria-labelledby="pills-contact-tab">
						<div class="row imageRow">
							<div class="col-lg-5 col-sm-5 col-xs-5 p-0">
								<div class="single first item-images">
									<a href="assets/images/wagonr/interior1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img src="assets/images/wagonr/interior1.jpg" alt="Wagonr Spacious" /> </a>
								</div>
							</div>
							<div class="col-lg-7 col-sm-7 col-xs-7">
								<div class="row">
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/wagonr/interior2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key."> <img src="assets/images/wagonr/interior2.jpg" alt="Dynamically Crafted Instrumental Panel" /> </a>
									</div>
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/wagonr/interior3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="assets/images/wagonr/interior3.jpg" alt="Electric ORVM & Power Window Controls" /></a>
									</div>
								</div>
								<div class="row">
									<div class="single item-images col-lg-4 col-sm-4 col-xs-4  p-0">
										<a href="assets/images/wagonr/interior4.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"><img src="assets/images/wagonr/interior4.jpg" alt="Steering Mounted Controls" /></a>
									</div>
									<div class="single item-images col-lg-8 col-sm-8 col-xs-8  p-0">
										<a href="assets/images/wagonr/interior5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"><img src="assets/images/wagonr/interior5.jpg" alt="Wagonr Boot Space" /></a>
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
					<select id="specification" class="browser-default custom-select" onchange="function_wagonr()">
						<option value="LXI 1.0L">LXI 1.0L</option>
						<option value="LXI CNG 1.0L">LXI CNG 1.0L</option>
						<option value="LXI (O) 1.0L">LXI (O) 1.0L</option>
						<option value="LXI (O) CNG 1.0L">LXI (O) CNG 1.0L</option>
						<option value="VXI 1.0L">VXI 1.0L</option>
						<option value="VXI (O) 1.0L">VXI (O) 1.0L</option>
						<option value="VXI AGS 1.0L">VXI AGS 1.0L</option>
						<option value="VXI (O) AGS 1.0L">VXI (O) AGS 1.0L</option>
						<option value="VXI 1.2L">VXI 1.2L</option>
						<option value="VXI (O) 1.2L">VXI (O) 1.2L</option>
						<option value="VXI AGS 1.2L">VXI AGS 1.2L</option>
						<option value="VXI (O) AGS 1.2L">VXI (O) AGS 1.2L</option>
						<option value="ZXI 1.2L">ZXI 1.2L</option>
						<option value="ZXI AGS 1.2L">ZXI AGS 1.2L</option>
					</select>
					<div class="row ">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-dimensions-tab" data-toggle="pill" href="#v-pills-dimensions" role="tab" aria-controls="v-pills-dimensions" aria-selected="true">Dimensions</a> <a class="nav-link" id="v-pills-engine-tab" data-toggle="pill" href="#v-pills-engine" role="tab" aria-controls="v-pills-engine" aria-selected="false">Engine</a> <a class="nav-link" id="v-pills-brakes-tab" data-toggle="pill" href="#v-pills-brakes" role="tab" aria-controls="v-pills-brakes" aria-selected="false">Brakes</a> <a class="nav-link" id="v-pills-suspension-tab" data-toggle="pill" href="#v-pills-suspension" role="tab" aria-controls="v-pills-suspension" aria-selected="false">Suspension  System</a> <a class="nav-link" id="v-pills-weight-tab" data-toggle="pill" href="#v-pills-weight" role="tab" aria-controls="v-pills-weight" aria-selected="false">Weight</a> <a class="nav-link" id="v-pills-capacity-tab" data-toggle="pill" href="#v-pills-capacity" role="tab" aria-controls="v-pills-capacity" aria-selected="false">CAPACITY</a> <a class="nav-link" id="v-pills-tyre-tab" data-toggle="pill" href="#v-pills-tyre" role="tab" aria-controls="v-pills-tyre" aria-selected="false">Tyre</a> <a class="nav-link" id="v-pills-transmission-tab" data-toggle="pill" href="#v-pills-transmission" role="tab" aria-controls="v-pills-transmission" aria-selected="false">Transmission</a> </div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="tab-content" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-pills-dimensions" role="tabpanel" aria-labelledby="v-pills-dimensions-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4>Length</h4>
												<p>3655<span style="font-size: 10px;">&nbsp;mm</span></p>
											</div>
											<div class="display-cell">
												<h4>Width</h4>
												<p>1620<span style="font-size: 10px;">&nbsp;mm</span></p>
											</div>
											<div class="display-cell">
												<h4>Height</h4>
												<p>1675<span style="font-size: 10px;">&nbsp;mm</span></p>
											</div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4>Wheelbase</h4>
												<p>2435<span style="font-size: 10px;">&nbsp;mm</span></p>
											</div>
											<div class="display-cell">
												<h4>Turning Radius</h4>
												<p>4.7<span style="font-size: 10px;">&nbsp;m</span></p>
											</div>
											<div class="display-cell">
												<h4></h4>
												<p>&nbsp;</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-engine" role="tabpanel" aria-labelledby="v-pills-engine-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4>Engine Type</h4>
												<p>K10B</p>
											</div>
											<div class="display-cell">
												<h4>Capacity</h4>
												<p>998 cc</p>
											</div>
											<div class="display-cell">
												<h4>Number of Cylinders</h4>
												<p>3</p>
											</div>
										</div>
										<div class="display-table">
											<div class="display-cell">
												<h4>Maximum Engine Output(kW@rpm)</h4>
												<p>50 kW @ 5500 rpm</p>
											</div>
											<div class="display-cell">
												<h4>Maximum Torque (Nm@rpm)</h4>
												<p>90 Nm @ 3500 rpm</p>
											</div>
											<div class="display-cell"> </div>
										</div>
										<br> </div>
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
												<p>Mac Pherson Strut with Coil Spring</p>
											</div>
											<div class="display-cell">
												<h4>Rear</h4>
												<p>Torsion Beam with Coil Spring</p>
											</div>
											<div class="display-cell"> </div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-weight" role="tabpanel" aria-labelledby="v-pills-weight-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4>Kerb Weight</h4>
												<p>805 kg</p>
											</div>
											<div class="display-cell">
												<h4>Gross Vehicle Weight</h4>
												<p>1340 kg</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-capacity" role="tabpanel" aria-labelledby="v-pills-capacity-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4>Seating Capacity</h4>
												<p>5</p>
											</div>
											<div class="display-cell">
												<h4>Fuel Tank Capacity (L)</h4>
												<p>32 L</p>
											</div>
											<div class="display-cell">
												<h4>Boot Space</h4>
												<p>341 L<sup>^</sup> (Petrol)</p>
											</div>
										</div>
										<br>
										<p><span style="font-size: 10px;"><sup> ^</sup>VDA Method.</span></p>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-tyre" role="tabpanel" aria-labelledby="v-pills-tyre-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell">
												<h4>Size</h4>
												<p>155/80R13</p>
											</div>
											<div class="display-cell">
												<h4>Type</h4>
												<p>Radial &amp; Tubeless</p>
											</div>
											<div class="display-cell">
												<h4></h4> </div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-transmission" role="tabpanel" aria-labelledby="v-pills-transmission-tab">
									<div class="tab-contents">
										<div class="display-table">
											<div class="display-cell"> <strong>
                    <p>MT</p>
                    </strong> </div>
											<div class="display-cell">
												<h4></h4>
												<p> </p>
											</div>
											<div class="display-cell">
												<h4></h4>
												<p> </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="img-car"> <img src="assets/images/wagonr/4th-wagon_spec.png" alt="carFooter"> </div>
				</div>
			</div>
			<div class="performance">
				<div class="performnace-bg">
					<picture>
						<source srcset="assets/images/wagonr/5th-performance_bg_Web.jpg" alt="" media="(min-width: 992px)">
						<source srcset="assets/images/wagonr/5th-Tab_bg.jpg" alt="" media="(min-width: 768px)">
						<source srcset="assets/images/wagonr/5th-mobile.png" alt="" media="(min-width: 320px)"> <img srcset="assets/images/wagonr/5th-performance_bg_Web.jpg" alt="" class="img-responsive bg-image"></picture>
					<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12 prod-image"> <img src="assets/images/wagonr/5th-engine12L_Web.png" class="img-responsive" alt="Alto Engine"> </div>
					<div class="performance-content col-xs-12 col-sm-6 col-md-9 col-lg-6">
						<h2>Features</h2>
						<select id="features" class="browser-default custom-select" onchange="function_wagonr_features()">
							<option value="LXI 1.0L">LXI 1.0L</option>
							<option value="LXI CNG 1.0L">LXI CNG 1.0L</option>
							<option value="LXI (O) 1.0L">LXI (O) 1.0L</option>
							<option value="LXI (O) CNG 1.0L">LXI (O) CNG 1.0L</option>
							<option value="VXI 1.0L">VXI 1.0L</option>
							<option value="VXI (O) 1.0L">VXI (O) 1.0L</option>
							<option value="VXI AGS 1.0L">VXI AGS 1.0L</option>
							<option value="VXI (O) AGS 1.0L">VXI (O) AGS 1.0L</option>
							<option value="VXI 1.2L">VXI 1.2L</option>
							<option value="VXI (O) 1.2L">VXI (O) 1.2L</option>
							<option value="VXI AGS 1.2L">VXI AGS 1.2L</option>
							<option value="VXI (O) AGS 1.2L">VXI (O) AGS 1.2L</option>
							<option value="ZXI 1.2L">ZXI 1.2L</option>
							<option value="ZXI AGS 1.2L">ZXI AGS 1.2L</option>
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
													<h4><strong>Roof Antenna</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Body Coloured Bumpers</strong></h4> </div>
												<div class="display-cell">
													<h4><strong></strong></h4> </div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="v-pills-interiors" role="tabpanel" aria-labelledby="v-pills-interiors-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Dual Tone Interiors</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Front Cabin Lamps(3 Positions)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Driver Side Sunvisor with Ticket Holder</strong></h4> </div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="v-pills-comfort" role="tabpanel" aria-labelledby="v-pills-comfort-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Accessory Socket Front Row with Storage Space</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Power Windows (Fr/Rr) with Dr. Side Auto Down Function<br>
                        <span>(Only Front)</span></strong></h4> </div>
												<div class="display-cell">
													<h4><strong>AC &amp; Heater</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>1L Bottle Holders(All four doors + Floor console)</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Reclining &amp; Front Sliding seats</strong></h4> </div>
												<div class="display-cell">
													<h4><strong></strong></h4> </div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="v-pills-safety" role="tabpanel" aria-labelledby="v-pills-safety-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Driver Airbag </strong></h4> </div>
												<div class="display-cell">
													<h4><strong>ABS with EBD</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Seat Belt Reminder with Buzzer (Dr.+Co-Dr.)</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Speed Alert System</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Rear Parking Sensors</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Central Locking</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Child Proof Rear Door Lock</strong></h4> </div>
												<div class="display-cell">
													<h4><strong></strong></h4> </div>
												<div class="display-cell">
													<h4><strong></strong></h4> </div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="v-pills-utility" role="tabpanel" aria-labelledby="v-pills-utility-tab">
										<div class="tab-contents">
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Instrument Cluster Meter Theme<br>
                        <span>(Reddish Amber)</span></strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Low Fuel Warning</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Gear Shift Indicator</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Fuel Consumption<br>
                        <span>(Instantaneous and Avg.)</span></strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Distance to Empty</strong></h4> </div>
												<div class="display-cell">
													<h4><strong>Headlamp on Warning</strong></h4> </div>
											</div>
											<div class="display-table">
												<div class="display-cell">
													<h4><strong>Door Ajar Warning Lamp</strong></h4> </div>
												<div class="display-cell">
													<h4><strong></strong></h4> </div>
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
					<div class="carousel-item active"> <img class="first-slide" src="assets/images/wagonr/slide1.jpg" alt="First slide">
						<div class="caption">
							<h2>STRONG ON <span>COMFORT</span></h2>
							<p> Designed around convenience. Now access music and attend calls in a touch with the
								<br> Big New WagonR’s Steering Mounted Controls.</p>
							<ul>
								<li data-slide="1"><strong style="font-size: 16px;">Dynamically Crafted Instrument Panel</strong></li>
								<li data-slide="2">Rear 60:40 Split Seat</li>
								<li data-slide="3">Steering Mounted Controls</li>
								<li data-slide="4">Best-in-its-Class Boot Space</li>
								<li data-slide="5">ABS with EBD</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/wagonr/slide2.jpg" alt="Second slide">
						<div class="caption">
							<h2>Pride Of <span>Safety</span></h2>
							<p> Designed around convenience. Now access music and attend calls in a touch with the
								<br> Big New WagonR’s Steering Mounted Controls.</p>
							<ul>
								<li data-slide="1">Dynamically Crafted Instrument Panel</li>
								<li data-slide="2"><strong style="font-size: 16px;">Rear 60:40 Split Seat</strong></li>
								<li data-slide="3">Steering Mounted Controls</li>
								<li data-slide="4">Best-in-its-Class Boot Space</li>
								<li data-slide="5">ABS with EBD</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/wagonr/slide3.jpg" alt="Second slide">
						<div class="caption">
							<h2>Pride Of <span>Safety</span></h2>
							<p> Designed around convenience. Now access music and attend calls in a touch with the
								<br> Big New WagonR’s Steering Mounted Controls.</p>
							<ul>
								<li data-slide="1">Dynamically Crafted Instrument Panel</li>
								<li data-slide="2">Rear 60:40 Split Seat</li>
								<li data-slide="3"><strong style="font-size: 16px;">Steering Mounted Controls</strong></li>
								<li data-slide="4">Best-in-its-Class Boot Space</li>
								<li data-slide="5">ABS with EBD</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/wagonr/slide4.jpg" alt="Second slide">
						<div class="caption">
							<h2>Pride Of <span>Safety</span></h2>
							<p> Designed around convenience. Now access music and attend calls in a touch with the
								<br> Big New WagonR’s Steering Mounted Controls.</p>
							<ul>
								<li data-slide="1">Dynamically Crafted Instrument Panel</li>
								<li data-slide="2">Rear 60:40 Split Seat</li>
								<li data-slide="3">Steering Mounted Controls</li>
								<li data-slide="4"><strong style="font-size: 16px;">Best-in-its-Class Boot Space</strong></li>
								<li data-slide="5">ABS with EBD</li>
							</ul>
						</div>
					</div>
					<div class="carousel-item"> <img class="second-slide" src="assets/images/wagonr/slide5.jpg" alt="Second slide">
						<div class="caption">
							<h2>Pride Of <span>Safety</span></h2>
							<p> Designed around convenience. Now access music and attend calls in a touch with the
								<br> Big New WagonR’s Steering Mounted Controls.</p>
							<ul>
								<li data-slide="1">Dual Airbags for Added Safety</li>
								<li data-slide="2">ABS with EBD for Enhanced Safety</li>
								<li data-slide="3">Smart Reverse Parking Sensors</li>
								<li data-slide="4">Driver + Co-Driver Seat Belt Reminder</li>
								<li data-slide="5"><strong style="font-size: 16px;">ABS with EBD</strong></li>
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
								<input type="hidden" class="form-control" id="model" name="model" value="Wagonr"> </div>
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
								<input type="hidden" class="form-control" id="model" name="model" value="Wagonr"> </div>
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