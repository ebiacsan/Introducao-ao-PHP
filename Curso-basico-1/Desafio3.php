<?php
//Fazer um programa de IMC e dizer se está com IMC abaixo, normal ou acima do recomendado:

$altura = 1.84;
$peso = 102;
//cálculo
$imc = $peso/($altura**2);

echo "Seu IMC é de $imc." .PHP_EOL. "Você está com o peso ";

if($imc < 18.5){
    echo "muito abaixo";
} else if($imc < 25){
    echo "dentro";
} elseif($imc < 30){
    echo "acima";
} else{
    echo "muito acima";
}

echo " do recomendado" .PHP_EOL;
