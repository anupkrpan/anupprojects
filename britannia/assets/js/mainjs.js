// navbar fixed 
$(window).scroll(function () {
//    if ($(this).scrollTop() > 100) {
//        $('.fixed-top').addClass('fixed');        
//    }
//    else {
//        $('.fixed-top').removeClass('fixed');
//    }
});


$(document).ready(function () {
    $('.owl_home_main').owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        //animateOut: 'fadeOut',
        dots: false,
        autoplay: true,
        autoplayTimeout: 5500,
        smartSpeed:2000,
        autoplayHoverPause: false,
        navText: ["<i class='la la-angle-left'>", "<i class='la la-angle-right'>"],
        responsive: {
            0: {
                dots: false
            },            
            700: {
                dots: false
            }
        }
    });
});

$(document).ready(function () {
    $('.owl_testimonial').owlCarousel({
        items: 3,
        margin: 30,
        loop: true,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4500,
        autoplayHoverPause: true,
        navText: ["<i class='la la-angle-left'>", "<i class='la la-angle-right'>"],
        responsive: {
            0: {
                items: 1
            },            
            700: {
                items: 2
            },
            1300: {
                items: 3
            }           
        }
    });
});


$(document).ready(function () {
    $('.owl_clients').owlCarousel({
        items: 2,
        margin: 20,
        loop: true,
        nav: true,
        dots: true,
        autoplay: false,
        autoplayTimeout: 4500,
        autoplayHoverPause: false,
        navText: ["<i class='la la-angle-left'>", "<i class='la la-angle-right'>"],
        responsive: {
            0: {
                items: 2
            },            
            575: {
                items: 3
            },            
            700: {
                items: 4
            },
            992: {
                items: 5
            },             
            1300: {
                items: 6
            }                       
        }
    });
});

