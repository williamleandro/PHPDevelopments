<?php

    include './Auto.php';
    include './Moto.php';
    
    echo 'CREO UNA VARIABLE DEL TIPO AUTO Y '
    . 'PUEDO UTILIZAR LOS METODOS DE VEHICULOS: '.'<br>';
    
    $autito = new Auto("CLA897", "Ford Fiesta");
    
    echo $autito->getTipo().'<br>';
    echo 'Matricula: '.$autito->getMatricula().'<br>';
    echo 'Modelo: '.$autito->getModelo().'<br>';
    
    echo '<br>';
    $motito = new Moto("DND678", "Honda NC750S");
    
    echo $motito->getTipo().'<br>';
    echo 'Matricula: '.$motito->getMatricula().'<br>';
    echo 'Modelo: '.$motito->getModelo().'<br>';
?>