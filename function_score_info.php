<?php
if ( isset( $_SESSION[ 'user_id' ] ) ) {
	global $connection;
	$userID = $_SESSION[ 'user_id' ];

	$query = "SELECT user_id, quiz_id, right_answers FROM action WHERE user_id='$userID'";
	$result = mysqli_query( $connection, $query );


	print( "<div class='gallery'>" );
	while ( $row = mysqli_fetch_array( $result ) ) {
		print( "<div class='thumbnail'>" );
		print( "<h1 class='stats'>{$row['right_answers']}/10</h1>" );
		print( " <h4>QUIZ</h4>" );


		$quizID = $row[ 'quiz_id' ];
		$query1 = "SELECT quiz_name FROM quiz WHERE quiz_id='$quizID'";
		$result1 = mysqli_query( $connection, $query1 );

		while ( $row = mysqli_fetch_array( $result1 ) ) {
			print( "<p>{$row['quiz_name']}</p>" );
		}
		print( "</div>" );
	}
	print( "</div>" );
}



?>