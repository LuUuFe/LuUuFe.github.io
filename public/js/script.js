const htmlElement = document.querySelector("html");
const iconThemeElement = document.getElementById("icon-theme");
const logoElements = document.querySelectorAll('.logo');

if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
  htmlElement.setAttribute("data-bs-theme", "dark");
  iconThemeElement.setAttribute("class", "bi bi-moon fs-5");
  logoElements.forEach(logoElement => {
    logoElement.setAttribute("src", "img/krakix-transparent.png");
  });
} else {
  htmlElement.setAttribute("data-bs-theme", "light");
  iconThemeElement.setAttribute("class", "bi bi-brightness-high fs-5");
  logoElements.forEach(logoElement => {
    logoElement.setAttribute("src", "img/krakix-light.png");
  });
}

function toggleTheme() {
  let currentTheme = htmlElement.getAttribute("data-bs-theme");

  if (currentTheme === "dark") {
    htmlElement.setAttribute("data-bs-theme", "light");
    iconThemeElement.setAttribute("class", "bi bi-brightness-high fs-5");
    logoElements.forEach(logoElement => {
      logoElement.setAttribute("src", "img/krakix-light.png");
    });
  } else {
    htmlElement.setAttribute("data-bs-theme", "dark");
    iconThemeElement.setAttribute("class", "bi bi-moon fs-5");
    logoElements.forEach(logoElement => {
      logoElement.setAttribute("src", "img/krakix-transparent.png");
    });
  }
}