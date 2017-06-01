<?php 

class User{
	public $username;
	public static $minPWLength = 6;

	public static function validatePW($pw){
		if(strlen($pw) >= self::$minPWLength){
			return true;

		} else {
			return false;
		}
	}
}
/*
$pw = "plaids";

if(User::validatePW($pw)){
	echo "Password is valid";
} else{
	echo "Password is invalid, because it is too short";
}
*/
echo User::$minPWLength;

?>