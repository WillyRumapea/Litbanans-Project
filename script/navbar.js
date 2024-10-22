const hamMenu = document.querySelector(".ham-menu");
const sideBar = document.querySelector(".container-navbar ul");
let conditiSide = false;

hamMenu.addEventListener("click", () => {
  if (!conditiSide) {
    sideBar.style.transform = "translate(274px,24vh)";
    conditiSide = true;
  } else {
    sideBar.style.transform = "translate(500px,24vh)";
    conditiSide = false;
  }
});
