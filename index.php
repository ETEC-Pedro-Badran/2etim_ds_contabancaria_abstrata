<?php

   
    require "contaEspecial.class.php";
    require "contaEstudante.class.php";
    require "contaPoupanca.class.php";


    $contaEspecial = new ContaEspecial("BANCO DO BRASIL");
    $contaEspecial->deposito(1000.00);
    $contaEspecial->deposito(50.00);
    $contaEspecial->saque(1100.00);
    $contaEspecial->getSaldo();
    echo "<h1>-----------------------------------------<h1>";

    $contaEstudante = new ContaEstudante("CAIXA FEDERAL");
    $contaEstudante->deposito(1000.00);
    $contaEstudante->saque(100.00);
    $contaEstudante->saque(1000.00);
    $contaEstudante->getSaldo();
    echo "<h1>-----------------------------------------<h1>";

    $contaPoupanca = new ContaPoupanca("NuBanck");
    $contaPoupanca->deposito(1000.00);
    $contaPoupanca->saque(1110.00);
    $contaPoupanca->getSaldo();
    echo "<h1>-----------------------------------------<h1>";

