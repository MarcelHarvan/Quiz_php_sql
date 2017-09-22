 <?php
 include "db.php";
 include "function_quiz.php";
 include "includes/header.php";
 include "includes/login.php";
 include "includes/register.php";
 ?>

<section class="hero" id="hero">
	<h2 class="hero_header">MARCEL <span class="light">HARVAN</span></h2>
	<p class="tagline">A SIMPLE QUIZ AS A FINAL PROJECT OF MAD 3144</p>
</section>

<div id="container">

<!--<script src="js/quiz.js"></script>-->
	<?php 
	
	// display questions
	$perguntas=new user();
$perguntas->displayQuestions($_GET['quiz']);
unset($perguntas);
	
	
	
	// result
	 if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
		
		 
		
		 
 	for ( $i = 0; $i < user::$count; $i++ ) {

 		$b[ $i ] = $_POST[ $i ];
 		list( $a[ $i ], $id[ $i ] ) = explode( "_", $b[ $i ] );
			
	}
 	$value = new user();
 	$value->checkQuestion( $a, $id, $_GET['quiz']  );
	
 }
	
	 
	

	?>

</div>

 <?php
 include "includes/footer.php";
 ?>