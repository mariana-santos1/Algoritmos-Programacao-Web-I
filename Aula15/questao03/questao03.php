<?php

$numero = $_POST['numero'];

if($numero % 2 == 0){
    echo "<h3>O número é par!<h3>";
} else {
    echo "<h3>O número é impar!<h3>";
}

?>