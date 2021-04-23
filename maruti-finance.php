<?php    

$title="Maruti Finance | Car Loan | Maruti Suzuki Showroom in Nashik, Nagpur | SEVA";	

?>
<?php 

 $pgDesc="Get Car Loan from Maruti Finance at SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur, Nanded, Dhule, Wardha, Nandurbar. Car Finance need under one roof";
 $pgKeywords="Maruti Suzuki, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Suzuki Finance, services, Maruti Suzuki Showroom, Nashik, Nagpur, service center, car service, maruti suzuki service center, Maruti Insurance, car loan, Car Finance, Vehicle Finance, wardha, nanded, dhule, nandurbar";

 include 'header.php'; 

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
.parsley-min {
	color: red;
}
</style>
<section class="page-title  v3 clearfix parallax  parallax5" style="background-position: 50% -311px;background-image: url(assets/images/icon/car-finance.png);">
  <div class="overlay"></div>
  <div class="container">
    <div class="wrap-page-title">
      <div class="breakcrums text-center v2">
        <ul>
          <li><a href="index.php" class="hover-text">Home &nbsp;&nbsp; : : </a></li>
          <li><a href="value-added-services.php" class="hover-text">VAS &nbsp;&nbsp; </a></li>
        </ul>
      </div>
      <div class="page-title-heading text-center v2">
        <h1><a href="#" class="hover-text">Maruti Finance</a></h1>
      </div>
    </div>
  </div>
</section>
<main>
  <section class="feature-car mt-5 mb-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title mb-3">
            <span>Maruti Finance</span>
            <h2>Maruti Finance </h2>
            <div class="separator"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="formsection mt-1 mb-2">
          <form action="send_mail_finance.php" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="inputAddress">Full Name<span class="parsley-required" style="color:red">*</span></label>
                <input type="text" class="form-control" id="inputAddress" name="full_name" placeholder="Full your Name" required="true" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter Name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress2">Email <span class="parsley-required" style="color:red">*</span></label>
                <input type="text" class="form-control" id="inputAddress2" name="email" placeholder="Enter your Email " required="" data-parsley-type="email" data-parsley-required-message="Please Enter Email Id">
              </div>
              <div class="form-group col-md-4">
                <label for="inputAddress2">Phone No. <span class="parsley-required" style="color:red">*</span></label>
                <input type="text" class="form-control" id="inputAddress2" name="phone_no" placeholder="Enter your Phone No." required="true" data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No">
              </div>
              <div class="form-group col-md-4">
                <label for="inputAddress2">Select City<span class="parsley-required" style="color:red">*</span></label>
                <select class="form-control" name="city"  aria-required="true" aria-invalid="false" required="true">
                  <option value="Nagpur">Nagpur</option>
                  <option value="Wardha">Wardha</option>
                  <option value="Nanded">Nanded</option>
                  <option value="Dhule">Dhule</option>
                  <option value="Nandurbar">Nandurbar</option>
                  <option value="Nashik">Nashik</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputEmail4">Model<span class="parsley-required" style="color:red">*</span></label>
                <select class="form-control" name="model" aria-required="true" aria-invalid="false" required="true">
                  <option value="Alto800">Alto800</option>
                  <option value="New alto K10">New alto K10</option>
                  <option value="Wagonr">Wagonr</option>
                  <option value="Celerio">Celerio</option>
                  <option value="Celerio X">Celerio X</option>
                  <option value="Swift">Swift</option>
                  <option value="Swift Dzire">Swift Dzire</option>
                  <option value="S Presso">S Presso</option>
                  <option value="Vitara Brezza">Vitara Brezza</option>
                  <option value="Ertiga">Ertiga</option>
                  <option value="Ecco">Ecco</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputEmail4">Annual Income (Rs.)<span class="parsley-required" style="color:red">*</span></label>
                <select class="form-control" name="annual_income" required="true">
                  <option value="1-2 lakhs">1-2 lakhs</option>
                  <option value="2-3 lakhs">2-3 lakhs</option>
                  <option value="3-4 lakhs">3-4 lakhs</option>
                  <option value="4-5 lakhs">4-5 lakhs</option>
                  <option value="5-6 lakhs">5-6 lakhs</option>
                  <option value="6-7 lakhs">6-7 lakhs</option>
                  <option value="7-8 lakhs">7-8 lakhs</option>
                  <option value="8-9 lakhs">8-9 lakhs</option>
                  <option value="9-10 lakhs">9-10 lakhs</option>
                  <option value="10-11 lakhs">10-11 lakhs</option>
                  <option value="11-12 lakhs">11-12 lakhs</option>
                  <option value="12+ lakhs">12+ lakhs</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputEmail4">Purchase Time Frame<span class="parsley-required" style="color:red">*</span></label>
                <select class="form-control" name="purchase_time" required="true">
                  <option value="Immidiate">Immidiate</option>
                  <option value="2 weeks">2 weeks</option>
                  <option value="3 weeks">3 weeks</option>
                  <option value="4 weeks">4 weeks</option>
                  <option value="4-6 weeks">4-6 weeks</option>
                  <option value="6+ weeks">6+ weeks</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-8">
                <div class="input-group">
                  <div class="input-group-prepend"> <span class="input-group-text">Your Message</span> </div>
                  <textarea class="form-control" name="s_message" aria-label="With textarea"></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
                <div id="g-recaptcha-error"></div>
              </div>
              <div class="form-group col-md-12">
                <div class="custom-control custom-checkbox form-check">
                  <input type="checkbox" class="custom-control-input form-check-input" name="conditions" required="true" id="exampleCheck1" data-parsley-required-message="Please indicate that you accept the Terms and Conditions">
                  <label class="custom-control-label form-check-label" for="exampleCheck1"> I Agree With <a href="disclaimer.php" style="color: blue">Terms and Conditions.</a><span class="red">*</span></label>
                </div>
              </div>
            </div>
            <div class="wrap-btn">
              <button type="submit" name="submit" class="btn-effect btn-submit v2 triggerBookAShowRoomVisitButton">Submit now</button>
            </div>
            <!-- <input type="submit" name="submit" class ="button button-purple button-180 triggerBookAShowRoomVisitButton" value="Submit"> -->
          </form>
        </div>
      </div>
      </div>
  </section>
<div class="container">
  <div class="my-4 pb-5">
    <p class="alert alert-info text-justify">Maruti Suzuki Finance helps customers realize their dream of owning a car, with deals right at the dealership. Starting from choosing the right financier to the completion of loan formalities, we are there for our customers at every step of the auto finance process.</p>
    <div class="my-4">
      <h5>Advantages Of Maruti Finance</h5>
      <div class="my-3">
      <h6> One-stop-shop for customers’ needs</h6>
<p class="text-justify">Maruti Suzuki Finance offers customers the convenience of a one-stop-shop for all their vehicle financing needs, from choosing the financier to the disbursal of loans. You can complete all your
finance-related formalities at the dealership where you buy your car - all under one roof!</p>
	</div>
    
    <div class="my-3">
      <h6> Wide choice of financiers</h6>
<p class="text-justify">Maruti Suzuki Finance has a tie-up with 34 finance partners like Sundaram Finance Car Loan, Shriram Car Finance and Bajaj Finance Car Loan, who have a pan-India presence. This
provides a wide variety of choices to customers, who can avail financing from any of these partners according to their needs and profiles.</p>
	</div>
    <div class="my-3">
      <h6> Special offers and benefits</h6>
<p class="text-justify">Maruti Suzuki Finance collaborates with its finance partners to offer low down payment schemes, low interest rates and other promotional offers that are not available otherwise. Their
representatives also help customers with the best car finance interest rates at the wide network of Maruti Suzuki dealerships across the country.</p>
	</div>
    
     <div class="my-3">
      <h6>Customer delight</h6>
<p class="text-justify">Maruti Finance, through its finance partners, endeavours to create customer delight by providing the best car finance, a financier for every profile and geography, better interest rates,
processing times and much more.</p>
	</div>
    
    </div>
    
  </div>
  <div class="row my-5 car-insuranceSect">
    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
      <div class="my-3"> <a href="maruti-insurance.php"> <img src="assets/images/car-insurance.jpg" class="resposive-img"> </a> </div>
      <h4><a href="maruti-insurance.php">Car Insurance</a></h4>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
      <div class="my-3"> <a href="#"> <img src="assets/images/old-car.jpg" class="resposive-img"> </a> </div>
      <h4><a href="#">Used Cars</a></h4>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
      <div class="my-3"> <a href="maruti-finance.php"> <img src="assets/images/finance.jpg" class="resposive-img"> </a> </div>
      <h4><a href="maruti-finance.php">Maruti Finance</a></h4>
    </div>
  </div>
</div>
</main>
<script src='https://www.google.com/recaptcha/api.js'></script> 
<script src="assets/js/jquery1.12.0-min.js"></script> 
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/parsley.js"></script>
<script>
// document.getElementById('g-recaptcha-error').innerHTML = 'block';
function submitUserForm() {
    var response = grecaptcha.getResponse();
    // alert(response);die();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>
<?php  

require_once('footer.php');

?>
