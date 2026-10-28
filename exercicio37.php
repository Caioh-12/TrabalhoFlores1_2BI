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
Descritivo: Procedimento com Múltiplos Parâmetros: Crie um procedimento mostrarDados que receba nome, idade e cidade e os imprima de forma organizada.
******************************************************************************/

/*
 Explicação do código:
 Aceita três parâmetros ($nome, $idade, $cidade) e os exibe formatados em bloco de texto.
*/

function mostrarDados($nome, $idade, $cidade) {
    echo "=== DADOS DO USUÁRIO ===\n";
    echo "Nome  : {$nome}\n";
    echo "Idade : {$idade} anos\n";
    echo "Cidade: {$cidade}\n";
    echo "------------------------\n";
}

// Teste
mostrarDados("Carlos Daniel", 21, "Maringá");
?>