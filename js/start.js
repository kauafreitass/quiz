
function start() {
  const button = document.getElementById("box");
  button.classList.add("hidden");

  const player1 = document.getElementById('disabled-div-1');
  player1.classList.remove('disabled');

  const textAwait = document.getElementById('disable-text-1')
  textAwait.classList.add("hidden");
  startTimer();
}