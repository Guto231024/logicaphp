<?php

$alunos = ['Aluno' => 'Gustavo',
            'Materia' => 'Português',
             'Nota' => 7.0,];

foreach ($alunos as $key => $aluno) {
    echo '<br> <br>' . $key . ': ' . $aluno;
    
    
}

echo '<br> <br>';

if ( $alunos['Nota'] >= 7.0 ) {
    echo ' O aluno '. $alunos['Aluno'] .' esta Aprovado em ' . $alunos['Materia'];
}
elseif($alunos['Nota'] < 7 && $alunos['Nota'] > 5 ){
    echo 'O aluno '. $alunos['Aluno'] .' esta de Recuperação em ' . $alunos['Materia'];
}
else {
    echo 'O aluno '. $alunos['Aluno'] .' esta Reprovado em' . $alunos['Materia'];
}