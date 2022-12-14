<?php
$name =$_POST['name'];
$visitor_email=$_POST['email'];
$visitor_phone=$_POST['phone'];
$message=$_POST['message'];

$email_from ="vaibhavrandale800@gmail.com";
$email_subject="New Enquiry";
$email_body="User name:Name: $name. \n"
             "User Emaiil: $visitor_email. \n".
              "User Phone: $visitor_phone. \n";

              $to="vaibhavrandale24@gmail.com"
              $headers= "Form: $email_from \r\n";
              $headers= "Reply to: $visitor_email \r\n";
              mail($to,$email_subject,$email_body,$headers);
 
              header("location: index.html")



?>