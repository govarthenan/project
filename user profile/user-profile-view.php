<?php
include('sidenav.php');
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
    <div class="main-content">
      <div class="user-profile-container">
        <div class="user-profile-heading">
          User profile
        </div>
        <div class="user-profile-sub-description">
          Manage your details,view your tier status and change your password.
        </div>
        <div class="details">
          <div class="general-details">
           <div class="profile-picture">
             <div class="user-profile-picture">

             </div>
             <div class="user-name-display">
               Neymar jr
             </div>
           </div>
           <div class="profile-details">
            <div class="general-information-heading">
              General information
            </div>
            <form action="/submit-profile" method="post">
             <div class="user-name">
              <div class="form-user-info">
                  <label for="firstName">First Name:</label>
                  <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-user-info">
                 <label for="lastName">Last Name:</label>
                 <input type="text" id="lastName" name="lastName" required>
                </div>
                <button type="submit" class="btn-save">Save Profile</button>
              </div>
            </form>
           </div>
          </div>
          <div class="security-details">
            <div class="security-information-heading">
             Security information
            </div>
            <form action="/submit-profile" method="post">
             <div class="security-content">
              <div class="form-user-info">
                 <label for="email">Email:</label>
                 <input type="email" id="email" name="email" required>
              </div>
              <div class="form-user-info">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
              </div>
              <div class="form-user-info">
                 <label for="lastName">Phone number:</label>
                 <input type="tel" id="phone" name="phone"  required>
              </div>
            </div>
              <div class="action">
                <button type="submit" class="btn-change-password">Change password</button>
                <button type="submit" class="btn-change-phone-number">Change phone number</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
