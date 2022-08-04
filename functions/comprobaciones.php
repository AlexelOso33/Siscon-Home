<?php

    // Conexion a la base de datos //

    $host = 'localhost';
    $usuario = 'sisconsy_admin';
    $password = 'sis25/33?con';
    $database = 'sisconsy_admin_data';

    $conn = mysqli_connect($host, $usuario, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // ************************** //

    $date = date('Y-m-d H:i:s');
    $date = strtotime('-3 hour', strtotime($date));
    $now = date('Y-m-d H:i:s', $date);

    // Comprobaciones de mail //
    if($_POST['accion'] == 'comp-mail'){
        
        // Comprobación CHECKED ReCaptcha
        $respuesta_rec = $_POST['g-recaptcha-response'];
        if(empty($respuesta_rec)){
            $respuesta = array(
                'respuesta' => 'error-g-recaptcha'
            );
            die(json_encode($respuesta));
            exit;
        }
        
        // Envío de datos a Google Recaptcha
        $recaptcha = $_POST["g-recaptcha-response"];
 
    	$url = 'https://www.google.com/recaptcha/api/siteverify';
    	$data = array(
    		'header' => "Content-Type: application/x-www-form-urlencoded\r\n", 
    		'secret' => '6Legoj4bAAAAAPE7y_K325wQRZbagV6dfccgbtbB',
    		'response' => $recaptcha
    	);
    	$options = array(
    		'http' => array (
    			'method' => 'POST',
    			'content' => http_build_query($data)
    		)
    	);
    	$context  = stream_context_create($options);
    	$verify = file_get_contents($url, false, $context);
    	$captcha_success = json_decode($verify);
    	if ($captcha_success->success) {
            $mail = $_POST['email-registro'];
            try {
                $sql = "SELECT * FROM `data_sent_site` WHERE `mail_ds` = '$mail'";
                $resp = $conn->query($sql);
                $mail_comp = $resp->fetch_assoc();
                if(!empty($mail_comp['mail_ds'])){
                    $respuesta = array(
                        'repuesta' => 'error'
                    );
                } else {
                    $respuesta = array(
                        'respuesta' => 'ok'
                    );
                }
            } catch (\Throwable $th) {
                echo "Error: ".$th->getMessage();
            }
    	} else {
    	    $respuesta = array(
    	        'respuesta' => 'robot'  
	        );
    	}
        die(json_encode($respuesta));
    }

    // Guardar datos en BD
    if($_POST['accion'] == 'registro-siscon'){

        // Variables
        $name = $_POST['name-registro'];

        // Generamos usuario a partir del nombre
        $user1 = explode(" ", $name);
        $nombre = strtolower($user1[0]);
        $apellido = strtolower($user1[1]);
        $nombre = substr($nombre, 0, 1);
        $user = $nombre.$apellido;

        $business = $_POST['business-registro'];
        $mail = $_POST['email-registro'];

        // Generar nombre BD
        $empresa = $business;
        $empresa = strtolower($empresa);
        $empresa = str_replace(" ", "_", $empresa);
        if(strlen($empresa) > 20 ){
            $empresa = substr($empresa, 0, 20);
        }
        $bd = "sisconsy_".$empresa;

        $pass = $_POST['password-registro'];
        $opciones = array('cost' => 12);
        $password_h = password_hash($pass, PASSWORD_BCRYPT, $opciones);
        $level = 1;
        $est_us = 1; // Usuario activo

        try {
            $sql = "SELECT number_business AS empresa FROM business_data ORDER BY empresa DESC LIMIT 1";
            $consulta = $conn->query($sql);
            $e = $consulta->fetch_assoc();
            $n_empresa = intval($e['empresa'])+1; // Variable nueva empresa
        } catch (\Throwable $th) {
            echo "Error: ".$th->getMessage();
        }

        $avatar = "../img/siscon160.png"; // Avatar por defecto SISCON
        $address = "";
        $phone = $_POST['tel-registro'];
        $sistema = $_POST['sistema-registro'];
        $plan_s = $_POST['plan'];
        $t_plan_s = $_POST['pago'];

        // #1 Creamos la empresa
        try {
            $stmt = $conn->prepare('INSERT INTO business_data (number_business, mail_business, type_system, plan_selected, type_plan_length, bd_business_d, su_business_d, sp_business_d, date_inc, main_name_b_d) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
            $stmt->bind_param('isiiisssss', $n_empresa, $mail, $sistema, $plan_s, $t_plan_s, $bd, $user, $password_h, $now, $business);
            $stmt->execute();
            if($stmt->insert_id > 0){
                
                // #2 Creamos superuser
                try {
                    $stmt2 = $conn->prepare("INSERT INTO `users_business` (`nombre`, `business_arranged`, `avatar`, `mail`, `address`, `phone`, `usuario`, `password`, `fec_includ`, `ultima_modif`, `nivel`, `estado_usuario`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt2->bind_param("sissssssssii", $name, $n_empresa, $avatar, $mail, $address, $phone, $user, $password_h, $now, $now, $level, $est_us);
                    $stmt2->execute();
                    if($stmt2->insert_id > 0){
                        $respuesta = array(
                            'respuesta' => 'ok',
                            'bd' => $bd,
                            'name' => $name
                        );
                    } else {
                        $respuesta = array(
                            'respuesta' => 'error datos usuario'
                        );
                    }
                    $stmt2->close();
                } catch (\Throwable $th) {
                    echo "Error: ".$th->getMessage();
                }
                // *******************

            } else {
                $respuesta = array(
                    'respuesta' => 'error datos empresa'
                );
            }
        } catch (\Throwable $th) {
            echo "Error: ".$th->getMessage();
        }

        die(json_encode($respuesta));
    }

?>