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
        console.log($(this).closest('li').prop('tagName').toLowerCase())
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
        $('.text-in').fadeIn(700)
    });

    $('.fade-out').on('click',function(){
        $('.text-out').fadeOut(300)
    });

    $('.hide').on('click',function(){
        $('.hide-in').hide(500)
    });

    $('.show').on('click',function(){
        $('.show-out').show(900)
    });

    $('#data').on('click',function(){
        var Height=$(this).outerHeight(),
            Width=$(this).outerWidth(),
            Pos=$(this).offset(),
            Att = $.map(this.attributes, function (attribute) {
                Att = ' '+attribute.name+' = '+attribute.value;
                return Att;
            }),
            Par=$(this).parent().prop('tagName'),
            Prev=$(this).prev().prop("outerHTML"),
            Next=$(this).next().prop("outerHTML"),
            Text=$(this).text();
        console.log("Height: "+Height+"px"+"; Width "+Width +"px"+"; Top: "+Pos.top+"px"+"; Left: "+Pos.left+"px"+"; Att:"+Att+"; ParTag: <"+Par.toLowerCase()+">; PrevElem: "+Prev+"; NextElem: "+Next+"; Text: "+Text);
    });

});

//form
$(document).ready(function () {

    $('form :input').change(function () {
        console.log($(this).val());
    });

    $('form').submit(function() {
        console.log($(this).serializeArray());
        return false;
    });

    $('#born').keyup(function(){
        console.log($(this).val());
    });

    $('#status').keyup(function(){
        $('#soc').val($(this).val());
        console.log($(this).val());
    });

    $('#from').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });

});
