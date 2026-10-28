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
Descritivo: Array Multidimensional: Crie uma matriz 3x3 (array de arrays) e preencha-a com números. Imprima o elemento da segunda linha e terceira coluna.
******************************************************************************/

/*
 Explicação do código:
 Uma matriz 3x3 é criada através de arrays aninhados. Em PHP os índices começam em 0,
 logo a segunda linha está no índice [1] e a terceira coluna no índice [2].
*/

$matriz = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];

// Segunda linha (índice 1), Terceira coluna (índice 2)
$elemento = $matriz[1][2];

echo "O elemento da segunda linha e terceira coluna é: " . $elemento . "\n";
?>