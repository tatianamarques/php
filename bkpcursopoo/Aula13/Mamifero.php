<?php

require_once 'Animal.php';
class Mamifero extends Animal {
    protected $CorPelo;
    public function emitirSom() {
        echo "<p>Som de mamífero.</p>";
    }
    function getCorPelo() {
        return $this->CorPelo;
    }

    function setCorPelo($CorPelo) {
        $this->CorPelo = $CorPelo;
    }


}
