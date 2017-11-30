<?php
require_once 'Aluno.php';
class Tecnico extends Aluno {
    private $regProf;
    public function praticar() {
        echo "<p>Está praticando.</p>";
    }
    function getRegProf() {
        return $this->regProf;
    }

    function setRegProf($regProf) {
        $this->regProf = $regProf;
    }


}
