<?php

//session_start();

$message = "";
if ( isset( $_POST['login'])) {
	global $connection;
	$username = $_POST[ 'username' ];
	$password = $_POST[ 'password' ];

	$query = "SELECT * FROM users WHERE first_name='$username' AND password='$password'";

	$result = mysqli_query($connection, $query);
	
	$row = mysqli_fetch_array( $result );

	if ( is_array( $row ) ) {
		$_SESSION[ 'user_id' ] = $row[ user_id ];
		$_SESSION[ 'username' ] = $row[ first_name ];
	} else {
		$message = "Invalid Username or Password!";
	}

	if ( isset( $_SESSION[ 'user_id' ] ) ) {
		header( "Location: score.php" );
	}
}


?>