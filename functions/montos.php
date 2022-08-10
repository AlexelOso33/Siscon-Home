<?php

    include_once 'bd_conexion.php';

    // Función para tomar los precios
    if($_POST['accion'] == 'tomar-precios'){
        $sql = "SELECT price FROM prices_service";
        $cons = mysqli_query($conn, $sql);
        $res = mysqli_fetch_all($cons);
        $res1 = [];
        foreach ($res as $k => $v) {
            $num = number_format($v[0], 0, ',', '.');
            array_push($res1, $num);
        }
        /* echo "<pre>";
        var_dump($res1);
        echo "</pre>";
        die(); */
        
        die(json_encode($res1));
    }

    /* function tomarMontos($ts, $ps, $tps){

        // SISCON POS
        if($ts == 1 && $ps == 1 && $tps == 1){
            $monto = 2499;
        } else if($ts == 1 && $ps == 2 && $tps == 1){
            $monto = 2999;
        } else if($ts == 1 && $ps == 1 && $tps == 2){
            $monto = 25489;
        } else if($ts == 1 && $ps == 2 && $tps == 2){
            $monto = 29999;
        } else if($ts == 2 && $ps == 1 && $tps == 1){ // SISCON Dist
            $monto = 2999;
        } else if($ts == 2 && $ps == 2 && $tps == 1){
            $monto = 3499;
        } else if($ts == 2 && $ps == 1 && $tps == 2){
            $monto = 29999;
        } else if($ts == 2 && $ps == 2 && $tps == 2){
            $monto = 35699;
        }

        return $monto;

    } */

    function expirationDate($dia, $anual){
        if($anual == 1){
            $exp = strtotime('+30 days', strtotime($dia));
            $exp = date('Y-m-d h:i:s', $exp);
        } else {
            $exp = strtotime('+1 year', strtotime($dia));
            $exp = date('Y-m-d h:i:s', $exp);
        }
        return $exp;        
    }

?>