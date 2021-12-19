<?php

class Car {

    public $brend;
    public $model;
    public $year;

    public function __construct($brend, $model, $year) { // construct срабатывает каждый раз при создании элемента класса
        $this ->brend = $brend;
        $this ->model = $model;
        $this ->year = $year;
    }

    public function drive() {
        echo "I'm driving $this->brend $this->model<br>";
    }
}

$audi = new Car('Audi','TT',2025);
$vesta = new Car('Lada','Vesta',2020);

echo $vesta->year .'<br>';

$vesta->year = 2016;

$audi->drive();
$vesta->drive();
