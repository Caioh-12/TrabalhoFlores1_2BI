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
Descritivo: Array Heterogêneo (Associativo): Crie um array associativo para armazenar os dados de um aluno (nome, idade, curso).
******************************************************************************/

/*
 Explicação do código:
 Define um array associativo em PHP onde cada valor é indexado por uma chave textual (string),
 permitindo armazenar diferentes tipos de dados do aluno.
*/

$aluno = [
    "nome" => "Carlos Zumbi",
    "idade" => 20,
    "curso" => "Engenharia de Software"
];

print_r($aluno);
?>