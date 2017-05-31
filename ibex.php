<?php
// 	$mySubject1 = "Old sexy knickers ";
// 	$myObjectInt1 = "silly old trollop!";
// 	$myObjectTran1 = "the moon.";
// 	$myVerbIntransitive1now = "are ";
// 	$myVerbIntransitive1then = "were ";

// 	$myVerbTransitive1now = "walks ";
// 	$myVerbTransitive1then = "walked ";
// 	$myVerbTransitive1future = "will walk ";

// 	$myPrep1 = " through ";
// 	$myPrep2 = " to ";

// 	echo $mySubject1 . $myVerbTransitive1future . $myPrep1 . $myObjectTran1;
// 	$numbers = array(12, 23, 34, 45);
// 	$numberA = [24, 35,46];

// 	echo $numbers[2];
// 	print_r($numbers);
// 	print_r($numberA);
// 	$ages = array(
// 		"Mary" => 42,
// 		"Alan" => 23,
// 		"Marforth" => 104
// 		);
// 	 echo $ages["Mary"];


// 	array_push["Marvin" => 33];
// 	print_r($ages);


// $cars = array("Volvo", "BMW", "Toyota", "Santa's Sleigh", "Toyota Camry");
// $arrlength = count($cars);

// for($x = 0; $x < $arrlength; $x++) {
// 	echo $cars[$x];
// 	echo "<br>";
// }
// $i=0;
// while($i <= 10){
// 	echo "Number ".$i."<br/>";
// 	$i++;
// }

// $ages = array(
// 		"Mary" => 42,
// 		"Alan" => 23,
// 		"Marforth" => 104
// 		);

// foreach($ages as $name => $age){
// 	echo $name ." is ".$age." years old. <br />";
// }

// function greet($name, $age){
// 	echo "I'm ". $name." and I'm ".$age. ". <br />";

// }
// greet("Mouse Face", 51);
// function voteRight($age){
// 	if($age > 25){
// 		echo "You are ".$age." and can vote!";
// 	} else {
// 		echo "You are ".$age. ", which means you're too young to vote.";
// 	}
// }
// voteRight(51);

// class User{
// 	private $id;
// 	private $username;
// 	private $email;
// 	private $password;
	
// 	public function __construct($username, $password){
// 		$this-> username = $username;
// 		$this-> password = $password;
// 	}

// 	public function register(){
// 		echo "User registered";
// 	}

// 	public function login(){
		
// 		$this->auth_user();
// 	}

// 	public function auth_user(){
// 		//echo $this->username . " is authenticated. The password is ".$this->password;
// 	}

// 	public function __destruct(){
// 		//echo "Destructor called";
// 	}
// }

// $User = new User("Moreley Saff", "longtemps8");
// echo $User -> username;
// //$User -> register();
// //$User->login();
////set, get, isset magic methods here below
// class Post{
// 	private $name;

// 	public function __set($name, $value){
// 		echo "Setting ".$name." to <strong>".$value."</strong> <br />";
// 		$this->name = $value;
// 	}
// 	public function __get($name){
// 			echo "Getting ".$name." <strong>".$this->name."</strong> <br />";
// 	}
// 	public function __isset($name){
// 		echo "Is ".$name." set? <br />";
// 		return isset($this->name);
// 	}
// }
// $post = new Post;
// $post->name = "Testing";
// echo $post->name;
// var_dump(isset($post->name));



