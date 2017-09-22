<?php 
include "function_create_account.php";
createAccount();
?>
<div id="register-box" class="register-popup"> <a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close"/></a>
	<form method="post" class="register" action="#">
		<fieldset class="textbox">
			<label class="firstName"> <span>First Name</span>
          <input id="firstName" name="firstName" value="" type="text"
    	 placeholder="First name" required>
        </label>
			<label class="lastName"> <span>Last Name</span>
          <input id="lastName" name="lastName" value="" type="text"
    	 placeholder="Last name" required>
        </label>
			<label class="emailAddress"> <span>Email Address</span>
          <input id="emailAddress" name="emailAddress" value="" type="text"
    	 placeholder="Email Address" >
        </label>
			<label class="phoneNumber"> <span>Phone Number</span>
          <input id="phoneNumber" name="phoneNumber" value="" type="text"
    	 placeholder="Phone Number">
        </label>
			<label class="Address"> <span>Address</span>
          <input id="Address" name="address" value="" type="text"
    	 placeholder="Address">
        </label>	
         <label class="Password"> <span>Password</span>
          <input id="Password" name="password" value="" type="password"
    	 placeholder="Password" required>
        </label>
        <input class="btn btn-primary" type="submit" name="submit" value="Register">
		</fieldset>
	</form>
</div>