<?php 
    $num1 = 4;
    $limite = 30;

    // enquanto o numero seja menor que 30
    while ($num1 < $limite) {

        // mostrando os numeros 
        echo "Executando o loop $num1 <br>";

        // quando o numero for 24 pare 
        if ($num1 === 24) {
            echo "Parando o loop";
            break;
        }

        $num1+=2;
    }
?>