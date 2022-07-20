<!DOCTYPE html>
<html>
<head>
<title>How to put PHP in HTML - Simple Example</title>
	
</head>
<body>
<h1><?php echo "This message is from server side." ?></h1>
<h2>Hello</h2>

<?php echo $_GET['user']; 
      echo $_SESSION['name'];
      echo "<script> alert('Thanks. Your request has been submitted successfully!. We will get back you shortly.');</script>";
      
      $result['userVariable'] = $_GET['user'];
      if (isset($result['userVariable'])) 
      {
         echo "Variable 'a' is set";
          $result['userVariable'] = '';
      }
         else
          echo header("Location: https://seoexpertpeter.com/contact.html");

?>


    

</body>
</html>