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
Descritivo: Array/FOR: Crie um array com os 7 dias da semana e imprima-os usando um laço for.
******************************************************************************/

/*
 Explicação do código:
 Utiliza a função count() para obter a quantidade de elementos do array de dias
 e percorre seus índices de 0 até count()-1 usando um laço 'for' tradicional.
*/

$diasSemana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];

for ($i = 0; $i < count($diasSemana); $i++) {
    echo "Dia " . ($i + 1) . ": " . $diasSemana[$i] . "\n";
}
?>