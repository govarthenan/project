<?php
session_start();

// Initialize error message to empty
$error_message = "";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid_username = 'user';
    $valid_password = 'pass';

    // Fetch submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Set username session variable
        $_SESSION['username'] = $username;
        // Redirect to welcome page
        header("Location: welcome.php");
        exit();
    } else {
        // Set error message for invalid credentials
        $error_message = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In - Harmony Homes</title>
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

                    <!-- Display error message if any -->
                    <?php if (!empty($error_message)): ?>
                        <p class="error"><?php echo $error_message; ?></p>
                    <?php endif; ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="login-form">
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
