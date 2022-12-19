/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************************!*\
  !*** ./resources/assets/js/generate-otp.js ***!
  \*********************************************/
$('#generate-otp').click(function () {
  var value = $(this).html().trim();

  if (value == 'proceed') {
    $(this).html('Login');
    $('#login-otp').css('display', "flex");
    $('#mobile-num').css('display', "none");
  } else {
    $(this).html('Login');
    $('#login-otp').css('display', "flex");
    $('#mobile-num').css('display', "none");
  }
});
/******/ })()
;