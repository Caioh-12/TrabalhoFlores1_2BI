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
Descritivo: DO-WHILE: Escreva um programa que use do-while para imprimir os números de 1 a 10.
******************************************************************************/

/*
 Explicação do código:
 O bloco 'do-while' garante que o código dentro do bloco seja executado pelo menos 
 uma vez antes de avaliar a condição no final ($i <= 10).
*/

$i = 1;
do {
    echo $i . "\n";
    $i++;
} while ($i <= 10);
?>