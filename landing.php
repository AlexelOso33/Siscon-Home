<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>¡Estas a unos pasos de tu DEMOSTRACIÓN GRATUITA!</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/main-sd.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-33XS4GG66W"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-33XS4GG66W');
    </script>
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript">
    var onloadCallback = function() {
            alert("grecaptcha is ready!");
        };
    </script>
</head>

<body class="hold-transition login-page">
    <div class="img-head siscon-info">
        <a href="#"><img src="img/siscon160.png" alt="Siscon img"></a>
    </div>
    <div class="btn-atras transition-all btn-atras-hide">
        <i class="fas fa-arrow-left"></i>
    </div>
    <div class="bg-img-info"></div>
    <section id="contact-demo">
        <div class="body-contact transition-all">
            <div class="header-contacto">
                <div class="contact-head">
                    <h1>¡Estás a pocos pasos de tu DEMOSTRACIÓN GRATUITA!</h1>
                    <p>Completa el siguiente formulario con tus datos y <strong>#descubreSiscon</strong>.</p>
                </div>
            </div>
            <div class="cont-type-sys transition-all">
                <h3>En primer lugar, elige el tipo de sistema</h3>
                <div class="select-type-system">
                    <div id="sel-pos" class="cont-type-system transition-all">
                        <div class="cont-desc-system  transition-all">
                            <p>Para tu local o negocio abierto al público</p>
                        </div>
                        <img src="img/siscon-pos.png" alt="Siscon img" class="img-type-select">
                    </div>
                    <div id="sel-dist" class="cont-type-system transition-all">
                        <div class="cont-desc-system transition-all">
                            <p>Para tu distribuidora</p>
                        </div>
                        <img src="img/siscon-distribucion.png" alt="Siscon img" class="img-type-select">
                    </div>
                </div>
            </div>

            <div class="contact-form form-contact-demo demo-cont-hide transition-all">
                <h4 style="color:#fff;margin-bottom:20px;">Elegiste: <span class="golden">SISCON®&nbsp<span id="system-selected"></span></span></h4>
                <form type="POST" role="form" id="demo-siscon">
                    <div class="form-group">
                        <label for="name-demo">Nombre y Apellido *</label>
                        <input type="text" name="name-demo" id="name-demo" class="form-control" placeholder="Ej: Alexis Sanchez" required>
                    </div>
                    <div class="form-group">
                        <label for="business-demo">Nombre de la empresa *</label>
                        <input type="text" name="business-demo" id="business-demo" class="form-control" placeholder="Ej: SISCON S.A." required>
                    </div>
                    <div class="form-group">
                        <label for="business-demo">Posición dentro la empresa</label>
                        <input type="text" name="position-demo" id="position-demo" class="form-control" placeholder="Ej: Encargado de depósito">
                    </div>
                    <div class="form-group">
                        <label for="email-demo">Correo electrónico *</label>
                        <input type="email" name="email-demo" id="email-demo" class="form-control" placeholder="Ej: tunombre@dominio.com" required>
                    </div>
                    <div class="form-group">
                        <label for="tel-demo">Teléfono *</label>
                        <input type="tel" name="tel-demo" id="tel-demo" placeholder="Ej: 2634566563" maxlength="10" class="form-control solo-numero" required>
                    </div>
                    <p>* Datos obligatorios.</p>
                    
                    <div class="g-recaptcha" data-sitekey="6Legoj4bAAAAALPJoXAONoArBoHbbtjSlrumQc-l" style="width: 304px;margin: 0 auto;"></div>
                    <br/>
                    
                    <input type="hidden" name="type-system" id="type-system">
                    <input type="hidden" name="accion" value="solicitud-demo">
                    <input type="submit" class="btn btn-success" id="send-form" value="Quiero mi demostración">
                </form>
            </div>
        </div>
        <div class="btn-siguiente transition-all btn-sig-hide">
            <i class="fas fa-arrow-right"></i>
        </div>
    </section>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
    <script src="js/Backup-main.js"></script>
</body>
</html>