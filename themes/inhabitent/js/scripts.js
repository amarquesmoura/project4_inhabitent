(function($) {
  // Add a reversed menu bar to hero images in front and about pages
  if ($('body').hasClass('home') || $('body').hasClass('page-template-about')) {
    const sh = $('.site-header');
    sh.addClass('reverse-header');
    const wh = $(window).height();
    $(window).scroll(function() {
      if ($(window).scrollTop() < wh) {
        sh.addClass('reverse-header');
      } else {
        sh.removeClass('reverse-header');
      }
    });
  }

  $(function() {
    const sf = $('.search-field');
    $('.search-toggle').on('click', function(event) {
      event.preventDefault();
      sf.animate({ width: 'toggle' }).focus();
    }),
      sf.on('blur', function() {
        '' === sf.val() && sf.animate({ width: 'hide' });
      });
  });
})(jQuery);
