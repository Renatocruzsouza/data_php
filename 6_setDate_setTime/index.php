<?php

$data = new DateTime();

print_r($data);
echo "<br>";

$data->setDate(2005, 07, 30);

print_r($data);
echo "<br>";

$data->setTime(05, 12, 10);

print_r($data);
echo "<br>";

echo $data->format("d/m/y") . "<br>";