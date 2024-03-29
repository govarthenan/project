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
    <div class="dashboard-container-finance">
    <div class="row-1-finance-dashboard">
      <div class="row-1-column-1">
        <div class="row-1-box">
           <div class="finance-overview-box">
               <img src="money.png" class="finance-dash-tile-img">
               <span class="finance-dash-tile-heading">Current funds<br> <div class="total-fund"><b>Rs.2000k</b></div></span>
             </div>
           <div class="finance-overview-box">
           <img src="income.png" class="finance-dash-tile-img">
               <span class="finance-dash-tile-heading">Income<br> <div class="total-income"><b>Rs.2000k</b></div></span>
           </div>
           <div class="finance-overview-box">
           <img src="decrease.png" class="finance-dash-tile-img">
               <span class="finance-dash-tile-heading">Expense<br> <div class="total-expense"><b>Rs.500k</b></div></span>
           </div>
        </div>
        <div class="row-2-box">
          <div class="non-routin-expenses">
            <img src="non-routine-expense.svg" class="non-routine-expense-icon">
            <span class="non-routin-expenses-heading">Non-Routine Expenses</span>
          </div>
          <div class="transaction-log">
            <img src="transaction-log.svg" class="non-routine-expense-icon">
            <span class="transaction-log-heading">Transaction log</span>
          </div>
        </div>
      </div>
      <div class="row-1-column-2">
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
    </div>
    <div class="row-2-finance-dashboard">
      <div class="box-c">
      <div class="payment-overview-maintenace-chart-heading">Maintenance Payment Overview</div>
             <div class="payment-status-chart-1">
                
             </div>
      </div>
      <div class="box-d">
      <div class="payment-overview-maintenace-chart-heading">Accounts Overview</div>
          <div class="payment-status-chart-2">
          <canvas id="financeChart"></canvas>
      </div>
    </div>

        
    </div>
  </div>
  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </body>
</html>