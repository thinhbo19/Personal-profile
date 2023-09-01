let list = document.querySelectorAll(".list");
let menu = document.querySelector("#menu-btn");
let header = document.querySelector(".header");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  header.classList.toggle("active");
  document.body.classList.toggle("active");
};

window.onscroll = () => {
  if (window.innerHeight < 991) {
    menu.classList.remove("fa-times");
    header.classList.remove("active");
    document.body.classList.remove("active");
  }
};

for (let i = 0; i < list.length; i++) {
  list[i].onclick = function () {
    let j = 0;
    while (j < list.length) {
      list[j++].className = "list";
    }
    list[i].className = "list active";
  };
}

document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll(".navbar ul li a");

  function makeLinkActive() {
    const currentSection = Array.from(sections).find((section) => {
      const top = window.scrollY;
      const offset = section.offsetTop;
      const height = section.offsetHeight;
      return top >= offset && top < offset + height;
    });

    navLinks.forEach((link) => link.classList.remove("active"));

    const currentLink = document.querySelector(
      `.navbar ul li a[href="#${currentSection.id}"]`
    );
    if (currentLink) {
      currentLink.classList.add("active");
    }
  }

  makeLinkActive();

  window.addEventListener("scroll", makeLinkActive);
});

const secLogin = document.querySelector(".secLogin");
const linkLogin = document.querySelector(".alogin-list");
const iconClose = document.querySelector(".icon-close");
const registerLink = document.querySelector(".register-link");
const loginLink = document.querySelector(".login-link");
const forgot = document.querySelector(".forgot-pass");
const back = document.querySelector(".login-link-back");

linkLogin.addEventListener("click", () => {
  secLogin.classList.add("active");
});
iconClose.addEventListener("click", () => {
  secLogin.classList.remove("active");
});

registerLink.addEventListener("click", () => {
  secLogin.classList.add("active-login");
});

loginLink.addEventListener("click", () => {
  secLogin.classList.remove("active-login");
});

forgot.addEventListener("click", () => {
  secLogin.classList.add("active-forgot");
});

back.addEventListener("click", () => {
  secLogin.classList.remove("active-forgot");
});

