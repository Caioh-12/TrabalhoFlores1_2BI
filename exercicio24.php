<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT2
Componentes:
    26011438-2 - Antony Vasselai
    26008093-2 - Caio Henrique da Silva
    26009401-2 - Carlos Daniel Porto Camara
    26002762-2 - Yago Teixeira
    26005197-2 - João Victor Casagrande
Data: 28 de Outubro de 2026
Descritivo: FOREACH Aninhado: Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto.
******************************************************************************/

/*
 Explicação do código:
 O primeiro foreach percorre cada item da lista de produtos.
 Em seguida, acessamos diretamente as chaves "nome" e "preco" formatando o resultado.
*/

$produtos = [
    ["nome" => "Teclado Mecânico", "preco" => 250.00],
    ["nome" => "Mouse Gamer", "preco" => 120.50],
    ["nome" => "Monitor 144Hz", "preco" => 899.90],
    ["nome" => "Headset USB", "preco" => 180.00]
];

foreach ($produtos as $produto) {
    echo "Produto: " . $produto["nome"] . " | Preço: R$ " . number_format($produto["preco"], 2, ',', '.') . "\n";
}
?>