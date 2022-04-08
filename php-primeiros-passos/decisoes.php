<?php

$idade = 17;
$nome = 'Vinicius';
$numeroDePessoas = 3;

if ($idade >= 18)
{
    echo "Você tem $idade anos. Pode entrar sozinho";
} 
else if ($idade >= 16 && $numeroDePessoas > 1)
{
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar";
}
else
    echo "Você só tem $idade anos. Infelizmente, você não pode entrar";

echo  PHP_EOL . "Adeus!";