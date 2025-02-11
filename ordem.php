<?php

// MANEIRA SIMPLIFICADA SEM FOREACH

$numeros = [5, 10, 32, 75, 21, 12, 2, 3 ,4];
$num_seq = implode(', ', $numeros);
echo '--ORDEM ORIGINAL-- <br> <br>';
echo $num_seq . '<br> <br>';

echo '--ORDEM CRESCENTE-- <br> <br>';
sort($numeros);
$num_seq = implode(', ', $numeros);
echo $num_seq . '<br> <br>';

echo '--ORDEM DECRESCENTE-- <br> <br>';
rsort($numeros);
$num_seq = implode(', ', $numeros);
echo $num_seq;





/*

USANDO FOREACH

$numeros = [5, 10, 32, 75, 21, 12, 2, 3 ,4];
echo '--ORDEM ORIGINAL-- <br> <br>';
foreach ($numeros as $numero) {
    echo $numero . '<br> <br>';
}


sort($numeros);
echo '--ORDEM CRESCENTE-- <br> <br>';
foreach ($numeros as $numero){
    echo $numero . '<br> <br>';
}

rsort($numeros);
echo '--ORDEM DECRESCENTE-- <br> <br>';
foreach ($numeros as $numero) {
    echo $numero . '<br> <br>';
}
*/ 