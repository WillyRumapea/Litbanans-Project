const buttonOrder = document.querySelectorAll(".order-button");
const productType = document.querySelectorAll(".type-product img");

buttonOrder.forEach((b) => {
  b.addEventListener("click", () => {
    fetch("controller/check_loggin.php")
      .then((response) => response.json())
      .then((data) => {
        if (data.logged_in) {
          window.location.href = "page/user/orderForm.php";
        } else {
          window.location.href = "page/user/loginUser.php";
        }
      })
      .catch((err) => {
        console.log(err);
      });
  });
});

productType.forEach((e) => {
  e.addEventListener("mouseenter", () => {
    if (
      !e.nextElementSibling ||
      !e.nextElementSibling.classList.contains("description")
    ) {
      const containerDesProd = document.createElement("div");
      containerDesProd.classList.add("description", "hover-img-product");

      containerDesProd.innerHTML = "";
      const titDesc = document.createElement("h3");
      const descript = document.createElement("p");

      containerDesProd.style.width = "350px";
      containerDesProd.style.padding = "10px";

      titDesc.textContent = "Description";
      descript.textContent =
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nam quod magnam consequuntur praesentium odio et!";

      containerDesProd.appendChild(titDesc);
      containerDesProd.appendChild(descript);

      e.insertAdjacentElement("afterend", containerDesProd);
    }
  });

  e.addEventListener("mouseleave", () => {
    const description = e.nextElementSibling;
    if (description && description.classList.contains("description")) {
      description.remove();
    }
  });
});
