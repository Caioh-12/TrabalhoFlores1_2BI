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
Descritivo: Procedimento: Crie um procedimento mostrarTabuada que receba um número e imprima sua tabuada de 1 a 10.
******************************************************************************/

/*
 Explicação do código:
 O procedimento recebe um parâmetro inteiro ($numero) e utiliza um laço for interno 
 para imprimir os múltiplos desse número de 1 a 10.
*/

function mostrarTabuada($numero) {
    echo "=== Tabuada do {$numero} ===\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "{$numero} x {$i} = " . ($numero * $i) . "\n";
    }
}

// Chamada do procedimento
mostrarTabuada(7);
?>