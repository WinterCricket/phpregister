<?php 

abstract class Car{
	public $name;
	public $color;
	public $price;

	public function report($name, $color, $price){
		return $this->name." is ".$this->color." and will cost ".$this->price." dollars.";
	}
	abstract public function showCar();
}
class Anvil extends Car{
	public function report(){
		return parent::report();
	}
	public function showCar(){
		echo "Behold this ".$this->name."!";
	}
}

?>