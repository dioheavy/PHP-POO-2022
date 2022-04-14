<?php

class Car{
	
	/*ATRIBUTOS*/
	public $color;
	public $year;
	public $model;
	
	/*METODOS*/
	//Obs. o $this é utilizado dentro da classe pra referenciar o objeto
	public function run(){
		return $this->$model.'Car is running...';
	}
	public function stop(){
		return $this->$model.'Car has stopped...';
	}
}


/*Criando um objeto, ou instanciando um objeto*/

$car = new Car();
$car->color = 'White';
$car->year = 1998;
$car->model = 'Corsa';

print $car->run();
print $car->stop();


$car2 = new Car();
$car2->color = 'Vermelho';
$car2->year = 2020;
$car2->model = 'Focus';

echo $car2->run();
echo $car2->stop();