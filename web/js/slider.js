var main = function () {
 
$(window).scroll(function(){
if ($(this).scrollTop() > 100) {
$('.scrollup').fadeIn();
} else {
$('.scrollup').fadeOut();
}
});
 
$('.scrollup').click(function(){
$("html, body").animate({ scrollTop: 0 }, 600);
return false;
});

//Якорь эффекты, плавная прокрутка
    $('a[href^="#"]').click(function () {
        $('html, body').animate({scrollTop: $('a[name="' + this.hash.slice(1) + '"]').offset().top}, 1000);
        return false;
    });


    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.header').addClass("classhe");
        }
        else {
            $('.header').removeClass("classhe");

        }
    });

    var mq = window.matchMedia("(min-width: 780px)");
    if (mq.matches) {
        $("#portf").hover(
            function () {
                $("#dropdown-menu-portf").stop().slideDown();
            },
            function () {
                $("#dropdown-menu-portf").stop().slideUp();
            });


        $("#price").hover(
            function () {
                $('#dropdown-menu-price').stop().slideDown();
            },
            function () {
                $('#dropdown-menu-price').stop().slideUp();
            });


        $("#work").hover(
            function () {
                $('#dropdown-menu-work').stop().slideDown();
            },
            function () {
                $('#dropdown-menu-work').stop().slideUp();
            });

    } else {
        // window width is less than 500px
    }


}

$(document).ready(main);

