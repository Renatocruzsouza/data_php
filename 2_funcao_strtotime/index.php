<?php

$cincoDias = strtotime("5 days");

echo $cincoDias . "<br>";

$dataAtualMais5 = date('d/m/y' , $cincoDias);

echo $dataAtualMais5 . "<br>";

$doisMeses = strtotime("2 months");


$dataAtualMaisDoisMeses = date('d/m/Y' , $doisMeses);

echo $dataAtualMaisDoisMeses . "<br>";

$dezAnos = strtotime("10 years");

echo date("d/m/Y", $dezAnos) . "<br>";


