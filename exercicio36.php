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
Descritivo: Procedimento: Crie um procedimento desenharLinha que imprima uma linha de 20 hífens --------------------.
******************************************************************************/

/*
 Explicação do código:
 O procedimento desenha uma linha separadora utilizando a função nativa str_repeat()
 para repetir o caractere hífen '-' 20 vezes.
*/

function desenharLinha() {
    echo str_repeat("-", 20) . "\n";
}

// Teste
desenharLinha();
echo "Texto entre linhas\n";
desenharLinha();
?>