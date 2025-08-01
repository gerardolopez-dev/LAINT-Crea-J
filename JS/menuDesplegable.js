const openMenu = document.getElementById("openMenu");
const closeMenu = document.getElementById("closeMenu");
const sideMenu = document.getElementById("sideMenu");
const overlay = document.getElementById("overlay");

openMenu.addEventListener("click", () => {
  sideMenu.classList.add("open");
  overlay.classList.add("visible");
});

function closeSideMenu() {
  sideMenu.classList.remove("open");
  overlay.classList.remove("visible");
}

closeMenu.addEventListener("click", closeSideMenu);
overlay.addEventListener("click", closeSideMenu);