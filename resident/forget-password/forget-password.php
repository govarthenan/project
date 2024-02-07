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
        <div class="forget-password-container-a">
           <div class="forget-password-image-container">
               <img src="Questions-pana.svg" class="forget-password-image">
           </div>
           <div class="forget-password-title-container">
              <div class="forget-password-title">Forget password ?</div>
           </div>
        </div>
        <div class="forget-password-container-b">
          <form action="/submit-forgot-password" method="post">
            <div class="form-forget-password">
                <label for="newpassword">Enter a new password:</label>
                <input type="text" id="username" name="username" required>
              </div>
            <div class="form-forget-password">
                <label for="password">Re-type new password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="save" class="btn-save-forget-password">Save</button>
          </form>
        </div>
      </div>
    </div>
</body>
</html>