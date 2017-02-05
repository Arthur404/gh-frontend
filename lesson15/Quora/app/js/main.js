
$('#close-nav').addClass("remove-btn");

$('#close-nav').click(function () {
    $('.navigation').slideUp(300);
    $('#open-nav').removeClass("remove-btn");
    $('#close-nav').addClass("remove-btn")
});

$('#open-nav').click(function () {
    $('.navigation').slideDown();
    $('#close-nav').removeClass("remove-btn");
    $('#open-nav').addClass("remove-btn")
});


$('.slider').slick({
    dots: true,
    arrows: false,
    cssEase: 'ease-in'
});

$('.isotope').isotope({
    itemSelector: '.masonry',
    percentPosition: true,
    masonry: {
        columnWidth: '.masonry'
    }
});

$('#up').click(function() {
    $('html, body').animate({scrollTop: 0},1000);
    return false;
});