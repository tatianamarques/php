<?php
require_once 'Aluno.php';
class Tecnico {
    private $registroProf;
    
    public function praticar() {
        
    }
    
    function getRegistroProf() {
        return $this->registroProf;
    }

    function setRegistroProf($registroProf) {
        $this->registroProf = $registroProf;
    }


}
