<?php 

if(isset($_POST['submit'])){
   
    $to = $_POST['email'];// this is your Email address
    // $admin="seva.ngp.ins1@marutidealers.com";
    // $adminnn="mayuri.hoh@gmail.com";

    $from = "it@sevagroup.co.in"; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $phone_no = $_POST['phone_no'];
    $city = $_POST['city'];
    $for_insurance = $_POST['for_insurance'];
    $reg_no = $_POST['reg_no'];
    $s_message = $_POST['s_message'];
    $conditions = $_POST['conditions'];
    if($city == 'Nashik'){
            $admin="seva.nsk.wm1@marutidealers.com";
            // $admin="mayuri.hoh@gmail.com";
        }elseif($city == 'Nagpur'){
             $admin="seva.ngp.ins1@marutidealers.com";
        }elseif($city == 'Nanded'){
             $admin="seva.nnd.ins1@marutidealers.com";
        }else{
            $admin="seva.dhl.ins1@marutidealers.com";
        }



    $subject = "Seva IT Support";
    $subject2 = "Enquiry for Insurance";
    $message = "Dear ".$full_name.","."\r\n\r\n"."Thanks for connecting with Seva group our executive will get back to you soon"."\r\n\r\n"."Thanks"."\r\n"."Seva";
   
    // $message2 = "Hello Team, Below are the details of the person requested for the Maruti Insurance service please call and proceed further"
    // ."\r\n\r\n"."Name : " .$full_name
    // ."\r\n"."Phone no : ". $phone_no
    // ."\r\n"."City : ".$city
    // ."\r\n"."Insurance For : ".$for_insurance
    // ."\r\n" . "Registration No: " .$reg_no
    // ."\r\n"."Customer message : ".$s_message
    // ."\r\n";

    $headers = "From:" . $from;
    $headers2 = "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers2 .= "From:" . $from. "\r\n" .
    "CC: it@sevagroup.co.in". "\r\n" .
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $message2='<html>';
$message2.='<body aria-readonly="false" style="cursor: auto;"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Hello Team,</strong></span></span><br />
<br />';
$message2.='<span style="font-size:12px"><strong><span style="font-family:arial,helvetica,sans-serif">Below are the details of the person requested for the Maruti Insurance service please call and proceed further.</span></strong></span><br />
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
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>City:</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$city.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Insurance For :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$for_insurance.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Car No :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$reg_no.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Customer Message :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif"><span>'.$s_message.'</span></span></span></span></td>
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
    mail($admin,$subject2,$message2,$headers2); // admin
   
     include('connection.php');
        date_default_timezone_set("Asia/Kolkata");

        $data_ = date('d/m/Y h:i:s A');

        $sql = "INSERT INTO `insurance`(`name`, `email`, `phone_no`, `city`, `insurance_for`, `car_no`, `message`) VALUES ('$full_name','$to','$phone_no','$city','$for_insurance','$reg_no','$s_message')";
        

        if ($conn->query($sql) === TRUE) {

          //echo "New record created successfully";

        } else {

          echo "Error: " . $sql . "<br>" . $conn->error;

        }

     header("Location: thank-you.php");
    }
?>