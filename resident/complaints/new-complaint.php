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
    <div class="new-complaint-landing">
    <div class="complaint-column-new">
            <div class="complaint-type">
                <div class="new-complaint-log">
                  <img src="one-finger-tap.svg" class="select-complaint-img" />
                  <span class="complaint-type-title">My Complaint</span>
                </div>
                
                <div class="new-complaint-new">
                  <img src="hand-held-tablet-writing.svg" class="new-complaint-img" />
                  <span class="complaint-type-title">New Complaint</span>
                </div>
              </div>
                <div class="new-complaint-container">
                <div class="column">
            <div class="nested-grid">
                <div class="form-column">
                  <h4>Complaint type:</h4>
                </div>
                <div class="form-column">
                  <h4>Subject:</h4>
                </div>
                <div class="form-column">
                   <h4>Description:</h4>
                  </div>
                  
                <div class="attachment-column">
                   <h4>Attachments:</h4>
                  </div>
                
            </div>
        </div>
        <div class="column">
            <div class="nested-grid">
                <div class="form-column">
                <select id="items" name="selectedItem">
            <option value="item1">Maintenance</option>
            <option value="item2">Security</option>
            <option value="item3">Finance</option>
            <option value="item3">Other</option>
            <!-- Add more options as needed -->
        </select>
                </div>
                <div class="form-column">
                <input type="text" id="shortAnswer" name="userShortAnswer" required>
                </div>

                <div class="form-column">
                <textarea id="answer" name="userAnswer" rows="8" required></textarea>
                </div>

                <div class="drop-area">
                  <img src="upload-cloud.svg" class="upload-cloud-img">
                  <p>Drag and Drop to upload files <br> or </p>
                  <label for="file-input" class="custom-file-upload">Choose File</label>
                     <input type="file" id="file-input" >
               </div>
               <div class="submit-column">
               <button class="cancel-btn">Cancel</button>
               <button class="submit-btn">Submit</button>
    
                </div>
               </div>
               
            </div>
        </div>
          

        </div>
  </body>
  </html>