<?php
class First{
	public $id = 51;
	protected $name = "Mighty Tighty";
	

	public function speakAloud($say){
		echo $say;

	}
}



class Second extends First{
	public function getName(){
		echo $this->name;
	}
	
}

$second = new Second;
//echo $second->speakAloud("Lukewarm ice cream...");
echo $second->getName();

?>  
