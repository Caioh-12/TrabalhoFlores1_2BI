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
Descritivo: Função: Elabore uma função converterParaMaiusculas que receba uma string e a retorne em letras maiúsculas.
******************************************************************************/

/*
 Explicação do código:
 Utiliza a função mb_strtoupper() (ou strtoupper) para converter todos os caracteres 
 da string fornecida em maiúsculas com suporte a acentuação.
*/

function converterParaMaiusculas($texto) {
    return mb_strtoupper($texto, 'UTF-8');
}

// Teste
$original = "engenharia de software - unicesumar";
$convertido = converterParaMaiusculas($original);

echo "Texto original: {$original}\n";
echo "Em maiúsculas: {$convertido}\n";
?>