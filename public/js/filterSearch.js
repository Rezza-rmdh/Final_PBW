const filtersBtn = document.getElementById("filtersBtn");
const filtersContainer = document.getElementById("filtersContainer");

filtersBtn.addEventListener("click", () => {
  filtersContainer.classList.toggle("show");
});
