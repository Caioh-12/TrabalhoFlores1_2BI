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
Descritivo: WHILE: Faça um programa que imprima os múltiplos de 3, de 3 a 30.
******************************************************************************/

/*
 Explicação do código:
 A variável inicia em 3 e, dentro do laço while que roda até 30, é incrementada em 3
 a cada repetição para exibir os múltiplos.
*/

$i = 3;
while ($i <= 30) {
    echo $i . "\n";
    $i += 3;
}
?>