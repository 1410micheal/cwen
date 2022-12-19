/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/assets/js/slider.js ***!
  \***************************************/
(function ($) {
  "use strict";

  $("#mySlider").slider({
    range: true,
    min: 10,
    max: 999,
    values: [200, 500],
    slide: function slide(event, ui) {
      $("#price").val("$" + ui.values[0] + " - $" + ui.values[1]);
    }
  });
  $("#price").val("$" + $("#mySlider").slider("values", 0) + " - $" + $("#mySlider").slider("values", 1));
})(jQuery);
/******/ })()
;