<?php 

if(isset($_POST['submit'])){

    $to = $_POST['email'];// this is your Email address
    $admin = "enquiry@marutiseva.com";
    // $adminnn="mayuri.hoh@gmail.com";
    $from = "it@sevagroup.co.in"; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $feedback = $_POST['feedback'];

    $subject = "Seva IT Support";
    $subject2 = "Feedback updates";
    
    $message = "Dear ".$full_name.","."\r\n\r\n"."Thanks for the feedback on your experience .We sincerely appreciate your insight because it helps us build a better customer experience."."\r\n\r\n"."Thanks"."\r\n"."Seva";

    // $message2 = "Hello Team, Below are the details of the person requested for the Maruti Finance service please call and proceed further."
    // ."\r\n\r\n"."Name : " .$full_name
    // ."\r\n"."Phone no : ". $phone_no
    // ."\r\n"."City : ".$city
    // ."\r\n"."Car model : ".$model
    // ."\r\n" . "Annual Income : " .$annual_income
    // ."\r\n"."Purchase Time : ".$purchase_time
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
	$message2.='<span style="font-size:12px"><strong><span style="font-family:arial,helvetica,sans-serif">Below are the details of customer feedback.</span></strong></span><br />
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
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>City :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$city.'</span></span></td>
		</tr>';
	$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Car Model :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$model.'</span></span></td>
		</tr>';
	$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Annual Income :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$annual_income.'</span></span></td>
		</tr>';
	$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Purchase Time :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$purchase_time.'</span></span></td>
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
    // mail($to,$subject,$message,$headers); //customer
    // mail($admin,$subject2,$message2,$headers2); // admin
	 include('connection.php');
        date_default_timezone_set("Asia/Kolkata");

        $data_ = date('d/m/Y h:i:s A');

        $sql = "INSERT INTO `feedback`(`name`, `email`, `feedback`) VALUES ('$full_name','$to','$feedback')";



        if ($conn->query($sql) === TRUE) {

          //echo "New record created successfully";

        } else {

          echo "Error: " . $sql . "<br>" . $conn->error;

        }

     header("Location: thank-you.php");
    }
?>