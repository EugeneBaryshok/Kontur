var menu = function () {


        $('.table').footable({
            calculateWidthOverride: function() {
                return {width: $(window).width()};
            },
            breakpoints: {
                mobile: 0,
                tablet: 720,
                desktop: 1024
            }
        });


        $('#navbarCollapse > ul > li >a').each(function () {
            // alert('http://localhost:8080'+$(this).attr('href'));
            // alert(window.location.href);
            if('http://localhost:8080'+$(this).attr('href') == window.location.href)
                $(this.parentElement).addClass('active');
        });



    var topPos = $('#adaptive_menu').offset().top;
    $(window).scroll(function (e) {
        var top = $(document).scrollTop();

        if ($(window).scrollTop() > topPos) {
            $('#adaptive_menu').removeClass('unfixed-menu');
            $('#adaptive_menu').addClass('fixed-menu');
            $('#logo_tree').fadeIn(100);

        }
        else if (top < topPos) {
               $('#logo_tree').fadeOut(100);
            $('#adaptive_menu').removeClass('fixed-menu');

        }

    });
};

$(document).ready(menu);