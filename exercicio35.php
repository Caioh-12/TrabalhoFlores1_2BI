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
Descritivo: Procedimento com Array: Crie um procedimento imprimirArray que receba um array e imprima todos os seus elementos.
******************************************************************************/

/*
 Explicação do código:
 O procedimento recebe um vetor como argumento e o percorre usando foreach, 
 exibindo cada elemento sequencialmente.
*/

function imprimirArray($array) {
    echo "Elementos do Array:\n";
    foreach ($array as $indice => $item) {
        echo "[{$indice}] => {$item}\n";
    }
}

// Teste
$dados = ["PHP", "JavaScript", "Python", "C++"];
imprimirArray($dados);
?>