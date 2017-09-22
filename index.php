 <?php
 include "db.php";
 include "includes/header.php";
 include "includes/login.php";
 include "includes/register.php";
 ?>

<section class="hero" id="hero">
	<h2 class="hero_header">MARCEL <span class="light">HARVAN</span></h2>
	<p class="tagline">A SIMPLE QUIZ AS A FINAL PROJECT OF MAD 3144</p>
</section>
<footer>
	<article class="footer_column">
		<h3>CAPITAL CITIES</h3>
		<a href="quiz.php?quiz=1"> <img src="images/city.jpg" alt="" width="400" height="200" class="cards"/></a>
		<p>HTML5 is the latest version of Hypertext Markup Language, the code that describes web pages. It's actually three kinds of code: HTML, which provides the structure; Cascading Style Sheets (CSS), which take care of presentation; and JavaScript, which makes things happen.</p>
	</article>
	<article class="footer_column">
		<h3>SIMPLE MATH</h3>
		<a href="quiz.php?quiz=2"> <img src="images/math.jpg" alt="" width="400" height="200" class="cards"/></a>
		<p>CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2.1. It brings a lot of long-awaited novelties, like rounded corners, shadows, gradients, transitions or animations, as well as new layouts like multi-columns, flexible box or grid layouts.</p>
	</article>
	

</footer> 

<?php 
include "includes/footer.php";
 ?>