<?php
    $sistema = $_GET['sid'];
    $plan = $_GET['sp'];
    $t_plan = $_GET['stp'];

    if(!isset($sistema) || !isset($plan) || !isset($t_plan)){
        die('Vuelve a cargar los datos en el paso anterior.<br>ERROR.');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contratar plan SISCON®</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body class="login-page">

    <div class="preloader pre-contract transition-all">
        <div class="preload-img-hide transition-all">
            <img src="img/siscon160.png" alt="Siscon img">
        </div>
        <div class="img-preload" style="display:none;">
            <img src="img/confetti.png" class="img-success" alt="Excelente">
        </div>
        <div class="preloader-span transition-all" style="display:none;">
            <span>Estamos generando tu nueva cuenta. Espera por favor...</span>
        </div>
        <div class="progress progress-contract" style="display:none;">
            <div class="progress-bar animate-all" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
        </div>
    </div>

    <section id="contract" style="position:relative;">
        <div class="body-contact">
            <div class="contact-head">
                <div class="img-contract">
                    <img src="img/siscon160.png" alt="Siscon img">
                </div>
                <h1 class="golden" style="margin-bottom:5px;">Pruébalo 15 días <strong>GRATIS</strong>.</h1>
                <p>Si ya posees un usuario registrado <a class="golden" href="https://siscon-system.com">ingresa aquí</a>, sino completa el siguiente formulario.</p>
                <div class="contact-form">
                    <form type="POST" role="form" id="registro-siscon">
                        <div class="form-group">
                            <input type="text" name="name-registro" id="name-registro" class="form-control" placeholder="Nombre y apellido" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="business-registro" id="business-registro" class="form-control" placeholder="Razón Social o Nombre Empresa" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email-registro" id="email-registro" class="form-control" placeholder="Tu correo electrónico" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password-registro" id="password-registro" class="form-control" placeholder="Tu contraseña" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="rep-passw-registro" id="rep-passw-registro" class="form-control" placeholder="Repita la contraseña" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="tel-registro" id="tel-registro" placeholder="Tu teléfono" maxlength="10" class="form-control solo-numero">
                        </div>
                        <div class="form-group">
                            <select name="sistema-registro" id="sistema-registro" class="form-control" style="color:#333;">
                                <option value="1" <?php if($sistema == 1){echo "selected";} ?>>Siscon® POS</option>
                                <option value="2" <?php if($sistema == 2){echo "selected";} ?>>Siscon® Distribución</option>
                            </select>
                        </div>
                        <div class="pass-error" style="display:none;">
                            <span class="golden">Las contraseñas no coinciden.</span>
                        </div>
                        <div class="select-error" style="display:none;">
                            <span class="golden">Debes seleccionar alguna actividad.</span>
                        </div>
                        <div class="length-error" style="display:none;">
                            <span class="golden">La contraseña debe contener al menos 8 caracteres.</span>
                        </div>
                        <div class="mail-error" style="display:none;">
                            <span class="golden">El email ingresado ya se encuentra ingresado en nuestro sistema.<br>Puedes <a href="https://siscon-system.com" style="color:#333;">ingresar desde aquí</a> al sistema.<br>Si crees que esto se debe a un error <a href="index.php#contacto" style="color:#333;">háznoslo saber aquí</a>.</span>
                        </div>
                        <!--  <button class="g-recaptcha" 
                        data-sitekey="reCAPTCHA_site_key" 
                        data-callback='onSubmit' 
                        data-action='submit'>Submit</button> -->
                        <input type="hidden" name="pago" value="<?php echo $t_plan; ?>">
                        <input type="hidden" name="plan" value="<?php echo $plan; ?>">
                        <input type="hidden" name="accion" value="registro-siscon">
                        <input type="submit" class="btn btn-success" id="send-form" value="Comenzar">
                        <a href="index.php#planes" class="btn-back">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>