//slider
$('.slider').slick({
    dots: true,
    arrows: true,
    cssEase: 'ease-in'
});

$('#open-nav').click(function(){
    $('.navigation').slideToggle(500);
});