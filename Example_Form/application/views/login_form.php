<div id="login_form">
	<h1>Login</h1>
    <?php
	$username = 'placeholder="Username"';
	$password = 'placeholder="Password"';
	
	echo form_open("login/validate_credentials");
	echo form_input("username", "", $username);
	echo form_password("password", "", $password);
	echo form_submit("submit", "Login");
	echo anchor("login/signup", "Create Account");
	
	?> 

</div>