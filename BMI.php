<?php

    function BMI ($peso, $altura){
        $total = $peso / $altura * $altura;
        return $total;
    }

    echo BMI (70, 180);

?>