<?php
require_once 'Animal.php';
class Ave extends Animal {
    private $corPena;
    
    public function fazerNinho(){
        echo "<p>Construiu ninho.</p>";
    }
    
    public function alimentar() {
        echo "<p>Comendo frutas.</p>";
    }

    public function emitirSom() {
        echo "<p>Som de ave.</p>";
    }

    public function locomover() {
        echo "<p>Voando.</p>";
    }
    
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }


}
