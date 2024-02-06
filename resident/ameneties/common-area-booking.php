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
      <div class="booking-container">
        <div class="appointment-heading-container">
          <img src="appoinment_img.svg" class="appoinment-image">
          <span class="appointment-heading">Book Your Slot</span>
        </div>
        <hr>
        <div class="form-date">
              <div class="form-date-heading">
                  <span class="date-of-slot">Select date :</span>
               </div>
              <div class="date">
                <img src="chevron-left.svg" class="date-name-arrow" onclick="prevWeek()">
                <p class="date-name">SUN<br>08/01</p>
                <p class="date-name">MON<br>09/01</p>
                <p class="date-name">TUE<br>10/01</p>
                <p class="date-name">WED<br>11/01</p>
                <p class="date-name">THUR<br>12/01</p>
                <p class="date-name">FRI<br>13/01</p>
                <p class="date-name">SAT<br>14/01</p>
                <img src="chevron-right.svg" class="date-name-arrow" onclick="nextWeek()">
              </div>
       </div>
      <div class="form-time">
              <div class="form-date-heading-common area">
                  <span class="time-for-slot">Enter time :</span>
                  <textarea id="time-needed" name="userAnswer" rows="1" required ></textarea>
              </div>
     </div>  
     <div class="booking-submit">
        <div class="form-type-heading">
                  <span class="no-of-people">Number of people:</span>
        </div>
        <div class="no-of-people">
        <textarea id="people-no" name="userAnswer" rows="1" required ></textarea>
        </div>
</div>
    <div class="booking-submit">
        <div class="form-type-heading">
                  <span class="no-of-people">Purpose:</span>
        </div>
        <div class="no-of-people">
        <textarea id="people-no" name="userAnswer" rows="4" required ></textarea>
        </div>
      
    </div>
    <div class="submit-column-amenity">
                <button class="cancel-btn-amenity">Cancel</button>
                <button id="submit-btn-amenity" class="submit-btn-amenity">Submit</button>
            </div>
        </div>
    </div>

   
    <div id="myModal" class="modal" style="display: none;">
        <div class="submission-confirmation">
          <span class="close">&times;</span>
            <h2 class="confirmation-heading">Confirm Submission</h2>
                <h3>Are you sure you want to submit this booking?</h3>
                <p>Click, "Confirm" to proceed with submission<br>or cancel to make changes.</p>
                <div class="submit-column-confirmation">
                    <button class="cancel-btn-confirmation">Cancel</button>
                    <button class="submit-btn-cofirmation">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    <script src="index.js"></script>
</body>
</html>