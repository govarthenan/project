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
      <div class="technician-dashboard-container">
        <div class="tech-dashboard-row-1">
          <div class="tech-content-box-1"> 
           <div class="tech-welcome-msg-container">
               <div class="tech-welcome-msg"> Monthly Summary <hr></div>
            </div>
            <div class="tech-dasboard-tiles-container">
              <div class="tech-total-task-tile">
                <div class="tasks">
                  Total tasks
                  <div class="Number">
                    8
                  </div>
                </div>
              </div>
              <div class="tech-ongoing-task-tile">
              <div class="tasks">
                  Ongoing tasks
                  <div class="Number">
                    2
                  </div>
                </div>
              </div>
              <div class="tech-completed-task-tile">
              <div class="tasks">
                  Completed tasks
                  <div class="Number">
                    6
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tech-announcment-container">
               <div class="tech-welcome-msg"> Announcment <hr></div>
                 <div class="tech-announcment-tile">
                  Staff meeting
                 </div>
                 <div class="tech-announcment-tile">
                  Staff meeting
                 </div>
             </div>
          </div>
        <div class="tech-dashboard-row-2">
          <div class="current-tasks">
             <div class="tech-welcome-msg"> Recent tasks <hr></div>
                <table class="issue-table">
                  <thead>
                    <tr>
                      <th>Issue ID</th>
                      <th>Issue date</th>
                      <th>About</th>
                      <th>Status</th>
                      <th>Feedbacks</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>ID04</td>
                      <td>02//02/2024</td>
                      <td>Electricity supply</td>
                      <td>On-going</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>ID03</td>
                      <td>18/01/2024</td>
                      <td>Electricity supply</td>
                      <td>Completed</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>ID02</td>
                      <td>22/12/2023</td>
                      <td>Electricity supply</td>
                      <td>On-going</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
          
        </div>
      </div>
    </div>
    <script src="index.js"></script>
</body>
</html>