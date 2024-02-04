<?php
$this->view("includes/header");?>

    <div class="main-container-sign-in">
      <div class="sign-in-container">
        <div class="sign-in-image-container">
         <img src="././public/assets/img/Mobile login-cuate.svg" class="sign-in-container-company-logo">
        </div>
        <div class="sign-in-form-container">
          <div class="login-form">
            <div class="company-name-sign-in">Harmony Homes!</div>
           <img src="logo.svg" class="logo-sign-in">
            <form action="/submit-login" method="post">
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
              </div>
              <div class="form-group forgot-password">
              <a href="/forgot-password">Forgot Password?</a>
             </div>
              <button type="submit" class="btn">Login</button>
            </form>
          </div>
        </div>
      </div> 
       
    </div>
    <?php $this->view("includes/footer"); ?>
