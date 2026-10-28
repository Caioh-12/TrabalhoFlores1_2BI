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
Descritivo: Procedimento: Faça um procedimento que receba um array associativo de um carro (marca, modelo, ano) e imprima seus dados.
******************************************************************************/

/*
 Explicação do código:
 O procedimento aceita um array associativo contendo os dados do veículo e exibe 
 suas propriedades utilizando as chaves especificadas.
*/

function imprimirCarro($carro) {
    echo "=== DADOS DO VEÍCULO ===\n";
    echo "Marca : " . ($carro['marca'] ?? 'N/I') . "\n";
    echo "Modelo: " . ($carro['modelo'] ?? 'N/I') . "\n";
    echo "Ano   : " . ($carro['ano'] ?? 'N/I') . "\n";
    echo "------------------------\n";
}

// Teste
$meuCarro = [
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "ano" => 2022
];

imprimirCarro($meuCarro);
?>