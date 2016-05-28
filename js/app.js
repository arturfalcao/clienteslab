$(document).foundation();

$(document).ready(function(){
  //stick the header
  $("#main-header").sticky({topSpacing:0});

  //open dropdown
   $('.menu').dropit();

   //do not close the dropdown when clicking inside
   $('.menu').on('click', function(e) {
    e.stopPropagation();
  });

  var $root = $('html, body');
  $('#main-menu a').click(function() {
      var href = $.attr(this, 'href');
      $root.animate({
          scrollTop: $(href).offset().top
      }, 500, function () {
          window.location.hash = href;
      });
      return false;
  });

});
