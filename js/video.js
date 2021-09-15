$(function () {
  var screenWidth = $(window).width();
  if (screenWidth >= 800) {
    $("#video-play").attr("autoplay", "autoplay");
  }
});
