function Videogame() {
  this.init = function () {
    this.images = document.querySelectorAll(
      ".videogame .player .featured-player"
    );
    this.video = document.querySelector(".videogame video");
    this.videosContainer = document.querySelector(".videogame .choosed-player");
    this.initVideos();
    this.currentIndex = null;
    this.images.forEach((img, index) =>
      img.addEventListener("click", this.onImageClick.bind(this, index))
    );
  };

  this.onImageClick = function (index) {
    if (this.currentIndex !== null) {
      this.images[this.currentIndex].classList.remove("active");
      this.videos[this.currentIndex].style.display = "none";
      this.videos[this.currentIndex].pause();
    }
    this.currentIndex = index;
    this.images[this.currentIndex].classList.add("active");
    this.videos[this.currentIndex].style.display = "block";
    this.videos[this.currentIndex].play();
  };

  this.setCurrentImage = function (index) {
    const image = this.images[index];
    if (!image) {
      return;
    }
    this.onImageClick(index);
  };

  this.initVideos = function () {
    this.videos = [];
    [...Array(9)].forEach((n, i) => {
      var video = document.createElement("video");
      var videoNumber = "-0" + (i + 1) + "-";
      video.src = this.video.src.replace(/-[0-9]{2}-/, videoNumber);
      video.preload = true;
      video.autoplay = false;
      video.loop = true;
      video.muted = true;
      video.style.display = "none";
      this.videosContainer.appendChild(video);
      this.videos.push(video);
    });
    this.video.remove();
  };
}

var videogame = new Videogame();
videogame.init();
videogame.setCurrentImage(8);
