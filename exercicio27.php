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
Descritivo: Array Associativo: Crie um array com as notas de um aluno em 4 disciplinas e calcule a média.
******************************************************************************/

/*
 Explicação do código:
 Cria um array associativo contendo nome da disciplina e a nota correspondente.
 Soma todas as notas através da função array_sum() e divide pelo número total de disciplinas.
*/

$notas = [
    "Matemática" => 8.5,
    "Programação" => 9.0,
    "Banco de Dados" => 7.5,
    "Engenharia de Software" => 10.0
];

$soma = array_sum($notas);
$media = $soma / count($notas);

echo "Notas do aluno:\n";
foreach ($notas as $disciplina => $nota) {
    echo "- {$disciplina}: {$nota}\n";
}

echo "Média geral do aluno: " . number_format($media, 2) . "\n";
?>