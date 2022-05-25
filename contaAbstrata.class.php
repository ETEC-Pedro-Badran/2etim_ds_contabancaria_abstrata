<?php

  abstract class ContaAbstrata{
      
     abstract function deposito($valor);


     abstract function saque($valor);


     abstract function getsaldo();



  }