<?php 
$servername = "localhost";

$username = "root";  //marutise_new_sev
//$username = "marutise_seva_new";  //marutise_new_sev
$password = "";
//$password = "HQX2BOQZ2PBO";
//$dbname = "marutise_seva_updated";
$dbname = "marutise_new_seva";

$conn    = new mysqli($servername, $username, $password, $dbname);

        // Check connection

        if ($conn->connect_error) {

          die("Connection failed: " . $conn->connect_error);

        }
?>