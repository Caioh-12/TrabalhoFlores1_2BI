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
Descritivo: Função: Crie uma função inverterString que receba uma string e a retorne invertida, sem usar a função strrev().
******************************************************************************/

/*
 Explicação do código:
 A função obtém a largura/comprimento da string e a percorre do último caractere 
 até o primeiro (em ordem decrescente), concatenando em uma nova string e retornando-a.
*/

function inverterString($texto) {
    $invertida = "";
    $tamanho = mb_strlen($texto, 'UTF-8');
    
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $invertida .= mb_substr($texto, $i, 1, 'UTF-8');
    }
    
    return $invertida;
}

// Teste
$original = "Engenharia";
echo "String original : {$original}\n";
echo "String invertida: " . inverterString($original) . "\n";
?>