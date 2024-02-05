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
  <body>
  <div class="main-content">
    <div class="dashboard-container-general-manger">
      <div class="first-column">
        <div class="first-row">
          <div class="no-of-flats" >
            <div class="title-dashboard-tiles">Flats Overview</div>
            <div class="content-info">
              <div class="total-flats">
                Total Flats: <span id="totalFlats">100</span>
              </div>
              <div class="sold-flats">
               Sold Flats: <span id="soldFlats">70</span>
              </div>
              <div class="remaining-flats">
              Remaining Flats: <span id="remainingFlats">30</span>
              </div>
            </div>
          </div>
          <div class="total-residents">
            <div class="title-dashboard-tiles">Gender Distribution</div>
              <div class="content-info">
               <div class="gender-distribution women">
                 Women: <span id="womenCount">120</span>
              </div>
              <div class="gender-distribution men">
                Men: <span id="menCount">150</span>
              </div>
            </div>
          </div>
          <div class="no-of-staff">
            <div class="title-dashboard-tiles">Staff Members</div>
              <div class="content-info">
                <div class="staff-count">
                  Total Staff: <span id="staffCount">85</span>
                </div>
              </div>
            </div>
          </div>
        <div class="second-row">

        </div>
        <div class="third-row">
          <div class="rectangle-1">
          <canvas id="consumptionChart"></canvas>
          </div>
          <div class="rectangle-2">

          </div>
        </div>
      </div>
      <div class="second-column">
        <div class="column-box-1">

        </div>
        <div class="column-box-2">
          
        </div>
      </div>
   </div>
  </div>
  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
  