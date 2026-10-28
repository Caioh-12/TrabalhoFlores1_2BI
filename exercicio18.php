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
Descritivo: FOREACH: Usando o array de cidades do exercício 16, imprima cada cidade em uma nova linha usando foreach.
******************************************************************************/

/*
 Explicação do código:
 O laço 'foreach' percorre iterativamente cada item do array $cidades e 
 imprime seu valor em uma linha individual.
*/

$cidades = ["Maringá", "Curitiba", "Londrina", "Cascavel", "Ponta Grossa"];

foreach ($cidades as $cidade) {
    echo "Cidade: " . $cidade . "\n";
}
?>