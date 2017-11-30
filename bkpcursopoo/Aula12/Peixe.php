<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;
    
    public function soltarBolha(){
         echo "<p>Soltou uma bolha.</p>";
    }
    
    public function alimentar() {
        echo "<p>Comendo substâncias</p>";
    }

    public function emitirSom() {
         echo "<p>Peixe não emite som.</p>";
    }

    public function locomover() {
         echo "<p>Nadando.</p>";
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }


}
