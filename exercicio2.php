<?php 
    $num1 = 2;
    $num2 = 2.5;
    $nome = "José";

    if (is_int($num1)) {
        $resul = $num1 * 2;
        if ($resul > 100) {
            echo "$resul  é maior que 100";
        } else {
            echo "$resul  não é maior que 100";
        }
    } else {
        echo "Não é um numero int";
    }

?>