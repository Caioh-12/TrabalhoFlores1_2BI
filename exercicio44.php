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
Descritivo: Função: Escreva uma função calcularAreaRetangulo que receba a largura e a altura e retorne a área.
******************************************************************************/

/*
 Explicação do código:
 A área de um retângulo é calculada multiplicando a largura pela altura ($largura * $altura).
 A função retorna este valor.
*/

function calcularAreaRetangulo($largura, $altura) {
    return $largura * $altura;
}

// Teste
$largura = 5.5;
$altura = 10.0;
$area = calcularAreaRetangulo($largura, $altura);

echo "Área do retângulo ({$largura} x {$altura}): " . $area . " m²\n";
?>