$('.text-in').fadeOut();
$('.show-out').hide();
$(document).ready(function () {
    $('.btn-new-class').on('click',function(){
        $(this).addClass('new-class')
    });
    $('.btn-remove-class').on('click',function(){
        $(this).removeClass('btn-remove-class')
    });
    $('.btn-toggle-class').on('click',function(){
        $(this).toggleClass('btn-toggle-class')
    });
    $('.btn-get-attr').on('click',function(){
        alert("Получен атрибут class с именем: " + getattr.getAttribute('class'))
    });
    $('.btn-set-attr').on('click',function(){
        setattr.setAttribute('class', 'btn-click new-class')
    });
    $('.alert').on('click',function(){
        alert($(this).text())
    });
    $('.trigger').on('click',function(){
        $('.alert').trigger('click')
    });
    $('.clone').on('click',function(){
        var clone = $(this).clone().text("(cloned)").appendTo('.clone');
        clone.css("margin-left", "150px").css("margin-top", "-35px");
    });
    $('.closest').on('click',function(){
        console.log($(this).closest('li'))
    });
    $('.each-btn').on('click',function(){
        var vals=$("button").map(function(){
            return $(this).text();
        });
        console.log(vals.get());
    });
    $(".find").on('click',function(){
        var find = $("body").find(".find");
        console.log(find);
    });
    $('.fade-in').on('click',function(){
        $('.text-in').fadeIn()
    });
    $('.fade-out').on('click',function(){
        $('.text-out').fadeOut()
    });
    $('.hide').on('click',function(){
        $('.hide-in').hide()
    });
    $('.show').on('click',function(){
        $('.show-out').show()
    });
    $('#data').on('click',function(){
        console.log($(this).closest('li'));
        $(this).each(function () {
            var Width=$(this).width(),
                Height=$(this).height(),
                Pos=$(this).position(),
                Text=$(this).text(),
                Att;
            Att = $.map(this.attributes, function (attribute) {
                Att = ' '+attribute.name+' = '+attribute.value;
                return Att;
            });
            console.log(" Width "+Width +"; Height: "+Height+"; Top: "+Pos.top+"; Left: "+Pos.left+" Att:"+Att+" Text: "+Text);
        });
    });
});
