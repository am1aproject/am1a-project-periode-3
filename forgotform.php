<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "someone@example.com";
  $email = $_REQUEST['email'];
  $subject = "Wachtwoord reset voor: $email";
  $comment = "Click op de wachtwoord reset link om uw wachtwoord te veranderen; http://www.google.com";
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>
<?php
  }
?>