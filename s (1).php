<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$city = $_REQUEST['city'];
$message = $_REQUEST['message'];

if(isset($name) && isset($email) && isset($mobile) ){

$body = "From: $name <br> E-Mail: $email <br> Mobile Number: $mobile <br> City: $city <br> Message: $message";
$result = array();
$from = 'enquiry@seoexpertpeter.com';
$to = 'seoexpertpeter@gmail.com';  //info@seoexpertpeter.com
$subject='Enquiry From site';
$cc = '';
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		$headers .= "From: <$from> \r\n";
		$headers .= "Cc:$cc\r\n";
		$headers .= "X-Mailer: PHP \r\n";

		if(true)//if(mail($to, $subject, $body, $headers, '-f'.$from))
		{
		    session_start();
		    $_SESSION['name'] = $name;
			$result['success'] = true;
			 echo "<script> alert('Thanks. Your request has been submitted successfully!. We will get back you shortly.');
			 window.location = 'https://seoexpertpeter.com/contact.html';
			 </script>";
			
			// echo "<script> alert('$name')</script>" ;
			 //echo  $_SESSION['name'] ;
			 $name = $_SESSION['name'];
			 // session_destroy(); 
			  //echo  $_SESSION['name'] ;
			  // $_SESSION['name'] = 0;
			   	//  echo  $_SESSION['name'] ;
			   	 // if (empty($_SESSION['name'])) {
                 //    echo "Variable 'a' is empty.<br>";
//}
			   
			   
			 //echo '<script language="javascript">window.location = "https://seoexpertpeter.com/thanku.php";</script>';  
			 //echo '<script language="javascript">window.location = "https://seoexpertpeter.com/contact.html";</script>';  
			 
			 //echo "<meta http-equiv='refresh' content='0'>";
			 //header("Location: https://seoexpertpeter.com/thanku.php?user='$name'");
			 //header("Location: https://seoexpertpeter.com/thanks.html");
			 //header("Location: https://seoexpertpeter.com/contact.html");
			// window.location.href='https://seoexpertpeter.com/thanku.php?user='$name'';
			 	//echo "<html><body><h1>good</h1></body></html>";
            exit();
		}else{
			$result['success'] = "error occur";
			    echo "<script> alert('Not sent');</script>";
            exit();
		}

		//echo JSON_ENCODE($result);
		//echo "<html><body><h1 class=\"display-3\">Thank You! </h1>
				//	<p class=\"lead\"><strong>Your request has been saved</strong> We will get back to you shortly.</p></body></html>"
				//echo "<html><body><h1>good</h1></body></html>";


// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
// $headers .= "From: <$from> \r\n";
// $headers .= "X-Mailer: PHP \r\n";
// $headers = array(
//     'From' => $from,
//     'Reply-To' => 'info@kelviron.in',
//     'X-Mailer' => 'PHP/' . phpversion()
// );

// if(mail("info@kelviron.in", $subject, $body, $headers)) {
//  header("Location: https://kelviron.in/thankyou.html");
//  exit();
// }else{
//     echo "<script> alert('Not sent');</script>";
//     exit();

// }
}
?>