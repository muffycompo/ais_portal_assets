<?php include('template_header.php'); ?>
		
<div class="home">
	<h2>Medical Report</h2>
	<form action="">
		<p>
			<label for="hname">Hospital Name:</label><br>
			<input type="text" name="hname" id="hname"/>
		</p>
		<p>
			<label for="h_address">Hospital Address:</label><br>
		<textarea name="h_address" id="h_address" cols="40" rows="5"></textarea>
		</p>
		<p>
			<label for="d_name">Doctor Name:</label><br>
			<input type="text" name="d_name" id="d_name"/>
		</p>
		<p>
			<label for="doctor_no">Doctor's Phone Number:</label><br>
			<input type="text" name="doctor_no" id="doctor_no"/>
		</p>
		<p>
			<label for="file_no">Child's File Number:</label><br>
			<input type="text" name="file_no" id="file_no"/>
		</p>
		<p>
			<label for="blood_group">Blood Group:</label><br>
			<input type="text" name="blood_group" id="blood_group"/>
		</p>
		<p>
			<label for="genotype">Genotype:</label><br>
			<input type="text" name="genotype" id="genotype"/>
		</p>
		<p>
			<label for="allergic_reaction">Allergic Reactions (If any):</label><br>
			<input type="text" name="allergic_reaction" id="allergic_reaction"/>
		</p>
		<p>
			<label for="allergy_details">Allergy Details:</label><br>
			<textarea name="allergy_details" id="allergy_details" cols="40" rows="5"></textarea>
		</p>
		<p>
			<label for="disability">Disability (If Any):</label><br>
			<input type="text" name="disability" id="disability"/>
		</p>
		<p>
			<label for="disability_details">Disability Details:</label><br>
			<textarea name="disability_details" id="disability_details" cols="40" rows="5"></textarea>
		</p>
		<p>			
			<input type="submit" name="submit" value="Add"/>
		</p>
	</form>
</div>
<?php include('template_footer.php'); ?>
	
