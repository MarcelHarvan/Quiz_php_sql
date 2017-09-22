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

<?php if(isset($_SESSION['username'])) : ?>

<?php include("function_score_info.php"); ?>
<?php include("function_account_info.php"); ?>

<?php endif; ?>
<?php if(!isset($_SESSION['username'])) : ?>
 <section class="banner">
    <h2 class="parallax">LOG IN!</h2>
    <p class="parallax_description">Log in!! if you want to see your results you must be registered!!
     <br> Thank you!</p>
  </section>
<?php endif; ?>

<?php 
include "includes/footer.php";
 ?>