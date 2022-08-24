$(function() {
    // burger menu toggle
    const $burgerMenu = $('.main-nav__burger'),
        $menuWrapper = $('.main-nav__wrapper');
    $burgerMenu.on('click', e => {
        $menuWrapper.toggleClass('active');
    });

    // mobile sub-nav handler
    $('li.has-dropdown').on('click', e => {
        $(e.currentTarget).toggleClass('active');
    });

    //search hide show
    $(document).ready(function(){
        $(".search-button").click(function(){
          $(".search-input").toggle();
        });
    });

    //testimonial carousel
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
            items:1
            },
            600:{
            items:2
            },
            1000:{
            items: 3,
            nav: true,
            loop: true,
            margin: 20
            }
        }
    });
});
