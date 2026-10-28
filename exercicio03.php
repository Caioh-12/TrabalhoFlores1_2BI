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
Descritivo: FOR: Faça um programa que exiba a tabuada do 5, de 1 a 10.
******************************************************************************/

/*
 Explicação do código:
 O programa itera de 1 a 10 e multiplica cada número por 5, 
 imprimindo a equação formatada.
*/

$numero = 5;
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "{$numero} x {$i} = {$resultado}\n";
}
?>