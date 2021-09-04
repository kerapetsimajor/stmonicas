// duration of scroll animation
var scrollDuration = 300;
// paddles
var leftPaddle = document.getElementsByClassName("left-paddle");
var rightPaddle = document.getElementsByClassName("right-paddle");
// get items dimensions
var itemsLength = 6;
var itemSize = $(".item").outerWidth(true);
// get some relevant size for the paddle triggering point
var paddleMargin = 20;

// get wrapper width
var getGalleryWrapperSize = function () {
  return $(".gallery-wrapper").outerWidth();
};
var galleryWrapperSize = getGalleryWrapperSize();
// the wrapper is responsive
$(window).on("resize", function () {
  galleryWrapperSize = getGalleryWrapperSize();
});
// size of the visible part of tGallery is equal as the wrapper size
var galleryVisibleSize = galleryWrapperSize;

// get total width of all menu items
var getGallerySize = function () {
  return itemsLength * itemSize;
};
var gallerySize = getGallerySize();
// get how much of menu is invisible
var galleryInvisibleSize = gallerySize - galleryWrapperSize;

// get how much have we scrolled to the left
var getGalleryPosition = function () {
  return $(".gallery").scrollLeft();
};

// finally, what happens when we are actually scrolling the menu
$(".gallery").on("scroll", function () {
  // get how much of menu is invisible
  galleryInvisibleSize = gallerySize - galleryWrapperSize;
  // get how much have we scrolled so far
  var galleryPosition = getGalleryPosition();

  var galleryEndOffset = galleryInvisibleSize - paddleMargin;

  // show & hide the paddles
  // depending on scroll position
  if (galleryPosition <= paddleMargin) {
    $(leftPaddle).addClass("hidden");
    $(rightPaddle).removeClass("hidden");
  } else if (galleryPosition < galleryEndOffset) {
    // show both paddles in the middle
    $(leftPaddle).removeClass("hidden");
    $(rightPaddle).removeClass("hidden");
  } else if (galleryPosition >= galleryEndOffset) {
    $(leftPaddle).removeClass("hidden");
    $(rightPaddle).addClass("hidden");
  }

  // print important values
  $("#print-wrapper-size span").text(galleryWrapperSize);
  $("#print-gallery-size span").text(gallerySize);
  $("#print-gallery-invisible-size span").text(galleryInvisibleSize);
  $("#print-gallery-position span").text(galleryPosition);
});

// scroll to left
$(rightPaddle).on("click", function () {
  $(".gallery").animate({ scrollLeft: galleryInvisibleSize }, scrollDuration);
});

// scroll to right
$(leftPaddle).on("click", function () {
  $(".gallery").animate({ scrollLeft: "0" }, scrollDuration);
});
