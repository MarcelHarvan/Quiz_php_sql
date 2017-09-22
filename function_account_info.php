<section class="banner">
	<h2 class="parallax">WELCOME <?php echo $_SESSION['username'];?>!</h2>
	<p class="parallax_description">
		ACCOUNT INFO
		<?php 

if (isset($_SESSION['user_id'])){
	global $connection;
	$userID = $_SESSION['user_id'];
	
	$query = "SELECT first_name, last_name, email, phone_number, address FROM users WHERE user_id='$userID'";
	
	$result = mysqli_query($connection, $query);
	
	while ($row = mysqli_fetch_array($result)){
		print("<br>");
		print("First name: {$row['first_name']}");
		print("<br>");
		print("Last name: {$row['last_name']}");
		print("<br>");
		print("Email: {$row['email']}");
		print("<br>");
		print("Phone number: {$row['phone_number']}");
		print("<br>");
		print("Address: {$row['address']}");
	}
}

?>
	</p>
</section>