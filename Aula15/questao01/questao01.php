<?php

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $altura = str_replace(',', '.', $altura);

    if($peso > 0 && $altura > 0){
        $imc = $peso/($altura ** 2);
        $resultado = number_format($imc, 2, ',', '');

        echo "<h3>O IMC é de $resultado.</h3>";

        if ($imc <18.5) {
            echo "<p>Abaixo do peso</p>";
        }elseif($imc >= 18.5 && $imc <= 24.9){
            echo "<p>Peso normal</p>";
        } elseif($imc >= 25 && $imc <= 29.9){
            echo "<p>Peso normal</p>";
        } else {
            echo "<p>Obesidade</p>";
        }

    }
    

?>