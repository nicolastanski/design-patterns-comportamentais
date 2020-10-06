<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Icms;
use Alura\DesignPattern\Orcamento;

require_once("../vendor/autoload.php");

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms());