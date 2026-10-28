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
Descritivo: FOR: Crie um programa que use for para imprimir os números pares de 2 a 20.
******************************************************************************/

/*
 Explicação do código:
 O laço 'for' começa em 2 e incrementa de 2 em 2 ($i += 2) até atingir 20,
 imprimindo apenas valores pares.
*/

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "\n";
}
?>