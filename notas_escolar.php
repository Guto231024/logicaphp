<?php

$Aluno = 'Gustavo';
$nota1 = 8.0;
$nota2 = 6.5;
$nota3 = 7.0;
$nota4 = 6.0;

$media = number_format(($nota1 + $nota2 + $nota3 + $nota4) / 4, 2, '.', '');

if ($media >= 7)
{
    echo "O aluno " . $Aluno . " esta aprovado com media " . $media;
}
elseif($media < 7 && $media >= 5){
    echo "O aluno " . $Aluno . " esta em recuperação com media " . $media;
}

else{
    echo "O aluno " . $Aluno . " esta reprovado com média " . $media;
}
