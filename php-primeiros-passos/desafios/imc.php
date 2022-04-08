<?php

$peso = 90;
$altura = 1.78;

$imc = $peso / ($altura ** 2);

if($imc < 18.5){
    echo "Peso Baixo";
} else if($imc > 18.5 && $imc < 24.9){
    echo "Peso Normal";
} else if($imc > 25 && $imc < 29.9){
    echo "Sobrepeso";
} else if($imc > 30 && $imc < 34.9){
    echo "Obesidade (Grau I)";
} else if($imc > 35 && $imc < 39.9){
    echo "Obesidade Severa (Grau II)";
} else if($imc > 40){
    echo "Obesidade Mórbida (Grau III)";
}