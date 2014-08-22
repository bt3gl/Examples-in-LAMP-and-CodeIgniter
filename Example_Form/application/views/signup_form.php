<h2>Create an Account</h2>
<fieldset>
	<legend>Personal Information</legend>
    
    <?php
	$fname = 'placeholder="First Name"';
	$lname = 'placeholder="Last Name"';
	$email = 'placeholder="E-mail Address"';
	
	echo form_open('login/create_member');
	echo form_input('first_name', set_value('first_name', ''), $fname);
	echo form_input('last_name', set_value('last_name', ''), $lname);
	echo form_input('e-mail', set_value('e-mail', ''), $email);
	?>
	</fieldset>
    
    <fieldset>
    <legend>Login Info</legend>
    <?php
	$username = 'placeholder="Username"';
	$password = 'placeholder="Password"';
	$password2 = 'placeholder="Confirm Password"';
	
	echo form_input('username', set_value('username', ''), $username);
	echo form_password('password', set_value('password', ''), $password);
	echo form_password('password2', set_value('password2', ''), $password2);
	echo form_submit('submit', 'Create Account');
	?>
     <?php echo validation_errors('<p class="error"></p>'); ?>
    </fieldset>