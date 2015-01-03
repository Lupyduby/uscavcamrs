<html>
	<head>
		<title>Registration</title>
	</head>
	<body>

		<?php echo validation_errors(); ?>
		<?php echo form_open('main/addUser'); ?>
			<fieldset>
				<legend>Personal information:</legend>
				<input type="text" name="firstname" placeholder="First name">
				<br><br>
				<input type="text" name="lastname" placeholder="Last name">
				<br><br>
				<input type="text" name="email" placeholder="E-mail">
				<br><br>
				<input type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username">
				<br><br>
				<input type="password" name="pass" placeholder="Password">
				<br><br>
				<input type="password" name="repass" placeholder="Re-type Password">
				<br><br>
				<select name="campus">
					  <option value="1">Downtown Campus</option>
					  <option value="2">North Campus</option>
					  <option value="3">South Campus</option>
					  <option value="4">Talamban Campus</option>
				</select>
				<br><br>
				<select name="usertype">
					  <option value="Faculty">Faculty</option>
					  <option value="Chairman">Chairman</option>
					  <option value="Office">Office</option>
					  <option value="SOC">Student Organization - Co-Curricular</option>
					  <option value="SOE">Student Organization - Extra-Curricular</option>
				</select>
				<br><br>
				<select name="college">
					  <option value="1">SBE</option>
					  <option value="2">SLG</option>
					  <option value="3">High School - North Campus</option>
					  <option value="4">COED</option>
					  <option value="5">High School - Soutth Campus</option>
					  <option value="6">CAS</option>
					  <option value="7">CAFA</option>
					  <option value="8">COE</option>
					  <option value="9">SHCP</option>
				</select>
				<br><br>
				<input type="text" name="officeName" placeholder="Office name">
				<br><br>
				<input type="text" name="SOName" placeholder="Student Organization name">
				<br><br>
				<input type="submit" value="Submit">
			</fieldset>
		</form>

	</body>
</html>