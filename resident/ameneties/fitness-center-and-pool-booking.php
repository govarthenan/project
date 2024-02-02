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
                  <span class="date-of-slot">Select date</span>
                  <img src="arrow-right.svg">
              </div>
              <div class="date">
                <img src="chevron-left.svg" class="date-name-arrow">
                <p class="date-name">SUN<br>08/01</p>
                <p class="date-name">MON<br>09/01</p>
                <p class="date-name">TUE<br>10/01</p>
                <p class="date-name">WED<br>11/01</p>
                <p class="date-name">THUR<br>12/01</p>
                <p class="date-name">FRI<br>13/01</p>
                <p class="date-name">SAT<br>14/01</p>
                <img src="chevron-right.svg" class="date-name-arrow">
              </div>
      </div>
      
      <div class="form-time">
              <div class="form-date-heading">
                  <span class="time-of-slot">Select time</span>
                  <img src="arrow-right.svg">
              </div>
              <div class="time">
                <p class="time-name">6.00-7.00<br>a.m</p>
                <p class="time-name">7.00-8.00<br>a.m</p>
                <p class="time-name">8.00-9.00<br>a.m</p>
                <p class="time-name">9.00-10.00<br>a.m</p>
                <p class="time-name">10.00-11.00<br>a.m</p>
                <p class="time-name">11.00-12.00<br>a.m</p>
                <p class="time-name">12.00-1.00<br>p.m</p>
                <p class="time-name">1.00-2.00<br>p.m</p>
                <p class="time-name">2.00-3.00<br>p.m</p>
                <p class="time-name">3.00-4.00<br>p.m</p>
                <p class="time-name">4.00-5.00<br>p.m</p>
                <p class="time-name">5.00-6.00<br>p.m</p>
                <p class="time-name">6.00-7.00<br>p.m</p>
                <p class="time-name">7.00-8.00<br>p.m</p>
                <p class="time-name">8.00-9.00<br>p.m</p>
                <p class="time-name">9.00-10.00<br>p.m</p>
                </div>
      </div>
      <div class="booking-submit">
        <div class="form-type-heading">
                  <span class="no-of-people">Number of persons:</span>
        </div>
        <div class="no-of-people">
        <textarea id="people-no" name="userAnswer" rows="1" required ></textarea>
        </div>
       
     </div>
     <div class="submit-column-amenity">
            <button class="cancel-btn-amenity">Cancel</button>
            <button id="submit-btn-amenity" class="submit-btn-amenity">Submit</button>
        </div>
    </div>

    <!-- Modal -->
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

    <script src="index.js"></script>
</body>
</html>
