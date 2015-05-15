<?php
# constant
class person{
	const MALE = 'm';
	const FEMALE = 'f';

	private $gender;

	public function getGender(){
		return $this->gender;
	}
	public function setGender($value){
		if($value == self::MALE || $value == self::FEMALE){
			$this->gender = $value;
		}else{
			exit('invalid Gender!');
		}
	}
}
#static keyword
class Category{
	private $id,$name;
	private static $objectCount = 0;

	public function __construct($id,$name){
		$this->id = $id;
		$this->name = $name;
		self::$objectCount++;
	}
	public static function getObjectCount(){
		return self::$objectCount;
	}
}
?>