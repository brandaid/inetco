$(document).ready(function() {
    
    // NAVBAR

    $( "#toggle" ).on( "click", function() {
        $('.navbar').slideToggle(500,'easeInOutQuart');
        $(this).toggleClass('fa-times');
    });

    $('.navbar li').each(function(){
        if($(this).children('ul').length > 0){
            $(this).addClass('dropdown');
            $(this).children('a').attr('href', 'javascript:void(0);');
            $(this).children('a').addClass('more');
            $(this).children('ul').addClass('sub-menu');
        }
    });

    $( ".dropdown" ).on( "click", function() {
        $(this).children('.sub-menu').slideToggle(200);
        $(this).children('a').toggleClass('less');
    });

    $( ".dropdown" ).on( "mouseleave", function() {
        $(this).children('.sub-menu').slideUp(200);
        $(this).children('a').removeClass('less');
    });



    //OWL CAROUSEL

    $('.owl-home').owlCarousel({
        loop:true,
        margin:0,
        autoplay: true,
        nav:true,
        dots: true,
        items:1,
        // autoHeight: true,
        smartSpeed:450,
        navText : ["",""],
    });

    $('.owl-cases').owlCarousel({
        loop:true,
        margin:0,
        autoplay: true,
        nav:false,
        dots: true,
        items:1,
        smartSpeed:450,
        navText : ["",""],
    });

    $('.owl-facility').owlCarousel({
        loop:true,
        margin:0,
        autoplay: true,
        nav:false,
        dots: true,
        items:1,
        smartSpeed:450,
        navText : ["",""],
    });

    //CONTACT BOX

    var pushRight = new Menu({
      wrapper: '#o-wrapper',
      type: 'push-right',
      menuOpenerClass: '.c-button',
      maskId: '#c-mask'
    });

    var pushRightBtn = document.querySelector('#c-button--push-right');
    
    pushRightBtn.addEventListener('click', function(e) {
      e.preventDefault;
      pushRight.open();
    });

    // MODAL

    $('[data-target="modal"]').on('click', function (e) {
        e.preventDefault();
        $('.modal').addClass("open");
    });

    $('.close').on('click', function (e) {
        e.preventDefault();
        $('.modal').removeClass("open");
    });

});