lightGallery(document.getElementById("lightgallery"), {
  licenseKey: "0000-0000-000-0000",
  speed: 500,
  download: false,
  hideScrollba: true,
  numberOfSlideItemsInDom: 3,
  nextHtml:
    "<svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#e8eaed'><path d='m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z'/></svg>",
  prevHtml:
    "<svg height='24px' viewBox='0 -960 960 960' width='24px' fill='#e8eaed'><path d='M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z'/></svg>",
  closeIcon:
    "<svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#e8eaed'><path d='m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z'/></svg>",
  mobileSettings: {
    controls: true,
    showCloseIcon: false,
    download: false,
    rotate: false,
  },
});

lightGallery(document.getElementById("lightgallery-vertical"), {
  licenseKey: "0000-0000-000-0000",
  speed: 500,
  numberOfSlideItemsInDom: 3,
  download: false,
  hideScrollba: true,
  nextHtml:
    "<svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#e8eaed'><path d='m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z'/></svg>",
  prevHtml:
    "<svg height='24px' viewBox='0 -960 960 960' width='24px' fill='#e8eaed'><path d='M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z'/></svg>",
  closeIcon:
    "<svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#e8eaed'><path d='m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z'/></svg>",
  mobileSettings: {
    controls: false,
    showCloseIcon: false,
    download: false,
    rotate: false,
  },
  // ... other settings
});
