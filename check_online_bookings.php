<?php 
include('connection.php');

 $data = $_POST['data1'];
 $city = $_POST['city'];
 $result="SELECT * from booking where(`date`='$data' AND `city`='$city')";
                $d = $conn->query($result); 
                $num_rows = mysqli_num_rows($d);
                if($num_rows>40){
                    echo "true";
                }else{
                    echo "false";

                }
?>




