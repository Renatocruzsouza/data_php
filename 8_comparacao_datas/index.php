<?php

$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();

$dataB->setDate(2030, 10, 10);
$dataC->setDate(2030, 10, 10);

$dataB->setTime(01, 10, 10);
$dataC->setTime(01, 10, 10);


if($dataB > $dataA) {
    echo "A data B é maior que a data A <br>";
} else {
    echo "ERROUU!! <br>";
}

if($dataA < $dataB) {
    echo "A data A é menor que a data B <br>";
} else {
    echo "ERROUU!! <br>";
}

if($dataB == $dataC) {
    echo "A data A é igual a data C <br>";
} else {
    echo "ERROUU!! <br>";
}