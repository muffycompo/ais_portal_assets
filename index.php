<?php include('template_header.php'); ?>
		
<div class="home">
	<h2>Login</h2>
	<form action="">
		<p>
			<label for="username">Username:</label><br>
			<input type="text" name="username" id="username"/>
		</p>
		<p>
			<label for="password">Password:</label><br>
			<input type="password" name="password" id="password"/>
		</p>
		<p>
			<input type="checkbox" value="1" name="remember" />&nbsp;Remember me.
		</p>
		<p>			
			<input type="submit" name="submit" value="Login"/>
		</p>
		<p><a href="#">Forgot Password?</a></p>
		<p><a href="sign_up.php">Rgister Here?</a></p>
	</form>
</div>
<?php include('template_footer.php'); ?>
	
