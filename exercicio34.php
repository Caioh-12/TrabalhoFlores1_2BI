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
Descritivo: Procedimento: Elabore um procedimento verificarParImpar que receba um número e imprima se ele é "Par" ou "Ímpar".
******************************************************************************/

/*
 Explicação do código:
 O procedimento calcula o resto da divisão do número por 2 ($numero % 2). 
 Se o resto for zero, imprime "Par", caso contrário "Ímpar".
*/

function verificarParImpar($numero) {
    if ($numero % 2 === 0) {
        echo "O número {$numero} é Par.\n";
    } else {
        echo "O número {$numero} é Ímpar.\n";
    }
}

// Testes
verificarParImpar(10);
verificarParImpar(7);
?>