<?php    
  $title="Schedule Services | Maruti Suzuki Service Center in Nashik, Nagpur | SEVA";	
  include('connection.php');
  
  $pgDesc="Book a Car Service and Car Repair Online at Seva Maruti Suzuki Service Center in Nashik, Nagpur. S Presso, Brezza, Swift Dzire, Ertiga, Swift Service and Repair";
  
  $pgKeywords="Maruti Suzuki, Maruti Suzuki Car Showroom, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Showrooms near me, Maruti Suzuki Finance, services, service center, car service, maruti suzuki service center, maruti service center, servicenow, mechanic near me, car service near me, car mechanic near me, car repair, car garage near me, maruti showroom near me, car service center near me, maruti service center near me, maruti suzuki showroom nearby me, maruti service, car service center, maruti suzuki service, Accident repair";
  
  include 'header.php'; 
?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="assets/js/jquery1.12.0-min.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/parsley.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js" defer></script>
<script>
   // document.getElementById('g-recaptcha-error').innerHTML = 'block';
   $(document).ready(function() {
      $("input[type='radio']").change(function() {
         if($(this).val() == "Yes") {
            $("#address").show();
            $("#pincode").prop('required', true);
         } else {
            $("#address").hide();
            $("#pincode").prop('required', false);
         }
      });
   });
   $(document).ready(function() {
      $("#datepicker_today").datepicker({
         format: "yyyy-mm-dd",
         daysOfWeekDisabled: [0],
         datesDisabled: ['2020-11-14', '2020-11-15', '2020-11-16'],
         startDate: 'tomorrow',
         autoclose: 'true',
      }).change(check_date);
    
  });
   
 function check_date(eve)
   { 
      var  city = $('#city').val();
      var  date = $('#datepicker_today').val();
      if(city == "Nashik" && date =="2021-04-02")
      {
          alert("Booking service is not available on this date.");
          $('#datepicker_today').val('');
         // $('#submit').prop('disabled', true);
          return false;
      }
      else if(city == "Nandurbar"  && date =="2021-04-02")
      {
          alert("Booking service is not available on this date.");
          $('#datepicker_today').val('');
          //$('#submit').prop('disabled', true);
          return false;
      }
      else
      {
           $('#submit').prop('disabled', false);
      }
   }  
   
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
   
   function handler(e) {
      var date = e.target.value;
      var city = $("#city").val();
      $.ajax({
         url: "demo_test.php",
         type: 'POST',
         dataType: 'html',
         data: {
            data1: date,
            city: city // will be accessible in $_POST['data1'] & $_POST['city']
         },
         success: function(data) {
            data = data.replace(/(\r\n|\n|\r)/gm, "");
            if(data == 'true') {
               $("#datepicker_today").val("");
               document.getElementById('newdate1').innerHTML = '<span style="color:red;">Please Select Next date as Todays Servicings are full.</span>';
            } else {
               document.getElementById('newdate1').innerHTML = '';
            }
         }
      });
   }
   
   function check(e) {
      var city = e.target.value;
      var date = $("#datepicker_today").val();
      $.ajax({
         url: "demo_test.php",
         type: 'POST',
         dataType: 'html',
         data: {
            data1: date,
            city: city // will be accessible in $_POST['data1'] & $_POST['city']
         },
         success: function(data) {
            data = data.replace(/(\r\n|\n|\r)/gm, "");
            if(data == 'true') {
               $("#datepicker_today").val("");
               document.getElementById('newdate').innerHTML = '<span style="color:red;">Please Select Next date as Todays Servicings are full.</span>';
            } else {
               document.getElementById('newdate').innerHTML = '';
            }
         }
      });
   }
   $(document).ready(function() {
      $("select.city").change(function() {
         var selectedCity = $(".city option:selected").val();
         $.ajax({
            type: "POST",
            url: "process-request.php",
            data: {
               city: selectedCity
            }
         }).done(function(data) {
           var result = data.split('|');
           $("#area").html(result[0]);
           $("#show_phone_no").html(result[1]);        
         });
      });
   });

   $(document).ready(function() {
      $("#city").change(function() {
         if($(this).val() == "Nagpur") {
            $("#pickup").css("display", "none");
            $("#customControlValidation2").prop('required', false);
            $("#customControlValidation3").prop('required', false);
         } else if($(this).val() == "Nanded") {
            $("#pickup").css("display", "none");
            $("#customControlValidation2").prop('required', false);
            $("#customControlValidation3").prop('required', false);
         } else {
            $("#pickup").css("display", "block");
         }
      });
   });
   $(document).ready(function() {
  
      $("#area").change(function() {         
         if($(this).val() == "Manewada") {
            $("#pickup").css("display", "none");
            $("#customControlValidation2").prop('required', false);
            $("#customControlValidation3").prop('required', false);
         } else if($(this).val() == "Amravati Road") {
            $("#pickup").css("display", "none");
            $("#customControlValidation2").prop('required', false);
            $("#customControlValidation3").prop('required', false);
         } else {
            $("#pickup").css("display", "block");
         }
         
         var selectedArea = $("#area option:selected").val();
         $.ajax({
            type: "POST",
            url: "get_area_contact.php",
            data: {
               area: selectedArea
            }
         }).done(function(data) {
            $("#show_phone_no").html(data);        
         });

      });
   });
</script>
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
<section class="feature-car pt-4 pb-5 mb-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
           <div class="section-title mb-3">
              <span>Schedule Service / Accident Repair</span>
              <h2>Book Service</h2>
              <div class="separator"></div>
           </div>
         </div>
        </div>

      <div class="">
         <fieldset class="formsection">
            <!-- <form action="send_mail_scheduleservice.php" id="schedule-form" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">
               
               <div class="row">
                  <div class="form-group col-md-6">
                     <label for="inputAddress">Full Name<span class="parsley-required" style="color: red">*</span></label>
                     <input type="text" class="form-control" id="inputAddress" name="full_name" placeholder="Enter your Name" required="true" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter Name" autocomplete="off"> 
                  </div>
                  <div class="form-group col-md-6">
                     <label for="inputAddress2">Email<span class="parsley-required" style="color: red">*</span> </label>
                     <input type="text" autocomplete="off" class="form-control" id="inputAddress2" name="email" placeholder="Enter your Email " required="true" data-parsley-type="email" data-parsley-required-message="Please Enter Email Id" autocomplete="off"> 
                  </div>
                  <div class="form-group col-md-4">
                     <label for="inputAddress2">Phone No.<span class="parsley-required" style="color: red">*</span></label>
                     <input type="text" autocomplete="off" class="form-control" id="inputAddress2" name="phone_no" placeholder="Enter your Phone No." required="true" data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No" > 
                  </div>
                  <div class="form-group col-md-4">
                     <label for="inputAddress2">Select City<span class="parsley-required" style="color: red">*</span></label>
                     <select class="form-control city" required="true" aria-required="true" aria-invalid="false" name="city" id="city" onchange="check(event);">
                        <option value=''>Select City</option>
                        <?php
                           $sql = "SELECT city FROM locations GROUP BY city";
                           $result = $conn->query($sql);
                           while($row=mysqli_fetch_assoc($result)) { 
                             echo "<option value='$row[city]'>$row[city]</option>"; 
                           } 
                           ?>
                     </select>
                  </div>
                  <div class="form-group col-md-4" id="response">
                     <label>Workshop Location<span class="parsley-required" style="color:red">*</span></label>
                     <select class="form-control" name="area" required="" id="area" aria-required="true" aria-invalid="false" data-parsley-required-message="Please select area">
                        <option value=''>Select area</option>
                     </select>
                  </div>
                  <div class="form-group col-md-4">
                     <label>Service Type<span class="parsley-required" style="color:red">*</span></label>
                     <select class="form-control" data-val="true" id="service" name="service" required="required" data-parsley-required-message="Please select service type">
                        <option value="">Select Services</option>
                        <option value="Free Service">Free Service</option>
                        <option value="Paid Service">Paid Service</option>
                        <option value="Accident Repair">Accident Repair</option>
                     </select>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="inputPassword4">Preffered Date for Service<span class="parsley-required" style="color: red">*</span></label>
                     <input type="text" autocomplete="off" class="form-control" id="datepicker_today" name="date" placeholder="Date" required="" data-parsley-required-message="Please Select a date" onchange="handler(event);">
                     <div id="newdate1" class="newdate1" style="color: red"></div>
                  </div>
                  <?php
                     $sql = "SELECT `car` FROM product GROUP BY car";
                     $getcardata = mysqli_query($conn, $sql);
                          
                     ?>
                  
                  <div class="form-group col-md-4" id="pickup" style="display: block">
                     <label for="inputPassword4">Please Pickup My Car 
                        <span class="parsley-required" style="color: red">*</span>
                     </label>
                     <div class="w-100 mt-2">
                        <div class="custom-control custom-radio custom-control-inline">
                           <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" value="Yes" data-parsley-errors-container="#element" data-parsley-required-message="Please select car pickup or not?" oncheck="feedtype_change()" required="">
                           <label class="custom-control-label" for="customControlValidation2">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                           <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" value="No" data-parsley-errors-container="#element" data-parsley-required-message="Please select car pickup or not?" required="">
                           <label class="custom-control-label" for="customControlValidation3">No</label>
                        </div>
                        <div id="element"></div>
                     </div>
                     <div style="display: none;color:#000; background-color: #FFF3CD; border:dashed 1px" id="address"  class="pl-2 mt-2">
                      <small>Pick up & Drop confirmation will be given from the Workshop as per availability.</small>
                      </div>
                  </div>
                  <div class="form-group col-md-2" style="display: none" id="address">
                     <label for="inputAddress">Pincode<span class="parsley-required" style="color:red">*</span></label>
                     <input type="text" class="form-control" name="address" id="pincode" data-parsley-required-message="Please Enter Pincode"> 
                  </div>
               </div>
               <div class="my-4">
                  <h5>Car Details</h5>
               </div>
               <div class="row">
                  <div class="form-group col-md-4">
                     <label for="inputAddress">Registration No<span class="parsley-required" style="color: red">*</span></label>
                     <input type="text" class="form-control" id="inputAddress" name="reg_no" placeholder="Registration No" required="true" autocomplete="off" data-parsley-required-message="Please Enter your vehicle No"> 
                  </div>
                  <div class="form-group col-md-4">
                     <div>
                        <label>Car Model<span class="parsley-required" style="color: red">*</span></label>
                        <select id="car" name="car"  class="form-control" onchange="function_car()" aria-required="true" aria-invalid="false" required="" data-parsley-required-message="Please select car">
                           <option value="">Select Car</option>
                           <?php  while($row = $getcardata->fetch_assoc()) {  ?>         
                           <option value="<?php echo $row['car'];?>"><?php echo $row['car'];?></option>
                           <?php } ?>          
                        </select>
                     </div>
                     <span id="error_address" class="parsley-required"></span> 
                  </div>

                  <div class="form-group col-md-8 mt-4">
                     <div class="input-group mt-2">
                        <div class="input-group-prepend"> <span class="input-group-text">Your Message</span> </div>
                        <textarea class="form-control" name="s_message" aria-label="With textarea"></textarea>
                                              
                     </div>
                     <div class="">
                        <small style="color: #e82127;">Note: You will get confirmation from workshop. For queries, please contact on  +91 -<span id="show_phone_no">XXXXXXXXXX </span> </small>
                     </div> 
                  </div>
                  <div class="form-group">
                     <label>-</label>
                     <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
                     <div id="g-recaptcha-error"></div>
                     </div>
               </div>
               <p><a href="schedule-service-terms.php" style="color: #3e4095;">Terms & Conditions Apply</a></p>
              
               <div class="wrap-btn">
                  <button type="submit" name="submit" class="btn-effect btn-submit v2 triggerBookAShowRoomVisitButton">Book Now</button>
                </div>
            
            </form> -->
            <form action="send_mail_scheduleservice.php" id="schedule-form" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">
              <!--  <div class="my-4">
                  <h5>Contact Information</h5>
               </div> -->
               <div class="form-row">
                  <div class="form-group col-md-4">
                     <label for="inputAddress">Full Name<span class="parsley-required" style="color: red">*</span></label>
                     <input type="text" class="form-control" id="inputAddress" name="full_name" placeholder="Enter your Name" required="true" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter Name" autocomplete="off"> 
                  </div>
                  <div class="form-group col-md-4">
                     <label for="inputAddress2">Email<span class="parsley-required">(optional)</span> </label>
                     <input type="text" autocomplete="off" class="form-control" id="inputAddress2" name="email" placeholder="Enter your Email "  data-parsley-type="email" data-parsley-required-message="Please Enter Email Id" autocomplete="off"> 
                  </div>
                  <div class="form-group col-md-4">
                     <label for="inputAddress2">Phone No.<span class="parsley-required" style="color: red">*</span></label>
                     <input type="text" autocomplete="off" class="form-control" id="inputAddress2" name="phone_no" placeholder="Enter your Phone No." required="true" data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No" > 
                  </div>
                  <div class="form-group col-md-4">
                     <label for="inputAddress2">Select City<span class="parsley-required" style="color: red">*</span></label>
                     <select class="form-control city" required="true" aria-required="true" aria-invalid="false" name="city" id="city" onchange="check(event);check_date(eve);">
                        <option value=''>Select City</option>
                        <?php
                           $sql = "SELECT city FROM locations GROUP BY city";
                           $result = $conn->query($sql);
                           while($row=mysqli_fetch_assoc($result)) { 
                             echo "<option value='$row[city]'>$row[city]</option>"; 
                           } 
                           ?>
                     </select>
                  </div>
                  <div class="form-group col-md-4" id="response">
                     <label>Workshop Location<span class="parsley-required" style="color:red">*</span></label>
                     <select class="form-control" name="area" required="" id="area" aria-required="true" aria-invalid="false" data-parsley-required-message="Please select area">
                        <option value=''>Select area</option>
                     </select>
                  </div>
                  <div class="form-group col-md-4">
                     <label>Service Type<span class="parsley-required" style="color:red">*</span></label>
                     <select class="form-control" data-val="true" id="service" name="service" required="required" data-parsley-required-message="Please select service type">
                        <option value="">Select Services</option>
                        <option value="Free Service">Free Service</option>
                        <option value="Paid Service">Paid Service</option>
                        <option value="Accident Repair">Accident Repair</option>
                        <option value="Major Repair">Major Repair</option>
                        <option value="Minor Repair">Minor Repair</option>
                     </select>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="inputPassword4">Preffered Date for Service<span class="parsley-required" style="color: red">*</span></label>
                     <input type="text" autocomplete="off" class="form-control" id="datepicker_today" name="date" placeholder="Date" required="" data-parsley-required-message="Please Select a date" onchange="handler(event);">
                     <div id="newdate1" class="newdate1" style="color: red"></div>
                  </div>
                  <?php
                     $sql = "SELECT `car` FROM product GROUP BY car";
                     $getcardata = mysqli_query($conn, $sql);                          
                     ?>
                  <div class="form-group col-md-4">
                     <div>
                        <label>Car Model<span class="parsley-required" style="color: red">*</span></label>
                        <input type="text" autocomplete="off" class="form-control" id="car" name="car" placeholder="Car Model" required="" data-parsley-required-message="Please enter car model" onchange="handler(event);">
                        <!-- <select id="car" name="car"  class="form-control" onchange="function_car()" aria-required="true" aria-invalid="false" required="" data-parsley-required-message="Please select car">
                           <option value="">Select Car</option>
                           <?php  while($row = $getcardata->fetch_assoc()) {  ?>         
                           <option value="<?php echo $row['car'];?>"><?php echo $row['car'];?></option>
                           <?php } ?>          
                        </select> -->
                     </div>
                     <span id="error_address" class="parsley-required"></span> 
                  </div>
                  <div class="form-group col-md-4" id="pickup" style="display: block">
                     <label for="inputPassword4">Please Pickup My Car<span class="parsley-required" style="color: red">*</span></label>
                     <div class="w-100 mt-2">
                        <div class="custom-control custom-radio custom-control-inline">
                           <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" value="Yes" data-parsley-errors-container="#element" data-parsley-required-message="Please select car pickup or not?" oncheck="feedtype_change()" required="">
                           <label class="custom-control-label" for="customControlValidation2">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                           <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" value="No" data-parsley-errors-container="#element" data-parsley-required-message="Please select car pickup or not?" required="">
                           <label class="custom-control-label" for="customControlValidation3">No</label>
                        </div>
                        <div id="element"></div>
                     </div>
                     <div style="display: none;color:#000; background-color: #FFF3CD; border:dashed 1px" id="address"  class="pl-2 mt-2">
                      <small>Pick up & Drop confirmation will be given from the Workshop as per availability.</small>
                      </div>
                  </div>
                  <div class="form-group col-md-2" style="display: none" id="address">
                     <label for="inputAddress">Pincode<span class="parsley-required" style="color:red">*</span></label>
                     <input type="text" class="form-control" name="address" id="pincode" data-parsley-required-message="Please Enter Pincode"> 
                  </div>
               </div>
               <div class="my-4">
                  <h5>Car Details</h5>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-4">
                     <label for="inputAddress">Registration No<span class="parsley-required" style="color: red">*</span></label>
                     <input type="text" class="form-control" id="inputAddress" name="reg_no" placeholder="Registration No" required="true" autocomplete="off" data-parsley-required-message="Please Enter your vehicle No"> 
                  </div>
                  <div class="form-group col-md-8 mt-4">
                     <div class="col-md-12 input-group mt-2">
                        <div class="input-group-prepend"> <span class="input-group-text">Your Message</span> </div>
                        <textarea class="form-control" name="s_message" aria-label="With textarea"></textarea>
                                              
                     </div>
                     <div class="col-md-12">
                        <small style="color: #e82127;">Note: You will get confirmation from workshop. For queries, please contact on  +91 -<span id="show_phone_no">XXXXXXXXXX </span> </small>
                     </div> 
                  </div>
                  <div class="form-group mt-3">
                     <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
                     <div id="g-recaptcha-error"></div>
                     </div>
               </div>
               <p><a href="javascript:void(0)" style="color: #3e4095;"  data-toggle="modal" data-target=".bd-example-modal-lg">Terms & Conditions Apply</a><!-- <a href="schedule-service-terms.php" style="color: #3e4095;" data-toggle="modal" data-target="#exampleModal">Terms & Conditions Apply</a> --></p>
               <!--<button type="submit" name="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton">Sign in</button>-->
               <input type="submit" id="submit" name="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton" value="Submit"> 
            </form>
         </div>
      </div>
      <div class="row my-5 car-insuranceSect">
         <div class="col-sm-12 col-md-4 col-lg-4 text-center">
            <div class="my-3">
               <a href="maruti-insurance.php"> <img src="assets/images/car-insurance.jpg" class="resposive-img"> </a>
            </div>
            <h4><a href="maruti-insurance.php">Car Insurance</a></h4>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-4 text-center">
            <div class="my-3">
               <a href="#"> <img src="assets/images/old-car.jpg" class="resposive-img"> </a>
            </div>
            <h4><a href="#">Used Cars</a></h4>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-4 text-center">
            <div class="my-3">
               <a href="maruti-finance.php"> <img src="assets/images/finance.jpg" class="resposive-img"> </a>
            </div>
            <h4><a href="maruti-finance.php">Maruti Finance</a></h4>
         </div>
      </div>
</section>
  
 
</main>
<!-------------------------Model For Term & condition---------------------->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #3e4095;">Terms & Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="row">
            <div class="col-md-12">
               <ul>
                  <li> <i class="fa fa-check-circle"></i>  The owner of the car shall hold a valid Insurance Policy for the vehicle.</li><hr/>
                  <li> <i class="fa fa-check-circle"></i>  In case of any unfortunate accident during transit of vehicle from residence / office to workshop or vice- versa and or during Road Test neither Seva Automotive Private Limited nor It's representative shall be liable for any damage or the consequencest hereof.</li><hr/>
                  <li> <i class="fa fa-check-circle"></i>  The prescribed Pick up & Drop charges along with the vehicle service / repair (including taxes if any) bill shall be paid at the time of delivery.</li><hr/>
                  <li> <i class="fa fa-check-circle"></i>  The jobs as described in the iob card to be executed using necessary material & also understand that the vehicle is being stored and tested at.</li><hr/>
               <ul>
            </div>
         </div>   
      </div>
    </div>
  </div>
</div>
<!------------------------------------------------------------------------->
<?php require_once('footer.php'); ?>
