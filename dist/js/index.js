jQuery(document).ready(function($) {
  $(window).scroll(function() {
    console.log($('#packages-container').offset().top)
    if ($('#packages-container').offset().top > 600) {
      $(".package-number").eq(0).addClass("active");
    }
  })



  $("#packages-container").scroll(function(e) {
    if ($(this).scrollLeft() <= 270) {
      console.log("1");
      $(".package-number").not(this).removeClass("active");
      $(".package-number").eq(0).addClass("active");
    } else if ($(this).scrollLeft() > 270 && $(this).scrollLeft() <= 600) {
      console.log("2");
      $(".package-number").not(this).removeClass("active");
      $(".package-number").eq(1).addClass("active");
    } else if ($(this).scrollLeft() > 600 && $(this).scrollLeft() <= 930) {
      console.log("3");
      $(".package-number").not(this).removeClass("active");
      $(".package-number").eq(2).addClass("active");
    } else {
      console.log("4");
      console.log("clicky clack lol")
      $(".package-number").not(this).removeClass("active");
      $(".package-number").eq(3).addClass("active");
    }
  });
});
