<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Ejemplo de la clase Complejo con algunos métodos
 * @author William
 */
class Complejo {
    private $real;
    private $img;
    
    public function Complejo($real=0.00, $img=0.00) {
        $this->real = $real;
        $this->img = $img;
    }
    
    public function sumar($real, $img) {
        $aux = new Complejo($this->real + $real, $this->img + $img);
        return $aux;
    }
    
    public function restar($real, $img) {
        $aux = new Complejo($this->real - $real, $this->img - $img);
        return $aux;
    }
    
    public function producto($real, $img) {
        $aux = new Complejo($this->real * $real, $this->img * $img);
        return $aux;
    }
    
    public function mostrar() {
        echo '('.$this->real.','.$this->img.')'.'<br>';
    }
}
