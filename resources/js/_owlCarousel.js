import 'owl.carousel';

$(document).ready(function(){
// below is the basic owl carousel but you have to click to cycle it


    /// so below this makes it so it cycles on its own with a click of a button
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:5,
        loop:true,
        lazyLoad:true,
        center:true,
        margin:3,
        autoplay:true,
        autoplayTimeout:3000,
        //SMART SPEED IS WHAT ALLOWS IT TO SMOOTHLY MOVE INSTEAD OF STOP START 
        smartSpeed: 3000,
        autoplayHoverPause:true,
        dots:false,
        slideTransition: 'linear',

        ////responsive aspect of the olw
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:false
            },
        }
    })

});