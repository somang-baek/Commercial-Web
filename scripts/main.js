
$(document).ready(function() {
  AOS.init( {
    // once: true  
  });
});


$("a.smooth-scroll").click(function(event) {
  if (
    location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") &&
    location.hostname == this.hostname
  ) {
    var target = $(this.hash);
    target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
    if (target.length) {
      event.preventDefault();
      $("html, body").animate(
        {
          scrollTop: target.offset().top
        },
        1000,
        function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr("tabindex", "-1"); 
            $target.focus(); 
          }
        }
      );
    }
  }
});


// Light Box
$(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});

// Scroll Top
$(function () {
  $('[data-toggle="tooltip"]').tooltip()

  $("#scrolltop").click(function () {
    $("html,body").animate({ scrollTop: $("#top").offset().top }, "1000");
    return false
  })
})

$(window).scroll(function () {
  if ($(this).scrollTop() > 500) {
    $('#scrolltop:hidden').stop(true, true).fadeIn();
  } else {
    $('#scrolltop').stop(true, true).fadeOut();
  }
});

