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
      <div class="amenity">
      
        <div class="container-amenity-details">
          <div class="up-coming-booikng">
            <h3 class="up-coming-booikng-heading">Up Coming Bookings</h3>
            <hr>
            <div class="booking-tiles">
              <div class="booking-date"> 2024/01/20</div>
              <div class="booking-time"> 8.00 a.m</div>
              <div class="booking-type"> Fitness Center</div>
            </div>
            <div class="booking-tiles">
              <div class="booking-date"> 2024/01/23</div>
              <div class="booking-time"> 8.00 a.m</div>
              <div class="booking-type"> Fitness Center</div>
            </div>
            <div class="booking-tiles">
              <div class="booking-date"> 2024/01/25</div>
              <div class="booking-time"> 5.00 p.m</div>
              <div class="booking-type"> Pool</div>
            </div>
            <div class="booking-tiles">
              <div class="booking-date"> 2024/02/15</div>
              <div class="booking-time"> 10.00 a.m</div>
              <div class="booking-type"> Common Area</div>
            </div>
          </div>

          <div class="booking-history">
            <h3 class="up-coming-booikng-heading">Booking History</h3>
            <hr>
            <div class="booking-tiles-history">
              <div class="booking-date-history"> 2024/01/20</div>
              <div class="booking-time-history"> 8.00 a.m</div>
              <div class="booking-type-history"> Fitness Center</div>
              <div class="booking-status">
                <p class="booking-status-completed">Completed</p>
              </div>
            </div>
            <div class="booking-tiles-history">
              <div class="booking-date-history"> 2024/01/23</div>
              <div class="booking-time-history"> 8.00 a.m</div>
              <div class="booking-type-history"> Fitness Center</div>
              <div class="booking-status">
                <p class="booking-status-completed">Completed</p>
              </div>
            </div>
            <div class="booking-tiles-history">
              <div class="booking-date-history"> 2024/01/25</div>
              <div class="booking-time-history"> 8.00 a.m</div>
              <div class="booking-type-history"> Fitness Center</div>
              <div class="booking-status">
                <p class="booking-status-not-completed">Not Completed</p>
              </div>
            </div>
            <div class="booking-tiles-history">
              <div class="booking-date-history"> 2024/01/25</div>
              <div class="booking-time-history"> 5.00 p.m</div>
              <div class="booking-type-history"> Pool</div>
              <div class="booking-status">
                <p class="booking-status-completed">Completed</p>
              </div>
            </div>
           
          </div>

          <div class="booking-calendar">
          <h3 class="up-coming-booikng-heading">Booking calendar</h3>
            <hr>
          </div>

        </div>
        
        <div class="container-amenity-tiles">
           
           <div class="pool-container">
             <img src="pool.svg" class="pool-image">
             <p class="amenity-heading">Pool</p>
           </div>

           <div class="fitness-center-container">
             <img src="gym.svg" class="gym-image">
             <p class="amenity-heading">Fitness Center</p>
           </div>

           <div class="common-area-container">
             <img src="common-area.svg" class="common-image">
             <p class="amenity-heading">Common Area</p>
          </div>

        </div>
  
       
      </div>

  </div>

</body>
</html>