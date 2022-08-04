<?php

    function tomarMontos($ts, $ps, $tps){

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

    }

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