$(document).ready(function(){
$('.slider').slick({
    dots: true,
    arrows: true,
    cssEase: 'ease-in',
    responsive: [
        {
            breakpoint: 810,
            settings: {
                arrows: false
            }
        }
    ]
});

$('#open-nav').click(function(){
    $('.navigation').slideToggle(500);
});

    $('.isotope').isotope({
        itemSelector: '.masonry',
        percentPosition: true,
        isFitWidth: true,
        masonry: {
            columnWidth: 1
        }
    });

    $('.slider-client').slick({
        arrows: true,
        cssEase: 'ease-in',
        slidesToShow: 8,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
