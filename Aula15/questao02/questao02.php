<?php

$nota01 = $_POST['nota01'];
$nota02 = $_POST['nota02'];
$nota03 = $_POST['nota03'];

$nota01 = str_replace(',', '.', $nota01);
$nota02 = str_replace(',', '.', $nota02);
$nota03 = str_replace(',', '.', $nota03);

$media = ($nota01 + $nota02 + $nota03)/3;
echo "<h3>Média: $media.</h3>";

if($media >= 6){
    echo "<h3>Aluno aprovado!</h3>";
} else {
    echo "<h3>Aluno reprovado!</h3>";
}
?>