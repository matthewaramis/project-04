(function($) {
  $(document).ready(function() {
    //toggle search
    $('.icon-search').on('click', function() {
      $('.search-form').addClass('search-show');
      console.log('search toggle clicked');
    });

    $('.search-form').on('blur', function() {
      $('.search-form').addClass('search-show');
      console.log('blurred');
    });
  });
})(jQuery);

//IIFE
//Immediately Invoked Function Expression
