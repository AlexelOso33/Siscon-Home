<?php
    $key = $_GET['a'];
    $mail = $_GET['m'];

    if(!isset($key)){
        die('Error al cargar el sitio.<br>ERROR: acceso no autorizado.');
    } else if(password_verify($mail, $key)) {
        include_once 'functions/bd_conexion.php';

        //Variable global fecha_actual
        $date= date('Y-m-d H:i:s');
        $hoy = strtotime('-3 hour', strtotime($date));
        $hoy = date('Y-m-d H:i:s', $hoy);
        $op = 1; // MAIL CONFIRMADO

        // Confirmamos que verdaderamente existe el correo
        try {
            $sql = "SELECT * FROM data_sent_site WHERE mail_ds = '$mail'";
            $res = $conn->query($sql);
            $mailConfirm = $res->fetch_assoc();
            $c_mail = $mailConfirm['mail_ds'];
            $confirmado = $mailConfirm['operation_ds'];
            if(!empty($c_mail)){
                if($confirmado == 1){ ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Correo ya confirmado</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <link rel="stylesheet" href="css/sweetalert2.min.css">
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
            <div class="preloader">
                <div class="img-preload transition-all">
                    <img src="img/icon-rounded.png" alt="Siscon img" style="width:150px;">
                </div>
                <div class="preloader-span">
                    <span>Tu correo <span class="golden"><?php echo $mail; ?></span> ya está confirmado.</span><br>
                </div>
                <div class="preloader-a" style="margin-top: 50px;">
                    <a href="https://siscon-system.com" class="pre-btn-back">Ir a Siscon System</a>
                </div>
            </div>
            
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
            <script src="js/sweetalert2.all.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
            <script src="js/main.js"></script>
        </body>
        </html>
                <?php } else {
                // Confirmamos el mail
                    try {
                        $stmt = $conn->prepare("UPDATE data_sent_site SET operation_ds = ?, confirm_date = ? WHERE mail_ds = ?");
                        $stmt->bind_param("iss", $op, $hoy, $mail);
                        $stmt->execute();
                        if($stmt->affected_rows){ ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Activar cuenta SISCON®</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <link rel="stylesheet" href="css/sweetalert2.min.css">
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
            <div class="preloader">
                <div class="img-preload transition-all">
                    <img src="img/icon-rounded.png" alt="Siscon img" style="width:150px;">
                </div>
                <div class="preloader-span">
                    <span>Tu correo <span class="golden"><?php echo $mail; ?></span> se ha activado correctamente.</span><br>
                    <span>Es importante que esperes el próximo correo que te indicará que tu <strong>acceso al sistema</strong> <em>esta listo</em>.</span>
                </div>
                <div class="preloader-a" style="margin-top: 50px;">
                    <a href="https://siscon-system.com" class="pre-btn-back">Ir a Siscon System</a>
                </div>
            </div>
            
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
            <script src="js/sweetalert2.all.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
            <script src="js/main.js"></script>
        </body>
        </html>
    
                        <?php } else { ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Error de cuenta</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
            <link rel="stylesheet" href="css/bootstrap.min.css">
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
            <div class="preloader">
                <div class="img-preload transition-all">
                    <img src="img/icon-rounded.png" alt="Siscon img" style="width:150px;">
                </div>
                <div class="preloader-span">
                    <span>Ha ocurrido un error al intentar confirmar tu mail <span class="golden"><?php echo $mail; ?></span>.</span><br>
                    <span>Por favor, envíanos un correo a <a href="mailto:contacto@siscon-system.com">contacto@siscon-system.com</a> con el motivo <em>Error de confirmación de cuenta</em>.</span><br><br>
                </div>
            </div>
            
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>
        </body>
        </html>
        
                        <?php }
                    } catch (\Throwable $th) {
                        echo "Error: ".$th->getMessage();
                    }
                }
            }
        } catch (\Throwable $th) {
            die('Error: No existe el correo '.$mail);
        }
    } ?>