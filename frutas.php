<?php
$frutas = array(
    'maça',
    'banana',
    'uva',
    'laranja',
    'manga',
);

foreach ($frutas as $value) {
    echo $value . '<br>';
}

echo'-------------------------<br>';
$frutas [] = 'morango';      //adicionar um elemento no final do array
foreach ($frutas as $value) {
    echo $value . '<br>';
}

echo'-------------------------<br>';
array_shift($frutas);       //remover o pirmeiro elemento
 unset($frutas[1]);        //remover o elemento atraves do indice
foreach ($frutas as $value) {
    echo $value . '<br>';
}