<?php

$products = array();
	$products['m-1754'] = array('name'=> 'Flute' , 'cost'=>'149.5085');
	$products['m-6256'] = array('name'=> 'Trumpet' , 'cost'=>'2456.52463');
	$products['m-5486'] = array('name'=> 'Guitar' , 'cost'=>'2566.525');

	/*$item = array(
			'name' => $products[$key]['name'],
			'cost' => $cost,
			'qty' => $quantity,
			'total' => $total
			);*/

	foreach($products as $key => $product ){
		$cost = number_format($product['cost'] ,2);
		$name = $product['name'];
		$item = $name .' ($'.$cost. ')';

		echo  "[" . $key ." ] : ". $item ."<br>"  ;
	}

	//echo  "[" . $key ." ] : ". $item ."<br>"  ;


	/*foreach($products as $key => $product ):
		$cost = number_format($product['cost'] ,2);
		$name = $product['name'];
		$item = $name .' ($'.$cost. ')';

		echo  "[" . $key ." ] : ". $item ."<br>"  ;
	endforeach;*/


?>