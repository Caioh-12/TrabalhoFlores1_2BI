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
Descritivo: WHILE: Crie um programa que conte quantos dígitos tem um número inteiro fornecido pelo usuário.
******************************************************************************/

/*
 Explicação do código:
 O programa obtém a quantidade de dígitos dividindo o número por 10 sucessivamente 
 até que chegue a zero, ou convertendo e tratando o tamanho da representação absoluta do número.
*/

$numero = (int)readline("Digite um número inteiro: ");
$temp = abs($numero);
$contador = 0;

if ($temp === 0) {
    $contador = 1;
} else {
    while ($temp > 0) {
        $temp = (int)($temp / 10);
        $contador++;
    }
}

echo "O número {$numero} possui {$contador} dígito(s).\n";
?>