const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const menuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo-dark";
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo-light";
};

const openMenu = (event) => {
  menu.classList.add("is-open");
  document.body.style.overflow = "hidden";
  menuToggle.classList.add("close-menu");
  lightModeOn();
};

const closeMenu = (event) => {
  menu.classList.remove("is-open");
  document.body.style.overflow = "";
  menuToggle.classList.remove("close-menu");
  if (document.documentElement.scrollTop == 0) {
    lightModeOff();
  }
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});

menuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});
