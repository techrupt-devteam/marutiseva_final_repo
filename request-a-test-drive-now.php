<?php    

$title="Test Drive | Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur | SEVA";	

?>
<?php 

 $pgDesc="Book a Test Drive of your Favorite Car at Seva Maruti Suzuki ARENA car Showroom in Nashik, Nagpur. S Presso, Brezza, Swift Dzire, Ertiga & Swift Test Drive";

 $pgKeywords="Test Drive, maruti suzuki, maruti suzuki car, Car, brezza, swift dzire, ertiga, alto 800, wagon r, maruti, celerio, swift price, vitara brezza, swift dzire price, maruti suzuki swift, ertiga price, maruti suzuki s presso, maruti suzuki arena, maruti showrooms near me, maruti cars, maruti suzuki ertiga, maruti swift, dzire,Maruti Suzuki Showroom Nagpur, Maruti Suzuki Nagpur, Maruti Suzuki Showroom Nashik, ARENA Nashik";

 include 'header.php'; 

?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="assets/js/jquery1.12.0-min.js"></script>
<script src="assets/js/parsley.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js" defer></script>
<script>
// document.getElementById('g-recaptcha-error').innerHTML = 'block';
$( document ).ready(function() {
    $("#datepicker_today").datepicker({
        format: "yyyy-mm-dd" ,
        daysOfWeekDisabled: [0],
        startDate:'tomorrow',
        autoclose:'true',
      }).val();
  });
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

const picker2 = document.getElementById('datepicker_today1'); 
picker2.addEventListener('input', function(e){
  var day = new Date(this.value).getUTCDay();
  if([0].includes(day)){
    e.preventDefault();
    this.value = '';
     document.getElementById('newdate1').innerHTML = '<span style="color:red;">Sunday not Allowed.</span>';
  }else{
    document.getElementById('newdate1').innerHTML = '';
  }
});
</script>
<style type="text/css">
.parsley-required {
	color: red;
}
.parsley-type {
	color:red;
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
<main>

<div class="container">
  <div class="my-5 pb-4">
    <h2 class="innerpageHeading">Request a Test Drive Now</h2>
    <p>Want to test drive your favorite Maruti Car today? Don’t wait and waste time when you can lay your hands on the steering of your dream car. We offer test drive facility for all Maruti Models at our dealership in Nashik, Dhule, Nandurbar, Nagpur, Wardha and Nanded. Fill up the form in simple steps to request a test drive of any Maruti Model. Take action now and experience the thrill to drive your Maruti car today!</p>
    <div class="formsection">
      <form action="send_mail_testdrive.php" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">
        <div class="my-4">
          <h5>Car Details</h5>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4">Model<span class="parsley-required" style="color:red">*</span></label>
            <select name="model"  class="form-control" aria-required="true" aria-invalid="false" required="true">
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
            <label for="inputPassword4">Test Drive Date<span class="parsley-required" style="color:red">*</span></label>
            <input type="text" class="form-control" id="datepicker_today" name="td_date" placeholder="Test Drive Date" required="true" data-parsley-required-message="Please Select A Date for test drive" data-parsley-mindate="<?php date('d-m-Y');?>">
            <div id="newdate1"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Test Drive Time<span class="parsley-required" style="color:red">*</span></label>
            <input type="text" class="form-control" name="td_time" placeholder="Enter Time" required="true" data-parsley-required-message="Please Select test drive time">
          </div>
        </div>
        <div class="my-4">
          <h5>Your Details</h5>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputAddress">Full Name<span class="parsley-required" style="color:red">*</span></label>
            <input type="text" class="form-control" name="full_name" id="inputAddress" placeholder="Full your Name" required="true" data-parsley-required-message="Please Enter Name"  data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress2">Email <span class="parsley-required" style="color:red">*</span></label>
            <input type="text" class="form-control" name="email" id="inputAddress2" placeholder="Enter your Email " required="true" data-parsley-required-message="Please Enter Email Id" data-parsley-type="email">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress2">Phone No. <span class="parsley-required" style="color:red">*</span></label>
            <input type="text" class="form-control" name="phone_no" id="inputAddress2" placeholder="Enter your Phone No." required="true" data-parsley-type="digits" maxlength="10" data-parsley-required-message="Please Enter Contact No" data-parsley-pattern=^[6-9]\d{9}$  data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit">
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
          <div class="form-group col-md-8">
            <div class="input-group">
              <div class="input-group-prepend"> <span class="input-group-text">Your Message</span> </div>
              <textarea class="form-control" name="s_message" aria-label="With textarea"></textarea>
            </div>
          </div>
          <div class="form-group mt-3 col-md-6">
            <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
            <div id="g-recaptcha-error"></div>
          </div>
        </div>
        <input type="submit" name="submit" class ="button button-purple button-180 triggerBookAShowRoomVisitButton" value="Submit">
      </form>
    </div>
  </div>
  <div class="row my-5 car-insuranceSect">
    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
      <div class="my-3"> <a href="maruti-insurance.php"> <img src="assets/images/car-insurance.jpg" class="resposive-img"> </a> </div>
      <h4><a href="maruti-insurance.php">Car Insurance</a></h4>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
      <div class="my-3"> <a href="https://www.marutiseva.com/request-a-test-drive-now.php"> <img src="assets/images/old-car.jpg" class="resposive-img"> </a> </div>
      <h4><a href="https://www.marutiseva.com/request-a-test-drive-now.php">Used Cars</a></h4>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
      <div class="my-3"> <a href="maruti-finance.php"> <img src="assets/images/finance.jpg" class="resposive-img"> </a> </div>
      <h4><a href="maruti-finance.php">Maruti Finance</a></h4>
    </div>
  </div>
</div>
</main>
<?php  

require_once('footer.php');

?>
