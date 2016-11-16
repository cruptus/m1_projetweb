(function($){
    $(window).load(function(e){
        $(".test").height($(window).height()-50);
    });

    $(window).resize(function(e){
        $(".test").height($(window).height()-50);
    });

    $("#hamburger").click(function(e){
        e.preventDefault();
        $("body").toggleClass("with-sidebar");
    });


    $("#nav > ul > li").click(function(e){
        if($(window).width() < 992) {
            if ($(this).children("ul").css('display') != 'block' && $(this).children("ul").size() != 0) {
                e.preventDefault();
                $("nav > ul > li > ul").hide();
                $(this).children("ul").show();
            }
        }
    });

    setTimeout(function(){
        $('.alert-error').fadeOut(2000);
    }, 4000);

})(jQuery);