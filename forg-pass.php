<?php ?>

        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Recuperación de contraseña</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <link rel="stylesheet" href="css/main.css">
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
                
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-33XS4GG66W"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                
                gtag('config', 'G-33XS4GG66W');
            </script>
            
        </head>
        <body class="login-page">
            <div class="preloader" style="z-index:1!important;">
                <div class="img-preload transition-all">
                    <img src="img/icon-rounded.png" alt="Siscon img" style="width:150px;">
                </div>
                <form action="#" name="send-recpass" id="send-recpass" method="post">
                    <div class="preloader-span">
                        <span>Si olvidaste tu contraseña no te preocupes.<br>Ingresa tu correo a continuación y te enviaremos<br>un link para puedas volver a generar una nueva contraseña. <span class="golden"><?php echo $usuario; ?></span>.</span><br><br>
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu correo" style="margin: 20px auto;">
                            <!-- <span class="form-control-feedback span-seecont"><i class="far fa-eye"></i></span> -->
                        </div>
                        <span class="error-pass golden" style="display:none;">Si el correo que ingresaste se encuentra en nuestras bases de datos<br>comprueba tu <strong>buzón de entrada</strong> o dentro de <strong>Correo no deseado</strong> <br>para volver a generar una <strong>nueva contraseña</strong>.</span><br><br>
                        <input type="hidden" id="id-user" value="<?php echo $key; ?>">
                        <input type="submit" class="btn btn-success" value="Generar">
                    </div>
                </form>
                <div class="preloader-a" style="margin-top: 50px;">
                    <a href="https://app.sisconsystem.online" class="pre-btn-back">Volver a Siscon System</a>
                </div>
            </div>
            
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
            <!-- <script src="js/main.js"></script> -->
        </body>
        </html>