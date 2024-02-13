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


document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('financeChart').getContext('2d');
    const financeChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'], // Example months
            datasets: [
                {
                    label: 'Income',
                    data: [5000, 6000, 5500, 6500, 6200, 6800], // Example income data
                    borderColor: '#154aaa',
                    backgroundColor: 'rgba(21, 74, 170,0.2)',
                    fill: true,
                    tension: 0.1
                },
                {
                    label: 'Expense',
                    data: [3000, 3500, 2800, 4000, 3700, 4500], // Example expense data
                    borderColor: '#f43c6e',
                    backgroundColor: 'rgba(244, 60, 110,0.1)',
                    fill: true,
                    tension: 0.1
                },
                {
                    label: 'Balance',
                    data: [2000, 2500, 2700, 2500, 2500, 2300], // Example balance data (Income - Expense)
                    borderColor: '#4cc2c4',
                    backgroundColor: 'rgba(76, 194, 196,0.2)',
                    fill: true,
                    tension: 0.1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Amount ($)'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Month'
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            },
            responsive: true,
            maintainAspectRatio: false // Adjusted to maintain aspect ratio within the given square
        }
    });
});


