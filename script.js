$(document).ready(function () {
    'use strict';
    
    var top = 80;
    
$(window).on('scroll', function () {
        if ($(window).scrollTop() >= top) {
            // if so, add the blue class
            $('#header').css({background: 'lightslategray'});
            $('#header').addClass('transition');
            $('#h1').css({color: 'lightcyan'});     
        } else {
            $('#header').css({background: 'transparent'});
            $('#header').addClass('transition');
            $('#h1').css({color: 'lightcyan'});
        }
    });
    
});