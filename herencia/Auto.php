<?php
include './Vehiculo.php';

class Auto extends Vehiculo {
    public function Auto($matricula, $modelo) {
        parent::Vehiculo($matricula, $modelo);
    }

    public function getTipo() {
        echo 'Auto';
    }

}

?>