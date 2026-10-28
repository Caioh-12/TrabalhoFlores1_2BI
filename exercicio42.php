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
Descritivo: Função: Crie uma função maiorNumero que receba dois números e retorne o maior entre eles.
******************************************************************************/

/*
 Explicação do código:
 Compara dois valores usando estruturas condicionais (ou a função max) e 
 retorna aquele de maior valor numérico.
*/

function maiorNumero($a, $b) {
    return ($a >= $b) ? $a : $b;
}

// Teste
echo "O maior número entre 45 e 89 é: " . maiorNumero(45, 89) . "\n";
?>