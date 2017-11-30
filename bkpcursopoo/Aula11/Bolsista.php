<?php

require_once 'Aluno.php';
class Bolsista extends Aluno {
   private $bolsa;
   
   public function renovarBolsa() {
       
   }
   //@sobrepor
   public function pagarMensalidade() {
    
}
function getBolsa() {
    return $this->bolsa;
}

function setBolsa($bolsa) {
    $this->bolsa = $bolsa;
}


}
