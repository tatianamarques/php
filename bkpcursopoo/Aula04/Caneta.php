<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    private $tampada;
    //pode substituir o construct pelo nome da classe
    public function __construct($m, $c,$p){
       // $this->cor = "Azul";
       // $this->tampar();
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
}
    public function tampar(){
        $this->tampada = true;
    }

    public function getModelo (){
        return $this->modelo;
    }
    public function setModelo ($m){
        $this->modelo = $m;
    }
    public function getPonta (){
        return $this->ponta;
    }
    public function setPonta ($p){
        $this->ponta = $p;
    }
}
