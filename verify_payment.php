<?php

session_start();
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
if($_POST)
{
            $api      = new Api('rzp_live_IZMQ4kxcwLhCKH1', 'aIRBD9hnISfVEJYsbjDSVuFr');
           
            $payment  = $api->payment->fetch($_POST['razorpay_payment_id'])->capture(array('amount'=>100));
            $payment  = $api->payment->fetch($_POST['razorpay_payment_id']);
       

        if($payment->status=="captured")
        {
          echo 'captured';die;
        }
        print_r($payment);die;
}
else
{
  echo 'post error';
}

?>