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
Descritivo: WHILE: Escreva um programa que leia números do usuário até que ele digite 0 e, no final, mostre a soma de todos os números digitados.
******************************************************************************/

/*
 Explicação do código:
 Mantém um acumulador $soma. Em um laço while, lê entradas do usuário até que 0 seja informado,
 somando cada entrada válida e exibindo o total no final.
*/

$soma = 0;
while (true) {
    $numero = (int)readline("Digite um número (0 para sair): ");
    if ($numero === 0) {
        break;
    }
    $soma += $numero;
}

echo "A soma total dos números digitados é: " . $soma . "\n";
?>