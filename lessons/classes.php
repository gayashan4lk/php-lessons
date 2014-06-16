<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css"  href="  "  />

<title>    </title> 

</head>

<body>
<?php

	/////////////////////////////
	//use classes       /////////
	/////////////////////////////

	class person{
		public $name="Nimal" ;

		function getname(){
			return $this->name ;
		}

		function setname($newname){
			$this->name = $newname;
		}
	}

	$nimal = new person;
	$name1 = $nimal -> getname();
	echo "Name 1  : {$name1} <br/>";

	$nimal->setname("Rajapaksha");
	$name2 = $nimal -> getname();
	echo "Name 1  :  " . $name2 ;

	class addition{
		public $a = '1';
		public $b = '2';
		public $total;

		function add($x,$y){
			$this->total = $x + $y;
			return $this->total;
		}

		function substract(){
			$this->total--;
			return $this->total; 
		}
		
		function add2(){
			$this->total = $this->a + $this->b;
			return $this->total;
		}
	}

	$math = new addition;
	echo "<br/>total : {$math->add(5,10)} "	;
	echo "<br/>total : {$math->substract()} "	;

	$math2 = new addition;
	echo "<br/>total : {$math2->add2()} "  ;

	/////////////////////////////
	//use static keyword/////////
	/////////////////////////////
	class htmlstuff{

		static function starttable(){
			echo "<table border=\"5\">\n";
		}

		static function endtable(){
			echo "</table>\n";
		}


	}

		htmlstuff::starttable();
		?>
		
		<tr><td>im</td></tr>
		<tr><td>will</td></tr>
		<tr><td>marry</td></tr>
		<tr><td>Bhagya Arunodanie</td></tr>


		<?php

		htmlstuff::endtable();

	//////////////////////////////
	//use final keyword/////////
	//////////////////////////////

		class father{
			public $name = 'Ananda wijerathna1' ;
			public $age;
			public $age2;


			

			final function setname($newname){
				$this->name  = $newname;
			}

			function getname(){
				return $this->name;
			}

			function setage($newage){
				$this->age  = $newage;
			}

			function getage(){
				return $this->age;
			}


		}

		class child extends father{
			function setage($newage){
				$this->age2 = $newage;
			}

			/*function setname(){
				$this->name  = null;
			}*/
		}

		 $man = new father;
		 echo "<br/>father's name is :  ". $man->getname();
		 $man->setname("w.Ananda wijerathna");
		 echo "<br/>father's name is :  ". $man->getname();
		 

		 $me = new child;
		 echo "<br/>I said , father's name is :  ". $me->getname();
		 $me->setname("w.Ananda wijerathna wagachchige");
		 echo "<br/>I said , father's name is :  ". $me->getname();


?>
</body>

</html>