<?php

require_once 'Lobo.php';
class Cachorro extends Lobo {
    public function enterrarOsso() {
        echo "<p>Enterrou</p>";
    }
    public function abanarRabo() {
         echo "<p>Abanando rabo.</p>";
    }
    public function emitirSom() {
        echo "<p>Au, au, au.</p>";
    }
}
