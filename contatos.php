<?php

$dados = array (
    'nome' => 'Gustavo',
    'idade' => '01/01/2000',
    'documentos' => array(
        'id' => '123.456.789',
        'cpf' => '123.456.789',
        'cnh' => '123456789',
    ),
    'endereço' => array(
        'Tipo' => 'Rua A',
        'logradouro' => '',
        'num' => '000',
        'complemento' => 'casa',
        'bairro' => 'santacruz',
        'uf' => 'rj',
        'cep' => '124567890',
    ),
    'filiaçao' => array(
        'nomepai' => 'soriomar',
        'nomemae' => 'luciana',
    ),
    'contatos' => array(
        'celular' => '24 88888-8888',
        'fixo' => '',
        'email' => 'gustavo@gmail.com',
    )
);

echo '----<strong>CLIENTE</strong>----';
echo '<br>' . $dados['nome'] . '<br>' ;
echo '<br>' . $dados['idade'] . '<br>';

echo '<br> <br>' . '-----<strong>DOCUMENTOS</strong>------';

foreach($dados['documentos'] as $key => $value){
    echo '<br>' . $key . ': ' . $value . '<br>';
}

echo '<br> <br>' . '------<strong>ENDEREÇO</strong>-------';

foreach ($dados['endereço'] as $key => $value){
    echo '<br>' . $key . ': ' . $value . '<br>';
}
echo '<br> <br>' . '------<strong>FILIAÇÃO</strong>--------';

foreach ($dados['filiaçao'] as $key => $value){
    echo '<br>' . $key . ': ' . $value . '<br>';
}

echo '<br> <br>' . '-------<strong>CONTATOS</strong>--------';

foreach ($dados['contatos'] as $key => $value){
    echo '<br>' . $key . ': ' . $value . '<br>' ;
}
