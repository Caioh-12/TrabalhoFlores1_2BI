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
Descritivo: Função: Elabore uma função ehPrimo que receba um número e retorne true se ele for primo e false caso contrário.
******************************************************************************/

/*
 Explicação do código:
 Verifica se o número informado é maior que 1 e testa se possui divisores até a sua 
 raiz quadrada. Retorna um valor booleano (true ou false).
*/

function ehPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }
    return true;
}

// Testes
$n = 17;
echo "O número {$n} é primo? " . (ehPrimo($n) ? "Sim (true)" : "Não (false)") . "\n";
?>