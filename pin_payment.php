<?php include('template_header.php'); ?>
		
<div class="home">
	<h2>Pin Payment</h2>
	<form action="">
		<p>
			<label for="applicant_name">Applicant's First Name:</label><br>
			<input type="text" name="applicant_name" id="applicant_name"/>
		</p>
		<p>
			<label for="applicant_sname">Applicant's Surname:</label><br>
			<input type="text" name="applicant_sname" id="applicant_sname"/>
		</p>
		<p>
			<label for="amount">Amount:</label><br>
			<input type="text" name="amount" id="amount"/>
		</p>
		<label for="day">Day</label>
		<select name="" id="">
			<option value=""></option>
		</select>

		<label for="month">Month</label>
		<select name="" id="">
			<option value=""></option>
		</select>

		<label for="year">Year</label>
		<select name="" id="">
			<option value=""></option>
		</select>
		<p>
			<label for="acc_name">Accountant Name:</label><br>
			<input type="text" name="acc_name" id="acc_name"/>
		</p>
		<p>
			<label for="receipt_n">Receipt Number:</label><br>
			<input type="text" name="receipt_n" id="receipt_n"/>
		</p>
		<p>			
			<input type="submit" name="submit" value="Add"/>
		</p>
	</form>
</div>
<?php include('template_footer.php'); ?>
	
