<?php

$dataNascimento = mktime(02, 12, 33, 07, 30, 2005);

echo $dataNascimento ."<br>";

$dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

echo $dataNascimentoFormatada . "<br>";

$dataEspecifica = mktime(10, 20, 11, 04, 28, 2041);
 
$dataEspecifica1 = date('d/m/Y', $dataEspecifica);

echo $dataEspecifica1;