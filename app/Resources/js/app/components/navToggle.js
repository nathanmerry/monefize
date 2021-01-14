const menuToggle = document.getElementById("hamburger");
const container = document.getElementById("hamburger--line");

menuToggle.addEventListener("click", () => {
  if (container.classList.contains("hamburger--line__x")) {
    container.classList.remove("hamburger--line__x");
  } else {
    container.classList.add("hamburger--line__x");
  }

  const menu = document.getElementById("menu");

  if (menu.classList.contains("menu--active")) {
    menu.classList.remove("menu--active");
  } else {
    menu.classList.add("menu--active");
  }
});
