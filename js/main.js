$(document).ready(function(){

    let pba, dba, pbm, dbm, pfa, dfa, pfm, dfm, pim, pia;

    // Script para tomar los precios actuales de SISCON
    $.ajax({
        type: 'POST',
        data: {
            'accion' : 'tomar-precios'
        }, 
        url: 'functions/montos.php',
        dataType: 'json',
        success: function(data){
            if(data !== null){
                pba = data[0];
                dba = data[1];
                pbm = data[2];
                dbm = data[3];
                pia = data[4];
                dfa = data[5];
                pim = data[6];
                dfm = data[7];
                pfm = data[8];
                pfa = data[9];

                $('#basic-plan').html(pbm);
                $('#standard-plan').html(pim);
                $('#full-plan').html(pfm);
                $('.exp-number').html("/ mes");
            }
        }
    })

    // MOBILE SCRIPTS & CSS //
    $('.nav-mob-full').on('focusout', function(){
        $('.nav-mob-full').addClass('nav-mob-f-hidden');
        $('.cont-bars-mobile').removeClass('pressed');
        $('#bar_1').removeClass('bar_1');
        $('#bar_2').removeClass('bar_2');
        $('#bar_3').removeClass('bar_3');
    });

    $(document).on('click', function(e) {
        var containerOne = $('.head-one');
        var container = $('.nav-mob-full');
        var nav = $('.cont-bars-mobile');
        var bar = $('.bar');
        if(nav.is(e.target) || bar.is(e.target)){
            if(nav.hasClass('pressed')){
                $('.nav-mob-full').addClass('nav-mob-f-hidden');
                nav.removeClass('pressed');
                $('#bar_1').removeClass('bar_1');
                $('#bar_2').removeClass('bar_2');
                $('#bar_3').removeClass('bar_3');
            } else {
                $('.nav-mob-full').removeClass('nav-mob-f-hidden');
                $('.nav-mob-full').focusin();
                nav.addClass('pressed');
                $('#bar_1').addClass('bar_1');
                $('#bar_2').addClass('bar_2');
                $('#bar_3').addClass('bar_3');
            }
        } else if (!container.is(e.target) && nav.hasClass('pressed')) {
            $('.nav-mob-full').addClass('nav-mob-f-hidden');
            $('.cont-bars-mobile').removeClass('pressed');
            $('#bar_1').removeClass('bar_1');
            $('#bar_2').removeClass('bar_2');
            $('#bar_3').removeClass('bar_3');           
        } /* else if(!containerOne.is(e.target)){
            $('header').addClass('head-dos').removeClass('head-one').removeClass('head-anim-burger');
            $('.nav-header a').addClass('slide-a');
            $('.bg-inicio-alert').addClass('bg-i-a-hide');
            $('.cont-menu-bars').removeClass('cont-bar-anim');
        } */
    });

    // Chequeamos que sea página INDEX
    var exist = $('section#inicio').length;
    if(exist > 0){
        
        // ::::::::::: PRELOADER ::::::::::: //
        $(window).on('load', function (){
            // $('.preload-img, .preloader-span').css('transform', 'opacity(0)');
            // $('.pre-index').css({'height': '0', 'z-index': '-9999'});
            $('.preloader').addClass('preloader-hide');
            $('.preload-img').addClass('preload-img-hide');
            // $('.preloader-span').hide();
            $('body').css('overflow', 'unset');
        });
        // ******************************** //

        /* var scrolling_navigation_offset_top = $('#inicio').offset().top;
        if(!($('.head-one').hasClass('hide'))){
            var scrolling_navigation = function () {
                var scroll_top = $(window).scrollTop()-100;
                if (scroll_top > scrolling_navigation_offset_top) {
                    $('header').addClass('head-dos').removeClass('head-one').removeClass('head-anim-burger');
                    $('.nav-header a').addClass('slide-a');
                    $('.bg-inicio-alert').addClass('bg-i-a-hide');
                    $('.cont-menu-bars').removeClass('cont-bar-anim');
                } else {
                    $('header').addClass('head-one').removeClass('head-dos').removeClass('head-anim-burger');
                    $('.nav-header a').removeClass('slide-a');
                    $('.bg-inicio-alert').removeClass('bg-i-a-hide');
                    $('.cont-menu-bars').addClass('cont-bar-anim');
                }
            };
            scrolling_navigation();
            $(window).scroll(function () {
                scrolling_navigation();
            });
        } */

        var iniciarVideo = function(){
            var video = document.getElementById('video-presentacion');
            if($('.head-one').hasClass('hide')){
                var scroll_top = $(window).scrollTop();
            } else {
                var scroll_top = $(window).scrollTop()-100;
            }
            if(scroll_top > scrolling_navigation_offset_top){
                video.pause();
            } else {
                setTimeout(() => {
                    video.play();
                }, 4000);
            }
        };
        // iniciarVideo(); //Quito la reproducción automática.
    }

    // Valor localstorage aceptar cookies //

    /* if(!localStorage.getItem('accept-cookie')){
        $('.cookies-msg').removeClass('cookies-msg-hide');
    } */
    
    // Animación de underline anchor menú //

    $('.nav-header a').mouseenter(function(){
        $(this).children('div').css('transform', 'scalex(1)');
    });

    $('.nav-header a').mouseleave(function(){
        $(this).children('div').css('transform', 'scalex(0)');
    });

    // ********************************** //

    // KEYPRESS input's number //
    $('input.solo-numero').on('keypress', function (e){
        if (e.which > 57 || e.which < 43) {
            e.preventDefault();
        }
    });

    // Botón hamburguesa de menú //
    $('.cont-menu-bars').on('click', function(){
        $('header').addClass('head-one').removeClass('head-dos');
        $('.nav-header a').removeClass('slide-a');
        $(this).addClass('cont-bar-anim');
        $('.bg-inicio-alert').removeClass('bg-i-a-hide');
    });

    $('.cont-menu-bars').mouseenter(function(){
        $('.cont-menu-bars .bar').css('background-color', '#fdb863');
        $(this).css('transform', 'scale(1.1)');
        $('header').addClass('head-anim-burger');
    });

    $('.cont-menu-bars').mouseleave(function(){
        $('.cont-menu-bars .bar').css('background-color', '#f9fafc');
        $('header').removeClass('head-anim-burger');
        $(this).css('transform', 'scale(1)');
    });

    // Sección PLANES //
    $('.bg-radio').on('click', function(){
        if($(this).children('div.round-radio').hasClass('round-radio-r')){
            $(this).children('div.round-radio').removeClass('round-radio-r');
            if($('.bg-radio-sist').children('div.round-radio-sist').hasClass('round-radio-sist-r')){
                // SISCON DISTRO
                $('span#basic-plan').html(dbm);
                $('span#full-plan').html(dfm);
                $('.exp-number').html('/ mes');
            } else {
                // SISCON POS
                $('span#basic-plan').html(pbm);
                $('span#standard-plan').html(pim);
                $('span#full-plan').html(pfm);
                $('.exp-number').html('/ mes');
            }
        } else {
            $(this).children('div.round-radio').addClass('round-radio-r');
            if($('.bg-radio-sist').children('div.round-radio-sist').hasClass('round-radio-sist-r')){
                // SISCON DISTRO
                $('span#basic-plan').html(dba);
                $('span#full-plan').html(dfa);
                $('.exp-number').html('/ anual');
            } else {
                // SISCON POS
                $('span#basic-plan').html(pba);
                $('span#standard-plan').html(pia);
                $('span#full-plan').html(pfa);
                $('.exp-number').html('/ anual');
            }
        }
    })

    $('.bg-radio-sist').on('click', function(){
        if($(this).children('div.round-radio-sist').hasClass('round-radio-sist-r')){
            $(this).children('div.round-radio-sist').removeClass('round-radio-sist-r');
            $('.sistema-box').html('SISCON&reg&nbspPOS');
            if($('.bg-radio').children('div.round-radio').hasClass('round-radio-r')){
                $('span#basic-plan').html('25.489');
                $('span#full-plan').html('29.999');
                $('.exp-number').html('/ anual');
            } else {
                $('span#basic-plan').html('2.499');
                $('span#full-plan').html('2.999');
                $('.exp-number').html('/ mes');
            }
        } else {
            $(this).children('div.round-radio-sist').addClass('round-radio-sist-r');
            $('.sistema-box').html('SISCON&reg&nbspDistribución');
            if($('.bg-radio').children('div.round-radio').hasClass('round-radio-r')){
                $('span#basic-plan').html('29.999');
                $('span#full-plan').html('35.699');
                $('.exp-number').html('/ anual');
            } else {
                $('span#basic-plan').html('2.999');
                $('span#full-plan').html('3.499');
                $('.exp-number').html('/ mes');
            }
        }
    })

    $('#sel-plan-one, #sel-plan-two, #sel-plan-three').on('click', function(){
        var sistema = $('.bg-radio').children('div.round-radio').hasClass('round-radio-r') ? 2 : 1;
        var plan = $('.bg-radio-sist').children('div.round-radio-sist').hasClass('round-radio-sist-r') ? 2 : 1;
        var tipo_plan = $(this).attr('data-id');
        window.location.href="contratar-plan.php?sid="+sistema+"&sp="+plan+"&stp="+tipo_plan;
    })

    // Sección SISTEMA //

    $('.ask-one').show();
    $('.ask-two, .ask-three, .ask-four').addClass('square-desel');
    $('#ask-one').children('div.round-selector-back').addClass('r-s-b-tr');

    // Botones
    $('#ask-one').on('click', function(){
        $(this).children('div.round-selector-back').addClass('r-s-b-tr');
        $('.ask-two, .ask-three, .ask-four').addClass('square-desel');
        $('#ask-two, #ask-three, #ask-four').children('div.round-selector-back').removeClass('r-s-b-tr');
        $('.ask-one').show();
        $('.ask-one').removeClass('square-desel');
    })
    $('#ask-two').on('click', function(){
        $(this).children('div.round-selector-back').addClass('r-s-b-tr');
        $('.ask-one, .ask-three, .ask-four').addClass('square-desel');
        $('#ask-one, #ask-three, #ask-four').children('div.round-selector-back').removeClass('r-s-b-tr');
        $('.ask-two').show();
        $('.ask-two').removeClass('square-desel');
    })
    $('#ask-three').on('click', function(){
        $(this).children('div.round-selector-back').addClass('r-s-b-tr');
        $('.ask-two, .ask-one, .ask-four').addClass('square-desel');
        $('#ask-one, #ask-two, #ask-four').children('div.round-selector-back').removeClass('r-s-b-tr');
        $('.ask-three').show();
        $('.ask-three').removeClass('square-desel');
    })
    $('#ask-four').on('click', function(){
        $(this).children('div.round-selector-back').addClass('r-s-b-tr');
        $('.ask-two, .ask-three, .ask-one').addClass('square-desel');
        $('#ask-two, #ask-three, #ask-one').children('div.round-selector-back').removeClass('r-s-b-tr');
        $('.ask-four').show();
        $('.ask-four').removeClass('square-desel');
    })

    // ****************** //

    // MOSTRAR CUADRO COMPARATIVO SISTEMAS //
    $('.btn-show-comparative').on('click', function(){
        swal.fire({
            title: 'Cuadro comparativo de sistemas',
            html: '<table class="table-system"><thead>'+
            '<tr class="th-tr-system">'+
                '<th>Comparativa de funciones</th>'+
                '<th><img src="img/siscon160.png" alt="Siscon img" class="img-table"><span class="siscon-span">POS</span></th>'+
                '<th><img src="img/siscon160.png" alt="Siscon img" class="img-table"><span class="siscon-span">Distribución</span></th>'+
            '</tr></thead><tbody><tr>'+
                '<td>Generar ventas</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td></td>'+
            '</tr><tr>'+
                '<td>Generar pre-ventas</td>'+
                '<td></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Generar presupuestos</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Modificación de fechas de entregas</td>'+
                '<td></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Notas de crédito</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Creación de clientes</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Administrar zonas</td>'+
                '<td></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Administrar créditos y deudas</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Actualización precios</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Administrar proveedores</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Generar inventarios</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Preparar de productos</td>'+
                '<td></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Ajustar stock</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Operaciones de caja</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Generar reportes</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Administrar usuarios</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Configurar datos de empresa</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr><tr>'+
                '<td>Administrar perfil</td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
                '<td><i class="fas fa-check" style="color:var(--color-golden);"></i></td>'+
            '</tr></tbody><tfoot></tfoot></table>',
            width: '700px',
            confirmButtonText: '¡Increíble!'
        })
    })

    // Sección de COOKIES //

    $('#close-cookies').on('click', function(){
        $('.cookies-msg').addClass('cookies-msg-hide');
    })

    $('#accept-cookies').on('click', function(){
        aceptar_cookies();
    })

    // POLITICAS DE PRIVACIDAD //

    $('.privacy').on('click', function(e){
        e.preventDefault();
        Swal.fire({
            title: 'Políticas de privacidad de SISCON®',
            html: '<div style="text-align:justify;text-indent:20px;">'+
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

    // Página REGISTRO SISCON //

    $('#registro-siscon').on('submit', function(e){
        e.preventDefault();
        var contone = $('#password-registro').val();
        var conttwo = $('#rep-passw-registro').val();
        var grecapt = $('#g-recaptcha-response').val();
        var datos = $(this).serializeArray();

        // Comprobar contraseñas
        if(contone !== conttwo){
            $('.select-error, .length-error, .mail-error').hide();
            $('.pass-error').show();
        // Comprobar longitud de contraseña
        } else if(contone.length < 8 || conttwo.length < 8){
            $('.pass-error, .select-error, .mail-error').hide();
            $('.length-error').show();
        // Sigue flujo normal
        } else {
            $('.pass-error, .select-error, .length-error').hide();
            $('#send-form').attr('disabled', true);
            $('#send-form').val('Procesando...');
            $('.btn-back').hide();

            // Comprobacion mail //
            var mail = $('#email-registro').val();
            $.ajax({
                type: 'POST',
                data: {
                    'email-registro' : mail,
                    'g-recaptcha-response' : grecapt,
                    'accion' : 'comp-mail'
                }, 
                url: 'functions/comprobaciones.php',
                dataType: 'json',
                success: function(data){
                    if(data.respuesta == 'ok'){
                        
                        // Muestra página de carga //
                        $('.pre-contract').css({'height': '100vh', 'z-index': '9999'});
                        $('.preload-img-hide').addClass('preload-img').removeClass('preload-img-hide');
                        $('.preloader-span, .progress-contract').show();
                        $('#contract').hide();
                        
                        // Envío de datos a la bd //
                        $.ajax({
                            type: 'POST',
                            data: datos,
                            url: 'functions/model.php',
                            dataType: 'json',
                            success: function(d){
                                if(d.respuesta == 'ok'){
                                    $('.preload-img').addClass('preload-img-hide').removeClass('preload-img');
                                    $('.preloader-span span').html('<span class="golden" style="font-size:3rem;">¡Excelente!</span><br>Revisa tu correo para continuar.<br>Si no encuentras el correo en tu carpeta principal revisa en <em>Correo no deseado</em>.<br><br><span class="golden"> Es muy importante que NO OLVIDES LA CONTRASEÑA QUE INGRESASTE.</span>');
                                    $('.img-preload, .preloader-a').show();
                                } else {
                                    swal.fire(
                                        'Oh, no...',
                                        'Se ha producido un error. Vamos a recargar el sitio.',
                                        'error'
                                    ).then(()=>{
                                        window.location.reload();
                                    });
                                }
                            }
                        });

                        // Alta de datos empresa //
                        /*$.ajax({
                            type: 'POST',
                            data: datos,
                            url: 'functions/comprobaciones.php',
                            dataType: 'json',
                            success: function(data){
                                if(data.respuesta == 'ok'){
                                    var name = data.name;
                                    var business = data.bd;
                                    $('.progress-bar').css('width', '47%');
                                    // Comienza loop de carga de partes BD
                                    let i = 0;
                                    var a = 47;
                                    do {
                                        $.ajax({
                                            type: 'POST',
                                            data: {
                                                'nstep' : i,
                                                'db' : business
                                            },
                                            url: 'functions/create_bd.php',
                                            dataType: 'json',
                                            success: function(d){
                                                console.log(d);
                                                if(d.respuesta == 'ok'){
                                                    var n = a+1;
                                                    $('.progress-bar').css('width', n+'%');
                                                    a = n;
                                                } else if(d.respuesta == 'finish'){
                                                    $.ajax({
                                                        type: 'POST',
                                                        data: {
                                                            'name' : name,
                                                            'email' : mail,
                                                            'accion' : 'mailer-confirm'
                                                        },
                                                        url: 'functions/model.php',
                                                        dataType: 'json',
                                                        success: function(data){
                                                            console.log(data);
                                                            if(data.respuesta == 'ok'){
                                                                $('.progress-contract').hide();
                                                                $('.preload-img').addClass('preload-img-hide').removeClass('preload-img');
                                                                $('.preloader-span span').html("¡Excelente!<br>Revisa tu correo para confirmar tu cuenta y seguir al paso siguiente.");
                                                                $('.img-preload').show();
                                                            } else {
                                                                swal.fire(
                                                                    'Oh, no...',
                                                                    'Se ha producido un error al crear la base de datos. Vamos a recargar el sitio.',
                                                                    'error'
                                                                ).then(()=>{
                                                                    window.location.reload();
                                                                });
                                                            }
                                                        }
                                                    })
                                                   
                                                } else {
                                                    swal.fire(
                                                        'Oh, no...',
                                                        'Se ha producido un error al crear la base de datos. Vamos a recargar el sitio.',
                                                        'error'
                                                    ).then(()=>{
                                                        window.location.reload();
                                                    });
                                                }
                                            }
                                        });
                                        i = i+1;
                                    } while (i < 54);
                                } else {
                                    swal.fire(
                                        'Oh, no...',
                                        'Se ha producido un error al guardar los datos. Vamos a recargar el sitio.',
                                        'error'
                                    ).then(()=>{
                                        window.location.reload();
                                    });
                                }
                            }
                        });*/
                    } else if(data.respuesta == 'error-g-recaptcha'){
                        swal.fire(
                            'Oops...',
                            'Ha ocurrido un error con la comprobación RECAPTCHA. Por favor, vuelve a intentarlo.',
                            'error'
                        )
                        $('#send-form').attr('disabled', false);
                        $('#send-form').val('Comenzar');
                        $('.btn-back, .g-recaptcha').show();
                    } else {
                        $('#send-form, .g-recaptcha').hide();
                        $('.mail-error, .btn-back').show();
                    }
                }
            });
        }
    })

    // Animate los anchor al hacer scrolling //

    /* var scroll_sistema = $('#sistema').offset().top;
    var startSistema = function(){
        var scroll_top = $(window).scrollTop();
        if (scroll_top > scroll_sistema) {
            var intervSel = setInterval(function() {
                if($('#ask-one').children('div.round-selector-back').hasClass('r-s-b-tr')){
                    $('#ask-one').children('div.round-selector-back').removeClass('r-s-b-tr');
                    $('#ask-two').children('div.round-selector-back').addClass('r-s-b-tr');
                    $('.ask-one, .ask-three, .ask-four').addClass('square-desel');
                    $('.ask-two').show();
                    $('.ask-two').removeClass('square-desel');
                } else if($('#ask-two').children('div.round-selector-back').hasClass('r-s-b-tr')){
                    $('#ask-two').children('div.round-selector-back').removeClass('r-s-b-tr');
                    $('#ask-three').children('div.round-selector-back').addClass('r-s-b-tr');
                    $('.ask-one, .ask-two, .ask-four').addClass('square-desel');
                    $('.ask-three').show();
                    $('.ask-three').removeClass('square-desel');
                } else if($('#ask-three').children('div.round-selector-back').hasClass('r-s-b-tr')){
                    $('#ask-three').children('div.round-selector-back').removeClass('r-s-b-tr');
                    $('#ask-four').children('div.round-selector-back').addClass('r-s-b-tr');
                    $('.ask-two, .ask-one, .ask-three').addClass('square-desel');
                    $('.ask-four').show();
                    $('.ask-four').removeClass('square-desel');
                } else {
                    $('#ask-four').children('div.round-selector-back').removeClass('r-s-b-tr');
                    $('#ask-one').children('div.round-selector-back').addClass('r-s-b-tr');
                    $('.ask-two, .ask-three, .ask-four').addClass('square-desel');
                    $('.ask-one').show();
                    $('.ask-one').removeClass('square-desel');
                }
            }, 10000);
        } else {
            clearInterval(intervSel);
        }
    }; */

    // ::::::::::: ENVÍO CONTACTO :::::::::: //

    $('#envio-consulta').on('submit', function(e){
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            type : 'post',
            data : datos,
            url : '../functions/model.php',
            dataType : 'json',
            success : function(data){
                
            }
        })
    })

    // Validación repetición de nueva contraseña
    $('#rep-pass').on('blur keyup', function() {
        if($(this).val() == "") {
          $('#rep-pass').parents('.form-group').removeClass('has-error has-success');
          $('#new-pass').parents('.form-group').removeClass('has-error has-success');
          $('#span.error-pass').text("");
          $('span.error-pass').hide();
        } else {
          if($(this).val() == $('#new-pass').val()) {
            // $('#resultado_password').text('¡Correcto!');
            $('span.error-pass').text('Las contraseñas deben coincidir.');
            $('span.error-pass').hide();
            $('#rep-pass').parents('.form-group').removeClass('has-error');
            $('#new-pass').parents('.form-group').removeClass('has-error');
            $('#send-newpass').attr('disabled', false);
          } else {
            $('span.error-pass').text('Debe ingresar una contraseña válida.');
            $('span.error-pass').show();
            $('#rep-pass').parents('.form-group').addClass('has-error').removeClass('has-success');
            $('#new-pass').parents('.form-group').addClass('has-error').removeClass('has-success');
            $('#send-newpass').attr('disabled', true);
          }
        }
      });

    $('#send-newpass').on('click', function(){
        var contrasena = $('#new-pass').val();
        var id = $('#id-user').val();
        if(contrasena !== ''){
            $('.error-pass').css('display', 'none');
            swal.fire({
                html: 'Generando la nueva contraseña',
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    Swal.showLoading();
                },
            });
            $.ajax({
                type: 'post',
                data: {
                    'password' : contrasena,
                    'id' : id,
                    'action' : 'nueva-contrasena'
                },
                url: 'functions/model.php',
                dataType: 'json',
                success: function(d){
                    console.log(d);
                    if(d.respuesta == 'ok'){
                        swal.fire({
                            title: '¡Excelente!',
                            html: 'Se ha generado la contraseña correctamente.<br><strong>¿Quieres ir al sistema ahora mismo?</strong>',
                            showCancelButton: true,
                            cancelButtonText: 'No',
                            confirmButtonText: 'Si'
                        }).then((result) => {
                            if(result.value){
                                window.location.href = 'https://app.sisconsystem.online';
                            } else {
                                window.location.reload();
                            }
                        })
                    }
                } 
            })
        } else {
            $('.error-pass').show();
        }
    })

    // ::::::::::: FUNCIONES ::::::::::: //

    function aceptar_cookies(){
        var key = 'accept-cookie';
        var val = 'ok';
        localStorage.setItem(key,val);
        $('.cookies-msg').addClass('cookies-msg-hide');
    }
    
})