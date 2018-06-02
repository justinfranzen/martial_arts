$(document).ready(function () {
    'use strict';
    
    var top = 70;
    
$(window).on('scroll', function () {
        if ($(window).scrollTop() >= top) {
            // if so, add the blue class
            $('#header').css({background: 'navy'});
            $('#header').addClass('transition');
            $('#h1').css({color: 'white'});     
        } else {
            $('#header').css({background: 'transparent'});
            $('#header').addClass('transition');
            $('#h1').css({color: 'midnightblue'});
        }
    });
    
});