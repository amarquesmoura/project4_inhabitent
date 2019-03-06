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

  $(function() {
    $('.search-toggle').on('click', function(event) {
      event.preventDefault();
      $('.search-field').animate({ width: 'toggle' }),
        $('.search-field')
          .children('[type="search"]')
          .focus();
    }),
      $('.search-field').on('blur', function() {
        '' === $('.search-field').val() &&
          $('.search-field').animate({ width: 'hide' });
      });
  });
})(jQuery);
