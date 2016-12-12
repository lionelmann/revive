(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

//Init WOW.js with animate.css
new WOW().init();

//Nav bar change color on scroll
jQuery(document).ready(function($) {
    $(window).scroll(function() {
        var scrollPos = $(window).scrollTop(),
            navbar = $('nav');

        if (scrollPos > 50) {
            navbar.addClass('change-color');
        } else {
            navbar.removeClass('change-color');
        }
    });
});