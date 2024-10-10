const buttonOrder = document.querySelectorAll(".order-button");
const productType = document.querySelectorAll(".type-product img");
const buttonLoggin = document.getElementsByClassName("button-login")[0];
const buttonReggis = document.getElementsByClassName("button-daftar")[0];
const headerNav = document.querySelector(".header");
const navLinks = document.querySelectorAll(".nav-link");
const productSectTitle = document.querySelectorAll(".product-sect-title");
const productSectContent = document.querySelectorAll(".product-sect-content");
const usernameProfile = document.querySelector(".username");

productType.forEach((img, index) => {
  img.addEventListener("mouseover", () => {
    productSectTitle[index].style.display = "block";
    productSectContent[index].style.display = "block";
    productSectTitle[index].style.border = "1px solid";
  });
  img.addEventListener("mouseout", () => {
    productSectTitle[index].style.display = "none";
    productSectContent[index].style.display = "none";
  });
});

navLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault(); // Mencegah perilaku default dari link

    const targetId = link.getAttribute("href"); // Mengambil ID dari href
    const targetElement = document.querySelector(targetId); // Mencari elemen target

    if (targetElement) {
      const targetPosition =
        targetElement.getBoundingClientRect().top + window.scrollY - 85; // Menghitung posisi scroll

      window.scrollTo({
        top: targetPosition,
        behavior: "smooth", // Efek scroll yang halus
      });

      // Mengatur kelas active
      navLinks.forEach((l) => l.classList.remove("active")); // Menghapus kelas active dari semua link
      link.classList.add("active"); // Menambahkan kelas active pada link yang diklik

      // Menyembunyikan header
      // header.classList.add("header-hidden");
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
