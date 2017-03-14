$(document).ready(function() {
    
    // NAVBAR

    $( "#toggle" ).on( "click", function() {
        $('#overlay').toggleClass('overlay-on');
        $('.navbar').slideToggle(500,'easeInOutQuart');
        $(this).toggleClass('fa-times');
        $('html, body').toggleClass('block-scroll');
        $('#btn-contacto-bottom').toggleClass('show-fixed');
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
      maskId: '#c-mask'
    });

    var pushRightBtn = $('.open-contact-us'); 
    
    pushRightBtn.on('click', function(e) {
      e.preventDefault;
      pushRight.open();
    });

    // MODAL

    $('[data-target="modal"]').on('click', function (e) {
        e.preventDefault();
        var postID = $(this).attr("target-post");
        var post = teamPosts[postID];
        $('.modal [post-field]').each(function(){
            $(this).html(post[$(this).attr('post-field')].replace(/\n/gi,'<br>') || "");
        });
        $('.modal').addClass("open");
    });

    $('.close').on('click', function (e) {
        e.preventDefault();
        $('.modal').removeClass("open");
    });

    $('[data-target="modal-fa"]').on('click', function (e) {
        e.preventDefault();
        $('.modal').addClass("open");
    });

    $('.close').on('click', function (e) {
        e.preventDefault();
        $('.modal').removeClass("open");
    });

    //CUSTOMIZE SELECT

    $('#tags').niceSelect();

    $(function() {
        $("h2.fittext1, h4.fittext2, h2.fittext22").each(function() {
            if($(this).text().length < 9){

                $(this).addClass("low-bottom");
            
            }else if($(this).text().length < 11){
            
                $(this).addClass("xlmedium-bottom");
            
            }else if($(this).text().length < 12){
            
                $(this).addClass("medium-bottom");
            
            }else if($(this).text().length < 16){
            
                $(this).addClass("large-bottom");
            
            }else{
                
                $(this).addClass("xlarge-bottom");
            }
        });
    });
});



