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
Descritivo: Array Associativo/FOREACH: Usando o array do exercício 21, imprima cada dado no formato "chave: valor".
******************************************************************************/

/*
 Explicação do código:
 O laço foreach ($array as $chave => $valor) extrai tanto a chave nomeada quanto o valor
 correspondente de um array associativo a cada iteração.
*/

$aluno = [
    "nome" => "Carlos Zumbi",
    "idade" => 20,
    "curso" => "Engenharia de Software"
];

foreach ($aluno as $chave => $valor) {
    echo ucfirst($chave) . ": " . $valor . "\n";
}
?>