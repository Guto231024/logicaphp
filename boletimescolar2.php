<?php
$boletim = array (
    'aluno1' => array('nome' => 'Gustavo','idade' => '17','Turma' => '3001',),
    'bimestre0.1' => array('Portugues' => 8.0,'Matematica' => 7.0,  'Historia' => 6.4,'Quimica' => 5.4,),
    'bimestre0.2' => array( 'Portugues' => 8.0, 'Matematica' => 7.0,'Historia' => 6.4, 'Quimica' => 5.4,),
    'bimestre0.3' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4,),
    'bimestre0.4' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4,),

    'aluno2' => array('nome' => 'Amanda','idade' => '19','Turma' => '3001', ),
    'bimestre1.1' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4,),
    'bimestre1.2' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4,),
    'bimestre1.3' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4, ),
    'bimestre1.4' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4, ),

    'aluno3' => array('nome' => 'Victor','idade' => '15','Turma' => '3001',),
    'bimestre2.1' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4, ),
    'bimestre2.2' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4,),
    'bimestre2.3' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4,),
    'bimestre2.4' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4,),

    'aluno4' => array('nome' => 'Bernardo','idade' => '15','Turma' => '3001',),
    'bimestre3.1' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4,),
    'bimestre3.2' => array('Portugues' => 8.0, 'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4,),
    'bimestre3.3' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4,),
    'bimestre3.4' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4,),
     
    'aluno5' => array('nome' => 'Thiago','idade' => '15','Turma' => '3001',),
    'bimestre4.1' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4,),
    'bimestre4.2' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4,),
    'bimestre4.3' => array('Portugues' => 8.0,'Matematica' => 7.0,'Historia' => 6.4,'Quimica' => 5.4, ),
    'bimestre4.4' => array('Portugues' => 8.0, 'Matematica' => 7.0, 'Historia' => 6.4, 'Quimica' => 5.4,)

);

//ALUNO 1
echo '<strong>ALUNO</strong> <br>';
foreach ($boletim['aluno1'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>PRIMEIRO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre0.1'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>SEGUNDO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre0.2'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>TERCEIRO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre0.3'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>QUARTO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre0.4'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

//ALUNO 2
echo '<strong>ALUNO</strong> <br>';
foreach ($boletim['aluno2'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>PRIMEIRO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre1.1'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>SEGUNDO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre1.2'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>TERCEIRO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre1.3'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>QUARTO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre1.4'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

//ALUNO 3

echo '<strong>ALUNO</strong> <br>';
foreach ($boletim['aluno3'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>PRIMEIRO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre2.1'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>SEGUNDO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre2.2'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>TERCEIRO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre2.3'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>QUARTO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre2.4'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

//ALUNO 4

echo '<strong>ALUNO</strong> <br>';
foreach ($boletim['aluno4'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>PRIMEIRO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre3.1'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>SEGUNDO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre3.2'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>TERCEIRO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre3.3'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>QUARTO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre3.4'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

//ALUNO 5

echo '<strong>ALUNO</strong> <br>';
foreach ($boletim['aluno5'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>PRIMEIRO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre4.1'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>SEGUNDO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre4.2'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>TERCEIRO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre4.3'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';

echo '<strong>QUARTO BIMESTRE</strong> <br>';
foreach ($boletim['bimestre4.4'] as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';


