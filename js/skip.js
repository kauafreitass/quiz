function skipToAnotherPlayer() {
  const disabledDiv1 = document.getElementById("disabled-div-1");
  disabledDiv1.classList.toggle("disabled");

  const textAwait = document.getElementById("disabled-text-1");
  textAwait.classList.toggle("hidden");

  const disabledDiv2 = document.getElementById("disabled-div-2");
  disabledDiv2.classList.toggle("disabled");

  const textAwait2 = document.getElementById("disabled-text-2");
  textAwait2.classList.toggle("hidden");
}

function disableButton1() {
}