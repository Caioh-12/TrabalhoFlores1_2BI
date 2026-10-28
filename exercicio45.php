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
Descritivo: Função com Array: Crie uma função obterPrimeiroElemento que receba um array e retorne seu primeiro elemento.
******************************************************************************/

/*
 Explicação do código:
 Retorna o valor associado ao primeiro índice [0] do array ou utiliza reset()
 para retornar com segurança o primeiro elemento.
*/

function obterPrimeiroElemento($array) {
    if (empty($array)) {
        return null;
    }
    return $array[0] ?? reset($array);
}

// Teste
$frutas = ["Morango", "Abacaxi", "Manga"];
echo "Primeiro elemento do array: " . obterPrimeiroElemento($frutas) . "\n";
?>