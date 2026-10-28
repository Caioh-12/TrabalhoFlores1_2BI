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
Descritivo: Função: Escreva uma função fatorial que receba um número e retorne seu fatorial.
******************************************************************************/

/*
 Explicação do código:
 Calcula o fatorial do número recebido por meio de um laço iterativo, 
 multiplicando $fatorial por cada número inteiro de 1 até $n.
*/

function fatorial($n) {
    if ($n < 0) return null; // Não existe fatorial de número negativo
    $fatorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fatorial *= $i;
    }
    return $fatorial;
}

// Teste
$num = 5;
echo "O fatorial de {$num}! é: " . fatorial($num) . "\n";
?>