var timerInterval;
var display = document.querySelector("#time");

function Timer(duration, display) {
  var timer = duration,
    seconds;
  timerInterval = setInterval(function () {
    seconds = parseInt(timer % 60, 10);
    seconds = seconds < 10 ? "0" + seconds : seconds;
    display.textContent = seconds;
    if (--timer < -1) {
      restartTimer();
      nextQuestionPlayer();
    }
  }, 1000);
  return timerInterval;
}

function startTimer() {
  Timer(10, display);
}

function restartTimer() {
  clearInterval(timerInterval);
  display.textContent = "10";
  Timer(10, display);
}

function nextQuestionPlayer() {
  const queryString = window.location.search;
  var urlParams = new URLSearchParams(queryString);

  const action = urlParams.get("action");
  const player1 = urlParams.get('player1');

  if (action === "start") {
    window.location.href = "index.php?action=answerIsCorrect";
  } else if (player1 === "finished") {
    window.location.href = "index.php?action=answerIsCorrectPlayer2";
  } else if (action === "answerIsCorrect") {
    window.location.href = "index.php?action=answerIsCorrect";
  } else if (action === "answerIsCorrectPlayer2") {
    window.location.href = "index.php?action=answerIsCorrectPlayer2";
  }
}
