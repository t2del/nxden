<?php
   $to = "inquiry@nxden.com"; // <– replace with your address here
   $subject = "Inquiry - ".$_POST['name'];
   $message = $_POST['message'];
   $from = $_POST['email'];
   $headers = "From: " . $_POST['name'] .' - ' . $from;
   if(mail($to,$subject,$message,$headers)) {
   echo "Mail Sent.";
   }
?>