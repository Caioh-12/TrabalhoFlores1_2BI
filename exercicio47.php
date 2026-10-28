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
Descritivo: Função com String: Crie uma função contarVogais que receba uma string e retorne o número de vogais.
******************************************************************************/

/*
 Explicação do código:
 Converte a string para minúsculas e utiliza a função preg_match_all() com expressão 
 regular para identificar e contar todas as vogais (a, e, i, o, u com ou sem acentos).
*/

function contarVogais($texto) {
    preg_match_all('/[aeiouáéíóúãõâêîôû]/ui', $texto, $matches);
    return count($matches[0]);
}

// Teste
$palavra = "Linguagem PHP";
echo "A frase '{$palavra}' possui " . contarVogais($palavra) . " vogais.\n";
?>