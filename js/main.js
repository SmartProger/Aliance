const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logoDark = document.querySelector(".logo-dark");
const menuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logoDark.style.display = "block";
  logoLight.style.display = "none";
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logoLight.style.display = "block";
  logoDark.style.display = "none";
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

const swiper = new Swiper(".swiper", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 5,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
    1220: {
      slidesPerView: 5,
    },
  },
});
