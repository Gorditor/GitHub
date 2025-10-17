<?php

class Coche{

    public $brand;
    public $model;
    public $year;
    public $speed;

    public function __construct($brand, $model, $year, $speed = 0) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function setSpeed($speed) {
        $this->speed = $speed;
    }

    public function accelerate($increase) {
        $this->speed += $increase;
        echo $increase;
    }

    public function decrease($decrease) {
        $this->speed -= $decrease;
        echo $decrease;
    }

    public function details() {
        echo "Marca: $this->brand Modelo: $this->model Año: $this->year Velocidad: $this->speed";
    }



}

$coche = new Coche("Nissan", "Qashqai +7", "2015");

$coche->accelerate(5);
$coche->decrease(2);
$coche->details();



?>