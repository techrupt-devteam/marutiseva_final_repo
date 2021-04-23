<?php    



$title="Feedback | Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur | SEVA";	



?>
<?php 



 $pgDesc="Customer Feedback for SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur, Nanded, Wardha, Dhule, Nandurbar. S Presso, Brezza, Swift Dzire, Ertiga, Swift Cars";



 $pgKeywords="Maruti Suzuki, Maruti Suzuki Insurance, Maruti Service Center, Maruti Suzuki Finance, services, service center, car service, maruti suzuki service center, Maruti Suzuki Showroom, Nashik, Nagpur, Maruti Insurance, Feedback, Customer Feedback, wardha, nanded, dhule, nandurbar, S Presso, Brezza, Swift Dzire, Ertiga, Swift Cars";



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
<main>

<div class="container feature-car mt-4">
  <div class="row">
    <div class="col-md-12">
      <div class="section-title mb-4">
         <span>Welcome to the Seva</span>
         <h2>Give us Feedback</h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
    <div class="row pb-5 mb-5">
      <div class="col-md-8 mx-auto">
        <div class="formsection">
          <form action="send_mail_feedback.php" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">
            <div class="">
              <div class="form-group">
                <label for="inputAddress">Full Name<span class="parsley-required" style="color: red">*</span></label>
                <input type="text" class="form-control" id="inputAddress" name="full_name" placeholder="Full your Name" required data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter your name">
              </div>
            </div>
            <div class="">
              <div class="form-group">
                <label for="inputAddress2">Email<span class="parsley-required" style="color: red">*</span> </label>
                <input type="text" class="form-control" id="inputAddress2" name="email" placeholder="Enter your Email " required data-parsley-type="email" data-parsley-required-message="Please Enter your email address">
              </div>
            </div>
            <div class="">
              <div class="form-group">
                <label>Feedback</label>
                <textarea class="form-control" name="feedback" aria-label="With textarea"></textarea>
                <div class="form-group mt-3">
                  <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
                  <div id="g-recaptcha-error"></div>
                </div>
              </div>
            </div>
            
            <!--<button type="submit" name="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton">Sign in</button>-->
            
            <input type="submit" name="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton" value="Submit Feedback">
          </form>
        </div>
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
