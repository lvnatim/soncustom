jQuery(document).ready(function($) {

  var activePackage = $(".package-number").eq(0);
  var packageWidth = $(".package").width();
  var offset = (packageWidth * 0.15);

  $(window).scroll(function() {
    var scrollTop = $(window).scrollTop();
    var elementOffset = $('#packages-container').offset().top;
    var distance = Math.abs(elementOffset - scrollTop);
    console.log(distance);
    if (distance < 380) {
      activePackage.addClass("active");
    } else {
      activePackage.removeClass("active");
    }
  })

  $("#packages-container").scroll(function(e) {
    const distanceFromLeft = $(this).scrollLeft() + offset;
    const index = Math.floor(distanceFromLeft / packageWidth);
    const calculatedPackage = $(".package-number").eq(index);

    if (calculatedPackage !== activePackage) {
      $(".package-number").removeClass("active");
      $(".package-number").eq(index).addClass("active");
      activePackage = calculatedPackage;
    }
  });

  $(window).resize(function(){
    packageWidth = $(".package").width();
    offset = (packageWidth * 0.15);
  });
});


