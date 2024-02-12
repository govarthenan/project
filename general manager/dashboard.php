<?php
include('sidenav.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body onload="randerDate()">
  <div class="main-content">
    <div class="dashboard-container-general-manger">
      <div class="first-column">
        <div class="first-row">
          <div class="no-of-flats" >
            <div class="title-dashboard-tiles">Flats Overview</div>
            <div class="content-info-flat">
              <div class="flat-icon">
                <img src="residential.png" class="resident-img">
              </div>
              <div class="flat-details">
                 Total=150<br>
                 Sold=120<br> 
              </div>
            </div>
          </div>
          <div class="total-residents">
            <div class="title-dashboard-tiles">Residents Overview</div>
              <div class="content-info-gender">
                <div class="flat-icon">
                  <img src="population.png" class="population-img">
                </div>
                <div class="flat-details">
                 Total=540
                </div>
              </div>
          </div>
          <div class="no-of-staff">
            <div class="title-dashboard-tiles">Staff Members</div>
              <div class="content-info-staff">
                <div class="flat-icon">
                  <img src="teamwork.png" class="population-img">
                </div>
                <div class="flat-details">
                 Total=18
                </div>
              </div>
            </div>
          </div>
          
          <div class="second-row">
          
          </div>
        </div>
      <div class="second-column">
      <div class="calendar">
            <div class="calendar-container">
              <div class="new-calendar-event">
                + Add new event
              </div>
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
        <div class="column-box-2">
        <canvas id="consumptionChart"></canvas>
        </div>
      </div>
   </div>
  </div>
  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>

  