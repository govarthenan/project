<?php?>
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
            <div class="company-name-sign-in">Harmony Homes!</div>
           <img src="logo.svg" class="logo-sign-in">
            <form action="/submit-login" method="post">
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
              <button type="submit" class="btn">Login</button>
            </form>
          </div>
        </div>
      </div>  
    </div>
</body>
</html>