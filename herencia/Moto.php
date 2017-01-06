<?php

class Moto extends Vehiculo {
    
    public function Moto($matricula, $modelo) {
        parent::Vehiculo($matricula, $modelo);
    }
    
    public function getTipo() {
        echo 'Moto';
    }
}
