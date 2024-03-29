<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up - Harmony Homes</title>
    <link rel="stylesheet" href="style.css" />
    <script>
      function updateFileName(inputId, spanId) {
        var input = document.getElementById(inputId);
        var fileNameSpan = document.getElementById(spanId);
        if (input.files.length > 0) {
          fileNameSpan.innerText = input.files[0].name;
        } else {
          fileNameSpan.innerText = "No file chosen";
        }
      }
    </script>
</head>
<body>
    <div class="main-container-sign-up">
        <div class="company-profile-sign-up">
            <img src="company-logo-small.png" class="logo-sign-up">
            <div class="company-name-sign-up">Harmony Homes</div>
        </div>
        <div class="sign-up-img">
            <img src="Sign up.svg" class="sign-up-image">
        </div>
        <div class="sign-up-container">
            <div class="sign-up-message">Sign up to become a member of our residence management system...</div>
            <form action="submitForm.php" method="post" enctype="multipart/form-data" class="registration-form">
                <div class="sign-up-input-container">
                    <div class="sign-up-left">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="phone">Phone Number:</label>
                        <input type="tel" id="phone" name="phone" required>

                        <label for="birthday">Birthday:</label>
                        <input type="date" id="birthday" name="birthday" required>

                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>

                        <label for="flatNumber">Flat Number:</label>
                        <input type="text" id="flatNumber" name="flatNumber" required>

                        <label for="doorNumber">Door Number:</label>
                        <input type="text" id="doorNumber" name="doorNumber" required>

                        <label for="nic">NIC:</label>
                        <input type="text" id="nic" name="nic" required>

                        <div class="file-upload-wrapper">
                            <label for="nicPhoto">Photo of NIC:</label>
                            <button type="button" onclick="document.getElementById('nicPhoto').click()" class="custom-file-upload">Choose File</button>
                            <span id="nicPhotoName">No file chosen</span>
                            <input type="file" id="nicPhoto" name="nicPhoto" accept="image/*" onchange="updateFileName('nicPhoto', 'nicPhotoName')" required style="display: none;">
                        </div>

                        <div class="file-upload-wrapper">
                            <label for="agreementPhoto">Photo of Agreement Document:</label>
                            <button type="button" onclick="document.getElementById('agreementPhoto').click()" class="custom-file-upload">Choose File</button>
                            <span id="agreementPhotoName">No file chosen</span>
                            <input type="file" id="agreementPhoto" name="agreementPhoto" accept="image/*" onchange="updateFileName('agreementPhoto', 'agreementPhotoName')" required style="display: none;">
                        </div>
                    </div>
                    <div class="sign-up-bottom">
                        <label for="password">Enter Password:</label>
                        <input type="password" id="password" name="password" required>

                        <label for="confirmPassword">Confirm Password:</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" required>

                        <label>
                            <input type="checkbox" name="terms" required>I agree to the Terms and Conditions
                        </label>

                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
      // Additional JavaScript can be added here, if needed
    </script>
</body>
</html>
