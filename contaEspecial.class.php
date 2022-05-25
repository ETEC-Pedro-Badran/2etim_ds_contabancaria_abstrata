<?php
    require_once "contaAbstrata.class.php";

    

    class ContaEspecial extends ContaAbstrata{
        private $nome;
        private $juros = 10.0;
        private $tx = 1.0;
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
            $this->saldo -= $valor;
        }
            
        

        function getsaldo()
        {
            $valor = 0.0; 
            if ($this->saldo < 0) {
                $valor = $this->saldo * (1+($this->juros/100));
            }
            $valor += $valor * (1+($this->tx/100));

            echo "<h1>Conta $this->nome saldo  $valor <h1>";
        }


    }