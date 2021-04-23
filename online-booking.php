<?php    
  include('connection.php');
$title="Online Car Booking | Maruti Suzuki Showroom in Nashik, Nagpur | SEVA";  
 $pgDesc="Book your favorite Maruti Suzuki car online from SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur, Nanded, Dhule, Wardha, Nandurbar. Hassle free ebook car";
 $pgKeywords="Maruti Suzuki, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Suzuki Finance, services, service center, car service, maruti suzuki service center, Maruti Insurance, Online Car Booking, ebook Car, Car Booking, Book car Online, wardha, nanded, dhule, nandurbar";
 include 'header.php'; 
        $data = date('d/m/Y h:i:s A');
        
        $sql = "SELECT product_cat.id AS id, product_cat.car AS car FROM product INNER JOIN product_cat ON product.car = product_cat.id GROUP BY product.car";
        $result = mysqli_query($conn, $sql);
       if(! $result ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="assets/js/jquery1.12.0-min.js"></script> 
<script src="assets/js/parsley.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js" defer></script>
<script type="text/javascript">
$( document ).ready(function() {
    $("#datepicker_today").datepicker({
        format: "yyyy-mm-dd" ,
        daysOfWeekDisabled: [0],
        startDate:'today',
        autoclose:'true',
      }).val();
  });
  function function_car()
  {
      var pathname = $(location).attr("href");
      var pathUrl = pathname.substring(0, pathname.lastIndexOf('/') + 1);
       var selectValue = $("#car").val();           
        $.ajax({
            url: pathUrl+'admin/admin/getvarient',
            type: 'post',
            data: {id: selectValue},
            success: function (data) 
            {
              $("#varient").html(data);
            }
        });
  }
  function function_varient()
  {
       var pathname = $(location).attr("href");
       var pathUrl = pathname.substring(0, pathname.lastIndexOf('/') + 1);
       var selectValue = $("#varient").val();            
       var car = $("#car").val();  
       $.ajax({
            url: pathUrl+'admin/admin/getcolor',
            type: 'post',
            data: {varient: selectValue,car: car},
            success: function (data) 
            {
              $("#__color").html(data);
            }
        });
        //$("#city_id_").empty();
  }
  function function_color()
  {
       var pathname = $(location).attr("href");
       var pathUrl = pathname.substring(0, pathname.lastIndexOf('/') + 1);
       var selectValue = $("#__color").val();            
       var varient = $("#varient").val();            
       var car = $("#car").val();            
        //$("#city_id_").empty();
        $.ajax({
            url: pathUrl+'admin/admin/getprice',
            type: 'post',
            data: {id: selectValue, varient: varient, car: car},
            success: function (data) 
            {
              $("#roadprice_span").html(data);
              $("#roadprice").val(data);
            }
        });
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
function handler(e){
  var date=e.target.value;
  var city = $("#city").val();
   $.ajax({
    url: "check_online_bookings.php", 
    type:'POST',
    dataType : 'html',
    data:{
    data1 : date, city: city // will be accessible in $_POST['data1'] & $_POST['city']
    },
    success: function(data){
      data = data.replace(/(\r\n|\n|\r)/gm,"");
      if(data=='true')
      {
        $("#datepicker_today").val("");
        document.getElementById('newdate').innerHTML = '<span style="color:red;">Please Select Next date as Todays Servicings are full.</span>';
      }else{
        document.getElementById('newdate').innerHTML = '';
      }
  }});
}
function check(e){
  var city=e.target.value;
  var date = $("#datepicker_today").val();
   $.ajax({
    url: "check_online_bookings.php", 
    type:'POST',
    dataType : 'html',
    data:{
    data1 : date, city: city // will be accessible in $_POST['data1'] & $_POST['city']
    },
    success: function(data){
      data = data.replace(/(\r\n|\n|\r)/gm,"");
      if(data=='true')
      {
        $("#datepicker_today").val("");
        document.getElementById('newdate').innerHTML = '<span style="color:red;">Please Select Next date as Todays Bookings are full.</span>';
      }else{
        document.getElementById('newdate').innerHTML = '';
      }
  }});
}
</script>
<style type="text/css">
  .parsley-required{
    color: red;
  }
  .parsley-min{
    color: red;
  }
</style>
<main>
<section class="feature-car mt-5 pb-5 mb-5">
  <div class="container">
    <div class="section-title mb-3">
      <span>Seva Automotive</span>
      <h2>Online Booking</h2>
      <div class="separator"></div>
   </div>
    <div class="formsection">
  <form action="payment.php" method="post" role="form" data-parsley-validate="parsley" enctype="multipart/form-data" onsubmit="return submitUserForm();">
    <div class="my-4"><h5>Contact Information</h5></div>
    <div class="form-row pb-3" style="border-bottom:1px solid #d0dbe5">
      <div class="form-group col-md-4">
        <label for="inputAddress">Full Name</label><span class="parsley-required">*</span>
        <input type="text" class="form-control" id="inputAddress" name="name" placeholder="Enter your Full Name" required="true" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please enter name">
      </div>
      <div class="form-group col-md-4">
        <label for="inputAddress2">Email </label><span class="parsley-required">*</span>
        <input type="email" class="form-control" id="inputAddress2" name="email" placeholder="Enter your Email " required="" data-parsley-type="email" data-parsley-required-message="Please Enter Email Id">
      </div>
      <div class="form-group col-md-4">
        <label for="inputAddress2">Mobile No. </label><span class="parsley-required">*</span>
        <input type="number" class="form-control" id="inputAddress2" name="mobile" placeholder="Enter your Mobile No." required="" data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No">
      </div>
      <div class="form-group col-md-4">
        <label for="inputAddress2">Select City</label><span class="parsley-required">*</span>
      <select class="form-control" name="city" id="city" aria-required="true" aria-invalid="false" required="" onchange="check(event);">
      <option value="Nagpur">Nagpur</option>
        <option value="Wardha">Wardha</option>
        <option value="Nanded">Nanded</option>
        <option value="Dhule">Dhule</option>
        <option value="Nandurbar">Nandurbar</option>
        <option value="Nashik">Nashik</option>
        </select>
      </div>
      <div class="form-group col-md-4">
      <label for="inputPassword4">Date<span class="parsley-required" style="color: red">*</span></label>
      <input type="text" class="form-control" id="datepicker_today" name="date" placeholder="Date" required="true" data-parsley-required-message="Please Select a date" onchange="handler(event);">
    <div id="newdate" class="newdate"></div>
    </div>
      <div class="form-group col-md-4">
        <div>
          <label>Address</label>
          <textarea class="form-control" name="address" aria-label="With textarea" rows="1" data-parsley-errors-container="#error_address"></textarea>
        </div>
      </div>
    </div>
    <div class="my-4"><h5>Car Details</h5></div>
    <div class="form-row pb-3" style="border-bottom:1px solid #d0dbe5">
      <div class="form-group col-md-4">
        <label for="inputAddress2">Car </label><span class="parsley-required">*</span>
        <select id="car" name="car"  class="form-control" onchange="function_car()" aria-required="true" aria-invalid="false" required="" data-parsley-required-message="Please select car">
            <option value="">Select Car</option>
          <?php  while($row = $result->fetch_assoc()) {
           ?>
            <option value="<?php echo $row['id'];?>"><?php echo $row['car'];?></option>
          <?php } ?>
        </select>
      </div>        
      <div class="form-group col-md-4">        
        <label for="inputAddress2"> Car Variant </label><span class="parsley-required">*</span>        
        <select id="varient" name="varient"  class="form-control" onchange="function_varient()" aria-required="true" aria-invalid="false" required="" data-parsley-required-message="Please select car varient">    
            <option value="">Select Variant</option> 
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputAddress2"> Color</label><span class="parsley-required">*</span>
        <select id="__color" class="form-control" onchange="function_color()" name="color" aria-required="true" aria-invalid="false" required="" data-parsley-required-message="Please select color" >
            <option value="">Select Color</option>
        </select>
      </div>
    <div class="form-group col-md-4">
      <label for="inputAddress2">Ex-showroom Cost</label><br>
      <label id="roadprice_span" class="text-danger font-weight-bold">Rs.0.00</label>
    </div>
      <input type="hidden" class="form-control" name="roadprice" id="roadprice" placeholder="On Road Cost" required="">
    <div class="form-group col-md-4">
      <label for="inputAddress2">Any Special Request</label>
      <textarea class="form-control" name="special_request" aria-label="With textarea" rows="1"></textarea>
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress2">Do you Require Finance</label><span class="parsley-required">*</span>
      <div class="mt-2">
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline1" name="finance" value="Yes" class="custom-control-input" data-parsley-errors-container="#error_finance"  required="" data-parsley-required-message="Please select need finance or not?">
          <label class="custom-control-label" for="customRadioInline1">Yes</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline2" name="finance" class="custom-control-input" value="No" required="" data-parsley-required-message="Please select need finance or not?">
          <label class="custom-control-label" for="customRadioInline2">No</label>
        </div>
         <span id="error_finance" class="parsley-required"></span>
      </div>
      </div>
    <!-- <div class="form-group col-md-4">
    <label for="inputAddress2">Receipt</label>
     <div class="mt-2">
     </div>
    </div> -->
    </div>
    <div class="my-4"><h5>Documents Required</h5></div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputAddress2">Adhar Card</label>
          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile02" name="adhar_cart" data-parsley-errors-container="#error_adhar" >
              <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
            </div>
            <!--  <div class="input-group-append">
            <span class="input-group-text" id="">Upload</span>
            </div> -->
          </div>
            <span id="error_adhar" class="parsley-required"></span>
        </div>
        <div class="form-group col-md-4">
          <label for="inputAddress2">Pan Card</label>
          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile02" name="pan_card" data-parsley-errors-container="#error_pancard" >
              <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
            </div>
            <!-- <div class="input-group-append">
            <span class="input-group-text" id="">Upload</span>
            </div> -->
          </div>
            <span id="error_pancard" class="parsley-required"></span>
        </div>
      </div>
      <div class="form-row">
  <div class="form-group col-md-4">
      <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
      <div id="g-recaptcha-error"></div>
    </div>
  <div class="form-group col-md-8">
    <div class="form-check mt-3">
        <input type="checkbox" class="form-check-input" name="conditions" required="true" id="exampleCheck1" data-parsley-required-message="Please indicate that you accept the Terms and Conditions">
        <label class="form-check-label" for="exampleCheck1"> I Agree With <a href="disclaimer.php" style="color: blue">Terms and Conditions.</a><span class="red">*</span></label>
      </div>
    </div>
  </div>  
        <span id="error_terms" class="parsley-required"></span>
      <button type="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton">Submit</button>
</form>
    </div>
</div>
  </section>
</main>
<?php  
require_once('footer.php');
?>