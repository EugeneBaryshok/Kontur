jQuery(document).ready(function () {
    jQuery('.post').addClass("hidden-animate").viewportChecker({
        classToAdd: 'visible-animate animated fadeIn',
        offset: 100
    });

    jQuery('.post_2').addClass("hidden-animate").viewportChecker({
        classToAdd: 'visible-animate animated fadeInLeft',
        offset: 100,

    });

    jQuery('.fadeInUp_block').addClass("hidden-animate").viewportChecker({
        classToAdd: 'visible-animate animated fadeInUp',
        offset: 100
    });
});