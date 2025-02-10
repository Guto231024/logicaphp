<?php

$peso = 100;
$peso2 = 100;
$valor_arroba = number_format(($peso + $peso2) / 15, 2 , '.' , '');
$valor_dinheiro = number_format($valor_arroba * 250, 2, ',', '.');
$produtor = 'Victor'; 

echo 'O valor do arroba equivale a ' . $valor_arroba . ' Devera ser pago ao produtor ' . $produtor . ' R$' . $valor_dinheiro;






// valor de arroba vale 15kg