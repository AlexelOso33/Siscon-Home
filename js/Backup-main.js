$(document).ready(function(){

    Swal.fire({
        text: 'Cargando página, espera por favor...',
        allowOutsideClick: false,
        showConfirmButton: false,
        willOpen: () => {
            Swal.showLoading()
        },
    })

    // Valor localstorage aceptar cookies //

    if(!localStorage.getItem('accept-cookie')){
        $('.cookies-msg').removeClass('cookies-msg-hide');
    }
    
    // Animación de underline anchor menú //

    $('.nav-header a').mouseenter(function(){
        $(this).children('div').css('transform', 'scalex(1)');
    })

    $('.nav-header a').mouseleave(function(){
        $(this).children('div').css('transform', 'scalex(0)');
    })
    
    // KEYPRESS input's number //
    $('input.solo-numero').on('keypress', function (e){
        if (e.which > 57 || e.which < 43) {
            e.preventDefault();
        }
    })

    // Landing Page demostración //
    // ************************* //

    if (window.matchMedia('(min-width: 768px)').matches){
        $('div.cont-desc-system').addClass('cont-desc-hover');
        
        //Cargamos los e.listener hover//
        $('#sel-pos, #sel-dist').mouseenter(function(){
            $(this).children('div.cont-desc-system').removeClass('cont-desc-hover');
        })
    
        $('#sel-pos, #sel-dist').mouseleave(function(){
            $(this).children('div.cont-desc-system').addClass('cont-desc-hover');
        })
        
        $('.btn-atras').on('click', function(){
            $('#type-system').val("");
            $('#system-selected').html("");
            $('.cont-type-sys').removeClass('demo-sel-hide');
            $('.form-contact-demo').addClass('demo-cont-hide');
            $('#contact-demo').css('height', '100vh');
            $('.btn-atras').addClass('btn-atras-hide');
            $(window).scrollTop(0);
        })
        
        $('#sel-pos').on('click', function(){
            $('#type-system').val(1);
            $('#system-selected').html("POS");
            $('.cont-type-sys').addClass('demo-sel-hide');
            $('.form-contact-demo').removeClass('demo-cont-hide');
            $('#contact-demo').css('height', '1100px');
            $('.btn-atras').removeClass('btn-atras-hide');
            $(window).scrollTop(0);
        })
    
        $('#sel-dist').on('click', function(){
            $('#type-system').val(2);
            $('#system-selected').html("Distribución");
            $('.cont-type-sys').addClass('demo-sel-hide');
            $('.form-contact-demo').removeClass('demo-cont-hide');
            $('#contact-demo').css('height', '1100px');
            $('.btn-atras').removeClass('btn-atras-hide');
            $(window).scrollTop(0);
        })
    } else {
        $('#contact-demo').css('height', '100vh');
        $('.cont-type-sys').addClass('cont-ts-hide');
        $('.btn-siguiente').removeClass('btn-sig-hide');
        $('.body-contact').addClass('body-contact-dev');
        $('.btn-atras').addClass('btn-atras-mob').removeClass('btn-atras');
        
        //Cargamos event listeners mobile
        $('.btn-siguiente').on('click', function(){
            $('.header-contacto').addClass('body-contact-hide');
            $(this).addClass('btn-sig-hide');
            $('.cont-type-sys').removeClass('cont-ts-hide');
            $('#contact-demo').css('height', '820px');
            $(window).scrollTop(0);
        })
        
        $('#sel-pos').on('click', function(){
            $('#type-system').val(1);
            $('#system-selected').html("POS");
            $('.cont-type-sys').addClass('demo-sel-hide');
            $('.form-contact-demo').removeClass('demo-cont-hide');
            $('#contact-demo').css('height', '1050px');
            $('.btn-atras-mob').removeClass('btn-atras-hide');
            $(window).scrollTop(0);
        })
    
        $('#sel-dist').on('click', function(){
            $('#type-system').val(2);
            $('#system-selected').html("Distribución");
            $('.cont-type-sys').addClass('demo-sel-hide');
            $('.form-contact-demo').removeClass('demo-cont-hide');
            $('#contact-demo').css('height', '1050px');
            $('.btn-atras-mob').removeClass('btn-atras-hide');
            $(window).scrollTop(0);
        })
        
        $('.btn-atras-mob').on('click', function(){
            $('#type-system').val("");
            $('#system-selected').html("");
            $('.cont-type-sys').removeClass('demo-sel-hide');
            $('.form-contact-demo').addClass('demo-cont-hide');
            $('#contact-demo').css('height', '820px');
            $('.btn-atras-mob').addClass('btn-atras-hide');
            $(window).scrollTop(0);
        })
    }
    
    $('.siscon-info a').on('click', function(e){
        e.preventDefault();
        swal.fire({
            title: 'Ayuda',
            html: 
            '<div style="text-align:justify;text-indent:20px;">'+
            '<p>Este es el formulario de SOLICITUD DE DEMOSTRACIÓN de SISCON®.</p>'+
            '<p>Al hacer click en el botón "Quiero mi demostración" envías tus datos a nuestra base de datos.</p>'+
            '<p>Luego de esto vas a recibir un correo con la confirmación de recepción de la solicitud y se te va a otorgar un Usuario y Contraseña para que puedas acceder al sitio <a href="https://demo.siscon-system.com">demo de SISCON®</a>.</p>'+
            '<p>Es importante que recuerdes que este es un sitio "maqueta" en el cual vas a encontrar información estática para que puedas probar todas las funciones que SISCON® te ofrece para tu empresa.</p>'+
           '<p>Visítanos en nuestras redes sociales:</p>'+
           '<div class="cont-social-flex">'+
                '<a href="https://facebook.com/ags.desarrollo.web" target="_blank"><i class="fab fa-facebook-square" style="font-size: 50px;margin: 0 10px;"></i></a>'+
                '<a href="https://www.linkedin.com/company/ags-desarrollo-web/" target="_blank"><i class="fab fa-linkedin" style="font-size: 50px;margin: 0 10px;"></i></a>'+
                '<a href="https://t.me/Alex_Sanc" target="_blank"><i class="fab fa-telegram" style="font-size: 50px;margin: 0 10px;"></i></a>'+
            '</div><br>'+
            '<p>Nuestro sitio web:</p>'+
            '<div style="text-align:center;"><a href="https://hello.siscon-system.com">https://hello.siscon-system.com</a></div></div>',
            confirmButtonText: '¡Entendido!'
        })
    })

    $('#demo-siscon').on('submit', function(e){
        e.preventDefault();
        var datos = $(this).serializeArray();
        Swal.fire({
            text: 'Enviando la petición, espera por favor...',
            allowOutsideClick: false,
            showConfirmButton: false,
            willOpen: () => {
                Swal.showLoading()
            },
        })
        $.ajax({
            type: 'POST',
            data: datos,
            url: 'functions/model.php',
            success: function(data){
                var d = JSON.parse(data);
                swal.close();
                if(d.respuesta == 'error-g-recaptcha'){
                    swal.fire(
                        '¡Oh, no!',
                        'Ha ocurrido un error con la comprobación RECAPTCHA. Por favor, vuelve a intentarlo.',
                        'error'
                    )
                } else if(d.respuesta == 'robot'){
                    swal.fire(
                        '¡No lo creo!',
                        'Hemos detectado una anomalía y no sabemos si eres humano. No puedes continuar con el formulario.',
                        'error'
                    )
                } else if(d.respuesta == 'error'){
                    swal.fire(
                        'Oops...',
                        'Ha ocurrido un error al intentar guardar los datos. Por favor, intenta nuevamente.',
                        'error'
                    )
                } else if(d.respuesta == 'ok'){
                    window.location.href = '../success.php';
                }
            }
        })
    })

    // ************************* //

    // ********************************** //

    // Animate los anchor al hacer scrolling //
    
    var dir = window.location.href;
    if(!dir.indexOf('landing')){
        var scrolling_navigation_offset_top = $('#inicio').offset().top;
        var scrolling_navigation = function () {
            var scroll_top = $(window).scrollTop()-100;
            if (scroll_top > scrolling_navigation_offset_top) {
                $('header').addClass('head-dos').removeClass('head-one').removeClass('head-anim-burger');
                $('.nav-header a').addClass('slide-a');
                $('.cont-menu-bars').removeClass('cont-bar-anim');
            } else {
                $('header').addClass('head-one').removeClass('head-dos').removeClass('head-anim-burger');
                $('.nav-header a').removeClass('slide-a');
                $('.cont-menu-bars').addClass('cont-bar-anim');
            }
        };
        scrolling_navigation();
        $(window).scroll(function () {
            scrolling_navigation();
        })
    }

    // Botón hamburguesa de menú //
    $('.cont-menu-bars').on('click', function(){
        $('header').addClass('head-one').removeClass('head-dos');
        $('.nav-header a').removeClass('slide-a');
        $(this).addClass('cont-bar-anim');
    })

    $('.cont-menu-bars').mouseenter(function(){
        $('.cont-menu-bars .bar').css('background-color', '#fdb863');
        $(this).css('transform', 'scale(1.1)');
        $('header').addClass('head-anim-burger');
    })

    $('.cont-menu-bars').mouseleave(function(){
        $('.cont-menu-bars .bar').css('background-color', '#f9fafc');
        $('header').removeClass('head-anim-burger');
        $(this).css('transform', 'scale(1)');
    })

    // Sección SISTEMA //

    $('.ask-one').show();
    $('.ask-two, .ask-three, .ask-four').addClass('square-desel');
    $('#ask-one').addClass('btn-selected');

    // Botones
    $('button#ask-one').on('click', function(){
        $(this).addClass('btn-selected');
        $('.ask-two, .ask-three, .ask-four').addClass('square-desel');
        $('#ask-two, #ask-three, #ask-four').removeClass('btn-selected');
        $('.ask-one').show();
        $('.ask-one').removeClass('square-desel');
    })
    $('button#ask-two').on('click', function(){
        $(this).addClass('btn-selected');
        $('.ask-one, .ask-three, .ask-four').addClass('square-desel');
        $('#ask-one, #ask-three, #ask-four').removeClass('btn-selected');
        $('.ask-two').show();
        $('.ask-two').removeClass('square-desel');
    })
    $('button#ask-three').on('click', function(){
        $(this).addClass('btn-selected');
        $('.ask-two, .ask-one, .ask-four').addClass('square-desel');
        $('#ask-one, #ask-two, #ask-four').removeClass('btn-selected');
        $('.ask-three').show();
        $('.ask-three').removeClass('square-desel');
    })
    $('button#ask-four').on('click', function(){
        $(this).addClass('btn-selected');
        $('.ask-two, .ask-three, .ask-one').addClass('square-desel');
        $('#ask-two, #ask-three, #ask-one').removeClass('btn-selected');
        $('.ask-four').show();
        $('.ask-four').removeClass('square-desel');
    })

    // ****************** //
    // Sección de COOKIES //

    $('#close-cookies').on('click', function(){
        $('.cookies-msg').addClass('cookies-msg-hide');
    })

    $('#accept-cookies').on('click', function(){
        aceptar_cookies();
    })

    // POLITICAS DE PRIVACIDAD //

    $('#privacy').on('click', function(e){
        e.preventDefault();
        Swal.fire({
            title: 'Políticas de privacidad de SISCON®',
            html: '<div style="text-align:left;text-indent:20px;">'+
            '<p>El presente Política de Privacidad establece los términos en que <span style="color:var(--font-a);">AGS - Desarrollo Web</span> usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.</p><br>'+
            '<h4><span style="color:var(--font-a);">Información que es recogida</span></h4><br>'+
            '<p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre, información de contacto como su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación.</p><br>'+
            '<h4><span style="color:var(--font-a);">Uso de la información recogida</span></h4><br>'+

            '<p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios.  Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento. <br>'+

            'AGS - Desarrollo Web está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.</p><br>'+

            '<h4><span style="color:var(--font-a);">Cookies</span></h4><br>'+

            '<p>Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico web, y también facilita las futuras visitas a una web recurrente. Otra función que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web. <br>'+

            'Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de usted, a menos de que usted así lo quiera y la proporcione directamente noticias. Usted puede aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.</p><br>'+

            '<h4><span style="color:var(--font-a);">Enlaces a Terceros</span></h4><br>'+

            '<p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.</p><br>'+

            '<h4><span style="color:var(--font-a);">Control de su información personal</span></h4><br>'+

            '<p>En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.  Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico.  En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.</p> <br>'+

            '<p>Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.</p> <br>'+

            '<p><span style="color:var(--font-a);">AGS - Desarrollo Web</span> Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.</p></div>',
            confirmButtonText: 'Aceptar',
            width: '90%'
        })
    })
    
    swal.close();
    $('.body-contact').css('opacity', '1');

    // ::::::::::: FUNCIONES ::::::::::: //

    function aceptar_cookies(){
        var key = 'accept-cookie';
        var val = 'ok';
        localStorage.setItem(key,val);
        $('.cookies-msg').addClass('cookies-msg-hide');
    }

})