function skipToPlayer2() {
  const disabledDiv = document.getElementById("disabled-div-1");
  disabledDiv.classList.add("disabled");

  const textAwait = document.getElementById("disable-text-1");
  textAwait.classList.remove("hidden");

  const disabledDiv2 = document.getElementById("disabled-div-2");
  disabledDiv2.classList.remove("disabled");

  const textAwait2 = document.getElementById("disable-text-2");
  textAwait2.classList.remove("hidden");
}

function skipToPlayer1() {
  const disabledDiv = document.getElementById("disabled-div-2");
  disabledDiv.classList.add("disabled");

  const textAwait = document.getElementById('disable-text-2')
  textAwait.classList.remove("hidden");
}
