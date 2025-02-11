<?php
 
$taxas = [
    'USD' => 6.00,
    'EUR' => 5.50,
    'GBP' => 6.30,
    'ARS' => 0.05,
];

$valor_real = 100;
echo '<strong>Valor em Reais: R$' . $valor_real . '<br> <br></strong>';
echo 'Valor em Dolar: US$ '. number_format($valor_real / $taxas['USD'], 2, ',', '.') . '<br> <br>';
echo 'Valor em Euro: EU$ '. number_format($valor_real / $taxas['EUR'], 2, ',', '.') . '<br> <br>';
echo 'Valor em Libra: L$ '. number_format($valor_real / $taxas['GBP'], 2, ',', '.') . '<br> <br>';
echo 'Valor em Peso Argentino: P$ '. number_format($valor_real / $taxas['ARS'], 2, ',', '.') . '<br> <br>';