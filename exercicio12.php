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
Descritivo: DO-WHILE: Crie um menu de opções (1. Iniciar, 2. Parar, 3. Sair) e use do-while para mostrar o menu até que o usuário escolha "Sair".
******************************************************************************/

/*
 Explicação do código:
 Exibe o menu no bloco 'do' e lê a escolha do usuário. O laço repete até que a 
 opção digitada seja a opção 3 (Sair).
*/

do {
    echo "\n=== MENU DE OPÇÕES ===\n";
    echo "1. Iniciar\n";
    echo "2. Parar\n";
    echo "3. Sair\n";
    $opcao = (int)readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            echo ">> Sistema Iniciado!\n";
            break;
        case 2:
            echo ">> Sistema Parado!\n";
            break;
        case 3:
            echo ">> Encerrando programa...\n";
            break;
        default:
            echo ">> Opção inválida! Tente novamente.\n";
            break;
    }
} while ($opcao !== 3);
?>