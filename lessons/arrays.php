<?php  echo "--------	REGULAR ARRAY    -----------<br>" ; ?>
<?php
	$letters = array('a','b','c','d');
	echo "my array is : $letters[0],$letters[1],$letters[2],$letters[3] <br/> ";

	unset($letters[2]);
	echo "my array is : $letters[0],$letters[1],$letters[3] <br/>";

	$letters = array_values($letters);
	echo "my array is : $letters[0],$letters[1],$letters[2] <br><br>";

	unset($letters);
	/*if(count($letters) == 0 ){
		echo "array is empty .";
	}*/

	if(isset($letters)){
		echo "letters array is not empty<br>";
	}else{
		echo "letters array is empty<br>";
	}

?>

<?php  echo "--------	ASSOCIATIVE ARRAY    -----------<br>"; ?>
<?php
	$marks = array('chamal'=>15,'lakshan'=>25,'sirisena'=>250,'somapala'=>85);
	echo " <ul> ";
	foreach($marks as $name=>$mark){
		echo "<li> $name : $mark </li>";
	}
	echo "</ul><br>";

	echo "names of students :<br>";
	foreach($marks as $name=>$mark){
		echo "<li> $name </li>";
	}
	echo "</ul>";

	echo "marks of students : <br>";
	foreach($marks as $name=>$mark){
		echo "<li> $mark </li>";
	}
	echo "</ul>";

?>

<?php  echo "--------	TEST 1 -----------<br>"; ?>
<?php
	$total = 0;
	foreach($marks as $name=>$mark){
		if ($name=='sirisena'){
			echo " sirisena's mark is : $mark<br>";
		}

		$total += $mark;	
	}

	echo "total marks are : $total<br>";
	echo "avarage mark is : ". $total/count($marks) ."<br>";

?>

<?php  echo "--------	REGULAR ARRAY WORKS WITH FOREACH LOOP -----------<br>"; ?>

<?php
	$numberset = array();
	for( $i = 0; $i < 10; $i++){
		$numberset[] = mt_rand(1,100);
	}

	unset($numberset[5]);
	
	//$numberset = array(1,2,3,4,5,6,7,8,9);

	foreach($numberset as $array_index => $array_values){
		echo   $array_index . "  : " . $array_values ."<br>" ;	
	}

	/*for( $i = 0; $i < 10; $i++){
		echo  "index ". $i ." : ".$numberset[$i] ."<br>" ;
	}*/
?>
<?php  echo "--------	MULTIDIMENTIONAL ARRAY -----------<br>"; ?>
<?php

//=======	creat the array  ===============

	$multi_array = array();
	for($i = 0 ; $i<10 ; $i++ ){
		$multi_array[$i] = array();
	}

//=======	assign values  ===============

	for($i = 0 ; $i<10 ; $i++){
		for($j=0 ; $j<5 ; $j++ ){
			$multi_array[$i][$j] = $i*$j;
		}
	}

//=======	displaying values  ===============

	for($i = 0 ; $i<10 ; $i++){
		
		echo "<b>multification of $i  -----------</b><br>";	
			
		for($j=0 ; $j<5 ; $j++ ){

			echo " $i *  $j  = ".$multi_array[$i][$j] ."<br>" ;
		}
		echo "<br>";
	}
?>
<?php  echo "--------	ASSOCIATIVE MULTIDIMENTIONAL ARRAY -----------<br>"; ?>

<?php
	$cart = array();

	$item = array();
	$item['item_name'] = 'men t shirt';
	$item['item_code'] = 256;
	$item['price'] = 254.23;

	$cart[] = $item;

	$item = array();
	$item['item_name'] = 'men belt';
	$item['item_code'] = 110;
	$item['price'] = 562.23;
	$item['discount'] = 20;

	$cart[] = $item;

	echo "item name and price of index[0] : ". $cart[0]['item_name']."  ". $cart[0]['price'] ."<br>";

	echo " <b>selling price of a men belt   =  ";
	echo  $cart[1]['price'] - $cart[1]['price'] * $cart[1]['discount']/100  ."<b><br>";

?>