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
    <div class="main-container-forget-password">
    <div class="forget-password-container">
        <div class="forget-password-image-container">
          <img src="Questions-pana.svg" class="forget-password-image">
          <div class="forget-password-title">Forget password ?</div>
           <div class="forget-password-form">
            <form action="/submit-forgot-password" method="post">
              <div class="form-group">
                <label for="newpassword">Enter a new password:</label>
                <input type="text" id="username" name="username" required>
              </div>
              <div class="form-group">
                <label for="password">Re-type new password:</label>
                <input type="password" id="password" name="password" required>
              </div>
              <button type="save" class="btn-save">Save</button>
            </form>
          </div>
        </div>
       
</div>
</body>
</html>