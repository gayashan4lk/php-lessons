<?php

/*==================================
			date function
====================================*/

	echo "today is : ". date('d-m-y') ."<br>";
	echo "today is : ". date('d.m.Y')."<br>";
	echo "today is : ". date('m/d/Y')."<br>";

/*==================================
			empty function
====================================*/
	


	$varibale = array() ;
		

	if(empty($varibale)){
		echo "variable is empty and it is NULL<br>";
		$varibale[0] = 1;
		$varibale[1] = 1;
		$varibale[2] = 1;
		$varibale[3] = 3; 
	
	
	}
	else{
		echo "variable is set and it is not null<br>";
	}
/*	
  	$varibale = NULL;	

	if(isset($varibale)){
		echo "variable is set and it has a value<br>";
		$varibale[0] = 1;
		$varibale[1] = 1;
		$varibale[2] = 1;
		$varibale[3] = 3; 
	}
	else{
		echo "variable is not set <br>";
	}


		for( $i=0 ; $i < count($varibale) ; $i++ ){
			echo "index is $i , value is ".$varibale[$i] ."<br>" ;
		}

*/

?>