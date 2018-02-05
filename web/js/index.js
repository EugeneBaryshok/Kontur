$(document).ready(function () {

    // метрика
    $('.tel-wrap .tel670').click(function () {
        yaCounter37302875.reachGoal('tel670');
    });
    $('.tel-wrap .tel931').click(function () {
        yaCounter37302875.reachGoal('tel931');
    });
    $('.email_footer').click(function () {
        yaCounter37302875.reachGoal('Email_Click');
    });
    $('.purple_button.signup').click(function () {
        yaCounter37302875.reachGoal('Zayavka_Click');
    });



    $('.signup').click(function(event){ // нажатие на кнопку - выпадает модальное окно
        event.preventDefault();


        var url = '/signup';
        var clickedbtn = $(this);
        //var UserID = clickedbtn.data("userid");

        var modalContainer = $('#my-modal');
        var modalBody = modalContainer.find('.modal-body');
        modalContainer.modal({show:true});
        $.ajax({
            url: url,
            type: "GET",
            data: {/*'userid':UserID*/},
            success: function (data) {
                $('.modal-body').html(data);
                modalContainer.modal({show:true});
            }
        });
    });
    $(document).on("submit", '.signup-form', function (e) {
        e.preventDefault();
        var form = $(this);
        yaCounter37302875.reachGoal('Zayavka_Fill');
        $.ajax({
            url: "/submitsignup",
            type: "POST",
            data: form.serialize(),
            success: function (result) {
                console.log(result);
                var modalContainer = $('#my-modal');
                var modalBody = modalContainer.find('.modal-body');
                var insidemodalBody = modalContainer.find('.gb-user-form');

                if (result == 'true') {
                    insidemodalBody.html(result).hide(); //
                    //$('#my-modal').modal('hide');
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').append("<strong>Спасибо! Ваше сообщение отправлено. Мы свяжемся с Вами в ближайшее время!</strong>");
                    $('#success > .alert-success').append('</div>');

                    setTimeout(function() { // скрываем modal через 4 секунды
                        $("#my-modal").modal('hide');
                    }, 4000);
                    yaCounter37302875.reachGoal('Zayavka_Send');
                }
                else {
                    modalBody.html(result).hide().fadeIn();
                }
            }
        });
    });


});