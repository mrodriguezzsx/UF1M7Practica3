<?php
class Vehicle {
    private $traccion;
    private $peso;
    private $modelo;
    private $potencia;
    private $consumo;

    function __construct($traccion, $peso, $modelo, $potencia, $consumo){
        $this->traccion = $traccion;
        $this->peso = $peso;
        $this->modelo = $modelo;
        $this->potencia = $potencia;
        $this->consumo = $consumo;
    }

    public function __construct1($traccion, $peso, $modelo){
        $this->traccion = $traccion;
        $this->peso = $peso;
        $this->modelo = $modelo;
    }

    public function __construct2(){

    }

}

?>