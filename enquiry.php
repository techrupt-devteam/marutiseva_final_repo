<?php    
$title="Enquiry Car Quote | Maruti Suzuki Showroom in Nashik, Nagpur | SEVA"; 
?>
<?php 
 $pgDesc="Get A Car Quote or Enquiries about car at SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur, Nanded, Dhule, Wardha, Nandurbar. Reply to your inquiry in time";
 $pgKeywords="Maruti Suzuki, Maruti Suzuki Insurance, Maruti Service Center, Maruti Suzuki Finance, services, service center,Maruti Suzuki Showroom, Nashik, Nagpur, car service, maruti suzuki service center, Maruti Insurance, enquiry, inquiry, get a quote, car quote, wardha, nanded, dhule, nandurbar";
   include('connection.php');
 include 'header.php'; 
$sql = "SELECT product_cat.id AS id, product_cat.car AS car FROM product INNER JOIN product_cat ON product.car = product_cat.id GROUP BY product.car";
  $result = mysqli_query($conn, $sql);

?>
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
</style>
<main>
<section class="feature-car mt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title mb-3">
          <h2>Enquiry</h2>
          <div class="separator"></div>
        </div>
      </div>
    </div>
    <div class="my-1 mb-5">
      <div class="formsection mt-0">
        <form action="send_mail_enquiry.php" method="post" data-parsley-validate="parsley">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="inputAddress2">Full Name <span class="parsley-required" style="color:red">*</span></label>
              <input type="text" class="form-control" name="full_name" id="inputAddress" placeholder="Full Name" required data-parsley-required-message="Please Enter Name"  data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress2">Email <span class="parsley-required" style="color:red">*</span></label>
              <input type="text" class="form-control" name="email" id="inputAddress2" placeholder="Enter your Email " required data-parsley-required-message="Please Enter Email Id" data-parsley-type="email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress2">Phone No <span class="parsley-required" style="color:red">*</span></label>
              <input type="text" class="form-control" name="phone_no" id="inputAddress2" placeholder="Enter your Phone No." required data-parsley-type="digits" maxlength="10" data-parsley-required-message="Please Enter Contact No" data-parsley-pattern=^[6-9]\d{9}$  data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress2">City<span class="parsley-required" style="color:red">*</span></label>
              <select class="form-control city" required="true"  aria-required="true" aria-invalid="false" name="city" id="city" onchange="check(event);">
                <option value="Nagpur">Nagpur</option>
                <option value="Nanded">Nanded</option>
                <option value="Dhule">Dhule</option>
                <option value="Nandurbar">Nandurbar</option>
                <option value="Nashik">Nashik</option>
                <option value="Hinganghat">Hinganghat</option>
                <option value="Wardha">Wardha</option>
              </select>
            </div>

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

            <div class="form-group col-md-12">
              <label for="inputAddress2">Description</label>
              <textarea class="form-control" name="desc" aria-label="With textarea"></textarea>
            </div>
          </div>
          <div class="form-group">
            <p style="font-size:12px">
              <span class="parsley-required">*</span>
              <input type="checkbox" id="FormChkBoxBook6" name="FormChkBox" style="vertical-align: sub;" required data-parsley-required-message="Please indicate that you accept the Terms and Conditions">
              I agree <a href="disclaimer.php" style="color: blue" target="_blank">Terms and Conditions.</a> by clicking the ‘Continue’ button below and I am explicitly soliciting a call from Seva Maruti. Or its partners on my ‘Mobile’.</p>
          </div>
          
            <div class="wrap-btn">
              <!-- <input type="submit" name="submit" class ="btn-effect btn-submit v2" value="Submit Now"> -->
              <button type="submit"  name="submit" class="btn-effect btn-submit v2">Submit now</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>
</main>
<script src="assets/js/jquery1.12.0-min.js"></script>
<script src="assets/js/parsley.js"></script>
<script type="text/javascript">
  
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

</script>
<?php  
require_once('footer.php');
?>
