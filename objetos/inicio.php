<?php
    include './Complejo.php';
    
    $c1 = new Complejo();
    $c2 = new Complejo(5.50, 0.25);
    $c3 = new Complejo(1.25, 5.00);
    $c4;
    
    echo 'Valor de c1: ';
    $c1->mostrar();
    echo 'Valor de c2: ';
    $c2->mostrar();
    echo 'Valor de c3: ';
    $c3->mostrar();
    
    $c1 = $c2->sumar(1.00 , 2.76);
    echo 'c1 = c2 + (1.00, 2.76) ---> ';
    $c1->mostrar();
    
    $c4 = $c3->producto(2.00, 1.50);
    echo 'c4 = c3 * (2.00, 1.50) ---> ';
    $c4->mostrar();
    
    $c4 = $c1->restar(1.30, 5.90);
    echo 'c4 = c1 - (1.30, 5.90) ---> ';
    $c4->mostrar();
?>
