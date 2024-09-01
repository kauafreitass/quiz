function skipToAnotherPlayer() {
  const disabledDiv1 = document.getElementById("disabled-div-1");
  disabledDiv1.classList.toggle("disabled");

  const textAwait = document.getElementById("disabled-text-1");
  textAwait.classList.toggle("hidden");

  const disabledDiv2 = document.getElementById("disabled-div-2");
  disabledDiv2.classList.toggle("disabled");

  const textAwait2 = document.getElementById("disabled-text-2");
  textAwait2.classList.toggle("hidden");

  const body = document.body;
  body.classList.toggle("green");
  body.classList.toggle("pink");
}


var timerInterval;
var display = document.querySelector("#time");

function Timer(duration, display) {
  var timer = duration,
    seconds;
  timerInterval = setInterval(function () {
    seconds = parseInt(timer % 60, 10);
    seconds = seconds < 10 ? "0" + seconds : seconds;
    display.textContent = seconds;
    if (--timer < 0) {
      restartTimer();
      skipToAnotherPlayer();
    }
  }, 1000);
  return timerInterval;
}

function startTimer() {
  Timer(15, display);
}

function restartTimer() {
  clearInterval(timerInterval);
  display.textContent = "15";
  Timer(15, display);
}


