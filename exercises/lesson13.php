<?php
	$story = file_get_contents("story.txt");

	if($story != null){
		echo $story;
	}
	else
		echo "function doesnt work";


?>