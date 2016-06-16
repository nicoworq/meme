(function ($) {

    $(document).ready(function () {


        /* -----------
         *  SLIDER HOME
         * ----------- */

        $('#slider-home #slider-home-slides').slick({arrows: false, dots: true, appendDots: '#dots-container', slidesToShow: 1});



        /* -----------
         *  SLIDER NOTICIAS HOME
         * ----------- */



        $('#listado-3-noticias-slides').slick({arrows: false, dots: true, slidesToShow: 1});

        /*
         * FORM CONTACTO
         */

        $('#form-contacto input[type=text] , #form-contacto textarea').keydown(function () {
            $(this).removeClass('input-error');
        });

        $('#form-contacto').submit(function (event) {
            event.preventDefault();

            var form = $(this);
            var formOK = true;

            form.find('input[type=text],textarea').not('input[name=sex]').each(function () {
                $(this).removeClass('input-error');
                if ($(this).val() === '') {
                    formOK = false;
                    $(this).addClass('input-error');
                }
            });

            if (!formOK) {
                swal("Oops...", "Debe completar todos los campos", "error");
                return false;
            }


            if (!validateEmail(form.find('input[name=email]').val())) {
                form.find('input[name=email]').addClass('input-error');

                swal("Oops...", "Debe ingresar un Email Valido.", "error");
                return false;
            }


            $('#contacto .ajaxing, #form-contacto-paginas .ajaxing').show();

            $.post(Meme.ajaxUrl, $('#form-contacto').serialize(), function (json) {
                $('#contacto  .ajaxing , #form-contacto-paginas .ajaxing').hide();
                if (json.enviado) {
                    swal("Gracias!", "Se ha enviado tu consulta. Nos comunicaremos a la brevedad", "success");
                    form[0].reset();
                } else {
                    swal("Oops...", "Error al enviar tu consulta!", "error");

                }
            });

        });

    

    });

})(jQuery);