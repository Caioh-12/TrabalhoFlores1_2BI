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
Descritivo: Array Associativo: Crie um array de produtos, onde cada produto é um array associativo com "nome" e "preço".
******************************************************************************/

/*
 Explicação do código:
 Declara uma lista (array multidimensional) contendo sub-arrays associativos, 
 representando uma lista de produtos comercializados com nome e preço.
*/

$produtos = [
    ["nome" => "Teclado Mecânico", "preco" => 250.00],
    ["nome" => "Mouse Gamer", "preco" => 120.50],
    ["nome" => "Monitor 144Hz", "preco" => 899.90],
    ["nome" => "Headset USB", "preco" => 180.00]
];

print_r($produtos);
?>