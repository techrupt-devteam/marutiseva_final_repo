<?php
include('connection.php');
if(isset($_POST["city"])){
$city = $_POST["city"];
$is_active = 1;

$dd_data = "";
    $sql = "SELECT `area`,`contact_no` FROM `locations` WHERE `is_active` = '1' AND `city` = '".$city."'";
    $result = $conn->query($sql);
    $cnt = 0;
    while($row=mysqli_fetch_assoc($result))
    { 
      if($cnt == 0) {
        $contact_no = $row['contact_no'];  
      }
     
      $dd_data .= "<option value='$row[area]'>$row[area]</option>"; 
      $cnt++;
    } 
}
echo $dd_data."|".$contact_no;
?>