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
        <div class="first-column">
          <div class="announcment-container">
             <h2 class="announcment-title">Announcment</h2>
             <hr>
             <div class="announcement-tile">
               <div class="tile-header1">Announcement: Scheduled Maintenance</div>
            </div>
            <div class="announcement-tile">
              <div class="tile-header1">Announcement: Pool Closure for Cleaning</div>
            </div>
            <div class="announcement-tile">
              <div class="tile-header1">Announcement: Security System Upgrade</div>
            </div>
           
          </div>
          
      <div class="dashboard-container">
            <div class="dashboard-tile1">
              <img src="complaints.svg" class="complaints_img" />
              <span class="tile-header">Complaints</span>
          </div>

         <div class="dashboard-tile2">
          <img src="amenities.svg" class="amenities_img" />
          <span class="tile-header">Amenities</span>
        </div>
      </div>
      <div class="dashboard-container">
        <div class="dashboard-tile3">
          <img src="issues.svg" class="issues_img" />
          <span class="tile-header">Issues</span>
        </div>

        <div class="dashboard-tile4">
          <img src="payment.svg" class="payment_img" />
          <span class="tile-header">Payment</span>
        </div>
      </div>
    </div>

        <div class="second-column">
          <div class="calendar">
            <h3 class="second-column-heading">Calendar</h3>
            <hr>
            <img src="calendar.png" class="calendar-img">
          </div>
          <div class="private-files">
            <h3 class="second-column-heading"> Private Documents</h3>
            <hr>
            <p class="manage-documents">Manage Documents </p>
          </div>
          <div class="Up-comming-events">
          <h3 class="second-column-heading">Up Comming Events</h3> 
          <hr>
          <p class="events-name">Monthly meeting </p>
          <p class="events-name">Sinhala and tamil new year celebration </p>
          <p class="events-name">Blood Donation</p>
          </div>
        </div>
      

       </div>
        

  </body>
</html>