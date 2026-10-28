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
Descritivo: DO-WHILE: Escreva um programa que leia um número e o imprima. O programa deve repetir até que o número lido seja negativo.
******************************************************************************/

/*
 Explicação do código:
 Lê um número do usuário, imprime-o na tela e verifica se é menor que zero.
 Assim que for negativo, o laço do-while é interrompido.
*/

do {
    $num = (float)readline("Digite um número (negativo para sair): ");
    echo "Número digitado: {$num}\n";
} while ($num >= 0);

echo "Número negativo detectado. Programa finalizado.\n";
?>