<?php

abstract class Vehiculo {
    private $matricula;
    private $modelo;
    
    public function Vehiculo($matricula = ' ', $modelo = ' ') {
        $this->matricula = $matricula;
        $this->modelo = $modelo;
    }
    
    public function getMatricula() {
        return $this->matricula;
    }

    public function getModelo() {
        return $this->modelo;
    }
    
    public abstract function getTipo(); 
}

?>