<?php 
	class Friends{
		public $friend1 = "Trout Mouth";
		public $friend2 = "Chicken";
		public $friend3 = "Russell";

		protected $friend4 = "Valerie Roboto";
		protected $friend5 = "Nyla Wood";

		function iterateObject(){
			foreach($this as $key => $value){
				print "$key => $value\n";
			}
		}
	}

	$friends = new Friends;
	$friends->iterateObject(); 
?>