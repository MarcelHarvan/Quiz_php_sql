<?php 

	$connection = mysqli_connect('localhost', 'root','','quiz');
		
		if(!$connection) {
			die("Database connection faild");
//		} else{
//			print("your connected!");
		}

?>