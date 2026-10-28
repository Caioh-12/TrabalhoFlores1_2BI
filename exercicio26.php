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
Descritivo: Array/Funções Nativas: Dado o array [10, 2, 5, 8, 1], ordene-o em ordem crescente usando sort().
******************************************************************************/

/*
 Explicação do código:
 A função nativa sort() ordena os elementos de um array numericamente de forma 
 crescente e reordena suas chaves.
*/

$numeros = [10, 2, 5, 8, 1];

echo "Array original: " . implode(", ", $numeros) . "\n";

sort($numeros);

echo "Array ordenado (crescente): " . implode(", ", $numeros) . "\n";
?>