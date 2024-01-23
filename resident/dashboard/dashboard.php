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
  <body onload="randerDate()">
    <div class="main-content">
      <div class="dashboard-container">
        <div class="first-row">
          <div class="announcment-container">

          </div>
          <div class="calendar">
            <div class="calendar-container">
              <div class="month">
               <div class="prev" onclick="moveDate('prev')">
                <span class="arrow">&#10094</span>
              </div>

              <div>
                <h2 id="month">April-2023</h2>
                <p id="date">Tue April 20 2023</p>
              </div>

              <div class="next" onclick="moveDate('next')">
               <span class="arrow">&#10095</span>
              </div>

            </div>

            <div class="week">
              <div>Sun</div>
              <div>Mon</div>
              <div>Tue</div>
              <div>Wed</div>
              <div>Thu</div>
              <div>Fri</div>
              <div>Sat</div>
            </div>
            
            <div class="dates">
            </div>
           </div>
          </div>
        </div>
  
        <div class="second-row">
          <div class="booking-reminder">

          </div>
          <div class="event-reminder">

          </div>
          <div class="payment-reminder">

          </div>
          <div class="private-files"></div>
        </div>
        <div class="third-row">
          <div class="maitenance-payment-overview">

          </div>
          <div class="utility-useage-overview">

          </div>
        </div>
      </div>
    </div>
    <script src="index.js"></script>
  </body>
</html>