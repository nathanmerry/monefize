document.getElementById('navToggle').addEventListener("click", () => {
  const menu = document.getElementById('menu');

  if (menu.classList.contains('menu--active')) {
    menu.classList.remove('menu--active')
  } else {
    menu.classList.add('menu--active')
  }
})
