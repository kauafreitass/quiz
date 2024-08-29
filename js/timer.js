var timerInterval;
var display = document.querySelector("#time");

async function Timer(duration, display) {
  var timer = duration,
    seconds;
  timerInterval = setInterval(function () {
    seconds = parseInt(timer % 60, 10);
    seconds = seconds < 10 ? "0" + seconds : seconds;
    display.textContent = seconds;
    if (--timer < 0) {
      clearInterval(timerInterval);
S    }
  }, 1000);
  return timerInterval;
}

function startTimer() {
  Timer(14, display);
}

function restartTimer() {
  clearInterval(timerInterval);
  display.textContent = "15";
  Timer(14, display);   
}


