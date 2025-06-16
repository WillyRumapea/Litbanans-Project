const buttonConfirmation = document.getElementById("confirmButton");
const titleDeliv = document.getElementById("delivery-title");
const messDeliv = document.querySelector(".message-delivery");
const timer = document.getElementById("timer");
const buttonNotConfirm = document.getElementById("notConfirmButton");
const buttonExit = document.querySelector(".exit");
let isRecived = false;
console.log(isRecived);

function confirmOrder() {
  isRecived = true;
  alert("terimakasih dan selamat menikmati");
  titleDeliv.innerText = "Pesanan telah tiba, Terimakasih";
  messDeliv.innerText = "Silahkan tekan tombol exit";
  timer.remove();
  // window.location.href = "../../homepage.php";
  console.log(isRecived);
  buttonNotConfirm.disabled = true;
  buttonNotConfirm.style.cursor = "not-allowed";
}

buttonConfirmation.addEventListener("click", () => {
  confirmOrder();
});

window.addEventListener("beforeunload", (e) => {
  if (!isRecived) {
    e.preventDefault();
    e.returnValue = "";
  }
});

let seconds = 0;

setInterval(() => {
  seconds++;

  const minutes = Math.floor(seconds / 60);
  const remainingSeconds = seconds % 60;

  const formattedTime = `${minutes}:${remainingSeconds
    .toString()
    .padStart(2, "0")}`;
  const timerElement = document.getElementById("timer");
  if (timerElement) timerElement.textContent = formattedTime;

  if (!isRecived) {
    if (seconds === 120) {
      confirmOrder();
    }
  } else {
  }
}, 1000);

buttonNotConfirm.addEventListener("click", () => {
  document.querySelector(".select-opt").removeAttribute("hidden");
});

buttonExit.addEventListener("click", () => {
  window.location.href = "../../homepage.php";
});
