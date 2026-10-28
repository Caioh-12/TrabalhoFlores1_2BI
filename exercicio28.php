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
Descritivo: Array/Busca: Crie um array de frutas. Escreva um código que verifique se a fruta "Maçã" existe no array.
******************************************************************************/

/*
 Explicação do código:
 A função in_array() busca um valor dentro do array e retorna verdadeiro caso
 o valor exista.
*/

$frutas = ["Banana", "Morango", "Maçã", "Laranja", "Uva"];
$busca = "Maçã";

if (in_array($busca, $frutas)) {
    echo "A fruta '{$busca}' foi encontrada no array!\n";
} else {
    echo "A fruta '{$busca}' NÃO existe no array.\n";
}
?>