

// slick
$( document ).ready(function() {
    $(".pbl-story").slick({
        autoplay:false,
        arrows: true,
        nextArrow:'<i class="fa-solid fa-arrow-right next-arrow"></i>',
        prevArrow:false,
       slidesToShow:4,
    });
});

$('.box').scrollable({
    
         mouseWheel: true,
    
         mouseWheelMaxDelta: 30
    
        });