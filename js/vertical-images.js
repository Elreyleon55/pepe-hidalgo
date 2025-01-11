document.addEventListener("DOMContentLoaded", function () {
  const images = document.querySelectorAll("img");

  images.forEach((img) => {
    img.onload = () => {
      if (!img.classList.contains("news-images")) {
        if (img.naturalHeight > img.naturalWidth) {
          img.classList.add("portrait-image");
        }
      }
    };
  });
});
