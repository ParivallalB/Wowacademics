<?php 
//

    $to = "wowacademics@gmail.com"; // this is your Email address
    $first_name = $_POST['first_name'];
   $contactno = $_POST['contactno'];
  $email = $_POST['email'];
    $enquiry = $_POST['enquiry'];
    $subject = "Form submission";
 $headers = "From:" . $email;

    $message = "Name:".$first_name."\n"."Contact No:".$contactno."\n"."Message:".$enquiry."\n";
//    $message. = "Contact No:".$contactno;
//    $message. = "Time:".$time."\n";
//    $message. = "Date:".$date."\n";
//    $message. = "Venue:".$venue."\n";
//    $message. = "Enquiry:".$enquiry."\n"; 

   


   $mail = mail($to,$subject,$message,$headers);
    echo "";
	if($mail){
		   echo "Hi " . $first_name . ", Thanks for contacting us.. We Will contact you soon";
		
	}
	else{
		echo "Mail does not go";
	}

?>
<?php
//$to = "info@hotsouthcaterers.com";
//$subject = "My subject";
//$txt = "Hello world!";
//$headers = "From: info@hotsouthcaterers.com" . "\r\n" .
//"CC: info@hotsouthcaterers.com";
//
//mail($to,$subject,$txt,$headers);
?>