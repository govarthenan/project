let newDateFunction = new Date();

function randerDate() {
  newDateFunction.setDate(1);
  let day = newDateFunction.getDay();

  let currentDate = new Date(
    newDateFunction.getFullYear(),
    newDateFunction.getMonth() + 1,
    0
  ).getDate(); // to get the last date of current month

  let month = newDateFunction.getMonth();
  let year = newDateFunction.getFullYear();
  let monthArr = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
  ];
  document.getElementById("month").innerHTML = monthArr[month] + " - " + year;

  let today = new Date();
  let weekDay = today.getDay();
  document.getElementById("date").innerHTML = today.toDateString();
  document.querySelector(`.week :nth-child(${weekDay + 1})`).classList.add("active");

  let DATES = "";

  for (let i = 1; i <= currentDate; i++) {
    if (
      i === today.getDate() &&
      newDateFunction.getMonth() === today.getMonth() &&
      newDateFunction.getFullYear() === today.getFullYear()
    ) {
      DATES += "<div class='today'>" + i + "</div>";
    } else {
      DATES += "<div>" + i + "</div>";
    }
  }

  document.querySelector('.dates').innerHTML = DATES;
}

function moveDate(para) {
  if (para === 'prev') {
    newDateFunction.setMonth(newDateFunction.getMonth() - 1);
  } else if (para === 'next') {
    newDateFunction.setMonth(newDateFunction.getMonth() + 1);
  }

  randerDate();
}
