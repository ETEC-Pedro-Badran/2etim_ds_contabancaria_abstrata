<?php
    require_once "contaAbstrata.class.php";

    

    class ContaEstudante extends ContaAbstrata{
        private $nome;
        private $saldo = 0.0;



        function __construct($nome){
            $this->nome = $nome;
        }

        function getNome(){
            return $this->nome;
        }

        function deposito($valor)
        {
            echo "<h1>Conta $this->nome recebeu o deposito R\$ $valor <h1>";
            $this->saldo += $valor;
        }

        function saque($valor)
        {
            echo "<h1>Conta $this->nome efetuado saque de R\$ $valor <h1>";
            if ($this->saldo - $valor < 0) {
                echo "<h1>Saque não pode ser efetuado. Saldo insuficiente!<h1>";
            } else  {
                $this->saldo -= $valor;
            }
        }
            
        function getsaldo()
        {
            echo "<h1>Conta de estudante $this->nome saldo $this->saldo <h1>";
        }


    }