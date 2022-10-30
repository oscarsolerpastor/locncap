const animatedTags = document.querySelectorAll(
  "h1, h2, h3, p, section video, img.animate, button"
);

animatedTags.forEach((tag) => {
  tag.style.opacity = 0;
});

const fadeIn = function () {
  animatedTags.forEach((tag) => {
    const tagTop = tag.getBoundingClientRect().top;
    const tagBottom = tag.getBoundingClientRect().bottom;

    if (tagTop < window.innerHeight && tagBottom > 0) {
      tag.style.animation = "fadein 1s both";
    } else {
      tag.style.opacity = 0;
      tag.style.animation = "";
    }
  });
};

fadeIn();

document.addEventListener("scroll", function () {
  fadeIn();
});

// on browseer resize
window.addEventListener("resize", function () {
  fadeIn();
});
