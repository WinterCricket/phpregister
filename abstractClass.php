<?php 

abstract class Car{
	public $name;
	public $color;
	public $price;

	public function report(){
		return "This ".$this->name." is ".$this->color." and will cost ".$this->price." dollars. <br />";
	}
	abstract public function showCar();
}
class Porche extends Car{
	public function report(){
		return parent::report();
	}
	public function showCar(){
		echo "Behold this ".$this->name."!";
	}
}
class Toyota extends Car{
	public function report(){
		return parent::report();
	}
	public function showCar(){
		echo "Behold this ".$this->name."!";
	}
}

 $car = new Porche();
 $car->name = "Condini";
 $car->color = "Forest Green";
 $car->price = "54,000";
 echo $car -> showCar();
 echo $car -> report();


 $car = new Toyota();
 $car->name = "Camry";
 $car->color = "Silver";
 $car->price = "8,000";
 echo $car -> report();

?>