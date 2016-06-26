(function ($) {

    $(document).ready(function () {


        /* -----------
         *  SUBMENU
         * ----------- */

        $('#primary-menu li a').mouseenter(function () {
            $(this).parent().find('.sub-menu').addClass('visible');
        });
        
        $('#navegacion-primaria').mouseleave(function(){
            $('.sub-menu').removeClass('visible');
        });
        
        $('.sub-menu li').mouseenter(function(){
            
            var submenu = $(this).parent();
             $('.sub-menu').not(submenu).removeClass('visible');
            
        });

        /* -----------
         *  MAPA
         * ----------- */


        var sucursales = [{
                id: 1,
                coord: '-32.944194, -60.640647',
                titulo: 'Entre Rios 658',
                telefonos: '4242129 / 4493917',
                email: 'ventas@pascalonline.com.ar',
                horarios: 'Lunes a viernes: De 9 a 19:30hs Sábados: De 9 a 13 hs.'
            },
            {
                id: 2,
                coord: '-32.947375, -60.637396',
                titulo: 'Galería Rosario local 79',
                telefonos: '4493522',
                email: 'galeria@pascalonline.com.ar',
                horarios: 'Lunes a viernes: De 9 a 13hs y de 15 a 19:30hs Sábados: De 9 a 13 hs.'
            },
            {
                id: 3,
                coord: '-32.974177, -60.643550',
                titulo: 'San Martin 3151',
                telefonos: ' 4728490 / 4448680',
                email: 'sanmartin@pascalonline.com.ar',
                horarios: ' Lunes a viernes: De 9 a 13hs y de 15 a 19:30hs Sábados: De 9 a 13 hs.'
            },
            {
                id: 4,
                coord: '-32.939076, -60.679098',
                titulo: 'Cordoba 5541',
                telefonos: '4577177 / 4580888',
                email: 'ventasoeste@pascalonline.com.ar',
                horarios: ' Lunes a viernes: De 9 a 13hs y de 14:30 a 19hs Sábados: De 9 a 13 hs.'
            },
            {
                id: 5,
                coord: '-32.916251, -60.685018',
                titulo: 'Alberdi 999',
                telefonos: '4724950',
                email: 'alberdi@pascalonline.com.ar',
                horarios: 'Lunes a viernes: De 9 a 13hs y de 15 a 19:30hs Sábados: De 9 a 13 hs.'
            },
            {
                id: 6,
                coord: '-32.945326, -60.666618',
                titulo: 'Francia 1102',
                telefonos: '5571612',
                email: 'ventasfrancia@pascalonline.com.ar',
                horarios: ' Lunes a viernes: De 8 a 18:30hs Sabado: De 9 a 13 hs.'
            }


        ];

        if ($('#mapa-sucursales').length > 0) {
            var mapOptions = {center: new google.maps.LatLng(-32.9484227, -60.6848268), zoom: 13, mapTypeId: google.maps.MapTypeId.ROADMAP, scrollwheel: false, disableDefaultUI: true};
            var map = new google.maps.Map(document.getElementById("mapa-sucursales"), mapOptions);

            var markers = [];

            for (var i = 0; i < sucursales.length; i++) {
                var sucursalActual = sucursales[i];
                var latLng = sucursalActual.coord.split(',');
                var latLngMarker = new google.maps.LatLng(latLng[0], latLng[1], 17);
                var marker = new google.maps.Marker({
                    position: latLngMarker,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: Meme.themeUrl + '/img/pin.png',
                    scrollwheel: false
                });
                marker['sucursal'] = sucursalActual;
                markers.push(marker);
                google.maps.event.addListener(marker, 'click', function () {
                    showOfficeData(this.sucursal);
                    toggleBounce(this);
                });

            }
            function disableBounce() {
                for (var i = 0; i < markers.length; i++) {
                    markers[i].setAnimation(null);
                }
            }
            function toggleBounce(marker) {
                disableBounce();
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }



            $('.office-data-close').click(function () {
                disableBounce();
                $('.office-data').stop().velocity('transition.slideLeftOut', 150, function () {
                    $('.office-data').removeClass('visible');
                });

            });


            function showOfficeData(sucursal) {

                if (!$('.office-data').hasClass('visible')) {
                    $('.office-data').stop().velocity('transition.slideLeftIn', 250, function () {
                        $('.office-data').addClass('visible');
                    });

                }
                $('.office-data-img').css('background-image', 'url(' + Pascal.themeUrl + '/assets/images/sitio/sucursal' + sucursal.id + '.jpg)');
                $('.office-data h3').html(sucursal.titulo);
                $('#office-tel').html(sucursal.telefonos);
                $('#office-email').html(sucursal.email);
                $('#office-hours').html(sucursal.horarios);
            }



        }


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