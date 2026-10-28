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
Descritivo: FOR/IF: Crie um programa para encontrar e imprimir todos os números primos entre 1 e 50.
******************************************************************************/

/*
 Explicação do código:
 O programa percorre os números de 2 até 50. Para cada número, testa se ele possui 
 algum divisor além de 1 e dele mesmo. Se não possuir, é classificado como primo e impresso.
*/

echo "Números primos entre 1 e 50:\n";

for ($n = 2; $n <= 50; $n++) {
    $ehPrimo = true;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) {
            $ehPrimo = false;
            break;
        }
    }
    if ($ehPrimo) {
        echo $n . " ";
    }
}
echo "\n";
?>