<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
  <body>
    <div class="frm">
        <form action="registration_process.php" method="POST">
             <label>Username:</label>
             <input type="text" id="username" name="username" placeholder="username">
             <label>Password:</label>
              <input type="password" id="password" name="password" placeholder="password">
              <label>Comfirm password:</label>
              <input type="password" id="comfirm_password" name="comfirm_password" placeholder="password">
             <input class="btn" type="submit" id="btn" value="Register">
        </form>
    </div>
</body>
<?php

if ($_POST["password"] == $_POST["confirm_password"]) {
   // success!
}
else {
   // failed :(
}
?php>