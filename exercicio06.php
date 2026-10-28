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
Descritivo: WHILE: Escreva um programa que use enquanto/while para imprimir os números de 1 a 10.
******************************************************************************/

/*
 Explicação do código:
 O laço 'while' verifica a condição ($i <= 10) antes de cada repetição.
 Imprime $i e depois incrementa seu valor manualmente dentro do bloco.
*/

$i = 1;
while ($i <= 10) {
    echo $i . "\n";
    $i++;
}
?>