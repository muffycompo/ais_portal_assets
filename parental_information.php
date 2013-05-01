<?php include('template_header.php'); ?>
		
<div class="home">
	<h2>Parental Information</h2>
	<form action="">
		<p>
			<label for="father_name">Father's Name:</label><br>
			<input type="text" name="father_name" id="father_name"/>
		</p>
		<p>
			<label for="father_occupation">Father's Occupation:</label><br>
			<input type="text" name="father_occupation" id="father_occupation"/>
		</p>
		<p>
			<label for="father_religion">Father's Religion:</label><br>
			<input type="text" name="father_religion" id="father_religion"/>
		</p>
		<p>
			<label for="address">Residential Address:</label><br>
		<textarea name="address" id="address" cols="40" rows="5"></textarea>
		</p>
		<p>
			<label for="father_no">Father's Phone Number:</label><br>
			<input type="text" name="father_no" id="father_no"/>
		</p>
		<p>
			<label for="mother_name">Mother's Name:</label><br>
			<input type="text" name="mother_name" id="mother_name"/>
		</p>
		<p>
			<label for="mother_occupation">Mother's Occupation:</label><br>
			<input type="text" name="mother_occupation" id="mother_occupation"/>
		</p>
		<p>
			<label for="mother_religion">Mother's Religion:</label><br>
			<input type="text" name="mother_religion" id="mother_religion"/>
		</p>
		<p>
			<label for="mother_no">Mother's Phone Number:</label><br>
			<input type="text" name="mother_no" id="mother_no"/>
		</p>
		<p>			
			<input type="submit" name="submit" value="Add"/>
		</p>
	</form>
</div>
<?php include('template_footer.php'); ?>
	
