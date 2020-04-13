<?php
/*
 * Supondo que alguém vá a uma boate, essa pessoa só poderá entrar
 * se for maior de 16 ou acompanhado de alguém maior de 18.
 */

$idade = 16;
$numDePessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL .PHP_EOL;

$resposta = $idade < 18 ? "Você tem $idade anos. Não pode entrar!" : "Você tem $idade anos. Pode entrar!"; //If Ternário <3

echo $resposta;
echo PHP_EOL. "Adeus!" .PHP_EOL;