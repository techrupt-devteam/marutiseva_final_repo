<?php    

$title      = "Payment | Seva Nashik";

$pgDesc     = "";

$pgKeywords = "";

 include 'header.php'; 









if($_POST)

{

  //print_r($_POST);

    $name            = $_POST['name'];

    $email           = $_POST['email'];

    $mobile          = $_POST['mobile'];

    $city            = $_POST['city'];


    $address         = $_POST['address'];

    $car             = $_POST['car'];

    $varient         = $_POST['varient'];

    $color           = $_POST['color'];
    $date           = $_POST['date'];

    $roadprice       = $_POST['roadprice'];

    $special_request = $_POST['special_request'];

    $finance         = $_POST['finance'];

    if(empty($name) || empty($email) || empty($mobile) || empty($city) || empty($car) || empty($color) || empty($roadprice) || empty($finance))

    {

      echo "<script>alert('Please enter valid data! Please try again.');window.location.href = 'https://www.marutiseva.com/online-booking.php';</script>";

    }



    $characters       = '0123456789abcdefghijklmnopqrstuvwxyz';

    $charactersLength = strlen($characters);

    $randomString     = '';

    

    for ($i = 0; $i < 18; $i++) {

        $randomString .= $characters[rand(0, $charactersLength - 1)];

    }



    if(isset($_FILES["adhar_cart"]["name"]) && !empty($_FILES["adhar_cart"]["name"]) && isset($_FILES["pan_card"]["name"]) && !empty($_FILES["pan_card"]["name"]))

    {

        $file_name        = $_FILES["pan_card"]["name"];

         

        $file_tmp         = $_FILES["pan_card"]["tmp_name"];

        $ext              = pathinfo($file_name,PATHINFO_EXTENSION);

        $random_file_name = $randomString.'0.'.$ext;

        $latest_image     = 'admin/upload/pan/'.$random_file_name;



        if(!move_uploaded_file($file_tmp,$latest_image))

        {

          //echo "<script>alert('Please upload Pan card. Please try again.');window.location.href = 'http://doctoronhire.com/seva/online-booking.php';</script>";

        }

        else

        {

        }



        $file_name1        = $_FILES["adhar_cart"]["name"];

        $file_tmp1         = $_FILES["adhar_cart"]["tmp_name"];

        $ext1              = pathinfo($file_name1,PATHINFO_EXTENSION);

        $random_file_name1 = $randomString.'1.'.$ext1;

        $latest_image1     = 'admin/upload/adhar/'.$random_file_name1;

        if(!move_uploaded_file($file_tmp1,$latest_image1))

        {

          //echo "<script>alert('Please upload Adhar card. Please try again.');window.location.href = 'http://doctoronhire.com/seva/online-booking.php';</script>";

        }





        //$conn->close();

        //print_r('here');

    }

    else

    {

      //echo "<script>alert('Please upload Pan card & Adhar card.');window.location.href = 'http://doctoronhire.com/seva/online-booking.php';</script>";



    }

        include('connection.php');

        date_default_timezone_set("Asia/Kolkata");
        $data = date('d/m/Y h:i:s A');
        $sql = "INSERT INTO booking ( name, email, mobile, city,date, address, car, varient, color, road_cost, special_request, finance, adhar_card, pan_card, booking_date, transaction_id, amount, created_at) VALUES ('$name', '$email', '$mobile', '$city','$date','$address', '$car', '$varient', '$color', '$roadprice', '$special_request', '$finance', '$latest_image1', '$latest_image', 'null', 'null', '5000', '$data')";
      

        



        if ($conn->query($sql) === TRUE) {

          //echo "New record created successfully";

        } else {

          echo "Error: " . $sql . "<br>" . $conn->error;

        }

}

else

{

  echo "<script>alert('Something went wrong! Please try again.');window.location.href = 'https://www.marutiseva.com/online-booking.php';</script>";

}

?>

<main>
  <div class="container">
    <div class="my-5">
      <h2 class="innerpageHeading">Pay Now</h2>
      <div class="row">
        <div class="formsection col-md-10 mx-auto">
         <div class="thank-youpage">
  <div class="my-5">
 <div>
    <div class="my-0">
  <div class="form-row pb-3">
            <div class="form-group col-lg-12">
              <center>
                <i class="mdi mdi-wallet"></i><br>
                <label for="inputAddress">Token Amount</label>
                <h3><span style="font-size: 38px"><b>5000</b></span></h3>
              </center>
            </div>
          </div>
          <center>
            <button type="button" id="rzp-button" class="button button-purple button-180 triggerBookAShowRoomVisitButton">Pay Now</button>
          </center>
          <form id="web_order_summery_form" action="https://www.marutiseva.com/admin/admin/capture_payment" method="post">
            <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id">
            <input type="hidden" id="token_id" name="token_id" value="<?php echo base64_encode($conn->insert_id);?>">
          </form>

    <div class="my-4"><h5>Customer Details</h5></div>


<div class="box-body">
                    <div class="form-group p-3 bg-white">
                        <table class="table table-hover text-left" width="100%">
                            <tr>
                                <td style="border-top:none">
                                    <label for="oldpassword">Full Name</label>: </td>
                                    <td style="border-top:none">           
                                    <span><?php echo $name ?></span>    
                                </td>
                                <td style="border-top:none">
                                    <label for="oldpassword">Contact No</label>:</td>
                                    <td style="border-top:none">            
                                    <span><?php echo $mobile ?></span>
                                </td>
                            </tr>
                            
                             <tr>
                                <td>
                                    <label for="oldpassword">Email Id</label>: </td>       
                                    <td>           
          
                                    <span><?php echo $email ?></span>    
                                </td>
                                <td>
                                    <label for="oldpassword">City</label>:</td>
                                    <td>           
            
                                    <span><?php echo $city ?></span>    
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <label for="oldpassword">Address</label>: </td>
                                    <td>           
           
                                    <span><?php echo $address?></span>    
                                </td>
                                <td>
                                    <label for="oldpassword">Car</label>: </td>
                                    <td>           
           
                                    <span><?php echo $car ?></span>    
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <label for="oldpassword">Car varient</label>:</td> 
                                     <td>           
        
                                    <span><?php echo $varient ?></span>    
                                </td>
                                <td>
                                    <label for="oldpassword">Car Color</label>: </td>  
                                    <td>           
         
                                    <span><?php echo $color ?></span>    
                                </td>
                            </tr>
                            <tr class="table-secondary">
                                <td colspan="3">
                                    <label for="oldpassword">On road cost</label>:</td>
                                    
                                                                        <td>           
            
                                   <strong> <span><?php echo $roadprice?></span>    </strong>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
              
              <!--<button type="submit" name="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton">Sign in</button>-->


    </div>
        
        </div></div></div>
        </div>
      </div>
    </div>
    <div class="row my-5">
    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
    <div class="my-3">
	<a href="maruti-insurance.php">
    <img src="assets/images/car-insurance.jpg" class="resposive-img">
	</a>
    </div>   
	<h4><a href="maruti-insurance.php">Car Insurance</a></h4>   
	</div>
    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
	<div class="my-3">
	<a href="#"> 
	<img src="assets/images/old-car.jpg" class="resposive-img">
	</a>
	</div>
	<h4><a href="#">Used Cars</a></h4> 
	</div>
    <div class="col-sm-12 col-md-4 col-lg-4 text-center">   
   <div class="my-3">
   <a href="maruti-finance.php"> 
   <img src="assets/images/finance.jpg" class="resposive-img">
   </a>
   </div>
 <h4><a href="maruti-finance.php">Maruti Finance</a></h4>
	</div>
    </div>
  </div>
</main>

<!-- End Cart -->

<?php

        $amt       = 500000;

       /* $name      = 'suraj';

        $email     = 'suraj.hoh@gmail.com';

        $mobile_no = '9766453326';

        $address   = 'nashik';*/

    ?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
<script src="assets/js/parsley.js"></script>
<script type="text/javascript">

     

      var options = {

    "key": "rzp_live_qW1poYrCW3uQa9", 

    //"amount": 100, 

    "amount": "<?= $amt ?>", 

    "currency": "INR",

    "name": "Seva",

    "description": "",

    "image": "assets/images/logo.png",



    "handler": function (response){

      console.log(response);

      $('#razorpay_payment_id').val(response.razorpay_payment_id);

      document.getElementById("web_order_summery_form").submit();

    },

    "prefill": {

        "name": "<?= $name?>",

        "email": "<?= $email?>",

        "contact": "<?= $mobile?>"

    },

    "notes": {

        "address": "<?= $address?>"

    },

    "theme": {

        "color": "#3e4095"

    }

};

var rzp1 = new Razorpay(options);

document.getElementById('rzp-button').onclick = function(e){

  rzp1.open();

  e.preventDefault();

}

    </script>
<?php  

require_once('footer.php');

?>
