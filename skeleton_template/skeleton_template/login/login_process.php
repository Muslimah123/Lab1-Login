<?php

 include("../controllers/customer_controller.php");
 include("../settings/core.php");
 

  if (isset($_POST['submit1'])) {
    $email= $_POST['customer_email'];
    $password= $_POST['customer_pass'];
  
  //calling the ctr
  $check= loggingin_ctr($email,$password);

  //method for checking the email and password to retrive the information for the touser logins
  if($check) {
  print_r ($check);
  //set session for customer_id and user role
  // session_start();
  $_SESSION['cid'] = $check['customer_id'];
  $_SESSION['userRole'] = $check['user_role'];

// now redirects to the home page of the user
  header("Location: ../index.php");
  } else{
  echo "Log in failed";
}
}

?>


    