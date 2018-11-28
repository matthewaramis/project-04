(function($) {
  $(document).ready(function() {
    //toggle search
    $('.search-form').hide();

    $('.icon-search').on('click', function() {
      $('.search-form').toggle('slow');
      $('.search-field').focus();
    });

    $('.search-field').on('blur', function() {
      $('.search-form').toggle('slow');
    });
  });
})(jQuery);

//IIFE
//Immediately Invoked Function Expression
