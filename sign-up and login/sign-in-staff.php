<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="main-container-sign-in">
      <div class="sign-in-container">
        <div class="sign-in-image-container">
         <img src="Computer login-bro.svg" class="sign-in-container-company-logo">
        </div>
        <div class="sign-in-form-container">
          <div class="login-form">
            <div class="company-profile">
               <img src="company-logo-small.png" class="logo-sign-in">
               <div class="company-name-sign-in">Harmony Homes</div>
            </div>
            
           <?php
              session_start();
                $valid_username = 'user';
                $valid_password = 'pass'; 
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                  $username = $_POST['username'];
                  $password = $_POST['password'];
                    if ($username === $valid_username && $password === $valid_password) {
                      $_SESSION['username'] = $username;
                      header("Location: welcome.php");
                      exit();
                   } else {
                     $error_message = "Invalid username or password!";
                     echo $error_message;
                    }
                  }
              ?>

            <form action="/submit-login" method="post" class="login-form">
              <div class="sign-in-form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
              </div>
              <div class="sign-in-form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
              </div>
              <div class="sign-in-form-group forgot-password">
              <a href="/forgot-password">Forgot Password?</a>
             </div>
              <button type="submit" class="btn-login">Login</button>
            </form>
          </div>
        </div>
      </div>  
    </div>
</body>
</html>