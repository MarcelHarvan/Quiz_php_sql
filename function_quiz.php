<?php
include "db.php";

class user {

	public static $count = 10;

	function displayQuestions( $quizaID ) {
		global $connection;

		print( "<form method='post'>" );
		$i = 0;
		$sql = "SELECT question_id, question, answer_1, answer_2, answer_3,answer_4, right_answer FROM questions WHERE quez_id=$quizaID ORDER BY RAND() LIMIT 10";
		$resultSet = mysqli_query( $connection, $sql );

		while ( $row = mysqli_fetch_array( $resultSet ) ) {
			print( "<div id='quiz'>" . utf8_encode( $row[ 'question' ] ) . "</div>" );
			print("<p id='center'>");
			print( "<input type='radio' name=\""
				. $i . "\" value='" . $row[ 'answer_1' ] . "_"
				. $row[ 'question_id' ] . "'> " . utf8_encode( $row[ 'answer_1' ] ) );
			print( "<input  type=\"radio\" name=\""
				. $i . "\" value='" . $row[ 'answer_2' ] . "_"
				. $row[ 'question_id' ] . "'> " . utf8_encode( $row[ 'answer_2' ] ) );
			print( "<input type=\"radio\" name=\""
				. $i . "\" value='" . $row[ 'answer_3' ] . "_"
				. $row[ 'question_id' ] . "'> " . utf8_encode( $row[ 'answer_3' ] ) );
			print( "<input type=\"radio\" name=\""
				. $i . "\" value='" . $row[ 'answer_4' ] . "_"
				. $row[ 'question_id' ] . "'> " . utf8_encode( $row[ 'answer_4' ] ) );
			print( "</p><hr>" );
	
			$i++;
		}
		print "<p  align='center'><input class='button' type='submit' id='submitQuiz' value=\"Ready to Check\"></p></form>";
		

		mysqli_free_result( $resultSet );

	}

	function checkQuestion( $answers, $id, $quizaID ) {

		$num_corr = 0;
		$num_incorect = 0;

		for ( $i = 0; $i < user::$count; $i++ ) {
			global $connection;
			$sql = "Select right_answer From questions WHERE question_id='$id[$i]'";
			$result = mysqli_query( $connection, $sql );
			$row = mysqli_fetch_array( $result );

			$row[ 'right_answer' ];
			
//			if (!$answers[ $i ] ){
//				print('fff');
//			}

			if ( $row[ 'right_answer' ] == $answers[ $i ] ) {
			

				$num_corr++;
			} else {
				$wrong[ $i ] = $answers[ $i ];
				$num_incorect++;
			}
		}

		echo "<p align='center'>";
		echo "Right:" . $num_corr . "<br>Wrong:" . $num_incorect . "<br>";

		foreach ( $wrong as $id => $wich ) {
			echo $id + 1 . " is wrong. Your answer: " . $wich . "<br>";
		}

		
		// set score to database 
		if ( isset( $_SESSION[ 'username' ] ) ) {
			global $connection;
			$userID = $_SESSION[ 'user_id' ];
			$query = "INSERT INTO action (user_id, quiz_id, right_answers) VALUES('$userID','$quizaID','$num_corr')";
			$result = mysqli_query( $connection, $query );

		}
		echo "</p>";
	}

}


?>