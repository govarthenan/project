document.addEventListener('DOMContentLoaded', function() {
  const ctx = document.getElementById('consumptionChart').getContext('2d');
  const consumptionChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June'], // Example monthly labels
          datasets: [{
              label: 'Electricity Consumption (kWh)', // First dataset for electricity consumption
              data: [300, 400, 350, 500, 450, 550], // Example data
              fill: false,
              borderColor: 'rgb(75, 192, 192)', // Line color
              tension: 0.1 // Makes line slightly curved
          }, {
              label: 'Water Consumption (Liters)', // Second dataset for water consumption
              data: [1200, 1100, 1150, 1080, 1220, 1250], // Example data
              fill: false,
              borderColor: 'rgb(255, 99, 132)', // Line color
              tension: 0.1 // Makes line slightly curved
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true,
                  title: {
                      display: true,
                      text: 'Consumption'
                  }
              }
          },
          plugins: {
              legend: {
                  display: true,
                  position: 'top'
              }
          },
          responsive: true
      }
  });
});


