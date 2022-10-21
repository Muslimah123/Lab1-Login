
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<form action= "./login_process.php" method="POST" id="login_form">
  <div class="imgcontainer">
    <img src="../images/face-icon-user.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>Email</b></label></br>
    <input type="text" placeholder="Enter email" name="customer_email" required id="email" > </br>
    <div id="error_msg"></div>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="customer_pass" required id="password">
    <div id="error_msg"></div>


    <button type="submit" name="submit1">Login</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="submit" class="cancelbtn" name="submit2">Cancel</button>
   
   
  </div>
</form>

 <script src="../js/app.js"></script> 

</body>
</html>