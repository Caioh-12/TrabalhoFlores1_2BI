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
Descritivo: WHILE: Crie um programa que peça ao usuário para adivinhar um número (ex: 7) e continue pedindo até que ele acerte.
******************************************************************************/

/*
 Explicação do código:
 O código simula ou lê via terminal (readline) palpites de números.
 O laço 'while' é mantido ativo enquanto o palpite informado for diferente do número secreto (7).
*/

$numeroSecreto = 7;
$palpite = null;

// Exemplo para execução em linha de comando (CLI)
echo "Tente adivinhar o número secreto entre 1 e 10:\n";

do {
    // Para teste automatizado em ambiente sem entrada interativa:
    // $palpite = rand(1, 10);
    $palpite = (int)readline("Digite o seu palpite: ");
    if ($palpite !== $numeroSecreto) {
        echo "Incorreto! Tente novamente.\n";
    }
} while ($palpite !== $numeroSecreto);

echo "Parabéns! Você acertou o número secreto ({$numeroSecreto}).\n";
?>