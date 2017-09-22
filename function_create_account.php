<?php
include "db.php";

function createAccount() {
	if ( isset( $_POST[ 'submit' ] ) ) {
		global $connection;
		$firstName = $_POST[ 'firstName' ];
		$lastName = $_POST[ 'lastName' ];
		$emailAddress = $_POST[ 'emailAddress' ];
		$phoneNumber = $_POST[ 'phoneNumber' ];
		$address = $_POST[ 'address' ];
		$password = $_POST[ 'password' ];

		$query = "INSERT INTO users(first_name,last_name,email,phone_number,address,password) ";
		$query .= "VALUES ('$firstName','$lastName','$emailAddress','$phoneNumber','$address','$password')";

		$result = mysqli_query( $connection, $query );

		if ( !$result ) {
			die( 'Query faild' . mysqli_error() );
//		} else {
//			print '<script language="javascript">';
//			print 'setTimeout( function ( ) { alert( "You were registrated!" ); }, -2000 )';
//			print '</script>';
			//			print( "Record Created!" );
		}
	}
}



?>