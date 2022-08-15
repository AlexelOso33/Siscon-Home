<?php // header('Location: construct.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>SISCON&reg; | Llegamos para impulsar tu negocio</title>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-33XS4GG66W"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-33XS4GG66W');
    </script>
    
    <!-- GOOGLE Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript">
        var onloadCallback = function() {
            alert("grecaptcha is ready!");
        };
    </script>
    
</head>
<body style="overflow: hidden;">
    <div class="preloader pre-index transition-all">
        <div class="preload-img transition-all">
            <img src="img/siscon160.png" alt="Siscon img">
        </div>
        <!-- <div class="preloader-span transition-all">
            <span>Cargando sitio...</span>
        </div> -->
    </div>
    <div class="img-head">
        <a href="#inicio"><img class="transition-all" src="img/siscon160.png" alt="Siscon img"></a>
    </div>
    <div class="cont-menu-bars cont-bar-anim transition-all">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <nav class="nav-mobile transition-all">
        <div class="cont-img-mobile">
            <a href="#inicio"><img src="img/siscon160.png" alt="Siscon img"></a>
        </div>
        <div class="cont-bars-mobile">
            <div class="bar transition-all" id="bar_1"></div>
            <div class="bar transition-all" id="bar_2"></div>
            <div class="bar transition-all" id="bar_3"></div>
        </div>
    </nav>
    <div class="nav-mob-full transition-all nav-mob-f-hidden">
        <div class="nav-header-mobile">
            <a href="#inicio">Inicio<div class="_underlineA"></div></a>
            <a href="#sistema">Sistema<div class="_underlineA"></div></a>
            <a href="#demostracion">Demostración<div class="_underlineA"></div></a>
            <a href="#planes">Planes<div class="_underlineA"></div></a>
            <a href="#contacto">Contacto<div class="_underlineA"></div></a>
            <a href="#" class="privacy">Políticas de privacidad<div class="_underlineA"></div></a>
            <a href="https://app.sisconsystem.online" style="background-color:#f9fafc;color:#333;"><i class="fas fa-sign-out-alt"></i>&nbspSistema SISCON®<div class="_underlineA"></div></a>
            <!-- <a href="https://demo.siscon-system.com" style="background-color:#f9fafc;color:#333;"><i class="fas fa-sign-out-alt"></i>&nbspLive demo<div class="_underlineA"></div></a> -->
            <!-- <div class="bg-ini-alert-mob">
                <div class="cont-arrow-up">
                    <i class="fas fa-arrow-up"></i>
                </div>
                <span>¡<strong>PRUEBA GRATUITA</strong> por tiempo limitado!</span>
            </div> -->
        </div>
    </div>
    <header class="head-one transition-all">
        <div class="nav-header">
            <a href="#inicio">Inicio<div class="_underlineA"></div></a>
            <a href="#sistema">Sistema<div class="_underlineA"></div></a>
            <a href="#demostracion">Demostración<div class="_underlineA"></div></a>
            <a href="#planes">Planes<div class="_underlineA"></div></a>
            <a href="#contacto">Contacto<div class="_underlineA"></div></a>
            <a href="#" class="privacy">Políticas de privacidad<div class="_underlineA"></div></a>
            <a href="https://app.sisconsystem.online"><i class="fas fa-sign-out-alt"></i>&nbspSistema SISCON®<div class="_underlineA"></div></a>
            <!-- <a href="https://demo.siscon-system.com"><i class="fas fa-sign-out-alt"></i>&nbspLive demo<div class="_underlineA"></div></a> -->
        </div>
        <!-- <div class="bg-inicio-alert transition-all">
            <div class="cont-arrow-up">
                <i class="fas fa-arrow-up"></i>
            </div>
            <span>¡<strong>PRUEBA GRATUITA</strong> por tiempo limitado!</span>
        </div> -->
    </header>
    <div class="contenedor-body">
        <section id="inicio">
            <!-- <div class="bg-inicio-one"></div>
            <div class="bg-inicio-two"></div> -->
            <!-- <div class="bg-inicio-three"></div> -->
            <div class="contenedor-hero">
                <div class="h1-hero">
                    <h1>Descubre el <strong>potencial de SISCON®</strong></h1>
                    <iframe class="contenedor-video" src="https://www.youtube.com/embed/Jz-kbiXeEfw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <section id="sistema">
            <div class="sist-grid">
                <div class="sist-grid-left">
                    <h1>¿Conoces todo lo que SISCON® te puede ofrecer?</h1>
                </div>
                <div class="sist-grid-right">
                    <div class="content-info-sistem">
                        <div class="ask-one" style="display:none;">
                            <article>
                                <h3>¿Qué es SISCON®?</h3>
                                <div class="content-art-one">
                                    <div class="cont-art-img">
                                        <img src="img/icons/store.png" alt="Tu negocio">
                                    </div>
                                    <div class="cont-art-span">
                                        <span>SISCON® es un Sistema de Gestión de Ventas que te permite organizar todas las tareas de ventas, clientes, stock, productos y caja de una manera <strong>ordenado y eficaz</strong>.</span>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Cuadro segundo -->
                        <div class="ask-two" style="display:none;">
                            <article>
                                <h3>¿Qué tipo de sistema puedo obtener?</h3>
                                <div class="flex-img-ask-two">
                                    <div class="img-ask-two transition-all">
                                        <img src="img/siscon-pos.png" id="img-pos" class="transition-all" alt="SISCON POS">
                                        <div class="comment-pos">
                                            <span>El sistema ideal para tu negocio de venta directa.</span>
                                        </div>
                                    </div>
                                    <div class="img-ask-two transition-all">
                                        <img src="img/siscon-distribucion.png" id="img-dist" class="transition-all" alt="SISCON Distribucion">
                                        <div class="comment-dist">
                                            <span>El sistema ideal para tu distribuidora.</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- <button class="btn-show-comparative transition-all">Ver cuadro comparativo de funciones</button> -->
                            </article>
                        </div>

                        <!-- Cuadro tercero -->
                        <div class="ask-three" style="display:none;">
                            <article>
                                <h3>¿Qué ventajas obtengo al contratar SISCON®?</h3>
                                <div class="content-grid-advantage">
                                    <div class="sub-cont-adv transition-all">
                                        <div class="cont-img-adv">
                                            <img src="img/icons/speedometer.png" alt="Speed-O-Meter">
                                        </div>
                                        <div class="cont-info-adv">
                                            <h3>Mayor velocidad</h3>
                                            <p>Sin tantos plugins ni imágenes aumenta la velocidad de carga del sistema considerablemente.</p>
                                        </div>
                                    </div>
                                    <div class="sub-cont-adv transition-all">
                                        <div class="cont-img-adv">
                                            <img src="img/icons/web-design.png" alt="Speed-O-Meter">
                                        </div>
                                        <div class="cont-info-adv">
                                            <h3>Diseño fluido y agradable</h3>
                                            <p>Todos los colores y su tema fueron elegidos minusiosamente para hacerte sentir cómodo y en un ambiente de trabajo cálido.</p>
                                        </div>
                                    </div>
                                    <div class="sub-cont-adv transition-all">
                                        <div class="cont-img-adv">
                                            <img src="img/icons/globe-grid.png" alt="Speed-O-Meter">
                                        </div>
                                        <div class="cont-info-adv">
                                            <h3>Conexión en todos lados</h3>
                                            <p>Te puedes conectar desde cualquier dispositivo, en cualquier lugar y a cualquier hora.</p>
                                        </div>
                                    </div>
                                    <div class="sub-cont-adv transition-all">
                                        <div class="cont-img-adv">
                                            <img src="img/icons/shield.png" alt="Speed-O-Meter">
                                        </div>
                                        <div class="cont-info-adv">
                                            <h3>Mejor seguridad</h3>
                                            <p>Toda la estructura está pensada para darte seguridad al navegar y guardar toda tu información.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Cuadro cuarto -->
                        <div class="ask-four" style="display:none;">
                            <article>
                                <h3>¿Porqué elegir SISCON®?</h3>
                                <div class="cont-final">
                                    <div class="span-final transition-all">
                                        <div class="cont-foot-sq-final"></div>
                                        <div class="cont-foot-up-final">
                                            <img src="img/icons/number-1.png" alt="Número 1">
                                            <span>Elegir SISCON&reg te ayuda a reducir gastos.</span>
                                            <div class="cont-img-foot-final">
                                                <img src="img/icons/ahorro.png" alt="Ahorro">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span-final transition-all">
                                        <div class="cont-foot-sq-final"></div>
                                        <div class="cont-foot-up-final">
                                            <img src="img/icons/number-2.png" alt="Número 1">
                                            <span>Puedes utilizarlo con cualquier dispositivo.</span>
                                            <div class="cont-img-foot-final">
                                                <img src="img/icons/computadora.png" alt="Computadora">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span-final transition-all">
                                        <div class="cont-foot-sq-final"></div>
                                        <div class="cont-foot-up-final">
                                            <img src="img/icons/number-3.png" alt="Número 1">
                                            <span>Te brindamos servicio de soporte 24/7.</span>
                                            <div class="cont-img-foot-final">
                                                <img src="img/icons/soporte.png" alt="Soporte 24/7">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>
                    <div class="but-cont-flex">
                        <div class="round-selector" id="ask-one">
                            <div class="round-selector-back transition-all"></div>
                        </div>
                        <div class="round-selector" id="ask-two">
                            <div class="round-selector-back transition-all"></div>
                        </div>
                        <div class="round-selector" id="ask-three">
                            <div class="round-selector-back transition-all"></div>
                        </div>
                        <div class="round-selector" id="ask-four">
                            <div class="round-selector-back transition-all"></div>
                        </div>
                    </div>
                    <div class="foot-a-sistema">
                        <a href="#planes">¡Contrata SISCON® ahora!</a>
                    </div>
                </div>
            </div>
            <div class="bg-round-two"></div>
        </section>
        <!-- <section id="demostracion">
            <div class="cont-demo">
                <h1><span class="anim-span-demo transition-all">¡Obtén tu demostración gratuita ya mismo!</span></h1>
                <p>De una manera fácil y sencilla.</p>
                <div class="father-bg-btn-demo">
                    <div class="body-demo">
                        <h1>Completa rápidamente el siguiente formulario</h1>
                        <a href="https://hello.siscon-system.com/solicitar-demo"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="bg-buttom-demo"></div>
                </div>
            </div>
        </section> -->
        <section id="planes">
            <div class="body-planes">
                <h1>Encuentra el mejor plan</h1>
                <p>Elige el plan que mejor se adapte a tus necesidades</p>
                <div class="contenedor-tipo-plan">
                    <div class="contenedor-sistema">
                        <span class="type-plan-sel">Tipo de sistema</span>
                        <div class="cont-sel-plan">
                            <span>POS</span>
                            <!-- <div class="sel-radio">
                                <div class="bg-radio-sist">
                                    <div class="round-radio-sist"></div>
                                </div>
                            </div>
                            <span>Distribución</span> -->
                        </div>
                    </div>
                    <div class="contenedor-plan">
                        <span class="type-plan-sel">Visualizar planes</span>
                        <div class="cont-sel-plan">
                            <span>Mensual</span>
                            <div class="sel-radio">
                                <div class="bg-radio">
                                    <div class="round-radio"></div>
                                </div>
                            </div>
                            <span>Anual</span>
                        </div>
                    </div>
                    <div class="plan-anu">
                        <span class="span-plan-anu">PLAN ANUAL<br>15% OFF</span>
                    </div>
                </div>
                <div class="select-plan">
                    <div class="plan-box">
                        <div class="sistema-box">SISCON® POS</div>
                        <span class="tipo-plan">Básico</span>
                        <span class="money-plan"><span class="symbol-dollar-plan">$</span><span class="transition-all" id="basic-plan"></span><span class="exp-number transition-all"></span></span>
                        <span class="info-pay-plan">Precio incluye IVA</span>
                        <!-- <button class="btn btn-plan" data-id="1" id="sel-plan-one1" disabled>prueba 30 días gratis</button> -->
                        <span style="margin-bottom: 15px;font-size: 1.5rem;"><strong>Funciones básicas</strong></span>
                        <ul>
                            <li><i class="fas fa-check"></i>&nbspHasta 1 usuarios en simultáneo</li>
                            <li><i class="fas fa-check"></i>&nbspMódulos de venta, productos y cajas</li>
                            <li><i class="fas fa-check"></i>&nbspListado de hasta 500 productos</li>
                            <!-- <li><i class="fas fa-check"></i>&nbspPersonalización de perfiles</li> -->
                        </ul>
                    </div>
                    <div class="plan-box">
                        <div class="sistema-box">SISCON® POS</div>
                        <span class="tipo-plan">Standard</span>
                        <span class="money-plan"><span class="symbol-dollar-plan">$</span><span class="transition-all" id="standard-plan"></span><span class="exp-number transition-all"></span></span>
                        <span class="info-pay-plan">Precio incluye IVA</span>
                        <!-- <button class="btn btn-plan" data-id="1" id="sel-plan-one1" disabled>prueba 30 días gratis</button> -->
                        <span style="margin-bottom: 15px;font-size: 1.5rem;"><strong>Funciones básicas +</strong></span>
                        <ul>
                            <li><i class="fas fa-check"></i>&nbspHasta 3 usuarios en simultáneo</li>
                            <li><i class="fas fa-check"></i>&nbspMódulos de venta, productos, caja, stock e inventarios</li>
                            <li><i class="fas fa-check"></i>&nbspListado de hasta 2000 productos</li>
                            <li><i class="fas fa-check"></i>&nbspHasta 3 Puntos de venta</li>
                        </ul>
                    </div>
                    <div class="plan-box plan-star">
                        <div class="sistema-box">SISCON® POS</div>
                        <span class="tipo-plan-star">Full</span>
                        <span class="money-plan"><span class="symbol-dollar-plan">$</span><span class="transition-all" id="full-plan"></span><span class="exp-number transition-all"></span></span>
                        <span class="info-pay-plan">Precio incluye IVA</span>
                        <!-- <button class="btn btn-plan" data-id="2" id="sel-plan-two2" disabled>prueba 30 días gratis</button> -->
                        <span style="margin-bottom: 15px;font-size: 1.5rem;"><strong>Todas las funciones anteriores +</strong></span>
                        <ul>
                            <li><i class="fas fa-check"></i>&nbspHasta 10 usuarios en simultáneo</li>
                            <li><i class="fas fa-check"></i>&nbspMódulos de venta, productos, caja, stock, inventarios, lista de precios y reportes</li>
                            <li><i class="fas fa-check"></i>&nbspListado de hasta 5000 productos</li>
                            <li><i class="fas fa-check"></i>&nbspHasta 10 Puntos de venta</li>
                        </ul>
                    </div>
                    <!-- <div class="plan-box">
                        <span class="tipo-plan">Customizable</span>
                        <span class="custom-plan">Solicitar cotización</span>
                        <button class="btn btn-plan" data-id="3" id="sel-plan-three" disabled>Pedir cotización</button>
                        <span style="margin-bottom: 15px;font-size: 1.5rem;"><strong>Sistema a medida</strong></span>
                        <ul>
                            <li><i class="fas fa-check"></i>&nbspSistema hecho a tu medida</li>
                            <li><i class="fas fa-check"></i>&nbspAsesoramiento EXCLUSIVO</li>
                            <li><i class="fas fa-check"></i>&nbspSoporte 24/7</li>
                            <li><i class="fas fa-check"></i>&nbspAtención EXCUSIVA</li>
                        </ul>
                    </div> -->
                </div>
                <!-- <div class="foot-planes">
                    <a class="a-bg-gold" href="#demostracion">¡Quiero una demostración gratuita primero!</a>
                </div> -->
            </div>
            <!-- <div class="bg-square-foot-plan"></div> -->
            <!-- <div class="bg-round"></div> -->
        </section>
        <section id="contacto">
            <div class="body-contact">
                <div class="header-contacto">
                    <div class="contact-head">
                        <h1>Contáctanos</h1>
                        <p>Si tienes alguna consulta déjanos saberla. Llena el siguiente formulario y te contestamos a la brevedad.</p>
                    </div>
                </div>
                <div class="contact-form">
                    <form action="#" type="POST" role="form" id="envio-consulta">
                        <div class="form-group">
                            <label for="name-form">Nombre y Apellido *</label>
                            <input type="text" name="name-form" id="name-form" placeholder="Tu nombre" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email-form">Correo electrónico *</label>
                            <input type="email" name="email-form" id="email-form" placeholder="Tu correo electrónico" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tel-form">Teléfono</label>
                            <input type="tel" name="tel-form" id="tel-form" placeholder="Tu teléfono" maxlenght="20" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="coment-form">Consulta *</label>
                            <textarea name="coment-form" id="coment-form" maxlenght="550" placeholder="Deja tu consulta aquí..." class="form-control" rows="6"></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LdhPFQhAAAAAJnAN69RnP1Mlu-k36muahXLkF_6" style="width: 304px;margin: 0 auto;"></div>
                        <input type="submit" class="btn btn-success" id="send-form" value="Enviar consulta" required>
                    </form>
                </div>
            </div>
        </section>
        <div class="cookies-msg cookies-msg-hide">
            <div class="body-msg-cookies">
                <button id="close-cookies transition-all">X</button>
                <p>Este sitio maneja <em>COOKIES</em> para que puedas obtener la mejor experiencia de navegación. Además, nos ayuda a mantener optimizadas sus funciones.</p>
                <div class="foot-msg-cookies">
                    <a id="politicas-priv" href="#">ver políticas de privacidad</a>
                    <button id="accept-cookies transition-all">Acepto las cookies</button>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <div class="foot-flex">
        <div class="col-business">
            <img src="img/siscon160.png" alt="Siscon img">
            <p class="text-gray">Estamos para impulsar tu negocio</p>
            <p class="text-gray info-text">Llámanos: <a href="tel:+5492634566563">+54 9 263 456 6563</a></p>
            <p class="text-gray info-text">O al: <a href="tel:+5492634326699">+54 9 263 432 6699</a></p>
            <p class="text-gray info-text"><a href="mailto:contacto@siscon-system.com">contacto@siscon-system.com</a></p>
            <p class="text-gray info-text">Sistema SISCON®: <a href="https://siscon-system.com">https://siscon-system.com</a></p>
            <p class="text-gray info-text">Demos SISCON®: <a href="https://demo.siscon-system.com">https://demo.siscon-system.com</a></p>
        </div>
        <div class="col-about">
            <h3>Sobre nosotros</h3>
            <p class="parrafo-foot">SISCON® es un producto de <a href="https://facebook.com/ags.desarrollo.web" target="_blank">AGS - Desarrollo Web</a>. Visítanos en nuestra fanpage para obtener más información acerca de todo lo que tenemos para ofrecerte para tu empresa, negocio, PyME, microemprendimiento u organización.</p>
        </div>
        <div class="col-nets">
            <h3>Síguenos</h3>
            <div class="cont-social-flex">
                <a href="https://facebook.com/ags.desarrollo.web" target="_blank"><i class="fab fa-facebook-square" style="font-size: 50px;margin: 0 10px;"></i></a>
                <a href="https://www.linkedin.com/company/ags-desarrollo-web/" target="_blank"><i class="fab fa-linkedin" style="font-size: 50px;margin: 0 10px;"></i></a>
                <a href="https://t.me/Alex_Sanc" target="_blank"><i class="fab fa-telegram" style="font-size: 50px;margin: 0 10px;"></i></a>
            </div>
        </div>
        <div class="col-stuff">
            <h3>Staff</h3>
            <div class="stuff-person">
                <img src="img/agsanchez-min.png" alt="Alexis G. Sanchez">
                <div class="info-person">
                    <span class="name-stuff">Alexis G. Sanchez</span>
                    <span class="job-stuff">Desarrollador Full Stack</span>
                    <span class="pos-stuff">Fundador</span>
                    <div class="social-stuff">
                        <a href="https://www.facebook.com/AlexGSanc/" target="_blank"><i class="fab fa-facebook-square" style="font-size: 25px;margin: 0 5px;"></i></a>
                        <a href="https://www.linkedin.com/in/alexis-gabriel-sanchez/" target="_blank"><i class="fab fa-linkedin" style="font-size: 25px;margin: 0 5px;"></i></a>
                        <a href="https://www.behance.net/alexsanfre5d64" target="_blank"><i class="fab fa-behance" style="font-size: 25px;margin: 0 5px;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span id="copyrights-foot">Siscon® copyright &copy; 2021. Todos los derechos reservados.</span>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<script src="js/main.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
</script>

</html>