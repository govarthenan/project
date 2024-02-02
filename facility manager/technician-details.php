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
      <div class="technician-container">
        <div class="add-button-container">
          <div class="technician-details-heading">Technician log</div>
        <button id="addnewTechnician" class="add-btn-technician">+ Add Technician</button>
        </div>
       
        <div class="technician-details-block-container">
           <div id="technicians" class="technicians-container">
              <div class="technician-card">
                 <img src="image.png" class="technician-profile-image">
                 <div class="technicain-name"> John</div>
                 <div class="technician-id">TE01</div>
                 <div class="specialization"> Electrician</div>
                 <div class="experience">Experience: 5 Years</div>
                 <div class="technician-button-container">
                   <div class="message-button">
                     <button id="messageTechnician" class="msg-button">Message</button>
                   </div>
                   <div class="delete-button">
                     <button id="removeTechnician" class="dlt-btn">Remove</button>
                   </div>
                 </div>
              </div>
              
              
              <div class="technician-card"  class="technician-profile-image">
                 <img src="image.png" class="technician-profile-image">
                 <div class="technicain-name"> Peter</div>
                 <div class="technician-id">TE02</div>
                 <div class="specialization"> Electrician</div>
                 <div class="experience">Experience: 5 Years</div>
                 <div class="technician-button-container">
                   <div class="message-button">
                     <button id="messageTechnician" class="msg-button">Message</button>
                   </div>
                   <div class="delete-button">
                     <button id="removeTechnician" class="dlt-btn">Remove</button>
                   </div>
                 </div>
              </div>
           </div>
        </div>
       </div>
    </div>
    <div id="myModal" class="modal" style="display: none;">
        <div class="add-technician-container">
           <span class="close">&times;</span>
           <div class="add-new-technician-heading">Add new technician</div>
             <form id="addTechnicianForm"  method="post">
           <div class="new-technician-input-container">
              <div class="technichian-left">
                  <div class="form-group">
                   <label for="firstName">First Name:</label>
                   <input type="text" id="firstName" name="firstName" required>
                  </div>
                  <div class="form-group">
                   <label for="specialization">Specialization:</label>
                   <input type="text" id="specialization" name="specialization" required>
                  </div>
                  <div class="form-group">
                   <label for="email">Email:</label>
                   <input type="email" id="email" name="email" required>
                  </div>
              </div>

                <div class="technician-right">
                   <div class="form-group">
                     <label for="lastName">Last Name:</label>
                     <input type="text" id="lastName" name="lastName" required>
                  </div>
                  <div class="form-group">
                     <label for="experience">Experience (Years):</label>
                     <input type="number" id="experience" name="experience" min="0" required>
                  </div>
                  <div class="form-group">
                     <label for="lastName">Phone number:</label>
                     <input type="tel" id="phone" name="phone"  required>
                  </div>
                </div>
                <div class="submit-column-confirmation">
                    <button class="cancel-btn-technician">Cancel</button>
                    <button class="submit-btn-technician">Add Technician</button>
                </div>
           </form>
              </div>
                
            </div>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>