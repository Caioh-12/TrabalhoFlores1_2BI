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
Descritivo: FOREACH/IF: Dado um array de números [12, 5, 23, 18, 9, 45], imprima apenas os números maiores que 20.
******************************************************************************/

/*
 Explicação do código:
 O laço foreach percorre cada elemento do array e a estrutura condicional 'if'
 filtra e imprime somente os valores estritamente maiores que 20.
*/

$numeros = [12, 5, 23, 18, 9, 45];

echo "Números maiores que 20:\n";
foreach ($numeros as $num) {
    if ($num > 20) {
        echo $num . "\n";
    }
}
?>