// var grid = document.querySelector(".grid");
// var msnry;

// imagesLoaded(grid, function () {
//   // init Isotope after all images have loaded
//   console.log("all images are loaded");
//   msnry = new Masonry(grid, {
//     itemSelector: ".grid-item",
//     columnWidth: ".grid-sizer",
//     gutter: 5,
//     percentPosition: true,
//     fitWidth: true,
//   });
// });

// old code for the mansonry settings
var grid = document.querySelector(".grid");

var msnry = new Masonry(grid, {
  itemSelector: ".grid-item",
  columnWidth: ".grid-sizer",
  percentPosition: true,
});

imagesLoaded(grid).on("progress", function () {
  // layout Masonry after each image loads
  msnry.layout();
});
