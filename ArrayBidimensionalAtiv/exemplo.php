<?php
    // Array bidimensional
    $estados = array(
    array('sigla' => 'SP', 'nome' => 'São Paulo'),
    array('sigla' => 'RJ', 'nome' => 'Rio de Janeiro'),
    array('sigla' => 'MG', 'nome' => 'Minas Gerais')
    );

    //Como acessar
    echo $estados[0]['sigla']; // Saída: SP
    echo $estados[1]['nome']; // Saída: Rio de Janeiro

            ///////////

    //Array multidimensional
    $produtos = array(
        'eletrodomesticos' => array(
            array('nome' => 'Geladeira', 'preco' => 3500),
            array('nome' => 'Fogão', 'preco' => 1500)
        ),
        'eletronicos' => array(
        array('nome' => 'Smartphone', 'preco' => 2500),
        array('nome' => 'Notebook', 'preco' => 4500)
        )
    );

    //Como acessar
    echo $produtos['eletrodomesticos'][0]['nome']; // Saída: Geladeira
    echo $produtos['eletronicos'][1]['preco']; // Saída: 4500
?>