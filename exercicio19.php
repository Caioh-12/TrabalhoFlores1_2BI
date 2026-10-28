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
Descritivo: FOREACH: Usando o array de números do exercício 17, calcule e imprima a soma de todos os números com foreach.
******************************************************************************/

/*
 Explicação do código:
 O laço 'foreach' percorre o array de números e acumula a soma de todos os seus 
 elementos na variável $soma.
*/

$numeros = [10, 25, 30, 42, 55, 68, 71, 89, 93, 100];
$soma = 0;

foreach ($numeros as $num) {
    $soma += $num;
}

echo "A soma de todos os elementos do array é: " . $soma . "\n";
?>