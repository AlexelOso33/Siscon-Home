<?php

    $type = 3; //$_GET['t'];
    $name = 'Alexis Sanchez'; //$_GET['n'];
    if($type == 1 || $type == 3){
        $sistema = 'Distribución'; //$_GET['s'];
    } else if($type == 2) {
        $activacion = $_GET['a'];
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Siscon® System by AGS - Desarrollo Web</title> <!-- CUSTOM TITLE -->
        <style type="text/css">

            * {
                margin:0;
                padding:0;
            }
            * { font-family: sans-serif, Calibri; color:#656565; }
            .white { color: #f9fafc; }

            img {
                width: 100px;
                display: block;
                margin: 0 0 20px 0;
            }
            .img-round {
                background-color: #f9fafc;
                border: 2px solid rgb(173 183 255);
                border-radius: 50%;
            }
            .colapsado {
                margin:0;
                padding:0;
            }
            body {
                -webkit-font-smoothing:antialiased;
                -webkit-text-size-adjust:none;
                width: 100%!important;
                height: 100%;
            }
            .title-body{ color: #00b9be;font-weight:bold; }
            .indent{ text-indent: 15px;font-size: 11px;}

            a { color: #00b9be; text-decoration:none;}

            .btn {
                text-decoration:none;
                color: #FFF;
                background-color: #666;
                padding:10px 16px;
                font-weight:bold;
                margin-right:10px;
                text-align:center;
                cursor:pointer;
                display: inline-block;
            }
            .callout {
                padding:10px;
                background-color:#333;
            }

            p.calloutlead {
                font-size:17px;
                font-weight:800;
                margin-bottom:0px;
                padding: 5px 10px 0px 10px;
            }

            p.callout {
                margin-bottom:0px;
            }
            .callout a {
                color: #f9fafc;
                font-weight:800;
            }

            table.contact {
                background-color: #f5f5f5;
            
            }

            table.head-wrap { width: 100%;}

            .header.container table td.logo { padding: 15px; }
            .header.container table td.label { padding: 15px; padding-left:0px;}

            table.body-wrap { width: 100%;}

            table.footer-wrap { width: 100%;	clear:both!important;
            }
            .footer-wrap .container td.content p {
                border-top: 1px solid rgb(215,215,215);
                padding-top:15px;
                font-size:10px;
                font-weight: bold;
            }

            h1,h2,h3,h4,h5,h6 {
            font-family: sans-serif, Calibri; line-height: 1.1; margin-bottom:15px; color:#333;
            }
            h1 small, h2 small, h3 small, h4 small, h5 small, h6 small { font-size: 60%; color: #6f6f6f; line-height: 0; text-transform: none; }

            h1 { font-weight:200; font-size: 44px;}
            h2 { font-weight:200; font-size: 37px;}
            h3 { font-weight:500; font-size: 25px;}
            h4 { font-weight:500; font-size: 23px;}
            h5 { font-weight:900; font-size: 17px;}
            h6 { font-weight:200; font-size: 12px; color:#00b9be;}

            .colapsado { margin:0!important;}

            p, ul {
                margin-bottom: 10px;
                font-weight: normal;
                font-size:14px;
                line-height:1.6;
            }
            p.lead { font-size:17px; font-weight:800; }
            p.last { margin-bottom:0px;}

            p.number { background-color:#eee; color:#999; text-align:center;}

            ul li {
                margin-left:5px;
                list-style-position: inside;
            }

            ul.sidebar {
                background:#ebebeb;
                display:block;
                list-style-type: none;
            }
            ul.sidebar li { display: block; margin:0;}
            ul.sidebar li a {
                text-decoration:none;
                color: #666;
                padding:10px 16px;
                margin-right:10px;
                cursor:pointer;
                border-bottom: 1px solid #777777;
                border-top: 1px solid #FFFFFF;
                display:block;
                margin:0;
            }
            ul.sidebar li a.last { border-bottom-width:0px;}
            ul.sidebar li a h1,ul.sidebar li a h2,ul.sidebar li a h3,ul.sidebar li a h4,ul.sidebar li a h5,ul.sidebar li a h6,ul.sidebar li a p { margin-bottom:0!important;}

            .container {
                display:block!important;
                max-width:600px!important;
                margin:0 auto!important;
                clear:both!important;
            }

            .content {
                padding:15px;
                max-width:600px;
                margin:0 auto;
                display:block;
            }

            .content table { width: 100%; }

            .column {
                width: 300px;
                float:left;
            }
            .column tr td { padding: 15px; }
            .column-wrap {
                padding:0!important;
                margin:0 auto;
                max-width:600px!important;
            }
            .column table { width:100%;}
            .social .column {
                width: 280px;
                min-width: 279px;
                float:left;
            }

            .tr-social > td {
                width: 80px;
                padding: 5px;
            }

            .social-img {
                width: 60px;
                display: block;
                margin: 0 auto;
            }

            @media only screen and (max-width: 680px) {
            
                a[class="btn"] { display:block!important; margin-bottom:10px!important; background-image:none!important; margin-right:0!important;}

                div[class="column"] { width: auto!important; float:none!important;}
            
                table.social div[class="column"] {
                    width:auto!important;
                }

            } p.pie {font-size:11px;}
        </style>
    </head>
    <body bgcolor="#FFFFFF">

<?php if($type == 3){ ?>

        <!-- CUERPO templateRecepcionDatosAlta($name, $sistema) -->
        <table class="head-wrap" bgcolor="#6896a0">
            <tbody>
                <tr>
                    <td></td>
                    <td class="header container">
                        <div class="content">
                            <table bgcolor="#6896a0">
                                <tbody>
                                    <tr>
                                    <td align="center">
                                        <a href="https://hello.siscon-system.com" target="_blank"><img src="https://hello.siscon-system.com/img/siscon160.png" alt="Siscon-system" class="img-round"></a>
                                        <a href="https://facebook.com/ags.desarrollo.web" target="_blank" class="white">by AGS - Desarrollo Web</a>
                                    </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table class="body-wrap">
            <tbody>
                <tr>
                    <td></td>
                    <td class="container" bgcolor="#FFFFFF">
                        <div class="content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td align="justify">
                                            <h3 class="title-body" align="center">¡Hola, <?php echo $name;?>!</h3>
                                            <p class="lead" align="center">Hemos recibido tu Solicitud de Alta de usuario para utilizar nuestro sistema <a href="https://siscon-system.com" target="_blank">Siscon&reg; <?php echo $sistema; ?></a></p>
                                            <p>En breve vas a recibir otro correo con tu usuario y contraseña para que puedas comenzar a utilizar tu demostración gratuita.</p>
                                            <p>Ten en cuenta que la demostración que vas a probar es un "maquetado" ya que maneja unos datos de <strong>facturación, clientes, productos y demás</strong> por defecto. Las mismas son tomadas de información ficticia, por lo que cualquier semejanza con la realidad es pura coincidencia.</p>
                                            <p>Si deseas contratar un plan para comenzar a utilizar el sistema te dejamos el <a href="https://www.hello.siscon-system.com#planes" target="_blank">siguiente link</a> para que puedas ingresar y contratar el plan que mas se ajuste a tus necesidades.</p>
                                            <br>
                                            <p>Recuerda <strong>NO RESPONDER ESTE MENSAJE</strong> ya que el mismo se genera de manera automática.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="contact" width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table align="left" class="column">
                                                <tbody>
                                                    <tr>
                                                        <p align="center">Visita nuestras redes sociales</p>
                                                    </tr>
                                                    <tr class="tr-social">
                                                        <td>
                                                            <a href="https://www.facebook.com/ags.desarrollo.web" target="_blank"><img src="https://www.hello.siscon-system.com/img/mailer/facebook.png" alt="Facebook Siscon" class="social-img"></a>
                                                        </td>
                                                        <td>
                                                            <a href="https://www.www.linkedin.com/company/ags-desarrollo-web/" target="_blank"><img src="https://www.hello.siscon-system.com/img/mailer/linkedin.png" alt="LinkedIn Siscon" class="social-img"></a>
                                                        </td>
                                                        <td>
                                                            <a href="https://www.t.me/Alex_Sanc" target="_blank"><img src="https://www.hello.siscon-system.com/img/mailer/telegrama.png" alt="Telegram Siscon" class="social-img"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <p align="center"><a href="mailto:contacto@siscon-system.com" target="_blank">Equipo Siscon&copy;</a></p>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <!-- **** /CC **** -->
            
<?php } else if($type == 2){
    $url = 'https://hello.siscon-system.com/activate?a='.$name; ?>
    
        <!-- CUERPO mailerActivation($name, $activation) -->
        <table class="head-wrap" bgcolor="#6896a0">
            <tbody>
                <tr>
                    <td></td>
                    <td class="header container">
                        <div class="content">
                            <table bgcolor="#6896a0">
                                <tbody>
                                    <tr>
                                    <td align="center">
                                        <a href="https://hello.siscon-system.com" target="_blank"><img src="https://hello.siscon-system.com/img/siscon160.png" alt="Siscon-system" class="img-round"></a>
                                        <a href="https://facebook.com/ags.desarrollo.web" target="_blank" class="white">by AGS - Desarrollo Web</a>
                                    </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table class="body-wrap">
            <tbody>
                <tr>
                    <td></td>
                    <td class="container" bgcolor="#FFFFFF">
                        <div class="content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h3 class="title-body" align="center">¡Hola, <?php echo $name; ?>!</h3>
                                            <p class="lead">Estas casi listo para comenzar a usar tu cuenta <a href="https://siscon-system.com" target="_blank">Siscon&reg;</a>, solamente necesitamos que confirmes tu correo.</p>
                                            <p>Para finalizar el registro, haz clic en el siguiente enlace. Recuerda que este enlace es válido por 24 horas.</p>
                                            <table class="callout" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td align="center">
                                                            <p class="callout">
                                                            <a href="<?php echo $url; ?>" target="_blank">Clic aquí para activar la cuenta</a>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="contact" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <table align="left" class="column">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <p>Si el link presenta alguna dificultar, ingrega aquí <a href="https://hello.siscon-system.com/activate">https://hello.siscon-system.com/activation</a> e introduce el siguiente código:</p>
                                                                            <p class="number"><?php echo $activation; ?></p>
                                                                            <h5></h5>
                                                                            <p>¡Saludos!</p>
                                                                            <p><strong><a href="mailto:soporte@siscon-system.com" target="_blank">Equipo de soporte Siscon&reg;</a></strong></p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <!-- **** /CC **** -->

<?php } else if($type == 1){ ?>

        <!-- CUERPO templateRecepcionDatos($name, $sistema) -->
        <table class="head-wrap" bgcolor="#6896a0">
            <tbody>
                <tr>
                    <td></td>
                    <td class="header container">
                        <div class="content">
                            <table bgcolor="#6896a0">
                                <tbody>
                                    <tr>
                                    <td align="center">
                                        <a href="https://hello.siscon-system.com" target="_blank"><img src="https://hello.siscon-system.com/img/siscon160.png" alt="Siscon-system" class="img-round"></a>
                                        <a href="https://facebook.com/ags.desarrollo.web" target="_blank" class="white">by AGS - Desarrollo Web</a>
                                    </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table class="body-wrap">
            <tbody>
                <tr>
                    <td></td>
                    <td class="container" bgcolor="#FFFFFF">
                        <div class="content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td align="justify">
                                            <h3 class="title-body" align="center">¡Hola, <?php echo $name; ?>!</h3>
                                            <p class="lead" align="center">Hemos recibido tu Solicitud de Demostración de nuestro sistema <a href="https://siscon-system.com" target="_blank">Siscon&reg; <?php $sistema; ?></a></p>
                                            <p>En breve vas a recibir otro correo con tu usuario y contraseña para que puedas comenzar a utilizar tu demostración gratuita.</p>
                                            <p>Ten en cuenta que la demostración que vas a probar es un "maquetado" ya que maneja unos datos de <strong>facturación, clientes, productos y demás</strong> por defecto. Las mismas son tomadas de información ficticia, por lo que cualquier semejanza con la realidad es pura coincidencia.</p>
                                            <p>Si deseas contratar un plan para comenzar a utilizar el sistema te dejamos el <a href="https://www.hello.siscon-system.com#planes" target="_blank">siguiente link</a> para que puedas ingresar y contratar el plan que mas se ajuste a tus necesidades.</p>
                                            <br>
                                            <p>Recuerda <strong>NO RESPONDER ESTE MENSAJE</strong> ya que el mismo se genera de manera automática.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="contact" width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table align="left" class="column">
                                                <tbody>
                                                    <tr>
                                                        <p align="center">Visita nuestras redes sociales</p>
                                                    </tr>
                                                    <tr class="tr-social">
                                                        <td>
                                                            <a href="https://www.facebook.com/ags.desarrollo.web" target="_blank"><img src="https://www.hello.siscon-system.com/img/mailer/facebook.png" alt="Facebook Siscon" class="social-img"></a>
                                                        </td>
                                                        <td>
                                                            <a href="https://www.www.linkedin.com/company/ags-desarrollo-web/" target="_blank"><img src="https://www.hello.siscon-system.com/img/mailer/linkedin.png" alt="LinkedIn Siscon" class="social-img"></a>
                                                        </td>
                                                        <td>
                                                            <a href="https://www.t.me/Alex_Sanc" target="_blank"><img src="https://www.hello.siscon-system.com/img/mailer/telegrama.png" alt="Telegram Siscon" class="social-img"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <p align="center"><a href="mailto:contacto@siscon-system.com" target="_blank">Equipo Siscon&copy;</a></p>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <!-- **** /CC **** -->

<?php } ?>

        <table class="footer-wrap">
            <tbody>
                <tr>
                    <td></td>
                    <td class="container">
                        <div class="content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p align="center">Siscon® copyright &copy; 2021. Todos los derechos reservados</p>
                                            <p class="indent" align="justify">La información contenida en este documento es propiedad de Siscon&copy; systems . Siscon&copy; se reserva todos los derechos de propiedad industrial e intelectual (incluida cualquier patente o copyright) que se deriven o recaigan sobre este documento, incluidos los derechos de diseño, producción, reproducción, uso y venta del mismo, salvo en el supuesto de que dichos derechos sean expresamente conferidos a terceros por escrito. La información contenida en el presente documento podrá ser objeto de modificación en cualquier momento sin necesidad de previo aviso.</p>
                                            <p class="indent" align="justify">Para mas obtener mas detalles acerca del manejo de la información que es proporcionada por nuestros usuarios visita nuestras <a href="https://siscon-system.com/pages/privacy.php" target="_blank">Políticas de privacidad</a>.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>