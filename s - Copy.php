<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$city = $_REQUEST['city'];
$message = $_REQUEST['message'];

if(isset($name) && isset($email) && isset($mobile) ){

$body = "From: $name <br> E-Mail: $email <br> Mobile Number: $mobile <br> City: $city <br> Message: $message";
$result = array();
$from = 'enquiry@kelviron.in';
$to = 'kelvironblr@gmail.com';  //info@kelviron.in
$subject='Enquiry From site';
$cc = '';
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		$headers .= "From: <$from> \r\n";
		$headers .= "Cc:$cc\r\n";
		$headers .= "X-Mailer: PHP \r\n";

		if(mail($to, $subject, $body, $headers, '-f'.$from))
		{
			$result['success'] = true;
			 header("Location: https://kelviron.in/thankyou.html");
            exit();
		}else{
			$result['success'] = "error occur";
			    echo "<script> alert('Not sent');</script>";
            exit();
		}

		echo JSON_ENCODE($result);


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