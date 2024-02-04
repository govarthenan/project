<?php

$this->view("includes/header"); ?>
<div class="main_container">
        <div class="landing_description">
            <div class="description_text">
                <div class="subtitle">
                    Welcome to <span class="company_name">Harmony Homes</span> <br />
                    Where Convenience Meets Community!
                </div>
                <div class="welcome_message">
                    <p>
                        Step into a world of convenience and community with Castle Care.<br />
                        More than just a platform, it's your key to a harmonious and connected<br />
                        living experience within your residence. Here, we simplify and elevate your<br />
                        residential living, transforming your home into a vibrant community.<br />
                        Get ready to embrace a new era of effortless living with<span class="company_name">
                            Harmony Homes!</span></p>
                </div>
            </div>

            <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (isset($_POST["login_button"])) {
        
              header("Location: login.php");
              exit(); 
              } elseif (isset($_POST["signup_button"])) {
        
              header("Location: signup.php");
              exit(); 
              }
             }
            ?>
                <form method="post" class="description_buttons">
                    <button type="submit" name="login_button" class="login_button">Sign In&nbsp;<span>&rsaquo;</span></button>
                    <button type="submit" name="signup_button" class="signup_button">Sign Up&nbsp;<span>&rsaquo;</span></button>
                </form>
            
        </div>
        <div class="landing_graphics">
            <img src="../../public/assets/img/apartment.svg" class="landing_img" />
        </div>
    </div>

 <?php $this->view("includes/footer"); ?>
