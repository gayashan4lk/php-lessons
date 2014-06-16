<?php
	if(PHP_OS == 'WIN32'){
		echo "you are in WIN32 system.";
	}
	else if(PHP_OS == 'WINNT'){
		echo "you are in WINNT system.";
	}
	else if(PHP_OS == 'Darwin'){
		echo "you are in MacOS system.";
	}
	else if(PHP_OS == 'Linux'){
		echo "you are in Linux system.";
	}
	else{
		echo "you are not in one of windows , linux or ubuntu systems. ";
	}


?>