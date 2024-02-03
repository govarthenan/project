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
            <div class="announcment-heading">
              Announcment
            </div>
            
            <div class="announcment-tile-container">
               <div class="announcment-1">
                 <div class="announcment-tile-heading">Monthly General meeting</div>
                      <!--<div class="announcment-details">Dear residents,<br>
                         We are excited to announce our general meeting for the month of February.<br>
                        <b>Date:2024.02.27</b><br>
                        <b>Time:8.00 a.m</b><br>
                        <b>Location:</b><br>Please make sure to attend and participate. Your presence is highly valued!<br>
                         Thank you,<br>
                         General manager.
                      </div>-->
                   </div>
               <div class="announcment-2">
                 <div class="announcment-tile-heading">Power Cut Announcement</div>
                      <!--<div class="announcment-details">Dear residents,<br>
                      We would like to inform you about a scheduled power cut on the 4th of February.<br>
                        <b>Date:2024.02.27</b><br>
                        <b>Time:8.00 a.m</b><br>
                        <b>Duration:6 hours</b><br>
                        <b>Reason:Maitenance repair</b><br> We apologize for any inconvenience this may cause and appreciate your understanding.<br>
                         Thank you,<br>
                         Facility manager.
                      </div>-->
                   </div>
                </div>
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
            <img src="waiting-appointments-calendar.svg" class="booking-reminder-img">
            <div class="reminder-heading">Fitness Center</div>
          </div>
          <div class="event-reminder">
             <img src="calendar-star.svg" class="event-reminder-img">
             <div class="reminder-heading">Sinhala and tamil new year celebration</div>
          </div>
          <div class="payment-reminder">
            <img src="subscription-cashflow.svg" class="payment-reminder-img">
            <div class="reminder-heading">Maintenance Fees</div>
          </div>
          <div class="private-files">
           <img src="business-user-curriculum.svg" class="business-user-curriculum-img">
           <div class="private-files-heading">Private files</div>
          </div>
        </div>
        <div class="third-row">
          <div class="maitenance-payment-overview">
             <canvas id="maintenancePaymentChart" width="1500%" height="200%"></canvas>
          </div>
          <div class="utility-useage-overview">
             <canvas id="utilityUsageChart" width="100%" height="90%"></canvas>
          </div>
        </div>
      </div>
    </div>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </body>
</html>