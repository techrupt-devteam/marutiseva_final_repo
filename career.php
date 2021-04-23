<?php    
$title="SEVA Automotive | Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur";	
?>
<?php 
 $pgDesc="Seva Automotive start the journey in 1985 with Iconic Maruti 800 grows to Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur, Nanded, Dhule, Wardha, Nandurbar";
 $pgKeywords="maruti suzuki, maruti suzuki car, Car, brezza, swift dzire, ertiga, alto 800, wagon r, alto k10, maruti, celerio, swift price, vitara brezza, swift dzire price, maruti suzuki swift, ertiga price, ertiga car, maruti suzuki s presso, maruti x presso, maruti suzuki arena, maruti showrooms near me, maruti cars, maruti suzuki ertiga, suzuki ertiga, maruti swift, wagon r 2020, swift vdi, dzire,Maruti Suzuki Showroom Nagpur, Maruti Suzuki Nagpur, Maruti Suzuki Showroom Nashik, Maruti Suzuki ARENA Nagpur, ARENA Nashik";
 include 'header.php'; 
?>


<section class="page-title  v3 clearfix parallax  parallax5" style="background-position: 50% -89px;background-image: url('assets/images/icon/career-hero.jpeg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="wrap-page-title">
      <div class="breakcrums text-center v2">
        <ul>
          <li><a href="index.php" class="hover-text">Home &nbsp;&nbsp; : : </a></li>
          <li><a href="career.php" class="hover-text">Career &nbsp;&nbsp; </a></li>
        </ul>
      </div>
      <div class="page-title-heading text-center v2">
        <h1><a href="#" class="hover-text">Join Now</a></h1>
      </div>
    </div>
  </div>
</section>
<main>
  <section class="feature-car mt-5 pb-5 mb-5">
    <div id="page-content">
      <div class="container">
       <div class="formsection mt-0"> 
        <p class="text-danger my-3">* All fields are mandatory</p>
        <form>
        <div class="row mt-5">
         <div class="form-group col-md-6">
            <label>Full Name</label>
            <input type="text" class="form-control" required placeholder="Name"/>
         </div>
         <div class="form-group col-md-6">
          <label>Email ID</label>
          <input type="email" class="form-control" required placeholder="Email"/>
       </div>
        <div class="form-group col-md-4">
          <label>Contact Number</label>
          <input type="text" class="form-control" required placeholder="+91 97XXXXXXX" maxlength="10" minlength="10"/>
      </div>
        <div class="form-group col-md-4">
          <label>Position Applied For</label>
          <select class="form-control">
            <option>Web Designer</option>
          </select>
      </div>
      <div class="form-group col-md-4">
        <label>Preferred Location</label>
          <select class="form-control">
            <option>Nasik</option>
          </select>
      </div>
      <div class="form-group col-md-4">
        <label>Total Experience</label>
        <input type="text" class="form-control" required placeholder="Year" maxlength="2" minlength="1"/>
      </div>
      <div class="form-group col-md-4">
        <label>Qualification</label>
        <select class="form-control">
          <option value="">Select</option>
            <option>Diploma</option>
            <option>Graduate</option>
            <option>Post Graduate</option>
            <option>PHD</option>
        </select>
      </div>

      <div class="form-group col-md-4">
        <label>Current CTC</label>
        <input type="text" class="form-control" required placeholder="Salary"/>
        </div>
        <div class="form-group col-md-4">
          <label>Upload Resume</label>
          <input type="file" class="form-control" required style="line-height: 2.2;"/>
          </div>
          <div class="form-group col-md-12 my-4">
            <button type="submit" name="submit" class="btn-effect btn-submit v2">Submit now</button>
          </div>
        </div>
      </form>
    </div>
      </div>
      <!-- end .container --> 
    </div>
  </section>

<!--Get A Quote Modal -->
<div class="get-quotePopup modal fade" id="apply" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Get A Quote</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="send_mail_quotation.php" method="post" data-parsley-validate="parsley">
        <div class="modal-body">
            <div class="form-group">
              <label for="First Name" class="col-form-label">Full Name<span class="parsley-required">*</span></label>
              <input type="text" class="form-control" id="first-name" name="full_name" required="true" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter Name">
              <input type="hidden" class="form-control" id="model" name="model" value="Dzire">
  
            </div>
            <div class="form-group">
              <label for="Email" class="col-form-label">Email<span class="parsley-required">*</span></label>
              <input type="email" class="form-control" id="Email" name="email" required="true" data-parsley-type="email" data-parsley-required-message="Please Enter Email Id">
            </div>
            <div class="form-group">
              <label for="Phone" class="col-form-label">Phone<span class="parsley-required">*</span></label>
              <input type="tel" class="form-control" id="phone" name="phone_no" required="true" data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No">
            </div>
           <div class="form-group">
              <label for="inputAddress2">City<span class="parsley-required" style="color:red">*</span></label>
              <select class="form-control city" required="true"  aria-required="true" aria-invalid="false" name="city" id="city" onchange="check(event);">
              <option value="Nagpur">Nagpur</option>
              <option value="Nanded">Nanded</option>
              <option value="Dhule">Dhule</option>
              <option value="Nandurbar">Nandurbar</option>
              <option value="Nashik">Nashik</option>
              <option value="Hinganghat">Hinganghat</option>
              </select>
            </div>

             <div class="form-group">
                <label for="inputAddress2">Upload your CV</label>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Custom file upload</label>
                  </div>
              </div>


            <div class="form-group">
            <p style="font-size:12px"><span class="parsley-required">*</span><input type="checkbox" id="FormChkBoxBook6" name="FormChkBox" style="vertical-align: sub;" required="true" data-parsley-required-message="Please indicate that you accept the Terms and Conditions">
                      I agree <a href="disclaimer.php" style="color: blue">Terms and Conditions.</a> </p>
            </div>
            
         
        </div>
        <div class="modal-footer d-flex justify-content-between">
            <div class="wrap-btn">
                <button type="submit" name="submit" class="btn-effect btn-submit v2 triggerBookAShowRoomVisitButton">Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Get A Quote Modal -->
  
</main>


<?php  
require_once('footer.php');
?>
