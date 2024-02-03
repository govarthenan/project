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

        <div class="container-amenity-details">
          <div class="up-coming-booikng">
            <div class="up-coming-booking-heading">
              <img src="up_coming_booking.svg" class="up-coming-booking-img" />
              <span class="up-coming-booking-title">Up Coming Booking</span>
            </div>
           <hr>
            <div class="booking-tiles">
              <div class="booking-date"> 2024/01/20</div>
             <div class="booking-type"> Fitness Center</div>
            </div>

            <div class="booking-tiles">
              <div class="booking-date"> 2024/01/23</div>
              <div class="booking-type"> Fitness Center</div>
            </div>

            <div class="booking-tiles">
              <div class="booking-date"> 2024/01/25</div>
              <div class="booking-type"> Pool</div>
            </div>

            <div class="booking-tiles">
              <div class="booking-date"> 2024/02/15</div>
              <div class="booking-type"> Common Area</div>
            </div>

           </div>

          <div class="booking-history">
            <div class="booking-history-heading">
              <img src="booking-history.svg" class="booking-history-img" />
              <span class="booking-history-title">Booking History</span>
           </div>
           <hr>
              
           <table id="bookingTable">
    <thead>
        <tr>
            <th>Booking ID</th>
            <th>Booking Date</th>
            <th>Booking Type</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>001</td>
            <td>2024-01-01</td>
            <td>Fitness-Center</td>
        </tr>
        <tr>
            <td>002</td>
            <td>2024-01-05</td>
            <td>Common Area</td>
        </tr>
        <tr>
            <td>003</td>
            <td>2024-01-10</td>
            <td>Pool</td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>
            </div>
           
          </div>

        </div>
        
       
  
       
      </div>

  </div>

</body>
</html>