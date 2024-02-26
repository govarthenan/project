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
      <div class="column-1">
         <div class="finance-dashboard-titles-row-1">
            <div class="finance-overview-box-1">
               <img src="money.png" class="finance-dash-tile-img">
               <span class="finance-dash-tile-heading">Current funds</span>
               <div class="total-fund"><b>Rs.2000k</b></div>
               
            </div>
            <div class="finance-overview-box-2">
               <img src="income.png" class="finance-dash-tile-img">
               <span class="finance-dash-tile-heading">Income</span>
               <div class="total-income"><b>Rs.2000k</b></div>
            </div>
            <div class="finance-overview-box-3">
               <img src="decrease.png" class="finance-dash-tile-img">
               <span class="finance-dash-tile-heading">Expense</span>
               <div class="total-expense"><b>Rs.500k</b></div>
               
            </div>
         </div>
         <div class="finance-dashboard-titles-row-2">
              <div class="non-routin-expenses">
                <img src="non-routine-expense.svg" class="non-routine-expense-icon">
                <span class="non-routin-expenses-heading">Non-Routine Expenses</span>
                  
              </div> 
               <div class="transaction-log">
               <img src="transaction-log.svg" class="non-routine-expense-icon">
               <span class="transaction-log-heading">Transaction log</span>
               </div>
         </div>
         <div class="finance-dashboard-titles-row-3">
          <div class="payment-overview-maintenace-chart">
             <div class="payment-overview-maintenace-chart-heading">Maintenance Payment Overview</div>
             <div class="payment-status-chart">
                <canvas id="paymentStatusChart"></canvas>
             </div>
          </div>
          <div class="stat-balance">
          <div class="payment-overview-maintenace-chart-heading">Maintenance Payment Overview</div>
          <div class="payment-status-chart">
          <canvas id="financeChart"></canvas>
             </div>
        
        </div>
          
         </div>
         
      </div>
      <div class="column-2">
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
        
      </div>
        
    </div>
  </div>
  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </body>
</html>