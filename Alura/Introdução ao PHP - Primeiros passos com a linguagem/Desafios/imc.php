<?php

$altura = 1.80;
$peso = 80;

$calculo = $peso / ($altura * $altura);

if($calculo < 18.5) {
    echo "Classificação: magreza";
} else if($calculo >= 18.5 && $calculo <= 24.9) {
    echo "Classificação: normal";
} else if($calculo >= 25 && $calculo <= 29.9) {
    echo "Classificação: sobrepeso";
} else if($calculo >= 30 && $calculo <= 39.9) {
    echo "Classificação: obesidade";
} else {
    echo "Classificação: obesidade";
}
