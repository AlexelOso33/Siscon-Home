<?php
    $key = $_GET['us'];
    $hid = $_GET['hid'];

    if(!isset($key) && !filter_var($key, FILTER_VALIDATE_INT) && !password_verify($key, $hid)){
        die('Error al cargar el sitio.<br>ERROR: acceso no autorizado.');
    }

    include_once 'functions/bd_conexion.php';

    // Tomamos el nombre del usuario
    try {
        $sql = "SELECT * FROM `users_business` WHERE `id_admin` = $key";
        $res = mysqli_query($conn, $sql);
        $nUsuario = mysqli_fetch_assoc($res);
        $nombre = $nUsuario['nombre'];
        $usuario = $nUsuario['usuario'];
        $estado = $nUsuario['estado_usuario']; 
    } catch (\Throwable $th) {
        echo "Error: ".$th->getMessage();
    }
?>

        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Registra tu nueva contraseña</title>
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
                <div class="preloader-span">
                    <span>Hola, <?php echo $nombre; ?>.<br><br>Registra tu nueva contraseña para tu usuario <span class="golden"><?php echo $usuario; ?></span>.</span><br><br>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="new-pass" id="new-pass" placeholder="Contraseña" style="margin-bottom:20px;">
                        <input type="password" class="form-control" name="rep-pass" id="rep-pass" placeholder="Repita la contraseña" style="margin-bottom:20px;">
                        <!-- <span class="form-control-feedback span-seecont"><i class="far fa-eye"></i></span> -->
                    </div>
                    <span class="error-pass golden" style="display:none;">Debe ingresar una contraseña válida.</span><br><br>
                    <input type="hidden" id="id-user" value="<?php echo $key; ?>">
                    <input type="button" class="btn btn-success" id="send-newpass" value="Generar" disabled>
                </div>
                <div class="preloader-a" style="margin-top: 50px;">
                    <a href="https://app.sisconsystem.online" class="pre-btn-back">Ir a Siscon System</a>
                </div>
            </div>
            
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
            <script src="js/main.js"></script>
        </body>
        </html>