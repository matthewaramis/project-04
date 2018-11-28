(function($) {
  $(document).ready(function() {
    //toggle search
    $('.navigation-content .search-form').hide();

    $('.navigation-content .icon-search').on('click', function() {
      $('.navigation-content .search-form').toggle('slow');
      $('.navigation-content .search-field').focus();
    });

    $('.navigation-content .search-field').on('blur', function() {
      $('.navigation-content .search-form').toggle('slow');
    });
  });
})(jQuery);
