//slider
$('.slider').slick({
    dots: true,
    arrows: false,
    cssEase: 'ease-in'
});

$('#open-nav').click(function(){
    $('.navigation').slideToggle(500);
});