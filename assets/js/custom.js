(($) => {
  var $window = $(window);

  $('#header-open').on('click', function() {
      console.log('header open');
      $('#header').addClass('open');
  });

  $('#header-close').on('click', function() {
      $('#header').removeClass('open');
  });

  $("section[data-type='background']").each(function() {
      var $bgobj = $(this);

      $(window).scroll(function() {
      var yPos = -($window.scrollTop() / $bgobj.data('speed'));

      var coords = '50%' + yPos + 'px';

      $bgobj.css({
          backgroundPosition: coords
      });
      });
  });
})(jQuery);
