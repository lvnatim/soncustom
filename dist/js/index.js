jQuery(document).ready(function($) {

  const num_packages = $('.package').length - 1;
  var activePackage = $(".package-number").eq(0);
  var packageWidth = $(".package").width();
  var offset = (packageWidth * 0.15);
  var currentIndex = 0;

  $(window).scroll(function() {
    var scrollTop = $(window).scrollTop();
    var elementOffset = $('#packages-container').offset().top;
    var distance = Math.abs(elementOffset - scrollTop);
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
      currentIndex = index;
    }
  });

  $("#packages-container").on( "mouseup touchend", function(e){
    setTimeout(function(){
      $("#packages-container").animate({scrollLeft: (packageWidth * currentIndex)}, 500);
    }, 250)
  });

  $(window).resize(function(){
    packageWidth = $(".package").width();
    offset = (packageWidth * 0.15);
  });

  $('#package-right').on('click', function(){
    if(currentIndex < num_packages){
      currentIndex += 1;
    }
    $("#packages-container").animate({scrollLeft: (packageWidth * currentIndex)}, 500);
  })

  $('#package-left').on('click', function(){
    if(currentIndex > 0){
      currentIndex -= 1;
    }
    $("#packages-container").animate({scrollLeft: (packageWidth * currentIndex)}, 500);
  })

  jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});




});


