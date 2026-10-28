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
Descritivo: Função: Faça uma função gerarArrayPares que receba um número n e retorne um array com todos os números pares de 0 até n.
******************************************************************************/

/*
 Explicação do código:
 A função instancia um array vazio $pares, percorre com um laço 'for' de 0 até $n 
 incrementando de 2 em 2 e adiciona cada número par ao array antes de retorná-lo.
*/

function gerarArrayPares($n) {
    $pares = [];
    for ($i = 0; $i <= $n; $i += 2) {
        $pares[] = $i;
    }
    return $pares;
}

// Teste
$resultado = gerarArrayPares(20);
echo "Números pares até 20: " . implode(", ", $resultado) . "\n";
?>