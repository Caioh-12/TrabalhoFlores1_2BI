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
Descritivo: Procedimento com Parâmetro: Crie um procedimento saudacaoUsuario que receba um nome como parâmetro e imprima "Olá, [nome]!".
******************************************************************************/

/*
 Explicação do código:
 O procedimento aceita um parâmetro do tipo string ($nome) e realiza a interpolação 
 de variáveis dentro da string da instrução echo.
*/

function saudacaoUsuario($nome) {
    echo "Olá, {$nome}!\n";
}

// Chamada do procedimento
saudacaoUsuario("Antony");
?>