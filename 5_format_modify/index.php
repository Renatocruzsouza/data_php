<?php

// data atual
$data = new DateTime();

echo $data->format('d/m/y') . "<br>";

echo $data->format("D - M - Y") . "<br>";

echo $data->format("l . F . Y") . "<br>";

// data +5 dias
$data->modify("15 days");

echo $data->format("d/m/y") . "<br>";

$data->modify("12 months");

echo $data->format("d/m/y") . "<br>";