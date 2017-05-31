<?php
	public $id = 51;
	public $name = "Mighty Tighty";
	

	public function speakAlound(){
		echo "Sassy little old woman with tatooed breasts";

	}
}

class Second extends First{

}

$second = new Second;
echo $second->name;
}
?>  
