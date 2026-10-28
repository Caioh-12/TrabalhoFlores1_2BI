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
Descritivo: Procedimento: Elabore um procedimento calcularMediaAluno que receba duas notas e imprima a média e se o aluno foi "Aprovado" (média >= 7) ou "Reprovado".
******************************************************************************/

/*
 Explicação do código:
 O procedimento calcula a média simples entre duas notas recebidas. 
 Avalia se a média é maior ou igual a 7.0 para imprimir o status de aprovação.
*/

function calcularMediaAluno($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;
    echo "Média calculada: " . number_format($media, 2) . " - Status: ";
    
    if ($media >= 7.0) {
        echo "APROVADO\n";
    } else {
        echo "REPROVADO\n";
    }
}

// Testes
calcularMediaAluno(8.0, 7.5);
calcularMediaAluno(5.0, 6.0);
?>