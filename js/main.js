const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logoDark = document.querySelector(".logo-dark");
const menuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

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

const changeNavHeight = (height) => {
  navbar.style.height = height;
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
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});

menuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".features-slider", {
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

const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 4,

  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
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
  },
});

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 2,
  spaceBetween: 30,

  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
});

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) && modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});

document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});

const forms = document.querySelectorAll("form");

forms.forEach((form) => {
  // initialize the validation library
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });

  // apply rules to form fields
  validation
    .addField("[name=username]", [
      {
        rule: "required",
        errorMessage: "Укажите имя",
      },
      {
        rule: "maxLength",
        value: 50,
        errorMessage: "Максимум 50 символов",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
    ])
    .onSuccess((event) => {
      console.log(event.target.getAttribute("method"));
    });
});
