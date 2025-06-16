const orderPaygate = document.querySelector(".button-order-paygate");
const orderForm = document.querySelector("#order-form");

orderPaygate.addEventListener("click", async (e) => {
  e.preventDefault();

  const formData = new FormData(orderForm);
  const alamatValue = formData.get("alamat")?.trim();
  try {
    const response = await fetch("../../controller/place_order.php", {
      method: "POST",
      body: formData,
    });
    const token = await response.text();
    window.snap.pay(token, {
      onSuccess: function (result) {
        console.log(result);
        if (alamatValue) {
          window.location.href = "./waiting_delivery.php";
        } else {
          window.location.href = "../../homepage.php";
        }
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
