<?php session_start();
?>

<!doctype html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MAD 3144 [202] Development for the Mobile Web - Simple Quiz</title>
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
	<script>
		var __adobewebfontsappname__ = "dreamweaver"
	</script>
</head>

<body>
	<div class="container">
		<header> <a href="index.php">
    <h4 class="logo">QUIZ</h4>
    </a>
			<nav>
				<ul>
					<?php
					if(isset($_SESSION['username'])) : ?>
					<li> <a href="function_logout.php" class="">LOG OUT</a>
					</li>
					<li><a href="score.php">SCORE</a>
					</li>

					<?php endif; ?>
					
					<?php if(!isset($_SESSION['username'])) : ?>

					<li><a href="#login-box" class="login-window">LOG IN</a>
					</li>
					<li><a href="score.php">SCORE</a>
					</li>
					<li><a href="#register-box" class="register-window">REGISTER</a>
					</li>
					<?php endif; ?>

				</ul>
			</nav>
		</header>