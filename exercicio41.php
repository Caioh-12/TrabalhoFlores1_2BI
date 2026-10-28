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
Descritivo: Função: Crie uma função chamada somar que receba dois números e retorne a soma deles.
******************************************************************************/

/*
 Explicação do código:
 A função possui o comando 'return' para enviar o resultado da operação matemática 
 de volta para o ponto onde foi chamada.
*/

function somar($a, $b) {
    return $a + $b;
}

// Teste
$resultado = somar(15, 27);
echo "A soma é: " . $resultado . "\n";
?>