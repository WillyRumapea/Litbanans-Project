const orderPaygate = document.querySelector(".button-order-paygate");
const orderForm = document.querySelector("#order-form");

orderPaygate.addEventListener("click", async (e) => {
  e.preventDefault();

  const formData = new FormData(orderForm);
  try {
    const response = await fetch("../../controller/place_order.php", {
      method: "POST",
      body: formData,
    });
    const token = await response.text();
    window.snap.pay(token, {
      onSuccess: function (result) {
        alert("payment success!!");
        console.log(result);
        window.location.href = "../../homepage.php";
      },
      onError: function (result) {
        alert("payment failed!!");
        console.log(result);
        window.location.href = "../../homepage.php";
      },
    });
  } catch (err) {
    console.log(err.message);
  }
});
