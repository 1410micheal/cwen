/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/js/custom1.js":
/*!****************************************!*\
  !*** ./resources/assets/js/custom1.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "checkOptions": () => (/* binding */ checkOptions)
/* harmony export */ });
/* harmony import */ var _themeColors_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./themeColors.js */ "./resources/assets/js/themeColors.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }



(function ($) {
  "use strict"; // ______________ PAGE LOADING

  $(window).on("load", function (e) {
    $("#global-loader").fadeOut("slow");
  }); //Color-Theme

  $(document).on("click", "a[data-theme]", function () {
    $("head link#theme").attr("href", $(this).data("theme"));
    $(this).toggleClass('active').siblings().removeClass('active');
  }); // ______________Full screen

  $(document).on("click", ".fullscreen-button", function toggleFullScreen() {
    $('.fullscreen-button').addClass('fullscreen-button');

    if (document.fullScreenElement !== undefined && document.fullScreenElement === null || document.msFullscreenElement !== undefined && document.msFullscreenElement === null || document.mozFullScreen !== undefined && !document.mozFullScreen || document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen) {
      if (document.documentElement.requestFullScreen) {
        document.documentElement.requestFullScreen();
      } else if (document.documentElement.mozRequestFullScreen) {
        document.documentElement.mozRequestFullScreen();
      } else if (document.documentElement.webkitRequestFullScreen) {
        document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
      } else if (document.documentElement.msRequestFullscreen) {
        document.documentElement.msRequestFullscreen();
      }
    } else {
      $('html').removeClass('fullscreen-button');

      if (document.cancelFullScreen) {
        document.cancelFullScreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitCancelFullScreen) {
        document.webkitCancelFullScreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      }
    }
  }); // ______________ BACK TO TOP BUTTON

  $(window).on("scroll", function (e) {
    if ($(this).scrollTop() > 0) {
      $('#back-to-top').fadeIn('slow');
    } else {
      $('#back-to-top').fadeOut('slow');
    }
  });
  $(document).on("click", "#back-to-top", function (e) {
    $("html, body").animate({
      scrollTop: 0
    }, 0);
    return false;
  }); // ______________ COVER IMAGE

  $(".cover-image").each(function () {
    var attr = $(this).attr('data-bs-image-src');

    if (_typeof(attr) !== ( true ? "undefined" : 0) && attr !== false) {
      $(this).css('background', 'url(' + attr + ') center center');
    }
  }); // ______________Quantity Cart Increase & Descrease

  $(function () {
    $('.add').on('click', function () {
      var $qty = $(this).closest('div').find('.qty');
      var currentVal = parseInt($qty.val());

      if (!isNaN(currentVal)) {
        $qty.val(currentVal + 1);
      }
    });
    $('.minus').on('click', function () {
      var $qty = $(this).closest('div').find('.qty');
      var currentVal = parseInt($qty.val());

      if (!isNaN(currentVal) && currentVal > 0) {
        $qty.val(currentVal - 1);
      }
    });
  }); // ______________Chart-circle

  if ($('.chart-circle').length) {
    $('.chart-circle').each(function () {
      var $this = $(this);
      $this.circleProgress({
        fill: {
          color: $this.attr('data-bs-color')
        },
        size: $this.height(),
        startAngle: -Math.PI / 4 * 2,
        emptyFill: '#edf0f5',
        lineCap: 'round'
      });
    });
  } // __________MODAL
  // showing modal with effect


  $('.modal-effect').on('click', function (e) {
    e.preventDefault();
    var effect = $(this).attr('data-bs-effect');
    $('#modaldemo8').addClass(effect);
  }); // hide modal with effect

  $('#modaldemo8').on('hidden.bs.modal', function (e) {
    $(this).removeClass(function (index, className) {
      return (className.match(/(^|\s)effect-\S+/g) || []).join(' ');
    });
  }); // ______________ CARD

  var DIV_CARD = 'div.card'; // ___________TOOLTIP

  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  }); // __________POPOVER
  // var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
  // var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
  //         return new bootstrap.Popover(popoverTriggerEl)
  //     })
  //     // By default, Bootstrap doesn't auto close popover after appearing in the page
  // $(document).on('click', function(e) {
  //     $('[data-toggle="popover"],[data-original-title]').each(function() {
  //         //the 'is' for buttons that trigger popups
  //         //the 'has' for icons within a button that triggers a popup
  //         if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
  //             (($(this).popover('hide').data('bs.popover') || {}).inState || {}).click = false // fix for BS 3.3.6
  //         }
  //     });
  // });
  // ______________ Toast

  var toastElList = [].slice.call(document.querySelectorAll('.toast'));
  var toastList = toastElList.map(function (toastEl) {
    return new bootstrap.Toast(toastEl);
  });
  $("#liveToastBtn").click(function () {
    $('.toast').toast('show');
  }); // ______________ FUNCTION FOR REMOVE CARD

  $(document).on('click', '[data-bs-toggle="card-remove"]', function (e) {
    var $card = $(this).closest(DIV_CARD);
    $card.remove();
    e.preventDefault();
    return false;
  }); // ______________ FUNCTIONS FOR COLLAPSED CARD

  $(document).on('click', '[data-bs-toggle="card-collapse"]', function (e) {
    var $card = $(this).closest(DIV_CARD);
    $card.toggleClass('card-collapsed');
    e.preventDefault();
    return false;
  }); // ______________ CARD FULL SCREEN

  $(document).on('click', '[data-bs-toggle="card-fullscreen"]', function (e) {
    var $card = $(this).closest(DIV_CARD);
    $card.toggleClass('card-fullscreen').removeClass('card-collapsed');
    e.preventDefault();
    return false;
  }); //Input file-browser

  $(document).on('change', '.file-browserinput', function () {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  }); // We can watch for our custom `fileselect` event like this
  //______File Upload

  $('.file-browserinput').on('fileselect', function (event, numFiles, label) {
    var input = $(this).parents('.input-group').find(':text'),
        log = numFiles > 1 ? numFiles + ' files selected' : label;

    if (input.length) {
      input.val(log);
    } else {
      if (log) alert(log);
    }
  }); // ______________ SWITCHER-toggle ______________//
  // $('.layout-setting').on("click", function(e) {
  //     if (document) {
  //         $('body').toggleClass('dark-mode');
  //         $('body').removeClass('transparent-mode');
  //     } else {
  //         $('body').removeClass('dark-mode');
  //         $('body').removeClass('transparent-mode');
  //         $('body').addClass('light-mode');
  //     }
  // });

  /*Light Theme Start*/

  $(document).on("click", '#myonoffswitch1', function () {
    if (this.checked) {
      $('body').addClass('light-mode');
      $('#myonoffswitch3').prop('checked', true);
      $('#myonoffswitch6').prop('checked', true);
      $('body').removeClass('transparent-mode');
      $('body').removeClass('dark-mode'); // remove dark theme properties

      localStorage.removeItem('darkPrimary'); // remove light theme properties

      localStorage.removeItem('primaryColor');
      localStorage.removeItem('primaryHoverColor');
      localStorage.removeItem('primaryBorderColor');
      document.querySelector('html').style.removeProperty('--primary-bg-color', localStorage.darkPrimary);
      document.querySelector('html').style.removeProperty('--primary-bg-hover', localStorage.darkPrimary);
      document.querySelector('html').style.removeProperty('--primary-bg-border', localStorage.darkPrimary);
      document.querySelector('html').style.removeProperty('--dark-primary', localStorage.darkPrimary); // removing dark theme properties

      localStorage.removeItem('darkPrimary');
      localStorage.removeItem('transparentBgColor');
      localStorage.removeItem('transparentThemeColor');
      localStorage.removeItem('transparentPrimary');
      localStorage.removeItem('darkprimaryTransparent');
      $('#myonoffswitch1').prop('checked', true);
      $('#myonoffswitch2').prop('checked', false);
      $('#myonoffswitchTransparent').prop('checked', false);
      localStorage.removeItem('transparentBgImgPrimary');
      localStorage.removeItem('transparentBgImgprimaryTransparent');
      checkOptions();
      var root = document.querySelector(':root');
      root.style = "";
      (0,_themeColors_js__WEBPACK_IMPORTED_MODULE_0__.names)();
    } else {
      $('body').removeClass('light-mode');
      localStorage.removeItem("light-mode");
    }

    (0,_themeColors_js__WEBPACK_IMPORTED_MODULE_0__.localStorageBackup)();
  });
  /*Light Theme End*/

  /*Dark Theme Start*/

  $(document).on("click", '#myonoffswitch2', function () {
    if (this.checked) {
      $('body').addClass('dark-mode');
      $('#myonoffswitch5').prop('checked', true);
      $('#myonoffswitch8').prop('checked', true);
      $('body').removeClass('light-mode');
      $('body').removeClass('transparent-mode'); // remove light theme properties

      localStorage.removeItem('primaryColor');
      localStorage.removeItem('primaryHoverColor');
      localStorage.removeItem('primaryBorderColor');
      localStorage.removeItem('darkPrimary');
      document.querySelector('html').style.removeProperty('--primary-bg-color', localStorage.darkPrimary);
      document.querySelector('html').style.removeProperty('--primary-bg-hover', localStorage.darkPrimary);
      document.querySelector('html').style.removeProperty('--primary-bg-border', localStorage.darkPrimary);
      document.querySelector('html').style.removeProperty('--dark-primary', localStorage.darkPrimary); // removing light theme data

      localStorage.removeItem('primaryColor');
      localStorage.removeItem('primaryHoverColor');
      localStorage.removeItem('primaryBorderColor');
      localStorage.removeItem('primaryTransparent');
      $('#myonoffswitch1').prop('checked', false);
      $('#myonoffswitch2').prop('checked', true);
      $('#myonoffswitchTransparent').prop('checked', false); //

      checkOptions();
      localStorage.removeItem('transparentBgColor');
      localStorage.removeItem('transparentThemeColor');
      localStorage.removeItem('transparentPrimary');
      localStorage.removeItem('transparentBgImgPrimary');
      localStorage.removeItem('transparentBgImgprimaryTransparent');
      var root = document.querySelector(':root');
      root.style = "";
      (0,_themeColors_js__WEBPACK_IMPORTED_MODULE_0__.names)();
    } else {
      $('body').removeClass('dark-mode');
      localStorage.removeItem("dark-mode");
    }

    (0,_themeColors_js__WEBPACK_IMPORTED_MODULE_0__.localStorageBackup)();
  });
  /*Dark Theme End*/

  /*Transparent Theme Start*/

  $(document).on("click", '#myonoffswitchTransparent', function () {
    if (this.checked) {
      $('body').addClass('transparent-mode');
      $('#myonoffswitch3').prop('checked', false);
      $('#myonoffswitch6').prop('checked', false);
      $('#myonoffswitch5').prop('checked', false);
      $('#myonoffswitch8').prop('checked', false);
      $('body').removeClass('dark-mode');
      $('body').removeClass('light-mode'); // remove light theme properties

      localStorage.removeItem('primaryColor');
      localStorage.removeItem('primaryHoverColor');
      localStorage.removeItem('primaryBorderColor'); // removing light theme data

      localStorage.removeItem('darkPrimary');
      localStorage.removeItem('primaryColor');
      localStorage.removeItem('primaryHoverColor');
      localStorage.removeItem('primaryBorderColor');
      localStorage.removeItem('primaryTransparent');
      localStorage.removeItem('transparentPrimary');
      localStorage.removeItem('darkprimaryTransparent');
      localStorage.removeItem('transparentBgImgPrimary');
      localStorage.removeItem('transparentBgImgprimaryTransparent');
      $('#myonoffswitch2').prop('checked', false);
      $('#myonoffswitch1').prop('checked', false);
      $('#myonoffswitchTransparent').prop('checked', true); //

      checkOptions();
      var root = document.querySelector(':root');
      root.style = "";
      (0,_themeColors_js__WEBPACK_IMPORTED_MODULE_0__.names)();
    } else {
      $('body').removeClass('transparent-mode');
      localStorage.removeItem("transparent-mode");
    }

    (0,_themeColors_js__WEBPACK_IMPORTED_MODULE_0__.localStorageBackup)();
    $('body').removeClass('bg-img1');
    $('body').removeClass('bg-img2');
    $('body').removeClass('bg-img3');
    $('body').removeClass('bg-img4');
  });
  /*Transparent Theme End*/

  /*Transparent Bg-Image Style Start*/

  $(document).on("click", '#bgimage1', function () {
    $('body').addClass('bg-img1');
    $('body').removeClass('bg-img2');
    $('body').removeClass('bg-img3');
    $('body').removeClass('bg-img4');
    document.querySelector('body').classList.add('transparent-mode');
    document.querySelector('body').classList.remove('light-mode');
    document.querySelector('body').classList.remove('dark-mode');
    $('#myonoffswitch2').prop('checked', false);
    $('#myonoffswitch1').prop('checked', false);
    $('#myonoffswitchTransparent').prop('checked', true);
    checkOptions();
  });
  $(document).on("click", '#bgimage2', function () {
    $('body').addClass('bg-img2');
    $('body').removeClass('bg-img1');
    $('body').removeClass('bg-img3');
    $('body').removeClass('bg-img4');
    document.querySelector('body').classList.add('transparent-mode');
    document.querySelector('body').classList.remove('light-mode');
    document.querySelector('body').classList.remove('dark-mode');
    $('#myonoffswitch2').prop('checked', false);
    $('#myonoffswitch1').prop('checked', false);
    $('#myonoffswitchTransparent').prop('checked', true);
    checkOptions();
  });
  $(document).on("click", '#bgimage3', function () {
    $('body').addClass('bg-img3');
    $('body').removeClass('bg-img1');
    $('body').removeClass('bg-img2');
    $('body').removeClass('bg-img4');
    document.querySelector('body').classList.add('transparent-mode');
    document.querySelector('body').classList.remove('light-mode');
    document.querySelector('body').classList.remove('dark-mode');
    $('#myonoffswitch2').prop('checked', false);
    $('#myonoffswitch1').prop('checked', false);
    $('#myonoffswitchTransparent').prop('checked', true);
    checkOptions();
  });
  $(document).on("click", '#bgimage4', function () {
    $('body').addClass('bg-img4');
    $('body').removeClass('bg-img1');
    $('body').removeClass('bg-img2');
    $('body').removeClass('bg-img3');
    document.querySelector('body').classList.add('transparent-mode');
    document.querySelector('body').classList.remove('light-mode');
    document.querySelector('body').classList.remove('dark-mode');
    $('#myonoffswitch2').prop('checked', false);
    $('#myonoffswitch1').prop('checked', false);
    $('#myonoffswitchTransparent').prop('checked', true);
    checkOptions();
  });
  /*Transparent Bg-Image Style End*/

  /*Light LeftMenu Start*/

  $(document).on("click", '#myonoffswitch3', function () {
    if (this.checked) {
      $('body').addClass('light-menu');
      $('body').removeClass('color-menu');
      $('body').removeClass('dark-menu');
      $('body').removeClass('gradient-menu');
    } else {
      $('body').removeClass('light-menu');
    }
  });
  /*Light LeftMenu End*/

  /*Color LeftMenu Start*/

  $(document).on("click", '#myonoffswitch4', function () {
    if (this.checked) {
      $('body').addClass('color-menu');
      $('body').removeClass('light-menu');
      $('body').removeClass('dark-menu');
      $('body').removeClass('gradient-menu');
    } else {
      $('body').removeClass('color-menu');
    }
  });
  /*Color LeftMenu End*/

  /*Dark LeftMenu Start*/

  $(document).on("click", '#myonoffswitch5', function () {
    if (this.checked) {
      $('body').addClass('dark-menu');
      $('body').removeClass('color-menu');
      $('body').removeClass('light-menu');
      $('body').removeClass('gradient-menu');
    } else {
      $('body').removeClass('dark-menu');
    }
  });
  /*Dark LeftMenu End*/

  /*Gradient LeftMenu Start*/

  $(document).on("click", '#myonoffswitch19', function () {
    if (this.checked) {
      $('body').addClass('gradient-menu');
      $('body').removeClass('color-menu');
      $('body').removeClass('light-menu');
      $('body').removeClass('dark-menu');
    } else {
      $('body').removeClass('gradient-menu');
    }
  });
  /*Gradient LeftMenu End*/

  /*Light Header Start*/

  $(document).on("click", '#myonoffswitch6', function () {
    if (this.checked) {
      $('body').addClass('header-light');
      $('body').removeClass('color-header');
      $('body').removeClass('dark-header');
      $('body').removeClass('gradient-header');
    } else {
      $('body').removeClass('header-light');
    }
  });
  /*Light Header End*/

  /*Color Header Start*/

  $(document).on("click", '#myonoffswitch7', function () {
    if (this.checked) {
      $('body').addClass('color-header');
      $('body').removeClass('header-light');
      $('body').removeClass('dark-header');
      $('body').removeClass('gradient-header');
    } else {
      $('body').removeClass('color-header');
    }
  });
  /*Color Header End*/

  /*Dark Header Start*/

  $(document).on("click", '#myonoffswitch8', function () {
    if (this.checked) {
      $('body').addClass('dark-header');
      $('body').removeClass('color-header');
      $('body').removeClass('header-light');
      $('body').removeClass('gradient-header');
    } else {
      $('body').removeClass('dark-header');
    }
  });
  /*Dark Header End*/

  /*Gradient Header Start*/

  $(document).on("click", '#myonoffswitch20', function () {
    if (this.checked) {
      $('body').addClass('gradient-header');
      $('body').removeClass('color-header');
      $('body').removeClass('header-light');
      $('body').removeClass('dark-header');
    } else {
      $('body').removeClass('gradient-header');
    }
  });
  /*Dark Header End*/

  /*Full Width Layout Start*/

  $(document).on("click", '#myonoffswitch9', function () {
    if (this.checked) {
      $('body').addClass('layout-fullwidth');
      $('body').removeClass('layout-boxed');
    } else {
      $('body').removeClass('layout-fullwidth');
    }
  });
  /*Full Width Layout End*/

  /*Boxed Layout Start*/

  $(document).on("click", '#myonoffswitch10', function () {
    if (this.checked) {
      $('body').addClass('layout-boxed');
      $('#slide-left').removeClass('d-none');
      $('#slide-right').removeClass('d-none');
      $('body').removeClass('layout-fullwidth'); // HorizontalWidthSize = horizontalMenu()
      // horizontalMenuLimit()
      // scrollWidthChecker();
    } else {
      $('body').removeClass('layout-boxed');
    }
  });
  /*Boxed Layout End*/

  /*Header-Position Styles Start*/

  $(document).on("click", '#myonoffswitch11', function () {
    if (this.checked) {
      $('body').addClass('fixed-layout');
      $('body').removeClass('scrollable-layout');
    } else {
      $('body').removeClass('fixed-layout');
    }
  });
  $(document).on("click", '#myonoffswitch12', function () {
    if (this.checked) {
      $('body').addClass('scrollable-layout');
      $('body').removeClass('fixed-layout');
    } else {
      $('body').removeClass('scrollable-layout');
    }
  });
  /*Header-Position Styles End*/

  /*Default Sidemenu Start*/

  $(document).on("click", '#myonoffswitch13', function () {
    if (this.checked) {
      $('body').addClass('default-menu');
      $('body').removeClass('sidenav-toggled');
      hovermenu();
      $('body').removeClass('icontext-menu');
      $('body').removeClass('icon-overlay');
      $('body').removeClass('closed-leftmenu');
      $('body').removeClass('hover-submenu');
      $('body').removeClass('hover-submenu1');
    } else {
      $('body').removeClass('default-menu');
    }
  });
  /*Default Sidemenu End*/

  /*Icon Overlay Sidemenu Start*/

  $(document).on("click", '#myonoffswitch15', function () {
    if (this.checked) {
      $('body').addClass('icon-overlay');
      hovermenu();
      $('body').addClass('sidenav-toggled');
      $('body').removeClass('hover-submenu1');
      $('body').removeClass('default-menu');
      $('body').removeClass('closed-leftmenu');
      $('body').removeClass('hover-submenu');
      $('body').removeClass('icontext-menu');
    } else {
      $('body').removeClass('icon-overlay');
      $('body').removeClass('sidenav-toggled');
    }
  });
  /*Icon Overlay Sidemenu End*/

  /*Icon Text Sidemenu Start*/

  $(document).on("click", '#myonoffswitch14', function () {
    if (this.checked) {
      $('body').addClass('icontext-menu');
      icontext();
      $('body').addClass('sidenav-toggled');
      $('body').removeClass('icon-overlay');
      $('body').removeClass('hover-submenu1');
      $('body').removeClass('default-menu');
      $('body').removeClass('closed-leftmenu');
      $('body').removeClass('hover-submenu');
    } else {
      $('body').removeClass('icontext-menu');
      $('body').removeClass('sidenav-toggled');
    }
  });
  /*Icon Text Sidemenu End*/

  /*Closed Sidemenu Start*/

  $(document).on("click", '#myonoffswitch16', function () {
    if (this.checked) {
      $('body').addClass('closed-leftmenu');
      $('body').addClass('sidenav-toggled');
      $('body').removeClass('default-menu');
      $('body').removeClass('hover-submenu1');
      $('body').removeClass('hover-submenu');
      $('body').removeClass('icon-overlay');
      $('body').removeClass('icontext-menu');
    } else {
      $('body').removeClass('closed-leftmenu');
      $('body').removeClass('sidenav-toggled');
      $('body').addClass('default-menu');
    }
  });
  /*Closed Sidemenu End*/

  /*Hover Submenu Start*/

  $(document).on("click", '#myonoffswitch17', function () {
    if (this.checked) {
      $('body').addClass('hover-submenu');
      hovermenu();
      $('body').addClass('sidenav-toggled');
      $('body').removeClass('hover-submenu1');
      $('body').removeClass('default-menu');
      $('body').removeClass('closed-leftmenu');
      $('body').removeClass('icon-overlay');
      $('body').removeClass('icontext-menu');
    } else {
      $('body').removeClass('hover-submenu');
      $('body').removeClass('sidenav-toggled');
    }
  });
  /*Hover Submenu End*/

  /*Hover Submenu Style 1 Start*/

  $(document).on("click", '#myonoffswitch18', function () {
    if (this.checked) {
      $('body').addClass('hover-submenu1');
      hovermenu();
      $('body').addClass('sidenav-toggled');
      $('body').removeClass('hover-submenu');
      $('body').removeClass('default-menu');
      $('body').removeClass('closed-leftmenu');
      $('body').removeClass('icon-overlay');
      $('body').removeClass('icontext-menu');
    } else {
      $('body').removeClass('hover-submenu1');
      $('body').removeClass('sidenav-toggled');
    }
  });
  /*Hover Submenu Style 1 End*/

  /*-- LTR Horizontal Versions --*/

  $(document).on("click", '#myonoffswitch21', function () {
    if (this.checked) {
      $('body').addClass('default-horizontal');
      $('body').removeClass('centerlogo-horizontal');
      localStorage.setItem("default-horizontal", "True");
    } else {
      $('body').removeClass('default-horizontal');
      localStorage.setItem("default-horizontal", "false");
    }
  });
  $(document).on("click", '#myonoffswitch22', function () {
    if (this.checked) {
      $('body').addClass('centerlogo-horizontal');
      $('body').removeClass('default-horizontal');
      localStorage.setItem("centerlogo-horizontal", "True");
    } else {
      $('body').removeClass('centerlogo-horizontal');
      localStorage.setItem("centerlogo-horizontal", "false");
    }
  }); // ______________Accordion Style

  $(document).on("click", '[data-bs-toggle="collapse"]', function () {
    $(this).toggleClass('active').siblings().removeClass('active');
  });
})(jQuery);

function replay() {
  var replayButtom = document.querySelectorAll('.reply a'); // Creating Div

  var Div = document.createElement('div');
  Div.setAttribute('class', "comment mt-5 d-grid"); // creating textarea

  var textArea = document.createElement('textarea');
  textArea.setAttribute('class', "form-control");
  textArea.setAttribute('rows', "5");
  textArea.innerText = "Your Comment"; // creating Cancel buttons

  var cancelButton = document.createElement('button');
  cancelButton.setAttribute('class', "btn btn-danger");
  cancelButton.innerText = "Cancel";
  var buttonDiv = document.createElement('div');
  buttonDiv.setAttribute('class', "btn-list ms-auto mt-2"); // Creating submit button

  var submitButton = document.createElement('button');
  submitButton.setAttribute('class', "btn btn-success ms-3");
  submitButton.innerText = "Submit"; // appending text are to div

  Div.append(textArea);
  Div.append(buttonDiv);
  buttonDiv.append(cancelButton);
  buttonDiv.append(submitButton);
  replayButtom.forEach(function (element) {
    element.addEventListener('click', function () {
      var replay = $(element).parent();
      replay.append(Div);
      cancelButton.addEventListener('click', function () {
        Div.remove();
      });
    });
  });
}

replay();

function like() {
  var like = document.querySelectorAll('.like');
  like.forEach(function (element) {
    element.addEventListener('click', function () {
      var likeText = $(element).children();
    });
  });
}

like(); //Email Inbox

jQuery(document).ready(function ($) {
  $(".clickable-row").click(function () {
    window.location = $(this).data("href");
  });
});
/*off canvas Style*/

$('.off-canvas').on('click', function () {
  $('body').addClass('overflow-y-scroll');
  $('body').addClass('pe-0');
});
$('#myonoffswitch24').click(function () {
  if (this.checked) {
    $('body').addClass('rtl');
    $("html[lang=en]").attr("dir", "rtl");
    $('body').removeClass('ltr');
    localStorage.setItem("rtl", "True");
    $("head link#style").attr("href", $(this));
    document.getElementById("style").setAttribute("href", "http://127.0.0.1:8000/assets/plugins/bootstrap/css/bootstrap.rtl.min.css");
    var carousel = $('.owl-carousel');
    $.each(carousel, function (index, element) {
      // element == this
      var carouselData = $(element).data('owl.carousel');
      carouselData.settings.rtl = true; //don't know if both are necessary

      carouselData.options.rtl = true;
      $(element).trigger('refresh.owl.carousel');
    });
  } else {
    $('body').removeClass('rtl');
    $('body').addClass('ltr');
    localStorage.setItem("rtl", "false");
    $("head link#style").attr("href", $(this));
    document.getElementById("style").setAttribute("href", "http://127.0.0.1:8000/assets/plugins/bootstrap/css/bootstrap.min.css");
  }
});
$('#myonoffswitch23').click(function () {
  if (this.checked) {
    $('body').addClass('ltr');
    $("html[lang=en]").attr("dir", "ltr");
    $('body').removeClass('rtl');
    localStorage.setItem("ltr", "True");
    $("head link#style").attr("href", $(this));
    document.getElementById("style").setAttribute("href", "http://127.0.0.1:8000/assets/plugins/bootstrap/css/bootstrap.min.css");
    var carousel = $('.owl-carousel');
    $.each(carousel, function (index, element) {
      // element == this
      var carouselData = $(element).data('owl.carousel');
      carouselData.settings.rtl = false; //don't know if both are necessary

      carouselData.options.rtl = false;
      $(element).trigger('refresh.owl.carousel');
    });
  } else {
    $('body').removeClass('ltr');
    $('body').addClass('rtl');
    localStorage.setItem("ltr", "false");
    $("head link#style").attr("href", $(this));
    document.getElementById("style").setAttribute("href", "http://127.0.0.1:8000/assets/plugins/bootstrap/css/bootstrap.rtl.min.css");
  }
});
$('#myonoffswitch34').click(function () {
  if (this.checked) {
    $('body').removeClass('horizontal');
    $('body').removeClass('horizontal-hover');
    $(".main-content").removeClass("hor-content");
    $(".main-content").addClass("app-content");
    $(".main-container").removeClass("container");
    $(".main-container").addClass("container-fluid");
    $(".app-header").removeClass("hor-header");
    $(".hor-header").addClass("app-header");
    $(".app-sidebar").removeClass("horizontal-main");
    $(".main-sidemenu").removeClass("container");
    $('#slide-left').removeClass('d-none');
    $('#slide-right').removeClass('d-none');
    $('body').addClass('sidebar-mini');
    localStorage.setItem("sidebar-mini", "True");
    menuClick();
  } else {
    $('body').removeClass('sidebar-mini');
    localStorage.setItem("sidebar-mini", "False");
  }
});
$('#myonoffswitch35').click(function () {
  if (this.checked) {
    $('body').addClass('horizontal');
    $(".main-content").addClass("hor-content");
    $(".main-content").removeClass("app-content");
    $(".main-container").addClass("container");
    $(".main-container").removeClass("container-fluid");
    $(".app-header").addClass("hor-header");
    $(".hor-header").removeClass("app-header");
    $(".app-sidebar").addClass("horizontal-main");
    $(".main-sidemenu").addClass("container");
    $('body').removeClass('sidebar-mini');
    $('body').removeClass('sidenav-toggled');
    $('#slide-left').removeClass('d-none');
    $('#slide-right').removeClass('d-none');
    $('body').removeClass('horizontal-hover');
    $('body').removeClass('default-menu');
    $('body').removeClass('icontext-menu');
    $('body').removeClass('icon-overlay');
    $('body').removeClass('closed-leftmenu');
    $('body').removeClass('hover-submenu');
    $('body').removeClass('hover-submenu1');
    localStorage.setItem("horizantal", "True");
    document.querySelector('.horizontal .side-menu').style.flexWrap = 'nowrap';
    menuClick();
    checkHoriMenu();
  } else {
    $('body').removeClass('horizontal');
    localStorage.setItem("horizontal", "False");
  }
});
$('#myonoffswitch111').click(function () {
  if (this.checked) {
    var li = document.querySelectorAll('.side-menu li');
    li.forEach(function (e, i) {
      e.classList.remove('is-expanded');
    });
    var animationSpeed = 300; // first level

    var parent = $("[data-bs-toggle='sub-slide']").parents('ul');
    var ul = parent.find('ul:visible').slideUp(animationSpeed);
    ul.removeClass('open');
    var parent1 = $("[data-bs-toggle='sub-slide2']").parents('ul');
    var ul1 = parent1.find('ul:visible').slideUp(animationSpeed);
    ul1.removeClass('open');
    $('body').addClass('horizontal-hover');
    $('body').addClass('horizontal');
    document.querySelector('.horizontal .side-menu').style.flexWrap = 'nowrap';
    $('#slide-left').removeClass('d-none');
    $('#slide-right').removeClass('d-none');
    $(".main-content").addClass("hor-content");
    $(".main-content").removeClass("app-content");
    $(".main-container").addClass("container");
    $(".main-container").removeClass("container-fluid");
    $(".app-header").addClass("hor-header");
    $(".app-header").removeClass("app-header");
    $(".app-sidebar").addClass("horizontal-main");
    $(".main-sidemenu").addClass("container");
    $('body').removeClass('sidebar-mini');
    $('body').removeClass('sidenav-toggled');
    $('body').removeClass('default-menu');
    $('body').removeClass('icontext-menu');
    $('body').removeClass('icon-overlay');
    $('body').removeClass('closed-leftmenu');
    $('body').removeClass('hover-submenu');
    $('body').removeClass('hover-submenu1');
    HorizontalHovermenu();
    checkHoriMenu();
  } else {
    $('body').removeClass('horizontal-hover');
    localStorage.setItem("horizontal-hover", "False");
  }
});
$(document).ready(function () {
  function light() {
    if (document.querySelector('body').classList.contains('light-mode')) {
      $('#myonoffswitch3').prop('checked', true);
      $('#myonoffswitch6').prop('checked', true);
    }
  }

  light();
});
function checkOptions() {
  // light header
  if (document.querySelector('body').classList.contains('header-light')) {
    $('#myonoffswitch6').prop('checked', true);
  } // color header


  if (document.querySelector('body').classList.contains('color-header')) {
    $('#myonoffswitch7').prop('checked', true);
  } // gradient header


  if (document.querySelector('body').classList.contains('gradient-header')) {
    $('#myonoffswitch20').prop('checked', true);
  } // dark header


  if (document.querySelector('body').classList.contains('dark-header')) {
    $('#myonoffswitch8').prop('checked', true);
  } // light menu


  if (document.querySelector('body').classList.contains('light-menu')) {
    $('#myonoffswitch3').prop('checked', true);
  } // color menu


  if (document.querySelector('body').classList.contains('color-menu')) {
    $('#myonoffswitch4').prop('checked', true);
  } // gradient menu


  if (document.querySelector('body').classList.contains('gradient-menu')) {
    $('#myonoffswitch19').prop('checked', true);
  } // dark menu


  if (document.querySelector('body').classList.contains('dark-menu')) {
    $('#myonoffswitch5').prop('checked', true);
  }
}

/***/ }),

/***/ "./resources/assets/js/index1.js":
/*!***************************************!*\
  !*** ./resources/assets/js/index1.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "index": () => (/* binding */ index)
/* harmony export */ });
function getCssValuePrefix() {
  var returnValue = ''; //default to standard syntax

  var prefixes = ['-o-', '-ms-', '-moz-', '-webkit-']; // Create a temporary DOM object for testing

  var dom = document.createElement('div');

  for (var i = 0; i < prefixes.length; i++) {
    // Attempt to set the style
    dom.style.background = prefixes[i] + 'linear-gradient(#ffffff, #000000)'; // Detect if the style was successfully set

    if (dom.style.background) {
      returnValue = prefixes[i];
    }
  }

  dom = null;
  remove(dom);
  return returnValue;
}

function index(HExaTORGBA08, HExaTORGBA02, HExaTORGBAV108, myVarVal) {
  // document.querySelector('.bg-recentorder').style.background = getCssValuePrefix() + 'linear-gradient(' + 'right' + ', ' + hexToRgba(myVarVal, 0.8) + ', ' + hexToRgba(myVarVal, 0.6) + ')'

  /*-----Transactions-----*/
  var myCanvas = document.getElementById("transactions");
  myCanvas.height = "330";
  var myCanvasContext = myCanvas.getContext("2d");
  var gradientStroke1 = myCanvasContext.createLinearGradient(0, 80, 0, 280);
  gradientStroke1.addColorStop(0, HExaTORGBA08 || 'rgba(108, 95, 252, 0.8)');
  gradientStroke1.addColorStop(1, HExaTORGBA02 || 'rgba(108, 95, 252, 0.2) ');
  var gradientStroke2 = myCanvasContext.createLinearGradient(0, 80, 0, 280);
  gradientStroke2.addColorStop(0, HExaTORGBAV108 || 'rgba(5, 195, 251, 0.8)');
  gradientStroke2.addColorStop(1, HExaTORGBAV108 || 'rgba(5, 195, 251, 0.2) ');
  var myChart = new Chart(myCanvas, {
    type: 'line',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
      type: 'line',
      datasets: [{
        label: 'Total Sales',
        data: [100, 210, 180, 454, 454, 230, 230, 656, 656, 350, 350, 210],
        backgroundColor: gradientStroke1,
        borderColor: myVarVal || "#6c5ffc",
        pointBackgroundColor: '#fff',
        pointHoverBackgroundColor: gradientStroke1,
        pointBorderColor: myVarVal || "#6c5ffc",
        pointHoverBorderColor: gradientStroke1,
        pointBorderWidth: 0,
        pointRadius: 0,
        pointHoverRadius: 0,
        borderWidth: 3,
        fill: 'origin'
      }, {
        label: 'Total Orders',
        data: [200, 530, 110, 110, 480, 520, 780, 435, 475, 738, 454, 454],
        backgroundColor: 'transparent',
        borderColor: '#05c3fb',
        pointBackgroundColor: '#fff',
        pointHoverBackgroundColor: gradientStroke2,
        pointBorderColor: '#05c3fb',
        pointHoverBorderColor: gradientStroke2,
        pointBorderWidth: 0,
        pointRadius: 0,
        pointHoverRadius: 0,
        borderWidth: 3,
        fill: 'origin'
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      tooltips: {
        enabled: false
      },
      legend: {
        display: false,
        labels: {
          usePointStyle: false
        }
      },
      scales: {
        xAxes: [{
          display: true,
          gridLines: {
            display: false,
            drawBorder: false,
            color: 'rgba(119, 119, 142, 0.08)'
          },
          ticks: {
            fontColor: '#b0bac9',
            autoSkip: true
          },
          scaleLabel: {
            display: false,
            labelString: 'Month',
            fontColor: 'transparent'
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 1050,
            stepSize: 150,
            fontColor: "#b0bac9"
          },
          display: true,
          gridLines: {
            display: true,
            drawBorder: false,
            zeroLineColor: 'rgba(142, 156, 173,0.1)',
            color: "rgba(142, 156, 173,0.1)"
          },
          scaleLabel: {
            display: false,
            labelString: 'sales',
            fontColor: 'transparent'
          }
        }]
      },
      title: {
        display: false,
        text: 'Normal Legend'
      }
    }
  });
} // index()
// Use 'index()' if you are not using themecolor.js, otherwise chart in index.blade.php page will not work.
// Remove 'index()' if you want to use themecolor.js, otherwise chart in index.blade.php page will not work.

/***/ }),

/***/ "./resources/assets/js/themeColors.js":
/*!********************************************!*\
  !*** ./resources/assets/js/themeColors.js ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "localStorageBackup": () => (/* binding */ localStorageBackup),
/* harmony export */   "names": () => (/* binding */ names)
/* harmony export */ });
/* harmony import */ var _custom1_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./custom1.js */ "./resources/assets/js/custom1.js");
/* harmony import */ var _index1_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index1.js */ "./resources/assets/js/index1.js");
function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }


 // If you want to use switcher then Remove comments of import index() function,

var lightColorChange = document.querySelector('.color-primary-light');
lightColorChange === null || lightColorChange === void 0 ? void 0 : lightColorChange.addEventListener('input', changePrimaryColor);
var darkColorChange = document.querySelector('.color-primary-dark');
darkColorChange === null || darkColorChange === void 0 ? void 0 : darkColorChange.addEventListener('input', darkPrimaryColor);
var transparentPrimaryColorChange = document.querySelector('.color-primary-transparent');
transparentPrimaryColorChange === null || transparentPrimaryColorChange === void 0 ? void 0 : transparentPrimaryColorChange.addEventListener('input', transparentPrimaryColor);
var transparentBgColorChange = document.querySelector('.color-bg-transparent');
transparentBgColorChange === null || transparentBgColorChange === void 0 ? void 0 : transparentBgColorChange.addEventListener('input', transparentBgColor);
var bgImageFn = document.querySelectorAll('.bg-img');
bgImageFn.forEach(function (e, i) {
  e.addEventListener('click', function (el) {
    bgImage(this);
  });
});
var bgImagePrimaryFn = document.querySelector('#transparentBgImgPrimaryColorID');
bgImagePrimaryFn === null || bgImagePrimaryFn === void 0 ? void 0 : bgImagePrimaryFn.addEventListener('input', transparentBgImgPrimaryColor);

var handleThemeUpdate = function handleThemeUpdate(cssVars) {
  var root = document.querySelector(':root');
  var keys = Object.keys(cssVars);
  keys.forEach(function (key) {
    root.style.setProperty(key, cssVars[key]);
  });
};

function themeSwitch(switchProperty) {
  switchProperty.forEach(function (item) {
    item.addEventListener('click', function (e) {
      var primaryColor = e.target.getAttribute('data-bg-color');
      var primaryHoverColor = e.target.getAttribute('data-bg-hover');
      var primaryBorderColor = e.target.getAttribute('data-bg-border');
      var primaryTransparent = e.target.getAttribute('data-bg-transparent');
      var darkPrimary = e.target.getAttribute('data-primary');
      var darkprimaryTransparent = e.target.getAttribute('data-bg-darktransparent');
      var transparentPrimary = e.target.getAttribute('data-primary');
      var transparentBgColor = e.target.getAttribute('data-body');
      var transparentBgTheme = e.target.getAttribute('data-theme');
      var transparentprimaryTransparent = e.target.getAttribute('data-transparentcolor');
      handleThemeUpdate({
        '--primary-bg-color': primaryColor,
        '--primary-bg-hover': primaryHoverColor,
        '--primary-bg-border': primaryBorderColor,
        '--primary-transparentcolor': primaryTransparent,
        '--dark-primary': darkPrimary,
        '--darkprimary-transparentcolor': darkprimaryTransparent,
        '--transparent-primary': transparentPrimary,
        '--transparent-body': transparentBgColor,
        '--transparent-mode': transparentBgTheme,
        '--transparentprimary-transparentcolor': transparentprimaryTransparent
      });
      $("input.input-color-picker[data-id='bg-color']").val(primaryColor);
      $("input.input-color-picker[data-id1='bg-hover']").val(primaryColor);
      $("input.input-color-picker[data-id2='bg-border']").val(primaryColor);
      $("input.input-color-picker[data-id7='transparentcolor']").val(primaryColor);
      $("input.input-color-picker[data-id3='primary']").val(darkPrimary);
      $("input.input-color-picker[data-id8='transparentcolor']").val(darkPrimary);
      $("input.input-color-picker[data-id4='primary']").val(transparentPrimary);
      $("input.input-color-picker[data-id5='body']").val(transparentBgColor);
      $("input.input-color-picker[data-id6='theme']").val(transparentBgTheme);
      $("input.input-color-picker[data-id9='transparentcolor']").val(transparentPrimary);
    });
  });
}

function dynamicPrimaryColor(primaryColor) {
  primaryColor.forEach(function (item) {
    item === null || item === void 0 ? void 0 : item.addEventListener('input', function (e) {
      var _handleThemeUpdate;

      var cssPropName = "--primary-".concat(e.target.getAttribute('data-id'));
      var cssPropName1 = "--primary-".concat(e.target.getAttribute('data-id1'));
      var cssPropName2 = "--primary-".concat(e.target.getAttribute('data-id2'));
      var cssPropName7 = "--primary-".concat(e.target.getAttribute('data-id7'));
      var cssPropName8 = "--darkprimary-".concat(e.target.getAttribute('data-id8'));
      var cssPropName3 = "--dark-".concat(e.target.getAttribute('data-id3'));
      var cssPropName4 = "--transparent-".concat(e.target.getAttribute('data-id4'));
      var cssPropName5 = "--transparent-".concat(e.target.getAttribute('data-id5'));
      var cssPropName6 = "--transparent-".concat(e.target.getAttribute('data-id6'));
      var cssPropName9 = "--transparentprimary-".concat(e.target.getAttribute('data-id9'));
      handleThemeUpdate((_handleThemeUpdate = {}, _defineProperty(_handleThemeUpdate, cssPropName, e.target.value), _defineProperty(_handleThemeUpdate, cssPropName1, e.target.value + 95), _defineProperty(_handleThemeUpdate, cssPropName2, e.target.value), _defineProperty(_handleThemeUpdate, cssPropName3, e.target.value), _defineProperty(_handleThemeUpdate, cssPropName4, e.target.value), _defineProperty(_handleThemeUpdate, cssPropName5, e.target.value), _defineProperty(_handleThemeUpdate, cssPropName6, e.target.value + 95), _defineProperty(_handleThemeUpdate, cssPropName7, e.target.value + 20), _defineProperty(_handleThemeUpdate, cssPropName8, e.target.value + 20), _defineProperty(_handleThemeUpdate, cssPropName9, e.target.value + 20), _handleThemeUpdate));
    });
  });
}

$(document).ready(function () {
  // Light theme color picker
  var LightThemeSwitchers = document.querySelectorAll('.light-mode .switch_section span');
  var dynamicPrimaryLight = document.querySelectorAll('input.color-primary-light');
  themeSwitch(LightThemeSwitchers);
  dynamicPrimaryColor(dynamicPrimaryLight); // dark theme color picker

  var DarkThemeSwitchers = document.querySelectorAll('.dark-mode .switch_section span');
  var DarkDynamicPrimaryLight = document.querySelectorAll('input.color-primary-dark');
  themeSwitch(DarkThemeSwitchers);
  dynamicPrimaryColor(DarkDynamicPrimaryLight); // tranparent theme color picker

  var transparentThemeSwitchers = document.querySelectorAll('.transparent-mode .switch_section span');
  var transparentDynamicPrimaryLight = document.querySelectorAll('input.color-primary-transparent');
  themeSwitch(transparentThemeSwitchers);
  dynamicPrimaryColor(transparentDynamicPrimaryLight); // tranparent theme bgcolor picker

  var transparentBgThemeSwitchers = document.querySelectorAll('.transparent-mode .switch_section span');
  var transparentDynamicPBgLight = document.querySelectorAll('input.color-bg-transparent');
  themeSwitch(transparentBgThemeSwitchers);
  dynamicPrimaryColor(transparentDynamicPBgLight);
  localStorageBackup();
  $('#myonoffswitch1').on('click', function () {
    var _document$querySelect, _document$querySelect2, _document$querySelect3, _document$querySelect4, _document$querySelect5, _document$querySelect6;

    (_document$querySelect = document.querySelector('body')) === null || _document$querySelect === void 0 ? void 0 : _document$querySelect.classList.remove('dark-mode');
    (_document$querySelect2 = document.querySelector('body')) === null || _document$querySelect2 === void 0 ? void 0 : _document$querySelect2.classList.remove('transparent-mode');
    (_document$querySelect3 = document.querySelector('body')) === null || _document$querySelect3 === void 0 ? void 0 : _document$querySelect3.classList.remove('bg-img1');
    (_document$querySelect4 = document.querySelector('body')) === null || _document$querySelect4 === void 0 ? void 0 : _document$querySelect4.classList.remove('bg-img2');
    (_document$querySelect5 = document.querySelector('body')) === null || _document$querySelect5 === void 0 ? void 0 : _document$querySelect5.classList.remove('bg-img3');
    (_document$querySelect6 = document.querySelector('body')) === null || _document$querySelect6 === void 0 ? void 0 : _document$querySelect6.classList.remove('bg-img4');
    localStorage.removeItem('BgImage');
    $('#myonoffswitch1').prop('checked', true);
  });
  $('#myonoffswitch2').on('click', function () {
    var _document$querySelect7, _document$querySelect8, _document$querySelect9, _document$querySelect10, _document$querySelect11, _document$querySelect12;

    (_document$querySelect7 = document.querySelector('body')) === null || _document$querySelect7 === void 0 ? void 0 : _document$querySelect7.classList.remove('light-mode');
    (_document$querySelect8 = document.querySelector('body')) === null || _document$querySelect8 === void 0 ? void 0 : _document$querySelect8.classList.remove('transparent-mode');
    (_document$querySelect9 = document.querySelector('body')) === null || _document$querySelect9 === void 0 ? void 0 : _document$querySelect9.classList.remove('bg-img1');
    (_document$querySelect10 = document.querySelector('body')) === null || _document$querySelect10 === void 0 ? void 0 : _document$querySelect10.classList.remove('bg-img2');
    (_document$querySelect11 = document.querySelector('body')) === null || _document$querySelect11 === void 0 ? void 0 : _document$querySelect11.classList.remove('bg-img3');
    (_document$querySelect12 = document.querySelector('body')) === null || _document$querySelect12 === void 0 ? void 0 : _document$querySelect12.classList.remove('bg-img4');
    localStorage.removeItem('BgImage');
    $('#myonoffswitch2').prop('checked', true);
  });
  $('#myonoffswitchTransparent').on('click', function () {
    var _document$querySelect13, _document$querySelect14, _document$querySelect15, _document$querySelect16, _document$querySelect17, _document$querySelect18;

    (_document$querySelect13 = document.querySelector('body')) === null || _document$querySelect13 === void 0 ? void 0 : _document$querySelect13.classList.remove('dark-mode');
    (_document$querySelect14 = document.querySelector('body')) === null || _document$querySelect14 === void 0 ? void 0 : _document$querySelect14.classList.remove('light-mode');
    (_document$querySelect15 = document.querySelector('body')) === null || _document$querySelect15 === void 0 ? void 0 : _document$querySelect15.classList.remove('bg-img1');
    (_document$querySelect16 = document.querySelector('body')) === null || _document$querySelect16 === void 0 ? void 0 : _document$querySelect16.classList.remove('bg-img2');
    (_document$querySelect17 = document.querySelector('body')) === null || _document$querySelect17 === void 0 ? void 0 : _document$querySelect17.classList.remove('bg-img3');
    (_document$querySelect18 = document.querySelector('body')) === null || _document$querySelect18 === void 0 ? void 0 : _document$querySelect18.classList.remove('bg-img4');
    localStorage.removeItem('BgImage');
    $('#myonoffswitchTransparent').prop('checked', true);
  });
});
function localStorageBackup() {
  // if there is a value stored, update color picker and background color
  // Used to retrive the data from local storage
  if (localStorage.primaryColor) {
    // document.getElementById('colorID').value = localStorage.primaryColor;    // To set the primary color for color picker
    document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.primaryColor);
    document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.primaryHoverColor);
    document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.primaryBorderColor);
    document.querySelector('html').style.setProperty('--primary-transparentcolor', localStorage.primaryTransparent);
    document.querySelector('body').setAttribute('class', 'app sidebar-mini light-mode');
    $('#myonoffswitch3').prop('checked', true);
    $('#myonoffswitch6').prop('checked', true);
    $('#myonoffswitch1').prop('checked', true);
  }

  if (localStorage.darkPrimary) {
    // document.getElementById('darkPrimaryColorID').value = localStorage.darkPrimary;   // To set the primary color for color picker
    document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.darkPrimary);
    document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.darkPrimary);
    document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.darkPrimary);
    document.querySelector('html').style.setProperty('--dark-primary', localStorage.darkPrimary);
    document.querySelector('html').style.setProperty('--darkprimary-transparentcolor', localStorage.darkprimaryTransparent);
    document.querySelector('body').setAttribute('class', 'app sidebar-mini dark-mode');
    $('#myonoffswitch2').prop('checked', true);
  }

  if (localStorage.transparentPrimary) {
    // document.getElementById('transparentPrimaryColorID').value = localStorage.transparentPrimary;     // To set the primary color for color picker
    document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.transparentPrimary);
    document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.transparentPrimary);
    document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.transparentPrimary);
    document.querySelector('html').style.setProperty('--transparent-primary', localStorage.transparentPrimary);
    document.querySelector('html').style.setProperty('--transparentprimary-transparentcolor', localStorage.transparentprimaryTransparent);
    document.querySelector('body').setAttribute('class', 'app sidebar-mini transparent-mode');
    $('#myonoffswitchTransparent').prop('checked', true);
  }

  if (localStorage.transparentBgImgPrimary) {
    var _document$querySelect19, _document$querySelect20, _document$querySelect21;

    // document.getElementById('transparentBgImgPrimaryColorID').value = localStorage.transparentBgImgPrimary;   // To set the primary color for color picker
    document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.transparentBgImgPrimary);
    document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.transparentBgImgPrimary);
    document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.transparentBgImgPrimary);
    document.querySelector('html').style.setProperty('--transparent-primary', localStorage.transparentBgImgPrimary);
    document.querySelector('html').style.setProperty('--transparentprimary-transparentcolor', localStorage.transparentBgImgprimaryTransparent);
    (_document$querySelect19 = document.querySelector('body')) === null || _document$querySelect19 === void 0 ? void 0 : _document$querySelect19.classList.add('transparent-mode');
    (_document$querySelect20 = document.querySelector('body')) === null || _document$querySelect20 === void 0 ? void 0 : _document$querySelect20.classList.remove('dark-mode');
    (_document$querySelect21 = document.querySelector('body')) === null || _document$querySelect21 === void 0 ? void 0 : _document$querySelect21.classList.remove('light-mode');
    $('#myonoffswitchTransparent').prop('checked', true);
  }

  if (localStorage.transparentBgColor) {
    // document.getElementById('transparentBgColorID').value = localStorage.transparentBgColor;      // To set the primary color for color picker
    document.querySelector('html').style.setProperty('--transparent-body', localStorage.transparentBgColor);
    document.querySelector('html').style.setProperty('--transparent-mode', localStorage.transparentThemeColor);
    document.querySelector('html').style.setProperty('--transparentprimary-transparentcolor', localStorage.transparentprimaryTransparent);
    document.querySelector('body').classList.add('transparent-mode');
    document.querySelector('body').classList.remove('dark-mode');
    document.querySelector('body').classList.remove('light-mode');
    $('#myonoffswitchTransparent').prop('checked', true);
  }

  if (localStorage.BgImage) {
    var _document$querySelect22, _document$querySelect23, _document$querySelect24, _document$querySelect25;

    (_document$querySelect22 = document.querySelector('body')) === null || _document$querySelect22 === void 0 ? void 0 : _document$querySelect22.classList.add('transparent-mode');
    (_document$querySelect23 = document.querySelector('body')) === null || _document$querySelect23 === void 0 ? void 0 : _document$querySelect23.classList.add(localStorage.BgImage.split(' ')[0]);
    (_document$querySelect24 = document.querySelector('body')) === null || _document$querySelect24 === void 0 ? void 0 : _document$querySelect24.classList.remove('dark-mode');
    (_document$querySelect25 = document.querySelector('body')) === null || _document$querySelect25 === void 0 ? void 0 : _document$querySelect25.classList.remove('light-mode');
    $('#myonoffswitchTransparent').prop('checked', true);
  }
} // triggers on changing the color picker

function changePrimaryColor() {
  $('#myonoffswitch3').prop('checked', true);
  $('#myonoffswitch6').prop('checked', true);
  (0,_custom1_js__WEBPACK_IMPORTED_MODULE_0__.checkOptions)();
  var userColor = document.getElementById('colorID').value;
  localStorage.setItem('primaryColor', userColor); // to store value as opacity 0.95 we use 95

  localStorage.setItem('primaryHoverColor', userColor + 95);
  localStorage.setItem('primaryBorderColor', userColor);
  localStorage.setItem('primaryTransparent', userColor + 20); // removing dark theme properties

  localStorage.removeItem('darkPrimary');
  localStorage.removeItem('transparentBgColor');
  localStorage.removeItem('transparentThemeColor');
  localStorage.removeItem('transparentPrimary');
  localStorage.removeItem('transparentBgImgPrimary');
  localStorage.removeItem('transparentBgImgprimaryTransparent');
  localStorage.removeItem('darkprimaryTransparent');
  document.querySelector('body').classList.add('light-mode');
  document.querySelector('body').classList.remove('transparent-mode');
  document.querySelector('body').classList.remove('dark-mode');
  localStorage.removeItem('BgImage');
  $('#myonoffswitch1').prop('checked', true);
  names();
}

function darkPrimaryColor() {
  var userColor = document.getElementById('darkPrimaryColorID').value;
  localStorage.setItem('darkPrimary', userColor);
  localStorage.setItem('darkprimaryTransparent', userColor + 20);
  $('#myonoffswitch5').prop('checked', true);
  $('#myonoffswitch8').prop('checked', true);
  (0,_custom1_js__WEBPACK_IMPORTED_MODULE_0__.checkOptions)(); // removing light theme data

  localStorage.removeItem('primaryColor');
  localStorage.removeItem('primaryHoverColor');
  localStorage.removeItem('primaryBorderColor');
  localStorage.removeItem('primaryTransparent');
  localStorage.removeItem('transparentBgImgPrimary');
  localStorage.removeItem('transparentBgImgprimaryTransparent');
  localStorage.removeItem('transparentBgColor');
  localStorage.removeItem('transparentThemeColor');
  localStorage.removeItem('transparentPrimary');
  localStorage.removeItem('BgImage');
  document.querySelector('body').classList.add('dark-mode');
  document.querySelector('body').classList.remove('light-mode');
  document.querySelector('body').classList.remove('transparent-mode');
  $('#myonoffswitch2').prop('checked', true);
  names();
}

function transparentPrimaryColor() {
  var _document$querySelect26, _document$querySelect27, _document$querySelect28, _document$querySelect29;

  $('#myonoffswitch3').prop('checked', false);
  $('#myonoffswitch6').prop('checked', false);
  $('#myonoffswitch5').prop('checked', false);
  $('#myonoffswitch8').prop('checked', false);
  var userColor = document.getElementById('transparentPrimaryColorID').value;
  localStorage.setItem('transparentPrimary', userColor);
  localStorage.setItem('transparentprimaryTransparent', userColor + 20); // removing light theme data

  localStorage.removeItem('darkPrimary');
  localStorage.removeItem('primaryColor');
  localStorage.removeItem('primaryHoverColor');
  localStorage.removeItem('primaryBorderColor');
  localStorage.removeItem('primaryTransparent');
  localStorage.removeItem('transparentBgImgPrimary');
  localStorage.removeItem('transparentBgImgprimaryTransparent');
  document.querySelector('body').classList.add('transparent-mode');
  document.querySelector('body').classList.remove('light-mode');
  document.querySelector('body').classList.remove('dark-mode');
  localStorage.removeItem('BgImage');
  (_document$querySelect26 = document.querySelector('body')) === null || _document$querySelect26 === void 0 ? void 0 : _document$querySelect26.classList.remove('bg-img1');
  (_document$querySelect27 = document.querySelector('body')) === null || _document$querySelect27 === void 0 ? void 0 : _document$querySelect27.classList.remove('bg-img2');
  (_document$querySelect28 = document.querySelector('body')) === null || _document$querySelect28 === void 0 ? void 0 : _document$querySelect28.classList.remove('bg-img3');
  (_document$querySelect29 = document.querySelector('body')) === null || _document$querySelect29 === void 0 ? void 0 : _document$querySelect29.classList.remove('bg-img4');
  $('#myonoffswitchTransparent').prop('checked', true);
  (0,_custom1_js__WEBPACK_IMPORTED_MODULE_0__.checkOptions)();
  names();
}

function transparentBgImgPrimaryColor() {
  var _document$querySelect30, _document$querySelect31, _document$querySelect32, _document$querySelect33, _document$querySelect35, _document$querySelect36;

  $('#myonoffswitch3').prop('checked', false);
  $('#myonoffswitch6').prop('checked', false);
  $('#myonoffswitch5').prop('checked', false);
  $('#myonoffswitch8').prop('checked', false);
  var userColor = document.getElementById('transparentBgImgPrimaryColorID').value;
  localStorage.setItem('transparentBgImgPrimary', userColor);
  localStorage.setItem('transparentBgImgprimaryTransparent', userColor + 20);

  if (((_document$querySelect30 = document.querySelector('body')) === null || _document$querySelect30 === void 0 ? void 0 : _document$querySelect30.classList.contains('bg-img1')) == false && ((_document$querySelect31 = document.querySelector('body')) === null || _document$querySelect31 === void 0 ? void 0 : _document$querySelect31.classList.contains('bg-img2')) == false && ((_document$querySelect32 = document.querySelector('body')) === null || _document$querySelect32 === void 0 ? void 0 : _document$querySelect32.classList.contains('bg-img3')) == false && ((_document$querySelect33 = document.querySelector('body')) === null || _document$querySelect33 === void 0 ? void 0 : _document$querySelect33.classList.contains('bg-img4')) == false) {
    var _document$querySelect34;

    (_document$querySelect34 = document.querySelector('body')) === null || _document$querySelect34 === void 0 ? void 0 : _document$querySelect34.classList.add('bg-img1');
    localStorage.setItem('BgImage', 'bg-img1');
  } // removing light theme data


  localStorage.removeItem('darkPrimary');
  localStorage.removeItem('primaryColor');
  localStorage.removeItem('primaryHoverColor');
  localStorage.removeItem('primaryBorderColor');
  localStorage.removeItem('primaryTransparent');
  localStorage.removeItem('darkprimaryTransparent');
  localStorage.removeItem('transparentPrimary');
  localStorage.removeItem('transparentprimaryTransparent');
  document.querySelector('body').classList.add('transparent-mode');
  (_document$querySelect35 = document.querySelector('body')) === null || _document$querySelect35 === void 0 ? void 0 : _document$querySelect35.classList.remove('light-mode');
  (_document$querySelect36 = document.querySelector('body')) === null || _document$querySelect36 === void 0 ? void 0 : _document$querySelect36.classList.remove('dark-mode');
  $('#myonoffswitchTransparent').prop('checked', true);
  (0,_custom1_js__WEBPACK_IMPORTED_MODULE_0__.checkOptions)();
  names();
}

function transparentBgColor() {
  var _document$querySelect37, _document$querySelect38, _document$querySelect39, _document$querySelect40;

  $('#myonoffswitch3').prop('checked', false);
  $('#myonoffswitch6').prop('checked', false);
  $('#myonoffswitch5').prop('checked', false);
  $('#myonoffswitch8').prop('checked', false);
  var userColor = document.getElementById('transparentBgColorID').value;
  localStorage.setItem('transparentBgColor', userColor);
  localStorage.setItem('transparentThemeColor', userColor + 95);
  localStorage.setItem('transparentprimaryTransparent', userColor + 20);
  localStorage.removeItem('transparentBgImgPrimary');
  localStorage.removeItem('transparentBgImgprimaryTransparent'); // removing light theme data

  localStorage.removeItem('darkPrimary');
  localStorage.removeItem('primaryColor');
  localStorage.removeItem('primaryHoverColor');
  localStorage.removeItem('primaryBorderColor');
  localStorage.removeItem('primaryTransparent');
  localStorage.removeItem('BgImage');
  document.querySelector('body').classList.add('transparent-mode');
  document.querySelector('body').classList.remove('light-mode');
  document.querySelector('body').classList.remove('dark-mode');
  (_document$querySelect37 = document.querySelector('body')) === null || _document$querySelect37 === void 0 ? void 0 : _document$querySelect37.classList.remove('bg-img1');
  (_document$querySelect38 = document.querySelector('body')) === null || _document$querySelect38 === void 0 ? void 0 : _document$querySelect38.classList.remove('bg-img2');
  (_document$querySelect39 = document.querySelector('body')) === null || _document$querySelect39 === void 0 ? void 0 : _document$querySelect39.classList.remove('bg-img3');
  (_document$querySelect40 = document.querySelector('body')) === null || _document$querySelect40 === void 0 ? void 0 : _document$querySelect40.classList.remove('bg-img4');
  $('#myonoffswitchTransparent').prop('checked', true);
  (0,_custom1_js__WEBPACK_IMPORTED_MODULE_0__.checkOptions)();
}

function bgImage(e) {
  var _document$querySelect41, _document$querySelect42;

  $('#myonoffswitch3').prop('checked', false);
  $('#myonoffswitch6').prop('checked', false);
  $('#myonoffswitch5').prop('checked', false);
  $('#myonoffswitch8').prop('checked', false);
  var imgID = e.getAttribute('class');
  localStorage.setItem('BgImage', imgID); // removing light theme data

  localStorage.removeItem('darkPrimary');
  localStorage.removeItem('primaryColor');
  localStorage.removeItem('transparentBgColor');
  localStorage.removeItem('transparentThemeColor');
  localStorage.removeItem('transparentprimaryTransparent');
  document.querySelector('body').classList.add('transparent-mode');
  (_document$querySelect41 = document.querySelector('body')) === null || _document$querySelect41 === void 0 ? void 0 : _document$querySelect41.classList.remove('light-mode');
  (_document$querySelect42 = document.querySelector('body')) === null || _document$querySelect42 === void 0 ? void 0 : _document$querySelect42.classList.remove('dark-mode');
  $('#myonoffswitchTransparent').prop('checked', true);
  (0,_custom1_js__WEBPACK_IMPORTED_MODULE_0__.checkOptions)();
} // to check the value is hexa or not


var isValidHex = function isValidHex(hexValue) {
  return /^#([A-Fa-f0-9]{3,4}){1,2}$/.test(hexValue);
};

var getChunksFromString = function getChunksFromString(st, chunkSize) {
  return st.match(new RegExp(".{".concat(chunkSize, "}"), "g"));
}; // convert hex value to 256


var convertHexUnitTo256 = function convertHexUnitTo256(hexStr) {
  return parseInt(hexStr.repeat(2 / hexStr.length), 16);
}; // get alpha value is equla to 1 if there was no value is asigned to alpha in function


var getAlphafloat = function getAlphafloat(a, alpha) {
  if (typeof a !== "undefined") {
    return a / 255;
  }

  if (typeof alpha != "number" || alpha < 0 || alpha > 1) {
    return 1;
  }

  return alpha;
}; // convertion of hex code to rgba code


function hexToRgba(hexValue, alpha) {
  if (!isValidHex(hexValue)) {
    return null;
  }

  var chunkSize = Math.floor((hexValue.length - 1) / 3);
  var hexArr = getChunksFromString(hexValue.slice(1), chunkSize);

  var _hexArr$map = hexArr.map(convertHexUnitTo256),
      _hexArr$map2 = _slicedToArray(_hexArr$map, 4),
      r = _hexArr$map2[0],
      g = _hexArr$map2[1],
      b = _hexArr$map2[2],
      a = _hexArr$map2[3];

  return "rgba(".concat(r, ", ").concat(g, ", ").concat(b, ", ").concat(getAlphafloat(a, alpha), ")");
} // reset styles


var resetData = document.querySelector('.resetCustomStyles');
resetData === null || resetData === void 0 ? void 0 : resetData.addEventListener('click', function () {
  var _$, _$2, _$3, _$4, _$5, _$6, _$7, _$8, _$9, _$10, _$11, _$12, _$13, _$14, _$15, _$16, _$17, _$18, _$19, _$20;

  localStorage.clear();
  document.querySelector('html').style = '';
  names();
  (_$ = $('body')) === null || _$ === void 0 ? void 0 : _$.removeClass('bg-img4');
  (_$2 = $('body')) === null || _$2 === void 0 ? void 0 : _$2.removeClass('bg-img1');
  (_$3 = $('body')) === null || _$3 === void 0 ? void 0 : _$3.removeClass('bg-img2');
  (_$4 = $('body')) === null || _$4 === void 0 ? void 0 : _$4.removeClass('bg-img3');
  (_$5 = $('body')) === null || _$5 === void 0 ? void 0 : _$5.removeClass('transparent-mode');
  (_$6 = $('body')) === null || _$6 === void 0 ? void 0 : _$6.removeClass('dark-mode');
  (_$7 = $('body')) === null || _$7 === void 0 ? void 0 : _$7.removeClass('dark-menu');
  (_$8 = $('body')) === null || _$8 === void 0 ? void 0 : _$8.removeClass('color-menu');
  (_$9 = $('body')) === null || _$9 === void 0 ? void 0 : _$9.removeClass('gradient-menu');
  (_$10 = $('body')) === null || _$10 === void 0 ? void 0 : _$10.removeClass('dark-header');
  (_$11 = $('body')) === null || _$11 === void 0 ? void 0 : _$11.removeClass('color-header');
  (_$12 = $('body')) === null || _$12 === void 0 ? void 0 : _$12.removeClass('gradient-header');
  (_$13 = $('body')) === null || _$13 === void 0 ? void 0 : _$13.removeClass('layout-boxed');
  (_$14 = $('body')) === null || _$14 === void 0 ? void 0 : _$14.removeClass('icontext-menu');
  (_$15 = $('body')) === null || _$15 === void 0 ? void 0 : _$15.removeClass('icon-overlay');
  (_$16 = $('body')) === null || _$16 === void 0 ? void 0 : _$16.removeClass('closed-leftmenu');
  (_$17 = $('body')) === null || _$17 === void 0 ? void 0 : _$17.removeClass('hover-submenu');
  (_$18 = $('body')) === null || _$18 === void 0 ? void 0 : _$18.removeClass('hover-submenu1');
  (_$19 = $('body')) === null || _$19 === void 0 ? void 0 : _$19.removeClass('sidenav-toggled');
  (_$20 = $('body')) === null || _$20 === void 0 ? void 0 : _$20.removeClass('scrollable-layout');
  $('body').addClass('light-mode');
  $('#myonoffswitch3').prop('checked', true);
  $('#myonoffswitch6').prop('checked', true);
  $('#myonoffswitch1').prop('checked', true);
  $('#myonoffswitch9').prop('checked', true);
  $('#myonoffswitch10').prop('checked', false);
  $('#myonoffswitch11').prop('checked', true);
  $('#myonoffswitch12').prop('checked', false);
  $('#myonoffswitch13').prop('checked', true);
  $('#myonoffswitch14').prop('checked', false);
  $('#myonoffswitch15').prop('checked', false);
  $('#myonoffswitch16').prop('checked', false);
  $('#myonoffswitch17').prop('checked', false);
  $('#myonoffswitch18').prop('checked', false);
  $('#myonoffswitchTransparent').prop('checked', false);
}); //

var myVarVal, myVarVal1, myVarVal2, myVarVal3, HExaTORGBA08, HExaTORGBA02, HExaTORGBAV108;
function names() {
  //get variable
  myVarVal = localStorage.getItem("primaryColor") || localStorage.getItem("darkPrimary") || localStorage.getItem("transparentPrimary") || localStorage.getItem("transparentBgImgPrimary") || "#6c5ffc";
  myVarVal1 = localStorage.getItem("primaryColor") || localStorage.getItem("darkPrimary") || localStorage.getItem("transparentPrimary") || localStorage.getItem("transparentBgImgPrimary") || "#05c3fb";
  myVarVal2 = localStorage.getItem("primaryColor") || localStorage.getItem("darkPrimary") || localStorage.getItem("transparentPrimary") || localStorage.getItem("transparentBgImgPrimary") || null;
  myVarVal3 = localStorage.getItem("primaryColor") || localStorage.getItem("darkPrimary") || localStorage.getItem("transparentPrimary") || localStorage.getItem("transparentBgImgPrimary") || null;
  HExaTORGBA08 = hexToRgba(myVarVal, 0.8);
  HExaTORGBA02 = hexToRgba(myVarVal, 0.2);
  HExaTORGBAV108 = hexToRgba(myVarVal1, 0.8);

  if (document.querySelector('#transactions') !== null) {
    (0,_index1_js__WEBPACK_IMPORTED_MODULE_1__.index)(HExaTORGBA08, HExaTORGBA02, HExaTORGBAV108, myVarVal);
  }

  var colorData = hexToRgba(myVarVal || "#6c5ffc", 0.1);
  document.querySelector('html').style.setProperty('--primary01', colorData);
  var colorData1 = hexToRgba(myVarVal || "#6c5ffc", 0.2);
  document.querySelector('html').style.setProperty('--primary02', colorData1);
  var colorData2 = hexToRgba(myVarVal || "#6c5ffc", 0.3);
  document.querySelector('html').style.setProperty('--primary03', colorData2);
  var colorData3 = hexToRgba(myVarVal || "#6c5ffc", 0.6);
  document.querySelector('html').style.setProperty('--primary06', colorData3);
  var colorData4 = hexToRgba(myVarVal || "#6c5ffc", 0.9);
  document.querySelector('html').style.setProperty('--primary09', colorData4);
}
names();

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/assets/js/themeColors.js");
/******/ 	
/******/ })()
;