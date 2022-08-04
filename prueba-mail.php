<?php

    $day = date('Y-m-d h:i:s');
    $exp = strtotime('+30 days', strtotime($day));
    $exp = date('Y-m-d h:i:s', $exp);
    
    echo $exp;

?>