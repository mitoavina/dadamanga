"use strict";

var listAdventure = {
  'destination': [],
  'park': [],
  'experience': [],
  'wildlife': []
};
var keys = Object.keys(listAdventure);
new WOW().init();

function setCartNumber() {
  if ($.cookie("adventure") !== undefined && $.cookie("adventure") !== null && $.cookie("adventure") !== "") {
    var cookie = JSON.parse($.cookie("adventure"));
    console.log(cookie);
    var numeric_array = new Array();

    for (var items in cookie) {
      numeric_array.push(cookie[items]);
    }

    var itemTotal = 0;

    for (var i = 0; i < numeric_array.length; i++) {
      itemTotal += numeric_array[i].length;
    }

    if (itemTotal !== 0) {
      $("#cart-number").css("display", "inline-flex");
      $("#cart-number").html(itemTotal);
    } else {
      $("#cart-number").css("display", "none");
    }
  }
}

setCartNumber();
$(document).ready(function () {
  $(".list-group-item > a").on("click", function (e) {
    e.preventDefault();
    sideMenu(e.target.parentElement);
    $(".list-group-item").each(function () {
      if (!$(e.target.parentElement).is($(this))) {
        if ($(e.target.parentElement).attr("data-index") == $(this).attr("data-index")) {
          $(this).addClass("side-menu-style-active");
          var others = $(this).siblings();
          $(others).each(function () {
            $(this).removeClass("side-menu-style-active");
          });
        }
      }
    });
  });
});

function sideMenu(element) {
  $(element).addClass("side-menu-style-active");
  var dataIndex = $(element).data("index");
  var activeContent = $(".dadamanga-special-card-container > .active");
  $(activeContent).removeClass("active");
  $(activeContent).addClass("d-none");
  var contentToShow = $(".dadamanga-special-card-container > div[data-index=\"".concat(dataIndex, "\"]"));
  contentToShow.removeClass("d-none");
  $(contentToShow).css({
    opacity: "0"
  }).show().animate({
    opacity: 1
  }, 1500);
  contentToShow.addClass("active");
  var parent = element;
  var others = $(parent).siblings();
  $(others).each(function () {
    $(this).removeClass("side-menu-style-active");
  });
  changeTitle(dataIndex);
}

var cardsToAnimate = $(".focus-card-containers > .card");
$(".focus-card-containers > .card").hover(function (e) {
  $(e.currentTarget).siblings().css("opacity", "0.5");
}, function (e) {
  $(cardsToAnimate).css("opacity", 1);
});
var delai = 250; // Right

var imgRightInAnimation = "fadeIn";
var imgRightOutAnimation = "fadeOut";
var monthsRightInAnimation = "fadeIn";
var monthsRightOutAnimation = "fadeOut";
var descriptionRightInAnimation = "fadeIn";
var descriptionRightOutAnimation = "fadeOut"; // Left

var imgLeftInAnimation = "fadeIn";
var imgLeftOutAnimation = "fadeOut";
var monthsLeftInAnimation = "fadeIn";
var monthsLeftOutAnimation = "fadeOut";
var descriptionLeftInAnimation = "fadeIn";
var descriptionLeftOutAnimation = "fadeOut";

function nextCard(changeBrownTitle) {
  var activeImg = $(".dadamanga-special-card > div > div > .active");
  $(activeImg).css("animationName", "");
  $(activeImg).removeClass("animated wow fadeInLeft active ".concat(imgLeftInAnimation, " ").concat(imgRightInAnimation));
  $(activeImg).addClass("animated  ".concat(imgRightOutAnimation));
  setTimeout(function () {
    $(activeImg).removeClass("animated  ".concat(imgRightOutAnimation));
    $(activeImg).addClass("d-none");
    var nextImg = $(activeImg).next();

    if (nextImg.length == 0) {
      nextImg = $(activeImg).siblings().first();
    }

    $(nextImg).addClass("animated ".concat(imgRightInAnimation, "  active"));
    $(nextImg).removeClass("d-none");
  }, delai);
  var activeMonths = $(".month-containers > .active");
  $(activeMonths).removeClass("animated active ".concat(monthsLeftInAnimation, " ").concat(monthsRightInAnimation));
  $(activeMonths).addClass("animated ".concat(monthsRightOutAnimation, " "));
  setTimeout(function () {
    $(activeMonths).removeClass("animated ".concat(monthsRightOutAnimation, " "));
    $(activeMonths).addClass("d-none");
    var nextMonths = $(activeMonths).next();

    if (nextMonths.length == 0) {
      nextMonths = $(activeMonths).siblings().first();
    }

    $(nextMonths).addClass("animated ".concat(monthsRightInAnimation, "  active"));
    $(nextMonths).removeClass("d-none");
  }, delai);
  var activeDescription = $(".description-container > .active");
  $(activeDescription).removeClass("animated active ".concat(descriptionLeftInAnimation, " ").concat(descriptionRightInAnimation));
  $(activeDescription).addClass("animated ".concat(descriptionRightOutAnimation, " "));
  setTimeout(function () {
    $(activeDescription).addClass("d-none");
    $(activeDescription).removeClass("animated ".concat(descriptionRightOutAnimation, " "));
    var nextDescription = $(activeDescription).next();

    if (nextDescription.length == 0) {
      nextDescription = $(activeDescription).siblings().first();
    }

    $(nextDescription).removeClass("d-none");
    $(nextDescription).addClass("animated ".concat(descriptionRightInAnimation, "  active"));
  }, delai);

  if (changeBrownTitle == true) {
    var activeTitle = $(".dadamanga-special-card-brown-title > .active");
    $(activeTitle).removeClass("animated active ".concat(descriptionLeftInAnimation, " ").concat(descriptionRightInAnimation));
    $(activeTitle).addClass("animated ".concat(descriptionRightOutAnimation, " "));
    setTimeout(function () {
      $(activeTitle).addClass("d-none");
      $(activeTitle).removeClass("animated ".concat(descriptionRightOutAnimation, " "));
      var nextTitle = $(activeTitle).next();

      if (nextTitle.length == 0) {
        nextTitle = $(activeTitle).siblings().first();
      }

      $(nextTitle).removeClass("d-none");
      $(nextTitle).addClass("animated ".concat(descriptionRightInAnimation, "  active"));
    }, delai);
  }
}

function prevCard(changeBrownTitle) {
  var activeImg = $(".dadamanga-special-card > div > div > .active");
  $(activeImg).css("animationName", "");
  $(activeImg).removeClass("animated wow fadeInLeft active ".concat(imgLeftInAnimation, " ").concat(imgRightInAnimation));
  $(activeImg).addClass("animated  ".concat(imgLeftOutAnimation));
  setTimeout(function () {
    $(activeImg).removeClass("animated  ".concat(imgLeftOutAnimation));
    $(activeImg).addClass("d-none");
    var prevImg = $(activeImg).prev();

    if (prevImg.length == 0) {
      prevImg = $(activeImg).siblings().last();
    }

    $(prevImg).addClass("animated ".concat(imgLeftInAnimation, "  active"));
    $(prevImg).removeClass("d-none");
  }, delai);
  var activeMonths = $(".month-containers > .active");
  $(activeMonths).removeClass("animated active ".concat(monthsLeftInAnimation, " ").concat(monthsRightInAnimation));
  $(activeMonths).addClass("animated ".concat(monthsLeftOutAnimation, " "));
  setTimeout(function () {
    $(activeMonths).removeClass("animated ".concat(monthsLeftOutAnimation, " "));
    $(activeMonths).addClass("d-none");
    var prevMonths = $(activeMonths).prev();

    if (prevMonths.length == 0) {
      prevMonths = $(activeMonths).siblings().last();
    }

    $(prevMonths).addClass("animated ".concat(monthsLeftInAnimation, "  active"));
    $(prevMonths).removeClass("d-none");
  }, delai);
  var activeDescription = $(".description-container > .active");
  $(activeDescription).removeClass("animated active ".concat(descriptionLeftInAnimation, " ").concat(descriptionRightInAnimation));
  $(activeDescription).addClass("animated ".concat(descriptionLeftOutAnimation, " "));
  setTimeout(function () {
    $(activeDescription).addClass("d-none");
    $(activeDescription).removeClass("animated ".concat(descriptionLeftOutAnimation, " "));
    var prevDescription = $(activeDescription).prev();

    if (prevDescription.length == 0) {
      prevDescription = $(activeDescription).siblings().last();
    }

    $(prevDescription).removeClass("d-none");
    $(prevDescription).addClass("animated ".concat(descriptionLeftInAnimation, "  active"));
  }, delai);

  if (changeBrownTitle == true) {
    var activeTitle = $(".dadamanga-special-card-brown-title > .active");
    $(activeTitle).removeClass("animated active ".concat(descriptionLeftInAnimation, " ").concat(descriptionRightInAnimation));
    $(activeTitle).addClass("animated ".concat(descriptionLeftOutAnimation, " "));
    setTimeout(function () {
      $(activeTitle).addClass("d-none");
      $(activeTitle).removeClass("animated ".concat(descriptionLeftOutAnimation, " "));
      var prevTitle = $(activeTitle).prev();

      if (prevTitle.length == 0) {
        prevTitle = $(activeTitle).siblings().last();
      }

      $(prevTitle).removeClass("d-none");
      $(prevTitle).addClass("animated ".concat(descriptionLeftInAnimation, "  active"));
    }, delai);
  }
} // FOR SIDENAV

/* Set the width of the side navigation to 250px */


function openNav() {
  if ($("#mySidenav").css("marginRight").replace("px", "") < 0) {
    // document.getElementById("mySidenav").style.width = "250px";
    $("#mySidenav").css("marginRight", "0");
    $("#filtre-trans").css("zIndex", "1039");
    $("#filtre-trans").css("background", "rgba(0, 0, 0, 0.616)");
  } else {
    closeNav();
  }
}
/* Set the width of the side navigation to 0 */


function closeNav() {
  $("#mySidenav").css("marginRight", "-320px");
  $("#filtre-trans").css("zIndex", "-5");
  $("#filtre-trans").css("background", "transparent");
} // var original_length = $(".jumbotron").outerHeight();


var animatedNav = document.getElementById("animated-nav");
var nav_length = 0;

if (animatedNav !== null) {
  nav_length = animatedNav.offsetHeight;
} // $("jumbotron").css('minHeight', (original_length - nav_length) + "px");
// FOR SCROLLING


$(document).ready(function () {
  $("a.lien1").click(function () {
    $("html, body").animate({
      scrollTop: $("div.div1").offset().top - nav_length
    }, 1000);
  }), $("a.lien2").click(function () {
    $("html, body").animate({
      scrollTop: $("div.div2").offset().top - nav_length
    }, 1000);
  }), $("a.lien3").click(function () {
    $("html, body").animate({
      scrollTop: $("div.div3").offset().top - nav_length
    }, 1000);
  }), $("a.lien4").click(function () {
    $("html, body").animate({
      scrollTop: $("div.div4").offset().top - nav_length
    }, 1000);
  }), $("a.lien5").click(function () {
    $("html, body").animate({
      scrollTop: $("div.div5").offset().top - nav_length
    }, 1000);
  }), $("a.lien6").click(function () {
    $("html, body").animate({
      scrollTop: $("div.div6").offset().top - nav_length
    }, 1000);
  });
}); // FOR SCROLLING

$(document).ready(function () {
  $(".overlay-marron-container").hover(function (e) {
    $(e.currentTarget).find(".to-hide").addClass("d-none");
    $(e.currentTarget).find(".overlay-marron").removeClass("d-none");
    $(e.currentTarget).siblings().find(".overlay-marron").addClass("d-none");
  }, function (e) {
    $(e.currentTarget).find(".to-hide").removeClass("d-none");
    $(e.currentTarget).find(".overlay-marron").addClass("d-none");
  });
});
/**		KNOWLEDGE	**/

function changeTitle(dataIndex) {
  if (typeof variable !== "undefined") {
    $(".knowledge-title p").fadeOut(150, function () {
      $(".knowledge-title p").html(dataIndex);
      $(".knowledge-title p").fadeIn(150);
    });
  }
}

jQuery(document).ready(function ($) {
  if ($("#galleria").length) {
    var win_width = $(window).width();
    var galleria_height = 620;

    if (win_width <= 1940) {
      galleria_height = 600;
    }

    if (win_width <= 1680) {
      galleria_height = 600;
    }

    if (win_width <= 1280) {
      galleria_height = 580;
    }

    if (win_width <= 1024) {
      galleria_height = 560;
    }

    if (win_width <= 980) {
      galleria_height = 540;
    }

    if (win_width <= 768) {
      galleria_height = 480;
    }

    if (win_width <= 480) {
      galleria_height = 460;
    }

    var gallariaSelf = {
      init: function init(newHeight) {
        Galleria.run("#galleria"); //console.log('galleria_height='+ galleria_height);

        Galleria.configure({
          transition: "slide",
          transitionSpeed: 500,
          lightbox: false,
          responsive: true,
          imageCrop: true,
          thumbnails: true,
          thumbCrop: true,
          height: newHeight
        });
      }
    };
    gallariaSelf.init(galleria_height);
    Galleria.ready(function (options) {
      // this = the gallery instance
      // options = the gallery options
      this.bind("image", function (e) {
        //Galleria.log(e.index) // the image index
        $(e.imageTarget).click(this.proxy(function () {//Galleria.log('clicked') // the image index
        }));
      });
      this.bind("loadfinish", function (e) {
        var total_thumb = $(".galleria-thumbnails .galleria-image").length; //console.log('total_thumb='+total_thumb);

        if (2 == total_thumb) {
          $(".galleria-thumbnails").addClass("two-half");
        } else {
          $(".galleria-thumbnails").addClass("one-third");
        } // $('.galleria-image').each(function(index, el) {
        //     var _this_el = $(el);
        //     var img_src = _this_el.find('img').attr('src');
        //     _this_el.css({
        //         'background-image': 'url(' + img_src + ')',
        //         'background-size': 'cover',
        //         'background-position': '50% 50%'
        //     });
        //     _this_el.find('img').hide();
        // });

      });
      this.bind("thumbnail", function (e) {
        $(e.thumbTarget).parent().click(function () {
          __toggle_active_classes($("#gallery-slngle-view"));
        });
      });
      $(".galleria-thumbnails .galleria-image").click(function () {
        //var current_index = $('.galleria-thumbnails .galleria-image').index( $(this) );
        Galleria.get(0).$("thumblink").click();
      }); //this.$('thumblink').click();
      // only for desktop

      if ($(window).width() > 767) {
        $("#galleria").after(function () {
          return '<div id="gallery-controls"> \
                       <span id="gallery-slngle-view"   class="gallery-active-view"></span> \
                    <span id="gallery-multiple-view"></span> \
            </div>';
        });
      }

      $(document).on("click", "#gallery-slngle-view, #gallery-multiple-view", function (event) {
        __actvate_btn($(this));
      });

      var __toggle_active_classes = function __toggle_active_classes(_target_btn) {
        $("#gallery-controls > *").removeClass("gallery-active-view");

        _target_btn.addClass("gallery-active-view");
      };

      var __actvate_btn = function __actvate_btn(_target_btn) {
        //console.log(_target_btn);
        if (_target_btn.hasClass("gallery-active-view")) {
          return;
        }

        __toggle_active_classes(_target_btn);
        /*var newHeight = $('.galleria-image').find('img').height() * 2;
        console.log(newHeight);
        Galleria.get(0).destroy();
        gallariaSelf.init(newHeight);*/


        Galleria.get(0).$("thumblink").click();
      }; // wrap images as column


      var total_el = $(".galleria-thumbnails > div").length;

      for (i = 0, wrap_index = 6; i <= total_el; i++) {
        $(".galleria-thumbnails > div:lt(" + wrap_index + ")").slice(0, 6).wrapAll('<section class="gallaria-slide-col"/>');
        wrap_index = wrap_index + 6;
      }

      $(".galleria-thumbnails > section").height(galleria_height - 30);
      var total_sec = $(".galleria-thumbnails > section").length;
      Galleria.get(0).$("thumb-nav-left").hide();
      $(".galleria-thumbnails > section:lt(1)").show();
      Galleria.get(0).$("thumbnails-container").attr("data-tracked_sec_index", 1);

      if (total_sec <= 1) {
        Galleria.get(0).$("thumb-nav-right").hide();
      } else {
        Galleria.get(0).$("thumb-nav-right").show();
      }

      var initMargin = 0;
      $(".galleria-thumbnails").css("width", 100 * total_sec + "%");
      $(".gallaria-slide-col").css("width", 100 / total_sec + "%"); // if next button clicked

      Galleria.get(0).$("thumb-nav-right").click(function () {
        var tracked_sec_index = parseInt(Galleria.get(0).$("thumbnails-container").attr("data-tracked_sec_index"));
        $(".galleria-thumbnails").animate({
          left: "-=100%"
        }, 800);
        tracked_sec_index = tracked_sec_index + 1;
        var $flag = true;

        if (total_sec <= tracked_sec_index) {
          // add 1 to index bcoz index start from 0
          Galleria.get(0).$("thumb-nav-right").hide();
          $flag = false;
        } else {
          Galleria.get(0).$("thumb-nav-right").show();
        }

        Galleria.get(0).$("thumb-nav-left").show();

        if ($flag) {
          Galleria.get(0).$("thumbnails-container").attr("data-tracked_sec_index", tracked_sec_index);
        }
      }); // if prev button clicked

      Galleria.get(0).$("thumb-nav-left").click(function () {
        var tracked_sec_index = parseInt(Galleria.get(0).$("thumbnails-container").attr("data-tracked_sec_index"));
        $(".galleria-thumbnails").animate({
          left: "+=100%"
        }, 800);
        tracked_sec_index = tracked_sec_index - 1;
        var $flag = true;

        if (0 >= tracked_sec_index) {
          Galleria.get(0).$("thumb-nav-left").hide();
          $flag = false;
        } else {
          Galleria.get(0).$("thumb-nav-left").show();
        }

        Galleria.get(0).$("thumb-nav-right").show();

        if ($flag) {
          Galleria.get(0).$("thumbnails-container").attr("data-tracked_sec_index", tracked_sec_index);
        }
      });
    });
  }
});