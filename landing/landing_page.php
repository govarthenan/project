<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="landing_style.css" />
</head>
<body>
    <div class="main-container-landing">
        <div class="landing-description">
            <div class="description-text">
                <div class="subtitle">
                    Welcome to <span class="company-name">Harmony Homes</span> <br />
                    Where Convenience Meets Community!
                </div>
                <div class="welcome-message">
                    <p>
                        Step into a world of convenience and community with Castle Care.<br />
                        More than just a platform, it's your key to a harmonious and connected<br />
                        living experience within your residence. Here, we simplify and elevate your<br />
                        residential living, transforming your home into a vibrant community.<br />
                        Get ready to embrace a new era of effortless living with<span class="company-name">
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
                <form method="post" class="description-buttons">
                    <button type="submit" name="login_button" class="login_button">Sign In&nbsp;<span>&rsaquo;</span></button>
                    <button type="submit" name="signup_button" class="signup_button">Sign Up&nbsp;<span>&rsaquo;</span></button>
                </form>
            
        </div>
        <div class="landing-graphics">
            <img src="apartment.svg" class="landing-img" />
        </div>
    </div>
</body>
</html>

