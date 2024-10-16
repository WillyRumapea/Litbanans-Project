const buttonOrder = document.querySelectorAll(".order-button");
const productType = document.querySelectorAll(".type-product img");
const buttonLoggin = document.getElementsByClassName("button-login")[0];
const buttonReggis = document.getElementsByClassName("button-daftar")[0];
const headerNav = document.querySelector(".header");
const typeProductImg = document.querySelectorAll(".product-img");
const productTitle = document.querySelectorAll(".product-sect-title");
const productDesc = document.querySelectorAll(".product-sect-desc");
const imgContent = document.querySelectorAll(".desc-img-content");
const navLinks = document.querySelectorAll(".nav-link");
const usernameProfile = document.querySelector(".username");

typeProductImg.forEach((img, index) => {
  img.addEventListener("mouseenter", () => {
    imgContent[index].classList.add("visible");
    productTitle[index].classList.add("visible");
    productDesc[index].classList.add("visible");
  });
  img.addEventListener("mouseleave", () => {
    imgContent[index].classList.remove("visible");
    productTitle[index].classList.remove("visible");
    productDesc[index].classList.remove("visible");
  });
});

navLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();

    const targetId = link.getAttribute("href");
    const targetElement = document.querySelector(targetId);

    if (targetElement) {
      const targetPosition =
        targetElement.getBoundingClientRect().top + window.scrollY - 100;

      window.scrollTo({
        top: targetPosition,
        behavior: "smooth",
      });

      navLinks.forEach((l) => l.classList.remove("active"));
      link.classList.add("active");
    }
  });
});

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

if (buttonLoggin) {
  buttonLoggin.addEventListener("click", () => {
    window.location.href = "page/user/loginUser.php";
  });
}

if (buttonReggis) {
  buttonReggis.addEventListener("click", () => {
    window.location.href = "page/user/regisUser.php";
  });
}

window.addEventListener("scroll", () => {
  if (scrollY > 10) {
    headerNav.style.backgroundColor = "#fbc606";
  } else {
    headerNav.style.backgroundColor = "#fffaa6";
  }
});

if (usernameProfile) {
  usernameProfile.addEventListener("click", () => {
    window.location.href = "page/user/logoutUser.php";
  });
}
