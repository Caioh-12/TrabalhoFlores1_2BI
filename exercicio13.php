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
Descritivo: DO-WHILE: Faça um programa que solicite uma senha ao usuário. O programa só deve continuar quando a senha correta ("1234") for digitada.
******************************************************************************/

/*
 Explicação do código:
 O do-while solicita a senha ao menos uma vez e continua requisitando enquanto
 a string informada for diferente do valor esperado ("1234").
*/

$senhaCorreta = "1234";

do {
    $senhaDigitada = readline("Digite a senha de acesso: ");
    if ($senhaDigitada !== $senhaCorreta) {
        echo "Senha incorreta! Tente novamente.\n";
    }
} while ($senhaDigitada !== $senhaCorreta);

echo "Acesso concedido com sucesso!\n";
?>