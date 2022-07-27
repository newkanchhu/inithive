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
});
