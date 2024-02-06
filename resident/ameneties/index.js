var modal = document.getElementById("myModal");
    var btn = document.getElementById("submit-btn-amenity");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


    /* Common area bookin*/

    function formatDate(date) {
        const month = (date.getMonth() + 1).toString().padStart(2, '0');
        const day = date.getDate().toString().padStart(2, '0');
        return `${month}/${day}`;
      }
      
      const today = new Date();
      let currentWeekStartDate = new Date(today.getFullYear(), today.getMonth(), today.getDate() - today.getDay());
      const maxDate = new Date(today.getFullYear(), today.getMonth(), today.getDate() + (7 * 25)); // Allow 8 weeks from today
      
      const daysOfWeek = ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'];
      const dateElements = document.querySelectorAll('.date-name');
      const arrowLeft = document.querySelector('.date-name-arrow:first-child');
      const arrowRight = document.querySelector('.date-name-arrow:last-child');
      
      // Gets the starting day of the week for any date
      function getStartDateOfWeek(date) {
        return new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay());
      }
      
      // Generates and returns the dates for the current week
      function getWeekDates(startDate) {
        let weekDates = [];
        for (let i = 0; i < 7; i++) {
          let newDate = new Date(startDate);
          newDate.setDate(startDate.getDate() + i);
          if (newDate <= maxDate) {
            weekDates.push(formatDate(newDate));
          } else {
            break; // Stop if it exceeds the maxDate
          }
        }
        return weekDates;
      }
      
      // Updates the week display with the given dates
      function updateWeekDisplay(weekDates) {
        dateElements.forEach((element, index) => {
          if (index < weekDates.length) {
            element.textContent = `${daysOfWeek[(currentWeekStartDate.getDay() + index) % 7]} \n ${weekDates[index]}`;
          } else {
            element.textContent = ''; // Clear if no date is assigned
          }
        });
      }
      
      // Handles updating the current week based on navigation
      function updateWeek(direction) {
        if (direction === 'next') {
          let nextWeekStartDate = new Date(currentWeekStartDate);
          nextWeekStartDate.setDate(currentWeekStartDate.getDate() + 7);
          if (nextWeekStartDate < maxDate) {
            currentWeekStartDate = nextWeekStartDate;
          }
        } else if (direction === 'prev') {
          let prevWeekStartDate = new Date(currentWeekStartDate);
          prevWeekStartDate.setDate(currentWeekStartDate.getDate() - 7);
          if (prevWeekStartDate >= getStartDateOfWeek(new Date())) { // Ensure not going back past current week
            currentWeekStartDate = prevWeekStartDate;
          }
        }
        
        let weekDates = getWeekDates(currentWeekStartDate);
        updateWeekDisplay(weekDates);
      }
      
      // Initialize the display with the current week
      updateWeek();
      
      arrowLeft.addEventListener('click', () => updateWeek('prev'));
      arrowRight.addEventListener('click', () => updateWeek('next'));
      