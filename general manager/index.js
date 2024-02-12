document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('consumptionChart').getContext('2d');
    const consumptionChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'], // Example monthly labels
            datasets: [{
                label: 'Total Electricity Consumption (kWh)', // Adjusted label for clarity
                data: [300, 400, 350, 500, 450, 550], // Example data for electricity consumption
                fill: false,
                borderColor: 'rgb(75, 192, 192)', // Line color for electricity
                tension: 0.1 // Slight curve in the line
            }, {
                label: 'Total Water Consumption (Liters)', // Adjusted label for clarity
                data: [1200, 1100, 1150, 1080, 1220, 1250], // Example data for water consumption
                fill: false,
                borderColor: 'rgb(255, 99, 132)', // Line color for water
                tension: 0.1 // Slight curve in the line
            }]
        },
        options: {
            aspectRatio: 1, // Ensures the chart maintains a square shape
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Total Consumption'
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                },
                title: {
                    display: true,
                    text: 'Total Consumption Overview', // Title for the chart
                    padding: {
                        top: 10,
                        bottom: 30
                    },
                    font: {
                        size: 16,
                        weight: 'bold'
                    }
                }
            },
            responsive: true,
            maintainAspectRatio: false // Allows flexibility in adjusting aspect ratio
        }
    });
  });
  


let newDateFunction = new Date()
function randerDate(){
  newDateFunction.setDate(1)
  let day = newDateFunction.getDay()

  let currentDate = new Date(
      newDateFunction.getFullYear(),
      newDateFunction.getMonth() + 1,0
  ).getDate() // to get the last date of current month


  let prevDate = new Date(
      newDateFunction.getFullYear(),
      newDateFunction.getMonth(), 0
  ).getDate() // to get the last date of previous month

  let addNext = new Date(newDateFunction.getFullYear(), 
  newDateFunction.getMonth() + 2, 0).getDate() + 7;

  console.log(currentDate, prevDate, addNext);

  let month = newDateFunction.getMonth()
  let year = newDateFunction.getFullYear()
  let monthArr = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
  document.getElementById("month").innerHTML = monthArr[month] + " - " + year

  let today = new Date()
  let weekDay = today.getDay()
  document.getElementById("date").innerHTML = today.toDateString()
  document.querySelector(`.week :nth-child(${weekDay + 1})`).classList.add("active")



  let DATES = ""

  for(let x = day; x > 0; x--){
      DATES += "<div class='prev'>" + (prevDate - x + 1) + "</div>"
  }

  for(let i = 1; i <= currentDate; i++){
      if(i === today.getDate() && newDateFunction.getMonth() == today.getMonth() && newDateFunction.getFullYear() === today.getFullYear()){
          DATES += "<div class='today'>" + i + "</div>"
      }
      else{
          DATES += "<div>" + i + "</div>"
      }
  }

  for(let k = 1; k <= addNext; k++){
      if(k <= 1){
          DATES += "<div class='next'>" + k + "</div>"
      }
      else{
          break;
      }
  }

  document.querySelector('.dates').innerHTML = DATES
}

function moveDate(para){

  if(para == 'prev'){
      newDateFunction.setMonth(newDateFunction.getMonth() - 1)
  }

  else if(para == 'next'){
      newDateFunction.setMonth(newDateFunction.getMonth() + 1)
  }

  randerDate()
}

