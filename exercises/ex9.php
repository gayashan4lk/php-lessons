<?php

		$science = array
		(
			"BIOLOGY" =>array
			("animal","plant","environmet","micro"),
			
			"physics" => array
			("mechanics","electronic","thermal",),
			
			"chemistry" => array
			("inorganic","organic","analytical","physical"),
				
			
		
		);
		
		echo "these are the best parts of chemistry..:  ".$science['chemistry'][2]." and ".$science['chemistry'][3];
		echo '<br><br>';
		echo "these are the best in BIOLIGY..:  ".$science['BIOLOGY'][1]." and ".$science['BIOLOGY'][0]." and from phy, ".$science['physics'][2];

?>