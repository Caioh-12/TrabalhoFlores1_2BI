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
Descritivo: FOR: Escreva um programa que use for para contar de 10 a 1 em ordem decrescente.
******************************************************************************/

/*
 Explicação do código:
 O laço 'for' inicia a variável $i com o valor 10 e decrementa ($i--) em 1 a cada iteração,
 até chegar a 1.
*/

for ($i = 10; $i >= 1; $i--) {
    echo $i . "\n";
}
?>