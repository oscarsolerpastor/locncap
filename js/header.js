const headerTag = document.querySelector("header");
const logoTag = document.querySelector(".logo");

const toggleHeader = function () {
  const pixels = window.pageYOffset;

  if (pixels > 60) {
    headerTag.classList.add("scrolled");
    logoTag.classList.add("scrolled");
  } else {
    headerTag.classList.remove("scrolled");
    logoTag.classList.remove("scrolled");
  }
};

const fadeBox = function () {
  const pixels = window.pageYOffset;
  const alpha = Math.min(pixels / 200, 0.5);

  headerTag.style.boxShadow = "0 0 10px rgba(0, 0, 0, ${alpha})";
};

fadeBox();
toggleHeader();

document.addEventListener("scroll", function () {
  toggleHeader();
  fadeBox();
});
