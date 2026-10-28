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
Descritivo: Array/Funções Nativas: Crie um array de números e use a função count() para mostrar quantos elementos ele possui.
******************************************************************************/

/*
 Explicação do código:
 A função nativa count() retorna o número total de elementos presentes dentro do array.
*/

$numeros = [5, 12, 18, 24, 30, 42, 50, 61];
$totalElementos = count($numeros);

echo "O array possui " . $totalElementos . " elementos.\n";
?>