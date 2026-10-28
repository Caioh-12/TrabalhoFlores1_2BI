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
Descritivo: Procedimento: Crie um procedimento chamado saudacao que imprima "Bem-vindo ao PHP!".
******************************************************************************/

/*
 Explicação do código:
 Um procedimento é uma função que não possui a instrução 'return'. Ela executa diretamente
 a impressão do texto configurado quando chamada.
*/

function saudacao() {
    echo "Bem-vindo ao PHP!\n";
}

// Chamada do procedimento
saudacao();
?>