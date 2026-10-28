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
Descritivo: Procedimento: Crie um procedimento contagemRegressiva que receba um número e imprima uma contagem regressiva a partir dele até 0.
******************************************************************************/

/*
 Explicação do código:
 O procedimento executa um laço 'for' em ordem decrescente, partindo do valor
 do parâmetro $numero fornecido até atingir 0.
*/

function contagemRegressiva($numero) {
    echo "Iniciando contagem regressiva a partir de {$numero}:\n";
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . "... ";
    }
    echo "FIM!\n";
}

// Teste
contagemRegressiva(5);
?>