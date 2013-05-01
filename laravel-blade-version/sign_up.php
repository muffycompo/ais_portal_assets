<?php include('template_header.php'); ?>
		
<div class="home">
	<h2>Sign Up</h2>
	<form action="">
		<p>
			<label for="fname">First Name:</label><br>
			<input type="text" name="fname" id="fname"/>
		</p>
		<p>
			<label for="lname">Last Name:</label><br>
			<input type="text" name="lname" id="lname"/>
		</p>
		<p>
			<label for="email">Email Addres:</label><br>
			<input type="text" name="email" id="email"/>
		</p>
		<p>
			<label for="gsm">GSM Number:</label><br>
			<input type="text" name="gsm" id="gsm"/>
		</p>
		<p>
			<label for="password">Password:</label><br>
			<input type="password" name="password" id="password"/>
		</p>
		<p>
			<label for="pin">Pin:</label><br>
			<input type="text" name="pin" id="pin"/>
		</p>
		<p>			
			<input type="submit" name="submit" value="Sign Up"/>
		</p>
	</form>
</div>
<?php include('template_footer.php'); ?>
	
