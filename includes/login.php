<?php include('function_login.php')?>

<div id="login-box" class="login-popup"> <a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
	<form method="post" class="signin" action="#">
		<fieldset class="textbox">
			<label class="username"> <span>Username or email</span>
          <input id="username" required name="username" value="" type="text" autocomplete="on" placeholder="Use your first name">
        </label>
			<label class="password"> <span>Password</span>
          <input id="password" required name="password" value="" type="password" placeholder="Password">
        </label>
        <input class="submit button" type="submit"  id="login" name="login" value="LogIn">
        <div class="message"><br><?php if($message!="") { echo $message; } ?></div>

			<p> <a class="forgot" id="forgotPassword" href="#">Forgot your password?</a> </p>
		</fieldset>
	</form>
</div>