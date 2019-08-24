"use strict"
// Main slider initiate
$('.main-slider').slick({
    infinite: true,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 4000,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    fade: true
});
$(window).on('load',function(){
    // Add functionality for the toggle button in the pricing page
    var dToggle = $('#d-toggle');
    var planPeriod = $('.pricing-price .duration', '.pricing-box');
    dToggle.on('click', function(){
        $('.fd',this).toggleClass('active');
        $('.button',this).toggleClass('on');
        $('.sd',this).toggleClass('active');
        
        if(planPeriod.hasClass('annouly')){
            planPeriod.text('/mo');
            for(var i=0;i<=2;i++){
                $('.pricing-box:eq('+i+') .num').text(parseFloat(Number($('.pricing-box:eq('+i+') .num').text())/12).toFixed(2));
            }
        }else{
            planPeriod.text('/yr');
            for(var i=0;i<=2;i++){
                $('.pricing-box:eq('+i+') .num').text(parseFloat(Number($('.pricing-box:eq('+i+') .num').text())*12).toFixed(2));
            }
        }
        planPeriod.toggleClass('annouly');
    });

    // Add scroll animation for hash links
    $('a[href*=\\#]').on('click', function(event){
        event.preventDefault();
        var elPos = 0;
        if($(this).attr('href')!='#'){
            elPos = $(this.hash).offset().top;
        }
        $('html,body').animate({scrollTop:elPos}, 500);
    });

    // About page "about.html"
    // Fix image resize issue.
    var photoHolder1 = $(".photo-holder.photo1", ".text-photo-sc");
    var textHolder1 = $(".text-holder.text1",".text-photo-sc");

    var photoHolder2 = $(".photo-holder.photo2", ".text-photo-sc");
    var textHolder2 = $(".text-holder.text2",".text-photo-sc");
    
    if ($(window).width() > 990) {
        photoHolder1.css("height",textHolder1.height());
        photoHolder2.css("height",textHolder2.height());
    }
    // About page "about.html"
    // Fix image resize issue when the window resized
    $(window).on("resize",function() {
        if ($(window).width() > 990) {
            photoHolder1.css("height",textHolder1.height());
            photoHolder2.css("height",textHolder2.height());
        }
        return false;
    });
});