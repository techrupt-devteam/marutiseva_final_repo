<?php 

include('connection.php');
$sql = "SELECT product_cat.id AS id, product_cat.car AS car FROM product INNER JOIN product_cat ON product.car = product_cat.id  Where product_cat.id = ".$_POST['car']." GROUP BY product.car";
$result = mysqli_query($conn, $sql);  
$row = $result->fetch_assoc();

if(isset($_POST['submit'])){
  
    $to = $_POST['email'];// this is your Email address
    // $admin="enquiry@marutiseva.com";
    // $admin="mayuri.hoh@gmail.com";
    $from = "it@sevagroup.co.in"; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $phone_no  = $_POST['phone_no'];
    $desc      = $_POST['desc'];
    $city      = $_POST['city'];
    $car       = $_POST['car'];
    $varient   = $_POST['varient'];
    $color     = $_POST['color'];
    if($city == 'Nagpur'){
            $admin="seva.ngp.asm1@marutidealers.com,seva.ngp.smd1@marutidealers.com";
            // $admin="mayuri.hoh@gmail.com";
        }
    if ($city == 'Nanded') {
           $admin="seva.nnd.sm2@marutidealers.com";
        }
    if ($city == 'Dhule') {
           $admin="seva.dhl.sm1@marutidealers.com";
        }
    if ($city == 'Nandurbar') {
            $admin="seva.ndb.sale1@marutidealers.com";
        }
    if ($city == 'Nashik') {
           $admin="seva.nsk.sm1@marutidealers.com,seva.nsk.fin1@marutidealers.com,seva.nsk.rmk@marutidealers.com";
        }
    if ($city == 'Hinganghat') {
           $admin="seva.hgt.sal1@marutidealers.com";
        }
    $headers = "From:" . $from;
    $headers2 = "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers2 .= "From:" . $from. "\r\n" .
    "CC: it@sevagroup.co.in". "\r\n" .
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
   
    $subject = "Seva IT Support";
    $subject2 = "Enquiry For Seva";
    $message = "Dear ".$full_name.","."\r\n\r\n"."Thanks for connecting with Seva group our executive will get back to you soon"."\r\n\r\n"."Thanks"."\r\n"."Seva";
    
    
$message2='<html>';
$message2.='<body aria-readonly="false" style="cursor: auto;"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Hello Team,</strong></span></span><br />
<br />';
$message2.='<span style="font-size:12px"><strong><span style="font-family:arial,helvetica,sans-serif">Below are the details of the person send enquiry please call and confirm the appointment</span></strong></span><br />
&nbsp;';
$message2.='<table border="0" cellpadding="2" cellspacing="2" style="width:500px;background-color:#D3D3D3">
	<tbody>';
	$message2.='<table border="0" cellpadding="2" cellspacing="2" style="width:400px;background-color:#D3D3D3" align="center">
	<tbody><tr><td>';
	    $message2.='<tr>
			<td colspan="2><span style="color:#000000"><center><span style="font-size:14px"><strong><span>Customer Details</span></strong></span></span></center></td>
		</tr>';
		 $message2.='<tr>
			<td style="width: 153px;">&nbsp;</td>
			<td style="width: 234px;">&nbsp;</td>
		</tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Source:</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>Seva</span></span></td>
        </tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Customer Name :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$full_name.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Contact No :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$phone_no.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Email ID :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$to.'</span></span></td>
		</tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>City :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$city.'</span></span></td>
        </tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Description :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$desc.'</span></span></td>
		</tr>';
        
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Car :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$row['car'];.'</span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Varient :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$varient.'</span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Color :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$color.'</span></span></td>
        </tr>';
		$message2.='<tr>
			<td style="width: 153px;">&nbsp;</td>
			<td style="width: 234px;">&nbsp;</td>
			</td>
			</tr>
	    </tbody>
        </table>
		</tr>
	</tbody>
</table>
<br />';
$message2.='<span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Thank you</strong></span></span></body>
</html>';




    mail($to,$subject,$message,$headers); //customer
    mail($admin,$subject2,$message2,$headers2); //admin


$full_name = $_POST['full_name'];
    $message = "Dear ".$full_name.","."\r\n\r\n"."Thanks for connecting with Seva group our executive will get back to you soon"."\r\n\r\n"."Thanks"."\r\n"."Seva";
    
    $data = [
        'phone' => '91'.$phone_no, // Receivers phone
        'body' => $message, // Message
    ];
    $json = json_encode($data); // Encode data to JSON
    // URL for request POST /message
    $token = '0l2jczt5p4rwrvwg';
    $instanceId = '172422';
    $url = 'https://api.chat-api.com/instance172422/sendMessage?token=0l2jczt5p4rwrvwg';
    // Make a POST request
    $options = stream_context_create(['http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $json
        ]
    ]);
    $result = file_get_contents($url, false, $options);

        date_default_timezone_set("Asia/Kolkata");

        $data_ = date('d/m/Y h:i:s A');

        $sql = "INSERT INTO `enquiries`(`name`, `email`, `mobile`, `desc`,`city`,`car`,`varient`,`color`) VALUES ('$full_name',' $to','$phone_no','$desc','$city','$car','$varient','$color')";

        if ($conn->query($sql) === TRUE) {

          //echo "New record created successfully";

        } else {

          echo "Error: " . $sql . "<br>" . $conn->error;

        }

     header("Location: thank-you.php");
    }
?>
