const toggleTag = document.querySelector("a.toggle-nav");
const mainNav = document.querySelector(".main-navigation");

toggleTag.addEventListener("click", function () {
  mainNav.classList.toggle("open");

  //   if (mainNav.classList.contains("open")) {
  //     toggleTag.innerHTML = "Close";
  //   } else {
  //     toggleTag.innerHTML = "Menu";
  //   }
});
