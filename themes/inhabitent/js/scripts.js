(function($) {
  // Add a reversed menu bar to hero images in front and about pages
  if ($('body').hasClass('home') || $('body').hasClass('page-template-about')) {
    $('.site-header').addClass('reverse-header');
    const wh = $(window).height();
    $(window).scroll(function() {
      if ($(window).scrollTop() < wh) {
        $('.site-header').addClass('reverse-header');
      } else {
        $('.site-header').removeClass('reverse-header');
      }
    });
  }
})(jQuery);
