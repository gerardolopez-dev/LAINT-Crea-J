const openMenuTop = document.getElementById("openMenuTop");
const closeTopMenu = document.getElementById("closeTopMenu");
const subMenu = document.getElementById("subMenu");


openMenuTop.addEventListener("click", () => {
  subMenu.classList.add("open");
});

function closesubMenu() {
  subMenu.classList.remove("open");
}
closeTopMenu.addEventListener("click", closesubMenu);
