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
Descritivo: FOR: Crie um programa que calcule e imprima a soma dos números de 1 a 100.
******************************************************************************/

/*
 Explicação do código:
 Inicializamos uma variável de acúmulo $soma em 0. Em seguida, percorremos de 1 a 100 
 adicionando o valor de $i a $soma. Por fim, exibimos o total acumulado.
*/

$soma = 0;
for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}

echo "A soma dos números de 1 a 100 é: " . $soma . "\n";
?>