<?php    
$title="Online Car Booking | Maruti Suzuki Showroom in Nashik, Nagpur | SEVA"; 
?>
<?php 
 $pgDesc="Book your favorite Maruti Suzuki car online from SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur, Nanded, Dhule, Wardha, Nandurbar. Hassle free ebook car";
 $pgKeywords="Maruti Suzuki, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Suzuki Finance, services, service center, car service, maruti suzuki service center, Maruti Insurance, Online Car Booking, ebook Car, Car Booking, Book car Online, wardha, nanded, dhule, nandurbar";
 include 'header.php'; 
 include('connection.php');
date_default_timezone_set("Asia/Kolkata");
$data_ = date('d/m/Y h:i:s A');
$sql = "SELECT * FROM `offers`";
$result = $conn->query($sql);
?>
<main>
<section class="feature-car mt-3 mb-2">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="section-title mb-3"> <span>Offers</span>
        <h2>Latest Offers</h2>
        <div class="separator"></div>
      </div>
    </div>
  </div>
  <div class="mt-3 mb-5 pb-5 latest-offer">
    <div class="row">
      <?php 
    
          if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   ?>
      <div class="col-md-6"> <a href="offer-enquiry.php?id=<?php echo $row['id'];?>"> <img class="d-block w-100 lazyload" src="http://marutiseva.com<?php echo $row['image'];?>" alt="latest offer"> </a> </div>
      <?php
      }
    }
    ?>
    </div>
  </div>
</div>
</main>
<script src="assets/js/jquery1.12.0-min.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/parsley.js"></script>
<?php  
require_once('footer.php');
?>
