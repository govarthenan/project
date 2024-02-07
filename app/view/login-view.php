<?php
$this->view("includes/header");?>

    <div class="main-container-sign-in">
      <div class="sign-in-container">
        <div class="sign-in-image-container">
         <img src="././public/assets/img/Computer login-bro.svg" class="sign-in-container-company-logo">
        </div>
        <div class="sign-in-form-container">
          <div class="login-form">
            <div class="company-profile">
               <img src="company-logo-small.png" class="logo-sign-in">
               <div class="company-name-sign-in">Harmony Homes</div>
            </div>
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
    <?php $this->view("includes/footer"); ?>
