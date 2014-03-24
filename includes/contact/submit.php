<?php
 
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "thedreamteamuni@gmail.com";
 
    $email_subject = "Contact Form";
 
    function died($error) {
 
        // your error code can go here
 
        echo "This message could not be sent. "; 
        
       echo $error."<br /><br />"; 
 
        die();
 
    }
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        died('There are errors in the form.');      
 
    }
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
 
    $message = $_POST['message']; // required
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The email address entered appears to be invalid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The Name you entered appears to be invalid.<br />';
 
  }
  
  if(strlen($message) < 2) {
 
    $error_message .= 'The message you entered appears to be invalid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Submitted form details.\n\n";
 	 function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
      
 
    }
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers); 

}

header("Location:../../contact.php?success");
die();
}